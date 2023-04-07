@extends('userprofile::profile.show')

@section('staff-profile')
    <livewire:staffmanagement::profile.spouse-page :staff=$staff />
@endsection
