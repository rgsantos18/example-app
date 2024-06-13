@extends('layouts.app')

@section('search')
    <form class="search-form" action="/product/search" method="GET">
        <i class="icon-search"></i>
        <input type="search" name="q" class="form-control" placeholder="Search Here" title="Search here"
            value="{{ request('q') }}">
    </form>
@endsection

@section('content')
    <h1>Products</h1>
    <div class="row my-3">
        <p>
            <a href="/product/add" class="btn btn-sm btn-primary"><i class="mdi mdi-plus"></i> Add</a>
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">{{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            @if (request('q'))
                <span class="me-5" style="float: right!important;">Search result for:
                    <strong>{{ request('q') }}</strong></span>
            @endif
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
                                <div class="dropdown">
                                    <button class="btn btn-sm border-0" type="button" id="dropdownMenuButton"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                        <i class="mdi mdi-dots-vertical"></i>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <li>
                                            <a class="dropdown-item" href="/product/{{ $product['id'] }}"><i
                                                    class="mdi mdi-eye"></i> View</a>
                                        </li>
                                        <li>
                                            <a class="dropdown-item" href="/product/{{ $product['id'] }}/edit"><i
                                                    class="mdi mdi-pencil"></i> Edit</a>
                                        </li>
                                        <li>
                                            <form action="/product/{{ $product['id'] }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="hidden" name="current_page"
                                                    value="{{ $products['current_page'] }}" />

                                                <button type="button" class="dropdown-item text-danger"
                                                    onclick="(confirm('Are you sure?') ? this.parentElement.submit() : '')"><i
                                                        class="mdi mdi-delete"></i>
                                                    Delete</button>
                                            </form>
                                        </li>
                                    </ul>
                                </div>
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

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                <!-- First Page Url -->
                <li class="page-item"><a class="page-link {{ $products['current_page'] == 1 ? 'disabled' : '' }}"
                        href="{{ $products['first_page_url'] ?? '#' }}">First Page</a></li>

                @foreach ($products['links'] as $page)
                    <li class="page-item"><a class="page-link {{ $page['active'] ? 'active' : '' }}"
                            href="{{ $page['url'] ?? '#' }}">{!! $page['label'] !!}</a></li>
                @endforeach

                <!-- Last Page Url -->
                <li class="page-item"><a
                        class="page-link {{ $products['current_page'] == $products['last_page'] ? 'disabled' : '' }}"
                        href="{{ $products['last_page_url'] ?? '#' }}">Last Page</a></li>
            </ul>
        </nav>
    </div>
@endsection
