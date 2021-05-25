@extends('healthWorkerLogedIn')

@section('content')

@if (session()->has ('success'))
    <div class="alart alart-success">
    {{session()->get ('success') }}
    </div>
@endif

@if ($errors->any())
    @foreach ($errors->all() as $error )
    <div class="alart alart-danger">{{$error}}</div>
    @endforeach
@endif


<br>

<form method="post" action="{{ route('update.Password') }}">
    @csrf
    <div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog bg-dark">
            <div class="modal-content">

                <h2 class="m-3 bg-dark">Change Password</h2>

                <div class="modal-body bg-dark">
                    <div class="form-group">
                        <label>Enter Current Password:</label>
                        <input type="password" required name="current_password" class="form-control" placeholder="**" id="">
                    </div>
                </div>
                <div class="modal-body bg-dark">
                    <div class="form-group">
                        <label>Enter New Password:</label>
                        <input type="password" required name="new_password" class="form-control" placeholder="**"
                            id="">
                    </div>
                </div>
                <div class="modal-body bg-dark">
                    <div class="form-group">
                        <label>Confirm Password:</label>
                        <input type="password" required name="confirm_password" class="form-control" placeholder="*" id="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </div>
    </div>
</form>
<button class="btn btn-warning m-1" href="{{route('update.Password')}}" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Change Password</button>

@endsection

