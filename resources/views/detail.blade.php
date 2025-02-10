@extends('template.navbar')
@section('content')
<style>
    .banner {
        padding-top: 50px;
        text-align: center;
    }
    .banner img {
        max-width: 100%;
        height: auto;
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
</style>

<body>
    <div class="container page">
        <div class="banner">
            <img src="{{ asset('storage/foto/'. $blog->foto)}}" alt="Blog Image">
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
    </div>
</body>
@endsection
