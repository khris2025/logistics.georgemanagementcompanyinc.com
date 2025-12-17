<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use Illuminate\Support\Facades\Http; 
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;

class PackageController extends Controller
{
    //
     public function create()
    {
        return view('packagecreate');
    }

    public function store(Request $request)
    {
    $request->validate([
        'sendersname'       => 'required|string|max:255',
        'sendersemail'      => 'required|email|max:255',
        'recieversname'     => 'required|string|max:255',
        'recieversemail'    => 'required|email|max:255',
        'recievers_phone'   => 'required|string|max:20',
        'weight'            => 'required|string|min:0',

        // Admin will input coordinates + optional address text
        'pickup_lat'        => 'required|numeric',
        'pickup_lng'        => 'required|numeric',
        'dropoff_lat'       => 'required|numeric',
        'dropoff_lng'       => 'required|numeric',

        'date'              => 'required|date',
        'pickup_date'       => 'required|date',

        'type_shipment'     => 'required|string|max:100',
        'product_name'      => 'required|string|max:255',
        'total_freight'     => 'required|numeric|min:0',
    ]);

    // Optional: derive clean address from coordinates
    // $pickup_address  = $this->reverseGeocode($request->pickup_lat, $request->pickup_lng) ?? $request->pickup_address;
    // $dropoff_address = $this->reverseGeocode($request->dropoff_lat, $request->dropoff_lng) ?? $request->dropoff_address;

    // Reverse geocode pickup
    $pickup_address = $this->reverseGeocode(
        $request->pickup_lat,
        $request->pickup_lng
    );

    // Respect Nominatim rate limit (1 request / second)
    usleep(1100000); // 1.1 seconds

    // Reverse geocode dropoff
    $dropoff_address = $this->reverseGeocode(
        $request->dropoff_lat,
        $request->dropoff_lng
    );

    $trackingNumber = 'TRK-' . strtoupper(Str::random(10));

    

    $package = Package::create([
        'tracking_number'   => $trackingNumber,

        'sendersname'       => $request->sendersname,
        'sendersemail'      => $request->sendersemail,

        'recieversname'     => $request->recieversname,
        'recieversemail'    => $request->recieversemail,
        'recievers_phone'   => $request->recievers_phone,

        'weight'            => $request->weight,

        'pickup_address'    => $pickup_address,
        'pickup_lat'        => $request->pickup_lat,
        'pickup_lng'        => $request->pickup_lng,

        'dropoff_address'   => $dropoff_address,
        'dropoff_lat'       => $request->dropoff_lat,
        'dropoff_lng'       => $request->dropoff_lng,

        'current_lat'       => $request->pickup_lat,
        'current_lng'       => $request->pickup_lng,
        'status'            => 'preparing for shipping 🎉',

        'date'              => $request->date,
        'pickup_date'       => $request->pickup_date,

        'type_shipment'     => $request->type_shipment,
        'product_name'      => $request->product_name,
        'total_freight'     => $request->total_freight,
    ]);

    return redirect()->back()->with('success', 'Package created successfully!');    
    }

    // private function reverseGeocode($lat, $lng)
    // {
    // $response = Http::withHeaders([
    //     'User-Agent' => 'LaravelApp/1.0 (youremail@example.com)'
    // ])->get('https://nominatim.openstreetmap.org/reverse', [
    //     'lat' => $lat,
    //     'lon' => $lng,
    //     'format' => 'json',
    // ]);

    // if ($response->ok() && isset($response->json()['display_name'])) {
    //     return $response->json()['display_name'];
    // }

    // return null;
    // }

