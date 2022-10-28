<html>

<head>
    <title>SnowPacs</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            width: 230mm;
            height: 100%;
            margin: 0 auto;
            padding: 0;
            font-size: 12pt;
            background: rgb(204, 204, 204);
        }

        * {
            box-sizing: border-box;
            -moz-box-sizing: border-box;
        }

        .main-page {
            width: 210mm;
            min-height: 297mm;
            margin: 10mm auto;
            background: white;
            box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.5);
        }

        .sub-page {
            padding: 1cm;
            height: 297mm;
        }

        @page {
            size: letter;
            margin: 0;
        }

        @media print {

            html,
            body {
                width: 210mm;
                height: 297mm;
            }

            .main-page {
                margin: 0;
                border: initial;
                border-radius: initial;
                width: initial;
                min-height: initial;
                box-shadow: initial;
                background: initial;
                page-break-after: always;
            }

        }

        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        .no-border-b {
            border-bottom: none !important;
        }

        .border-b {
            border-bottom: 1px solid;
        }

        .no-border-l {
            border-left: none !important;
        }

        .border-l {
            border-left: 1px solid;
        }

        .no-border-r {
            border-right: none !important;
        }

        .border-r {
            border-right: 1px solid;
        }

        .no-border-t {
            border-top: none !important;
        }

        .border-t {
            border-top: 1px solid;
        }

        .border-black {
            border-color: rgb(0, 0, 0);
        }

        .border {
            border: solid 1px;
        }


        /* .border-b-black {
    border: 1px solid 000ch !important;
} */
        tr {
            height: 35px;
            height: 40px;
            vertical-align: text-top;
        }

        .h-30 {
            height: 8rem;
        }
        .h-25 {
            height: 6rem;
        }

        .w-18p {
            width: 19%;
        }

        .w-22p {
            width: 100% !important;
        }
    </style>
</head>

