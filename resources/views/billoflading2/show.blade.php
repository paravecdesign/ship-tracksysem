@extends('layouts.app')

@section('template_title')
    {{ $billoflading->name ?? 'Show Billoflading' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Billoflading</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('billofladings.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Shipper Id:</strong>
                            {{ $billoflading->shipper_id }}
                        </div>
                        <div class="form-group">
                            <strong>Status Id:</strong>
                            {{ $billoflading->status_id }}
                        </div>
                        <div class="form-group">
                            <strong>Date:</strong>
                            {{ $billoflading->date }}
                        </div>
                        <div class="form-group">
                            <strong>Company Id:</strong>
                            {{ $billoflading->company_id }}
                        </div>
                        <div class="form-group">
                            <strong>Description:</strong>
                            {{ $billoflading->description }}
                        </div>
                        <div class="form-group">
                            <strong>Rate Id:</strong>
                            {{ $billoflading->rate_id }}
                        </div>
                        <div class="form-group">
                            <strong>Consignee Id:</strong>
                            {{ $billoflading->consignee_id }}
                        </div>
                        <div class="form-group">
                            <strong>Courier Id:</strong>
                            {{ $billoflading->courier_id }}
                        </div>
                        <div class="form-group">
                            <strong>Pieces:</strong>
                            {{ $billoflading->pieces }}
                        </div>
                        <div class="form-group">
                            <strong>Weight:</strong>
                            {{ $billoflading->weight }}
                        </div>
                        <div class="form-group">
                            <strong>Volume:</strong>
                            {{ $billoflading->volume }}
                        </div>
                        <div class="form-group">
                            <strong>Bl Number:</strong>
                            {{ $billoflading->bl_number }}
                        </div>
                        <div class="form-group">
                            <strong>Reference:</strong>
                            {{ $billoflading->reference }}
                        </div>
                        <div class="form-group">
                            <strong>Consignment:</strong>
                            {{ $billoflading->consignment }}
                        </div>
                        <div class="form-group">
                            <strong>Precarriageby:</strong>
                            {{ $billoflading->preCarriageBy }}
                        </div>
                        <div class="form-group">
                            <strong>Placeofreceipt:</strong>
                            {{ $billoflading->placeOfReceipt }}
                        </div>
                        <div class="form-group">
                            <strong>Vessel:</strong>
                            {{ $billoflading->vessel }}
                        </div>
                        <div class="form-group">
                            <strong>Voyageno:</strong>
                            {{ $billoflading->voyageNo }}
                        </div>
                        <div class="form-group">
                            <strong>Portofleading:</strong>
                            {{ $billoflading->portOfLeading }}
                        </div>
                        <div class="form-group">
                            <strong>Portofdischarge:</strong>
                            {{ $billoflading->PortOfDischarge }}
                        </div>
                        <div class="form-group">
                            <strong>Placeofleading:</strong>
                            {{ $billoflading->placeOfLeading }}
                        </div>
                        <div class="form-group">
                            <strong>Placeofdelivery:</strong>
                            {{ $billoflading->placeOfDelivery }}
                        </div>
                        <div class="form-group">
                            <strong>Freightteams:</strong>
                            {{ $billoflading->freightTeams }}
                        </div>
                        <div class="form-group">
                            <strong>Shippedboarddate:</strong>
                            {{ $billoflading->shippedBoardDate }}
                        </div>
                        <div class="form-group">
                            <strong>Placedateofissue:</strong>
                            {{ $billoflading->placeDateOfIssue }}
                        </div>
                        <div class="form-group">
                            <strong>Termconditions:</strong>
                            {{ $billoflading->termConditions }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
