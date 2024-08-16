@extends('admin.layouts.app')
@section('content')
<style>
    .tyres-table th, td {
    vertical-align: middle;
    text-align: left;
}
.actions-container {
    display: flex;
   
}
.actions-container a {
    text-align: center; 
    margin-bottom: 5px; 
    margin-right: 5px; 
}
.actions-container a i {
    margin-right: 1px; 
}
.action{
    text-align: center; 
}
.delet-btn{
    color:red;
}
</style>
<div class="content-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-description d-flex align-items-center">
                    <div class="page-description-content flex-grow-1">
                        <h1>View Car</h1>
                          <!-- @php 
                                $userType = auth()->user()->type;
                                dump($userType);
                            @endphp  -->
                    </div>
                    <div class="page-description-actions">
                    @if(auth()->check() && auth()->user()->type == 'admin')     
                        <a href="{{ route('admin.addcarnew', ['action' => 'new']) }}" class="btn btn-dark"><i class="material-icons">add</i>Add Car </a>
                    
                    @elseif(auth()->check() && auth()->user()->type == 'inspector')

                    <a href="{{ route('inspector.addcar', ['action' => 'new']) }}" class="btn btn-dark"><i class="material-icons">add</i>Add Car </a>

                    @endif
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
                                    <th>Seller Phone no</th>
                                    <th>Added by</th>
                                    <th>Customer Name</th>
                                    <th>Seller Type</th>
                                    <th>Model</th>
                                    <th class="action">Action</th>
                                    <!-- <th>Status</th> -->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cars as $car)
                                <tr>
                                    <td>{{$loop->iteration }}</td>
                                    <td>{{$car ->seller_phone_no}}</td>
                                    <td>{{ $car ->user->name }}</td>
                                    <td>{{ $car->cus_first_name}}</td>
                                    <td>{{ $car->seller_type_id}}</td>
                                    <td>{{ $car->veh_car_model}}</td>
                                    <td class="actions-container">
                                        
                                    <a class="dropdown-item act-btn" href="{{ route('admin.addauction', ['car_id' => $car->id]) }}" style="padding: 0.25rem 0.5rem;">
                                        <i class="fa fa-plus" aria-hidden="true"></i>
                                    </a>


                                    <a class="dropdown-item act-btn" href="{{ auth()->user()->type == 'admin' ? route('admin.addcar', ['car_id' => $car->id]) : route('inspector.addcar', ['car_id' => $car->id]) }}" style="padding: 0.25rem 0.5rem;">
                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                    </a>
                                    <!--                                     
                                     <a class="dropdown-item delet-btn act-btn " id="demoSwal" href="{{ route('admin.deletecar', ['car_id' => $car->id]) }}" onclick="confirmDelete(event)">
                                        <i class=" fa fa-trash-o dlt-icon" aria-hidden="true"></i>
                                    </a>                                       -->

                                    <!-- <a class="dropdown-item delet-btn act-btn" id="demoSwal" href="{{ route('admin.deletecar', ['car_id' => $car->id]) }}">
                                            <i class="fa fa-trash-o dlt-icon" aria-hidden="true"></i>
                                    </a> -->

                                    <form method="POST" action="{{ auth()->user()->type == 'admin' ? route('admin.deletecar', ['car_id' => $car->id]) : route('inspector.deletecar', ['car_id' => $car->id]) }}">
                                       @csrf
                                        <input name="_method" type="hidden" value="DELETE">
                                        <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm" data-toggle="tooltip" title='Delete' style="padding: 0.25rem 0.5rem;">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        </button>
                                    </form>

                                    <!--inactive-->
                                    <a class="dropdown-item act-btn" href="#" style="padding: 0.25rem 0.5rem;">
                                    {{ $car->status ?? ''}}
                                    </a>
                                   
                                    <!--inactive--->

                                    </td>

                                    <!-- <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked1" checked="">
                                        </div>
                                    </td> -->
                                </tr>
                                @endforeach
                                <!-- Add other rows here -->
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
