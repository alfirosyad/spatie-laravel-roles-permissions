<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Outlet') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div style="display: flex; justify-content: space-between">
                        @can('can add outlet')
                            <p>
                                BISA ADD <br>
                            </p>
                        @endcan
                        @can('can edit outlet')
                            <p>
                                BISA EDIT <br>
                            </p>
                        @endcan
                        @can('can delete outlet')
                            <p>
                                BISA DELETE
                            </p>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
