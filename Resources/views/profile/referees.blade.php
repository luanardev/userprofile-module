@extends('userprofile::profile.show')

@section('staff-profile')
    <livewire:staffmanagement::profile.referee-page :staff=$staff />
@endsection
