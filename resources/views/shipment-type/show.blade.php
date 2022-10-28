<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ $shipmentType->name ?? 'Show Shipment Type' }}
        </h2>
    </x-slot>
    <section class="flex flex-col justify-center p-16">
             <a href="{{ route('shipment-types.index') }}"> Back</a>
            <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">

                <div>
                    <div>
                        <span class="card-title">Create Shipment Type</span>
                    </div>
                    <div>

                        <div>
                            <strong>Name:</strong>
                            {{ $shipmentType->name }}
                        </div>
                        <div>
                            <strong>Shortname:</strong>
                            {{ $shipmentType->shortname }}
                        </div>

                    </div>
                </div>
            </div>

    </section>
</x-app-layout>
