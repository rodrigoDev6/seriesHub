<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{__('Editar Série')}}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto md:max-w-2xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="flex-col px-4 py-6">

                <form action="{{ route('series.update', $series->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="flex mb-2 gap-2">
                        <label class="w-10/12">
                            <span class="block text-sm font-medium text-slate-700">Nome</span>

                            <input type="text" name="name" value="{{$series->name}}"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                            invalid:border-pink-500 invalid:text-pink-600
                            focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            "/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </label>

                        <label class="w-4/12">
                            <span class="block text-sm font-medium text-slate-700">Avaliação</span>

                            <input type="number" name="evaluation_note" value="{{ $series->evaluation_note }}" min="0" max="10"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                            invalid:border-pink-500 invalid:text-pink-600
                            focus:invalid:border-pink-500 focus:invalid:ring-pink-500 read-only:text-gray-500 text-center
                            "/>
                            <x-input-error :messages="$errors->get('evaluation_note')" class="mt-2" />
                        </label>
                    </div>

                    <div class="flex mb-2 gap-2">
                        <label class="w-10/12">
                            <span class="block text-sm font-medium text-slate-700">Data de lançamento</span>

                            <input name="release_date" type="date" value="{{ $series->release_date->format("Y-m-d") }}"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                            invalid:border-pink-500 invalid:text-pink-600
                            focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            "/>
                            <x-input-error :messages="$errors->get('release_date')" class="mt-2" />
                        </label>

                        <label class="w-4/12">
                            <span class="block text-sm font-medium text-slate-700">Nº Temporadas</span>

                            <input type="text" value="{{ $series->seasons->count() }}" readonly
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                            invalid:border-pink-500 invalid:text-pink-600
                            focus:invalid:border-pink-500 focus:invalid:ring-pink-500 read-only:text-gray-500 text-center
                            "/>
                        </label>
                    </div>

                    <div class="flex mb-3">
                        <label class="w-full">
                            <span class="block text-sm font-medium text-slate-700">Descrição da série</span>

                            <textarea name="series_description" rows="4"
                                        class="mt-1 block w-full px-3 py-2 bg-white border
                            border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                            disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                            invalid:border-pink-500 invalid:text-red-600
                            focus:invalid:border-pink-500 focus:invalid:ring-red-500
                            ">{{ $series->series_description }}</textarea>
                            <x-input-error :messages="$errors->get('series_description')" class="mt-2" />
                        </label>
                    </div>

                    <div class="flex gap-2 mt-3 justify-end">
                        <button type="submit"
                                class="bg-sky-500 hover:bg-sky-700 px-5 py-2.5 text-sm leading-5 rounded-md font-semibold text-white">
                                Salvar
                        </button>
                    </div>
                </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
