@extends('layouts.base')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card border my-3" style="min-width: 25rem; max-width: 25rem;">
            <div class="card-header bg-transparent border-bottom text-center"><h5>LOGIN</h5></div>
            <div class="card-body p-3">
                <form action="{{route('login')}}" method="post" class="">
                    @csrf
                    <div class="col-auto ">
                        <label for="email" class=" mt-2">Email</label>
                        <input type="text" name="email" id="email" class="form-control {{$errors->has('email') ? 'border-danger' : ''}}"  placeholder="email@example.com">
                        @error('email')
                            <p class="text-danger pt-1 m-0">{{$message}}</p>
                        @enderror
                    </div>

                    <div class="col-auto ">
                        <label for="password" class=" mt-2">Password</label>
                        <input type="password" name="password" id="password" class="form-control {{$errors->has('password') ? 'border-danger' : ''}}"  placeholder="Password">
                        @error('password')
                            <p class="text-danger pt-1 m-0">{{$message}}</p>
                        @enderror
                    </div>
                    <div class="d-grid gap-2 mt-4">
                        <button class="btn btn-primary" type="submit">Sign in</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
