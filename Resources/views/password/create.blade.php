@extends('userprofile::layouts.app')

@section('content')

    <div class="container-fluid">

        <div class="content-header">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0">Change Password</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('userprofile.home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Change Password</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <p>Make sure you use a strong password.</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">

                            <form action="{{route('password.store')}}" method="post">
                                @csrf

                                <div class="form-group row">
                                    <label for="password" class="col-lg-4 col-form-label text-md-right">Enter New
                                        Password</label>
                                    <div class="col-lg-8">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password" required autocomplete="current-password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
												<strong>{{ $message }}</strong>
											</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="password" class="col-lg-4 col-form-label text-md-right">Confirm
                                        Password</label>
                                    <div class="col-lg-8">
                                        <input id="password" type="password"
                                               class="form-control @error('password') is-invalid @enderror"
                                               name="password_confirmation" required autocomplete="current-password">
                                    </div>
                                </div>

                                <div class="form-group row">

                                    <label class="text-lg-right col-lg-4 col-form-label col-form-label-sm ">

                                    </label>
                                    <div class="col-lg-8">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

