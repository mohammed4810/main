<!DOCTYPE html>
<html lang="en">

<head itemscope="" itemtype="http://schema.org/WebSite">
    <title itemprop="name">Preview Bootstrap snippets. dark invoice</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Preview Bootstrap snippets. dark invoice. Copy and paste the html, css and js code for save time, build your app faster and responsive">
    <meta name="keywords" content="bootdey, bootstrap, theme, templates, snippets, bootstrap framework, bootstrap snippets, free items, html, css, js">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.bootdey.com/img/favicon.ico">
    <link rel="apple-touch-icon" sizes="135x140" href="https://www.bootdey.com/img/bootdey_135x140.png">
    <link rel="apple-touch-icon" sizes="76x76" href="https://www.bootdey.com/img/bootdey_76x76.png">
    <link rel="canonical" href="https://www.bootdey.com/snippets/view/dark-invoice" itemprop="url">
    <meta property="twitter:account_id" content="2433978487" />
    <meta name="twitter:card" content="summary">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@bootdey">
    <meta name="twitter:creator" content="@bootdey">
    <meta name="twitter:title" content="Preview Bootstrap  snippets. dark invoice">
    <meta name="twitter:description" content="Preview Bootstrap snippets. dark invoice. Copy and paste the html, css and js code for save time, build your app faster and responsive">
    <meta name="twitter:image" content="https://www.bootdey.com/files/SnippetsImages/bootstrap-snippets-1183.png">
    <meta name="twitter:url" content="https://www.bootdey.com/snippets/preview/dark-invoice?full-screen=true">
    <meta property="og:title" content="Preview Bootstrap  snippets. dark invoice">
    <meta property="og:url" content="https://www.bootdey.com/snippets/preview/dark-invoice?full-screen=true">
    <meta property="og:image" content="https://www.bootdey.com/files/SnippetsImages/bootstrap-snippets-1183.png">
    <meta property="og:description" content="Preview Bootstrap snippets. dark invoice. Copy and paste the html, css and js code for save time, build your app faster and responsive">
    <link rel="alternate" type="application/rss+xml" title="Latest snippets resources templates and utilities for bootstrap from bootdey.com:" href="https://bootdey.com/rss" />
    <link rel="author" href="https://plus.google.com/u/1/106310663276114892188" />
    <link rel="publisher" href="https://plus.google.com/+Bootdey-bootstrap/posts" />
    <meta name="msvalidate.01" content="23285BE3183727A550D31CAE95A790AB" />
    <script src="/cache-js/cache-1635427806-97135bbb13d92c11d6b2a92f6a36685a.js" type="text/javascript"></script>
</head>

<body>


<?php
            include("ex.php");

            $total_sum = calcTotal($product, $rule);




            ?>


    <div id="snippetContent">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
        <div class="container">
            <div class="row gutters">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-body p-0">
                            <div class="invoice-container">
                                <div class="invoice-header">
                                    <div class="row gutters">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                            <div class="custom-actions-btns mb-5"> <a href="#" class="btn btn-primary"> <i class="icon-download"></i> Download </a> <a href="#" class="btn btn-secondary"> <i class="icon-printer"></i> Print </a></div>
                                        </div>
                                    </div>
                                    <div class="row gutters">
                                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6"> <a href="index.html" class="invoice-logo"> Bootdey.com </a></div>
                                        <div class="col-lg-6 col-md-6 col-sm-6">
                                            <address class="text-right"> Maxwell admin Inc, 45 NorthWest Street.<br> Sunrise Blvd, San Francisco.<br> 00000 00000 </address>
                                        </div>
                                    </div>
                                    <div class="row gutters">
                                        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                                            <div class="invoice-details">
                                                <address> Alex Maxwell<br> 150-600 Church Street, Florida, USA </address>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                            <div class="invoice-details">
                                                <div class="invoice-num">
                                                    <div>Invoice - #009</div>
                                                    <div>January 10th 2020</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="invoice-body">
                                    <div class="row gutters">
                                        <div class="col-lg-12 col-md-12 col-sm-12">
                                            <div class="table-responsive">
                                                <table class="table custom-table m-0">
                                                    <thead>
                                                        <tr>
                                                            <th>Items</th>
                                                            <th>Product ID</th>
                                                            <th>Quantity</th>
                                                            <th>Sub Total</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php

                                                    foreach ($product as $key => $valu)
                                                    {

                                                       echo ' <tr>  
                                                            <td>'.$key.'<p class="m-0 text-muted"> Reference site about Lorem Ipsum, giving information on its origins.</p>
                                                            </td>
                                                            <td>#50000981</td>
                                                            <td>1</td>
                                                            <td>'.$valu.'</td>
                                                        </tr>' ;
                                                    }

                                                        ?>
                                                        
                                                        
                                                        <tr>
                                                            <td>&nbsp;</td>
                                                            <td colspan="2">
                                                                <p> Subtotal<br> Shipping &amp; Handling<br> Tax<br></p>
                                                                <h5 class="text-success"><strong>Grand Total</strong></h5>
                                                            </td>
                                                            <td>
                                                                <p> $5000.00<br> $100.00<br> $49.00<br></p>
                                                                <h5 class="text-success"><strong> <?= $total_sum ?> </strong></h5>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="invoice-footer"> Thank you for your Business.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">
