@extends('layouts.default')

@section('page_title')
    Account
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
    <account :user="{{ auth()->user() }}">

    </account>
@endsection

@section('footer_styles')

@endsection

@section('footer_scripts')

@endsection