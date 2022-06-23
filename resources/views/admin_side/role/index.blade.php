@extends('admin_side.setup.master')

@section('content')
    <div class="col-lg-12 mt-5">
        <div class="card">
            <div class="card-body">
                <div>
                    <button type="button" class="btn btn-outline-primary btn-sm mb-3 float-right" data-toggle="modal"
                        data-target="#addRoleModal">ADD</button>
                    <h4 class="header-title">All Roles</h4>
                </div>
                <div class="single-table">
                    <div class="table-responsive">
                        <table class="table table-bordered text-center" id="roleTable">
                            <thead class="text-uppercase">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Roleas</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $key => $role)
                                    <tr>
                                        <td>{{ $key + 1 }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-3"><a href="javascript:void(0)"
                                                        class="text-secondary edit_role" data="{{ $role->id }}"><i
                                                            class="fa fa-edit"></i></a></li>
                                                <li><a href="javascript:void(0)" class="text-danger delete_role"
                                                        data="{{ $role->id }}"><i class="ti-trash"></i></a></li>
                                            </ul>
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

    {{-- Add Role Modal Start --}}
    <div class="modal fade" id="addRoleModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Add Role</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('store.role') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Role</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Role" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Add Role Modal End --}}

    {{-- Edit Role Modal Start --}}
    <div class="modal fade" id="editRoleModal">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Edit Role</h5>
                    <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('update.role') }}" method="POST">
                        <input type="text" name="role_id">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Role</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Role" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    {{-- Edit Role Modal End --}}

@endsection

@section('scripts')
    <script>
        $(document).ready(function() {


             //Edit Role
             $('#roleTable').on('click', '.edit_role', function(e) {
                e.preventDefault();

                var id = $(this).attr('data');

                $('#editRoleModal').modal('show');

                $.ajax({

                    type: 'ajax',
                    method: 'get',
                    url: '{{ url('edit-role') }}',
                    data: {
                        id: id
                    },
                    async: false,
                    dataType: 'json',
                    success: function(data) {

                        $('input[name=role_id]').val(data.role.id);
                        $('input[name=name]').val(data.role.name);
                    },

                    error: function() {

                        toastr.error('something went wrong');

                    }

                });

            });


            // script for delete data
            $('#roleTable').on('click', '.delete_role', function(e) {
                e.preventDefault();

                var id = $(this).attr('data');

                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to Delete this Data!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: "GET",
                            url: "{{ url('delete-role') }}",
                            data: {
                                id: id
                            },
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            dataType: "json",
                            success: function(response) {

                                if (response.status == 200) {
                                    toastr.success(response.message);
                                    setTimeout(() => {
                                        window.location.reload();
                                    }, 1000);
                                }
                            }
                        });
                    }
                })

            });

        });
    </script>
@endsection
