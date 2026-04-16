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
                        <div class="col-span-1 {{ count($resources) == 1 and !empty($resource['is_today']) ? 'block' : 'hidden md:block' }}">
                                @include($resourceColumnView, [
                                'hoursAndSlots' => $hoursAndSlots,
                                'resource' => $resource,
                                'interval' => $interval,
                            ])
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    <div>
        @includeIf($afterGridView)
    </div>
</div>
