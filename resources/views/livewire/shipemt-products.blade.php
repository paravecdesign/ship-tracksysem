<div class="bg-white rounded-xl shadow-2xl shadow-white/40">



    {{-- @dd($bolContents) --}}
    {{-- inoices centent --}}
    <div class="flex w-full">
        <div class=" px-2 w-full">
            <label>Container No</label>
        </div>
        <div class=" px-2 w-2/5">
            <label>Piece Count</label>
        </div>
        <div class=" px-2 w-full">
            <label>Seal No.</label>
        </div>
        <div class=" px-2 w-full">
            <label>Shipment Type / Size</label>
        </div>
        <div class=" px-2 w-2/5">
            <x-button wire:click.prevent="addbolContent" class="ml-1 bg-cyan-500">
                {{ __('+ Add') }}
            </x-button>
        </div>
    </div>
    {{-- @dd($bolContents) --}}
    @foreach ($bolContents as $index => $bolContent)

            <div class="flex w-full">

                    <div class="py-1 px-2 w-full">
                        <input type="text" class="block  py-1 w-full rounded"
                            wire:model.defer="bolContents.{{ $index }}.containerNo"
                            name="bolContents[{{ $index }}][containerNo]">
                    </div>
                    <div class="py-1 px-2 w-2/5">

                        <input type="number" class="block  py-1 w-full rounded"
                            wire:model.defer="bolContents.{{ $index }}.qty"
                            name="bolContents[{{ $index }}][qty]" placeholder="Piece Count">

                        <div class="font-medium text-red-600">
                            @error('kindpages')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="py-1 px-2 w-full">

                        <input type="text" class="block  py-1 w-full rounded"
                            wire:model="bolContents.{{ $index }}.seal"
                            name="bolContents[{{ $index }}][seal]" placeholder="Seal No">
                        <div class="font-medium text-red-600">
                            @error('seal')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>

                    <div class="py-1 px-2 w-full">

                        <select name="bolContents[{{ $index }}][shipment_type_id]"
                            wire:model="bolContents.{{ $index }}.shipment_type_id"
                            class="form-select appearance-none
            block
            w-full
            px-3
            py-1
            text-base
            font-normal
            text-gray-700
            bg-white bg-clip-padding bg-no-repeat
            border border-solid border-gray-300
            rounded
            transition
            ease-in-out
            m-0
            focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                            aria-label="Default select example">
                            <option value="">Choose Shipment Type</option>
                            @foreach ($allShipmentTypes as $shipmentType)
                                <option value="{{ $shipmentType->id }}">{{ $shipmentType->name }}</option>
                            @endforeach
                        </select>
                        <div class="font-medium text-red-600">
                            @error('shipment_type_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                    <div class="py-1 px-2 w-2/5 flex">

                            <x-button wire:click.prevent="invoiceRemove({{ $index }})">
                                Remove
                            </x-button>
                    </div>
            </div>

    @endforeach



</div>
