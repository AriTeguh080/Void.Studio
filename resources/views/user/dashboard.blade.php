<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('User Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Welcome to your dashboard!") }}

                    <div class="mt-6">
                        <h3 class="text-lg font-medium mb-4">Available Articles</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                            @foreach($articles as $article)
                                <div class="bg-gray-50 dark:bg-gray-700 p-4 rounded-lg">
                                    <img src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->name }}" class="w-full h-48 object-cover rounded mb-4">
                                    <h4 class="font-semibold">{{ $article->name }}</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 mt-2">{{ Str::limit($article->description, 100) }}</p>
                                    <p class="text-lg font-bold mt-2">${{ $article->price }}</p>
                                    <p class="text-sm text-gray-500">Stock: {{ $article->stock }}</p>
                                    <div class="mt-4 flex justify-between items-center">
                                        <a href="{{ url('/' . strtolower(str_replace(' ', '', $article->name))) }}" class="text-blue-600 hover:text-blue-800">View Details</a>
                                        <form action="{{ route('favorite.add', $article) }}" method="POST" class="inline">
                                            @csrf
                                            <button type="submit" class="text-red-600 hover:text-red-800">
                                                {{ auth()->user()->favorites->contains($article->id) ? '❤️' : '🤍' }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="{{ route('favorites') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            View My Favorites
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
