@extends('layout')
@section('title', 'Create')

@section('content')
<div class="container">

<div class="row justify-content-center">
<div class="col-sm-12">
<section>
    <div class="title">
    <h3>Create Project</h3>
    </div>
    <article>
        <div class="row">
            @include ('partials.validation-errors')
            <div class="col-sm-12">

                <form method="POST" action="{{ route('projects.store')}}">

                    @include ('projects._formProject', ['btnText'=> 'Create'])

                </form>
            </div>
        </div>
    </article>
</section>

</div>
</div>
</div>

@endsection
