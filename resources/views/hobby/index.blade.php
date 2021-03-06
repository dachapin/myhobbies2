@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('All the hobbies') }}</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($hobbies as $hobby)
                            <li class="list-group-item">
                                <a href="{{ home_url() }}/hobby/{{ $hobby->id }}">{{ $hobby->name }}</a>
                                <a href="{{ home_url() }}/hobby/{{ $hobby->id }}/edit" class="btn btn-sm btn-light">Edit</a>
                                <form action="{{ home_url() }}/hobby/{{ $hobby->id }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <input type="submit" value="Delete" class="btn btn-sm btn-outline-danger">
                                </form>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="mt-2">
                <a href="./hobby/create" class="btn btn-success btn-sm">Create new Hobby</a>
            </div>
        </div>
    </div>
</div>
@endsection
