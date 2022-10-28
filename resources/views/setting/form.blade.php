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
</style>

<div class="bg-white p-4 p-6 rounded-xl shadow-2xl shadow-white/40 w-full">

    <div class="border-b-2 flex justify-end pb-3">
        <div>


            <x-button class="ml-3">
                {{ __('Submit') }}
            </x-button>
        </div>

    </div>


    <div class="py-4">
        <x-label for="name" :value="__('Compony Name')" />
        <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$setting->name" autofocus
            placeholder="Name" />

        <div class="font-medium text-red-600">
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="flex justify-between w-full">
          <div class="py-4 w-full mr-3">
        <x-label for="fname" :value="__('First Name')" />
        <x-input id="name" class="block mt-1 w-full" type="text" name="fname" :value="$setting->fname"  />

        <div class="font-medium text-red-600">
            @error('fname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <div class="py-4 w-full">
        <x-label for="lname" :value="__('Last Name')" />
        <x-input id="lname" class="block mt-1 w-full" type="text" name="lname" :value="$setting->lname"  />

        <div class="font-medium text-red-600">
            @error('lname')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    </div>


    <div class="py-4">
        <x-label for="Email" :value="__('Email')" />
        <x-input id="Email" class="block mt-1 w-full" type="text" name="email" :value="$setting->email"  placeholder="Email" />

        <div class="font-medium text-red-600">
            @error('email')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>




    <div class="py-4">
        <x-label for="address1" :value="__('address1')" />
        <x-input id="address1" class="block mt-1 w-full" type="text" name="address1" :value="$setting->address1"  placeholder="Address1" />

        <div class="font-medium text-red-600">
            @error('address1')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>




    <div class="py-4">
        <x-label for="address2" :value="__('address2')" />
        <x-input id="address2" class="block mt-1 w-full" type="text" name="address2" :value="$setting->address2"  placeholder="Address2" />

        <div class="font-medium text-red-600">
            @error('address2')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>






    @livewire('country-state-city', ['selectedCity' => $setting->city_id])





        <div class="flex space-x-8">
            <div class="py-4">
                <x-label for="postalcode" :value="__('postalcode')" />
                <x-input id="postalcode" class="block mt-1 w-full" type="text" name="postalcode" :value="$setting->postalcode" required
                    autofocus placeholder="Postalcode" />

                <div class="font-medium text-red-600">
                    @error('postalcode')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="py-4">
                <x-label for="phone" :value="__('phone')" />
                <x-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="$setting->phone" required
                    autofocus placeholder="Phone" />

                <div class="font-medium text-red-600">
                    @error('phone')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>


            <div class="py-4">
                <x-label for="fax" :value="__('fax')" />
                <x-input id="fax" class="block mt-1 w-full" type="text" name="fax" :value="$setting->fax" required
                    autofocus placeholder="Fax" />

                <div class="font-medium text-red-600">
                    @error('fax')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>





        </div>


        <div class="py-4">
            <x-label for="termConditions" :value="__('Term Conditions')" />
            <textarea name="termConditions" class="block mt-1 w-full term" id="termConditions" cols="30" rows="10">
                {{ $setting->termConditions }}
            </textarea>

            <div class="font-medium text-red-600">
                @error('termConditions')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="py-4">
            <x-label for="termConditions2" :value="__('Term Conditions 2')" />
            <textarea name="termConditions2" class="block mt-1 w-full term2" id="termConditions2" cols="30" rows="10">
                {{ $setting->termConditions2 }}
            </textarea>

            <div class="font-medium text-red-600">
                @error('termConditions2')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
        </div>








</div>

<script>
    ClassicEditor
        .create( document.querySelector( '.term' ) )
        .catch( error => {
            console.error( error );
        } );
    ClassicEditor
        .create( document.querySelector( '.term2' ) )
        .catch( error => {
            console.error( error );
        } );
</script>


