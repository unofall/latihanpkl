@extends('template.navbar-admin')
@section('content')
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            font-family: Poppins, sans-serif;
        }

        .table-responsive {
            margin-top: 20px;
        }

        .table th,
        .table td {
            vertical-align: middle;
            text-align: center;
        }

        .text-truncate {
            max-width: 400px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .btn-group a {
            margin-right: 5px;
        }

        .page-content {
            padding-top: 50px;
            padding-bottom: 100px;
        }
    </style>
    </head>

    <body>
        <div class="container page-content">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <h3>Your Blog</h3>
                <a href="/create" class="btn btn-primary">+ Create Your Blog</a>
            </div>
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="table">
                        <tr>
                            <th>No</th>
                            <th>Foto</th>
                            <th>Title</th>
                            <th>Categories</th>
                            <th>Description</th>
                            <th>Location</th>
                            {{-- <th>Date</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blog as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>
                                    <img src="{{ asset('storage/foto/' . $item->foto) }}" class="rounded" width="100" height="100" style="object-fit: cover; object-position: top"
                                        alt="Blog Image">
                                </td>
                                <td>{{ $item->title }}</td>
                                <td>{{ ucfirst($item->categories) }}</td>
                                <td class="text-truncate">{!! Str::limit($item->description, 50, '...') !!}</td>
                                <td>
                                    {{ $item->location ?? 'No location' }}
                                </td>
                                
                                {{-- <td class="text-truncate">
                                    {{ \Carbon\Carbon::parse($item->date)->translatedFormat('d F Y') }}
                                </td> --}}
                                <td>
                                    <div class="btn-group">
                                        <a href="/update/{{ $item->id }}" class="btn btn-info btn-sm">Update</a>
                                        <a href="/delete/{{ $item->id }}"
                                            class="btn btn-danger btn-sm">Delete</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </body>

    </html>
@endsection
