@extends('userprofile::profile.show')

@section('staff-profile')
    <livewire:staffmanagement::profile.award-page :staff=$staff />
@endsection
