@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">

                <div class="card" style="width: 18rem;">

                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{!! $post->content !!}</p>
                        <h5 class="card-title">{{ $post->slug }}</h5>
                        <h5 class="card-title">{{ $post->category }}</h5>
                        <a href="{{ route('admin.posts.index') }}" class="btn btn-primary">Torna indietro</a>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
