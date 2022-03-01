@extends('Admin.layout.master')
@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Tables</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active">Products</li>
    </ol>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Products Table
        </div>
        <div class="card-body">
            <table id="datatablesSimple">
                <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Product Name</th>
                        <th>Category Name</th>
                        <th>Brand Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>SL No</th>
                        <th>Product Name</th>
                        <th>Category Name</th>
                        <th>Brand Name</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @php
                        $sl=0;
                    @endphp

                    @foreach ($products as $product)
                    <tr>
                        <td>{{++$sl}}</td>
                        <td>{{$product->name}}</td>
                        <td>{{$product->category_name}}</td>
                        <td>{{$product->brand_name}}</td>
                        <td>
                            <img src="{{asset('storage/uploads/'.$product->image)}}" alt="{{$product->image}}" class="img-fluid">
                        </td>
                        <td>
                            <div class="btn-group">

                                <form class="d-flex" action="{{route('products.destroy',$product->id)}}" method="post">
                                    <a class="btn btn-primary" href="{{route('products.edit',$product->id)}}">
                                        Edit
                                    </a>
                                    @csrf
                                    @method('Delete')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure?')">Delete</button>

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
@endsection
