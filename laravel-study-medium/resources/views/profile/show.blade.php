<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6 text-white">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="flex">
                    <div class="flex-1">
                        <h1 class="text-4xl border-b border-gray-500 p-2">{{$user->name}}</h1>
                        <div class="m-5">
                            @forelse ($posts as $post)
                                <x-post-item :post="$post" />
                            @empty
                                <div class="text-center text-gray-700 py-10">No Posts Found</div>
                            @endforelse
                        </div>
                    </div>
                    <x-follow-container :user='$user'>
                        <x-user-avatar :user="$user" size="w-25 h-25" />
                        <div class="m-5 px-10">
                            <h3 class="font-bold text-xl">{{ $user->name }}</h3>
                            <p class="text-gray-400"><span x-text="followersCount"></span> followers</p>
                            <p>{{$user->bio}}</p>
                            @if(auth()->user() && auth()->user()->id !== $user->id)
                                <div class=" mt-5">
                                    <button @click="follow()" class="p-1.5 rounded-full"
                                        x-text="following ? 'Unfollow' : 'Follow'"
                                        :class="following ? 'bg-red-500 hover:bg-red-700 px-3' : 'bg-emerald-500 hover:bg-emerald-700 px-5'">

                                    </button>
                                </div>
                            @endif
                            </x-follow-container>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>