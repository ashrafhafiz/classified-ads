@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <div class="card ">

                <div class="card-body ">
                    <img class="mx-auto d-block img-thumbnail" src="/img/man.jpg" width="130">
                    <p class="text-center"><b>John Doe</b></p>
                </div>
                <hr style="border:2px solid #E3342F;">
                <div class="vertical-menu">
                    <a href="#">Dashboard</a>
                    <a href="#">Profile</a>
                    <a href="#">Create ads</a>
                    <a href="#">Published ads</a>
                    <a href="#">Pending ads</a>
                    <a href="#" class="">Message</a>
                </div>

            </div>
        </div>
        <div class="col-md-9">
            @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                    {{ toastr()->error($error, 'Error', [
                        'closeButton'       => 'true',
                        'positionClass'     => 'toast-top-right',
                        'showDuration'      => '300',
                        'hideDuration'      => '1000',
                        'timeOut'           => '5000',
                        'extendedTimeOut'   => '1000',
                        'newestOnTop'       => 'true',
                        'progressBar'       => 'true',
                        ]) }}
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <form action="{{ route('ads.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header text-white bg-danger h4">
                        Post your ad.
                    </div>
                    <div class="card-body">
                        <label for="featureImage" class="mt-2"><b>Upload 3 Images</b></label>

                        <div class="form-inline form-group mt-1">

                            <div class="col-md-4 mt-2">
                                <img id="showFeatureImage" width="150" height="150" src="{{ Storage::url($no_image) }}"
                                    alt="">
                                <input type="file" class="mt-2" name="featureImage" id="featureImage" accept="image/*"
                                    style="width: 100%;">
                            </div>
                            <div class="col-md-4 mt-2">
                                <img id="showFirstImage" width="150" height="150" src="{{ Storage::url($no_image) }}"
                                    alt="">
                                <input type="file" class="mt-2" name="firstImage" id="firstImage" accept="image/*"
                                    style="width: 100%;">
                            </div>
                            <div class="col-md-4 mt-2">
                                <img id="showSecondImage" width="150" height="150" src="{{ Storage::url($no_image) }}"
                                    alt="">
                                <input type="file" class="mt-2" name="secondImage" id="secondImage" accept="image/*"
                                    style="width: 100%;">
                            </div>

                        </div>

                        <label for="category_id" class="mt-2"><b>Choose category</b></label>

                        <div class="form-inline form-group mt-1">

                            <div class="col-md-4">
                                <select type="text" name="category_id" id="category_id" style="width: 100%;"
                                    class="form-control @error('category_id') is-invalid @enderror">
                                    <option value="">Select a Category ...</option>
                                    @foreach ($categories as $key => $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="col-md-4">
                                <select type="text" name="sub_category_id" id="sub_category_id" style="width: 100%;"
                                    class="form-control @error('sub_category_id') is-invalid @enderror">
                                    <option selected disabled>Select a Sub-Category ...</option>
                                    {{-- AJAX Request --}}
                                </select>
                                @error('sub_category_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>


                            <div class="col-md-4">
                                <select class="form-control" name="child_category_id" name="child_category_id"
                                    style="width: 100%;">
                                    <option selected disabled>Select a Child-Category ...</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea name="description" id="description" class="form-control"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="price_status">Price staus</label>
                            <select class="form-control" name="price_status" id="price_status">
                                <option value="negoitable">Negotiable</option>
                                <option value="fixed">Fixed</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="product_condition">Product Condition</label>
                            <select class="form-control" name="product_condition" id="product_condition">
                                <option value="">Select </option>
                                <option value="likenew">Looks like New</option>
                                <option value="heavilyused">Heavily Used</option>
                                <option value="new">New</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="listing_location">Listing Location</label>
                            <input type="text" class="form-control" name="listing_location" id="listing_location">
                        </div>

                        <label for="country_id" class="mt-2"><b>Choose address</b></label>
                        <div class="form-inline form-group mt-1">

                            <div class="col-md-4">
                                <select class="form-control" name="country_id" id="country_id" style="width: 100%;">
                                    <option selected disabled>Select Country ...</option>
                                    @foreach ($countries as $key => $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" name="state_id" style="width: 100%;">
                                    <option selected disabled>Select State ...</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <select class="form-control" name="city_id" style="width: 100%;">
                                    <option selected disabled>Select City ...</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group">
                            <label for="phone_number">Seller contact number</label>
                            <input type="number" class="form-control" name="phone_number" id="phone_number">
                        </div>

                        <div class="form-group">
                            <label for="link">Demo link of product(ie:youtube)</label>
                            <input type="text" class="form-control" name="link" id="link">
                        </div>

                        <div class="form-group">
                            <button class="btn btn-danger float-right" type="submit">Publish</button>
                        </div>

                    </div>
                </div>
            </form>
        </div>

    </div>
</div>

<style>
    .vertical-menu a {
        background-color: #fff;
        color: #000;
        display: block;
        padding: 12px;
        text-decoration: none;
    }

    .vertical-menu a:hover {
        background-color: #E3342F;
        color: #fff;
    }
</style>

@endsection


@section('custom-script')
<script src="{{ asset('admin/template/js/file-upload.js') }}"></script>

<script type="text/javascript">
    $(document).ready(function() {
        //
        // Images preview
        //
        $('#featureImage').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showFeatureImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
        $('#firstImage').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showFirstImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
        $('#secondImage').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showSecondImage').attr('src', e.target.result);
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
            console.log(category_id);
            if (category_id) {
                $.ajax({
                    url: "{{ URL::to('auth/subcategories_per_category') }}/" + category_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="sub_category_id"]').empty();
                        $('select[name="sub_category_id"]').append(
                            '<option selected disabled>Select a Sub-Category ...</option>'
                        );
                        $.each(data, function(key, value) {
                            $('select[name="sub_category_id"]').append(
                                '<option value="' +
                                value.id + '">' + value.name + '</option>');
                        });
                    },
                });
            } else {
                console.log('AJAX load did not work');
            }
        });
        //
        // Update child-category select input based on sub-category
        //
        $('select[name="sub_category_id"]').on('change', function() {
            var sub_category_id = $(this).val();
            if (sub_category_id) {
                $.ajax({
                    url: "{{ URL::to('auth/childcategories_per_subcategory') }}/" +
                        sub_category_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="child_category_id"]').empty();
                        $('select[name="child_category_id"]').append(
                            '<option selected disabled >Select a Child-Category ...</option>'
                        );
                        $.each(data, function(key, value) {
                            $('select[name="child_category_id"]').append(
                                '<option value="' +
                                value.id + '" >' + value.name + '</option>');
                        });
                    },
                });
            } else {
                console.log('AJAX load did not work');
            }
        });
        //
        // Update states select input based on country
        //
        $('select[name="country_id"]').on('change', function() {
            var country_id = $(this).val();
            console.log(country_id);
            if (country_id) {
                $.ajax({
                    url: "{{ URL::to('auth/states_per_country') }}/" + country_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="state_id"]').empty();
                        $('select[name="state_id"]').append(
                            '<option selected disabled>Select State ...</option>'
                        );
                        $.each(data, function(key, value) {
                            $('select[name="state_id"]').append(
                                '<option value="' +
                                value.id + '">' + value.name + '</option>');
                        });
                    },
                });
            } else {
                console.log('AJAX load did not work');
            }
        });
        //
        // Update cities select input based on state
        //
        $('select[name="state_id"]').on('change', function() {
            var state_id = $(this).val();
            console.log(state_id);
            if (state_id) {
                $.ajax({
                    url: "{{ URL::to('auth/cities_per_state') }}/" + state_id,
                    type: "GET",
                    dataType: "json",
                    success: function(data) {
                        $('select[name="city_id"]').empty();
                        $('select[name="city_id"]').append(
                            '<option selected disabled>Select City ...</option>'
                        );
                        $.each(data, function(key, value) {
                            $('select[name="city_id"]').append(
                                '<option value="' +
                                value.id + '">' + value.name + '</option>');
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
