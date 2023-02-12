<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{__('Nova Série')}}    
        </h2>
    </x-slot>
    
    <div class="py-12">
        <div class="mx-auto md:max-w-2xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
            <div class="flex-col px-4 py-6">
                <form action="{{ route('series.store') }}" method="post">
                    @csrf
                    <div class="flex mb-2">
                        <label class="w-full">
                            <span class="block text-sm font-medium text-slate-700">Nome</span>

                            <input type="text" name="name"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                            invalid:border-pink-500 invalid:text-pink-600
                            focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            "/>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </label>
                    </div>

                    <div class="flex">
                        <label class="w-full">
                            <span class="block text-sm font-medium text-slate-700">Descrição da série</span>

                            <textarea value="teste@gmail.com" name="series_description" rows="4"
                                        class="mt-1 block w-full px-3 py-2 bg-white border 
                            border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                            disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                            invalid:border-pink-500 invalid:text-red-600
                            focus:invalid:border-pink-500 focus:invalid:ring-red-500
                            "></textarea>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </label>
                    </div>

                    <div class="flex">
                        <label class="w-6/12">
                            <span class="block text-sm font-medium text-slate-700 mt-2">Data de lançamento</span>

                            <input type="date" name="name"
                                    class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                            focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                            invalid:border-pink-500 invalid:text-pink-600
                            focus:invalid:border-pink-500 focus:invalid:ring-pink-500
                            "/>
                        </label>
                    </div>


                    <div class="flex mt-3 justify-end">
                        <button type="submit"
                        class="bg-sky-500 hover:bg-sky-700 px-5 py-2.5 text-sm leading-5 rounded-md font-semibold text-white">
                            Criar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>