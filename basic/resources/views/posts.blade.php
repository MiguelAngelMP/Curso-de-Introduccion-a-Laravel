@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row">
                <div class="col-8">
                    {{ $posts->links() }}
                </div>
                <div class="col-4">
                    Total de regitros {{ $posts->total() }}
                </div>
            </div>
            @foreach ($posts as $post)
                <div class="card mb-4">
                    <div class="card-body">
                       
                        @if ($post->image)
                            <img src="{{ $post->get_image }}" alt="imagen" class="img-thumbnail ">
                        @elseif($post->iframe)
                        <div class="embed-responsive embed-responsive-16by9">
                            {!! $post->iframe !!}
                        </div>
                        @endif

                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">
                            {{ $post->get_excerpt }}
                            <a href="{{ route('post', $post) }}">Leer más</a>
                        </p>
                        <p class="text-muted mb-0">
                            <em>
                                &adash; {{ $post->user->name }}
                            </em>
                            {{ $post->created_at->format('d M Y') }}
                        </p>
                    </div>
                </div>
            @endforeach
            <div class="row">
                <div class="col-8">
                    {{ $posts->links() }}
                </div>
                <div class="col-4">
                    Total de regitros {{ $posts->total() }}
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
