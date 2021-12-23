<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Новости') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if(auth()->user()->hasRoleRes(['admin', 'editor']))
                        <div class="flex justify-end">
                            <a href="{{route('dashboard.news.create')}}" class="text-where-400 hover:text-blue-400">Добавить новость</a>
                        </div>
                    @endif
                    <div class="divide-y divide-gray-200 ...">
                        @foreach ($news as $post)
                            <div class="p-3">
                                <h2 class="font-bold text-xl">{{$post->title}}</h2>
                                <div class="text-sm font-light">Дата создания: {{$post->created_at}}</div>
                                <div class="mt-1">
                                    {{$post->content}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
