@extends('userprofile::register.form')

@section('create-profile')
    @php
        $nextRoute ="user.create.supervisor"
    @endphp

    <livewire:staffmanagement::registration.employment-form :nextRoute=$nextRoute />
@endsection
