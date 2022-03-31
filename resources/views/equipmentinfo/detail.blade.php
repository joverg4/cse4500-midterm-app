@extends('adminlte::page')

@section('title', 'Equipment Info')

@section('content_header')
    <h1>Equipment Info</h1>
@stop

@section('content')
<div class="card">
  <div class="card-body">
    <div>
        <div class="h1">
            {{ $equipmentinfo->name }}
        </div>
        <dl class="row">
            <dt class="col-sm-3">Price</dt>
            <dd class="col-sm-9">${{ $equipmentinfo->price }}
            </dd>

            <dt class="col-sm-3">Manufacturer</dt>
            <dd class="col-sm-9">{{$equipmentinfo->manu->name}}
            </dd>

            <dt class="col-sm-3">Speed</dt>
            <dd class="col-sm-9">{{ $equipmentinfo->speed }}</dd>

            <dt class="col-sm-3">Model_year</dt>
            <dd class="col-sm-9">{{ $equipmentinfo->model_year }}</dd>

            <dt class="col-sm-3">Category</dt>
            <dd class="col-sm-9">{{ ucwords($equipmentinfo->category) }}</dd>
        </dl>
    </div>
    <span style="float:right; margin-bottom: 10px;">
        <a href="{{ route('note.create')}}?equipmentinfo={{$equipmentinfo->id}} " class="btn btn-primary">Create Note</a>
        <a href="{{ route('equipmentinfo.edit', ['equipmentinfo'=>$equipmentinfo->id]) }} " class="btn btn-warning">Update</a>
        <a href="{{ route('equipmentinfo.destroy',['equipmentinfo'=>$equipmentinfo->id]) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('submit-form').submit();">
        Delete</a>
        <form id="submit-form" action="{{ route('equipmentinfo.destroy',['equipmentinfo'=>$equipmentinfo->id]) }}" method="POST" class="hidden">
            @csrf
            @method('DELETE')
        </form>
    </span>

  </div>
</div>
@stop