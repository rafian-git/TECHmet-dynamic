@extends('layouts.app')

@section('content')

    <!-- ADD MODAL -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('category.insert') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>Category Name</label>
                            <input type="text" class="form-control" name="name" placeholder="" required>
                        </div>
                        <button type="submit" class="btn btn-primary" style="float: right">INSERT</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- EDIT MODAL -->
    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('category.update') }}" method="POST">
                        @csrf

                        <div class="form-group" id="body">

                        </div>
                        <button type="submit" class="btn btn-primary" style="float: right">UPDATE</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        Categories

                        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal" style="float: right;">
                            ADD NEW CATEGORY
                        </button>

                    </div>

                    <div class="card-body">

                        <table id="datatable" class="table table-bordered dt-responsive" style="text-align: center;">
                            <thead>
                            <tr>
                                <th>Category Name</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($category as $c)
                                    <tr>
                                        <td>{{ $c->category }}</td>
                                        <td>
                                            <button class="btn btn-primary btn-sm" data-panel-id="{{ $c->category_id }}" onclick="edit_item(this)">Edit</button>
                                            <button class="btn btn-danger btn-sm" data-panel-id="{{ $c->category_id }}" onclick="delete_item(this)">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>

        $(document).ready( function () {
            $('#datatable').DataTable();
        } );

        // EDIT
        function edit_item(x) {
            id = $(x).data('panel-id');
            $.ajax({
                type: 'POST',
                url: "{!! route('category.edit') !!}",
                cache: false,
                data: {
                    _token: "{{csrf_token()}}",
                    'id': id,
                },
                success: function (data) {
                    $('#body').html(data);
                    $('#editModal').modal('show');
                }
            });
        }

        // DELETE
        function delete_item(x) {
            btn = $(x).data('panel-id');

            Swal.fire({
                title: 'Are you sure want to delete?',
                text: "You won't be able to revert this!",
                type: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.value) {

                    $.ajax({
                        type: 'POST',
                        url: "{!! route('category.delete') !!}",
                        cache: false,
                        data: {
                            _token: "{{csrf_token()}}",
                            'id': btn
                        },
                        success: function (data) {
                            location.reload();
                        }
                    });
                }
            })
        }

    </script>
@endsection
