@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{$user->name}} details</div>
                    <div class="card-body">
                       <b>My Motto : {{$user->motto}}</b>
                      
                       <p>About me : {{$user->about_me}}</p>
                       


                    </div>
                </div>
                <div class="mt-2">
                    <a class="btn btn-primary btn-sm" href="/hobby/" ><i class="fas fa-arrow-circle"></i> Back to oveview</a>                </div>
        
        
        </div>
    </div>
</div>
@endsection
