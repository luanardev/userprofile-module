@extends('userprofile::register.form')

@section('create-profile')
    @php
        $nextRoute ="user.profile"
    @endphp
    <livewire:staffmanagement::registration.document-form :nextRoute=$nextRoute />
@endsection
