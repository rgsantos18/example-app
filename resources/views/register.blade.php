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
                            <h4>New here?</h4>
                            <h6 class="fw-light">Signing up is easy. It only takes a few steps</h6>
                            <form class="pt-3 needs-validation" novalidate action="/register" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text"
                                        class="form-control form-control-lg {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                        name="name" id="name" placeholder="Name" value="{{ old('name') }}"
                                        required>
                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @else
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Please provide a name</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="email"
                                        class="form-control form-control-lg {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                        name="email" id="email" placeholder="Email" value="{{ old('email') }}"
                                        required>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @else
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Please provide an email</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="text"
                                        class="form-control form-control-lg {{ $errors->has('username') ? 'is-invalid' : '' }}"
                                        name="username" id="username" placeholder="Username" value="{{ old('username') }}"
                                        required>
                                    @if ($errors->has('username'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('username') }}</strong>
                                        </span>
                                    @else
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Please provide an username</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password"
                                        class="form-control form-control-lg {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                        name="password" id="password" placeholder="Password" value="{{ old('password') }}"
                                        required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @else
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Please provide an password</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <input type="password"
                                        class="form-control form-control-lg {{ $errors->has('confirm_password') ? 'is-invalid' : '' }}"
                                        name="confirm_password" id="confirm_password" placeholder="Confirm Password"
                                        required>
                                    @if ($errors->has('confirm_password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('confirm_password') }}</strong>
                                        </span>
                                    @else
                                        <span class="invalid-feedback" role="alert">
                                            <strong>Please confirm password</strong>
                                        </span>
                                    @endif
                                </div>
                                <div class="mb-4">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input"> I agree to all Terms &
                                            Conditions </label>
                                    </div>
                                </div>
                                <div class="mt-3 d-grid gap-2">
                                    <button type="submit"
                                        class="btn btn-block btn-primary btn-lg fw-medium auth-form-btn">SIGN
                                        UP</button>
                                </div>
                                <div class="text-center mt-4 fw-light"> Already have an account? <a
                                        href="{{ url('/') }}" class="text-primary">Login</a>
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
