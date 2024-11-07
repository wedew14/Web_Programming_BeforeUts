@extends('layout.master')

@section('content')
<div class="container my-5">
    <h2>{{$pagedetails}}</h2>
    <div>
        <img src="/background.jpg" alt="">
    </div>

    <div>
        <p>14 May 2024 | By Bia</p>
    </div>

    <div>
        <p>{{$threadBody}}</p>
    </div>
</div>
@endsection