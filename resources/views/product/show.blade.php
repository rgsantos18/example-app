@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Product: {{ $product['product_name'] ?? '' }}</h4>
                    <p>Description: </p>
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td>Price</td>
                                    <td>{{ $product['price'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>Stock</td>
                                    <td>{{ $product['stock'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>Description</td>
                                    <td>{{ $product['description'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>Manufacturer</td>
                                    <td>{{ $product['manufacturer'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>Manufacturer Contact</td>
                                    <td>{{ $product['manufacturer_contact'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>Manufacturer Email</td>
                                    <td>{{ $product['manufacturer_email'] ?? '' }}</td>
                                </tr>
                                <tr>
                                    <td>Manufacturer Address</td>
                                    <td>{{ $product['manufacturer_address'] ?? '' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p class="text-center mt-3">
                        <a href="/product" class="text-decoration-none mx-2"><i class="mdi mdi-keyboard-backspace"></i>
                            Back</a> |
                        <a href="#" class="text-decoration-none mx-2"><i class="mdi mdi-pencil"></i> Edit</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
