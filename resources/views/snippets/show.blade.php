@extends('layouts.default')

@section('page_title')
    Show Snippet
@endsection

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/styles/default.min.css">
@endsection

@section('scripts')

@endsection

@section('content')
    <div class="container">
        <pre>
            <code class="php">
                {{ $snippet->body }}
            </code>
        </pre>
    </div>
@endsection

@section('footer_styles')

@endsection

@section('footer_scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.11.0/highlight.min.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
@endsection