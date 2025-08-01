<x-app-layout>
    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="max-w-4xl mx-auto">
                        <h1
                            class="mb-4 text-2xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                            {{ $post->title }}
                        </h1>
                        <div class="flex gap-4">
                            @if($post->user->image)
                                <div>
                                    <img class="rounded-full w-20 h-20" src="{{ Storage::url($post->user->image) }}"
                                        alt="{{ $post->user->name }}">
                                </div>
                            @else
                                <div>
                                    <img class="rounded-full w-20 h-20"
                                        src="https://static.everypixel.com/ep-pixabay/0329/8099/0858/84037/3298099085884037069-head.png"
                                        alt="{{ $post->user->name }}">
                                </div>
                            @endif
                            <div class="gap-2">
                                <h3>{{$post->user->name}}</h3>
                                <span class="text-gray-400">
                                    {{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min read

                                    &middot;

                                    {{$post->created_at->format('M d,Y')}}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="flex m-10">
                        <p>{{$post->content}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>