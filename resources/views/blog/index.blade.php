@extends('layouts.app')

@section('content')


@if (session()->has('message'))
    <div class="  ">
        <p class="  ">
            {{ session()->get('message') }}
        </p>
    </div>
@endif







@foreach ($posts as $post)


        <div class="row d-flex justify-content-center">
            
                <!-- Featured blog post-->
                <div class="card mb-4 pb-2 col-lg-8">
                
                    <div class="card-body">
                        <h1 class="card-title">{{ $post->title }}</h1>
                        <div class="small text-muted"><span> Created on {{ date('jS M Y', strtotime($post->updated_at)) }}</span> </div> 
                        <div class="small text-muted">By {{ $post->user->name }} </div>
                        <p class="card-text">{{ $post->description }}</p>
                        
                        <a class="btn btn-primary" href="/blog/{{ $post->slug }}">Read more →</a>

                        <div class="col-lg-6">
                            <!-- Featured blog post-->
                            <div class="card mb-4 mt-4 ">
                                <a href="#!"><img class="card-img-top" src="{{ asset('images/' .$post->image_path) }}" alt="..." /></a>  
                            </div>
                        
        
                        
        
                        <div>
                    
                    </div>
                </div> 
                
                <!-- Blog entries-->
                
                    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                                <span class="">
                                    <a href="/blog/{{ $post->slug }}/edit"
                                        class="col-sm-3  btn btn-success mb-2 ">
                                    Edit Post
                                    </a>
                                </span>

                                <span class="p-3">
                                    <form action="/blog/{{ $post->slug }}"
                                        method="POST">
                                        @csrf
                                        @method('delete')
                                    
                                        <button class="col-sm-3  btn btn-danger "
                                            type="submit">
                                            Delete Post
                                        </button>
                                    
                                    </form>
                                </span>
                         

                      @endif
                </div>
            </div>
        </div>
@endforeach


@endsection