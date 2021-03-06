@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-info">
                <div class="panel-heading">{{ trans('home.title')}}<strong>"{{Auth::user()->name}}"</strong></div>
                <div class="panel-body">
                    {{ trans('home.welcome_message') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection