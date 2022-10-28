<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Freight Agents') }}
        </h2>
    </x-slot>
    <section class="flex flex-col justify-center p-1">
        <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">
            <x-auth-validation-errors class="mb-4" :errors="$errors" />
            @includeif('partials.errors')
            <div>
                <div>
                    <span class="card-title">Update Agent</span>
                </div>
                <div>
                    <form method="POST" action="{{ route('freight-agents.update', $user->id) }}"  role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        @include('user.form')

                    </form>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
