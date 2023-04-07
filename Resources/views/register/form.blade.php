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
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <p>Create new profile</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3">

                            <div class="nav flex-column nav-pills offset-lg-1" id="v-pills-tab" role="tablist"
                                 aria-orientation="vertical">
                                <a href="{{route('user.create.profile')}}"
                                   class="nav-link {{request()->routeIs('user.create.profile')? 'active' : '' }}">
                                    Personal Info</a>
                                <a href="{{route('user.create.employment')}}"
                                   class="nav-link {{request()->routeIs('user.create.employment')? 'active': '' }}">
                                    Employment</a>
                                <a href="{{route('user.create.supervisor')}}"
                                   class="nav-link {{request()->routeIs('user.create.supervisor')? 'active': '' }}">
                                    Supervisor</a>
                                <a href="{{route('user.create.spouse')}}"
                                   class="nav-link {{request()->routeIs('user.create.spouse')? 'active': '' }}">
                                    Spouse</a>
                                <a href="{{route('user.create.kinsman')}}"
                                   class="nav-link {{request()->routeIs('user.create.kinsman')? 'active': '' }}"> Next
                                    of Kin</a>
                                <a href="{{route('user.create.dependants')}}"
                                   class="nav-link {{request()->routeIs('user.create.dependants')? 'active': '' }}">
                                    Dependants</a>
                                <a href="{{route('user.create.experience')}}"
                                   class="nav-link {{request()->routeIs('user.create.experience')? 'active': '' }}">
                                    Work Experience</a>
                                <a href="{{route('user.create.qualifications')}}"
                                   class="nav-link {{request()->routeIs('user.create.qualifications')? 'active': '' }}">
                                    Qualifications</a>
                                <a href="{{route('user.create.referees')}}"
                                   class="nav-link {{request()->routeIs('user.create.referees')? 'active': '' }}">
                                    Referees</a>
                                <a href="{{route('user.create.documents')}}"
                                   class="nav-link {{request()->routeIs('user.create.documents')? 'active': '' }}">
                                    Documents</a>
                            </div>

                        </div>
                        <div class="col-lg-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                @hasSection('create-profile')
                                    @yield('create-profile')
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

