@extends('layouts.app')


@section('content')

    <div class="container">
        <div class="row">
            @forelse($articles as $article)

            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">

                    {{--Articles Form--}}
                    <div class="panel-heading" style="background-color: #000;">
                        <span>
                            Created by: {{ Auth::user()->username }}</span>
                        <span class="pull-right">
                            {{ $article->created_at->diffForHumans() }}
                        </span>
                    </div>

                    <div class="panel-body" style="background-color: #2e3436">
                        {{ $article->shortContent }}
                        <a href="/articles/{{ $article->id }}">continue</a>
                    </div>

                    <div class="panel-footer clearfix"
                    style="background-color: #000">

                        @if($article->user_id == Auth::id())
                            <form action="/articles/{{ $article->id }}" method="POST"
                                  class="pull-right" style="margin-left: 25px">

                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this item?');">
                                        Delete
                                </button>
                            </form>
                        @endif

                        <button type="button" class="btn btn-success btn-sm" style="background-color: white; color: red">
                            <i class="fa fa-heart pull-left" style="color: red"> Like</i>
                        </button>

                        <button type="button" class="btn btn-success btn-sm" style="background-color: white; color: red">
                            <i class="fa fa-comments pull-left" style="color: #1f648b"> Comment</i>
                        </button>

                        <button type="button" class="btn btn-success btn-sm" style="background-color: white; color: red">
                            <i class="fa fa-share pull-left" style="color: limegreen"> Share</i>
                        </button>
                    </div>

                </div>
            </div>

            @empty
                Sorry, no articles found!

            @endforelse
        </div>
    </div>

    <div class="col-md-6 col-md-offset-4">
        {{ $articles->links() }}
    </div>

@endsection
