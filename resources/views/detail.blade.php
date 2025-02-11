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
        padding-top: 50px;
        font-size: 3rem;
        font-weight: bold;
        text-align: center;
        margin-top: 20px;
        
    }
    .fashion-publication-info {
        font-size: 0.8rem;
        color: #555;
        text-align: center;
        margin-top: 20px;
    }
    .fashion-description {
        font-size: 1.1rem;
        line-height: 1.5;
        text-align: justify;
        margin: 3rem 0;
        color: #444;
    }
</style>

<body>
    <div class="container page">
        @if($blog->categories == 'fashion')
        <div class="row">
            <div class="col-md-6">
                <div class="fashion-banner">
                    <img src="{{ asset('storage/foto/'. $blog->foto)}}" alt="Fashion Blog Image" >
                </div>
            </div>

            <div class="col-md-6">
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
                <img src="{{ asset('storage/foto/'. $blog->foto)}}" alt="Blog Image" >
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
    </div>
</body>
@endsection
