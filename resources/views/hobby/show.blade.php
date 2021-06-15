@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">Hobby details</div>
                    <div class="card-body">
                       <b>{{$hobby->name}}</b>
                      
                       <p>{{$hobby->description}}</p>
                       
                       @if($hobby->tags->count() >0)
                       <b>Current tags:</b> (Click to remove)
                       <p>
                       @foreach($hobby->tags as $tag) 
                                        <a href="/hobby/{{$hobby->id}}/{{$tag->id}}/detach"><span class="badge badge-{{$tag->style}}">{{ $tag->name }}</span></a>
                        @endforeach
                        </p>
                        @endif

                        @if($availableTags->count() >0)
                        <b>Available tags:</b> (Click to add)
                       <p>
                       @foreach($availableTags as $tag) 
                                        <a href="/hobby/{{$hobby->id}}/{{$tag->id}}/attach"><span class="badge badge-{{$tag->style}}">{{ $tag->name }}</span></a>
                        @endforeach
                        </p>
                       @endif

                    </div>
                </div>
                <div class="mt-2">
                    <a class="btn btn-primary btn-sm" href="/hobby/" ><i class="fas fa-arrow-circle"></i> Back to oveview</a>                </div>
        
        
        </div>
    </div>
</div>
@endsection
