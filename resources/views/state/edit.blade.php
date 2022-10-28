<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' State') }}
        </h2>
    </x-slot>
    <section class="flex min-h-screen flex-col justify-center bg-cyan-500 p-16">
        <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">
            @includeif('partials.errors')
            <div>
                <div>
                    <span class="card-title">Update State</span>
                </div>
                <div>
                    <form method="POST" action="{{ route('states.update', $state->id) }}"  role="form" enctype="multipart/form-data">
                        @csrf

                        @include('state.form')

                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
