@extends('frontend.master')

@section('content')
    <header class="masthead" style="background-image: url({{ asset('frontend/assets/img/home-bg.jpg') }})">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h2>Anjuman's Blog</h2>
                        <span class="subheading">All kind of technical blogs you will find here!</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                @foreach ($blogs as $blog)
                   <div class="post-preview">
                    <a href="{{url('/blog-details/'.$blog->id)}}">
                        <h2 class="post-title">{{$blog->title}}</h2>
                        <h3 class="post-subtitle">{{$blog->subtitle}}</h3>
                    </a>
                    <p class="post-meta">
                        Posted by
                        <a href="{{url('/blog-details/'.$blog->id)}}">{{$blog->author_name}}</a>
                        on {{$blog->created_at->format('F,d,Y')}}
                    </p>
                </div>
                <!-- Divider-->
                <hr class="my-4" />      
                   @endforeach 
                    
               {{$blogs->links('pagination::Bootstrap-5')}}


                {{-- <div class="d-flex justify-content-end mb-4"><a class="btn btn-primary text-uppercase" href="#!">Older
                        Posts →</a></div> --}}
            </div>
        </div>
    </div>
@endsection
