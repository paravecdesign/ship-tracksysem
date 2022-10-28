<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    Hi, {{ Auth::user()->name ?? '' }} Welcome to the Ship and Track System
                </div>
                @can('isAdmin')
                <div class="flex">
                    @foreach ($agents as $agent)
                        <div
                            class="ml-3 mr-2 mt-4 mb-3 p-4 w-full max-w-sm bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">

                            <div class="flex flex-col items-center pb-10">

                                <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">
                                    <h5>
                                        <a href="{{ route('freight-agents.show', $agent->id) }}">
                                            {{ $agent->agent_name }}
                                        </a>

                                </h5>
                                </a>
                                <span class="text-sm text-gray-500 dark:text-gray-400">
                                    <a href="{{ route('freight-agents.show', $agent->id) }}">{{ $agent->shipments_count }}
                                        Shipment</a>
                                </span>
                                <div class="flex mt-4 space-x-3 md:mt-6">

                                    <a href="{{ route('freight-agents.show', $agent->id) }}"
                                        class="inline-flex items-center py-2 px-4 text-sm font-medium text-center text-gray-900 bg-white rounded-lg border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-700 dark:focus:ring-gray-700">View</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
                @endcan
            </div>
        </div>
    </div>
</x-app-layout>
