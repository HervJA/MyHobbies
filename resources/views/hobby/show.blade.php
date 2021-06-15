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
                       <p>
                       @foreach($hobby->tags as $tag) 
                                        <a href=""><span class="badge badge-{{$tag->style}}">{{ $tag->name }}</span></a>
                        @endforeach
                        </p>



                    </div>
                </div>
                <div class="mt-2">
                    <a class="btn btn-primary btn-sm" href="/hobby/" ><i class="fas fa-arrow-circle"></i> Back to oveview</a>                </div>
        
        
        </div>
    </div>
</div>
@endsection
