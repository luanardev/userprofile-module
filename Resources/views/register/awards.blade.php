@extends('userprofile::register.form')

@section('create-profile')
    @php
        $nextRoute ="user.profile"
    @endphp
    <livewire:staffmanagement::registration.award-form :nextRoute=$nextRoute />
@endsection
