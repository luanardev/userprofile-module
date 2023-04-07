@extends('userprofile::profile.show')

@section('staff-profile')
    <livewire:staffmanagement::profile.employment-page :staff=$staff />
@endsection
