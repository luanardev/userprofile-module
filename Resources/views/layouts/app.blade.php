@extends('dashboard::apps.master')

@section('title', config('userprofile.name'))

@section('sidebar')
    @include('userprofile::layouts.sidebar')
@endsection
