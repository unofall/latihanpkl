@extends('template.navbar')
@section('content')
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote-bs4.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <style>
        .body {
            font-family: Poppins, sans-serif;
        }

        .page {
            padding-top: 50px;
        }

        .form-label {
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
                                <input type="file" class="form-control" name="foto" id="foto"
                                    value="{{ $blog->name }}">
                            </div>
                            <div class="mb-3 col-md-4">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $blog->title }}">
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

                        <div class="d-flex" id="formContainer">
                            <div class="mb-3 col-md-6" id="locationFormGroup">
                                <label for="location" class="form-label">Location</label>
                                <textarea name="location" id="location" cols="30" rows="3" class="form-control">{{ $blog->location }}</textarea>
                            </div>
                            <div class="mb-3 col-md-6" id="descriptionFormGroup">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $blog->description }}</textarea>
                            </div>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script>
            $('#description').summernote({
                placeholder: 'description.....',
                tabsize: 2,
                height: 300
            });

            $('#categories').change(function() {
                var selectedCategory = $(this).val();
                if (selectedCategory === 'fashion' || selectedCategory === 'topic') {
                    $('#locationFormGroup').hide();
                    $('#descriptionFormGroup').removeClass('col-md-6').addClass('col-md-12');
                } else {
                    $('#locationFormGroup').show();
                    $('#descriptionFormGroup').removeClass('col-md-12').addClass('col-md-6');
                }
            });
        </script>
    </body>

    </html>
@endsection
