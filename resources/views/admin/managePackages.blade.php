@extends('admin.layouts.app')
@section('content')
<div class="main-content">
   <div class="page-content">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12">
               <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                  <div class="page-title-right">
                     <ol class="breadcrumb m-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Admin</a></li>
                        <li class="breadcrumb-item active">Manage-Packages</li>
                     </ol>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xl-12">
               <div class="card">
                  <div class="card-header align-items-center d-flex">
                     <h4 class="card-title mb-0 flex-grow-1">Manage Packages</h4>
                     <div class="flex-shrink-0">
                        <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs" role="tablist">
                           <li class="nav-item">
                              <a class="nav-link active" data-bs-toggle="tab" href="#transactions-all-tab" role="tab">
                              Users 
                              </a>
                           </li>
                        </ul>
                        <!-- end nav tabs -->
                     </div>
                  </div>
                  <!-- end card header -->
                  <div class="card-body px-0">
                     <div class="tab-content">
                        <div class="tab-pane active" id="transactions-all-tab" role="tabpanel">
                           <div class="table-responsive px-3" data-simplebar >
                              <table id="datatable" class="table nowrap w-100">
                                 <thead>
                                    <tr>
                                       <th>Name</th>
                                       <th>Email</th>
                                       <th>Delivery Address</th>
                                       <th>Delivery Date</th>
                                       <th>Tracking ID</th>
                                       <th>Control</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    @foreach ($allPackages as $package)
                                        <tr>
                                            <td>{{ $package->sendersname }}</td>
                                            <td>{{ $package->sendersemail }}</td>
                                            <td>{{ $package->dropoff_address }}</td>
                                            <td>{{ \Carbon\Carbon::parse($package->date)->format('Y-m-d') }}</td>
                                            <td>{{ $package->tracking_number }}</td>
                                            <td>
                                                <!-- Example control buttons -->
                                                <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-sm btn-warning">Edit</a>
                                                <form action="{{ route('packages.destroy', $package->id) }}" method="POST" style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                 </tbody>
                              </table>
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
@endsection