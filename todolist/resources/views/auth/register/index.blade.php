@extends('layouts.base')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card border my-3" style="min-width: 25rem; max-width: 25rem;">
            <div class="card-header bg-transparent border-bottom text-center"><h5>REGISTER</h5></div>
            <div class="card-body p-3">

{{--                <ul>--}}
{{--                    @foreach($errors->all() as $message)--}}
{{--                        <li>{{$message}}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}

                <form action="{{route('register')}}" method="post" class="">
                    @csrf
                    <div class="col-auto ">
                        <label for="name" class=" mt-2">Name</label>
                        <input type="text" name="name" id = "name"  class="form-control {{$errors->has('name') ? 'border-danger' : ''}}"  placeholder="Enter your name">
                        @error('name')
                            <p class="pt-1 m-0 text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-auto ">
                        <label for="email" class=" mt-2">Email</label>
                        <input type="text" name="email" id = "email" class="form-control {{$errors->has('email') ? 'border-danger' : ''}}" placeholder="email@example.com">
                        @error('email')
                            <p class="pt-1 m-0 text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-auto ">
                        <label for="password" class=" mt-2">Password</label>
                        <input type="password" name="password" id="password" class="form-control {{$errors->has('password') ? 'border-danger' : ''}}"  placeholder="Password">
                        @error('password')
                            <p class="pt-1 m-0 text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-auto ">
                        <label for="password_confirmation" class=" mt-2">Password confirmation</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control {{$errors->has('password_confirmation') ? 'border-danger' : ''}}"  placeholder="Password">
                        @error('password_confirmation')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-grid gap-2 mt-4">
                        <button class="btn btn-primary" type="submit">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
