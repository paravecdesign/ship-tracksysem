<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Shipment Type') }}
        </h2>
    </x-slot>
<div class="container mx-auto px-4 sm:px-8">
  <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="py-1">
        <div class="flex justify-between">
            <h2 class="text-2xl font-semibold leading-tight">{{ __('Shipment Type') }}</h2>
                <a href="{{ route('shipment-types.create') }}">
                    {{ __('Create New') }}
                </a>
        </div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block w-full shadow rounded-lg overflow-hidden">
                <table class="w-full leading-normal">
                        <thead class="thead">
                            <tr style="text-align: left" >
                                <th>No</th>

										<th>Name</th>
										<th>Shortname</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($shipmentTypes as $shipmentType)
                                <tr>
                                    <td>{{ ++$i }}</td>

											<td>{{ $shipmentType->name }}</td>
											<td>{{ $shipmentType->shortname }}</td>

                                    <td>
                                        <form action="{{ route('shipment-types.destroy',$shipmentType->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('shipment-types.show',$shipmentType->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('shipment-types.edit',$shipmentType->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                  {!! $shipmentTypes->links() !!}
        </div>
    </div>
</div>

</x-app-layout>



