@extends('frontend.layouts.app')
@section('content')

<div class="fillter-btn bg-f7 mt-50 input-group-checkout text-center">
        <div class="scroll-x scroll-lg-none justify-content-lg-center">
            <div class="btn-group ml-20" role="group" aria-label="Basic checkbox toggle button group">

                <div class="at">
                    <a href="{{ route('user.dashboard') }}">
                        <button class="btn btn-outline-primary">Dashboard</button>
                    </a>
                </div>

                <div class="at">
                    <a href="{{ route('user.award') }}">
                        <button class="btn btn-outline-primary ">Award Pending</button>
                    </a>
                </div>


                <div class="at">
                    <a href="{{ route('user.wonvehicles') }}">
                        <button class="btn btn-outline-primary active-btn-at">Won Vehicles</button>
                    </a>
                </div>


                <div class="at">
                    <a href="{{ route('user.lostbid') }}">
                        <button class="btn btn-outline-primary">Lost Pre-Bids</button>
                    </a>
                </div>


                <div class="at">
                    <a href="{{ route('user.myvehicle') }}">
                        <button class="btn btn-outline-primary">My Vehicles</button>
                    </a>
                </div>


                <div class="at">
                    <a href="{{ route('user.profile') }}">
                        <button class="btn btn-outline-primary">Profile</button>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <section class="mt-50 mb-50">
        <div class="container">
            <div class="won-vehicles-section">
                <div class="scroll-x scroll-lg-none justify-content-lg-center pb-0 rounded-10">
                    <div class="header-checkout nav nav-tabs gap-4 flex-nowrap" id="myTab" role="tablist">

                        <button class="btn btn-credit-card active" id="howitworks-tab" data-bs-toggle="tab"
                            data-bs-target="#howitworks-tab-pane" type="button" role="tab"
                            aria-controls="howitworks-tab-pane" aria-selected="false">
                            How It Works
                        </button>

                        <button class="btn btn-credit-card " id="tobepaid-tab" data-bs-toggle="tab"
                            data-bs-target="#tobepaid-tab-pane" type="button" role="tab"
                            aria-controls="tobepaid-tab-pane" aria-selected="false">
                            To Be Paid
                        </button>

                        <button class="btn btn-credit-card " id="tobepickedup-tab" data-bs-toggle="tab"
                            data-bs-target="#tobepickedup-tab-pane" type="button" role="tab"
                            aria-controls="tobepickedup-tab-pane" aria-selected="false">
                            To Be Picked Up
                        </button>

                        <button class="btn btn-credit-card" id="delivery-tab" data-bs-toggle="tab"
                            data-bs-target="#delivery-tab-pane" type="button" role="tab"
                            aria-controls="delivery-tab-pane" aria-selected="false">
                            Delivery
                        </button>

                        <button class="btn btn-credit-card" id="purchasehistory-tab" data-bs-toggle="tab"
                            data-bs-target="#purchasehistory-tab-pane" type="button" role="tab"
                            aria-controls="purchasehistory-tab-pane" aria-selected="false">
                            Purchase History
                        </button>
                    </div>
                </div>



                <div class="p-10 pb-0 pt-0 tab-content" id="myTabContent">

                    <!-- for howitworks tab  -->
                    <div class="tab-pane show active fade" id="howitworks-tab-pane" role="tabpanel"
                        aria-labelledby="howitworks-tab" tabindex="0"> </div>
                    <!-- /end howitworks tab  -->



                    <!-- for to be paid  -->
                    <div class="pt-30 tab-pane fade" id="tobepaid-tab-pane" role="tabpanel"
                        aria-labelledby="tobepaid-tab" tabindex="0">
                        <div class=" table-award table-responsive ">

                            <table class="table table-borderless mb-0">

                                <tr class="bg-table-award bg-table-history">
                                    <td class="border-top-left">S.NO.</td>
                                    <td scope="col" class="col-1">Image</td>
                                    <td scope="col" class="col-2">Auction Title</td>
                                    <td scope="col" class="col-2">Won Date</td>
                                    <td scope="col" class="col-3">Addon Services</td>
                                    <td scope="col" class="col-2">Payment Due</td>
                                    <td class="border-top-right" scope="col" class="col-2">Pay Now</td>
                                </tr>


                                <tbody class="table-body-award">
                                    <tr>
                                        <td class="align-top">1</td>
                                        <td class="align-top">
                                            <div class="table-img">
                                                <img src="assets/images/livebidding/car8.png" />
                                            </div>
                                        </td>
                                        <td class="align-top">AVEO LS AUTOMATIC A/A</td>
                                        <td class="align-top">Nov 21, 2023</td>
                                        <td class="align-top">
                                            <div class="d-flex gap-3 flex-column">
                                                <div class="d-flex justify-content-between gap-1">
                                                    <div class="d-flex align-items-center gap-10">
                                                        <input checked
                                                            class="form-check-input check-input-green m-0 border-dark rounded-0"
                                                            type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <div>
                                                            Repair Service
                                                        </div>
                                                    </div>
                                                    <div class="service-prise">
                                                        AED 1500
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-between gap-1">
                                                    <div class="d-flex align-items-center gap-10">
                                                        <input checked
                                                            class="form-check-input check-input-green m-0 border-dark rounded-0"
                                                            type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <div>
                                                            Insurance Service
                                                        </div>
                                                    </div>
                                                    <div class="service-prise">
                                                        AED 1500
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-between gap-1">
                                                    <div class="d-flex align-items-center gap-10">
                                                        <input checked
                                                            class="form-check-input check-input-green m-0 border-dark rounded-0"
                                                            type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <div>
                                                            Recovery Service
                                                        </div>
                                                    </div>
                                                    <div class="service-prise">
                                                        AED 1500
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-top">
                                            AED 10,000
                                        </td>
                                        <td scope="col" class="col-2 align-top">
                                            <button class="btn set-payment set-payment-bg">
                                                Set Payment
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="align-top">2</td>
                                        <td class="align-top">
                                            <div class="table-img">
                                                <img src="assets/images/product/product-1.jpg" />
                                            </div>
                                        </td>
                                        <td class="align-top">AVEO LS AUTOMATIC A/A</td>
                                        <td class="align-top">Nov 21, 2023</td>
                                        <td class="align-top">
                                            <div class="d-flex gap-3 flex-column">
                                                <div class="d-flex justify-content-between gap-1">
                                                    <div class="d-flex align-items-center gap-10">
                                                        <input checked
                                                            class="form-check-input check-input-green m-0 border-dark rounded-0"
                                                            type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <div>
                                                            Repair Service
                                                        </div>
                                                    </div>
                                                    <div class="service-prise">
                                                        AED 1500
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-between gap-1">
                                                    <div class="d-flex align-items-center gap-10">
                                                        <input checked
                                                            class="form-check-input check-input-green m-0 border-dark rounded-0"
                                                            type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <div>
                                                            Insurance Service
                                                        </div>
                                                    </div>
                                                    <div class="service-prise">
                                                        AED 1500
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-between gap-1">
                                                    <div class="d-flex align-items-center gap-10">
                                                        <input checked
                                                            class="form-check-input check-input-green m-0 border-dark rounded-0"
                                                            type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <div>
                                                            Recovery Service
                                                        </div>
                                                    </div>
                                                    <div class="service-prise">
                                                        AED 1500
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-top">
                                            AED 10,000
                                        </td>
                                        <td scope="col" class="col-2 align-top">
                                            <button class="btn set-payment set-payment-bg">
                                                Set Payment
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="align-top">3</td>
                                        <td class="align-top">
                                            <div class="table-img">
                                                <img src="assets/images/product/product-4.png" />
                                            </div>
                                        </td>
                                        <td class="align-top">AVEO LS AUTOMATIC A/A</td>
                                        <td class="align-top">Nov 21, 2023</td>
                                        <td class="align-top">
                                            <div class="d-flex gap-3 flex-column">
                                                <div class="d-flex justify-content-between gap-1">
                                                    <div class="d-flex align-items-center gap-10">
                                                        <input checked
                                                            class="form-check-input check-input-green m-0 border-dark rounded-0"
                                                            type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <div>
                                                            Repair Service
                                                        </div>
                                                    </div>
                                                    <div class="service-prise">
                                                        AED 1500
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-between gap-1">
                                                    <div class="d-flex align-items-center gap-10">
                                                        <input checked
                                                            class="form-check-input check-input-green m-0 border-dark rounded-0"
                                                            type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <div>
                                                            Insurance Service
                                                        </div>
                                                    </div>
                                                    <div class="service-prise">
                                                        AED 1500
                                                    </div>
                                                </div>

                                                <div class="d-flex justify-content-between gap-1">
                                                    <div class="d-flex align-items-center gap-10">
                                                        <input checked
                                                            class="form-check-input check-input-green m-0 border-dark rounded-0"
                                                            type="checkbox" id="inlineCheckbox1" value="option1">
                                                        <div>
                                                            Recovery Service
                                                        </div>
                                                    </div>
                                                    <div class="service-prise">
                                                        AED 1500
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="align-top">
                                            AED 10,000
                                        </td>
                                        <td scope="col" class="col-2 align-top">
                                            <button class="btn set-payment set-payment-bg">
                                                Set Payment
                                            </button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- /end to be paid  -->


                    <!-- to be Picked Up  -->

                    <div class="pt-30 tab-pane fade" id="tobepickedup-tab-pane" role="tabpanel"
                        aria-labelledby="tobepickedup-tab" tabindex="0">
                        <div class="table-award table-responsive ">

                            <table class="table table-borderless mb-0">

                                <tr class="bg-table-award bg-table-history">
                                    <td class="border-top-left">S.NO.</td>
                                    <td scope="col" class="col-2">Image</td>
                                    <td scope="col" class="col-2">Auction Title</td>
                                    <td scope="col" class="col-2">Won Date</td>
                                    <td scope="col" class="col-2">Pickup Location</td>
                                    <td scope="col" class="col-2">Pickup Date</td>
                                    <td class="border-top-right" scope="col" class="col-2">Gate Pass</td>
                                </tr>


                                <tbody class="table-body-award">
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="table-img">
                                                <img src="assets/images/livebidding/car8.png" />
                                            </div>
                                        </td>
                                        <td>AVEO LS AUTOMATIC A/A</td>
                                        <td>Nov 21, 2023</td>
                                        <td>Phoenix</td>
                                        <td>
                                            Dec 04, 2023
                                        </td>
                                        <td scope="col" class="col-2">
                                            <button class="btn set-payment set-payment-bg">
                                                Download
                                            </button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- end to to Picked Up  -->


                    <!-- for delivery tab  -->
                    <div class="pt-30 tab-pane fade" id="delivery-tab-pane" role="tabpanel"
                        aria-labelledby="delivery-tab" tabindex="0">
                        <div class="table-award table-responsive ">

                            <table class="table table-borderless mb-0">

                                <tr class="bg-table-award bg-table-history">
                                    <td class="border-top-left">S.NO.</td>
                                    <td scope="col" class="col-2">Image</td>
                                    <td scope="col" class="col-2">Auction Title</td>
                                    <td scope="col" class="col-2">Delivery Date</td>
                                    <td scope="col" class="col-2">Delivery Method</td>
                                    <td scope="col" class="col-2">Delivery Location</td>
                                    <td class="border-top-right" scope="col" class="col-2">Delivery Status</td>
                                </tr>


                                <tbody class="table-body-award">
                                    <tr>
                                        <td>1</td>
                                        <td>
                                            <div class="table-img">
                                                <img src="assets/images/product/product-1.jpg" />
                                            </div>
                                        </td>
                                        <td>DAVEO LS AUTOMATIC A/A</td>
                                        <td>Nov 06,2023</td>
                                        <td>Courier</td>
                                        <td>
                                            <div class="d-flex justify-content-between gap-1 text-start">
                                                <div> Jumeirah Beach Residence (JBR)</div>
                                                <div data-bs-toggle="modal" data-bs-target="#paymentmethod" class="">
                                                    <img src="assets/images/icon/edit.svg" />
                                                </div>
                                            </div>
                                        </td>
                                        <td scope="col" class="col-2">
                                            <button class="btn set-payment deliver-btn-bg">
                                                Deliver in 2 days
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="table-img">
                                                <img src="assets/images/product/product-4.png" />
                                            </div>
                                        </td>
                                        <td>AVEO LS AUTOMATIC A/A</td>
                                        <td>Oct 15, 2023</td>
                                        <td>In-Person Delivery</td>
                                        <td>
                                            <div class="d-flex justify-content-between gap-1">
                                                <div> Business Bay</div>
                                                <div data-bs-toggle="modal" data-bs-target="#paymentmethod">
                                                    <img src="assets/images/icon/edit.svg" />
                                                </div>
                                            </div>
                                        </td>
                                        <td scope="col" class="col-2"><button class="btn set-payment set-payment-bg">
                                                Delivered
                                            </button></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- / end delivery tab  -->


                    <!-- for purchase history tab -->
                    <div class="pt-30 tab-pane fade" id="purchasehistory-tab-pane" role="tabpanel"
                        aria-labelledby="purchasehistory-tab" tabindex="0">
                        <div class="table-award table-responsive ">

                            <table class="table table-borderless mb-0">

                                <tr class="bg-table-award bg-table-history">
                                    <td class="border-top-left">S.NO.</td>
                                    <td scope="col" class="col-2">Purchase ID</td>
                                    <td scope="col" class="col-2">Purchase Date</td>
                                    <td scope="col" class="col-1">Purchase Description</td>
                                    <td scope="col" class="col-2">Payment Method</td>
                                    <td scope="col" class="col-2">Total Price</td>
                                    <td scope="col" class="col-2 border-top-right">Invoice</td>
                                </tr>


                                <tbody class="table-body-award">
                                    <tr>
                                        <td>1</td>
                                        <td>#21456710</td>
                                        <td>Dec 04, 2023</td>
                                        <td>AVEO LS AUTOMATIC A/A Bid</td>
                                        <td>Credit Card</td>
                                        <td>AED 15</td>
                                        <td>
                                            <button class="btn set-payment set-payment-bg">
                                                Download
                                            </button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>2</td>
                                        <td>#60776425</td>
                                        <td>Nov 24, 2023</td>
                                        <td>Membership Purchased</td>
                                        <td>PayPal</td>
                                        <td>AED 750</td>
                                        <td><button class="btn set-payment set-payment-bg">
                                                Download
                                            </button></td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end purchase history tab  -->
                </div>




            </div>
        </div>
    </section>


    <!-- for delivery modal  -->
    <div class="modal fade" id="paymentmethod" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="paymentmethodLabel" aria-hidden="true">

        <div class="modal-dialog modal-dialog-centered modal model-dialog-addcard">

            <div class="modal-content border-0 redius-25">

                <div class="modal-body p-20">
                    <div class="">
                        <div class="font-20 font-800 text-black font-montserrat fst-italic text-center">
                            Edit/Change Delivery Address
                        </div>
                    </div>
                    <div class="pl-20 pr-20 pt-4">
                        <input type="text" class="form-control input-field-checkout"
                            placeholder="Jumeirah Beach Residence (JBR)">
                    </div>
                    <div class="pt-4 text-center">
                        <button class="btn set-payment set-payment-bg">
                            Save
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
    <!-- end delivery modal  -->
@endsection