@extends('userprofile::register.form')

@section('create-profile')
    @php
        $nextRoute ="user.create.kinsman"
    @endphp
    <livewire:staffmanagement::registration.spouse-form :nextRoute=$nextRoute />
@endsection
