<x-app-layout>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="md:flex">
                        <x-categories-tabs/>
                        <div class="m-8">
                            @forelse ($posts as $post)
                                <x-post-item :post="$post"/>
                            @empty
                                <div class="text-center text-gray-700 py-10">No Posts Found</div>
                            @endforelse
                        </div>
                    </div>
                    {{ $posts->onEachSide(1)->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>