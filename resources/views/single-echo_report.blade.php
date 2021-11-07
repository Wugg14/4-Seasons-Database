{{--
  Template Name: Echo Report Template
--}}

@extends('layouts.app')

@section('content')
    <img src="@if(get_field('mvr4seasons') == 'MVR') @asset('images/mvrLogo.PNG') @else  @asset('images/logo.png') @endif" />
    <h1>Echocardiograph Report:</h1>
    <hr/>
    <hr/>
    <div class="row">
        <div class="col-3">Date: {{ get_field('date') }}</div>
        <div class="col-3">Patient: {{ get_field('patient') }}</div>
        <div class="col-3">Breed: {{ get_field('breed') }}</div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-3">Doctor: <a href="{{ get_permalink(get_field('doctor')->ID) }}">{!! get_field( 'first_name', get_field('doctor')->ID) !!} {!! get_field( 'last_name', get_field('doctor')->ID) !!}</a></div>
        <div class="col-3">Owner: {{ get_field('owner') }}</div>
        <div class="col-3">Sex: {{ get_field('sex') }}</div>
        <div class="col-3">Age: {{ get_field('age') }}</div>
    </div>
    <hr/>
    <div class="row">
        <div class="col-3">Practice: <a href="{{ get_permalink(get_field('practice')->ID) }}">{!! get_field( 'company', get_field('practice')->ID) !!}</a></div>
        <div class="col-3">Species: {{ get_field('species') }}</div>
        <div class="col-3">Weight: {{ get_field('weight') }}</div>
    </div>
    <hr/>
    <hr/>
    <h3>Clinical History:</h3>
    <p>{{ get_field('clinicalHistory') }}</p>
    <hr/>
    <h3>M-mode:</h3>
    <div class="row">
      <div class="col-3">
        <p> {!! get_field('LV_Wall-d')['LVFW_DT_result'] !!}</p>
        <p> {!! get_field('LV_Wall-s')['LVFW_ST_result'] !!}</p>
        <p> {!! get_field('LV_Chamber-d')['LV_DD_result'] !!}</p>
        <p> {!! get_field('LV_Chamber-s')['LV_SD_result'] !!}</p>
        <p> {!! get_field('Fractional_Shortening')['SF_result'] !!}</p>
        <p> {!! get_field('Septum-d')['IVS_DT_result'] !!}</p>
        <p> {!! get_field('Septum-s')['IVS_ST_result'] !!}</p>
        <p> {!! get_field('aorta')['AR_result'] !!}</p>
        <p> {!! get_field('Left Atrium')['LA_result'] !!}</p>
        <p> {!! get_field('la/ao')['la_over_ao_result'] !!}</p>
        <p> {!! get_field('EPSS')['epss_result'] !!}</p>
      </div>
      <div class="col-3">
        <p>LV Wall-d,mm: {!! get_field('LV_Wall-d')['LVFW_Distolic_Thickness'] !!}</p>
        <p>LV Wall-s,mm: {!! get_field('LV_Wall-s')['LVFW_Systolic_Thickness'] !!}</p>
        <p>LV Chamber-d,mm: {!! get_field('LV_Chamber-d')['Left_Vent_Diastolic'] !!}</p>
        <p>LV Chamber-s,mm: {!! get_field('LV_Chamber-s')['Left_Vent_Systolic'] !!}</p>
        <p>Fractional Shortening(%): {!! get_field('Fractional_Shortening')['Shortening_Fraction'] !!}</p>
        <p>LV Septum-d,mm: {!! get_field('Septum-d')['IVS_Diastolic_Thickness'] !!}</p>
        <p>LV Septum-s,mm: {!! get_field('Septum-s')['IVS_Systolic_Thickness'] !!}</p>
        <p>Aorta,mm: {!! get_field('aorta')['Aortic_Root'] !!}</p>
        <p>Left Atrium,mm: {!! get_field('Left Atrium')['Left Atrium'] !!}</p>
        <p>LA/AO: {!! get_field('la/ao')['Left_Atrium_over_AO'] !!}</p>
        <p>EPSS,mm: {!! get_field('EPSS')['EPSS'] !!}</p>
      </div>
      <div class="col-3">
        <p> {!! get_field('LV_Wall-d')['lower_range_LV_wall_D'] !!}</p>
        <p> {!! get_field('LV_Wall-s')['lower_range_LV_wall_S'] !!}</p>
        <p> {!! get_field('LV_Chamber-d')['lower_range_LV_Chamber_D'] !!}</p>
        <p> {!! get_field('LV_Chamber-s')['lower_range_LV_Chamber_S'] !!}</p>
        <p> {!! get_field('Fractional_Shortening')['lower_range_fractional_shortening'] !!}</p>
        <p> {!! get_field('Septum-d')['lower_range_septum_d'] !!}</p>
        <p> {!! get_field('Septum-s')['lower_range_septum_s'] !!}</p>
        <p> {!! get_field('aorta')['lower_range_aorta'] !!}</p>
        <p> {!! get_field('Left Atrium')['lower_range_left_atrium'] !!}</p>
        <p> {!! get_field('la/ao')['lower_range_la_over_ao'] !!}</p>
        <p> {!! get_field('EPSS')['lower_range_epss'] !!}</p>
      </div>
      <div class="col-3">
        <p> {!! get_field('LV_Wall-d')['upper_range_LV_wall_D'] !!}</p>
        <p> {!! get_field('LV_Wall-s')['upper_range_LV_wall_S'] !!}</p>
        <p> {!! get_field('LV_Chamber-d')['upper_range_LV_Chamber_D'] !!}</p>
        <p> {!! get_field('LV_Chamber-s')['upper_range_LV_Chamber_S'] !!}</p>
        <p> {!! get_field('Fractional_Shortening')['upper_range_fractional_shortening'] !!}</p>
        <p> {!! get_field('Septum-d')['upper_range_septum_d'] !!}</p>
        <p> {!! get_field('Septum-s')['upper_range_septum_s'] !!}</p>
        <p> {!! get_field('aorta')['upper_range_aorta'] !!}</p>
        <p> {!! get_field('Left Atrium')['upper_range_left_atrium'] !!}</p>
        <p> {!! get_field('la/ao')['upper_range_la_over_ao'] !!}</p>
        <p> {!! get_field('EPSS')['upper_range_epss'] !!}</p>
      </div>
    </div>
    <p>Comments:{{ get_field('m_mode_comments') }}</p>
    <hr/>
    <h3>Doppler:</h3>
      <p>{!! get_field('echo_doppler_findings') !!}</p>
    <hr/>
    <h3>B-mode:</h3>
      <p>{!! get_field('Echo_B_mode_findings') !!}</p>
    <hr/>
    <h3>Impressions and Conclusions</h3>
      <p>{!! get_field('Echo_Conclusions') !!}</p>
    <hr/>
@endsection
