@extends('Admin.layout.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-7">
            <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">Add User</h3></div>
                <div class="card-body">
                    <form method="POST" action="{{route('users.store')}}">
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <div class="form-floating mb-3 mb-md-0">
                                    <input class="form-control" id="inputFirstName" type="text" placeholder="Name" name="name" />
                                    <label for="inputFirstName">Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input class="form-control" id="inputLastName" type="password" placeholder="Password" name="password" />
                                    <label for="inputLastName">Password</label>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input class="form-control" id="inputLastName" type="email" placeholder="Email" name="email" />
                                <label for="inputLastName">Email</label>
                            </div>
                        </div>
                        <div class="mb-3 btn-grp col-md-6">
                            <button type="submit" class="btn btn-primary">Add</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection
