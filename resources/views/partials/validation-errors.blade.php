<div class="col-sm-12">
    @if($errors->any())
        <ul class="list-group">
            @foreach($errors-> all() as $error)
                <li class="list-item">
                <div class="alert alert-danger" role="alert">
                    <p>{{$error}}</p>
                </div>
                </li>
            @endforeach
        </ul>

    @endif
</div>
