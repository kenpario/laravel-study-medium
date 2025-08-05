@props(['user', 'size' => 'w-12 h-12'])

@if($user->image)
    <div>
        <img class="rounded-full {{ $size }}}" src="{{ Storage::url($user->image) }}" alt="{{ $user->name }}">
    </div>
@else
    <div>
        <img class="rounded-full {{ $size }}"
            src="https://static.everypixel.com/ep-pixabay/0329/8099/0858/84037/3298099085884037069-head.png"
            alt="{{ $user->name }}">
    </div>
@endif