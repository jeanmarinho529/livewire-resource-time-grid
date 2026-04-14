{{-- Injected variables: $event --}}
<div
    class="{{ $styles['event'] }}"
    wire:click.stop="onEventClick('{{ $event['id'] }}')">

    <div class="{{ $styles['eventTitle'] }}">
        {{ $event['starts_at']->format('H:i') }} - {{ $event['ends_at']->format('H:i') }}
    </div>

    <div class="{{ $styles['eventBody'] }}">
        <div>
            {{ $event['title'] }}
        </div>
    </div>
</div>
