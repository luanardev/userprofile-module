@extends('userprofile::profile.show')

@section('staff-profile')
    <livewire:staffmanagement::profile.experience-page :staff=$staff />
@endsection
