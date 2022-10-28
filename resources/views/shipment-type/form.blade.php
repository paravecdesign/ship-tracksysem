<div class="bg-white pl-6 rounded-xl shadow-2xl shadow-white/40 w-full">

    <div class="border-b-2 flex justify-end m-1 pb-3">
        <div>
            <a href="{{ route('shipment-types.index') }}">Back to List</a>

            <x-button class="ml-3">
                     {{ __('Submit') }}
            </x-button>
        </div>

     </div>


    <div class="py-4">
        <x-label for="name" :value="__('name')" />
        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$shipmentType->name" required autofocus placeholder="Name" />

        <div class="font-medium text-red-600">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>




    <div class="py-4">
        <x-label for="shortname" :value="__('shortname')" />
        <x-input id="shortname" class="block mt-1 w-full" type="text" name="shortname" :value="$shipmentType->shortname" required autofocus placeholder="Shortname" />

        <div class="font-medium text-red-600">
            @error('shortname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>







</div>
