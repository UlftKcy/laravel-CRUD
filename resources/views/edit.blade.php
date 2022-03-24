@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card bg-light mt-5 p-3">
            <div class="mt-3 d-flex justify-content-end">
                <a href="{{route('index')}}" class="btn btn-secondary px-4">Geri</a>
            </div>
            <div class="card-body">
                <form id="form_post">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row mb-3">
                                <label for="title" class="col-form-label">Title<span
                                        class="text-danger">*</span></label>
                                <input class="form-control required"
                                       placeholder="Title" type="text" name="title"
                                       id="title" value="{{$post->title}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group row mb-3">
                                <label for="description" class="col-form-label font-weight-bold">Ek
                                    Açıklama</label>
                                <textarea class="form-control" rows="3" name="description"
                                          id="description"
                                          maxlength="100">{{$post->description}}</textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer mt-3 d-flex justify-content-end">
                <button type="submit" class="btn btn-success px-4" id="btn_save_post" data-value={{$post->id}}>Save</button>
            </div>
        </div>
    </div>
@endsection


