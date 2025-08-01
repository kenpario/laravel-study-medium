<x-app-layout>

    <div class="py-12">
        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="max-w-4xl mx-auto">
                        <form action="{{ route('post.store') }}" enctype="multipart/form-data" method="post">

                            @csrf
                            <!-- Title -->
                            <div class="mb-6">
                                <x-input-label for="title" :value="__('Title')" />
                                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title"
                                    :value="old('title')" autofocus />
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>

                            <!-- Category -->
                            <div class="mb-6">
                                <x-input-label for="category_id" :value="__('Category')" />
                                <select id="category_id" name="category_id"
                                    class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <option value="">Select a category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>
                                            {{ $category->name }}
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('category')" class="mt-2" />
                            </div>

                            <!-- Image -->
                            <div class="mb-6">
                                <x-input-label for="image" :value="__('Image')" />
                                <div class="flex items-center justify-center w-full">

                                    <x-text-input id="image" class="block mt-1 w-full" type="file" name="image"
                                        :value="old('image')" autofocus />
                                </div>
                                <x-input-error :messages="$errors->get('image')" class="mt-2" />
                            </div>
                            <!-- Content -->
                            <div class="mb-6">
                                <x-input-label for="content" :value="__('Content')" />
                                <x-input-textarea id="content" class="block mt-1 w-full"
                                    name="content">{{old('content')}}</x-input-textarea>
                                <x-input-error :messages="$errors->get('content')" class="mt-2" />
                            </div>
                            <!-- Submit -->
                            <div class="mb-6">
                                <x-primary-button>
                                    Submit
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>