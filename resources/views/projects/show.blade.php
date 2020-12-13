@extends('layout')
@section('title', 'Folder |'. $project-> title)

@section('content')
<div class="container">

<div class="row justify-content-center">
<div class="col-sm-12">
<section>
    <div class="title">
    <h3>{{ $project->title}}</h3>
    </div>
    <article>
    @auth
      <a href="{{route('projects.edit', $project)}}">Edit Project</a>
         <form action="{{route('projects.destroy', $project)}}" method="POST">
         @csrf @method('DELETE')
            <div class="form-row">
                <div class="form-group col-sm-12">
                    <button>Delete</button>
                </div>
            </div>
         </form>
    @endauth
        <p>{{$project->description}}</p>
        <p>{{$project->created_at->diffForHumans()}}</p>
    </article>
</section>

</div>
</div>
</div>

@endsection

