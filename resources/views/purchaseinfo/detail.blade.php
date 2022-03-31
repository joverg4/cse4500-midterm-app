@extends('adminlte::page')

@section('title', 'Purchaseinfo')

@section('header')
<meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('content_header')
    <h1>Purchaseinfo</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            Purchaseinfo ID: {{ $purchaseinfo->id }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Customer</dt>
            <dd class="col-sm-9">{{ $purchaseinfo->customer->name }}</dd>

            <dt class="col-sm-3">Invoice #</dt>
            <dd class="col-sm-9">{{ $purchaseinfo->invoice_num }}</dd>

            <dt class="col-sm-3">Purchase Date</dt>
            <dd class="col-sm-9">{{ $purchaseinfo->purchase_date }}</dd>

            <dt class="col-sm-3">Total Cost</dt>
            <dd class="col-sm-9">${{ $purchaseinfo->price}}</dd>

            <dt class="col-sm-3">Equipment Info</dt>
            <dd class="col-sm-9">{{ $purchaseinfo->equipmentinfo->name }}</dd>
        </dl>
    </div>
    <span style="float:right; margin-bottom:10px;">
        <a href="{{ route('purchaseinfo.edit', ['purchaseinfo'=>$purchaseinfo->id]) }} " class="btn btn-warning">Update</a>
        <a href="{{ route('purchaseinfo.destroy',['purchaseinfo'=>$purchaseinfo->id]) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('submit-form').submit();">
        Delete</a>
        <form id="submit-form" action="{{ route('purchaseinfo.destroy',['purchaseinfo'=>$purchaseinfo->id]) }}" method="POST" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </span>

@stop