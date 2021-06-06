@extends('layouts.app')

@section('page_title','ThisProject')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Info</div>

                <div class="card-body">
                Our priority is for you to navigate our website and applications while benefiting of a reliable, efficient and functional service. Services provided over the Internet may require some information to be stored on your device (desktop, laptop, smartphone, tablet) in the form of small files called “cookies” or “trackers” or “webstorage” (all called “cookie” in this policy).
Those files are loaded on your device, with your consent, when you visit our website or applications or accessing advertising. They are handled by your Internet browser and only the issuer of the cookie is able to read the information contained in the file


                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
