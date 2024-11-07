@extends('layout.master')

@section('picture')
<div class="container-fluid p-0">
    <img src="/bg.jpeg" alt="" class="img-fluid w-100" style="height:50vh;">
</div>
@endsection

@section('content')
<div class="container my-4">

    @foreach($threads as $thread)
    <article>
        <div class="row">
            <div class="col-md-9 mb-4">
                <div class="card border-3 shadow-sm d-flex flex-row">
                    <div class="col-5 p-0">
                        <img src="/machine_learning.jpeg" alt="Test" class="img-fluid h-100 w-100 rounded-pill" style="object-fit: cover;">
                    </div>

                    <div class="col-7">
                        <div class="card-body">
                            <h5 class="card-title">{{$thread->category->name}}</h5>
                            <p class="text-muted mb-1"><small> 14 May 2024 | by {{$thread->author->name}}<small></p>
                            <p class="card-text">{{$thread->detail}}</p>
                            <a href="#" class="btn btn-dark btn-sm rounded-pill" >read more...</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    @endforeach

</div>

@endsection