@extends('layouts.app')

@section('css')
<!-- Home Styling -->
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="panel user-profile">
                <div class="text-center">
                    <div class="avatar">
                        <div class="default">
                            <img src="" alt="avatar" style="width:100px">
                        </div>
                    </div>
                    <div class="py-2">
                        <h2>
                            {{$user->name}}
                        </h2>
                    </div>
                    @includeWhen(Auth::user()->id == $user->id ,'partials.editProfileAvatar')
                    @includeWhen(Auth::user()->id != $user->id , 'partials.followAction')
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            @includeWhen(Auth::user()->id == $user->id,'partials.newPost')

            <div class="activity-feed">
                <div class="well">
                    @include('partials.blogs', ['blogs' => $blogs])
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
