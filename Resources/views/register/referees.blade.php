@extends('userprofile::register.form')

@section('create-profile')
    @php
        $nextRoute ="user.create.documents"
    @endphp
    <livewire:staffmanagement::registration.referee-form :nextRoute=$nextRoute />
@endsection
