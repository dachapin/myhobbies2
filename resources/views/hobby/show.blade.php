@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-11">
            <div class="card">
                <div class="card-header">{{ __('Hobby Detail') }}</div>

                <div class="card-body">
                    <b>{{ $hobby->name }}</b>
                    <p>{{ $hobby->description }}</p>
                </div>
            </div>
            <div class="mt-2">
                <a href="{{ home_url() }}" class="btn btn-success btn-sm">Back to Overview</a>
            </div>
        </div>
    </div>
</div>
@endsection