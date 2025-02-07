@extends('template.navbar')
@section('content')
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <style>
        .body {
            font-family: Poppins, sans-serif;
        }

        .page {
            padding-top: 150px;
        }

        .form-label{
            font-weight: 400;
            color: black;
        }
    </style>

    <body>
        <div class="container page">
            <div class="card">
                <div class="card-header text-center">
                    <h4>Edit Blog</h4>
                </div>
                <div class="card-body">
                    <form action="/update/{{ $blog->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="d-flex">
                            <div class="mb-3 col-md-4">
                                <label for="foto" class="form-label">Image</label>
                                <input type="file" class="form-control" name="foto" id="foto" value="{{$blog->name}}">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control"
                                    id="title" name="title" value="{{$blog->title}}">
                            </div>

                            <div class="mb-3 col-md-4">
                                <label for="categories" class="form-label">Categories</label>
                                <select class="form-control" name="categories" id="categories">
                                    <option value="">-- Select Category --</option>
                                    @foreach (['travel' => 'Travel', 'topic' => 'Topic', 'fashion' => 'Fashion'] as $key => $value)
                                        <option value="{{ $key }}">{{ $value }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="d-flex">
                            <div class="mb-3 col-md-6">
                                <label for="location" class="form-label">Location</label>
                                <textarea name="location" id="location" cols="30" rows="3"
                                    class="form-control">{{$blog->location}}</textarea>
                            </div>
                            <div class="mb-3 col-md-6">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" cols="30" rows="10"
                                    class="form-control">{{$blog->description}}</textarea>
                            </div>

                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

    </html>
@endsection
