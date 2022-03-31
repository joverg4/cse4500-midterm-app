@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturer</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $manuinfo->name }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{ $manuinfo->email }}</dd>

            <dt class="col-sm-3">Department</dt>
            <dd class="col-sm-9">{{ $manuinfo->dept }}</dd>

            <dt class="col-sm-3">Email</dt>
            <dd class="col-sm-9">{{ $manuinfo->email}}</dd>

            <dt class="col-sm-3">Phone Number</dt>
            <dd class="col-sm-9">{{ $manuinfo->number }}</dd>
        </dl>
    </div>
    
@stop