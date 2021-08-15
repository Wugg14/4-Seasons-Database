{{--
  Template Name: CT Interpretation Template
--}}

@extends('layouts.app')

@section('content')
    <h1>C.T. Interpretation</h1>
    <hr/>
    <div class="row">
        <div class="col-3">Date: {{ get_field('date') }}</div>
        <div class="col-3">Patient: {{ get_field('patient') }}</div>
        <div class="col-3">Species: {{ get_field('species') }}</div>
        <div class="col-3">Owner: {{ get_field('owner') }}</div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-3">Doctor: TO DO DOCTOR</div>
        <div class="col-3">Clinic: TO DO CLINIC</div>
        <div class="col-3">Phone: {{ get_field('phone') }}</div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-3">Image Date(s): {{ get_field('CT_Image_Date') }}</div>
        <div class="col-3">No. of Images{{ get_field('CT_NumImages') }}</div>
        <div class="col-3">Views: {{ get_field('views') }}</div>
    </div>
    <hr/>
    <h3>Findings</h3>
    <p>{{ get_field('CT_Findings') }}</p>
    <h3>Impressions and Conclusions</h3>
    <p>{{ get_field('CT_Conclusions') }}</p>
@endsection
