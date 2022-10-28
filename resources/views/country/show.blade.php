<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ $country->name ?? 'Show Country' }}
        </h2>
    </x-slot>
    <section class="flex flex-col justify-center p-1">
             <a href="{{ route('countries.index') }}"> Back</a>
            <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">

                <div>
                    <div>
                        <span class="card-title">Create Country</span>
                    </div>
                    <div>

                        <div>
                            <strong>Shortname:</strong>
                            {{ $country->shortname }}
                        </div>
                        <div>
                            <strong>Name:</strong>
                            {{ $country->name }}
                        </div>
                        <div>
                            <strong>Phonecode:</strong>
                            {{ $country->phonecode }}
                        </div>

                    </div>
                </div>
            </div>

    </section>
</x-app-layout>
