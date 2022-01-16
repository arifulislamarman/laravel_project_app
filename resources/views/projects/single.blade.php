@extends('app')

@section('content')
<section>
    <h2>{{$project->name}}</h2>
    <p>{{$project->body}}</p>

    <a href="/projects/{{$project->id}}/edit"> Edit </a> &nbsp;
    <a href="/projects/{{$project->id}}/delete"> Delete </a> &nbsp;
     <a href="/projects">Back to the project </a>
   
</section>


@endsection