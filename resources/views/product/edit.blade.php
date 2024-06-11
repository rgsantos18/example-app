@extends('layouts.app')
@section('content')
    <div class="row">
        <h4>Edit | {{ $product['product_name'] ?? '' }}</h4>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form action="/product" class="needs-validation" novalidate method="POST">
                        @csrf
                        <p>Description: </p>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    {{-- <tr>
                                        <td>Currency<sup class="text-danger">*</sup></td>
                                        <td>
                                            <select name="currency" id=""
                                                class="form-select {{ $errors->has('currency') ? 'is-invalid' : '' }}"
                                                required>
                                                <option value="">select</option>
                                                <option value="USD">USD</option>
                                                <option value="EUR">EUR</option>
                                                <option value="INR">INR</option>
                                            </select>

                                            @if ($errors->has('currency'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('currency') }}</strong>
                                                </span>
                                            @else
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>Please provide a product name</strong>
                                                </span>
                                            @endif
                                        </td>
                                    </tr> --}}
                                    <tr>
                                        <td>Product Name<sup class="text-danger">*</sup></td>
                                        <td>
                                            <input type="text" name="product_name"
                                                class="form-control {{ $errors->has('product_name') ? 'is-invalid' : '' }}"
                                                value="{{ old('product_name') }}" required placeholder="Product Name">

                                            @if ($errors->has('product_name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('product_name') }}</strong>
                                                </span>
                                            @else
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>Please provide a product name</strong>
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Price<sup class="text-danger">*</sup></td>
                                        <td>
                                            <input type="number" name="price" class="form-control"
                                                value="{{ old('price') }}" required placeholder="Price">
                                            @if ($errors->has('price'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('price') }}</strong>
                                                </span>
                                            @else
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>Please provide a price</strong>
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Stock<sup class="text-danger">*</sup></td>
                                        <td>
                                            <input type="number" name="stock"
                                                class="form-control {{ $errors->has('stock') ? 'is-invalid' : '' }}"
                                                value="{{ old('stock') }}" required placeholder="Stock">
                                            @if ($errors->has('stock'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('stock') }}</strong>
                                                </span>
                                            @else
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>Please provide a stock</strong>
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td>
                                            <textarea name="description" class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" required
                                                placeholder="Description"></textarea>
                                            @if ($errors->has('description'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('description') }}</strong>
                                                </span>
                                            @else
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>Please provide a description</strong>
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Manufacturer<sup class="text-danger">*</sup></td>
                                        <td>
                                            <input type="text" name="manufacturer" class="form-control" required
                                                placeholder="Manufacturer">
                                            @if ($errors->has('manufacturer'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('manufacturer') }}</strong>
                                                </span>
                                            @else
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>Please provide a manufacturer</strong>
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Manufacturer Contact<sup class="text-danger">*</sup></td>
                                        <td>
                                            <input type="text" name="manufacturer_contact" class="form-control" required
                                                placeholder="Contact No.">
                                            @if ($errors->has('manufacturer_contact'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('manufacturer_contact') }}</strong>
                                                </span>
                                            @else
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>Please provide a manufacturer contact</strong>
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Manufacturer Email<sup class="text-danger">*</sup></td>
                                        <td>
                                            <input type="email" name="manufacturer_email" class="form-control" required
                                                placeholder="Email">
                                            @if ($errors->has('manufacturer_email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('manufacturer_email') }}</strong>
                                                </span>
                                            @else
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>Please provide a manufacturer email</strong>
                                                </span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Manufacturer Address</td>
                                        <td>
                                            <input type="text" name="manufacturer_address" class="form-control"
                                                placeholder="Not required">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <p class="text-center mt-3">
                            <a href="/product" class="btn btn-light mx-2"><i class="mdi mdi-xmark"></i>
                                Cancel</a> <button type="submit" class="btn btn-primary mx-2"><i class="mdi mdi-check"></i>
                                Save</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
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
@endsection
