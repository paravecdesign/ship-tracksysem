<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ $shipper->name ?? 'Show Shipper' }}
        </h2>
    </x-slot>
    <section class="flex flex-col justify-center p-16">
             <a href="{{ route('shippers.index') }}"> Back</a>
            <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">

                <div>
                    <div>
                        <span class="card-title">Create Shipper</span>
                    </div>
                    <div>

                        <div>
                            <strong>Name:</strong>
                            {{ $shipper->name }}
                        </div>
                        <div>
                            <strong>Fname:</strong>
                            {{ $shipper->Fname }}
                        </div>
                        <div>
                            <strong>Lname:</strong>
                            {{ $shipper->lname }}
                        </div>
                        <div>
                            <strong>Email:</strong>
                            {{ $shipper->Email }}
                        </div>
                        <div>
                            <strong>Role Id:</strong>
                            {{ $shipper->role_id }}
                        </div>
                        <div>
                            <strong>Address1:</strong>
                            {{ $shipper->address1 }}
                        </div>
                        <div>
                            <strong>Address2:</strong>
                            {{ $shipper->address2 }}
                        </div>
                        <div>
                            <strong>City:</strong>
                            {{ $shipper->city }}
                        </div>
                        <div>
                            <strong>State:</strong>
                            {{ $shipper->state }}
                        </div>
                        <div>
                            <strong>Country Id:</strong>
                            {{ $shipper->country_id }}
                        </div>
                        <div>
                            <strong>Postalcode:</strong>
                            {{ $shipper->postalcode }}
                        </div>
                        <div>
                            <strong>Phone:</strong>
                            {{ $shipper->phone }}
                        </div>
                        <div>
                            <strong>Fax:</strong>
                            {{ $shipper->fax }}
                        </div>

                    </div>
                </div>
            </div>

    </section>
</x-app-layout>