    private function reverseGeocode($lat, $lng)
{
    return Cache::remember(
        "reverse_geocode:$lat:$lng",
        now()->addDay(), // cache for 24 hours
        function () use ($lat, $lng) {
            try {
                $response = Http::withOptions([
                        'force_ip_resolve' => 'v4', // avoid IPv6 issues
                    ])
                    ->withHeaders([
                        'User-Agent' => 'LaravelApp/1.0 (contact@yourdomain.com)',
                        'Accept'     => 'application/json',
                    ])
                    ->timeout(8)        // never hang for 30s
                    ->retry(1, 1000)    // retry once after 1s
                    ->get('https://nominatim.openstreetmap.org/reverse', [
                        'lat'    => $lat,
                        'lon'    => $lng,
                        'format' => 'json',
                    ]);

                return $response->json('display_name');
            } catch (\Throwable $e) {
                logger()->warning('Reverse geocode failed', [
                    'lat' => $lat,
                    'lng' => $lng,
                    'error' => $e->getMessage(),
                ]);

                return null;
            }
        }
    );
}



    public function managePackages(){
        $allPackages = Package::orderBy('created_at', 'desc')->get();
        return view('admin.managePackages', compact('allPackages'));
    }


    public function trackPackages(Request $request){

        $request->validate([
            'trackingnumber'       => 'required|string|max:255',
        ]);

        // Find package by tracking number
        $package = Package::where('tracking_number', $request->trackingnumber)->first();

        // Check if package exists
        if (!$package) {
            return redirect()->back()->with('error', 'No package found with that tracking number.');
        }

        // Send package data to the tracking view
        return view('Tracking.result', compact('package'));


    }


    public function editPackage($id)
    {
        $package = Package::findOrFail($id);
        return view('admin.editPackage', compact('package'));
    }


    // Handle the form submission and update the package
    public function updatePackage(Request $request, $id)
    {
       
        $package = Package::findOrFail($id);

        

       

       

        $request->validate([
            'sendersname'     => 'required|string|max:255',
            'sendersemail'    => 'required|email|max:255',
            'recieversname'   => 'required|string|max:255',
            'recieversemail'  => 'required|email|max:255',
            'recievers_phone' => 'required|string|max:20',
            'weight'          => 'required|string',
            'pickup_address' => 'required|string|max:255',
            'pickup_lat'     => 'required|numeric',
            'pickup_lng'     => 'required|numeric',
            'dropoff_address'=> 'required|string|max:255',
            'dropoff_lat'    => 'required|numeric',
            'dropoff_lng'    => 'required|numeric',
            'date'           => 'required|date',
            'pickup_date'    => 'required|date',
            'type_shipment'  => 'required|string|max:100',
            'product_name'   => 'required|string|max:255',
            'total_freight'  => 'required|numeric',
            'status'         => 'required|string|max:255',
           
            
            
            
        ]);

       

       

        

        

        

        

        $package->update([
            'sendersname'     => $request->sendersname,
            'sendersemail'    => $request->sendersemail,
            'recieversname'   => $request->recieversname,
            'recieversemail'  => $request->recieversemail,
            'recievers_phone' => $request->recievers_phone,
            'weight'         => $request->weight,
            'pickup_address' => $request->pickup_address,
            'pickup_lat'     => $request->pickup_lat,
            'pickup_lng'     => $request->pickup_lng,
            'dropoff_address'=> $request->dropoff_address,
            'dropoff_lat'    => $request->dropoff_lat,
            'dropoff_lng'    => $request->dropoff_lng,
            'date'           => $request->date,
            'pickup_date'    => $request->pickup_date,
            'type_shipment'  => $request->type_shipment,
            'product_name'   => $request->product_name,
            'total_freight'  => $request->total_freight,
            'status'         => $request->status,
            
            
        ]);

        return redirect()->route('packages.edit', $package->id)->with('success', 'Package updated successfully!');
    }








    


   
    public function updateMap(Request $request,$id){
        
       $package = Package::findOrFail($id);

        $package->update([
            'current_lat' => $request->current_lat,
            'current_lng' => $request->current_lng,
        ]);

        return redirect()->back()->with('success', 'Package updated successfully!');
    }

   public function destroy($id)
    {
        $package = Package::findOrFail($id);
        $package->delete();

        return redirect()->back()->with('success', 'Package deleted successfully!');
    }

}
