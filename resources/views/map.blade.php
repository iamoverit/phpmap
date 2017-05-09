@extends('layouts.default')

@section('page_title')
    Map
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
    <div class="map-wrapper map-responsive">
        <homemap :allusers="{{ $users }}" :allusergroups="{{ $usergroups }}"></homemap>
    </div>
@endsection

@section('footer_styles')

@endsection

@section('footer_scripts')

@endsection