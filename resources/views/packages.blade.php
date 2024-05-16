@extends('layouts.main')

@push('title')
    <title>Brandboosters - Our Packages</title>
@endpush
@section('main-section')
    <section class="hero-other">
        <h1 class="animate__animated animate__jackInTheBox">Our Packages</h1>
    </section>
    <x-our-packages />
    <x-testimonial />
    <x-footer />
@endsection
