<div>
    <ul role="list" class="divide-y-4 mb-2 mt-3  divide-gray-600">
        @foreach (auth()->user()->designations as $account)
            @if ($account->designation_type_id == 5)
                <div wire:click="designation({{ $account->designation_type_id }})"
                    class="py-4 flex bg-white rounded px-10 hover:bg-green-400 cursor-pointer ">
                    <img class="h-10 w-10 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-800">{{ auth()->user()->name }}</p>
                        <p class="text-sm font-bold  text-side">FACULTY -
                            {{ $account->program->program_name }}
                        </p>
                    </div>
                </div>
            @elseif($account->designation_type_id == 6)
                <div wire:click="designation({{ $account->designation_type_id }})"
                    class="py-4 flex bg-white rounded px-10 hover:bg-green-400 cursor-pointer ">
                    <img class="h-10 w-10 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-800">{{ auth()->user()->name }}</p>
                        <p class="text-sm font-bold  text-side">HUMAN RESOURCE
                        </p>
                    </div>
                </div>
            @elseif($account->designation_type_id == 4)
                <div wire:click="designation({{ $account->designation_type_id }})"
                    class="py-4 flex bg-white rounded px-10 hover:bg-green-400 cursor-pointer ">
                    <img class="h-10 w-10 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-800">{{ auth()->user()->name }}</p>
                        <p class="text-sm font-bold  text-side">PROGRAM HEAD - {{ $account->program->program_name }}
                        </p>
                    </div>
                </div>
            @elseif($account->designation_type_id == 3)
                <div wire:click="designation({{ $account->designation_type_id }})"
                    class="py-4 flex bg-white rounded px-10 hover:bg-green-400 cursor-pointer ">
                    <img class="h-10 w-10 rounded-full" src="{{ auth()->user()->profile_photo_url }}" alt="">
                    <div class="ml-3">
                        <p class="text-sm font-medium text-gray-800">{{ auth()->user()->name }}</p>
                        <p class="text-sm font-bold  text-side">DEAN - {{ $account->department->department_name }}
                        </p>
                    </div>
                </div>
            @endif
        @endforeach


    </ul>
</div>
