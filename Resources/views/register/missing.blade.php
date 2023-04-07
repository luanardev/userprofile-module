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
                    <p>Make sure you are registered in the HR system.</p>
                    <p>If you are not registered, please <a href="{{route('user.create.profile')}}">register here.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection

