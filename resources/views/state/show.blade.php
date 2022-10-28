<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ $state->name ?? 'Show State' }}
        </h2>
    </x-slot>
    <section class="flex min-h-screen flex-col justify-center bg-cyan-500 p-16">
             <a href="{{ route('states.index') }}"> Back</a>
            <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">

                <div>
                    <div>
                        <span class="card-title">Create State</span>
                    </div>
                    <div>
                        
                        <div>
                            <strong>Name:</strong>
                            {{ $state->name }}
                        </div>
                        <div>
                            <strong>Country Id:</strong>
                            {{ $state->country_id }}
                        </div>

                    </div>
                </div>
            </div>

    </section>
</x-app-layout>
