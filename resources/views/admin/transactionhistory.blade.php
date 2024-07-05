@extends('admin.layouts.app')
@section('content')
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>


    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>
    <!-- css and js for toggle--->
   
   <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
   
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

    
<style>
    .tyres-table th, td {
    vertical-align: middle;
    text-align: center;
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
                        <h1>View Transaction</h1>
                          <!-- @php 
                                $userType = auth()->user()->type;
                                dump($userType);
                            @endphp  -->
                    </div>
                </div>
            </div>    
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title"></h5>
                    </div>
                    <div class="card-body table table-responsive table-hover text-center" style="white-space:nowrap; ">
                        <table id="datatable1" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Vin Number</th>
                                    <th>Winner Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Mode of payment</th>
                       
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>P1325DT35CVBW</td>
                                    <td>Harry</td>
                                    <td>Hary@gmail.com</td>
                                    <td>9756378912</td>
                                    <td>Online</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>   
</div>
<!---Datatble-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
 <script>
jQuery.noConflict(); 
        $(document).ready(function () { 
            $('#datatable1').DataTable({ 
                searching: true,
                order: []
            }); 
        }); 
    </script>

 <script>
     jQuery.noConflict(); 
    
    jQuery(document).ready(function($) {
        $('.show_confirm').click(function(event) {
             var form = $(this).closest("form");
             event.preventDefault();
             Swal.fire({
                 title: `Are you sure you want to delete this record?`,
                 text: "If you delete this, it will be gone forever.",
                 icon: "warning",
                 showCancelButton: true, 
               
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
