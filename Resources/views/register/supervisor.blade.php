@extends('userprofile::register.form')

@section('create-profile')
    @php
        $nextRoute ="user.create.spouse"
    @endphp
    <livewire:staffmanagement::registration.supervisor-form :nextRoute=$nextRoute />
@endsection
