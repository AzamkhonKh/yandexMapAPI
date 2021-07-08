@extends('layouts.app')

@section('content')
    <example-component message = "You are logged in" status = "{{print_r(session('status'))}}"></example-component>
    <div class="hide "></div>
@endsection
