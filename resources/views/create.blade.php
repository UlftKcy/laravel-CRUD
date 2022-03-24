@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card bg-light mt-5 p-3">
            <div class="mt-3 d-flex justify-content-end">
                <a href="{{route('index')}}" class="btn btn-secondary px-4">Geri</a>
            </div>
            <div class="card-body">
                <form id="form_post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group row mb-3">
                                <label for="form_file" class="col-form-label">
                                    Dosya<span class="text-danger">*</span>
                                </label>
                                <div class="button_outer">
                                    <div class="btn_upload">
                                        <input type="file" name="form_file" id="form_file"
                                               accept=".png, .jpg, .jpeg,.doc,.docx,.xls,.xlsx,.pdf"/><i
                                            class="fas fa-cloud-upload-alt icon-custom-color icon-md mr-3"></i><span
                                            class="font-size-lg">Dosya Ekle</span>
                                        <input type="hidden" name="profile_avatar_remove"/>
                                    </div>
                                    <div class="processing_bar"></div>
                                    <div class="success_box"></div>
                                </div>
                                <div class="error_msg text-center"></div>
                                <div class="uploaded_file_view" id="uploaded_view">
                                    <span class="file_remove">X</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group row mb-3">
                                <label for="title" class="col-form-label">Title<span
                                        class="text-danger">*</span></label>
                                <input class="form-control required"
                                       placeholder="Title" type="text" name="title"
                                       id="title"/>
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
                                          maxlength="100"></textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card-footer mt-3 d-flex justify-content-end">
                <button type="submit" class="btn btn-success px-4" id="btn_create_post">Create</button>
            </div>
        </div>
    </div>
@endsection

