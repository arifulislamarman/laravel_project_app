@extends('app')

@section('content')
<h2>Create Project</h2>

<form action="" method="POST">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
<p><label for="name"></label><input name="name" type="text" value="{{old('name')}}"/>
</br> <span style="color: red">{{$errors->first('name')}}</span>
</p>
<p><label for="body"></label><textarea name="body" cols="30" rows="10">{{old('body')}}</textarea>
</br> <span style="color: red">{{$errors->first('body')}}</span>
</p>
<button type="submit">Create Project</button>
</form>
    
@endsection
