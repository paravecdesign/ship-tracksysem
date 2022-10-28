<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __(' Setting') }}
        </h2>
    </x-slot>
    <section class="flex flex-col justify-center p-1">
        <div class="w-full rounded-xl bg-white p-4 shadow-2xl shadow-white/40">
            @includeif('partials.errors')
            <div>
                <div class="p-6">
                    <span class="card-title">Update Setting</span>
                </div>
                <div>
                    <form method="POST" action="{{ route('settings.update', $setting->id) }}"  role="form" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        @include('setting.form')

                    </form>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
