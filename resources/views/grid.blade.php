<div>
    <div>
        @includeIf($beforeGridView)
    </div>

    <div class="flex">

        @include($hoursColumnView, ['hoursAndSlots' => $hoursAndSlots])

        <div class="overflow-x-auto w-full">
            <div class="w-full overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-6">

                    @foreach ($resources as $resource)
                        @include($resourceColumnView, [
                            'hoursAndSlots' => $hoursAndSlots,
                            'resource' => $resource,
                            'interval' => $interval,
                        ])
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div>
        @includeIf($afterGridView)
    </div>
</div>