body {

                margin: 0;
                padding: 0;
                font: 400 .875rem 'Open Sans', sans-serif;
                color: #bcd0f7;
                background: #1A233A;
                position: relative;
                height: 100%;
            }

            .invoice-container {
                padding: 1rem;
            }

            .invoice-container .invoice-header .invoice-logo {
                margin: 0.8rem 0 0 0;
                display: inline-block;
                font-size: 1.6rem;
                font-weight: 700;
                color: #bcd0f7;
            }

            .invoice-container .invoice-header .invoice-logo img {
                max-width: 130px;
            }

            .invoice-container .invoice-header address {
                font-size: 0.8rem;
                color: #8a99b5;
                margin: 0;
            }

            .invoice-container .invoice-details {
                margin: 1rem 0 0 0;
                padding: 1rem;
                line-height: 180%;
                background: #1a233a;
            }

            .invoice-container .invoice-details .invoice-num {
                text-align: right;
                font-size: 0.8rem;
            }

            .invoice-container .invoice-body {
                padding: 1rem 0 0 0;
            }

            .invoice-container .invoice-footer {
                text-align: center;
                font-size: 0.7rem;
                margin: 5px 0 0 0;
            }

            .invoice-status {
                text-align: center;
                padding: 1rem;
                background: #272e48;
                -webkit-border-radius: 4px;
                -moz-border-radius: 4px;
                border-radius: 4px;
                margin-bottom: 1rem;
            }

            .invoice-status h2.status {
                margin: 0 0 0.8rem 0;
            }

            .invoice-status h5.status-title {
                margin: 0 0 0.8rem 0;
                color: #8a99b5;
            }

            .invoice-status p.status-type {
                margin: 0.5rem 0 0 0;
                padding: 0;
                line-height: 150%;
            }

            .invoice-status i {
                font-size: 1.5rem;
                margin: 0 0 1rem 0;
                display: inline-block;
                padding: 1rem;
                background: #1a233a;
                -webkit-border-radius: 50px;
                -moz-border-radius: 50px;
                border-radius: 50px;
            }

            .invoice-status .badge {
                text-transform: uppercase;
            }

            @media (max-width: 767px) {
                .invoice-container {
                    padding: 1rem;
                }
            }

            .card {
                background: #272E48;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                border: 0;
                margin-bottom: 1rem;
            }

            .custom-table {
                border: 1px solid #2b3958;
            }

            .custom-table thead {
                background: #2f71c1;
            }

            .custom-table thead th {
                border: 0;
                color: #ffffff;
            }

            .custom-table>tbody tr:hover {
                background: #172033;
            }

            .custom-table>tbody tr:nth-of-type(even) {
                background-color: #1a243a;
            }

            .custom-table>tbody td {
                border: 1px solid #2e3d5f;
            }

            .table {
                background: #1a243a;
                color: #bcd0f7;
                font-size: .75rem;
            }

            .text-success {
                color: #c0d64a !important;
            }

            .custom-actions-btns {
                margin: auto;
                display: flex;
                justify-content: flex-end;
            }

            .custom-actions-btns .btn {
                margin: .3rem 0 .3rem .3rem;
            }
        </style>
        <script type="text/javascript"></script>
    </div>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-F1RTS0P1CD"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-F1RTS0P1CD');
    </script>
</body>

</html>