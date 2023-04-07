@extends('userprofile::profile.show')

@section('staff-profile')
    <livewire:staffmanagement::profile.supervisor-page :staff=$staff />
@endsection
