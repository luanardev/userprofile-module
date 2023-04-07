@extends('userprofile::profile.show')

@section('staff-profile')
    <livewire:staffmanagement::profile.dependant-page :staff=$staff />
@endsection
