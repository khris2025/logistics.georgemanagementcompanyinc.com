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

                <div class="text-center">
                <!--<img src="{{ asset('assets/images/bit-blockdigital_images/logomain.png') }}"-->
                <!--    style="width: 185px;" alt="logo">-->
                {{-- <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4> --}}
                </div>
                
                <form action="{{ route('admin.register.submit') }}" method="POST">
                @csrf
                <p>Please Create your Account</p>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(request()->has('ref'))
                    <input type="hidden" name="ref" value="{{ request()->query('ref') }}">
                @endif

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example11">Name</label>
                    <input type="text" id="form2Example11" class="form-control" name="name"
                    placeholder="" value="{{ old('name') }} "/>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Email</label>
                    <input type="email" id="form2Example22" name="email" class="form-control" value="{{ old('email') }}"/>
                </div>

               

                
               

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Password</label>
                    <div class="input-group">
                        <input type="password" name="password" id="password" class="form-control" />
                        <div class="input-group-append">
                            <span class="input-group-text" onclick="togglePasswordVisibility('password')">
                                <i class="fa fa-eye" id="togglePasswordIcon"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <div class="form-outline mb-4">
                    <label class="form-label" for="form2Example22">Confirm Password</label>
                    <div class="input-group">
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" />
                        <div class="input-group-append">
                            <span class="input-group-text" onclick="togglePasswordVisibility('password_confirmation')">
                                <i class="fa fa-eye" id="toggleConfirmPasswordIcon"></i>
                            </span>
                        </div>
                    </div>
                </div>

                <script>
                    function togglePasswordVisibility(fieldId) {
                        const field = document.getElementById(fieldId);
                        const icon = field.nextElementSibling.querySelector('i');
                        if (field.type === 'password') {
                            field.type = 'text';
                            icon.classList.remove('fa-eye-slash');
                            icon.classList.add('fa-eye');
                        } else {
                            field.type = 'password';
                            icon.classList.remove('fa-eye');
                            icon.classList.add('fa-eye-slash');
                        }
                    }
                </script>
                <input type="submit" value="Get Started" class="btn btn-outline-danger">
                <hr>

                <a class="text-muted" href="login">Already have an account? Click Me</a>
             



                {{-- <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">Log
                    in</button>
                    <a class="text-muted" href="#!">Forgot password?</a>
                </div> --}}

                {{-- <button type="submit" class="btn btn-outline-danger">Create Account</button> --}}
               




                </form>

            </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                {{-- <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                    <h4 class="mb-4">We are more than just a company</h4>
                    <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                    exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div> --}}
            </div>
        </div>
        </div>
    </div>
    </div>
    </div>
@endsection