@extends('backend.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="row justify-content-center">

            <div class="col-md-10 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit Category Item</h4>
                        <p class="card-description">
                            {{-- Add Category Item --}}
                        </p>

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <form class="forms-sample" action="{{ route('auth.category.update', $category) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name">Category Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    id="name" placeholder="Name" value="{{ $category->name }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <img id="showImage" width="100" height="100" src="{{ Storage::url($category->image) }}"
                                    alt="">
                            </div>

                            <div class="form-group">
                                <label>Upload Image</label>
                                <input type="file" name="image" id="image"
                                    class="file-upload-default @error('image') is-invalid @enderror">
                                <div class="input-group col-xs-12">
                                    <input type="text" class="form-control file-upload-info" disabled=""
                                        placeholder="Upload Image">
                                    <span class="input-group-append">
                                        <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                                    </span>
                                </div>
                                @error('image')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="{{ route('auth.category.index') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('custom-script')
    <script src="{{ asset('admin/template/js/file-upload.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            })
        });
    </script>
@endsection
