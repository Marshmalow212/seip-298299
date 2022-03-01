@extends('Admin.layout.master')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Product</h3></div>
                <div class="card-body">
                    <form method="POST" action="{{route('products.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Product Name" name="name" />
                                    <label for="inputFirstName">Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="inputLastName" type="text" placeholder="Category Name" name="category_name" />
                                    <label for="inputLastName">Category</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="inputLastName" type="text" placeholder="Brand Name" name="brand_name" />
                                    <label for="inputLastName">Brand</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="inputLastName" type="text" placeholder="" name="description" />
                                    <label for="inputLastName">Description</label>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="formFileSm" class="form-label">Image</label>
                                <input class="form-control form-control-sm" id="formFileSm" type="file" name="image">
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault" name="status" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Status
                                </label>
                            </div>
                            <div class="mb-3 btn-grp col-md-6">
                                <button type="submit" class="btn btn-primary">Add</button>
                            </div>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
