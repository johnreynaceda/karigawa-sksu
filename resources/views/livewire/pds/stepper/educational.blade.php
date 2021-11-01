<div>
    <div class="mt-5 border-l border-r ">
        <div class="title px-2 bg-side text-white">III. EDUCATIONAL BACKGROUND</div>
        <div class="body border-b px-2 py-2">
            <form action="#" method="POST">
                <div class="sm:rounded-md">
                    <div class="">

                        <div class="mt-2  border-r border-l border-b w-full">
                            <div class="bg-gray-200 flex justify-between py-1">
                                <h1 class="text-gray-700">ELEMENTARY LEVEL</h1>

                            </div>
                            <div class="body">
                                <div class="grid grid-cols-6 gap-2">
                                    <div class=" mt-1 col-span-6">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">NAME OF
                                            SCHOOL(WRITE IN FULL)</label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class=" col-span-6">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">BASIC
                                            EDUCATION/DEGREE/COURSE
                                            (Write in Full) </label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="col-span-2 leading-3">
                                        <label for="">PEROID OF ATTENDANCE</label>
                                        <div class="mt-1 flex space-x-2">
                                            <div>
                                                <label for=""
                                                    class="block text-sm font-medium uppercase text-sidebar">from</label>
                                                <input wire:ignore wire:key="datepicker" x-data="{}" x-ref="datepicker"
                                                    x-init="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            flatpickr($refs.datepicker);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "
                                                    type="date" wire:model='schedule'
                                                    placeholder="{{ Carbon\Carbon::today()->format('m-d-y') }}"
                                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                            </div>
                                            <div>
                                                <label for=""
                                                    class="block text-sm font-medium uppercase text-sidebar">to</label>
                                                <input wire:ignore wire:key="datepicker" x-data="{}" x-ref="datepicker"
                                                    x-init="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            flatpickr($refs.datepicker);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "
                                                    type="date" wire:model='schedule'
                                                    placeholder="{{ Carbon\Carbon::today()->format('m-d-y') }}"
                                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-span-2">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">HIGHEST
                                            LEVEL/UNITS EARNED(if not graduated) </label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="mt-4 col-span-2">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">YEAR
                                            GRADUATED</label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="col-span-6">
                                        <label for=""
                                            class="block text-sm font-medium uppercase text-sidebar">SCHOLARSHIP/ACADEMIC
                                            HONORS RECEIVED</label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="mt-2  border-r border-l border-b w-full">
                            <div class="bg-gray-200 flex justify-between py-1">
                                <h1 class="text-gray-700">SECONDARY LEVEL</h1>

                            </div>
                            <div class="body">
                                <div class="grid grid-cols-6 gap-2">
                                    <div class=" mt-1 col-span-6">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">NAME OF
                                            SCHOOL(WRITE IN FULL)</label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class=" col-span-6">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">BASIC
                                            EDUCATION/DEGREE/COURSE
                                            (Write in Full) </label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="col-span-2 leading-3">
                                        <label for="">PEROID OF ATTENDANCE</label>
                                        <div class="mt-1 flex space-x-2">
                                            <div>
                                                <label for=""
                                                    class="block text-sm font-medium uppercase text-sidebar">from</label>
                                                <input wire:ignore wire:key="datepicker" x-data="{}" x-ref="datepicker"
                                                    x-init="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            flatpickr($refs.datepicker);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "
                                                    type="date" wire:model='schedule'
                                                    placeholder="{{ Carbon\Carbon::today()->format('m-d-y') }}"
                                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                            </div>
                                            <div>
                                                <label for=""
                                                    class="block text-sm font-medium uppercase text-sidebar">to</label>
                                                <input wire:ignore wire:key="datepicker" x-data="{}" x-ref="datepicker"
                                                    x-init="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            flatpickr($refs.datepicker);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "
                                                    type="date" wire:model='schedule'
                                                    placeholder="{{ Carbon\Carbon::today()->format('m-d-y') }}"
                                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-span-2">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">HIGHEST
                                            LEVEL/UNITS EARNED(if not graduated) </label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="mt-4 col-span-2">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">YEAR
                                            GRADUATED</label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="col-span-6">
                                        <label for=""
                                            class="block text-sm font-medium uppercase text-sidebar">SCHOLARSHIP/ACADEMIC
                                            HONORS RECEIVED</label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="mt-2  border-r border-l border-b w-full">
                            <div class="bg-gray-200 flex justify-between py-1">
                                <h1 class="text-gray-700 uppercase">Vocational/Trade Course</h1>

                            </div>
                            <div class="body">
                                <div class="grid grid-cols-6 gap-2">
                                    <div class=" mt-1 col-span-6">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">NAME OF
                                            SCHOOL(WRITE IN FULL)</label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class=" col-span-6">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">BASIC
                                            EDUCATION/DEGREE/COURSE
                                            (Write in Full) </label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="col-span-2 leading-3">
                                        <label for="">PEROID OF ATTENDANCE</label>
                                        <div class="mt-1 flex space-x-2">
                                            <div>
                                                <label for=""
                                                    class="block text-sm font-medium uppercase text-sidebar">from</label>
                                                <input wire:ignore wire:key="datepicker" x-data="{}" x-ref="datepicker"
                                                    x-init="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            flatpickr($refs.datepicker);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "
                                                    type="date" wire:model='schedule'
                                                    placeholder="{{ Carbon\Carbon::today()->format('m-d-y') }}"
                                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                            </div>
                                            <div>
                                                <label for=""
                                                    class="block text-sm font-medium uppercase text-sidebar">to</label>
                                                <input wire:ignore wire:key="datepicker" x-data="{}" x-ref="datepicker"
                                                    x-init="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            flatpickr($refs.datepicker);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "
                                                    type="date" wire:model='schedule'
                                                    placeholder="{{ Carbon\Carbon::today()->format('m-d-y') }}"
                                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-span-2">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">HIGHEST
                                            LEVEL/UNITS EARNED(if not graduated) </label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="mt-4 col-span-2">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">YEAR
                                            GRADUATED</label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="col-span-6">
                                        <label for=""
                                            class="block text-sm font-medium uppercase text-sidebar">SCHOLARSHIP/ACADEMIC
                                            HONORS RECEIVED</label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="mt-2  border-r border-l border-b w-full">
                            <div class="bg-gray-200 flex justify-between py-1">
                                <h1 class="text-gray-700 uppercase">College Level</h1>

                            </div>
                            <div class="body">
                                <div class="grid grid-cols-6 gap-2">
                                    <div class=" mt-1 col-span-6">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">NAME OF
                                            SCHOOL(WRITE IN FULL)</label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class=" col-span-6">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">BASIC
                                            EDUCATION/DEGREE/COURSE
                                            (Write in Full) </label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="col-span-2 leading-3">
                                        <label for="">PEROID OF ATTENDANCE</label>
                                        <div class="mt-1 flex space-x-2">
                                            <div>
                                                <label for=""
                                                    class="block text-sm font-medium uppercase text-sidebar">from</label>
                                                <input wire:ignore wire:key="datepicker" x-data="{}" x-ref="datepicker"
                                                    x-init="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            flatpickr($refs.datepicker);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "
                                                    type="date" wire:model='schedule'
                                                    placeholder="{{ Carbon\Carbon::today()->format('m-d-y') }}"
                                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                            </div>
                                            <div>
                                                <label for=""
                                                    class="block text-sm font-medium uppercase text-sidebar">to</label>
                                                <input wire:ignore wire:key="datepicker" x-data="{}" x-ref="datepicker"
                                                    x-init="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            flatpickr($refs.datepicker);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "
                                                    type="date" wire:model='schedule'
                                                    placeholder="{{ Carbon\Carbon::today()->format('m-d-y') }}"
                                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-span-2">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">HIGHEST
                                            LEVEL/UNITS EARNED(if not graduated) </label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="mt-4 col-span-2">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">YEAR
                                            GRADUATED</label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="col-span-6">
                                        <label for=""
                                            class="block text-sm font-medium uppercase text-sidebar">SCHOLARSHIP/ACADEMIC
                                            HONORS RECEIVED</label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="mt-2  border-r border-l border-b w-full">
                            <div class="bg-gray-200 flex justify-between py-1">
                                <h1 class="text-gray-700 uppercase">Graduate Level</h1>

                            </div>
                            <div class="body">
                                <div class="grid grid-cols-6 gap-2">
                                    <div class=" mt-1 col-span-6">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">NAME OF
                                            SCHOOL(WRITE IN FULL)</label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class=" col-span-6">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">BASIC
                                            EDUCATION/DEGREE/COURSE
                                            (Write in Full) </label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="col-span-2 leading-3">
                                        <label for="">PEROID OF ATTENDANCE</label>
                                        <div class="mt-1 flex space-x-2">
                                            <div>
                                                <label for=""
                                                    class="block text-sm font-medium uppercase text-sidebar">from</label>
                                                <input wire:ignore wire:key="datepicker" x-data="{}" x-ref="datepicker"
                                                    x-init="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            flatpickr($refs.datepicker);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "
                                                    type="date" wire:model='schedule'
                                                    placeholder="{{ Carbon\Carbon::today()->format('m-d-y') }}"
                                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                            </div>
                                            <div>
                                                <label for=""
                                                    class="block text-sm font-medium uppercase text-sidebar">to</label>
                                                <input wire:ignore wire:key="datepicker" x-data="{}" x-ref="datepicker"
                                                    x-init="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            flatpickr($refs.datepicker);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "
                                                    type="date" wire:model='schedule'
                                                    placeholder="{{ Carbon\Carbon::today()->format('m-d-y') }}"
                                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-span-2">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">HIGHEST
                                            LEVEL/UNITS EARNED(if not graduated) </label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="mt-4 col-span-2">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">YEAR
                                            GRADUATED</label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="col-span-6">
                                        <label for=""
                                            class="block text-sm font-medium uppercase text-sidebar">SCHOLARSHIP/ACADEMIC
                                            HONORS RECEIVED</label>
                                        <input type="text" name="street-address" id="street-address"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </form>
        </div>
        <div class=" border-t-2 border-side flex justify-end px-2 py-2">
            <button class="px-5 shadow py-1 bg-green-600 font-bold text-white">
                SAVE
            </button>
        </div>
    </div>

</div>
