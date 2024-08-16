@extends('admin.layouts.app')
@section('content')
<style>
    .tyres-table th, td {
    vertical-align: middle;
    text-align: left;
}
.actions-container {
    display: flex;
    justify-content: space-between; 
    align-items: center;
}

.actions-container a {
    text-align: left;
    margin-right: 5px; 
}

</style>

<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                 @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                    @endif
                <div class="page-description d-flex align-items-center">
                    <div class="page-description-content flex-grow-1">
                        <h1>View Inspector</h1>
                    </div>
                    <div class="page-description-actions">
                        <a href="{{ route('admin.add_inspector')}}" class="btn btn-dark"><i class="material-icons">add</i>Add inspector </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title">Basic</h5>
                    </div>
                    <div class="card-body table-responsive">
                        <table id="datatable1" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Mobile Number</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($inspectors as $inspector)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $inspector->name }}</td>
                                    <td>{{ $inspector->email }}</td>
                                    <td>{{ $inspector->mobile_no }}</td>
                                    <td class="actions-container">
                                    <!-- <a class="dropdown-item act-btn " href="#"  >
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a> -->
                                    <form method="POST" action="{{ route('admin.delete_inspector', ['inspector_id' => $inspector->id]) }}">
                                        @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete' style="padding: 0.25rem 0.5rem;">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                    </form>
                                        <!-- <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked="">
                                        </div> -->
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
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    jQuery.noConflict(); // Release control of the $ variable
    
    jQuery(document).ready(function($) {
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            event.preventDefault();
            Swal.fire({
                title: `Are you sure you want to delete this record?`,
                text: "If you delete this, it will be gone forever.",
                icon: "warning",
                showCancelButton: true, // Show cancel button
               
                cancelButtonColor: '#d33',
                cancelButtonText: 'Cancel',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Yes,Delete ',
              
            })
            .then((willDelete) => {
                if (willDelete.isConfirmed) {
                    form.submit();
                }
            });
        });
    });
</script>

@endsection
