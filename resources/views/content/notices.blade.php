@extends('master')

@section('content')
<br>
<div class="title text-center mb-3  bg-secondary text-white">
    <h3 class="font-weight-bolder p-2">Notice</h3>
</div>


@foreach ($notice as $data)

        <div class="rounded-3 p-3 bg-light text-dark">
            <h1 class="">{{ $data->title }}</h1>
            <small>Published on: {{ $data->created_at }}</small>
            <div class=" row">
                <div class="col-md-4">
                    @if ($data->file)
                    <img src="{{url('/files/photo/'.$data->file)}}" style="height: 15em">
                    @else
                    <img src="https://assetsds.cdnedge.bluemix.net/sites/default/files/styles/very_big_1/public/feature/images/2021/02/10/vaccine-side-effects.jpg?itok=UO7w--L0" style="height: 8em">
                    @endif
                </div>
                <div class="col text-start ">
                    <p class="fs-4">{{ $data->body}}</p>
                </div>
                {{-- <div>
                    <a class="btn btn-primary" href="">Read more...</a>
                </div> --}}
            </div>
        </div>
        <hr>


    @endforeach



@endsection
