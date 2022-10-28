<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('shipper_id') }}
            {{ Form::text('shipper_id', $billoflading->shipper_id, ['class' => 'form-control' . ($errors->has('shipper_id') ? ' is-invalid' : ''), 'placeholder' => 'Shipper Id']) }}
            {!! $errors->first('shipper_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('status_id') }}
            {{ Form::text('status_id', $billoflading->status_id, ['class' => 'form-control' . ($errors->has('status_id') ? ' is-invalid' : ''), 'placeholder' => 'Status Id']) }}
            {!! $errors->first('status_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date') }}
            {{ Form::text('date', $billoflading->date, ['class' => 'form-control' . ($errors->has('date') ? ' is-invalid' : ''), 'placeholder' => 'Date']) }}
            {!! $errors->first('date', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('company_id') }}
            {{ Form::text('company_id', $billoflading->company_id, ['class' => 'form-control' . ($errors->has('company_id') ? ' is-invalid' : ''), 'placeholder' => 'Company Id']) }}
            {!! $errors->first('company_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('description') }}
            {{ Form::text('description', $billoflading->description, ['class' => 'form-control' . ($errors->has('description') ? ' is-invalid' : ''), 'placeholder' => 'Description']) }}
            {!! $errors->first('description', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rate_id') }}
            {{ Form::text('rate_id', $billoflading->rate_id, ['class' => 'form-control' . ($errors->has('rate_id') ? ' is-invalid' : ''), 'placeholder' => 'Rate Id']) }}
            {!! $errors->first('rate_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('consignee_id') }}
            {{ Form::text('consignee_id', $billoflading->consignee_id, ['class' => 'form-control' . ($errors->has('consignee_id') ? ' is-invalid' : ''), 'placeholder' => 'Consignee Id']) }}
            {!! $errors->first('consignee_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('courier_id') }}
            {{ Form::text('courier_id', $billoflading->courier_id, ['class' => 'form-control' . ($errors->has('courier_id') ? ' is-invalid' : ''), 'placeholder' => 'Courier Id']) }}
            {!! $errors->first('courier_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pieces') }}
            {{ Form::text('pieces', $billoflading->pieces, ['class' => 'form-control' . ($errors->has('pieces') ? ' is-invalid' : ''), 'placeholder' => 'Pieces']) }}
            {!! $errors->first('pieces', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('weight') }}
            {{ Form::text('weight', $billoflading->weight, ['class' => 'form-control' . ($errors->has('weight') ? ' is-invalid' : ''), 'placeholder' => 'Weight']) }}
            {!! $errors->first('weight', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('volume') }}
            {{ Form::text('volume', $billoflading->volume, ['class' => 'form-control' . ($errors->has('volume') ? ' is-invalid' : ''), 'placeholder' => 'Volume']) }}
            {!! $errors->first('volume', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('bl_number') }}
            {{ Form::text('bl_number', $billoflading->bl_number, ['class' => 'form-control' . ($errors->has('bl_number') ? ' is-invalid' : ''), 'placeholder' => 'Bl Number']) }}
            {!! $errors->first('bl_number', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('reference') }}
            {{ Form::text('reference', $billoflading->reference, ['class' => 'form-control' . ($errors->has('reference') ? ' is-invalid' : ''), 'placeholder' => 'Reference']) }}
            {!! $errors->first('reference', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('consignment') }}
            {{ Form::text('consignment', $billoflading->consignment, ['class' => 'form-control' . ($errors->has('consignment') ? ' is-invalid' : ''), 'placeholder' => 'Consignment']) }}
            {!! $errors->first('consignment', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('preCarriageBy') }}
            {{ Form::text('preCarriageBy', $billoflading->preCarriageBy, ['class' => 'form-control' . ($errors->has('preCarriageBy') ? ' is-invalid' : ''), 'placeholder' => 'Precarriageby']) }}
            {!! $errors->first('preCarriageBy', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('placeOfReceipt') }}
            {{ Form::text('placeOfReceipt', $billoflading->placeOfReceipt, ['class' => 'form-control' . ($errors->has('placeOfReceipt') ? ' is-invalid' : ''), 'placeholder' => 'Placeofreceipt']) }}
            {!! $errors->first('placeOfReceipt', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('vessel') }}
            {{ Form::text('vessel', $billoflading->vessel, ['class' => 'form-control' . ($errors->has('vessel') ? ' is-invalid' : ''), 'placeholder' => 'Vessel']) }}
            {!! $errors->first('vessel', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('voyageNo') }}
            {{ Form::text('voyageNo', $billoflading->voyageNo, ['class' => 'form-control' . ($errors->has('voyageNo') ? ' is-invalid' : ''), 'placeholder' => 'Voyageno']) }}
            {!! $errors->first('voyageNo', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('portOfLeading') }}
            {{ Form::text('portOfLeading', $billoflading->portOfLeading, ['class' => 'form-control' . ($errors->has('portOfLeading') ? ' is-invalid' : ''), 'placeholder' => 'Portofleading']) }}
            {!! $errors->first('portOfLeading', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('PortOfDischarge') }}
            {{ Form::text('PortOfDischarge', $billoflading->PortOfDischarge, ['class' => 'form-control' . ($errors->has('PortOfDischarge') ? ' is-invalid' : ''), 'placeholder' => 'Portofdischarge']) }}
            {!! $errors->first('PortOfDischarge', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('placeOfLeading') }}
            {{ Form::text('placeOfLeading', $billoflading->placeOfLeading, ['class' => 'form-control' . ($errors->has('placeOfLeading') ? ' is-invalid' : ''), 'placeholder' => 'Placeofleading']) }}
            {!! $errors->first('placeOfLeading', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('placeOfDelivery') }}
            {{ Form::text('placeOfDelivery', $billoflading->placeOfDelivery, ['class' => 'form-control' . ($errors->has('placeOfDelivery') ? ' is-invalid' : ''), 'placeholder' => 'Placeofdelivery']) }}
            {!! $errors->first('placeOfDelivery', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('freightTeams') }}
            {{ Form::text('freightTeams', $billoflading->freightTeams, ['class' => 'form-control' . ($errors->has('freightTeams') ? ' is-invalid' : ''), 'placeholder' => 'Freightteams']) }}
            {!! $errors->first('freightTeams', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('shippedBoardDate') }}
            {{ Form::text('shippedBoardDate', $billoflading->shippedBoardDate, ['class' => 'form-control' . ($errors->has('shippedBoardDate') ? ' is-invalid' : ''), 'placeholder' => 'Shippedboarddate']) }}
            {!! $errors->first('shippedBoardDate', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('placeDateOfIssue') }}
            {{ Form::text('placeDateOfIssue', $billoflading->placeDateOfIssue, ['class' => 'form-control' . ($errors->has('placeDateOfIssue') ? ' is-invalid' : ''), 'placeholder' => 'Placedateofissue']) }}
            {!! $errors->first('placeDateOfIssue', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('termConditions') }}
            {{ Form::text('termConditions', $billoflading->termConditions, ['class' => 'form-control' . ($errors->has('termConditions') ? ' is-invalid' : ''), 'placeholder' => 'Termconditions']) }}
            {!! $errors->first('termConditions', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>