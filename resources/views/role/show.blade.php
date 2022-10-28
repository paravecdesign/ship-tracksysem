<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ $role->name ?? 'Show Role' }}
        </h2>
    </x-slot>
    <section class="flex flex-col justify-center p-11">
             <a href="{{ route('roles.index') }}"> Back</a>
            <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">

                <div>
                    <div>
                        <span class="card-title">Create Role</span>
                    </div>
                    <div>
                        
                        <div>
                            <strong>Name:</strong>
                            {{ $role->name }}
                        </div>

                    </div>
                </div>
            </div>

    </section>
</x-app-layout>
