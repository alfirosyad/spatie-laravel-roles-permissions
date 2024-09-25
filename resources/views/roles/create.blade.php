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
                    <h1>Buat Role Baru</h1>
                    <form action="{{ route('roles.store') }}" method="POST">
                        @csrf
                        <label for="name">Nama Role:</label>
                        <input type="text" name="name" required>

                        <h3>Permissions:</h3>
                        @foreach($permissions as $permission)
                            <div>
                                <input type="checkbox" name="permissions[]" value="{{ $permission->name }}">
                                <label>{{ $permission->name }}</label>
                            </div>
                        @endforeach

                        <button type="submit">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
