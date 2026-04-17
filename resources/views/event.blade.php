{{-- Injected variables: $event --}}
<div
    class="{{ $styles['event'] }}"
    wire:click.stop="onEventClick('{{ $event['id'] }}')">

    <div class="{{ $styles['eventTitle'] }} {{ $event['color'] }}">
                {{ $event['starts_at']->format('H:i') }} - {{ $event['ends_at']->format('H:i') }} - {{ $event['status'] }}
    </div>

    <div class="{{ $styles['eventBody'] }}">
        <div>
            {{ $event['title'] }}
        </div>
    </div>
</div>