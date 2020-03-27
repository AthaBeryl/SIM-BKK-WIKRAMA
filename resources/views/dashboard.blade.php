@extends('layouts.header')
@section('dashboard','m-menu__item--active')
@section('content')
@if(auth::user()->role == 'admin')
@section('title','SIMBKK | Dashboard Admin')
@include('admin.dashboard')
@else
@section('title','SIMBKK | Dashboard Alumni')
@include('user.dashboard')
@endif
@include('layouts.footer')
@endsection


