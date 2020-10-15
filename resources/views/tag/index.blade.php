@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('All the tag') }}</div>

                <div class="card-body">
                    <ul class="list-group">
                        @foreach($tags as $tag)
                            <li class="list-group-item">
                                <a href="{{ home_url() }}/tag/{{ $tag->id }}">{{ $tag->name }}</a>
                                <a href="{{ home_url() }}/tag/{{ $tag->id }}/edit" class="btn btn-sm btn-light">Edit</a>
                                <form action="{{ home_url() }}/tag/{{ $tag->id }}" method="post">
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
                <a href="{{ home_url() }}/tag/create" class="btn btn-success btn-sm">Create new Tag</a>
            </div>
        </div>
    </div>
</div>
@endsection
