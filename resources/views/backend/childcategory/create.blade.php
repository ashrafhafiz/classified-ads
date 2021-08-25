@extends('backend.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="row justify-content-center">

            <div class="col-md-10 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add New Child-Category Item</h4>
                        <p class="card-description">
                            {{-- Add New Sub-Category Item --}}
                        </p>

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        {{ toastr()->error('Sub-Category cann\'t be added', 'Error', ['positionClass' => 'toast-top-center']) }}
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

                        <form class="forms-sample" action="{{ route('auth.childcategory.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf

                            <div class="form-group">
                                <label for="category_id">Category Name</label>
                                <select type="text" name="category_id" id="category_id"
                                    class="form-control @error('category_id') is-invalid @enderror">
                                    <option value="">Select a Category ...</option>
                                    @foreach ($categories as $key => $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="sub_category_id">Sub-Category Name</label>
                                <select type="text" name="sub_category_id" id="sub_category_id"
                                    class="form-control @error('sub_category_id') is-invalid @enderror">
                                    {{-- AJAX Request --}}
                                </select>
                                @error('sub_category_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="name">Child-Category Name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                    id="name" placeholder="Name">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <img id="showImage" width="100" height="100" src="{{ Storage::url($no_image) }}" alt="">
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
                            <a href="{{ route('auth.childcategory.index') }}" class="btn btn-light">Cancel</a>
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
            //
            // Image preview
            //
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files[0]);
            });
            //
            // Auto remove alerts after 3 seconds
            //
            setTimeout(function() {
                // $(".alert").alert('close');
                $(".alert").fadeTo(1000, 0).slideUp(1000, function() {
                    $(this).remove();
                });
            }, 3000);
            //
            // Update sub-category select input based on category
            //
            $('select[name="category_id"]').on('change', function() {
                var category_id = $(this).val();
                if (category_id) {
                    $.ajax({
                        url: "{{ URL::to('auth/subcategories_per_category') }}/" + category_id,
                        type: "GET",
                        dataType: "json",
                        success: function(data) {
                            $('select[name="sub_category_id"]').empty();
                            $('select[name="sub_category_id"]').append(
                                '<option selected disabled >Select a Sub-Category ...</option>'
                            );
                            $.each(data, function(key, value) {
                                $('select[name="sub_category_id"]').append(
                                    '<option value="' +
                                    value.id + '" >' + value.name + '</option>');
                            });
                        },
                    });
                } else {
                    console.log('AJAX load did not work');
                }
            });
        });
    </script>
@endsection