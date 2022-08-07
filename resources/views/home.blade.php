@extends('layouts.app', ['title' => 'Dashboard'])

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
    <p>
        This is Home
    </p>
@endsection
