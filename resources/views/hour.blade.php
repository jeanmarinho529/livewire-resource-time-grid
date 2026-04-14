{{-- Injected variables: $hourAndSlots --}}
<div
    class="{{ $styles['hourWrapper'] }}"
    style="height: {{ $hourHeightInRems }}rem"
>
    <div class="{{ $styles['hour'] }}">
        {{ today()->setHour($hourAndSlots['hour'])->format('H:i') }}
    </div>
</div>
