@extends('userprofile::profile.show')

@section('staff-profile')
    <livewire:staffmanagement::profile.document-page :staff=$staff />
@endsection
