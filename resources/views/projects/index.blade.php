@extends('layout')
@section('title', 'Folder')
@section('content')
<h3>Folder</h3>
@auth
<a href="{{route('projects.create')}}">Add new project</a>
@endauth
<ul>
<!--  @if($projects)
  @foreach($projects as $item)
   <li>{{ $item['title']}}</li>
   @endforeach
@else
<li>No hay projectos para mostrar</li>
@endif -->

@forelse($projects as $item)
    <li><a href=" {{ route('projects.show', $item)}}">{{$item->title}}</a> </li>

    <li>{{$item->description}} </li>
    <br>

@empty
    <li>No hay datos para mostrar</li>
@endforelse
{{ $projects-> links()}}
</ul>


@endsection
