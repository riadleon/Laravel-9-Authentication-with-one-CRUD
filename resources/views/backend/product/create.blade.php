@extends('backend.layouts.master')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Form</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Element</a></li>
                </ol>
            </div>

            <div class="col-xl-10 col-lg-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add new Product</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form action="{{ route('product.store') }}" method="POST">

                                @csrf

                                <fieldset>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Add Here">
                                        @error('name')
                                            <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                        <br>
                                    </div>
                                    <div class="form-group">
                                        <label for="price">Price</label>
                                        <input name="price" id="price" type="text" class="form-control"
                                            placeholder="Add Price">\
                                        @error('price')
                                            <span class="text-danger"> {{ $message }}</span>
                                        @enderror
                                        <br>
                                    </div>


                                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <br>
        <br>
