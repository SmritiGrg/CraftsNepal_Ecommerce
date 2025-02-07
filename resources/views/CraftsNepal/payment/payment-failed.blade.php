@extends('layouts.main')

@section('container')
<div class="container text-center">
    <h1 class="text-danger">Payment Failed</h1>
    <p>{{ $errorMessage }}</p>
    <a href="{{ url('/') }}" class="btn btn-primary">Go Back to Home</a>
</div>
@endsection