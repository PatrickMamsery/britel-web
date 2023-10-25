@extends('main')

@section('section')
    @include('sections.hero')
    <main id="main">
        @include('sections.about')
        @include('sections.services')
        @include('sections.counts')
        {{-- @include('sections.cta') --}}
        @include('sections.portfolio')
        @include('sections.testimonials')
        @include('sections.team')
        @include('sections.contact')
    </main>
@endsection
