<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Добавления новости') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div>
                        <a href="{{route('dashboard.news')}}" class="text-where-400 hover:text-blue-400"><- Назад</a>
                    </div>
                    <div class="mt-5">
                        @if (session('message'))
                            <div class="alert alert-success mb-4">
                                {{ session('message') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('dashboard.news.store') }}">
                            @csrf
                            <div>
                                <x-label for="title" :value="__('Заголовок')" />
                                <x-input id="title" class="block mt-1 w-full" type="text" name="title" required autofocus />
                            </div>
                            <div class="mt-4">
                                <x-label for="content" :value="__('Описание')" />
                                <x-textarea style="width: 100%; height: 200px" name="content" type="textarea" value="" />
                            </div>

                            <div class="flex items-center mt-4">
                                <x-button>
                                    {{ __('Добавить') }}
                                </x-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
