@extends('layout')

@section('content')

    <div class="blog pt50 pb50">
        <header class="intro-header" style="background-image: url('/images/home-bg.jpg')">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="site-heading">
                            <h1>Clean Blog</h1>
                            <hr class="small">
                            <span class="subheading">A Clean Blog Theme</span>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    
                    @foreach ($posts as $key => $post)
                        <div class="post-preview">
                            <a href="/blog/{{$post->Slug}}">
                                <h2 class="post-title">
                                    {{$post->Title}}
                                </h2>
                                <h3 class="post-subtitle">
                                    {{$post->Content}}
                                </h3>
                            </a>
                        </div>
                        <hr>
                    @endforeach
                    <!-- Pager -->
                    <ul class="pager">
                        <li class="next">
                            <a href="#">Posts Anteriores &rarr;</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

@stop
