<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ $setting->name ?? 'Show Setting' }}
        </h2>
    </x-slot>
    <section class="flex flex-col justify-center p-1">
             <a href="{{ route('settings.index') }}"> Back</a>
            <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">

                <div>
                    <div>
                        <span class="card-title">Create Setting</span>
                    </div>
                    <div>

                        <div>
                            <strong>Name:</strong>
                            {{ $setting->name }}
                        </div>
                        <div>
                            <strong>Email:</strong>
                            {{ $setting->Email }}
                        </div>
                        <div>
                            <strong>Address1:</strong>
                            {{ $setting->address1 }}
                        </div>
                        <div>
                            <strong>Address2:</strong>
                            {{ $setting->address2 }}
                        </div>
                        <div>
                            <strong>City Id:</strong>
                            {{ $setting->city_id }}
                        </div>
                        <div>
                            <strong>State Id:</strong>
                            {{ $setting->state_id }}
                        </div>
                        <div>
                            <strong>Country Id:</strong>
                            {{ $setting->country_id }}
                        </div>
                        <div>
                            <strong>Postalcode:</strong>
                            {{ $setting->postalcode }}
                        </div>
                        <div>
                            <strong>Phone:</strong>
                            {{ $setting->phone }}
                        </div>
                        <div>
                            <strong>Fax:</strong>
                            {{ $setting->fax }}
                        </div>
                        <div>
                            <strong>Termconditions:</strong>
                            {{ $setting->termConditions }}
                        </div>

                    </div>
                </div>
            </div>

    </section>
</x-app-layout>
