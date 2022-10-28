<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ $warehouse->name ?? 'Show Freight Agent' }}
        </h2>
    </x-slot>
    <section class="flex flex-col justify-center p-16">
             <a href="{{ route('warehouses.index') }}"> Back</a>
            <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">

                <div>
                    <div>

                    </div>
                    <div>

                        <div>
                            <strong>Name:</strong>
                           <h1>{{ $warehouse->name }}</h1>
                        </div>





                    </div>
                </div>
            </div>
            <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block w-full shadow rounded-lg overflow-hidden">
                    <table class="w-full leading-normal">
                            <thead class="thead">
                                <tr style="text-align: left;">
                                    <th>No</th>

                                            <th>House Bill of lading</th>
                                            <th>Booking Numbr</th>
                                            <th>Reported Date</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($warehouse->shipments as $shipment)
                                    <tr>

                                        <td>{{ ++$i }}</td>

                                                <td>{{ $shipment->hbl_number }}</td>
                                                <td>{{ $shipment->bookingnumber }}</td>

                                                <td>{{ $shipment->reported_date}}</td>

                                        <td>
                                            <form action="{{ route('warehouses.destroy', $shipment->id) }}" method="POST">
                                                <a class="btn btn-sm btn-primary " href="{{ route('warehouses.printpage',$shipment->id) }}"><i class="fa fa-fw fa-eye"></i> Print</a>

                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                    </table>
                </div>
                      {!! $shipments->links() !!}
            </div>
    </section>
</x-app-layout>
