{{-- Injected variables: $resource --}}
<div class="{{ $styles['resourceColumnHeader'] }}">
    <p class="font-semibold mb-1">
        {{ $resource['title'] }}
    </p>
    <p class="font-semibold">
        <span
            class="{{ !empty($resource['is_today']) ? 'inline-flex items-center justify-center bg-teal-600 text-white rounded-full w-9 h-9' : '' }}">
            {{ $resource['day'] }}
        </span>
    </p>
</div>

