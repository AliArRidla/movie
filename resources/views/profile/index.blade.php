@extends('layouts.app')
@section('content')
    <div class="container login">
        <div class="jumbotron">
            <div class="text-center">
                <img src="{{asset('img/ali.jpg')}}" class="rounded-circle img-thumbnail" alt="" srcset="">
                <h1 class="display-1">{{$user -> name}}</h1>
            </div>
        </div>
    </div>
@endsection