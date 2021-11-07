{{--
  Template Name: Doctor Template
--}}

@extends('layouts.app')

@section('content')
  <img src="@asset('images/logo.png')" />
  <h1>Doctor Information {!! the_title() !!}</h1>
  <hr/>
  <hr/>
  <p><strong>Name</strong> {!! get_field('first_name') !!} {!! get_field('middle') !!} {!! get_field('last_name') !!}</p>
  <p><strong>Phone</strong> {!! get_field('phone') !!}</p>
  <p><strong>Email</strong> {!! get_field('email') !!}</p>
  <p><strong>Clinic</strong> <a href="{{ get_the_permalink(get_field('Clinic')) }}">{!! get_field('company', get_field('Clinic')) !!}</a></p>
  <h3>Notes:</h3>
  <p>{!! get_field('notes') !!}</p>
@endsection
