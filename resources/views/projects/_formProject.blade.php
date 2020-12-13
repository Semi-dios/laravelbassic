@csrf
<div class="form-row">

    <div class="form-group col-sm-12">
        <label for="">Title project</label>
        <input type="text" name="title" value="{{old('title',  $project->title)}}">
    </div>
    <div class="form-group col-sm-12">
        <label for="">Url project</label>
        <input type="text" name="url" value="{{ old('url',$project->url)}}">
    </div>
    <div class="form-group col-sm-12">
        <label for="">Description</label>
        <textarea type="text" name="description" value="{{ old('description',$project->description)}}"></textarea>
    </div>
    </div>
</div>
<div class="form-row">
<div class="form-group col-sm-12">
    <button type="">{{$btnText}}</button>
</div>
</div>
