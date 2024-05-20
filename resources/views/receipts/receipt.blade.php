<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>HMG By Salman</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">

    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="{{asset('receipt/assets/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('receipt/assets/fonts/font-awesome/css/font-awesome.min.css')}}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{asset('front-assets/img/hmg_favcion.png')}}" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('receipt/assets/css/style.css')}}">
</head>
<body>

<!-- Invoice 2 start -->
<div class="invoice-2 invoice-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-inner clearfix">
                    <div class="invoice-info clearfix" id="invoice_wrapper">
                        <div class="invoice-headar">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="invoice-logo">
                                        <!-- logo started -->
                                        <div class="logo"style="
                                            width: 290px;
                                            padding: 50px;
                                            clip-path: polygon(0 0, 100% 0, 100% 0%, 85% 100%, 0% 100%);
                                            height: 125px;
                                            z-index: 999;
                                            background-image: linear-gradient(to bottom, #a2d174, #3f7e01);
                                        ">
                                            <img class="img-fluid" src="{{asset('front-assets/img/Hmg.png')}}" alt="logo">
                                        </div>
                                        <!-- logo ended -->
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="invoice-id">
                                        <div class="info">
                                            <h1 class="inv-header-1">Invoice</h1>
                                            <p class="mb-1">Invoice Number: <span><b>#{{$receipts['SerialNumber']}}</b></span></p>
                                            <p class="mb-0">Invoice Date: <span><b>{{$receipts['IssueDate']}}</b></span></p>
                                            <p class="mb-0">Due Date: <span><b>{{$receipts['DueDate']}}</b></span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-top">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="invoice-number mb-30">
                                        <h4 class="inv-title-1">Invoice To</h4>
                                        {{-- @dd($receipts) --}}
                                        <h2 class="name">{{$receipts['FranchiseName']}}</h2>
                                        {{-- <p class="invo-addr-1">
                                            <br/>
                                            21-12 Green Street, Meherpur, Bangladesh <br/>
                                        </p> --}}
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="invoice-number mb-30">
                                        <div class="invoice-number-inner">
                                            <h4 class="inv-title-1">Invoice From</h4>
                                            <h2 class="name">HMG Sargodha</h2>
                                            <p class="invo-addr-1">
                                               info@hmgbysalman.com <br/>
                                                New Satellite Town, Sargodha <br/>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-center">
                            <div class="table-responsive">
                                <table class="table mb-0 table-striped invoice-table">
                                    <thead class="bg-active">
                                    <tr class="tr">
                                        <th>No.</th>
                                        <th class="pl0 text-start">Item Description</th>
                                        <th class="text-center">Price</th>
                                        {{-- <th class="text-center">Quantity</th> --}}
                                        <th class="text-end">Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="tr">
                                        <td>
                                            <div class="item-desc-1">
                                                <span>01</span>
                                            </div>
                                        </td>
                                        <td class="pl0">{{$receipts['Particular']}}</td>
                                        <td class="text-center">Rs {{$receipts['Amount']}}</td>
                                        {{-- <td class="text-center">2</td> --}}
                                        <td class="text-end">Rs {{$receipts['Amount']}}</td>
                                    </tr>
                                    <tr class="tr">
                                        <td>
                                            <div class="item-desc-1">
                                                <span></span>
                                            </div>
                                        </td>
                                        {{-- <td class="pl0">{{$receipts['Particular']}}</td> --}}
                                        <td class="text-center"></td>
                                        <td class="pl0">Total Amount</td>
                                        <td class="text-end">Rs {{$receipts['Amount']}}</td>
                                    </tr>
                                   
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- <div class="invoice-bottom">
                            <div class="row">
                                <div class="col-lg-6 col-md-5 col-sm-5">
                                    <div class="payment-method mb-30">
                                        <h3 class="inv-title-1">Payment Method</h3>
                                        <ul class="payment-method-list-1 text-14">
                                            <li><strong>Account No:</strong> 00 123 647 840</li>
                                            <li><strong>Account Name:</strong> Jhon Doe</li>
                                            <li><strong>Branch Name:</strong> xyz</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-7 col-sm-7">
                                    <div class="terms-conditions mb-30">
                                        <h3 class="inv-title-1">Terms & Conditions</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy has</p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="invoice-contact clearfix">
                            <div class="row g-0">
                                <div class="col-sm-12">
                                    <div class="contact-info clearfix">
                                        <a href="tel:+92-314-1455003" class="d-flex"><i class="fa fa-phone"></i> +92 314 1455003</a>
                                        <a href="tel:info@hmgbysalman.com" class="d-flex"><i class="fa fa-envelope"></i> info@hmgbysalman.com</a>
                                        <a href="tel:info@hmgbysalman.com" class="mr-0 d-flex d-none-580"><i class="fa fa-map-marker"></i> New SatelliteTown, Sargodha</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="invoice-btn-section clearfix d-print-none">
                        {{-- <a href="javascript:window.print()" class="btn btn-lg btn-print">
                            <i class="fa fa-print"></i> Print Invoice
                        </a> --}}
                        <a id="invoice_download_btn" class="btn btn-lg btn-download btn-theme">
                            <i class="fa fa-download"></i> Download Invoice
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Invoice 2 end -->

<script src="{{asset('receipt/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('receipt/assets/js/jspdf.min.js')}}"></script>
<script src="{{asset('receipt/assets/js/html2canvas.js')}}"></script>
<script src="{{asset('receipt/assets/js/app.js')}}"></script>
</body>
</html>
