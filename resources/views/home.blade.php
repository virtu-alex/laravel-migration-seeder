@extends('layouts.main')

@section('main-content')
    <h1>
        @foreach ($trains as $item)
            {{$item}}
        @endforeach
    </h1>
@endsection
