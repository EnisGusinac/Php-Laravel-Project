@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">

            {{--Articles Form--}}
                <div class="panel-heading" style="background-color: #000;">
                    <span>
                        Created by: {{ Auth::user()->username }}
                    </span>
                    <span class="pull-right">
                        {{ $article->created_at->diffForHumans() }}
                    </span>
                </div>
                <div class="panel-body">
                    {{ $article->content }}

                </div>
                <div class="panel-footer pull-right">
                    <span>
                        <small>
                            <a href="/articles/{{ $article->id }}/edit" class="btn btn-success">Change Text</a>
                        </small>
                    </span>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
