<div class="bg-white p-4 p-6 rounded-xl shadow-2xl shadow-white/40 w-full">

    <div class="border-b-2 flex justify-end pb-3">
        <div>
            <a href="{{ route('shippers.index') }}">Back to List</a>

            <x-button class="ml-3">
                     {{ __('Submit') }}
            </x-button>
        </div>

     </div>
    <div class="p-2 w-full">
        <x-label for="name" :value="__('Company Name')" />
        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$shipper->name" required autofocus placeholder="Name" />

        <div class="font-medium text-red-600">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
     <div class="flex">

    <div class="p-2 w-full">
        <x-label for="Fname" :value="__('First Name')" />
        <x-input id="Fname" class="block mt-1 w-full" type="text" name="Fname" :value="$shipper->Fname" required autofocus placeholder="Fname" />

        <div class="font-medium text-red-600">
            @error('Fname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="py-2 w-full">
        <x-label for="lname" :value="__('last Name')" />
        <x-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="$shipper->lname" required autofocus placeholder="Lname" />

        <div class="font-medium text-red-600">
            @error('lname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
     </div>

    <div class="py-4">
        <x-label for="Email" :value="__('Email')" />
        <x-input id="Email" class="block mt-1 w-full" type="text" name="Email" :value="$shipper->Email" required autofocus placeholder="Email" />

        <div class="font-medium text-red-600">
            @error('Email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="py-4">
        <div class="flex space-x-8">
            <div class="flex items-center pl-4 rounded">
                <input @if($shipper->role_id != null) {{ ( $shipper->role_id == 1 ) ? 'checked' : 'checked'  }} @endif  id="bordered-radio-1" type="radio" value="1" name="role_id" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="bordered-radio-1" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Consignee</label>
            </div>
            <div class="flex items-center pl-4 rounded">
                <input @if($shipper->role_id != null) {{ ( $shipper->role_id == 2 ) ? 'checked' : ''  }} @endif  id="bordered-radio-2" type="radio" value="2" name="role_id" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="bordered-radio-2" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Shippers</label>
            </div>
            <div class="flex items-center pl-4 rounded">
                <input @if($shipper->role_id != null) {{ ( $shipper->role_id == 3 ) ? 'checked' : ''  }} @endif   id="bordered-radio-3" type="radio" value="3" name="role_id" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="bordered-radio-3" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Forwarding Agent</label>
            </div>
            <div class="flex items-center pl-4 rounded">
                <input @if($shipper->role_id != null) {{ ( $shipper->role_id == 4 ) ? 'checked' : ''  }} @endif  id="bordered-radio-4" type="radio" value="4" name="role_id" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                <label for="bordered-radio-4" class="py-4 ml-2 w-full text-sm font-medium text-gray-900 dark:text-gray-300">Contact</label>
            </div>
        </div>

    </div>
    <div class="py-4">
        <x-label for="address1" :value="__('address1')" />
        <x-input id="address1" class="block mt-1 w-full" type="text" name="address1" :value="$shipper->address1" required autofocus placeholder="Address1" />

        <div class="font-medium text-red-600">
            @error('address1')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="py-4">
        <x-label for="address2" :value="__('address2')" />
        <x-input id="address2" class="block mt-1 w-full" type="text" name="address2" :value="$shipper->address2" required autofocus placeholder="Address2" />

        <div class="font-medium text-red-600">
            @error('address2')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    @livewire('country-state-city', ['selectedCity' => $shipper->city_id])






    <div class="py-4">
        <x-label for="postalcode" :value="__('Postal / Zip Code')" />
        <x-input id="postalcode" class="block mt-1 w-full" type="text" name="postalcode" :value="$shipper->postalcode" required autofocus placeholder="Postalcode" />

        <div class="font-medium text-red-600">
            @error('postalcode')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>




    <div class="py-4">
        <x-label for="phone" :value="__('phone')" />
        <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="$shipper->phone" required autofocus placeholder="Phone" />

        <div class="font-medium text-red-600">
            @error('phone')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>




    <div class="py-4">
        <x-label for="fax" :value="__('fax')" />
        <x-input id="fax" class="block mt-1 w-full" type="text" name="fax" :value="$shipper->fax" required autofocus placeholder="Fax" />

        <div class="font-medium text-red-600">
            @error('fax')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>


 <input type="hidden" id="user_id" name="user_id" value="{{ Auth::user()->id }}">


   
   


</div>