<body>
   <Script>
        window.print()
    </Script>


    <div class="main-page">
        <div class="sub-page">
            <div class="flex justify-between">
                <h1>SnowStorm LTD</h1>
                <h3 align='center'>Bill Of Lading</h3>
            </div>
            <div class="flex justify-between border no-border-b">
                <div class="w-full border-r ">
                    <div class="w-full border-b h-25">
                        <div><small>Shipper</small> </div>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->shipper->name ?? '' }}</p>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->shipper->address1 ?? '' }}</p>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->shipper->address2 ?? '' }}</p>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->shipper->city->name ?? '' }}, {{ $billoflading->shipper->state->name ?? '' }}, {{ $billoflading->shipper->country->name ?? '' }}</p>
                    </div>
                    <div class="w-full border-b h-25">
                        <h4><small>Consignee</small></h4>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->consignee->name ?? '' }}</p>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->consignee->address1 ?? '' }}</p>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->consignee->address2 ?? '' }}</p>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->consignee->city->name  ?? '' }}, {{ $billoflading->consignee->state->name ?? '' }}, {{ $billoflading->consignee->country->name ?? '' }}</p>
                    </div>
                    <div class="w-full h-25 border-b">
                        <h4><small>Contact Agents</small></h4>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->contactagents->name ?? '' }}</p>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->contactagents->address1 ?? '' }}</p>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->contactagents->city->name  ?? '' }}, {{ $billoflading->contactagents->state->name ?? '' }}, {{ $billoflading->contactagents->country->short_code ?? '' }}</p>
                    </div>
                    <div class="flex w-full">
                        <div class="w-full border-r border-b h-10">
                            <h4><small>Pre-Carriage By</small></h4>
                            <p style="margin-bottom: -7px;">{{ $billoflading->preCarriageBy }}</p>

                        </div>

                        <div class="w-full border-b h-10">
                            <h4><small>Place Of Receipt</small></h4>
                            <p style="margin-bottom: -7px;">{{ $billoflading->placeOfReceipt }}</p>
                        </div>
                    </div>
                    <div class="flex w-full">
                        <div class="w-full border-r h-10">
                            <h4><small>Vessel</small></h4>
                            <p style="margin-bottom: -7px;">{{ $billoflading->vessel }}</p>
                        </div>

                        <div class="w-full  h-10">
                            <h4><small>Voyage No</small></h4>
                            <p style="margin-bottom: -7px;">{{ $billoflading->voyageNo }}</p>
                        </div>
                    </div>
                </div>

                <div class="w-full">
                    <div class="flex w-full ">
                        <div class="w-full border-r border-b h-16">
                            <h4><small>Shipper Reference</small></h4>
                            <p>{{ $billoflading->reference }}</p>
                        </div>

                        <div class="w-full border-b h-16">
                            <h4><small>Bill of Lading Number</small></h4>
                            <p style="margin-bottom: -7px;">{{ $billoflading->hbl_number }}</p>
                        </div>
                    </div>
                    <div class="w-full h-25 border-b">
                        <h4><small>Notify Party</small></h4>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->other->name ?? '' }}</p>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->other->address1 ?? '' }}</p>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->other->city->name  ?? '' }}, {{ $billoflading->other->state->name ?? '' }}, {{ $billoflading->other->country->short_code ?? '' }}</p>
                    </div>

                    <div class="flex w-full">
                        <div class="w-full border-r border-b h-10">
                            <h4><small>Port Of Loading</small></h4>
                            <p>{{ $billoflading->portOfLeading }}</p>
                        </div>

                        <div class="w-full border-b h-10">
                            <h4><small>Port Of Discharge</small></h4>
                            <p>{{ $billoflading->PortOfDischarge }}</p>
                        </div>
                    </div>
                    <div class="flex w-full">
                        <div class="w-full border-r border-b h-10">
                            <h4><small>Place of Delivery</small></h4>
                            <p>{{ $billoflading->placeOfDelivery }}</p>
                        </div>

                        <div class="w-full border-b h-10">
                            <h4><small>Final Destination</small></h4>
                            <p>{{ $billoflading->finalDestination ?? '' }}</p>
                        </div>
                    </div>
                </div>

            </div>
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th width="19.5%"><small>Mark & Number</small></th>
                        <th width="18%"><small>king & No of Packages</small></th>
                        <th width="25.5%"><small>Doscripion</small></th>
                        <th width="17.5%"><small>Gross Weight (kg)</small></th>
                        <th width="19.5%"><small>Measurements</small></th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="height: 25px">
                        <td class="text-center ">{{ $billoflading->marknumber ?? '' }}</td>
                        <td class="text-center">{{ $billoflading->kindpackages ?? '' }}</td>
                        <td class="text-center">{{ $billoflading->description ?? '' }}</td>
                        <td class="text-center">{{ $billoflading->weight ?? '' }}</td>
                        <td class="text-center">{{ $billoflading->measurement ?? '' }}</td>
                    </tr>

                </tbody>
            </table>
            <table class="table-auto w-full">
                <thead>
                    <tr style="height: 25px">
                        <th colspan="3">Total This Page</th>
                        <th>{{ $billoflading->weight ?? '' }}</th>
                        <th>{{ $billoflading->measurement ?? '' }}</th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="height: 25px">
                        <td colspan="3">Consignment Total</td>
                        <th>{{ $billoflading->weight ?? '' }}</th>
                        <th>{{ $billoflading->measurement ?? '' }}</th>
                    </tr>
                </tbody>
            </table>
            <table class="table-auto w-full">
                <thead>
                    <tr style="height: 20px;">
                        <th width="19.5%"><small>Container No(s)</small></th>
                        <th width="18%"><small>Seal No(s)</small></th>
                        <th width="25.5%"><small>Size / Type</small></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($billoflading->getcontents as $content)
                    <tr style="height: 25px">
                        <td class="text-center no-border-r">{{ $content->containerNo ?? '' }}</td>

                        <td class="text-center no-border-r">{{ $content->seal ?? '' }}</td>

                        <td class="text-center no-border-r">{{ $content->shipmenttype->name ?? '' }}</td>

                    </tr>
                @endforeach
                </tbody>
            </table>
            <table class="table-auto w-full" style="height: 60px;vertical-align: text-top;">
                <tbody>
                    <tr>
                        <td class="text-left no-border-r" colspan="5">
                            <small>Total Mo. Containers or other packages or units(in words)</small>
                            <p>{{ $billoflading->commodity }}</p>
                        </td>
                    </tr>
                    <tr style="height: 60px;vertical-align: text-top;" width="20%">
                        <td class="text-left no-border-r">
                            <small></small>
                            <p></p>
                        </td>
                        <td class="text-left no-border-r " width="20%">
                            <small>Incoterms </small>
                            <p></p>
                        </td>
                        <td class="text-left no-border-r" width="20%">
                            <small></small>
                            <p></p>
                        </td>
                        <td class="text-left no-border-r" width="20%">
                            <small>Freight Charges</small>
                            <p>{{ $billoflading->freightTeams }}</p>
                        </td>
                        <td class="text-left no-border-r" width="20%">
                            <small>Shipped Board Date</small>
                            <p>{{ \Carbon\Carbon::parse($billoflading->shippedBoardDate)->format('d M Y')}}</p>
                        </td>
                    </tr>
                    <tr style="height: 45px;vertical-align: text-top;">
                        <td colspan="3" rowspan="4">
                            <small>Terms and Conditions</small>
                            <p></p>
                        </td>
                        <td colspan="2" >
                            <small>Place of Date Issue</small>
                            <div class="flex justify-between">
                                      <p>{{ \Carbon\Carbon::parse($billoflading->placeDateOfIssue)->format('d M Y')}}</p>
                            </div>

                        </td>
                        <tr style="height: 45px;">
                            <td colspan="2">
                                <small>Signatory Company</small>
                                <p>{{ $setting->name }}</p>
                            </td>
                        </tr>
                        <tr style="height: 45px;">
                            <td colspan="2">
                                <small>tet</small>
                                <div >
                                    <p>Name of Authorized Signatory</p>
                                    <div class="flex justify-between pr-4">
                                        <p>{{ $setting->fname }}</p>
                                        <p>{{ $setting->lname }}</p>

                                    </div>
                          </div>
                            </td>
                        </tr>
                        <tr style="height: 150px;">
                            <td colspan="2">
                                <small>Signature</small>

                            </td>
                        </tr>
                    </tr>
                </tbody>
            </table>



        </div>
    </div>
</body>

</html>
