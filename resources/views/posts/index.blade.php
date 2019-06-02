@extends('layouts.master')

@section('page-title', '部落格')

@section('page-style')
    <link href="{{ asset('css/posts.css') }}" rel="stylesheet">
@endsection

@section('page-content')
<!-- Page Content -->
<div class="container">

    <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
        <h1 class="display-3">部落格</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa, ipsam, eligendi, in quo sunt possimus non incidunt odit vero aliquid similique quaerat nam nobis illo aspernatur vitae fugiat numquam repellat.</p>
        <a href="#" class="btn btn-primary btn-lg">Call to action!</a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

        @foreach(range(1, 4) as $id)
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100">
                <img class="card-img-top" src="http://placehold.it/500x325" alt="">
                <div class="card-body">
                    <h4 class="card-title">文章標題 {{ $id }}</h4>
                    <p class="card-text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.
                    </p>
                </div>
                <div class="card-footer">
                    <a href="{{ url('posts/'.$id) }}" class="btn btn-primary">閱讀全文</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
@endsection
