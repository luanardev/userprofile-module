@extends('userprofile::profile.show')

@section('staff-profile')
    <livewire:staffmanagement::profile.profile-page :staff=$staff />
@endsection
