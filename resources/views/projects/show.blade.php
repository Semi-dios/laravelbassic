@extends('layout')
@section('title', 'Folder |'. $project-> title)

@section('content')
<div class="container">

<div class="row justify-content-center">
<div class="col-sm-12">
<section class="bg-white p-5 shadow rounded">

    <h3>{{ $project->title}}</h3>
    <p class="text-secondary">{{$project->description}}</p>
    <p class="text-black-50">{{$project->created_at->diffForHumans()}}</p>
    <article class="d-flex justify-content-between align-items-center">
            <a class=" " href="{{route('projects.index')}}">Back</a>

            @auth
            <div class="btn-group btn-group-sm">
            <a class="btn btn-primary "href="{{route('projects.edit', $project)}}">Edit Project</a>
            <a class="btn btn-danger "href="" onclick="document.getElementById('delete-project').submit()">Delete Project</a>
            </div>
                <form action="{{route('projects.destroy', $project)}}" class="d-none" method="POST">
                @csrf @method('DELETE')

                </form>
            @endauth
    </article>

</section>

</div>
</div>
</div>

@endsection

