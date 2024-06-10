@extends('layouts.app')
@section('content')
    <h1>Products</h1>
    <div class="row my-3">
        <p>
            <a href="/product/add" class="btn btn-sm btn-primary"><i class="mdi mdi-plus"></i> Add</a>
        </p>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Action</th>
                    <th>Id</th>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Description</th>
                    <th>Manufacturer</th>
                    <th>Manufacturer Phone</th>
                    <th>Manufacturer Email</th>
                    <th>Manufacturer Address</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                </thead>
                <tbody>
                    @foreach ($products['data'] as $product)
                        <tr>
                            <td>
                                <a href="/product/{{ $product['id'] }}">View</a>
                            </td>
                            <td>{{ $product['id'] }}</td>
                            <td>{{ $product['product_name'] }}</td>
                            <td>{{ $product['price'] }}</td>
                            <td>{{ $product['stock'] }}</td>
                            <td>{{ $product['description'] }}</td>
                            <td>{{ $product['manufacturer'] }}</td>
                            <td>{{ $product['manufacturer_contact'] }}</td>
                            <td>{{ $product['manufacturer_email'] }}</td>
                            <td>{{ $product['manufacturer_address'] }}</td>
                            <td>{{ $product['created_at'] }}</td>
                            <td>{{ $product['updated_at'] }}</td>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                @foreach ($products['links'] as $page)
                    <li class="page-item"><a class="page-link {{ $page['active'] ? 'active' : '' }}"
                            href="{{ $page['url'] ?? '#' }}">{!! $page['label'] !!}</a></li>
                @endforeach
            </ul>
        </nav>
    </div>
@endsection
