@extends('layout')
@section('content')
{{--! first form --}}
{{-- <h1>
//    <?php
  //  echo 
    //?>
</h1>
//<?php foreach ($listings as $item) : ?>
//    <h2> <?php echo $item['id'] ?></h2>
//    <h2> <?php echo $item['title'] ?></h2>
//<?php endforeach; ?> --}}

{{--* second form --}}
<h1>
    {{$heading}}
</h1>
@php
  $test=1
  // <dd>test</dd>
@endphp
<h5>
  {{$test}}
</h5>
{{-- if statement in php --}}
{{-- @if(count($listings)==0)
  <p>No Item</p>  
  @endif --}}
  
  @unless(count($listings)==0)
  @foreach($listings as $item)
  <h2>
  <a href="/item/{{$item['id']}}">
  {{$item['title']}}
    
</a>
</h2>
@endforeach

  @else
  <p>No Item</p>  
  
@endunless

@endsection