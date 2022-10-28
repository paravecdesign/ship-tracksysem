<div class="bg-white p-4 p-6 rounded-xl shadow-2xl shadow-white/40 w-full">

    <div class="border-b-2 flex justify-end pb-3">
        <div>
            <a href="{{ route('warehouses.index') }}">Back to List</a>

            <x-button class="ml-3">
                     {{ __('Submit') }}
            </x-button>
        </div>

     </div>


    <div class="py-4">
        <x-label for="name" :value="__('name')" />
        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$warehouse->name" required autofocus placeholder="Name" />

        <div class="font-medium text-red-600">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>




    <div class="py-4">
        <x-label for="short_code" :value="__('short_code')" />
        <x-input id="short_code" class="block mt-1 w-full" type="text" name="short_code" :value="$warehouse->short_code" required autofocus placeholder="Short Code" />

        <div class="font-medium text-red-600">
            @error('short_code')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>




    <div class="py-4">
        <x-label for="address1" :value="__('address1')" />
        <x-input id="address1" class="block mt-1 w-full" type="text" name="address1" :value="$warehouse->address1" required autofocus placeholder="Address1" />

        <div class="font-medium text-red-600">
            @error('address1')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>




    <div class="py-4">
        <x-label for="address2" :value="__('address2')" />
        <x-input id="address2" class="block mt-1 w-full" type="text" name="address2" :value="$warehouse->address2" required autofocus placeholder="Address2" />

        <div class="font-medium text-red-600">
            @error('address2')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>





    @livewire('country-state-city', ['selectedCity' => $warehouse->city_id])


    <div class="py-4 w-full">
        <x-label for="user_id" :value="__('Freight Agent')" />
        <select name="user_id" id="user_id"
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
                    @foreach($users as $user)
                    <option
                        value="{{ $user->id }}"
                    @if ($warehouse->user_id != null) {{ $user->id == $warehouse->user_id ? 'selected' : '' }} @endif>{{ $user->name }}</option>
                    @endforeach

            </select>

        <div class="font-medium text-red-600">
            @error('user_id')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>




</div>
