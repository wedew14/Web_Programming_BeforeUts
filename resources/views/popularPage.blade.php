@extends('layout.master')

@section('content')
<div class="container">
    <h2 class="my-4" style="font-weight: bold;">
        Popular
    </h2>
    <div class="row">
        @foreach($threadLists as $threadlist)
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="/thread_vector.jpg" class="card-img-top" alt="no img">
                <div class="card-body">
                    <h5 class="card-title">{{ $threadlist->category->name }}</h5>
                    <p class="text-muted">14 May 2024 | by: {{ $threadlist->author->name }}</p>
                    <p class="card-text">{{ Str::limit($threadlist->detail, 100) }}</p>
                    <a href="{{ route('detailpage') }}" class="btn btn-dark">Read more...</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        {{ $threadLists->links() }}
    </div>
</div>
@endsection
