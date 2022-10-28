<div class="py-4 ">
    <div class="pace-x-8 my-5 w-full">
        <div class="items-center my-4 pl-4 rounded w-full">
            <x-label class="pb-1" for="country_id" :value="__('Country')" />
            <select name="country_id" id="country_id" wire:model="selectedCountry"
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
                <option value="">Choose Country</option>
                @foreach($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
            @endforeach
            </select>
        </div>
        <div class="items-center my-4 pl-4 rounded w-full">
            <x-label class="pb-1" for="state_id" :value="__('State')" />
            <select name="state_id" id="state_id" wire:model="selectedState"
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
                <option value="">Choose State</option>
                @foreach ($states as $state)
                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                @endforeach
            </select>

        </div>

        <div class="items-center my-4 pl-4 rounded w-full">
            <x-label class="pb-1" for="city_id" :value="__('State')" />
            <select name="city_id" id="city_id" wire:model="selectedCity"
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
                <option value="">Choose City</option>
                @foreach ($cities as $city)
                <option value="{{ $city->id }}">{{ $city->name }}</option>
            @endforeach
            </select>

        </div>
    </div>

</div>


