@extends('backend.layouts.master')

@section('product_content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="page-titles">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">admin</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0)">Product lists</a></li>
                </ol>
            </div>


            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Well Done!</strong> {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Product list</h4>
                    </div>



                    <div class="card-body">
                        <div class="table-responsive">


                            <a href="{{ route('product.create') }}" class="btn btn-primary  mb-3"> Add Your Products</a>



                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th class="width50">
                                            <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                                <input type="checkbox" class="custom-control-input" id="checkAll"
                                                    required="">
                                                <label class="custom-control-label" for="checkAll"></label>
                                            </div>
                                        </th>
                                        <th><strong>Serial NO.</strong></th>
                                        <th><strong>NAME</strong></th>
                                        <th><strong>Price</strong></th>
                                        <!-- <th><strong>Caategory Id</strong></th>
                                                                                                                                                        <th><strong>Status</strong></th> -->
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($data as $leo)
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox checkbox-success check-lg mr-3">
                                                    <input type="checkbox" class="custom-control-input" id="customCheckBox2"
                                                        required="">
                                                    <label class="custom-control-label" for="customCheckBox2"></label>
                                                </div>
                                            </td>
                                            <td><strong>{{ $loop->iteration }}</strong></td>
                                            <td>
                                                <div class="d-flex align-items-center"><img
                                                        src="{{ asset('backend') }}/images/avatar/1.jpg"
                                                        class="rounded-lg mr-2" width="24" alt="" /> <span
                                                        class="w-space-no">{{ $leo->name }}</span></div>
                                            </td>
                                            <td>{{ $leo->price }}</td>
                                            <!-- <td>01 August 2020</td>
                                                                                                                                                        <td><div class="d-flex align-items-center"><i class="fa fa-circle text-success mr-1"></i> Successful</div></td> -->
                                            <td>

                                                <div class="d-flex">


                                                    <a href="{{ route('product.edit', $leo->id) }}"
                                                        class="btn btn-primary shadow btn-xs sharp mr-1"><i
                                                            class="fa fa-pencil"></i></a>


                                                    <form action="{{ route('product.destroy', $leo->id) }}" method="post"
                                                        style="display: inline-block">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger shadow btn-xs sharp"
                                                            onclick="return confirm('Are You Sure Want To Delete?')"><i
                                                                class="fa fa-trash"></i></button>
                                                        {{-- <a href="#" class="btn btn-danger shadow btn-xs sharp" onclick="return confirm('Are You Sure Want To Delete?')"><i class="fa fa-trash"></i></a> --}}
                                                    </form>


                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach




                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
        <br>
        <br>
