@extends('unauth.layouts.index')
@section('content')

@error('message')
   <script>
      Swal.fire({
         icon: 'error',
         title: 'Oops...',
         text: @json($message),
      });
   </script>
@enderror
@if(session('success'))
   <script>
      Swal.fire({
         icon: 'success',
         title: 'Success',
         text: @json(session('success')),
      });
   </script>
@endif





<div class="container py-5 h-100">
   <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
         <div class="card rounded-3 text-black">
            <div class="row g-0">
               <div class="col-lg-6">
                  <div class="card-body p-md-5 mx-md-4">

                     {{-- Display validation errors --}}
                     @if ($errors->any())
                        <div class="alert alert-danger">
                           <ul class="mb-0">
                              @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                              @endforeach
                           </ul>
                        </div>
                     @endif

                     <form action="{{ route('admin.login') }}" method="POST">
                        @csrf
                        <p>Please Login to your Account</p>

                        {{-- Email --}}
                        <div class="form-outline mb-4">
                           <label class="form-label" for="email">Email</label>
                           <input 
                              type="email" 
                              id="email" 
                              name="email" 
                              value="{{ old('email') }}" 
                              class="form-control @error('email') is-invalid @enderror"
                              required
                           />
                           @error('email')
                              <div class="invalid-feedback">{{ $message }}</div>
                           @enderror
                        </div>

                        {{-- Password --}}
                        <div class="form-outline mb-4">
                           <label class="form-label" for="password">Password</label>
                           <div class="input-group">
                              <input 
                                 type="password" 
                                 name="password" 
                                 id="password" 
                                 class="form-control @error('password') is-invalid @enderror"
                                 required minlength="6"
                              />
                              <div class="input-group-append">
                                 <span class="input-group-text" onclick="togglePasswordVisibility()">
                                    <i class="fa fa-eye" id="togglePasswordIcon"></i>
                                 </span>
                              </div>
                              @error('password')
                                 <div class="invalid-feedback d-block">{{ $message }}</div>
                              @enderror
                           </div>
                        </div>

                        <script>
                           function togglePasswordVisibility() {
                              const passwordField = document.getElementById('password');
                              const togglePasswordIcon = document.getElementById('togglePasswordIcon');
                              if (passwordField.type === 'password') {
                                 passwordField.type = 'text';
                                 togglePasswordIcon.classList.remove('fa-eye');
                                 togglePasswordIcon.classList.add('fa-eye-slash');
                              } else {
                                 passwordField.type = 'password';
                                 togglePasswordIcon.classList.remove('fa-eye-slash');
                                 togglePasswordIcon.classList.add('fa-eye');
                              }
                           }
                        </script>

                        <a class="text-muted" href="forgot_password">Forgot password? Click Me</a>
                        <br><br>
                        
                        <input type="submit" value="Login" class="btn btn-outline-danger">
                        <hr>
                        <a class="text-muted" href="register">Don't have an account? Click Me</a>
                     </form>
                  </div>
               </div>
               <div class="col-lg-6 d-flex align-items-center gradient-custom-2"></div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
