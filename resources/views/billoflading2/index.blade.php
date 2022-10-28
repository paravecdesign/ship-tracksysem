<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Billoflading') }}
        </h2>
    </x-slot>


<div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
        <div>
            <h2 class="text-2xl font-semibold leading-tight">Matches Schedule</h2>
        </div>
        <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
            <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">
                <table class="min-w-full leading-normal">
                    <thead>
                        <tr>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Home
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Res.
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Res.
                            </th>
                            <th
                                class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-center text-xs font-semibold text-gray-600 uppercase tracking-wider">
                                Away
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10 hidden sm:table-cell">
                                        <img class="w-full h-full rounded-full"
                                            src="https://images.unsplash.com/photo-1601046668428-94ea13437736?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2167&q=80"
                                            alt="" />
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            Team 1
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap text-center">0</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap text-center">
                                    3
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                                <div class="flex items-center float-right">
                                    <div class="mr-3">
                                        <p class="text-gray-900 whitespace-no-wrap text-right">
                                            Team 2
                                        </p>
                                    </div>
                                    <div class="flex-shrink-0 w-10 h-10 hidden sm:table-cell">
                                        <img class="w-full h-full rounded-full"
                                            src="https://images.unsplash.com/photo-1601046668428-94ea13437736?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2167&q=80"
                                            alt="" />
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                                <div class="flex items-center">
                                    <div class="flex-shrink-0 w-10 h-10 hidden sm:table-cell">
                                        <img class="w-full h-full rounded-full"
                                            src="https://images.unsplash.com/photo-1601046668428-94ea13437736?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2167&q=80"
                                            alt="" />
                                    </div>
                                    <div class="ml-3">
                                        <p class="text-gray-900 whitespace-no-wrap">
                                            Team 3
                                        </p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap text-center">0</p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                <p class="text-gray-900 whitespace-no-wrap text-center">
                                    3
                                </p>
                            </td>
                            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm w-2/5">
                                <div class="flex items-center float-right">
                                    <div class="mr-3">
                                        <p class="text-gray-900 whitespace-no-wrap text-right">
                                            Team 4
                                        </p>
                                    </div>
                                    <div class="flex-shrink-0 w-10 h-10 hidden sm:table-cell">
                                        <img class="w-full h-full rounded-full"
                                            src="https://images.unsplash.com/photo-1601046668428-94ea13437736?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2167&q=80"
                                            alt="" />
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Billoflading') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('billoflading.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif



                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table-auto">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>

										<th>Shipper Id</th>
										<th>Status Id</th>
										<th>Date</th>
										<th>Company Id</th>
										<th>Description</th>
										<th>Rate Id</th>
										<th>Consignee Id</th>
										<th>Courier Id</th>
										<th>Pieces</th>
										<th>Weight</th>
										<th>Volume</th>
										<th>Bl Number</th>
										<th>Reference</th>
										<th>Consignment</th>
										<th>Precarriageby</th>
										<th>Placeofreceipt</th>
										<th>Vessel</th>
										<th>Voyageno</th>
										<th>Portofleading</th>
										<th>Portofdischarge</th>
										<th>Placeofleading</th>
										<th>Placeofdelivery</th>
										<th>Freightteams</th>
										<th>Shippedboarddate</th>
										<th>Placedateofissue</th>
										<th>Termconditions</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($billofladings as $billoflading)
                                        <tr>
                                            <td>{{ ++$i }}</td>

											<td>{{ $billoflading->shipper_id }}</td>
											<td>{{ $billoflading->status_id }}</td>
											<td>{{ $billoflading->date }}</td>
											<td>{{ $billoflading->company_id }}</td>
											<td>{{ $billoflading->description }}</td>
											<td>{{ $billoflading->rate_id }}</td>
											<td>{{ $billoflading->consignee_id }}</td>
											<td>{{ $billoflading->courier_id }}</td>
											<td>{{ $billoflading->pieces }}</td>
											<td>{{ $billoflading->weight }}</td>
											<td>{{ $billoflading->volume }}</td>
											<td>{{ $billoflading->bl_number }}</td>
											<td>{{ $billoflading->reference }}</td>
											<td>{{ $billoflading->consignment }}</td>
											<td>{{ $billoflading->preCarriageBy }}</td>
											<td>{{ $billoflading->placeOfReceipt }}</td>
											<td>{{ $billoflading->vessel }}</td>
											<td>{{ $billoflading->voyageNo }}</td>
											<td>{{ $billoflading->portOfLeading }}</td>
											<td>{{ $billoflading->PortOfDischarge }}</td>
											<td>{{ $billoflading->placeOfLeading }}</td>
											<td>{{ $billoflading->placeOfDelivery }}</td>
											<td>{{ $billoflading->freightTeams }}</td>
											<td>{{ $billoflading->shippedBoardDate }}</td>
											<td>{{ $billoflading->placeDateOfIssue }}</td>
											<td>{{ $billoflading->termConditions }}</td>

                                            <td>
                                                <form action="{{ route('billoflading.destroy',$billoflading->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('billoflading.show',$billoflading->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('billoflading.edit',$billoflading->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
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
                    </div>
                </div>
                {!! $billofladings->links() !!}
            </div>
        </div>
    </div>
</x-app-layout>
