@extends('layout')
@section('content')
{{-- @unless(count($listings)==0) --}}
{{-- <p>{{$listings}}</p> --}}
  {{-- @foreach($listings as $item) --}}
  {{-- <h2> {{$item['id']}}</h2> --}}
  <h2> {{$listings['title']}}</h2>
  <h4> {{$listings['description']}}</h4>
  {{-- @endforeach --}}
  {{-- @else --}}
  
{{-- @endunless --}}
@endsection