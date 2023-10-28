@extends('dashboard.layout.master')
@section('content')
    <a href="/artikel/create" class="btn btn-success mb-4"><i class="fa fa-plus"></i> Tambah</a>
    <div class="row d-flex justify-content-evenly">
        @foreach ($artikels as $artikel)
            <div class="col-4 mb-3">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/' . $artikel->foto) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $artikel->judul }}</h5>
                        <div class="d-flex justify-content-between">
                            <p class="text-muted">{{ $artikel->user->name }}</p>
                            <p class="text-muted">{{ $artikel->created_at }}</p>
                        </div>
                        <p class="card-text">{{ substr($artikel->body, 0, 50) }}...</p>
                        <a href="/home/artikel/{{ $artikel->slug }}" class="btn btn-info"><i class="fa fa-eye"></i></a>
                        <a href="/artikel/{{ $artikel->slug }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                        <a href="/artikel/{{ $artikel->slug }}/destroy" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

        {{ $artikels->links() }}

@endsection