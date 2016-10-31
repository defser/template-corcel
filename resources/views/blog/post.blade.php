@extends('layout')

@section('content')
<!-- Page Header -->
<!-- Set your background image for this header on the line below. -->
<div class="blog">
    <header class="intro-header post">
        
        <div class="container">
            
            <div class="row">
                <div class="post-heading-area col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                
                    <a href="/blog" class="back">< Voltar</a>

                    <div class="post-heading">
                        <h1>{{$post->Title}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="content col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    {!! $post->Content !!}    
                </div>
            </div>
        </div>
    </article>
</div>
@stop
