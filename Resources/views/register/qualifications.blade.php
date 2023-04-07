@extends('userprofile::register.form')

@section('create-profile')
    @php
        $nextRoute ="user.create.referees"
    @endphp
    <livewire:staffmanagement::registration.qualification-form :nextRoute=$nextRoute />
@endsection
