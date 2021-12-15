

@extends('layouts.admin')

@section('edit_profile')
active
@endsection

@section('content')

<!-- Container-fluid starts-->
<div class="container-fluid">
    @if(session('success'))
    <div class="alert alert-success">
        {{ (session('success')) }}
    </div>
    @endif

    <div class="row">

        <div class="col-xl-4 m-auto">
            <div class="card ">
                <div class="card-body">

                    <div class="tab-content" id="top-tabContent">

                        <div class="tab-pane fade show active">


                            <div class="account-setting deactivate-account">
                                <h5 class="f-w-600">Name Change</h5>
                                <div class="row">
                                    <div class="col">
                                        <form action="{{ route('admin.profile_name_update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <p>Your Old Name : {{ Auth::user()->name }}</p>
                                                <label>New Name</label>
                                                <input class="form-control @error('name') is-invalid @enderror"
                                                    value="{{ old('name') }}" type="text" name="name"
                                                    placeholder="Add New Name">
                                                @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <button type="sumit" class="btn btn-primary mt-2">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>


                            <div class="account-setting ">
                                <h5 style="padding-top: 45px" class="f-w-600">Email Change</h5>
                                <div class="row">
                                    <div class="col">
                                        <form action="{{ route('admin.profile_email_update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <p>Your Old Email : {{ Auth::user()->email }}</p>
                                                <label>New Email</label>
                                                <input class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ old('email') }}" type="email" name="email"
                                                    placeholder="Add New Email">
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <button type="sumit" class="btn btn-primary mt-2">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="account-setting deactivate-account">
                                <h5 style="padding-top: 45px" class="f-w-600">Password Change</h5>
                                <div class="row">
                                    <div class="col">
                                        <form action="{{ route('admin.profile_password_update') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input class="form-control @error('old_password') is-invalid @enderror"
                                                    value="{{ old('old_password') }}" type="text" name="old_password"
                                                    placeholder="Old Password">
                                                @error('old_password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input class="form-control @error('password') is-invalid @enderror"
                                                    value="{{ old('password') }}" type="text" name="password"
                                                    placeholder="New Password">
                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Password Confirmation</label>
                                                <input
                                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                                    value="{{ old('password_confirmation') }}" type="text"
                                                    name="password_confirmation" placeholder="Password Confirmation">
                                                @error('password_confirmation')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <button type="sumit" class="btn btn-primary mt-2">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="col-xl-4">
            <div class="card tab2-card">
                <div class="card-body">

                    <div class="tab-content" id="top-tabContent">

                        <div class="tab-pane fade show active">

                            <div class="account-setting ">
                                <h5 class="f-w-600">Email Change</h5>
                                <div class="row">
                                    <div class="col">
                                        <form action="" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <p>Your Old Email : {{ Auth::user()->email }}</p>
                                                <label>New Email</label>
                                                <input class="form-control @error('email') is-invalid @enderror"
                                                    value="{{ old('email') }}" type="email" name="email"
                                                    placeholder="Add New Email">
                                                @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <button type="sumit" class="btn btn-primary mt-2">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="account-setting deactivate-account">
                                <h5 class="f-w-600">Password Change</h5>
                                <div class="row">
                                    <div class="col">
                                        <form action="" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input class="form-control @error('old_password') is-invalid @enderror"
                                                    value="{{ old('old_password') }}" type="text" name="old_password"
                                                    placeholder="Old Password">
                                                @error('old_password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input class="form-control @error('password') is-invalid @enderror"
                                                    value="{{ old('password') }}" type="text" name="password"
                                                    placeholder="New Password">
                                                @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>Password Confirmation</label>
                                                <input
                                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                                    value="{{ old('password_confirmation') }}" type="text"
                                                    name="password_confirmation" placeholder="Password Confirmation">
                                                @error('password_confirmation')
                                                <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <button type="sumit" class="btn btn-primary mt-2">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection

