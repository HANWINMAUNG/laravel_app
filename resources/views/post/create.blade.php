@extends('layouts.app')
@push('css')
   <style>
        h2{
            color:yellow;
        }
   </style>
@endpush

@section('content')
<h2 class="">Post Create</h2>
@if($errors->all())
<div class="alert alert-danger">
    @foreach($errors->all() as $error)
       <li> {{$error}}</li>
    @endforeach
</div>
@endif
<div class="wrapper" style="max-width:800px;margin: 0 auto;">
            <form method="POST" action="{{ route('posts.store') }}">
                @csrf
                
                
               <div class="form-group">
               <label>Name</label>
                <input type="text" name="name" class="form-control">
               </div>
                <br>

                <div class="form-group">
                <label>Description</label>
                <textarea name="description" class="form-control"></textarea>
                </div> 
                <br>
                <button type="submit" class="btn btn-primary float-end">Submit</button>
             </form>
            </div>
@endsection
@push('script')
<script>
   
    </script>
@endpush