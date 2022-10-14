@extends('layouts.app')

@section('content')


<span class="">
    <div class=" ">
        <img class="rounded mx-auto d-block "
        
        src="{{ asset('images/' .$post->image_path) }}"
        alt="Chania" width="460" height="345" />
    </div>
</span>


<div class="text-center container">
    <h1 class="card-title">{{ $post->title }}</h1>
    <div class="small text-muted"><span> Created on {{ date('jS M Y', strtotime($post->updated_at)) }}</span> </div> 
    <div class="small text-muted">By {{ $post->user->name }} </div>
    <p class="card-text d-flex justify-content-center">{{ $post->description }}</p>
</div>





@endsection