<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add Role Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="post" action="{{ route('roles.store') }}" class="mt-6 space-y-6">
                        @csrf
                        <div>
                            <x-input-label for="name" :value="__('Nama Role')"/>
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full"
                                          autocomplete="off"/>
                        </div>
                        <p>Permission :</p>
                        @foreach($permissions as $permission)
                            <div class="relative flex gap-x-3">
                                <div class="flex h-6 items-center">
                                    <input id="permission" name="permission[]" type="checkbox"
                                           class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-600"
                                           value="{{ $permission->name }}">
                                </div>
                                <div class="text-sm leading-6">
                                    <label for="permission"
                                           class="font-medium text-gray-900">{{ $permission->name }}</label>
                                </div>
                            </div>
                        @endforeach
                        <div class="flex justify-end gap-4">
                            <x-primary-button>{{ __('Tambah') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
