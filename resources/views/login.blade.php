@extends('layouts.default')
@section('content')
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="{{ asset('assets/images/logo.svg') }}" alt="logo">
                            </div>
                            <h4>Hello! let's get started</h4>
                            <h6 class="fw-light">Sign in to continue.</h6>
                            @if (session('error'))
                                <div class="alert alert-sm alert-danger alert-dismissible fade show" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <form class="pt-3 needs-validation" novalidate action="/login" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text"
                                        class="form-control form-control-lg {{ $errors->has('user') ? 'is-invalid' : '' }}"
                                        id="user" name="user" placeholder="Username | Email"
                                        value="{{ old('user') }}" required>
                                    @if ($errors->has('user'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('user') }}</strong>
                                        </span>
                                    @else
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Please provide your email or username</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password"
                                        class="form-control form-control-lg {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                        id="password" name="password" placeholder="Password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @else
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Please provide your password</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="mt-3 d-grid gap-2">
                                    <button type="submit" class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn"
                                        href="{{ url('/') }}">SIGN IN</button>
                                </div>
                                <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input"> Keep me signed in </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Forgot password?</a>
                                </div>
                                <div class="mb-2 d-grid gap-2">
                                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                                        <i class="ti-facebook me-2"></i>Connect using facebook </button>
                                </div>
                                <div class="text-center mt-4 fw-light"> Don't have an account? <a
                                        href="{{ url('/register') }}" class="text-primary">Create</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>

    <script type="text/javascript">
        (function() {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }

                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    @endsectionec
