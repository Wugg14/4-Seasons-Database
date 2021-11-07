{{--
  Template Name: Clinic Template
--}}

@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <img src="@asset('images/logo.png')" />
    <h1>Clinic Information {!! the_title() !!}</h1>
    <hr/>
    <hr/>
    <div class="row">
      <div class="col-6">
        <p><strong>Company</strong> {!! get_field('company') !!}</p>
        <p><strong>Nickname</strong> {!! get_field('nickname') !!}</p>
        <p><strong>Street</strong> {!! get_field('street') !!}</p>
        <p><strong>City</strong> {!! get_field('city') !!}</p>
      </div>
      <div class="col-6">
        <p><strong>State</strong> {!! get_field('state') !!}</p>
        <p><strong>ZIP</strong> {!! get_field('zip') !!}</p>
        <p><strong>Phone</strong> {!! get_field('phone') !!}</p>
        <p><strong>Email</strong> {!! get_field('email') !!}</p>
      </div>
    </div>
    <p>{!! get_field('notes') !!}</p>
    <h3>Doctors</h3>
    <table id="table-1">
      <thead>
        <tr>
          <td>Doctor</td>
          <td>Email</td>
          <td>Phone</td>
        </tr>
      </thead>
      <tbody>
        @php while(have_rows('doctors')){ the_row(); @endphp
          <tr>
            <td><a href="{{ get_the_permalink(get_sub_field('doctor')) }}">{!! get_field('first_name', get_sub_field('doctor')) !!} {!! get_field('last_name', get_sub_field('doctor')) !!}</a></td>
            <td>{!! get_field('email', get_sub_field('doctor')) !!}</td>
            <td>{!! get_field('phone', get_sub_field('doctor')) !!}</td>
          </tr>
        @php } @endphp
      </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready( function () {
        $('#table-1').DataTable();
    } );
  </script>
@endsection
