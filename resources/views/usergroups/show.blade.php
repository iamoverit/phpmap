@extends('layouts.default')

@section('page_title')
    {{ $usergroup->name }}
@endsection

@section('styles')

@endsection

@section('scripts')

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="thumbnail">
                <img src="https://maps.googleapis.com/maps/api/staticmap?maptype=roadmap&center={{ $usergroup->latitude }},{{ $usergroup->longitude }}&zoom=13&size=600x300&key=AIzaSyDlDS7KYdMMQd_CynknFWTxhZwUwMhnZAg" alt="{{ $usergroup->shortname }}" class="img img-responsive">
                    <div class="caption">
                        <h4>{{ $usergroup->name }}</h4>
                        <p>{{ $usergroup->country }}</p>
                        <p><a href="{{ $usergroup->url }}">Website</a></p>
                        <p><a href="{{ $usergroup->icalendar_url }}">Calendar</a></p>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer_styles')

@endsection

@section('footer_scripts')

@endsection