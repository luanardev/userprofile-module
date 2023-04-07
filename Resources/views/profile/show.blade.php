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
                        <p>Profile is only available for registered employees </p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-3">

                            <div class="nav flex-column nav-pills offset-lg-1" id="v-pills-tab" role="tablist"
                                 aria-orientation="vertical">
                                <a href="{{route('user.profile')}}"
                                   class="nav-link {{request()->routeIs('user.profile')? 'active' : '' }}"> Personal
                                    Info</a>
                                <a href="{{route('user.employment')}}"
                                   class="nav-link {{request()->routeIs('user.employment')? 'active': '' }}">
                                    Employment</a>
                                <a href="{{route('user.supervisor')}}"
                                   class="nav-link {{request()->routeIs('user.supervisor')? 'active': '' }}">
                                    Supervisor</a>
                                <a href="{{route('user.spouse')}}"
                                   class="nav-link {{request()->routeIs('user.spouse')? 'active': '' }}"> Spouse</a>
                                <a href="{{route('user.kinsman')}}"
                                   class="nav-link {{request()->routeIs('user.kinsman')? 'active': '' }}"> Next of
                                    Kin</a>
                                <a href="{{route('user.dependants')}}"
                                   class="nav-link {{request()->routeIs('user.dependants')? 'active': '' }}">
                                    Dependants</a>
                                <a href="{{route('user.experience')}}"
                                   class="nav-link {{request()->routeIs('user.experience')? 'active': '' }}"> Work
                                    Experience</a>
                                <a href="{{route('user.qualifications')}}"
                                   class="nav-link {{request()->routeIs('user.qualifications')? 'active': '' }}">
                                    Qualifications</a>
                                <a href="{{route('user.referees')}}"
                                   class="nav-link {{request()->routeIs('user.referees')? 'active': '' }}"> Referees</a>
                                <a href="{{route('user.documents')}}"
                                   class="nav-link {{request()->routeIs('user.documents')? 'active': '' }}">
                                    Documents</a>
                                <a href="{{route('user.progress')}}"
                                   class="nav-link {{request()->routeIs('user.progress')? 'active': '' }}"> Career
                                    Progress</a>
                            </div>

                        </div>
                        <div class="col-lg-9">
                            <div class="tab-content" id="v-pills-tabContent">
                                @hasSection('staff-profile')
                                    @yield('staff-profile')
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

