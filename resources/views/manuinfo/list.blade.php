@extends('adminlte::page')

@section('title', 'Manufacturer')

@section('content_header')
    <h1>Manufacturer</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <table id="table" class="table table-bordered">
      <thead>
        <tr>
          <th style="width: 10px">#</th><th>Brand</th><th style="width: 40px">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($manuinfos AS $manuinfo)
        <tr>
          <td>{{ $manuinfo->id }}</td>
          <td>{{ $manuinfo->name }}</td>
          <td><a class="btn btn-default btn-sm" href="{{ route('manuinfo.show',['manuinfo'=>$manuinfo->id]) }}">View</a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a href="{{ route('manuinfo.create') }} " class="btn btn-primary" >Create</a>
@stop