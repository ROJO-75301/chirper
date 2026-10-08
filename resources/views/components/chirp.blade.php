@props(['chirp'])

<div class="card bg-base-100 shadow">
    <div class="card-body">
        <div class="flex space-x-3">
            <div class="avatar">
                <div class="size-10 rounded-full">
                    <img src="https://avatars.laravel.cloud/f61123d5-0b27-434c-a4ae-c653c7fc9ed6?vibe=stealth"
                         alt="{{ $chirp['author'] }}'s avatar"
                         class="rounded-full" />
                </div>
            </div>

            <div class="min-w-0">
                <div class="flex items-center gap-1">
                    <span class="text-sm font-semibold">{{ $chirp['author'] }}</span>
                    <span class="text-base-content/60">·</span>
                    <span class="text-sm text-base-content/60">{{ $chirp['time'] }}</span>
                </div>

                <p class="mt-1">
                    {{ $chirp['message'] }}
                </p>
            </div>
        </div>
    </div>
</div>