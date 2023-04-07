@extends('userprofile::register.form')

@section('create-profile')
    @php
        $nextRoute ="user.create.qualifications"
    @endphp
    <livewire:staffmanagement::registration.experience-form :nextRoute=$nextRoute />
@endsection
