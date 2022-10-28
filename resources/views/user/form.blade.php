<div class="bg-white p-4 p-6 rounded-xl shadow-2xl shadow-white/40 w-full">

    <div class="border-b-2 flex justify-end m-1 pb-3">
        <div>
            <a href="{{ route('freight-agents.index') }}">Back to List</a>

            <x-button class="ml-3 bg-cyan-500 ">
                     {{ __('Submit') }}
            </x-button>
        </div>

     </div>


    <div class="py-4">
        <x-label for="name" :value="__('Name')" />
        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$user->name" />

        <div class="font-medium text-red-600">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>




    <div class="py-4">
        <x-label for="email" :value="__('Email')" />
        <x-input id="email" class="block mt-1 w-full" type="text" name="email" :value="$user->email"  />

        <div class="font-medium text-red-600">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="py-4">
        <x-label for="agent_name" :value="__('Agent Name OR Alias')" />
        <x-input id="agent_name" class="block mt-1 w-full" type="text" name="agent_name" :value="$user->agent_name"  />

        <div class="font-medium text-red-600">
            @error('agent_name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>




    <div class="py-4">
        <x-label for="short_code" :value="__('Short Code')" />
        <x-input id="short_code" class="block mt-1 w-full" type="text" name="short_code" :value="$user->short_code" placeholder="CA for Canada"/>

        <div class="font-medium text-red-600">
            @error('short_code')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>




    <div class="py-4">
        <x-label for="address1" :value="__('Address 1')" />
        <x-input id="address1" class="block mt-1 w-full" type="text" name="address1" :value="$user->address1"  />

        <div class="font-medium text-red-600">
            @error('address1')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>




    <div class="py-4">
        <x-label for="address2" :value="__('Address 2')" />
        <x-input id="address2" class="block mt-1 w-full" type="text" name="address2" :value="$user->address2"  />

        <div class="font-medium text-red-600">
            @error('address2')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    @livewire('country-state-city')











    <div class="py-4">
        <x-label for="password" :value="__('Password')" />
        <x-input id="password" class="block mt-1 w-full" type="password" name="password" :value="$user->password" />

        <div class="font-medium text-red-600">
            @error('password')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>







</div>
