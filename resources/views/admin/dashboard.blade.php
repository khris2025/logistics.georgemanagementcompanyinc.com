@extends('admin.layouts.app')
@section('content')

<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <h4 class="mb-sm-0 font-size-18">Create New Tracking</h4>
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-12 col-lg-12">
               
               <div class="tab-content">
                  <div class="tab-pane active" id="overview" role="tabpanel">
                     <div class="card">
                        <div class="card-header">
                           <h5 class="card-title mb-0">Profile</h5>
                        </div>
                        <div class="card-body">
                           <div>
                              <div class="pb-3">
                                 <div class="row">
                                    <div class="col-lg-12">
                                       <div>
                                          @if(session('success'))
                                             <p style="color: green">{{ session('success') }}</p>
                                          @endif
                                          @if ($errors->any())
                                             <div class="alert alert-danger">
                                                <ul>
                                                      @foreach ($errors->all() as $error)
                                                         <li>{{ $error }}</li>
                                                      @endforeach
                                                </ul>
                                             </div>
                                          @endif
                                         <form action="{{ route('packages.store') }}" method="post">
                                             @csrf

                                             <div class="row">
                                                <div class="col-md-6">
                                                      <div class="mb-3">
                                                         <label class="form-label">Sender's Name</label>
                                                         <input type="text" class="form-control" name="sendersname" value="{{ old('sendersname') }}">
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="mb-3">
                                                         <label class="form-label">Sender's Email</label>
                                                         <input type="email" class="form-control" name="sendersemail" value="{{ old('sendersemail') }}">
                                                      </div>
                                                </div>
                                             </div>

                                             <div class="row">
                                                <div class="col-md-6">
                                                      <div class="mb-3">
                                                         <label class="form-label">Receiver's Name</label>
                                                         <input type="text" class="form-control" name="recieversname" value="{{ old('recieversname') }}">
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="mb-3">
                                                         <label class="form-label">Receiver's Email</label>
                                                         <input type="email" class="form-control" name="recieversemail" value="{{ old('recieversemail') }}">
                                                      </div>
                                                </div>
                                             </div>

                                             <div class="row">
                                                <div class="col-md-6">
                                                      <div class="mb-3">
                                                         <label class="form-label">Receiver's Phone Number</label>
                                                         <input type="text" class="form-control" name="recievers_phone" value="{{ old('recievers_phone') }}">
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="mb-3">
                                                         <label class="form-label">Weight of Goods</label>
                                                         <input type="text" class="form-control" name="weight" value="{{ old('weight') }}">
                                                      </div>
                                                </div>
                                             </div>

                                             <div class="row">
                                                <div class="col-md-6">
                                                      <div class="mb-3">
                                                         <label>Pickup Address</label>
                                                         <input type="text" name="pickup_address" class="form-control" value="{{ old('pickup_address') }}" required>
                                                         <br>
                                                         <label>Pickup Latitude</label>
                                                         <input type="number" name="pickup_lat" step="any" class="form-control" value="{{ old('pickup_lat') }}" required>
                                                         <br>
                                                         <label>Pickup Longitude</label>
                                                         <input type="number" name="pickup_lng" step="any" class="form-control" value="{{ old('pickup_lng') }}" required>
                                                      </div>
                                                </div>

                                                <div class="col-md-6">
                                                      <div class="mb-3">
                                                         <label>Dropoff Address</label>
                                                         <input type="text" name="dropoff_address" class="form-control" value="{{ old('dropoff_address') }}" required>
                                                         <br>
                                                         <label>Dropoff Latitude</label>
                                                         <input type="number" name="dropoff_lat" step="any" class="form-control" value="{{ old('dropoff_lat') }}" required>
                                                         <br>
                                                         <label>Dropoff Longitude</label>
                                                         <input type="number" name="dropoff_lng" step="any" class="form-control" value="{{ old('dropoff_lng') }}" required>
                                                      </div>
                                                </div>
                                             </div>

                                             <div class="row">
                                                <div class="col-md-6">
                                                      <div class="mb-3">
                                                         <label>Expected Delivery Date</label>
                                                         <input type="date" class="form-control" name="date" value="{{ old('date') }}">
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="mb-3">
                                                         <label>Pickup Date</label>
                                                         <input type="date" class="form-control" name="pickup_date" value="{{ old('pickup_date') }}">
                                                      </div>
                                                </div>
                                             </div>

                                             <div class="row">
                                                <div class="col-md-6">
                                                      <div class="mb-3">
                                                         <label>Type of Shipment</label>
                                                         <input type="text" class="form-control" name="type_shipment" value="{{ old('type_shipment') }}">
                                                      </div>
                                                </div>
                                                <div class="col-md-6">
                                                      <div class="mb-3">
                                                         <label>Product Name</label>
                                                         <input type="text" class="form-control" name="product_name" value="{{ old('product_name') }}">
                                                      </div>
                                                </div>
                                             </div>

                                             <div class="row">
                                                <div class="col-md-6">
                                                      <div class="mb-3">
                                                         <label>Total Freight</label>
                                                         <input type="text" class="form-control" name="total_freight" value="{{ old('total_freight') }}">
                                                      </div>
                                                </div>
                                             </div>

                                             <div class="mt-4">
                                                <button type="submit" class="btn btn-primary">Create Package</button>
                                             </div>
                                          </form>

                                       </div>
                                    </div>
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                       <div class="modal-dialog modal-dialog-centered" role="document">
                                          <div class="modal-content">
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

{{-- <script>
// Function to fetch coordinates using Nominatim API
function getCoordinates(address, latInput, lngInput) {
    $.get('https://nominatim.openstreetmap.org/search', {
        q: address,
        format: 'json',
        limit: 1
    }, function(data) {
        if (data.length > 0) {
            $(latInput).val(data[0].lat);
            $(lngInput).val(data[0].lon);
        } else {
            alert('Location not found for: ' + address);
        }
    });
}

// Trigger when address fields change
$('#pickup_address').on('change', function() {
    getCoordinates($(this).val(), '#pickup_lat', '#pickup_lng');
});

$('#dropoff_address').on('change', function() {
    getCoordinates($(this).val(), '#dropoff_lat', '#dropoff_lng');
});
</script> --}}


@endsection