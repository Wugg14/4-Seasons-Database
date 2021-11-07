{{--
  Template Name: Radiographic Interpretation Template
--}}

@extends('layouts.app')

@section('content')
    <img src="@if(get_field('mvr4seasons') == 'MVR') @asset('images/mvrLogo.PNG') @else  @asset('images/logo.png') @endif" />
    <h1>Radiographic Interpretation</h1>
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
        <div class="col-3">Image Date(s): {{ get_field('Rad_Image_Date') }}</div>
        <div class="col-3">No. of Images: {{ get_field('Rad_NumImages') }}</div>
        <div class="col-3">Views: {{ get_field('views') }}</div>
    </div>
    <hr/>
    <h3>Findings</h3>
    <p>{{ get_field('Rad_Findings') }}</p>
    <h3>Impressions and Conclusions</h3>
    <p>{{ get_field('Rad_Conclusions') }}</p>
@endsection
