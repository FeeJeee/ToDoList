@extends('layouts.base')

@section('content')



    <form action="" method="post">
        @csrf
        <div class=" d-flex justify-content-center m-3">
            <div class="card border" style="min-width: 25rem;">
                <div class="card-header bg-transparent border-bottom text-center"><h5>New Task</h5></div>
                <div class="card-body text-success">
                    <div class="d-flex flex-column">
                        <div class="">
                            <label for="name" class="form-label">Task</label>
                            <input type="text" name="name" id="name" class="form-control {{$errors->has('name') ? 'border-danger' : ''}}"  placeholder="">
                            @error('name')
                                <p class="pt-1 m-0 text-danger"> {{$message}}</p>
                            @enderror
                        </div>
                        <div class="d-grid gap-2 ">
                            <button type="submit" class="btn btn-primary d-grid gap-2 mt-4">
                                Add Task
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
