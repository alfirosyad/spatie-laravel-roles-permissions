{{--<x-app-layout>--}}
{{--    <x-slot name="header">--}}
{{--        <h2 class="font-semibold text-xl text-gray-800 leading-tight">--}}
{{--            {{ __('Permission Management') }}--}}
{{--        </h2>--}}
{{--    </x-slot>--}}

{{--    <div class="py-12">--}}
{{--        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">--}}
{{--            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">--}}
{{--                <div class="p-6 text-gray-900">--}}
{{--                    <div style="display: flex; justify-content: space-between">--}}
{{--                        <h1>Permissions</h1>--}}
{{--                        <a href="{{ route('permissions.create') }}">Buat Permission Baru</a>--}}
{{--                    </div>--}}
{{--                    <ul>--}}
{{--                        @foreach($permissions as $permission)--}}
{{--                            <li>--}}
{{--                                {{ $permission->name }}--}}
{{--                                <a href="{{ route('permissions.edit', $permission->id) }}">Edit</a>--}}
{{--                                <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" style="display:inline-block;">--}}
{{--                                    @csrf--}}
{{--                                    @method('DELETE')--}}
{{--                                    <button type="submit" onclick="return confirm('Apakah Anda yakin ingin menghapus permission ini?')">Hapus</button>--}}
{{--                                </form>--}}
{{--                            </li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</x-app-layout>--}}

<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Permission Management') }}
            </h2>
            <a href="{{ route('permissions.create') }}">
                <x-primary-button>{{ __('Tambah Permission') }}</x-primary-button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 text-green-400" role="alert">
                    <span class="font-medium">Berhasil! </span> {{ session('success') }}
                </div>
            @endif
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="header">
                        <div class="flex justify-between font-bold">
                            <div class="name">
                                <p>Role</p>
                            </div>
                            <div class="action">
                                <p>Action</p>
                            </div>
                        </div>
                    </div>
                    <div class="content mt-3">
                        @foreach($permissions as $permission)
                            <div class="flex justify-between mt-2">
                                <div class="name">
                                    <p>{{ $permission->name }}</p>
                                </div>
                                <div class="action-edit flex">
                                    <p>
                                        <a href="{{ route('permissions.edit', $permission->id) }}">
                                            <x-secondary-button>{{ __('Edit') }}</x-secondary-button>
                                        </a>
                                    </p>
                                    <p class="me-3">
                                    <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <x-danger-button type="submit">Hapus</x-danger-button>
                                    </form>
                                    </p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

