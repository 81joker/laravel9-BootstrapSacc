@extends('layouts.app')

@section('content')
    @include('templates.intro')
    @include('templates.campanies')
    @include('templates.services')
    @include('templates.testimonials')
    @include('templates.faq')
    @include('Contact.contactHome')
@endsection
