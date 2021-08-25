@extends('backend.layouts.master')
@section('content')
    <div class="content-wrapper">
        <div class="row justify-content-center">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-baseline">
                            <h4 class="card-title">Child-Categories</h4>
                            <a href={{ route('auth.childcategory.create') }} class="btn btn-outline-primary">Add New
                                Child-Category</a>
                        </div>
                        <p class="card-description"></p>

                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif

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

                        <div class="table-responsive">
                            <table id="example" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th width="10%">SL</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Sub-Category</th>
                                        <th>Category</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($childCategories as $key => $childcategory)

                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td class="py-1"><img src="{{ Storage::url($childcategory->image) }}"
                                                    alt="image">
                                            </td>
                                            <td>{{ $childcategory->name }}</td>
                                            <td>{{ $childcategory->subCategory->name }}</td>
                                            <td>Category</td>
                                            <td class="text-center">
                                                <a href={{ route('auth.childcategory.edit', $childcategory) }}
                                                    class="btn btn-info btn-sm mr-2"><i class="mdi mdi-table-edit"></i></a>
                                                <button class="btn btn-danger btn-sm" data-toggle="modal"
                                                    data-target="#exampleModal{{ $childcategory->id }}">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                            </td>
                                        </tr>

                                        <!-- DELETE Modal -->
                                        <div class="modal fade" id="exampleModal{{ $childcategory->id }}" tabindex="-1"
                                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Delete Child-Category
                                                        </h5>
                                                        <button type="button" class="close" data-dismiss="modal"
                                                            aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Are you sure you want to delete this child-category?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <form
                                                            action="{{ route('auth.childcategory.destroy', $childcategory) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <input type="hidden" id="id" name="id"
                                                                value="{{ $childcategory->id }}">
                                                            <button type="button" class="btn btn-secondary"
                                                                data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-danger">Delete</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    @empty

                                        <td>No child-Categories to display</td>

                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


@endsection

@section('custom-script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').DataTable();
            // close the alert
            setTimeout(function() {
                // $(".alert").alert('close');
                $(".alert").fadeTo(1000, 0).slideUp(1000, function() {
                    $(this).remove();
                });
            }, 3000);
        });
    </script>
@endsection
