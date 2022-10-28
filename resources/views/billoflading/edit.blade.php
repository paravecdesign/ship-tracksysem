<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Billoflading') }}
        </h2>
    </x-slot>
    <section class="flex flex-col justify-center">
        <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">
            @includeif('partials.errors')
            <div>
                <div>
                    <span class="card-title">Update Shipment</span>
                </div>
                <div>
                    <form method="POST" action="{{ route('billofladings.update', $billoflading->id) }}"  role="form" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="border-b-2 flex justify-end pb-3">
                            <div>
                                <a class="pr-4" href="{{ route('billofladings.index') }}">Back to List</a>
                                <a href="{{ route('billofladings.printpage', $billoflading->id ?? '') }}">PRINT BL</a>

                                <x-button class="ml-3" nane='save'>
                                    {{ __('Save') }}
                                </x-button>
                            </div>

                        </div>
                        @include('billoflading.form')

                        @livewire('edit-shipmant-content',['data' => $billoflading->id])

                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
