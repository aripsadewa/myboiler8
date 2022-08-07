@extends('layouts.app',['title' => 'About'])

@section('content')
@component('components.alert')
        @slot('title')
            ini title
        @endslot
        ini children
        @slot('footer')
            ini footer
        @endslot
    @endcomponent
    This is About
@endsection
