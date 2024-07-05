@extends('admin.layouts.app')
@section('content')

  
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />-->
    <!--<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">-->
    <!--<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>-->
    <!-- for filtering data-->
    <!--<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">-->
    <!-- jQuery -->
 
    <!-- DataTables JS -->
    <!--<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>-->
    
<!--    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>-->
    
    <!-- css and js for datables---->
<!--    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">-->
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css"  />
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
                        <h5 class="card-title"></h5>
                    </div>
                    <div class="card-body table table-responsive table-hover text-center" style="white-space:nowrap; ">
                        <table id="datatable1" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Lot Number</th>
                                    <th>Customer Name</th>
                                    <th>Car Make</th>
                                    <th>Car Model</th>
                                    <th>Bid Start Price </th>
                                    <th>Buy Now Price </th>
                                    <th>Current Bid Price </th>
                                    <!--<th>Tax Added</th>-->
                                    <th>Auction Data</th>
                                    <th class="">Action</th>
                                    <th>Chassis Perfect</th>
                                    <th>Added by</th>
                                    <th>Role</th>
                                    <th>Status</th> 
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($cars  as $index =>$car)
                                <tr>  
                                    <td>
                                        @if (isset($car->carAuction->lot_number))
                                            {{ $car->carAuction->lot_number }}
                                        @else
                                            <span style="color: red;">? Not Filled</span>
                                        @endif
                                    </td>
                                    
                                    <td>
                                        @if (!empty($car->cus_first_name) && !empty($car->cus_last_name))
                                            {{ $car->cus_first_name }} {{ $car->cus_last_name }}
                                        @else
                                            <span style="color: red;">? Not Filled</span>
                                        @endif
                                    </td>
                                    
                                    <td>
                                        @if (isset($car->vehiclemake->name) && $car->vehiclemake->name !== '')
                                            {{ $car->vehiclemake->name }}
                                        @else
                                            <span style="color: red;">? Not Filled</span>
                                        @endif
                                    </td>
                                    
                                    <td>
                                        @if (isset($car->veh_car_model) && $car->veh_car_model !== '')
                                            {{ $car->veh_car_model }}
                                        @else
                                            <span style="color: red;">? Not Filled</span>
                                        @endif
                                    </td>
                                    
                                     <td>
                                        @if (isset($car->carAuction->bid_start_price))
                                             {{ $car->carAuction->bidstartcurrency->code ?? '' }} &nbsp {{ $car->carAuction->bid_start_price }}
                                        @else
                                            <span style="color: red;">? Not Filled</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (isset($car->carAuction->buy_now_price))
                                             {{ $car->carAuction->buyCurrency->code ?? '' }} &nbsp {{ $car->carAuction->buy_now_price }}
                                        @else
                                            <span style="color: red;">? Not Filled</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if (isset($car->carAuction->current_bid_price))
                                             {{ $car->carAuction->buyCurrency->code ?? '' }}&nbsp {{ $car->carAuction->current_bid_price }}
                                        @else
                                            <span style="color: red;">? Not Filled</span>
                                        @endif
                                    </td>
                                    <!--<td>-->
                                    <!--    <div class="actions-container">-->
                                    <!--        <span class="input-group-text">%</span>-->
                                          
                                    <!--         <input type="text" class="form-control me-2 car-input-field" id="input_field_{{$car->id}}" data-car-id="{{$car->id}}" value="{{ $car->tax_added }}" placeholder="5">                                      -->
                                    <!--    </div>-->
                                    <!--</td>-->
                                    <td class="actions-container">
                                       <div class="auc-btn">
                                            <a class="dropdown-item act-btn" href="{{ auth()->user()->type == 'admin' ? route('admin.addauction', ['car_id' => $car->id]) : route('inspector.addauction', ['car_id' => $car->id]) }}" style="padding: 0.25rem 0.5rem;">
                                             
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                        </a>
                                       </div>
                                    </td>
                                    <td class="">
                                       <div class="d-flex act">
                                         
                                            <div class="view-bt">
                                                <a class="dropdown-item act-btn" href="javascript:void(0);" style="padding: 0.25rem 0.5rem;" onclick="openInIncognito('{{ route('details', ['id' => $car->id]) }}');">
                                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="edit-bt">
                                                <a class="dropdown-item act-btn" href="{{ auth()->user()->type == 'admin' ? route('admin.addcar', ['car_id' => $car->id]) : route('inspector.addcar', ['car_id' => $car->id]) }}" style="padding: 0.25rem 0.5rem;">
                                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </a>
                                            </div>
                                            <div class="del-f-d">
                                                <form method="POST" action="{{ auth()->user()->type == 'admin' ? route('admin.deletecar', ['car_id' => $car->id]) : route('inspector.deletecar', ['car_id' => $car->id]) }}">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                    <button type="submit" class=" btn-xs  btn-flat show_confirm" data-toggle="tooltip" title='Delete' style="">
                                                        <i class="fa fa-trash-o fs-12" aria-hidden="true"></i>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                    
                                    <td class="">
                                        <div class="chassis-btn">
                                            <a class="dropdown-item act-btn" href="{{ route('admin.chassisperfect', ['car_id' => $car->id]) }}" style="padding: 0.25rem 0.5rem;">
                                                <i class="fa fa-plus" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </td>
                                    <td>
                                        {{ $car->user->name  ?? ''}} 
                                    </td>
                                    <td>
                                        {{ $car->user->type ?? '' }}
                                    </td>
                                    <td>
                                        <div class="">
                                        <input data-id="{{$car->id}}" data-auction-type-id="{{ isset($car->carAuction->auction_type_id) ? $car->carAuction->auction_type_id : '' }}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $car->status ? 'checked' : '' }}>
                                        </div>
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

 <script>
   $(function() {
     $('.toggle-class').change(function() {

       var status = $(this).prop('checked') == true ? 1 : 0; 
       var car_id = $(this).data('id'); 
       var auction_type_id = $(this).data('auction-type-id');

        $.ajax({
            type: "GET",
            dataType: "json",
            url: '{{ route("admin.statuschange") }}',
            data: {
                
                'status': status,
                'car_id': car_id
            },
            success: function(data){
              
              
              if (status == 1 && auction_type_id == 1) { 
                    addThirtyMinutes(car_id); 
                }
                
            }
        });
    });
    
    function addThirtyMinutes(car_id) {

        var currentDate = new Date(); 
        
        // alert(currentDate);
        var newDate = new Date(currentDate.getTime() + 30 * 60000); 

     
        // var formattedDateTime = newDate.toISOString().slice(0, 19).replace('T', ' ');
        
          // Format the new date and time to 'YYYY-MM-DD HH:MM:SS'
            var year = newDate.getFullYear();
            var month = ('0' + (newDate.getMonth() + 1)).slice(-2);
            var day = ('0' + newDate.getDate()).slice(-2);
            var hours = ('0' + newDate.getHours()).slice(-2);
            var minutes = ('0' + newDate.getMinutes()).slice(-2);
            var seconds = ('0' + newDate.getSeconds()).slice(-2);

            var formattedDateTime = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + seconds;
            
        // alert(formattedDateTime);

        $.ajax({
            type: "POST", // Use POST method to update the backend
            headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: '{{ route("admin.updateStartTime") }}',
            data: {
                'car_id': car_id,
                'quick_auction_start_time': formattedDateTime
            },
            success: function(response) {
                console.log('action_start_time updated successfully.');
                // alert(response);
            }
        });
    }
  });
