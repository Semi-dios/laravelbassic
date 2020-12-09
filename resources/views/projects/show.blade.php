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
        <p>{{$project->description}}</p>
        <p>{{$project->created_at->diffForHumans()}}</p>
    </article>
</section>

</div>
</div>
</div>

@endsection

