@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">

                    {{--Articles Form--}}
                    <div class="panel-heading" style="background-color: #000;">
                        Edit Your Article
                    </div>
                    <div class="panel-body">
                        <form action="/articles/{{ $article->id }}" method="POST">

                            {{ method_field('PUT') }}

                            {{  csrf_field() }}

                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

                            <div class="form-group">
                                <label for="content">Content:</label>
                            </div>
                            <textarea name="content" class="form-control" id="" cols="30" rows="3">
                                {{ $article->content }}
                            </textarea>

                            {{--For live form--}}
                            <div class="checkbox">
                                <label for="">
                                    <input type="checkbox" name="live" {{ $article->live == 1
                                    ? 'checked' : ''}}>Live
                                </label>
                            </div>

                            {{--Datetime for the post--}}
                            <div class="form-group">
                                <label for="post_on">Post on:</label>
                                <input type="datetime-local"  name="post_on" class="form-control"
                                       value="{{ $article->post_on->format('Y-m-d\TH:i:s') }}">
                            </div>

                            <input type="submit" class="btn btn-success pull-right">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

