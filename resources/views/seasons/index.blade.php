<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {!!__('Temporadas de ') . $series->name !!}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto md:max-w-5xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-end mb-2">
                        <a href="{{ route('series.create') }}" rel="noopener noreferrer" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-800 justify-end">Nova temporada</a>
                    </div>
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-900 overflow-auto">
                            <thead class="text-md text-gray-700 text-gray-900">
                                <tr>
                                    <th scope="col" class="px-1 py-3">
                                        #
                                    </th>
                                    <th scope="col" class="px-1 py-3">
                                        Episódios
                                    </th>
                                    <th scope="col" class="px-1 py-3">
                                        Descrição da temporada
                                    </th>
                                    <th scope="col" class="px-1 py-3">
                                        Status
                                    </th>
                                    <th scope="col" class="px-1 py-3">
                                        Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($seasons as $season)
                                <tr class="bg-white border-b border-gray-400 ">
                                    <td class="px-1 py-4 ">
                                        {{ $season->season_number }}
                                    </td>
                                    <td class="px-1 py-4">
                                        {{ "{$season->numberOfEpisodeWatched()} / {$season->episodes->count()}" }}
                                    </td>
                                    <td class="px-1 py-4">
                                        {!! Str::limit($season->season_description, 40, '...') !!}
                                    </td>
                                    <td class="px-1 py-4 text-left">
                                        {{ $season->status() }}
                                    </td>
                                    <td class="px-1 py-4 flex">
                                        <a href="#" class="text-blue-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round"
                                                      stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                              </svg>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="my-2">
                            {{ $seasons->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
