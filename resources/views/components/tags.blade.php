@props(['tagsCsv'])
@php
$tags=explode(',',$tagsCsv);
@endphp
<ul class="flex">
    @foreach($tags as $eachTag)
    <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
        <a href="/?tag={{$eachTag}}">{{$eachTag}}</a>
    </li>
    @endforeach
</ul>
