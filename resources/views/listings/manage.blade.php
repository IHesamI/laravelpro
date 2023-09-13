@extends('layout')

@section('content')
@include('partials._hero')
@include('partials._search')
<div class="bg-gray-50 border border-gray-200 p-10 rounded">
    <header>
        <h1 class="text-3xl text-center font-bold my-6 uppercase">
            Manage Gigs
        </h1>
    </header>
    <table class="w-full table-auto rounded-sm">
        <tbody>
            @unless(count($listings)==0)
            @foreach($listings as $item)
            <x-manage-card :item='$item' />

            @endforeach
            @else
            <p>No Item</p>
            @endunless
        </tbody>

    </table>
</div>

</div>
@endsection
