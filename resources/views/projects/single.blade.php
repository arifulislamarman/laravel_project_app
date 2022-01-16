@extends('app')

@section('content')
<section>
    <h2>{{$project->name}}</h2>
    <p>{{$project->body}}</p>

    <a href="/projects/{{$project->id}}/edit"> Edit </a> <a href="/projects">Back to the project </a>
   
</section>


@endsection