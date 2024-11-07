@extends('layout.master')

@section('content')
<div class="container my-5">
    <div class="d-flex align-items-center mb-4">
        <img src="/vector_profile.jpeg" alt="{{ $authordetails->name }}" class="rounded-circle" style="width: 80px; height: 80px;">
        <div class="ms-3">
            <h3>{{ $authordetails->name }}</h3>
            <p class="text-muted">{{ $authordetails->category->name }}</p>
        </div>
    </div>

    @foreach ($authordetails->threads as $thread)
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="/background.jpg" alt="Category Image" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $thread->title }}</h5>
                    <p class="card-text"><small class="text-muted">14 May 2024 | by {{ $authordetails->name }}</small></p>
                    <p class="card-text">{{ $thread->excerpt }}</p>
                    <a href="#" class="btn btn-dark">read more...</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
