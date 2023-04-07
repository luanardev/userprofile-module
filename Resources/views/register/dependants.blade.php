@extends('userprofile::register.form')

@section('create-profile')
    @php
        $nextRoute ="user.create.experience"
    @endphp
    <livewire:staffmanagement::registration.dependant-form :nextRoute=$nextRoute />
@endsection
