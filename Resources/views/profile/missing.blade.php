@extends('userprofile::layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="content-header">

            <div class="row mb-2">
                <div class="col-sm-6">
                    <h4 class="m-0">My Profile</h4>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('userprofile.home') }}">Home</a></li>
                        <li class="breadcrumb-item active">My Profile</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h5>Profile is missing</h5>
                    </div>
                </div>
                <div class="card-body">
                    <div class="callout callout-info">
                        <p>
                            Make sure you are registered in the HR system.
                            If you are not registered, <a style="text-decoration: none" class="btn btn-outline-primary"
                                                          href="{{route('user.create.profile')}}">Register here.</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

