@extends ('admin')

@section('content')
<div class="row">
    <div class="col-md-2">
        <br>
        <h3>Add Data</h3>
        <br>
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        @if(\Session::has('succes'))
        <div class="alert alert-succes">
            <p>{{ \Session::get('succes') }}</p>
        </div>
        @endif
        <form method="post" action="{{url('project')}}">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Project naam">
                <input type="text" name="description" class="form-control" placeholder="Beschrijving">
                <input type="date" name="date">
                <input type="text" name="link" class="form-control" placeholder="URL">
                <input type="text" name="image" class="form-control" placeholder="Image path">
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</div>
@endsection