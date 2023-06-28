@extends('layouts.app_new')

@section('content')


   <div class="container">
   @if(session()->has('success'))
<div class="alert alert-success">
    {{session('success')}}
</div>
@endif

@if(auth()->check())
<h3>{{ auth()->guard()->user()->name}}</h3>
<form action="{{ route('logout-new.post')}}" method="POST">
        @csrf
        <button type="submit" class="btn btn-primary">Logout</button>
    </form>
@else
<h3>Please Login</h3>
@endif
   <h1>hello world</h1>
   
   </div>
@endsection