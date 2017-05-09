@extends('layouts.default')

@section('page_title')
    Create Snippet
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
    <div class="container">
        <form action="/snippets" method="POST">
            {!! csrf_field() !!}
            
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="Title">
            </div>

            <div class="form-group">
                <textarea type="text" class="form-control" name="body" placeholder="Snippet"></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-default">Create Snippet</button>
            </div>
        </form>
    </div>
@endsection

@section('footer_styles')

@endsection

@section('footer_scripts')

@endsection