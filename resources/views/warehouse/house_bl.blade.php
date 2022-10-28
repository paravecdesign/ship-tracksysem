<html>

<head>
    <title>{{ $setting->name }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
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
            size: A4;
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
            height: 40px;
            vertical-align: text-top;
        }
.h-17{
    height: 4.5rem;
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

        h5{
            font-size: 11px;
            text-transform: uppercase;
        }
        h1{
            font-family: 'Anton', sans-serif;
        }
    </style>
</head>

<body>

    <Script>
                window.print()
        
    </Script>


    <div class="main-page">
        <div class="sub-page">
            <div class="justify-center p-3 text-center">
                <h1 style="font-size: 1.5em;"><strong>
                    {{ $setting->name }}
                </strong></h1>
                <p>19-21 King Street, Kingston Second floor Unit 2</p>
                <p >Tel: (876) 359-7842/ (876) 627-6127</p>
                <p>Email snowpacs9187@gmail.com</p>

            </div>
            <div class="flex justify-between border no-border-b">
                <div class="w-full border-r ">
                    <div class="w-full border-b h-30">
                        <div><small>SHIPPER/EXPORTER (Complete Name and Address)</small> </div>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->shipper->name ?? '' }}</p>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->shipper->address1 ?? '' }}</p>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->shipper->address2 ?? '' }}</p>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->shipper->city->name ?? '' }},
                            {{ $billoflading->shipper->state->name ?? '' }},
                            {{ $billoflading->shipper->country->name ?? '' }}</p>
                    </div>
                    <div class="w-full border-b h-32">
                        <h4><small>CONSIGNEE (Complete Name and Address)</small></h4>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->consignee->name ?? '' }}</p>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->consignee->address1 ?? '' }}
                        </p>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->consignee->address2 ?? '' }}
                        </p>
                        <p class="p-0" style="margin-bottom: -7px;">
                            {{ $billoflading->consignee->city->name ?? '' }},
                            {{ $billoflading->consignee->state->name ?? '' }},
                            {{ $billoflading->consignee->country->name ?? '' }}</p>
                    </div>
                    <div class="w-full h-10 border-b">
                        <h4><small>NOTIFY PARTY(Complete Name and Address)</small></h4>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->other->name ?? '' }}</p>
                    </div>

                    <div class="flex w-full">
                    <div class="w-full border-r border-b h-10">
                            <h5><small>Place Of Receipt</small>: </h5>
                            <p style="margin-bottom: -7px;">{{ $billoflading->placeOfReceipt }}</p>
                        </div>
                        <div class="w-full  border-b h-10">
                            <h5><small>Pre-Carriage By</small>: </h5>
                            <p style="margin-bottom: -7px;">{{ $billoflading->preCarriageBy }}</p>

                        </div>

                       
                    </div>
                    <div class="flex w-full">
                        <div class="w-full border-r border-b h-10">
                            <h5>Vessel: </h5>
                            <p>{{ $billoflading->vessel }}</p>
                        </div>

                           <div class="w-full border-b h-10">
                            <h5>Port Of Loading</h4>
                            <p>{{ $billoflading->portOfLeading }}</p>
                          
                        </div>
                    </div>
                    <div class="flex w-full">
                        <div class="w-full border-r  h-10">
                            <h5>Port Of Discharge</h5>
                            <p>{{ $billoflading->PortOfDischarge }}</p>
                        </div>

                           <div class="w-full h-10">
                           <h5>Place of Delivery: </h5>
                            <p>{{ $billoflading->placeOfDelivery }}</p>
                        </div>
                    </div>
                </div>

                <div class="w-full">
                    <div class="flex w-full ">
                        <div class="w-full border-b h-6">
                            <h5>DOCUMENT NO. {{ $billoflading->hbl_number }}</h5>

                        </div>
                    </div>
                    <div class="flex w-full ">
                        <div class="w-full border-b h-12">
                            <h4><small>EXPORT REFERENCES</small></h4>
                            <p><{{ $billoflading->reference }}< /p>
                        </div>
                    </div>

                    <div class="w-full border-b " style="height: 48px;">
                        <h4><small>POINT AND COUNTRY OF ORIGIN</small></h4>
                        <p>{{ $billoflading->finalDestination ?? '' }}</p>
                    </div>
                    <div class="w-full border-b" style="height: 48px;">
                        <h5>FORWARDING AGENT: {{ $setting->name }}</h5>
                       
                    </div>
                    <div class="w-full border-b" style="height: 13em;">
                        <h4><small>Contact Agents</small></h4>
                        <p class="p-0" style="margin-bottom: -7px;">{{ $billoflading->contactagents->name ?? '' }}
                        </p>
                        <p class="p-0" style="margin-bottom: -7px;">
                            {{ $billoflading->contactagents->address1 ?? '' }}</p>
                        <p class="p-0" style="margin-bottom: -7px;">
                            {{ $billoflading->contactagents->city->name ?? '' }},
                            {{ $billoflading->contactagents->state->name ?? '' }},
                            {{ $billoflading->contactagents->country->short_code ?? '' }}</p>
                    </div>
        
                    <div class="flex w-full">
                   


                    </div>
                    <div class="flex w-full">
                        <div class="w-full h-10">
                            <h4><small>ONWARD INLAND ROUTING</small></h4>
                            <p></p>
                        </div>


                    </div>
                </div>

            </div>
            <div class="border flex justify-center w-full">PARTICULARS FURNISHED BY SHIPPER</div>
            <table class="table-auto w-full">
                <thead>
                    <tr style="height: 25px;">
                        <th width="14%"><small> <h5>Mark & Number</h5> </small></th>
                        <th width="16%"><small> <h5>NO. OF PKGS.</h5> </small></th>
                        <th width="25.5%"><small> <h5>DESCRIPTION OF PACKAGES AND GOODS</h5> </small></th>
                        <th width="16%"><small> <h5>Gross Weight (kg)</h5> </small></th>
                        <th width="15%"><small> <h5>Measurements</h5> </small></th>
                    </tr>
                </thead>
                <tbody>
                    <tr style="height: 25px;border-bottom: white solid;">
                        <td class="text-center ">{{ $billoflading->marknumber ?? '' }}</td>
                        <td class="text-center">{{ $billoflading->kindpackages ?? '' }}</td>
                        <td class="text-center">{{ $billoflading->description ?? '' }}</td>
                        <td class="text-center">{{ $billoflading->weight ?? '' }}</td>
                        <td class="text-center">{{ $billoflading->measurement ?? '' }}</td>
                    </tr>

                </tbody>
            </table>


            <table class="table-auto w-full" style="height: 60px;vertical-align: text-top;">
                <tbody>
                    <tr>
                        <td 
                        style="border-top: thin solid white;"
                        class="text-left text-center no-border-r" colspan="2">
                            <small>All damages must be reported on inspection of goods, Damages not reported and claimed for before leaving the Warehouse will be denied.Snowpacs Logistics & Courier Service or Agents are not responsible for loss or damages for goods not insured. Liability on Personal effects: Maximum US $100. Snowpacs Logistics & Courier service or Agent will not be responsible for goods left in the warehouse over 30 days.</small>
                    <p>WHARFAGE AND HANDLING CHARGES NOT INCLUDED</P>
                        </td>
                    </tr>
                    <tr style="height: 25px; vertical-align: text-top;" width="20%">


                        <td class="text-left no-border-r" width="50%">
                            <small>SCHEDULE "B" NO.:</small>
                        </td>
                        <td rowspan="2" class="text-left no-border-r" width="50%" style="
    height: 300px;
    font-size: smaller;
    padding: 5px;
