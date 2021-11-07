{{--
  Template Name: Ultrasound Report Template
--}}

@extends('layouts.app')

@section('content')
    <img src="@if(get_field('mvr4seasons') == 'MVR') @asset('images/mvrLogo.PNG') @else  @asset('images/logo.png') @endif" />
    <h1>Ultrasound Report</h1>
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
        <div class="col-3">Breed: {{ get_field('breed') }}</div>
        <div class="col-3">Age: {{ get_field('age') }}</div>
        <div class="col-3">Doctor: <a href="{{ get_permalink(get_field('doctor')->ID) }}">{!! get_field( 'first_name', get_field('doctor')->ID) !!} {!! get_field( 'last_name', get_field('doctor')->ID) !!}</a></div>
        <div class="col-3">Practice: <a href="{{ get_permalink(get_field('practice')->ID) }}">{!! get_field( 'company', get_field('practice')->ID) !!}</a></div>
    </div>
    <hr/>
    <h3>Clinical History</h3>
    <p>{{ get_field('clinicalHistory') }}</p>
    <hr/>
    <h3>Sonographic Findings</h3>
    <div class="row background-white">
      <div class="col-4">
        <p><strong>Liver/Gall Bl:</strong> {!! get_field('sonographic_findings')['liver'] !!}</p>
        <p><strong>Spleen:</strong> {!! get_field('sonographic_findings')['spleen'] !!}</p>
        <p><strong>Stomach:</strong> {!! get_field('sonographic_findings')['stomach'] !!}</strong></p>
        <p><strong>Pancr. area:</strong> {!! get_field('sonographic_findings')['pancreas'] !!}</strong></p>
      </div>
      <div class="col-4">
        <p><strong>Intestines:</strong> {!! get_field('sonographic_findings')['intestines'] !!}</p>
        <p><strong>Adrenals:</strong> {!! get_field('sonographic_findings')['adrenals'] !!}</p>
        <p><strong>Lt. Kidney:</strong> {!! get_field('sonographic_findings')['l_kidney'] !!}</p>
        <p><strong>Rt. Kidney:</strong> {!! get_field('sonographic_findings')['r_kidney'] !!}</p>
      </div>
      <div class="col-4">
        <p><strong>Bladder:</strong> {!! get_field('sonographic_findings')['bladder'] !!}</p>
        <p><strong>Sublum. area:</strong> {!! get_field('sonographic_findings')['sublum'] !!}></p>
        <p><strong>Prostate:</strong> {!! get_field('sonographic_findings')['prostate'] !!}</p>
        <p><strong>Uterus/Ovs.:</strong> {!! get_field('sonographic_findings')['uterus'] !!}</p>
      </div>
    </div>
    <p>{!! get_field('conclusions') !!}</p>
    <h3>Impressions and Conclusions</h3>
    <p>{{ get_field('findings') }}</p>
@endsection
