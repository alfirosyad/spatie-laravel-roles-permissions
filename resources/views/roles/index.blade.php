<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Role Management') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div>{{ session('success') }}</div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div style="display: flex; justify-content: space-between">
                    <h1>Roles</h1>
                    <a href="{{ route('roles.create') }}">Buat Role Baru</a>
                    </div>
                    <ul>
                        @foreach($roles as $role)
                            <li style="display: flex; justify-content: space-around">
                                {{ $role->name }}
                                <a href="{{ route('roles.edit', $role->id) }}">Edit</a>
                                <form action="{{ route('roles.destroy', $role->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Hapus</button>
                                </form>
                            </li>
                        @endforeach
                    </ul>

                    <h1>Permissions</h1>
                    <ul>
                        @foreach($permissions as $permission)
                            <li>{{ $permission->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
