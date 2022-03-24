@extends('layouts.app')

@section('content')
    <div class="container d-flex justify-content-center">
        <div class="card mt-5 w-50">
            <div class="card-header d-flex justify-content-between">
                <div class="card-title">
                    {{$post->title}}
                </div>
                <div class="card-toolbar">
                    <a href="{{route('index')}}" class="btn btn-secondary px-4">Geri</a>
                </div>
            </div>
            <div class="card-body">
                {{$post->description}}
            </div>
        </div>
    </div>
@endsection
