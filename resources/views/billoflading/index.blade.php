<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Billoflading') }}
        </h2>
    </x-slot>
    <div class="container mx-auto px-4 sm:px-8">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
        <div class="py-8">

            @if (count($billofladings) > 0)
              <div class="flex justify-between">
                <h2 class="text-2xl font-semibold leading-tight">{{ __('Shipments') }}</h2>
                <a href="{{ route('billofladings.create') }}">
                    {{ __('Create New') }}
                </a>
            </div>
                  <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                <div class="inline-block w-full shadow rounded-lg overflow-hidden">
                    <table class="w-full leading-normal">
                        <thead class="thead">
                            <tr>
                                <th>No</th>
                                <th>House BL</th>
                                <th>Shipper</th>
                                <th>Consignee</th>
                                <th>Reported Date</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($billofladings as $billoflading)
                                <tr style="text-align: left;">
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $billoflading->hbl_number }}</td>
                                    <td>{{ $billoflading->shipper->name }}</td>
                                    <td>{{ $billoflading->consignee->name }}</td>
                                    <td>{{ $billoflading->reported_date }}</td>
                                  

                                    <td>
                                        <form  class="delete"  action="{{ route('billofladings.destroy', $billoflading->id) }}"
                                            method="POST">
                                            <a class="btn btn-sm btn-primary "
                                                href="{{ route('billofladings.show', $billoflading->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i> Show</a>
                                            <a class="btn btn-sm btn-success"
                                                href="{{ route('billofladings.edit', $billoflading->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i> Edit</a>
                                            @csrf
                                            @method('DELETE')
                                            
             <input type="submit" value="Delete">

     </form>

                                      
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {!! $billofladings->links() !!}
            </div>
            @else
            <a href="{{ route('billofladings.create') }}">
                {{ __('Create New') }}
            </a>
            @endif

        </div>
    </div>
    
    <script>
    $(".delete").on("submit", function(){
        return confirm("Are you sure?");
    });
</script>

</x-app-layout>
