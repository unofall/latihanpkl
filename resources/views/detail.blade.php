@extends('template.navbar')
@section('content')
    <style>
        .banner {
            padding-top: 50px;
            text-align: center;
        }

        .banner img {
            width: 400px;
            height: 250px;
            object-fit: cover;
            border-radius: 10px;
        }

        .text-title {
            font-size: 2.5rem;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }

        .publication-info {
            font-size: 0.9rem;
            color: #777;
            text-align: center;
            margin-top: 10px;
        }

        .text-description {
            font-size: 1.1rem;
            line-height: 1.8;
            text-align: justify;
            margin: 2rem 0;
            color: #333;
        }

        .page {
            padding-bottom: 100px;
        }

        /* Fashion Category Specific Styles */
        .fashion-banner {
            display: flex;
            padding-top: 50px;
            text-align: center;
        }

        .fashion-banner img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: top;
            border-radius: 10px;
        }

        .fashion-title {
            padding-top: 30px;
            font-size: 3rem;
            font-weight: bold;
            text-align: center;
            margin-top: 25px;

        }
        .fashion-description {
            font-size: 16px;
            line-height: 25px;
            text-align: justify;
            margin: 2rem 0;
            color: #444;
        }
    </style>

    <body>
        <div class="container page">
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            @if ($blog->categories == 'fashion')
                <div class="row">
                    <div class="col-md-4">
                        <div class="fashion-banner">
                            <img src="{{ asset('storage/foto/' . $blog->foto) }}" alt="Fashion Blog Image">
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="fashion-title">
                            {{ $blog->title }}
                        </div>
                        {{-- <div class="fashion-publication-info">
                    Dipublikasikan pada: {{ \Carbon\Carbon::parse($blog->date)->format('d M Y') }}
                </div> --}}
                        <div class="fashion-description">
                            {!! $blog->description !!}
                        </div>
                    </div>
                </div>
            @else
                <div class="banner">
                    <img src="{{ asset('storage/foto/' . $blog->foto) }}" alt="Blog Image">
                </div>
                <div class="text-title">
                    {{ $blog->title }}
                </div>
                <div class="publication-info">
                    Dipublikasikan pada: {{ \Carbon\Carbon::parse($blog->date)->format('d M Y') }}
                </div>
                <div class="text-description">
                    {!! $blog->description !!}
                </div>
            @endif
            <div class="row mt-5">
                <div class="col-md-12">
                    <h3>Comments</h3>
                    {{-- <a href="/comment/{{$blog->id}}" class="btn btn-primary">Add Comment</a> --}}
                    <form action="/addcomment/{{ $blog->id }}" method="POST" class="comment-form">
                        @csrf
                        <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <textarea id="desc_comment" cols="10" rows="3" name="desc_comment" class="form-control"
                            style="margin : 20px 0px 20px 0px"></textarea>
                        <button class="btn btn-primary" type="submit">Kirim Komentar</button>
                    </form>

                    @php
                        use Carbon\Carbon;
                    @endphp

                    @foreach ($comment as $key => $item)
                        <div class="card mt-3 mb-3">
                            <div class="row">
                                <div class="col-1">
                                    <img src="{{ asset('assets/img/🤨.jpg') }}" class="img-fluid rounded-circle"
                                        alt="" style="width: 80px; height: 65px; object-fit: cover; margin: 25px">
                                </div>
                                <div class="col">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <h6 class="card-title mb-1 text-dark fw-bold">{{ $item->user->name }}</h6>
                                            <p class="card-text">{{ Carbon::parse($item->created_at)->diffForHumans() }}
                                            </p>
                                        </div>
                                        <p class="card-text"><medium class="text-muted">{{ $item->desc_comment }}</medium>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </body>
@endsection
