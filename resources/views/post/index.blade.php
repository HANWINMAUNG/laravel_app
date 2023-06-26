@extends('layouts.app')

@push('css')
   <style>
        h2{
            color:red;
        }
   </style>
@endpush
@section('content')
<h2 class="index_title text-primary">Index Page</h2>
<a href="{{ route('posts.create')}}" class="btn btn-primary my-4">Create Post</a>
<a href="{{ url('send-email')}}" class="btn btn-success my-4">Send Email</a>
@if(session()->has('success'))
<div class="alert alert-info">{{ session('success')}}</div>
@endif
    @foreach($posts as $post)
       <h3>{{ $post->name }} /
          <!-- lazy loading -->
       <span class="badge bg-primary">{{ $post->Category->name}}
       </span>
       </h3>
      <div class="mb-2"> 
        <a href="{{ route('posts.edit' ,$post->id )}}" class="btn btn-warning">Edit</a>

        <form action="{{ route('posts.destroy',$post->id)}}" method="POST" class="d-inline-block">
            @csrf
            @method('DELETE')
        <button class=" btn btn-danger">Delete</button>
        </form>
    </div>

       <p>{{ $post->description }}</p>
    @endforeach
    <hr>
@endsection