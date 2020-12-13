@extends('layout')
@section('title', 'Folder')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="div d-flex justify-content-between align-items-center mb-3">
                <h1 class="display-4 mb-0">
                    List Projects
                </h1>
                @auth
                <a class="btn btn-primary" href="{{route('projects.create')}}">Add new project</a>
                @endauth
            </div>
            <p class="lead text-secondary">
                These ara my projects
            </p>
            <hr>
        </div>

        <div class="col-sm-12">

            <ul class="list-group">
            @forelse($projects as $item)
                <li class="list-group-item border-0 mb-3 shadow-sm">
                <a  class="text-secondary d-flex justify-content-between align-items-center" href=" {{ route('projects.show', $item)}}">{{$item->title}}</a>
                <span class=" font-weight-bold">-{{$item->description}}</span>
                <span class="text-black-50">-{{$item->created_at->format('d/m/Y')}}</span>
                </li>

            @empty
                <li class="list-group-item border-0 mb-3 shadow-sm">No hay datos para mostrar</li>
            @endforelse
            {{ $projects-> links()}}
            </ul>
        </div>
    </div>
</div>


@endsection
