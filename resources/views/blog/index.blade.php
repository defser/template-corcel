@extends('layout')

@section('content')

    <div class="blog pt50 pb50">
        <header class="intro-header">
            <img class="detail hidden-xs" src="/images/painel-dicas.jpg" alt="Detalhe Dicas">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                        <div class="site-heading">
                            <h1>Blog</h1>
                            <hr class="small">
                            <span class="subheading">Cliente</span->
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
                                    {!! str_limit(strip_tags($post->Content), $limit = 150, $end = '...') !!}
                                </h3>
                            </a>
                        </div>
                        <hr>
                    @endforeach
                    <!-- Pager -->
                    {{ $posts->links() }}
                </div>
            </div>
        </div>
    </div>

@stop
