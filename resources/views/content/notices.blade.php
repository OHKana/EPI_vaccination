@extends('master')

@section('content')

<div class="title text-center mb-3  bg-primary text-dark">
    <h3 class="font-weight-bolder p-2">Notice</h3>
</div>


@foreach ($notice as $data)

        <div class="rounded-3 p-3 bg-light text-dark">
            <h1 class="">{{ $data->title }}</h1>
            <small>Published on: {{ $data->created_at }}</small>
            <div class=" row">
                <div class="col-md-2">
                    <img src="{{$data->file}}" style="height: 4em">
                </div>
                <div class="col text-start">
                    <p class="fs-4">{{ $data->body}}</p>
                </div>
                <div>
                    <a class="btn btn-primary" href="">Read more...</a>
                </div>
            </div>
        </div>
        <hr>


    @endforeach



@endsection
