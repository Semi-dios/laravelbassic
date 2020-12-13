@csrf
<div class="form-row">

        <div class="form-group col-sm-12">

            @include ('partials.validation-errors')

        </div>
        <div class="form-group col-sm-12">
            <label for="title">Title project</label>
            <input class="form-control border-0 bg-light shadow-sm" type="text" name="title" id="title" value="{{old('title',  $project->title)}}">
        </div>
        <div class="form-group col-sm-12">
            <label for="url">Url project</label>
            <input class="form-control border-0 bg-light shadow-sm" type="text" id="url" name="url" value="{{ old('url',$project->url)}}">
        </div>
        <div class="form-group col-sm-12">
            <label for="description">Description</label>
            <textarea class="form-control border-0 bg-light shadow-sm"  type="text" id="description" name="description" value="{{ old('description',$project->description)}}"></textarea>
        </div>

        <div class="form-group col-sm-12">
        <button class="btn btn-primary btn-lg btn-block" type="">{{$btnText}}</button>
        </div>
        <div class="form-group col-sm-12">

        <a class="btn btn-link btn-lg btn-block" href="{{route('projects.index')}}">Back</a>
        </div>
</div>

