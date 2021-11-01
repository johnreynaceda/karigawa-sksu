<div class="w-full">
    <div wire:loading class="bg-white fixed inset-0 z-50 bg-opacity-0">
        <div class=" h-full w-full flex cursor-wait items-center justify-center">

        </div>
    </div>
    <div class=" w-full flex flex-col bg-gray-100">
        <div class="pt-8  px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-side">
                AWA APPLICATION
            </h2>
        </div>
        <div class="bg-green-500 flex">
            @if ($updatetask == false)
                <main class="hidden  w-80 overflow-y-auto h-screen bg-gray-100 lg:block">
                    <div class="max-w-7xl mx-auto lg:px-3 mt-5 ">
                        <div class="bg-white p-2 shadow rounded">
                            <span class="font-semibold text-sidebar border-b border-green-500">CREATE AWA
                                APPLICATION</span>

                            <div class="body mt-5">
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Schedule</label>
                                    <div class="mt-1 mb-2">
                                        <input wire:ignore wire:key="datepicker" x-data="{}" x-ref="datepicker" x-init="
                                    flatpickr($refs.datepicker, { 'disable': [
                                        function(date) {
                                            return (date.getDay() === 0 || date.getDay() === 6);
                                        }
                                    ],});
                                " type="date" wire:model='schedule'
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md
"
                                            placeholder="{{ Carbon\Carbon::today()->format('m-d-y') }}">
                                        @error('schedule') <span
                                                class="error text-xs text-red-500 italic">{{ 'The Task Schedule field is required!' }}</span>
                                        @enderror
                                    </div>


                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Day of
                                        AWA</label>
                                    <div class="mt-1 mb-2">
                                        <input wire:model="day_of_awa" type="text" disabled
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                            placeholder="">
                                        @error('day_of_awa') <span
                                                class="error text-xs text-red-500 italic">{{ 'The Task Day field is required!' }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Task
                                        Description</label>
                                    <div class="mt-1 mb-2">
                                        <textarea wire:model="description" name="" id="" rows="3"
                                            class="w-full border-gray-300 rounded-md text-sm"></textarea>
                                        @error('description') <span
                                                class="error text-xs text-red-500 italic">{{ 'The Task Description field is required!' }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <label for="email"
                                        class="block text-sm font-medium text-gray-700">Deliverables</label>
                                    <div class="mt-1 mb-2">
                                        <textarea wire:model="deliverables" name="" id="" rows="3"
                                            class="w-full border-gray-300 rounded-md text-sm"></textarea>
                                        @error('deliverables') <span
                                                class="error text-xs text-red-500 italic">{{ 'The Task Deliverables field is required!' }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mt-3 flex justify-end">
                                    <button wire:click="save"
                                        class="buton bg-green-500 hover:bg-green-700  text-sm p-1 px-5 font-bold text-white">
                                        SAVE
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            @else
                <main class="hidden  w-80 overflow-y-auto h-screen bg-gray-100 lg:block">
                    <div class="max-w-7xl mx-auto lg:px-3 mt-5 ">
                        <div class="bg-white p-2 shadow rounded">
                            <span class="font-semibold text-sidebar border-b border-green-500">EDIT AWA
                                APPLICATION</span>

                            <div class="body mt-5">
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Schedule</label>
                                    <div class="mt-1 mb-2">
                                        <input wire:ignore wire:key="datepicker" x-data="{}" x-ref="datepicker" x-init="
                                    flatpickr($refs.datepicker, { 'disable': [
                                        function(date) {
                                            return (date.getDay() === 0 || date.getDay() === 6);
                                        }
                                    ],});
                                " type="date" wire:model='schedule'
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md
"
                                            placeholder="{{ Carbon\Carbon::today()->format('m-d-y') }}">
                                        @error('schedule') <span
                                                class="error text-xs text-red-500 italic">{{ 'The Task Schedule field is required!' }}</span>
                                        @enderror
                                    </div>


                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Day of
                                        AWA</label>
                                    <div class="mt-1 mb-2">
                                        <input wire:model="day_of_awa" type="text" disabled
                                            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                            placeholder="">
                                        @error('day_of_awa') <span
                                                class="error text-xs text-red-500 italic">{{ 'The Task Day field is required!' }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700">Task
                                        Description</label>
                                    <div class="mt-1 mb-2">
                                        <textarea wire:model="description" name="" id="" rows="3"
                                            class="w-full border-gray-300 rounded-md text-sm"></textarea>
                                        @error('description') <span
                                                class="error text-xs text-red-500 italic">{{ 'The Task Description field is required!' }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div>
                                    <label for="email"
                                        class="block text-sm font-medium text-gray-700">Deliverables</label>
                                    <div class="mt-1 mb-2">
                                        <textarea wire:model="deliverables" name="" id="" rows="3"
                                            class="w-full border-gray-300 rounded-md text-sm"></textarea>
                                        @error('deliverables') <span
                                                class="error text-xs text-red-500 italic">{{ 'The Task Deliverables field is required!' }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="mt-3 flex justify-end">
                                    <button wire:click="save"
                                        class="buton bg-green-500 hover:bg-green-700  text-sm p-1 px-5 font-bold text-white">
                                        SAVE
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            @endif

            <aside class="flex-1 h-screen bg-gray-100 px-4 lg:px-6 border-l-2 border-gray-200  ">
                <section class="mt-5" aria-labelledby="gallery-heading">
                    <div class="flex justify-between bg-white relative p-2 lg:px-5 rounded shadow items-center">
                        <div class="user flex  space-x-5">
                            <div class="flex-shrink-0">
                                <div class="relative">
                                    <img class="h-16 w-16 rounded-full" src="{{ auth()->user()->profile_photo_url }}"
                                        alt="">
                                    <span class="absolute inset-0 shadow-inner rounded-full" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div>
                                <h1 class="text-2xl font-bold flex space-x-1 items-center text-gray-800">
                                    <span>{{ auth()->user()->name }}</span>
                                </h1>
                                <span class="flex items-center text-gray-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path
                                            d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                    </svg>
                                    <span>{{ auth()->user()->designations->where('designation_type_id', 5)->first()->program->program_name }}</span>
                                </span>
                            </div>
                        </div>
                        <div class="status  hidden lg:block">
                            @if ($status->awaStatus == 0)
                                <div class="bg-yellow-200 mr-3 px-3 shadow text-side font-semibold rounded-full">
                                    UNSUBMIT
                                </div>
                            @elseif($status->awaStatus == 1)
                                <div class="bg-yellow-200 mr-3 px-3 shadow text-side font-semibold rounded-full">
                                    SUBMITTED
                                </div>
                            @endif
                        </div>
                        <div class="absolute top-0 right-0 bg-green-500 w-4 rounded-tr rounded-br h-full"></div>
                    </div>

                </section>

                <div class="flex justify-between items-end mt-5">
                    <h3 class="font-bold text-side  text-lg">MY AWA TASK</h3>
                    <button wire:click="submit"
                        class="bg-green-500 hover:bg-green-700 p-1 px-4 font-semibold text-white">
                        SUBMIT AWA
                    </button>
                </div>
                <div class="bg-white border-2 mt-2 shadow overflow-hidden ">
                    <ul role=" list" class="divide-y divide-gray-200">
                        @forelse ($tasks as $task)
                            <div class="relative ">
                                <div
                                    class="absolute cursor-pointer inset-0 z-10 bg-gray-100 text-center flex space-x-3 items-center justify-center opacity-0 hover:opacity-100 bg-opacity-80 duration-300">
                                    <button wire:click="edit({{ $task->id }})"
                                        class="bg-green-600 px-3 py-3 hover:bg-green-900 text-white hover:text-white flex items-center justify-center rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </button>
                                    <button wire:click="delete({{ $task->id }})"
                                        class="
                                        bg-green-600 hover:bg-red-600 hover:text-white text-white px-3 py-3 flex items-center justify-center rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </button>

                                </div>
                                <a href="#" class="relative hover:bg-gray-50">
                                    <div class="px-4 py-3 sm:px-6">
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm font-bold text-side truncate">
                                                {{ $task->task_description }}
                                            </p>

                                        </div>
                                        <div class="mt-2 sm:flex sm:justify-between">
                                            <div class="sm:flex">
                                                <p class="flex items-center text-sm text-gray-500">
                                                    <!-- Heroicon name: solid/users -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                                    </svg>
                                                    <span>{{ $task->deliverables }}</span>
                                                </p>

                                            </div>
                                            <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">
                                                <!-- Heroicon name: solid/calendar -->
                                                <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                        d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                                <p>

                                                    <time datetime="2020-01-07">{{ $task->schedule }}</time>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <div class="relative ">

                                <a href="#" class="relative hover:bg-gray-50">
                                    <div class="px-4 py-3 sm:px-6">
                                        <div class="flex items-center justify-between">
                                            <p class="text-sm font-bold text-side truncate">

                                            </p>

                                        </div>
                                        <div class="mt-2 sm:flex sm:justify-between">
                                            <div class="sm:flex">
                                                <p class="flex items-center text-sm text-gray-500">
                                                    <!-- Heroicon name: solid/users -->
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                                                    </svg>
                                                    <span>No Tasks Available!</span>
                                                </p>

                                            </div>
                                            <div class="mt-2 flex items-center text-sm text-gray-500 sm:mt-0">

                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @endforelse
                    </ul>

                </div>
                <div class="mt-2">
                    {{ $tasks->links() }}
                </div>






            </aside>
        </div>
    </div>
</div>
