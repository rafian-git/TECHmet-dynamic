@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        All Projects
                        <a class="btn btn-success btn-sm" href="{{ route('project.add') }}" style="float: right;">ADD NEW PROJECT</a>
                    </div>

                    <div class="card-body">
                        {{--@if (session('status'))--}}
                            {{--<div class="alert alert-success" role="alert">--}}
                                {{--{{ session('status') }}--}}
                            {{--</div>--}}
                        {{--@endif--}}

                        <table id="datatable" class="table table-bordered dt-responsive" style="text-align: center;">
                            <thead>
                            <tr>
                                <th>Project Name</th>
                                <th>Website</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody></tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>

        $(document).ready(function() {
            dataTable=  $('#datatable').DataTable({
                rowReorder: {
                    selector: 'td:nth-child(0)'
                },
                responsive: true,
                processing: true,
                serverSide: true,
                Filter: true,
                stateSave: true,
                ordering:false,
                type:"POST",
                "ajax":{
                    "url": "{!! route('project.getData') !!}",
                    "type": "POST",
                    data:function (d){
                        d._token="{{csrf_token()}}";
                    },
                },
                columns:
                    [
                        { data: 'project_name', name: 'project.project_name' },
                        { data: 'project_website', name: 'project.project_website' },

                        {
                            "data": function(data)
                            {
                                return '<button class="btn btn-icon waves-effect waves-light btn-purple btn-sm mr-2" data-panel-id="'+data.project_id+'" onclick="edit_item(this)"><i class="fa fa-cog"></i></button>'+
                                       '<button class="btn btn-icon waves-effect waves-light btn-danger btn-sm" data-panel-id="'+data.project_id+'" onclick="delete_item(this)"><i class="fa fa-trash"></i></button>';
                            },
                            "orderable": false, "searchable":false, "name":"selected_rows"
                        },
                    ]
            });
        });

        // EDIT
        function edit_item(x) {
            btn = $(x).data('panel-id');
            var url = '{{ route("project.edit", ":id") }}';
            var newUrl=url.replace(':id', btn);
            window.location.href = newUrl;
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
                        url: "{!! route('project.delete') !!}",
                        cache: false,
                        data: {
                            _token: "{{csrf_token()}}",
                            'id': btn
                        },
                        success: function (data) {
                            Swal.fire(
                                'Deleted!',
                                'Project has been deleted.',
                                'success'
                            )
                            dataTable.ajax.reload();
                        }
                    });
                }
            })
        }

    </script>
@endsection
