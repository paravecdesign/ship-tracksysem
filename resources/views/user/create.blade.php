<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Freight Agents') }}
        </h2>
    </x-slot>
    <section class="flex min-h-screen flex-col justify-center p-1">

            <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">

                @includeif('partials.errors')


                         <h2 class="font-semibold leading-tight p-6 text-gray-800 text-xl">
                            {{ __(' Freight Agents') }}
                        </h2>


                        <form method="POST" action="{{ route('freight-agents.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('user.form')

                        </form>

            </div>

    </section>
</x-app-layout>
