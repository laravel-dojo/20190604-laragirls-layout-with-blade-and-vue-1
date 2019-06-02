@extends('layouts.master')

@section('page-title', '首頁')

@section('page-style')
    <link href="{{ asset('css/home.css') }}" rel="stylesheet">
@endsection

@section('page-content')
<!-- Page Content -->
<div class="container">

    <!-- Heading Row -->
    <div class="row align-items-center my-5">
        <div class="col-lg-7">
            <img class="img-fluid rounded mb-4 mb-lg-0" src="http://placehold.it/900x400" alt="">
        </div>
        <!-- /.col-lg-8 -->
        <div class="col-lg-5">
            <h1 class="font-weight-light">專屬女性的程式學習社群</h1>
            <p>
                嗨，我們是 LaraGirls！我們是台灣 Laravel 的女性學習社群，希望能夠促進 Laravel 的學習及資源整合，並推廣 Laravel 讓更多人熟知這個優雅的 PHP 框架 :)
                目前 LaraGirls 將不定時舉辦讀書會與線下活動，想要得知第一手的消息，別忘記追蹤我們喔！
            </p>
            <a class="btn btn-primary" href="#">加入我們</a>
        </div>
        <!-- /.col-md-4 -->
    </div>
    <!-- /.row -->

    <!-- Call to Action Well -->
    <div class="card text-white bg-secondary my-5 py-4 text-center">
        <div class="card-body">
            <h2>LaraGirls 在做什麼？</h2>
            <p class="text-white m-0">
                我們是一群互相學習，一起探索 Laravel 的夥伴！人說「一群人走在一起不孤單」，加入 LaraGirls，你將會有意想不到的陪伴與收穫。
            </p>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Card One</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary btn-sm">More Info</a>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Card Two</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod tenetur ex natus at dolorem enim! Nesciunt pariatur voluptatem sunt quam eaque, vel, non in id dolore voluptates quos eligendi labore.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary btn-sm">More Info</a>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->
        <div class="col-md-4 mb-5">
            <div class="card h-100">
                <div class="card-body">
                    <h2 class="card-title">Card Three</h2>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem magni quas ex numquam, maxime minus quam molestias corporis quod, ea minima accusamus.</p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary btn-sm">More Info</a>
                </div>
            </div>
        </div>
        <!-- /.col-md-4 -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
@endsection

