<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Питомец') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="text-2xl mb-10 font-bold">{{ $pet->nickname }}</div>
                    <div class="mb-4 ">
                        <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-tab" data-tabs-toggle="#default-tab-content" role="tablist" 
                        data-tabs-active-classes="text-blue-600 hover:text-blue-600"
                        data-tabs-inactive-classes="text-gray-400 hover:text-gray-400">
                            <li class="me-2" role="presentation">
                                <div class="inline-block py-4 me-8 text-lg font-medium cursor-pointer" id="information-tab" data-tabs-target="#information" type="button" role="tab" aria-controls="information" aria-selected="false">Информация</div>
                            </li>
                            <li class="me-2" role="presentation">
                                <div class="inline-block py-4 me-8 text-lg font-medium cursor-pointer" id="pedigree-tab" data-tabs-target="#pedigree" type="button" role="tab" aria-controls="pedigree" aria-selected="false">Родословная</div>
                            </li>
                        </ul>
                    </div>
                    <div id="default-tab-content">
                        <div class="hidden py-4" role="tabpanel" id="information" aria-labelledby="information-tab">
                        Здесь информация о собаке
                        </div>
                        <div class="hidden py-4" role="tabpanel" id="pedigree" aria-labelledby="pedigree-tab">
                        
                            <div class="grid gap-4 grid-cols-3 mb-8">
                                {{-- 1 уровень --}}
                                <div class="flex gap-4 items-center p-4 border border-gray-900">
                                    <div>Отец</div>
                                    <div class="flex flex-col">
                                        <div class="text-xs">РКД (кинолог.орг)</div>
                                        <div class="text-xl font-bold">Кличка</div>
                                        <div class="text-sm">Немецкая овчарка</div>
                                        <div class="flex gap-2 items-center">
                                            <div class="text-sm">Черный окрас</div>
                                            <div>-</div>
                                            <div class="text-sm">2 года, 6 месяцев</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- 2 уровень --}}
                                <div class="flex flex-col gap-2">
                                    <div class="flex gap-4 h-full items-center p-4 border border-gray-900">
                                        <div>Отец</div>
                                        <div class="flex flex-col">
                                            <div class="text-xl font-bold">Кличка</div>
                                            <div class="flex gap-2 items-center">
                                                <div class="text-sm">Черный окрас</div>
                                                <div>-</div>
                                                <div class="text-sm">2 года, 6 месяцев</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-4 h-full items-center p-4 border border-gray-900">
                                        <div>Мать</div>
                                        <div class="flex flex-col">
                                            <div class="text-xl font-bold">Кличка</div>
                                            <div class="flex gap-2 items-center">
                                                <div class="text-sm">Черный окрас</div>
                                                <div>-</div>
                                                <div class="text-sm">2 года, 6 месяцев</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- 3 уровень --}}
                                <div class="flex flex-col gap-2">
                                    <div class="flex flex-col gap-2">
                                        <div class="flex flex-col h-full p-4 border border-gray-900">
                                            <div class="flex gap-2 items-center">
                                                <div class="text-md font-bold">Кличка</div>
                                                <div>-</div>
                                                <div class="text-md">Мать</div>
                                            </div>
                                            
                                            <div class="flex gap-2 items-center">
                                                <div class="text-xs">Черный окрас</div>
                                                <div>-</div>
                                                <div class="text-xs">2 года, 6 месяцев</div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col h-full p-4 border border-gray-900">
                                            <div class="flex gap-2 items-center">
                                                <div class="text-md font-bold">Кличка</div>
                                                <div>-</div>
                                                <div class="text-md">Мать</div>
                                            </div>
                                            
                                            <div class="flex gap-2 items-center">
                                                <div class="text-xs">Черный окрас</div>
                                                <div>-</div>
                                                <div class="text-xs">2 года, 6 месяцев</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <div class="flex flex-col h-full p-4 border border-gray-900">
                                            <div class="flex gap-2 items-center">
                                                <div class="text-md font-bold">Кличка</div>
                                                <div>-</div>
                                                <div class="text-md">Мать</div>
                                            </div>
                                            
                                            <div class="flex gap-2 items-center">
                                                <div class="text-xs">Черный окрас</div>
                                                <div>-</div>
                                                <div class="text-xs">2 года, 6 месяцев</div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col h-full p-4 border border-gray-900">
                                            <div class="flex gap-2 items-center">
                                                <div class="text-md font-bold">Кличка</div>
                                                <div>-</div>
                                                <div class="text-md">Мать</div>
                                            </div>
                                            
                                            <div class="flex gap-2 items-center">
                                                <div class="text-xs">Черный окрас</div>
                                                <div>-</div>
                                                <div class="text-xs">2 года, 6 месяцев</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- Мать --}}
                            <div class="grid gap-4 grid-cols-3 mb-0">
                                {{-- 1 уровень --}}
                                <div class="flex gap-4 items-center p-4 border border-gray-900">
                                    <div>Мать</div>
                                    <div class="flex flex-col">
                                        <div class="text-xs">РКД (кинолог.орг)</div>
                                        <div class="text-xl font-bold">Кличка</div>
                                        <div class="text-sm">Немецкая овчарка</div>
                                        <div class="flex gap-2 items-center">
                                            <div class="text-sm">Черный окрас</div>
                                            <div>-</div>
                                            <div class="text-sm">2 года, 6 месяцев</div>
                                        </div>
                                    </div>
                                </div>
                                {{-- 2 уровень --}}
                                <div class="flex flex-col gap-2">
                                    <div class="flex gap-4 h-full items-center p-4 border border-gray-900">
                                        <div>Отец</div>
                                        <div class="flex flex-col">
                                            <div class="text-xl font-bold">Кличка</div>
                                            <div class="flex gap-2 items-center">
                                                <div class="text-sm">Черный окрас</div>
                                                <div>-</div>
                                                <div class="text-sm">2 года, 6 месяцев</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex gap-4 h-full items-center p-4 border border-gray-900">
                                        <div>Мать</div>
                                        <div class="flex flex-col">
                                            <div class="text-xl font-bold">Кличка</div>
                                            <div class="flex gap-2 items-center">
                                                <div class="text-sm">Черный окрас</div>
                                                <div>-</div>
                                                <div class="text-sm">2 года, 6 месяцев</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- 3 уровень --}}
                                <div class="flex flex-col gap-2">
                                    <div class="flex flex-col gap-2">
                                        <div class="flex flex-col h-full p-4 border border-gray-900">
                                            <div class="flex gap-2 items-center">
                                                <div class="text-md font-bold">Кличка</div>
                                                <div>-</div>
                                                <div class="text-md">Мать</div>
                                            </div>
                                            
                                            <div class="flex gap-2 items-center">
                                                <div class="text-xs">Черный окрас</div>
                                                <div>-</div>
                                                <div class="text-xs">2 года, 6 месяцев</div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col h-full p-4 border border-gray-900">
                                            <div class="flex gap-2 items-center">
                                                <div class="text-md font-bold">Кличка</div>
                                                <div>-</div>
                                                <div class="text-md">Мать</div>
                                            </div>
                                            
                                            <div class="flex gap-2 items-center">
                                                <div class="text-xs">Черный окрас</div>
                                                <div>-</div>
                                                <div class="text-xs">2 года, 6 месяцев</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        <div class="flex flex-col h-full p-4 border border-gray-900">
                                            <div class="flex gap-2 items-center">
                                                <div class="text-md font-bold">Кличка</div>
                                                <div>-</div>
                                                <div class="text-md">Мать</div>
                                            </div>
                                            
                                            <div class="flex gap-2 items-center">
                                                <div class="text-xs">Черный окрас</div>
                                                <div>-</div>
                                                <div class="text-xs">2 года, 6 месяцев</div>
                                            </div>
                                        </div>
                                        <div class="flex flex-col h-full p-4 border border-gray-900">
                                            <div class="flex gap-2 items-center">
                                                <div class="text-md font-bold">Кличка</div>
                                                <div>-</div>
                                                <div class="text-md">Мать</div>
                                            </div>
                                            
                                            <div class="flex gap-2 items-center">
                                                <div class="text-xs">Черный окрас</div>
                                                <div>-</div>
                                                <div class="text-xs">2 года, 6 месяцев</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
