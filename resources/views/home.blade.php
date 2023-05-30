@extends('layouts.default')

@section('title')
    Home Page
@endsection

@section('content')
    <div class="container">
        <div class="py-4">
            <section class="row">
                <div class="col-5">
                    <img class="img-fluid" width="500px" height="450px" src="{{ asset($highlighted_post->thumbnail) }}" alt="gambarBerita">
                </div>
                <div class="col-7">
                    <div class=" pe-2 d-inline-flex fs-6 border-bottom border-2 border-black fw-bold">
                        IT REALLY COUNTS
                    </div>
                    <div class="fs-1 pe-5 my-2 fw-bold">
                        <a href="{{ route('postdetail', $highlighted_post->id) }}" class="text-decoration-none text-black">{{ $highlighted_post->title }}</a>
                    </div>
                    <div>
                        {{ $highlighted_post->description }}
                    </div>
                </div>
            </section>
        </div>
        <section class="py-4">
            <div class="d-inline-flex border-bottom border-2 border-black fw-bold">
                LATEST BOOK REVIEWS
            </div>
            <div class="mt-3">
                <div class="row">
                    @foreach ($latest_posts as $post)
                        <div class="col-3">
                            <div>
                                <img class="img-fluid" width="300px" height="280px" src="{{ asset($post->thumbnail) }}" alt="gambarBerita">
                            </div>
                            <div class="fw-bold">
                                <a href="{{ route('postdetail', $post->id) }}" class="text-decoration-none text-black">{{ $post->title }}</a>
                            </div>
                            <div>
                                {{ $post->description }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
    <section class="container-fuild py-3 bg-black" style="padding-inline: 100px;">
        <div class="py-2 pe-3 d-inline-flex border-bottom border-2 border-white text-white fw-bold">
            Book Series Review
        </div>
        <div class="mt-3">
            <div class="row">
                @foreach ($all_posts as $post)
                    <div class="col-4">
                        <div>
                            <img class="img-fluid" src="{{ asset($post->thumbnail) }}" alt="gambarBerita">
                        </div>
                        <div class="text-white py-3 fw-bold fs-5">
                            {{ $post->title }}
                        </div>
                        <a class="btn btn-outline-light rounded-0 px-4" href="{{ route('postdetail', $post->id) }}">
                            Read post
                        </a>
                    </div>
                @endforeach
            </div>
            <div>
                {{ $all_posts->links() }}
            </div>
        </div>
    </section>
@endsection