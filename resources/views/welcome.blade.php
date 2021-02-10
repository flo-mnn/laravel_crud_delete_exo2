@extends('template.main')
@section('content')
   @include('partials.filters')
   @foreach ($categories as $item)
       @include('partials.modal')
   @endforeach
@endsection