</script>


 <!--open details page in another-->
 <script>
    function openInIncognito(url) {
        // Show an alert to the user
        alert("Please open this link in an incognito window for privacy.");

        // Open the URL in a new tab
        window.open(url, '_blank');
    }
</script>

<!---datatble-->


<!--<script>-->
 
<!--    jQuery.noConflict();-->


<!--    jQuery(function($) {-->
       
<!--        $('#datatable1').DataTable({ -->
<!--            searching: true,-->
        
<!--        });-->

    
<!--        $('.show_confirm').click(function(event) {-->
<!--            var form = $(this).closest("form");-->
<!--            event.preventDefault();-->
<!--            Swal.fire({-->
<!--                title: `Are you sure you want to delete this record?`,-->
<!--                text: "If you delete this, it will be gone forever.",-->
<!--                icon: "warning",-->
<!--                showCancelButton: true, -->
<!--                cancelButtonColor: '#d33',-->
<!--                cancelButtonText: 'Cancel',-->
<!--                confirmButtonColor: '#3085d6',-->
<!--                confirmButtonText: 'Yes, Delete',-->
<!--            }).then((willDelete) => {-->
<!--                if (willDelete.isConfirmed) {-->
<!--                    form.submit();-->
<!--                }-->
<!--            });-->
<!--        });-->


<!--        $('.toggle-class').change(function() {-->
<!--            var status = $(this).prop('checked') ? 1 : 0;-->
<!--            var car_id = $(this).data('id');-->
<!--            var auction_type_id = $(this).data('auction-type-id');-->

<!--            $.ajax({-->
<!--                type: "GET",-->
<!--                dataType: "json",-->
<!--                url: '{{ route("admin.statuschange") }}',-->
<!--                data: {-->
<!--                    'status': status,-->
<!--                    'car_id': car_id-->
<!--                },-->
<!--                success: function(data) {-->
<!--                    if (status == 1 && auction_type_id == 1) {-->
<!--                        addThirtyMinutes(car_id);-->
<!--                    }-->
<!--                }-->
<!--            });-->
<!--        });-->

   
<!--        function addThirtyMinutes(car_id) {-->
<!--            var currentDate = new Date();-->
<!--            var newDate = new Date(currentDate.getTime() + 30 * 60000);-->

<!--            var year = newDate.getFullYear();-->
<!--            var month = ('0' + (newDate.getMonth() + 1)).slice(-2);-->
<!--            var day = ('0' + newDate.getDate()).slice(-2);-->
<!--            var hours = ('0' + newDate.getHours()).slice(-2);-->
<!--            var minutes = ('0' + newDate.getMinutes()).slice(-2);-->
<!--            var seconds = ('0' + newDate.getSeconds()).slice(-2);-->

<!--            var formattedDateTime = year + '-' + month + '-' + day + ' ' + hours + ':' + minutes + ':' + seconds;-->

<!--            $.ajax({-->
<!--                type: "POST",-->
<!--                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },-->
<!--                url: '{{ route("admin.updateStartTime") }}',-->
<!--                data: {-->
<!--                    'car_id': car_id,-->
<!--                    'quick_auction_start_time': formattedDateTime-->
<!--                },-->
<!--                success: function(response) {-->
<!--                    console.log('action_start_time updated successfully.');-->
<!--                }-->
<!--            });-->
<!--        }-->
<!--    });-->


<!--    function openInIncognito(url) {-->
<!--        alert("Please open this link in an incognito window for privacy.");-->
<!--        window.open(url, '_blank');-->
<!--    }-->
<!--</script>-->

@endsection
