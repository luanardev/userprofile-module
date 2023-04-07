@extends('userprofile::profile.show')

@section('staff-profile')
    <livewire:staffmanagement::profile.progress-page :staff=$staff />
@endsection
