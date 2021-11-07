{{--
  Template Name: Misc Report Template
--}}

@extends('layouts.app')

@section('content')
    <img src="@if(get_field('mvr4seasons') == 'MVR') @asset('images/mvrLogo.PNG') @else  @asset('images/logo.png') @endif" />
    <h1>Misc Report</h1>
    <hr/>
    <hr/>
    <div class="row">
        <div class="col-3">Date: {{ get_field('date') }}</div>
        <div class="col-3">Patient: {{ get_field('patient') }}</div>
        <div class="col-3">Species: {{ get_field('species') }}</div>
        <div class="col-3">Owner: {{ get_field('owner') }}</div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-3">Doctor: <a href="{{ get_permalink(get_field('doctor')->ID) }}">{!! get_field( 'first_name', get_field('doctor')->ID) !!} {!! get_field( 'last_name', get_field('doctor')->ID) !!}</a></div>
        <div class="col-3">Practice: <a href="{{ get_permalink(get_field('practice')->ID) }}">{!! get_field( 'company', get_field('practice')->ID) !!}</a></div>
        <div class="col-3">Phone: {{ get_field('phone') }}</div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-3">Service: {{ get_field('service_type', get_field('service')) }}</div>
        <div class="col-3">Charge: {{ get_field('price', get_field('service')) }}</div>
    </div>
    <hr/>
    <h3>Findings</h3>
    <p>{{ get_field('description') }}</p>
@endsection
