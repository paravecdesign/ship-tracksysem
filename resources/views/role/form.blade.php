<div class="bg-white p-4 p-6 rounded-xl shadow-2xl shadow-white/40 w-full">

    <div class="border-b-2 flex justify-end m-20 pb-3">
        <div>
            <a href="{{ route('roles.index') }}">Back to List</a>

            <x-button class="ml-3 bg-cyan-500">
                     {{ __('Submit') }}
            </x-button>
        </div>

     </div>


    <div class="py-4">
        <x-label for="name" :value="__('name')" />
        <x-input id="name" class="block mt-1 w-full " type="text" name="name" :value="$role->name" required autofocus placeholder="Name" />

        <div class="font-medium text-red-600">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>







</div>
