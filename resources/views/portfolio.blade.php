@extends('layouts.main')

@push('title')
    <title> Portfolio | Brand Boosters USA </title>
@endpush
@section('main-section')
    <section class="hero-other">
        <h1 class="animate__animated animate__jackInTheBox">Portfolio</h1>
    </section>
    <section id="portfolio-body">
        <x-portfolio-uk />
    </section>
    <x-testimonial />
    <x-footer />
@endsection
