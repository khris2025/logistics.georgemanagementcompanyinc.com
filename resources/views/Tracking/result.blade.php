<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Track Package</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <!-- Tailwind CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

  <style>
    #map {
      height: 500px;
      width: 100%;
      border-radius: 0.5rem;
    }
  </style>
</head>
<body class="bg-white text-gray-800 font-sans leading-relaxed">

  <!-- Header -->
  <header class="bg-gray-900 text-white py-8 px-6 md:px-20">
    <div class="max-w-6xl mx-auto">
      <h1 class="text-3xl font-bold mb-1">📦 Package Tracking</h1>
      <p class="text-gray-300 text-sm">Real-time updates on your delivery status and current location</p>
    </div>
  </header>

  <!-- Main Content -->
  <section class="py-10 px-6 md:px-20">
    <div class="max-w-6xl mx-auto space-y-10">

      <!-- Tracking Info -->
      <div class="flex flex-col md:flex-row justify-between items-start md:items-center">
        <div>
          <h2 class="text-2xl font-semibold mb-1">Tracking ID: 
            <span class="text-gray-700">{{ $package->tracking_number }}</span>
          </h2>
          {{-- <p class="text-sm text-gray-500">Last updated: {{ now()->format('F j, Y – g:i A') }}</p> --}}
        </div>
        <span class="mt-4 md:mt-0 inline-block bg-yellow-100 text-black-800 px-4 py-1 rounded-full text-sm font-medium capitalize">
         Package Status:  {{ $package->status }}
        </span>
      </div>

      <!-- Info Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-12 text-sm">
        <!-- Sender & Receiver -->
        <div class="space-y-6">
          <div>
            <h3 class="text-gray-600 font-semibold mb-1">Sender</h3>
            <p><strong>Name:</strong> {{ $package->sendersname }}</p>
            <p><strong>Email:</strong> {{ $package->sendersemail }}</p>
            <p><strong>Pickup Address:</strong> {{ $package->pickup_address }}</p>
          </div>
          <div>
            <h3 class="text-gray-600 font-semibold mb-1">Receiver</h3>
            <p><strong>Name:</strong> {{ $package->recieversname }}</p>
            <p><strong>Email:</strong> {{ $package->recieversemail }}</p>
            <p><strong>Phone:</strong> {{ $package->recievers_phone }}</p>
            <p><strong>Dropoff Address:</strong> {{ $package->dropoff_address }}</p>
          </div>
        </div>

        <!-- Shipment & Schedule -->
        <div class="space-y-6">
          <div>
            <h3 class="text-gray-600 font-semibold mb-1">Shipment Details</h3>
            <p><strong>Product:</strong> {{ $package->product_name }}</p>
            <p><strong>Weight:</strong> {{ $package->weight }}</p>
            <p><strong>Shipping Mode:</strong> {{ $package->type_shipment }}</p>
          </div>
          <div>
            <h3 class="text-gray-600 font-semibold mb-1">Schedule</h3>
            <p><strong>Pickup Date:</strong> {{ \Carbon\Carbon::parse($package->pickup_date)->format('F j, Y') }}</p>
            <p><strong>Expected Delivery:</strong> {{ \Carbon\Carbon::parse($package->date)->format('F j, Y') }}</p>
            <p><strong>Total Freight:</strong> {{ $package->total_freight }}</p>
          </div>
        </div>
      </div>

        <div id="map"></div>
        <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
        <script src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.css"/>

        <script>
        // Coordinates from Laravel
        var pickup = [{{ $package->pickup_lat }}, {{ $package->pickup_lng }}];
        var dropoff = [{{ $package->dropoff_lat }}, {{ $package->dropoff_lng }}];
        var current = [{{ $package->current_lat }}, {{ $package->current_lng }}];

        // Initialize map
        var map = L.map('map').setView(pickup, 6);

        // Add OpenStreetMap tiles
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png').addTo(map);

        // Add Pickup marker
        L.marker(pickup).addTo(map).bindPopup("<b>Pickup</b><br>{{ $package->pickup_address }}");

        // Add Drop-off marker
        L.marker(dropoff).addTo(map).bindPopup("<b>Drop-off</b><br>{{ $package->dropoff_address }}");

        // Add Current package marker
        L.marker(current, {icon: L.icon({
            iconUrl: 'https://cdn-icons-png.flaticon.com/512/679/679720.png', // package icon
            iconSize: [32, 32]
        })}).addTo(map).bindPopup("<b>Package Current Location</b>");

        // Draw route
        L.Routing.control({
            waypoints: [
                L.latLng(pickup[0], pickup[1]),
                L.latLng(dropoff[0], dropoff[1])
            ],
            createMarker: function() { return null; } // avoid duplicate markers
        }).addTo(map);
        </script>


      <!-- Map -->
      {{-- <div>
        <h3 class="text-gray-700 font-semibold mb-2 text-lg">📍 Current Location</h3>
        <div id="map" class="shadow border border-gray-200"></div>
      </div> --}}

    </div>
  </section>

  <!-- Leaflet JS -->
  {{-- <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
  <script>
    const currentLat = {{ $package->current_lat ?? $package->pickup_lat }};
    const currentLng = {{ $package->current_lng ?? $package->pickup_lng }};

    const map = L.map('map').setView([currentLat, currentLng], 13);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);

    L.marker([currentLat, currentLng])
      .addTo(map)
      .bindPopup('Current package location 📦')
      .openPopup();
  </script> --}}
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = 'da8e4e23973541f2c7a823f11cbbd4eb6fd63307';
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName('script')[0];c=d.createElement('script');
  c.type='text/javascript';c.charset='utf-8';c.async=true;
  c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
})(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>

</body>
</html>
