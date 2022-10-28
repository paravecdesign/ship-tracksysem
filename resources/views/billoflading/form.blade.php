<style>
    #container {
        width: 1000px;
        margin: 20px auto;
    }

    .ck-editor__editable[role="textbox"] {
        /* editing area */
        min-height: 200px;
    }

    .ck-content .image {
        /* block images */
        max-width: 80%;
        margin: 20px auto;
    }

    w-20p {
        width: 19.8% !important;
    }

    w-40p {
        width: 39.8% !important;
    }

    w-60p {
        width: 59.8% !important;
    }
</style>

<div class="bg-white p-4 p-6 rounded-xl shadow-2xl shadow-white/40">



    <div class="flex">

        <div style="width: 60%;">
            <div class="flex justify-between w-full">
                <div class="w-full mr-2" style="width: 100%;">
                    <div class="py-4">
                        <x-label for="shipper_id" :value="__('Shippers / Export')" />


                        <select name="shipper_id" id="shipper_id"
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
                            <option value="">Choose Shippers</option>
                            @forelse ($shippers as $shipper)
                                <option value="{{ $shipper->id }}"
                                    @if ($billoflading->shipper_id != null) {{ $shipper->id == $billoflading->shipper_id ? 'selected' : '' }} @endif>
                                    {{ $shipper->name }}</option>
                            @empty
                                <option value=""></option>
                            @endforelse
                        </select>


                        <div class="font-medium text-red-600">
                            @error('shipper_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="py-4">
                        <x-label for="consignee_id" :value="__('Consignee')" />
                        <select name="consignee_id" id="consignee_id"
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
                            <option value="">Choose Consignee</option>
                            @forelse ($consignees as $consignee)
                                <option value="{{ $consignee->id }}"
                                    @if ($billoflading->consignee_id != null) {{ $consignee->id == $billoflading->consignee_id ? 'selected' : '' }} @endif>
                                    {{ $consignee->name }}</option>
                            @empty
                                <option value=""></option>
                            @endforelse
                        </select>

                        <div class="font-medium text-red-600">
                            @error('consignee_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="py-4">
                        <x-label for="contactagent_id" :value="__('Contact Agent')" />
                        <select name="contactagent_id" id="contactagent_id"
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
                            <option value="">Choose Contact Agent</option>
                            @forelse ($contactagents as $contactagent)
                                <option value="{{ $contactagent->id }}"
                                    @if ($billoflading->contactagent_id != null) {{ $contactagent->id == $billoflading->contactagent_id ? 'selected' : '' }} @endif>
                                    {{ $contactagent->name }}</option>
                            @empty
                                <option value=""></option>
                            @endforelse
                        </select>

                        <div class="font-medium text-red-600">
                            @error('contactagent_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="py-4">
                        <x-label for="preCarriageBy" :value="__('Pre-Carriage By')" />
                        <x-input id="preCarriageBy" class="block py-1 w-full" type="text" name="preCarriageBy"
                            :value="$billoflading->preCarriageBy" placeholder="Precarriageby" />

                        <div class="font-medium text-red-600">
                            @error('preCarriageBy')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="py-4">
                        <x-label for="placeOfReceipt" :value="__('Place of Receipt')" />
                        <x-input id="placeOfReceipt" class="block py-1 w-full" type="text" name="placeOfReceipt"
                            :value="$billoflading->placeOfReceipt" placeholder="Place of receipt" />

                        <div class="font-medium text-red-600">
                            @error('placeOfReceipt')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="py-4">
                        <x-label for="shippedBoardDate" :value="__('Shipped Board Date')" />
                        <x-input id="shippedBoardDate" class="block py-1 w-full" type="date" name="shippedBoardDate"
                            :value="$billoflading->shippedBoardDate" placeholder="Shipped board date" />

                        <div class="font-medium text-red-600">
                            @error('shippedBoardDate')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="w-full mr-2">
                    <div class="py-4">
                        <x-label for="reference" :value="__('Reference')" />
                        <x-input id="reference" class="block py-1 w-full" type="text" name="reference"
                            :value="$billoflading->reference" placeholder="Reference" />

                        <div class="font-medium text-red-600">
                            @error('reference')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="py-4">
                        <x-label for="courier_id" :value="__('Forwarding Agent')" />
                        <select name="courier_id" id="courier_id"
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
                            <option value="">Choose Forwarding Agent</option>
                            @forelse ($couriers as $courier)
                                <option value="{{ $courier->id }}"
                                    @if ($billoflading->courier_id != null) {{ $courier->id == $billoflading->courier_id ? 'selected' : '' }} @endif>
                                    {{ $courier->name }}</option>

                            @empty
                                <option value=""></option>
                            @endforelse
                        </select>

                        <div class="font-medium text-red-600">
                            @error('courier_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="py-4">
                        <x-label for="notifyparty_id" :value="__('Notify Party')" />
                        <select name="notifyparty_id" id="notifyparty_id"
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
                            <option value="">Choose Forwarder</option>
                            @forelse ($others as $other)
                                <option value="{{ $other->id }}"
                                    @if ($billoflading->notifyparty_id != null) {{ $other->id == $billoflading->notifyparty_id ? 'selected' : '' }} @endif>
                                    {{ $other->name }}</option>
                            @empty
                                <option value=""></option>
                            @endforelse
                        </select>

                        <div class="font-medium text-red-600">
                            @error('notifyparty_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="flex">
                        <div class="py-4">
                            <x-label for="vesselflag" :value="__('Vessel Flag *')" />
                            <x-input id="vesselflag" class="block py-1 w-full" type="text" name="vesselflag"
                                :value="$billoflading->vesselflag"  />

                            <div class="font-medium text-red-600">
                                @error('vesselflag')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="py-4 pl-3">
                            <x-label for="vessel" :value="__('Vessel')" />
                            <x-input id="vessel" class="block py-1 w-full" type="text" name="vessel"
                                :value="$billoflading->vessel" />

                            <div class="font-medium text-red-600">
                                @error('vessel')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="py-4 w-full">
                            <x-label for="placeOfDelivery" :value="__('Place Of Delivery')" />
                            <x-input id="placeOfDelivery" class="block py-1 w-full" type="text" name="placeOfDelivery"
                                :value="$billoflading->placeOfDelivery" />

                            <div class="font-medium text-red-600">
                                @error('placeOfDelivery')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="py-4">
                            <x-label for="voyageNo" :value="__('Voyage Number')" />
                            <x-input id="voyageNo" class="block py-1 w-full" type="text" name="voyageNo"
                                :value="$billoflading->voyageNo" />

                            <div class="font-medium text-red-600">
                                @error('voyageNo')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="py-4">
                        <x-label for="placeDateOfIssue" :value="__('Date of Issue')" />
                        <x-input id="placeDateOfIssue" class="block py-1 w-full" type="date"
                            name="placeDateOfIssue" :value="$billoflading->placeDateOfIssue" placeholder="Place date of issue" />

                        <div class="font-medium text-red-600">
                            @error('placeDateOfIssue')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>
            </div>
            <div class="flex">
                <div class="py-4 px-2">
                    <x-label for="marknumber" :value="__('Mark & Number')" />
                    <x-input id="marknumber" class="block py-1 w-full" type="text" name="marknumber"
                        :value="$billoflading->marknumber" placeholder="mark and number" />

                    <div class="font-medium text-red-600">
                        @error('marknumber')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="py-4 px-2">
                    <x-label for="kindpackages" :value="__('No of Pieces')" />
                    <x-input id="kindpackages" class="block py-1 w-full" type="text" name="kindpackages"
                        :value="$billoflading->kindpackages" placeholder="Number of packages" />

                    <div class="font-medium text-red-600">
                        @error('kindpackages')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="py-4 px-2">
                    <x-label for="reported_date" :value="__('Reported Date')" />
                    <x-input id="reported_date" class="block py-1 w-full" type="date" name="reported_date"
                        :value="$billoflading->reported_date" placeholder="Kind packages" />

                    <div class="font-medium text-red-600">
                        @error('reported_date')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="flex">
                <div class="py-4 px-2">
                    <x-label for="asycudanumber" :value="__('Asycuda number')" />
                    <x-input id="asycudanumber" class="block  py-1 w-full" type="text"
                        name="asycudanumber" :value="$billoflading->asycudanumber" />

                    <div class="font-medium text-red-600">
                        @error('asycudanumber')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="py-4 px-2">
                    <x-label for="wharfinger" :value="__('Wharfinger')" />
                    <x-input id="wharfinger" class="block  py-1 w-full" type="text" name="wharfinger"
                        :value="$billoflading->wharfinger" />

                    <div class="font-medium text-red-600">
                        @error('wharfinger')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="py-4 px-2">
                <x-label for="commodity" :value="__('Commodity')" />
                <x-input id="commodity" class="block  py-1 w-full" type="text" name="commodity"
                    :value="$billoflading->commodity" />

                <div class="font-medium text-red-600">
                    @error('commodity')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="w-full">
                <x-label for="placeDateOfIssue" :value="__('Description of packages and goods')" />
                <x-input id="description" class="block py-1 w-full" type="text" name="description"
                    :value="$billoflading->description" placeholder="Description" />

            </div>
        </div>
        <div class="w-40p mr-2" style=" width: 39.8% !important;">
      
             @if(Auth::user()->is_admin == 0)
            <input type="hidden" name="warehouse_id" value="{{ Auth::user()->id }}">
            @else
            <div class="py-4 w-full">
                    <x-label for="warehouse_id" :value="__('Freight Agent')" />
                    <select name="warehouse_id" id="warehouse_id"
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
                            <option value="">Choose Agent</option>
                                @foreach($warehouses as $warehouse)
                                <option
                                    value="{{ $warehouse->id }}"
                                @if ($billoflading->warehouse_id != null) {{ $warehouse->id == $billoflading->warehouse_id ? 'selected' : '' }} @endif>{{ $warehouse->name }}</option>
                                @endforeach

                        </select>

                    <div class="font-medium text-red-600">
                        @error('warehouse_id')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            @endif
            <!--<div class="py-4">-->
            <!--    <x-label for="bl_number" :value="__('Bill Of Lading Number')" />-->
            <!--    <x-input id="bl_number" class="block py-1 w-full" type="text" name="bl_number" :value="$billoflading->bl_number"-->
            <!--        autofocus  />-->

            <!--    <div class="font-medium text-red-600">-->
            <!--        @error('bl_number')-->
            <!--            <span class="text-danger">{{ $message }}</span>-->
            <!--        @enderror-->
            <!--    </div>-->
            <!--</div>-->
             {{--  --}}
            <div class="py-4">
                <x-label for="hbl_number" :value="__('House BOL is Auto Generated')" />
                <x-input id="hbl_number" class="block py-1 w-full" readonly type="text" name="hbl_number" :value="$billoflading->hbl_number"
                    autofocus  />

                <div class="font-medium text-red-600">
                    @error('hbl_number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="py-4">
                <x-label for="mbl_number" :value="__('Master bill of lading number ')" />
                <x-input id="mbl_number" class="block py-1 w-full" type="text" name="mbl_number" :value="$billoflading->mbl_number"
                    autofocus  />

                <div class="font-medium text-red-600">
                    @error('mbl_number')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="py-4">
                <x-label for="portofloading" :value="__('Port Of Loading')" />
                <x-input id="portofloading" class="block py-1  w-full" type="text" name="portofloading"
                    :value="$billoflading->portofloading" placeholder="Port of leading" />

                <div class="font-medium text-red-600">
                    @error('portofloading')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="flex">

                <div class="py-4">
                    <x-label for="PortOfDischarge" :value="__('Port of Discharge')" />
                    <x-input id="PortOfDischarge" class="block py-1 w-full" type="text" name="PortOfDischarge"
                        :value="$billoflading->PortOfDischarge" placeholder="Port of discharge" />

                    <div class="font-medium text-red-600">
                        @error('PortOfDischarge')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="py-4 px-2">
                    <x-label for="finalDestination" :value="__('POINT AND COUNTRY OF ORIGIN')" />
                    <x-input id="finalDestination" class="block  py-1 w-full" type="text" name="finalDestination"
                        :value="$billoflading->finalDestination" />

                    <div class="font-medium text-red-600">
                        @error('finalDestination')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="flex justify-between">

                <div class="py-4 w-full">
                    <x-label for="charges" :value="__('Freight Charges')" />
                    <x-input id="charges" class="block py-1 w-full" type="text" name="charges"
                        :value="$billoflading->charges" />

                    <div class="font-medium text-red-600">
                        @error('charges')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="py-4 pl-3 w-full">
                    <x-label for="freightTeams" :value="__('Freight Teams')" />
                    <select name="freightTeams" id="freightTeams"
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
                            <option value="">Choose</option>

                                <option value="Prepaid">Prepaid</option>
                                <option value="Collect">Collect</option>

                        </select>

                    <div class="font-medium text-red-600">
                        @error('freightTeams')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

            </div>
            <div class="flex">
                <div class="py-4 px-2">
                    <x-label for="bookingnumber" :value="__('Booking Number')" />
                    <x-input id="bookingnumber" class="block  py-1 w-full" type="text" name="bookingnumber"
                        :value="$billoflading->bookingnumber" />

                    <div class="font-medium text-red-600">
                        @error('bookingnumber')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="py-4 px-2">
                    <x-label for="departure" :value="__('Departure Date')" />
                    <x-input id="departure" class="block  py-1 w-full" type="date" name="departure"
                        :value="$billoflading->departure" />

                    <div class="font-medium text-red-600">
                        @error('departure')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

            </div>

            <div>

                <div class="flex">
                    <div class="py-4 px-2">
                        <x-label for="weight" :value="__('Weight')" />
                        <x-input id="weight" class="block  py-1 w-full" type="number" name="weight"
                            :value="$billoflading->weight" />

                        <div class="font-medium text-red-600">
                            @error('weight')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="py-4 px-2">
                        <x-label for="freightamount" :value="__('Freight Amount')" />
                        <x-input id="freightamount" class="block  py-1 w-full" type="text" name="freightamount"
                            :value="$billoflading->freightamount" />

                        <div class="font-medium text-red-600">
                            @error('freightamount')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="flex">

                    <div class="py-4 px-2">
                        <x-label for="carriercode" :value="__('Carrier Code')" />
                        <x-input id="carriercode" class="block  py-1 w-full" type="text" name="carriercode"
                            :value="$billoflading->carriercode" />

                        <div class="font-medium text-red-600">
                            @error('carriercode')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="py-4 px-2">
                        <x-label for="measurement" :value="__('Measurement')" />
                        <x-input id="measurement" class="block  py-1 w-full" type="number" name="measurement"
                            :value="$billoflading->measurement" />

                        <div class="font-medium text-red-600">
                            @error('measurement')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>


            </div>

        </div>

    </div>

</div>
