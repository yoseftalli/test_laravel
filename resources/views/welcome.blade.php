@extends('layouts.default')
@section('body')
<section class="jumbotron text-center">
    <div class="container">
      <h1>مرحباً بكم</h1>
      <p class="lead text-muted">مرحباً بكم في مدونتي</p>
    </div>
  </section>

    <div class="row">
      @foreach ($articles as $article)
      <div class="col-sm-6 col-md-4 col-xl-3 mb-3">
        <a href="{{url('article/'.$article->id)}}">
          <img width="100%" class="bd-placeholder-img card-img-top" src="{{url('uploads/'.$article->thumbnail)}}"/>
          <h5 class="mb-1">{{$article->title}}</h5>
        </a>
        <p class="text-muted">{{$article->created_at}}</p>
      </div>
      @endforeach
@endsection