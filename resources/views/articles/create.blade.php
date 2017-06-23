@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">

                    {{--Articles Form--}}
                    <div class="panel-heading" style="background-color: #000;">
                        Write Your Article
                    </div>

                    <div class="panel-body" style="background-color: #2e3436">
                        <form action="/articles" method="POST">
                            {{  csrf_field() }}

                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            
                        <div class="form-group">
                            <label for="content">Content:</label>
                        </div>
                        <textarea name="content" class="form-control" id="" cols="30" rows="3"></textarea>

                        {{--For live form--}}
                        <div class="checkbox">
                            <label for="">
                                <input type="checkbox" name="live">Live
                            </label>
                        </div>

                        {{--Datetime for the post--}}
                        <div class="form-group">
                            <label for="post_on">Post on:</label>
                            <input type="datetime-local" name="post_on" class="form-control">
                        </div>

                        <input type="submit" class="btn btn-success pull-right">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

