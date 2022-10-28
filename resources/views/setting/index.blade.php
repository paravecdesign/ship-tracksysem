<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Setting') }}
        </h2>
    </x-slot>
<div class="container mx-auto px-4 sm:px-8">
  <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="py-8">
        <div class="flex justify-between">
            <h2 class="text-2xl font-semibold leading-tight">{{ __('Setting') }}</h2>
                <a href="{{ route('settings.create') }}">
                    {{ __('Create New') }}
                </a>
        </div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block w-full shadow rounded-lg overflow-hidden">
                <table class="w-full leading-normal">
                        <thead class="thead">
                            <tr>
                                <th>No</th>
                                
										<th>Name</th>
										<th>Email</th>
										<th>Address1</th>
										<th>Address2</th>
										<th>City Id</th>
										<th>State Id</th>
										<th>Country Id</th>
										<th>Postalcode</th>
										<th>Phone</th>
										<th>Fax</th>
										<th>Termconditions</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($settings as $setting)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    
											<td>{{ $setting->name }}</td>
											<td>{{ $setting->Email }}</td>
											<td>{{ $setting->address1 }}</td>
											<td>{{ $setting->address2 }}</td>
											<td>{{ $setting->city_id }}</td>
											<td>{{ $setting->state_id }}</td>
											<td>{{ $setting->country_id }}</td>
											<td>{{ $setting->postalcode }}</td>
											<td>{{ $setting->phone }}</td>
											<td>{{ $setting->fax }}</td>
											<td>{{ $setting->termConditions }}</td>

                                    <td>
                                        <form action="{{ route('settings.destroy',$setting->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('settings.show',$setting->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('settings.edit',$setting->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                  {!! $settings->links() !!}
        </div>
    </div>
</div>

</x-app-layout>



