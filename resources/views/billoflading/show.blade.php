<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $billoflading->name ?? 'Show Billoflading' }}
        </h2>
    </x-slot>

    <section class="fle min-h-screen flex-col justify-center p-3">
        <a href="{{ route('billofladings.index') }}"> Back</a>
        <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">

            <div>
                <div>
                    <span class="card-title">Create Billoflading</span>
                </div>
                <div class="row">
                    <div class="flex">
                        <div>
                            <strong>Shipper Id:</strong>
                            {{ $billoflading->shipper_id }}
                        </div>
                        <div>
                            <strong>Status Id:</strong>
                            {{ $billoflading->status_id }}
                        </div>
                        <div>
                            <strong>Date:</strong>
                            {{ $billoflading->date }}
                        </div>

                    </div>

                    <div>
                        <strong>Company Id:</strong>
                        {{ $billoflading->company_id }}
                    </div>
                    <div>
                        <strong>Description:</strong>
                        {{ $billoflading->description }}
                    </div>
                    <div>
                        <strong>Rate Id:</strong>
                        {{ $billoflading->rate_id }}
                    </div>
                    <div>
                        <strong>Consignee Id:</strong>
                        {{ $billoflading->consignee_id }}
                    </div>
                    <div>
                        <strong>Courier Id:</strong>
                        {{ $billoflading->courier_id }}
                    </div>
                    <div>
                        <strong>Pieces:</strong>
                        {{ $billoflading->pieces }}
                    </div>
                    <div>
                        <strong>Weight:</strong>
                        {{ $billoflading->weight }}
                    </div>
                    <div>
                        <strong>Volume:</strong>
                        {{ $billoflading->volume }}
                    </div>
                    <div>
                        <strong>Bl Number:</strong>
                        {{ $billoflading->bl_number }}
                    </div>
                    <div>
                        <strong>Reference:</strong>
                        {{ $billoflading->reference }}
                    </div>
                    <div>
                        <strong>Consignment:</strong>
                        {{ $billoflading->consignment }}
                    </div>
                    <div>
                        <strong>Precarriageby:</strong>
                        {{ $billoflading->preCarriageBy }}
                    </div>
                    <div>
                        <strong>Placeofreceipt:</strong>
                        {{ $billoflading->placeOfReceipt }}
                    </div>
                    <div>
                        <strong>Vessel:</strong>
                        {{ $billoflading->vessel }}
                    </div>
                    <div>
                        <strong>Voyageno:</strong>
                        {{ $billoflading->voyageNo }}
                    </div>
                    <div>
                        <strong>Portofleading:</strong>
                        {{ $billoflading->portOfLeading }}
                    </div>
                    <div>
                        <strong>Portofdischarge:</strong>
                        {{ $billoflading->PortOfDischarge }}
                    </div>
                    <div>
                        <strong>Placeofleading:</strong>
                        {{ $billoflading->placeOfLeading }}
                    </div>
                    <div>
                        <strong>Placeofdelivery:</strong>
                        {{ $billoflading->placeOfDelivery }}
                    </div>
                    <div>
                        <strong>Freightteams:</strong>
                        {{ $billoflading->freightTeams }}
                    </div>
                    <div>
                        <strong>Shippedboarddate:</strong>
                        {{ $billoflading->shippedBoardDate }}
                    </div>
                    <div>
                        <strong>Placedateofissue:</strong>
                        {{ $billoflading->placeDateOfIssue }}
                    </div>
                    <div>
                        <strong>Termconditions:</strong>
                        {{ $billoflading->termConditions }}
                    </div>

                </div>
            </div>
        </div>

    </section>

</x-app-layout>
