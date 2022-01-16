@extends('app')

@section('content')
<h2>Edit Project</h2>

<form action="/projects/{{$project->id}}/edit" method="POST">
    {{ method_field('PUT') }}
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
<p><label for="name"></label><input name="name" type="text" value="{{$project->name}}"/>
</br> <span style="color: red">{{$errors->first('name')}}</span>
</p>
<p><label for="body"></label><textarea name="body" cols="30" rows="10">{{$project->body}}</textarea>
</br> <span style="color: red">{{$errors->first('body')}}</span>
</p>
<button type="submit">Update Project</button>
</form>
    
@endsection
