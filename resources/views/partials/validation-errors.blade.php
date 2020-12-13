
    @if($errors->any())
      <div class="alert alert-danger">
      <ul class="list-group mb-0">
            @foreach($errors-> all() as $error)
                <li class="list-group-item">
                <div class="alert alert-danger" role="alert">
                    <p>{{$error}}</p>
                </div>
                </li>
            @endforeach
        </ul>

      </div>
    @endif

