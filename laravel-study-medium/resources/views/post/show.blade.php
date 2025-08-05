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
                        <!-- Avatar -->
                        <div class="flex gap-4">
                            <x-user-avatar :user="$post->user" size="w-20 h-20"/>
                            <!-- Avatar -->
                            <!-- User -->
                            <div>
                                <x-follow-container :user="$post->user" class="flex gap-2">
                                    <a class="hover:text-gray-400 hover:underline"
                                        href="{{ route('profile.show', $post->user) }}">{{ $post->user->name }}</a>
                                    @if(auth()->user() && auth()->user()->id !== $post->user->id)
                                    &middot;
                                    <button x-text="following ? 'Unfollow' : 'Follow'" :class="following ? 'text-red-500 hover:text-red-700' : 'text-emerald-500 hover:text-emerald-700'" @click="follow()"></button>
                                    @endif
                                </x-follow-container>
                                <div class="flex gap-2">
                                    <span class="text-gray-400">
                                        {{ ceil(str_word_count(strip_tags($post->content)) / 200) }} min read

                                        &middot;

                                        {{$post->created_at->format('M d,Y')}}
                                    </span>
                                </div>
                            </div>
                            <!-- User -->
                        </div>
                    </div>
                    <!-- Content -->
                    <!-- Like -->
                    <x-like-button :post='$post'/>
                    <!-- Like-->
                    <div>
                        <img src="{{ Storage::url($post->image) }}" class="w-full mt-10 rounded-lg">
                        <div class="flex m-10">
                            {{$post->content}}
                        </div>
                    </div>
                    <!-- Category -->
                    <div>
                        <a href="{{ route('post.byCategory', $post->category) }}"><span class="p-2 dark:bg-gray-500 bg-gray-200 rounded-full">{{ $post->category->name }}</span></a>
                    </div>
                    <!-- Category -->
                    <!-- Content -->
                </div>
            </div>
        </div>
    </div>
</x-app-layout>