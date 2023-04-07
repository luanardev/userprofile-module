@extends('userprofile::profile.show')

@section('staff-profile')
    <livewire:staffmanagement::profile.qualification-page :staff=$staff />
@endsection
