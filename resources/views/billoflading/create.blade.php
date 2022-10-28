<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Shipment') }}
        </h2>
    </x-slot>
    <section class="flex flex-col justify-center bg-cyan-500">

            <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">
                <x-auth-validation-errors class="mb-4" :errors="$errors" />
                @includeif('partials.errors')


                         <h2 class="font-semibold leading-tight p-6 text-gray-800 text-xl">
                            {{ __(' Bill of lading') }}
                        </h2>


                        <form method="POST" action="{{ route('billofladings.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf
                            <div class="border-b-2 flex justify-end pb-3">
                                <div>
                                    <a class="pr-4" href="{{ route('billofladings.index') }}">Back to List</a>

                                    <input class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3" name="saveprint" type="submit" value='Save & Print' />

                                    <input class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring ring-gray-300 disabled:opacity-25 transition ease-in-out duration-150 ml-3" name="saveexit" type="submit" value='Save & Exit' />


                                </div>

                            </div>
                            @include('billoflading.form')

                            @livewire('shipemt-products')
                        </form>

            </div>

    </section>
</x-app-layout>
