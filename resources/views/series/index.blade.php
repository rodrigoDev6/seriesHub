<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{__('Suas séries')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto md:max-w-5xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-end mb-2">
                        <a href="{{ route('series.create') }}" rel="noopener noreferrer" class="bg-blue-500 text-white p-2 rounded hover:bg-blue-800 justify-end">Nova série</a>
                    </div>
                    <div class="relative overflow-x-auto">
                        <table class="w-full text-sm text-left text-gray-900 overflow-auto">
                            <thead class="text-xs text-gray-700 uppercase text-gray-900">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        Nome
                                    </th>
                                    <th scope="col" class="pr-6 py-3">
                                        Descrição da série
                                    </th>
                                    <th scope="col" class="pr-6 py-3">
                                       Lançamento
                                    </th>
                                    <th scope="col" class="pr-6 py-3">
                                        Avaliação
                                    </th>
                                    <th scope="col" class="pr-6 py-3">
                                        Editar
                                    </th>
                                    <th scope="col" class="pr-6 py-3">
                                        Temporadas
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($series as $serie)
                                <tr class="bg-white border-b border-gray-400">
                                    <td class="px-6 py-3">
                                        {{ $serie->name }}
                                    </td>
                                    <td class="pr-6">
                                        {{ $serie->series_description }}
                                    </td>
                                    <td class="pr-6 ">
                                        {{ $serie->release_date->format('Y') }}
                                    </td>
                                    <td class="pr-6">
                                        {{ $serie->seriesReviewScore() }}
                                    </td>
                                    <td class="pr-6">
                                        <a href="{{ route('series.edit', $serie->id) }}" class="flex justify-start">
                                            <img src="{{ Vite::asset("resources/assets/icons/pencil.svg") }}" width="24">
                                        </a>
                                    </td>
                                    <td class="pr-6">
                                        <a href="{{ route('seasons.index', $serie->id)}}" class="flex justify-start">
                                            <img src="{{ Vite::asset("resources/assets/icons/eye.svg") }}" width="24">
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="my-2">
                            {{ $series->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
