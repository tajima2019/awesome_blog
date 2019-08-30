@extends('layouts.app')

@section('css')

@endsection


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-8-offset-2">
                <div class="panel user-list">
                    <div class="panel-heading p-4">
                        <h2>
                            All Members
                        </h2>
                        <div class="pull-right"> </div>
                        <div class="panel-body">
                            <div class="list-group-item p-4" style="width:90vw;">
                                @foreach ($users as $user)
                                    @if ($user != Auth::user())
                                    <div class="d-flex align-items-center py-3">
                                        <img src="" alt="avatar">
                                        <a href="/home/{{$user->id}}" class="pl-3">
                                            {{$user->name}}
                                        </a>
                                        <div class="ml-auto">
                                            @if(Auth::user()->is_following($user->id))
                                                <a href="/user/{{$user->id}}/unfollow" class="btn btn-danger">Unfollow</a>
                                            @else
                                                <a href="/user/{{$user->id}}/follow" class="btn btn-primary">Follow</a>
                                            @endif
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection