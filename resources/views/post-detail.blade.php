@extends('layouts.default')

@section('title')
    Post Title
@endsection

@section('content')
    <style>
        .fa {
            padding-top: 8px;
            width: 30px;
            height: 30px;
            text-align: center;
            text-decoration: none;
            margin: 5px 2px;
            border-radius: 50%;
        }

        .fa:hover {
            opacity: 0.7;
            transition: .3s;
        }

        .fa-facebook {
            background: #3B5998;
            color: white;
        }

        .fa-twitter {
            background: #55ACEE;
            color: white;
        }

        .fa-linkedin {
            background: #007bb5;
            color: white;
        }

        .fa-instagram {
            background: #b20000;
            color: white;
        }
    </style>

    <div class="container">
        <div class="row d-inline-flex border-bottom border-2 border-black pe-2 my-3 fw-bold">
            IT REALLY COUNTS
        </div>
        <div class="row">
            <div class="fs-1 fw-bold">
                {{ $post->title }}
            </div>
        </div>
        <div class="row">
            <div>
                {{ $post->description }}
            </div>
        </div>
        <div class="row">
            <div class="d-flex">
                <div class="me-1">
                    By <strong>{{ $post->author }}</strong>
                </div>
                <div class="mx-1">
                    |
                </div>
                <div class="mx-1">
                    {{ date('d M, Y', strtotime($post->created_at)) }}
                </div>

                @if ($post->category->name === 'Long Reads')
                    <div class="bg-danger text-white px-3 rounded-2 ms-1">
                        Long Reads
                    </div>
                @elseif ($post->category->name === 'Medium Reads')
                    <div class="bg-warning text-white px-3 rounded-2 ms-1">
                        Medium Reads
                    </div>
                @else
                    <div class="bg-success text-white px-3 rounded-2 ms-1">
                        Quick Reads
                    </div>
                @endif
            </div>
        </div>
        <div class="row my-4">
            <img src="{{ asset($post->thumbnail) }}" alt="">
        </div>
        <div class="row">
            <div class="d-flex">
                <div class="me-2">
                    <a href="#" class="fa fa-linkedin"></a>
                </div>
                <div class="mx-2">
                    <a href="#" class="fa fa-twitter"></a>
                </div>
                <div class="mx-2">
                    <a href="#" class="fa fa-facebook"></a>
                </div>
                <div class="ms-2">
                    <a href="#" class="fa fa-instagram"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <p>
                {{ $post->content }}
            </p>
        </div>
        <div class="row">
            <div class="my-2 fw-bold">
                Video Section
            </div>
            <div>
                <iframe width="100%" height="700px" src="https://www.youtube.com/embed"></iframe>
            </div>
        </div>
    </div>
@endsection
