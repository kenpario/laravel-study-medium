<div>
    <a href="{{ route('post.show',['username'=>$post->user->username,'post' =>$post->slug]) }}"
        class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow-sm md:flex-row md:max-w-4xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mb-4 ">
        <img class="object-cover w-80 rounded-t-lg h-full md:h-auto md:w-80 md:rounded-none md:rounded-s-lg"
            src="{{Storage::url($post->image)}}" alt="">
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
                {{$post->title}}
            </h5>
            <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                {{Str::words($post->content, 20)}}
            </div>
        </div>
    </a>
</div>