@extends('layouts.base')

@section('content')
    <div class=" d-flex justify-content-center m-3">
        <div class="card border" style="min-width: 35rem;">
            <div class="card-header bg-transparent border-bottom text-center"><h5>Current Tasks</h5></div>
            <div class="card-body">
                <div class="d-flex flex-column">

                    @foreach($tasks as $task)
                        <form action="{{route('delete', $task->id)}}">
                            <div class="d-flex border-bottom pb-1 mb-1">
                                <div class="align-self-center">
                                    {{$task->name}}
                                </div>
                                <div class="ms-auto align-self-center">
                                    <button type="submit" class="btn btn-danger">
                                        DELETE
                                    </button>
                                </div>
                            </div>
                        </form>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
