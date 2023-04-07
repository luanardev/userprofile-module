@extends('userprofile::register.form')

@section('create-profile')
    @php
        $nextRoute ="user.create.employment"
    @endphp
    <livewire:staffmanagement::registration.profile-form :nextRoute=$nextRoute />
@endsection
