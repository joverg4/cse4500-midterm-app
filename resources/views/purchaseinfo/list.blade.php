@extends('adminlte::page')

@section('title', 'Purchaseinfo')

@section('content_header')
    <h1>Purchaseinfo</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 60px;">ID #</th>
          <th>Customer</th>
          <th>Price</th>
          <th>Purchase Date</th>
          <th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($purchaseinfos AS $purchaseinfo)
        <tr>
          <td>{{ $purchaseinfo->id }}</td>
          <td>{{ $purchaseinfo->customer->name }}</td>
          <td>${{ $purchaseinfo->price}}</td>
          <td>{{ $purchaseinfo->purchase_date }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('purchaseinfo.show',['purchaseinfo'=>$purchaseinfo->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('purchaseinfo.create') }} " class="btn btn-primary" >Create</a>
@stop