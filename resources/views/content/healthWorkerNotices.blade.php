@extends('healthWorkerLogedIn')


@section('content')
<br>
    <div class="title text-center mb-3  bg-primary text-dark">
        <h3 class="font-weight-bolder p-2">Notices</h3>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Post Notice
    </button>

    <hr>


    {{-- <div class="row">
        <div class="col-md-3">
            <div class="card-group">

                <div class="card">
                    <img src=" https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885__480.jpg"
                        class="card-img-top h-50 w-50 m-auto" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal height
                            action.</p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">Last updated 3 mins ago</small>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}



    @foreach ($notice as $data)

        <div class="rounded-3 p-3 bg-light text-dark">
            <h1 class="">{{ $data->title }}</h1>
            <small>Published on: {{ $data->date }}</small>
            <div class=" row">
                <div class="col-md-4">
                    @if ($data->file)
                    <img src="{{url('/files/photo/'.$data->file)}}" style="height: 12em">
                    @else
                    <img src="https://assetsds.cdnedge.bluemix.net/sites/default/files/styles/very_big_1/public/feature/images/2021/02/10/vaccine-side-effects.jpg?itok=UO7w--L0" style="height: 8em">
                    @endif
                </div>
                <div class="col text-start">
                    <p class="fs-4">{{ $data->body }}</p>
                </div>
                {{-- <div>
                    <a class="btn btn-primary" href="">Read more...</a>
                </div> --}}
            </div>
        </div>
        <hr>


    @endforeach



    <!-- Modal -->
    <form class="container bg-light" method="POST" action="{{ route('create.healthWorkerNotice') }}" enctype="multipart/form-data">
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title text-dark" id="exampleModalLabel">Create Notice</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        @csrf
                        <div class="modal-body">

                            <div class="form-group text-dark">
                                <label for="exampleInputEmail3 ">Date</label>
                                <input type="date" class="form-control" name="date">
                            </div>

                            <div class="form-group text-dark">
                                <label for="exampleInputEmail3 ">Title</label>
                                <input type="text" class="form-control" name="title">
                            </div>

                            <div class="form-group text-dark">
                                <label for="exampleInputEmail3 ">Decription</label>
                                <input type="textarea"  class="form-control" name="body">
                            </div>
                            <div class="form-group text-dark">
                                <label for="exampleInputEmail3 ">File</label>
                                <input type="file" class="form-control" name="file">
                            </div>

                            <br>

                            <button type="submit" class="btn btn-primary" data-bs-toggle="modal">
                                Submit
                            </button>
                            <br>

                        </div>

                    </div>
                </div>
            </div>
    </form>
    @endsection