"">
<br>
<small>IN ACCEPTING THIS BILL OF LADING ANY LOCAL CUSTOMS OR PRIVILEGES
TO THE CONTRARY NOTWITHSTANDING THE SHIPPER, CONSIGNEE AND
OWNER OF THE GOODS AND THE HOLDER OF THIS BILL OF LADING AGREE
TO BE BOUND BY ALL THE STIPULATIONS, EXCEPTIONS AND CONDITIONS STATED HEREIN WHETHER WRITTEN, PRINTED, STAMPED OR INCORPORATED ON THE FRONT OR REVERSE SIDE HEREOF, AS FULLY AS IF THEY WERE ALL SIGNED BY SUCH SHIPPER, CONSIGNEE, OWNER OR HOLDER.
IN WITNESS WHEREOF THREE (3) BILLS OF LADING ALL OF THIS TENOR AND DATE HAVE BEEN SIGNED ONE OF WHICH BEING ACCOMPLISHED, THE OTHERS TO STAND VOID
</small>
                     
                        </td>
                    </tr>
                    <tr style="height: 45px; vertical-align: text-top;">
                        <td  rowspan="2">
                            <h5>FREIGHT AND CHARGES: {{ $billoflading->freightTeams }} {{ $billoflading->charges }}</h5>
                      <br>
                           
                            <p> <small>.APPLICABLE ONLY WHEN DOCUMENT B/L NO.: USED AS A THROUGH BILL OF LADING.GOODS LEFT IN WAREHOUSE OVER 2 WEEKS WILL BE BILLED $1 PER CUBE. PER WEEK STORAGE CHARGE.	MONTH	DAY	YEAR"GLASS AND PERISHABLE       ITEMS WOULD BE SHIPPED AT OWNERS RISK."THANKING YOU FOR     YOUR KIND COOPERATION</small></p>
                        </td>
                   
                      </tr>
              
                </tbody>
            </table>



        </div>
    </div>
</body>

</html>
