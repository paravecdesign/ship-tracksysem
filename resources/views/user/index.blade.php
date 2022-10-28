<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Freight Agents') }}
        </h2>
    </x-slot>
<div class="container mx-auto px-4 sm:px-8">
  <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
    <div class="py-8">
        <div class="flex justify-between">
            <h2 class="text-2xl font-semibold leading-tight">{{ __('Freight Agents') }}</h2>
                <a href="{{ route('freight-agents.create') }}">
                    {{ __('Create New') }}
                </a>
        </div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block w-full shadow rounded-lg overflow-hidden">
                <table class="w-full leading-normal">
                        <thead class="thead">
                            <tr style="text-align: left;>
                                <th>No</th>

										<th>Name</th>
										<th>Roles</th>
										<th>Alias</th>
										<th>Short Code</th>
										<th>Country</th>

                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr style="text-align: left;">
                                    <td>{{ ++$i }}</td>

											<td>{{ $user->name }}</td>
											<td>
									
											   @foreach($user->roles as $role)  
											     {{ $role->name }}
											   @endforeach
											  </td>
											<td>{{ $user->agent_name }}</td>
											<td>{{ $user->short_code }}</td>
											<td>{{ $user->country_id }}</td>

                                    <td>
                                        <form action="{{ route('freight-agents.destroy',$user->id) }}" method="POST">
                                            <a class="btn btn-sm btn-primary " href="{{ route('freight-agents.show',$user->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                            <a class="btn btn-sm btn-success" href="{{ route('freight-agents.edit',$user->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                            @if($user->is_admin == 0)
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                            @endif
                                        
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                </table>
            </div>
                  {!! $users->links() !!}
        </div>
    </div>
</div>

</x-app-layout>



