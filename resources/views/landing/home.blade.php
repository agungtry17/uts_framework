@extends('landing.layouts.app')

@section('title', 'Home - iSTUDIO')

@section('content')
    @include('landing.sections.hero')
    @include('landing.sections.about')
    @include('landing.sections.feature')
    @include('landing.sections.project')
    @include('landing.sections.service')
    @include('landing.sections.team')
    @include('landing.sections.testimonial')
    @include('landing.sections.newsletter')
@endsection