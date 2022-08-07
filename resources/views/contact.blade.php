@extends('layouts.app',['title' => 'Contact'])
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
    This is Contact
@endsection
