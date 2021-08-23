@extends('backend.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="row justify-content-center">

            <div class="col-md-10 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Category Item</h4>
                        <p class="card-description">
                            {{-- Add Category Item --}}
                        </p>
                        <form class="forms-sample" action="" method="post" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                                    placeholder="Name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="img[]"
                                    class="file-upload-default @error('img') is-invalid @enderror">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled=""
                                        placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                                @error('img')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('custom-script')
    <script src="{{ asset('admin/template/js/file-upload.js') }}"></script>
@endsection
