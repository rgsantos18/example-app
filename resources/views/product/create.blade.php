@extends('layouts.app')
@section('content')
    <div class="row">
        <h4>Add Product</h4>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form action="/product" method="POST">
                        @csrf
                        <p>Description: </p>
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Price<sup class="text-danger">*</sup></td>
                                        <td><input type="number" name="price" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td>Stock<sup class="text-danger">*</sup></td>
                                        <td><input type="number" name="stock" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td>Description</td>
                                        <td>
                                            <textarea name="description" class="form-control" required></textarea>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Manufacturer<sup class="text-danger">*</sup></td>
                                        <td><input type="text" name="manufacturer" class="form-control" required></td>
                                    </tr>
                                    <tr>
                                        <td>Manufacturer Contact<sup class="text-danger">*</sup></td>
                                        <td><input type="text" name="manufacturer_contact" class="form-control" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Manufacturer Email<sup class="text-danger">*</sup></td>
                                        <td><input type="email" name="manufacturer_email" class="form-control" required>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Manufacturer Address</td>
                                        <td><input type="text" name="manufacturer_address" class="form-control"></td>
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
@endsection
