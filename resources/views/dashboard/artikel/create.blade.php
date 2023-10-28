@extends('dashboard.layout.master')
@section('content')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <style>
        .trix-button-group.trix-button-group--file-tools {
            display: none;
        }
    </style>

    <form action="/artikel" method="post" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label>Foto</label>
            <input type="file" class="form-control" name="foto">
        </div>
        <div class="mb-3">
            <label>Judul</label>
            <input type="text" class="form-control" name="judul">
        </div>
        <div class="mb-3">
            <label>Body</label>
            <input id="x" type="hidden" name="body">
            <trix-editor input="x"></trix-editor>
        </div>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </form>

    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script>
        document.addEventListener("trix-file-accept", function(event) {
            event.preventDefault();
        });
    </script>
@endsection