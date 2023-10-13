@extends('front.authlayout')
@section('content')

<form action="{{ route('signup.create') }}" method="POST">
    @csrf
    <div class="d-flex justify-content-center align-items-center" style="height: 100vh">
        <div>
            <h1 class="text-center text-primary" style="font-family: poppins">Cyber Media</h1>
            <div class="card mb-3" style="width: 428px">
                <div class="card-body">
                    <div class="mb-2">
                        <label for="name">Username</label>
                        <input class="form-control" type="text" name="name" id="">
                        @error('name')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="email">Email</label>
                        <input class="form-control" type="text" name="email" id="">
                        @error('email')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <label for="password">Password</label>
                        <input class="form-control" type="password" name="password" id="">
                        @error('password')
                            <p class="text-danger text-xs mt-2">{{ $message }}</p>
                        @enderror
                    </div>
                    <p>Already have account? <a class="text-primary text-decoration-none" href="{{ route('signin') }}">Sign In</a></p>
                </div>
            </div>
            <button class="btn btn-primary d-block col-12" type="submit">Submit</button>
        </div>
    </div>
</form>

@endsection