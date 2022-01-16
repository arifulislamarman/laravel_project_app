
   @extends('app')
   
   @section('content')
       
        <section>
            <a  href="/create-project"><button>Create New Project</button></a>
            <div>
                @foreach($projects as $project)
                <h2 ><a href="/projects/{{$project->id}}">{{$project->name}}</a></h2>
                 <p>{{$project->body}}</p>
                @endforeach
            </div>
            <div class="page-nav">{{$projects->links()}}</div>
        </section>
    

    @endsection