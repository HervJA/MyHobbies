@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header" style="font-size:150%">{{$user->name}} details</div>
                    <div class="card-body">
                       <b>My Motto : {{$user->motto}}</b>
                      
                       <p>About me : {{$user->about_me}}</p>
                       
                       @if($user->hobbies->count() >0)
                       <h5> Hobbies of {{$user->name}}</h5>
                       <ul class="list-group">
                            @foreach($user->hobbies as $hobby)
                                <li class="list-group-item">
                                     <a title="Show Details" href="/hobby/{{$hobby->id}}">{{$hobby->name}}</a>
                                    
                                    
                                    <span class="float-right mx-2">{{$hobby->created_at->diffForHumans()}}</span>
                                    @foreach($hobby->tags as $tag) 
                                        <a href="/hobby/tag/{{$tag->id}}"><span class="badge badge-{{$tag->style}}">{{ $tag->name }}</span></a>
                                        
                                    @endforeach
                                </li>
                            @endforeach 
                        </ul>
                        @else
                        <span> {{$user->name}} has no hobbies created yet </span>
                        @endif


                    </div>
                </div>
                <div class="mt-2">
                    <a class="btn btn-primary btn-sm" href="/hobby/" ><i class="fas fa-arrow-circle"></i> Back to oveview</a>                </div>
        
        
        </div>
    </div>
</div>
@endsection
