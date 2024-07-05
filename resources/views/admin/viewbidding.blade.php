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
                        <h1>View Bidding</h1>
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
                                    <th>Lot Number</th>
                                    <th>Highest Bidder</th>
                                    <th>Car Make</th>
                                    <th>Car Model</th>
                                    <th>Reserve Price</th>
                                    <th>Bid Price</th>
                                    <th>By Now Price</th>
                                    <th>Status</th>
                                    <th>Realised Car </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($auctionDetails as $auction)
                                    <tr>
                                        <td>{{ $auction['id'] }}</td>
                                        <td>{{ $auction['lot_number'] }}</td>
                                        <td>{{ $auction['highest_bidder'] }}</td>
                                        <td>{{ $auction['car_make'] }}</td>
                                        <td>{{ $auction['car_model'] }}</td>
                                        <td>{{ $auction['reserve_price'] }}</td>
                                        <td>{{ $auction['bid_price'] }}</td>
                                        <td>{{ $auction['buy_now_price'] }}</td>
                                        <td>
                                            <div class="">
                                                <input data-id="" data-auction-type-id=" " class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Approve" data-off="Disapprove">
                                            </div>
                                        </td>
                                        <td>
                                           <input class="form-check-input" type="checkbox" value="" id="chassis-pass" style="outline: 2px solid black;">
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
