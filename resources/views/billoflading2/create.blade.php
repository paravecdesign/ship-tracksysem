

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Billoflading') }}
        </h2>
    </x-slot>


    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Create Billoflading</span>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('billoflading.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('billoflading.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>
