@extends('layouts.app')


@section('content')
<h2 class="create_title my-4">Post Edit</h2>
<div class="wrapper" style="max-width:800px;margin: 0 auto;">
            <form method="POST" action="/posts/{{ $post->id }}">
                @csrf
                @method('PATCH') 
                
               <div class="form-group">
               <label>Name</label>
                <input type="text" name="name" class="form-control" value="{{ $post->name }}">
               </div>
                <br>

                <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control">{{ $post->description }}</textarea>
                </div> 
                <br>
                <button type="submit" class="btn btn-primary float-end">Submit</button>
             </form>
            </div>
    
@endsection