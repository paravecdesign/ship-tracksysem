<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ $city->name ?? 'Show City' }}
        </h2>
    </x-slot>
    <section class="flex min-h-screen flex-col justify-center bg-cyan-500 p-16">
             <a href="{{ route('cities.index') }}"> Back</a>
            <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">

                <div>
                    <div>
                        <span class="card-title">Create City</span>
                    </div>
                    <div>
                        
                        <div>
                            <strong>Name:</strong>
                            {{ $city->name }}
                        </div>
                        <div>
                            <strong>State Id:</strong>
                            {{ $city->state_id }}
                        </div>

                    </div>
                </div>
            </div>

    </section>
</x-app-layout>
