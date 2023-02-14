<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{__('Users')}}    
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto md:max-w-2xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-end mb-2">
                        <a href="{{ route('users.create') }}" rel="noopener noreferrer" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-800 justify-end">Novo usuário</a>
                    </div>
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-900 overflow-auto">
                            <thead class="text-xs text-gray-700 uppercase  text-gray-900">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nome
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        E-mail
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                <tr class="bg-white border-b border-gray-400 ">
                                    <td scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $user->email }}
                                    </td>
                                    <td class="px-6 py-4 flex">
                                        <a href="{{route('users.edit', $user->id)}}" class="text-blue-500 mr-2">Editar</a>
                                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-red-500">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>