@extends('layout.master')

@section('content')
<div class="container my-5">
    <h2 class="text-center mb-4">Our Writers:</h2>
    <div class="row justify-content-center">
        @foreach ($authors as $author)
            <div class="col-md-4 text-center mb-4">
                <div class="card shadow-sm">
                    <div class="card-body">
                    <a href="{{ route('detailauthor', $author->id) }}" class="text-decoration-none text-dark">
                        <div class="rounded-circle bg-light d-flex align-items-center justify-content-center mx-auto mb-3" 
                             style="width: 100px; height: 100px; font-size: 24px; color: #6c757d;">
                            <span>{{ substr($author->name, 0, 1) }}</span>
                        </div>
                        
                        <h5 class="card-title fw-bold">{{ $author->name }}</h5>
                        <p class="card-text text-muted">
                            {{$author->category->name}}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection