@extends('layouts.base')

@section('content')

    <div class="{{ request()->is('/') ? 'page-container' : 'flex-fill flex ' }}">
        <div class="{{ request()->is('/') ? 'main-content-container' : 'content flex' }}">
            <div id="main-content" class="{{ request()->is('/') ? 'content-container' : 'scroll-body' }}">
                @yield('body')
            </div>
        </div>
    </div>

@stop
