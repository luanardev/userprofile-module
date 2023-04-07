@extends('userprofile::register.form')

@section('create-profile')
    @php
        $nextRoute ="user.create.dependants"
    @endphp
    <livewire:staffmanagement::registration.kinsman-form :nextRoute=$nextRoute />
@endsection
