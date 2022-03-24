@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card card-custom mt-5 px-3">
            <div class="mt-3">
                <a href="{{route('create')}}" class="btn btn-primary">Create</a>
            </div>
            <div class="card-body px-0">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <th scope="row">{{$post->id}}</th>
                            <td class="w-50">{{$post->title}}</td>
                            <td class="w-40">
                                <div class="d-flex justify-content-center">
                                    <a href="{{route("show",$post->id)}}" class="btn btn-success me-2">Show</a>
                                    <a href="{{route("edit",$post->id)}}" class="btn btn-warning me-2">Edit</a>
                                    <a href="{{route("delete",$post->id)}}" class="btn btn-danger me-2">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
