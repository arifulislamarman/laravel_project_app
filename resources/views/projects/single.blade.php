@extends('app')

@section('content')
<section>
    <h2>{{$project->name}}</h2>
    <p>{{$project->body}}</p>
</section>
   
@endsection