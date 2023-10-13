@extends('front.authlayout')
@section('content')

<div class="d-flex justify-content-center align-items-center" style="height: 100vh">
    <div>
        <h1 class="text-center text-primary" style="font-family: poppins">Cyber Media</h1>
        <div class="card mb-3" style="width: 428px">
            <div class="card-body">
                <div class="mb-2">
                    <label>Email</label>
                    <input class="form-control" type="text" name="" id="">
                </div>
                <div class="mb-2">
                    <label>Password</label>
                    <input class="form-control" type="password" name="" id="">
                </div>
                <p>Dont have account? <a class="text-primary text-decoration-none" href="{{ route('signup') }}">Sign In</a></p>
            </div>
        </div>
        <div class="btn btn-primary d-block">Sign In</div>
    </div>
</div>

@endsection