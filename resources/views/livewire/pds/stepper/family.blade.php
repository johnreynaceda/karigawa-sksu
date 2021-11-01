<div>
    <div class="mt-5 border-l border-r ">
        <div class="title px-2 bg-side text-white">II. FAMILY BACKGROUND</div>
        <div class="body border-b px-2 py-2">
            <div>
                <div class="sm:rounded-md">
                    <div class="">
                        <div class="grid grid-cols-6 gap-2">
                            <div class="col-span-4">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">SPOUSE'S
                                    SURNAME</label>
                                <input type="text" wire:model.lazy="spousesurname" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-2">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">NAME
                                    EXTENSION (JR., SR) </label>
                                <select wire:model.lazy="spouseextension"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    <option value="NONE">NONE</option>
                                    <option value="JR">JR</option>
                                    <option value="SR">SR</option>
                                </select>
                            </div>
                            <div class="col-span-3 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">FIRSTNAME</label>
                                <input type="text" wire:model.lazy="spousefirstname" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-3 leading-3">
                                <label for=""
                                    class="block text-sm font-medium uppercase text-sidebar">MIDDLENAME</label>
                                <input type="text" wire:model.lazy="spousemiddlename" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-3 leading-3">
                                <label for=""
                                    class="block text-sm font-medium uppercase text-sidebar">OCCUPATION</label>
                                <input type="text" wire:model.lazy="occupation" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-3 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">EMPLOYER/BUSINESS
                                    NAME</label>
                                <input type="text" wire:model.lazy="employer" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-3 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">BUSINESS
                                    ADDRESS</label>
                                <input type="text" wire:model.lazy="business" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-3 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">TELEPHONE
                                    NO.</label>
                                <input type="text" wire:model.lazy="telephone" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>




                        </div>
                        <div class="mt-2  border-r border-l border-b w-full">
                            <div class="bg-gray-200 flex justify-between py-1">
                                <h1 class="text-gray-700">CHILDREN</h1>
                                <button wire:click="addchilds"
                                    class="bg-green-600 text-sm font-semibold px-3 text-white">ADD</button>
                            </div>
                            @foreach ($childs as $index => $item)
                                <div class="body">
                                    <div class="grid grid-cols-6 gap-2">
                                        <div class="col-span-3 leading-3">
                                            <input type="text" wire:model='childs.{{ $index }}.surname'
                                                autocomplete="street-address"
                                                class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                            <label for="" class="block text-xs italic  text-sidebar">Surname
                                            </label>
                                        </div>
                                        <div class="col-span-3 leading-3">
                                            <input type="text" wire:model='childs.{{ $index }}.firstname'
                                                autocomplete="street-address"
                                                class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                            <label for="" class="block text-xs italic  text-sidebar">Firstname
                                            </label>
                                        </div>
                                        <div class="col-span-3 leading-3">
                                            <input type="text" wire:model='childs.{{ $index }}.middlename'
                                                autocomplete="street-address"
                                                class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                            <label for="" class="block text-xs italic  text-sidebar">Middlename
                                            </label>
                                        </div>
                                        <div class="col-span-3 leading-3">
                                            <input wire:ignore wire:key="datepicker" x-data="{}" x-ref="datepicker"
                                                x-init="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            flatpickr($refs.datepicker);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "
                                                type="date" wire:model='childs.{{ $index }}.birthdate'
                                                placeholder="{{ Carbon\Carbon::today()->format('m-d-y') }}"
                                                class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                            <label for="" class="block text-xs italic  text-sidebar">Birthdate
                                            </label>
                                        </div>


                                    </div>
                                    <hr>
                                </div>
                            @endforeach
                        </div>
                        <div class="mt-2  border-r border-l border-b w-full">
                            <div class="bg-gray-200 h-2 flex justify-between py-1">
                            </div>
                            <div class="body">
                                <div class="grid grid-cols-6 gap-2">
                                    <div class="col-span-4">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">FATHER
                                            SURNAME</label>
                                        <input type="text" wire:model.lazy="fathersurname" autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="col-span-2">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">NAME
                                            EXTENSION (JR., SR) </label>
                                        <select wire:model.lazy="fatherextension"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                            <option value="JR">JR</option>
                                            <option value="SR">SR</option>
                                        </select>
                                    </div>
                                    <div class="col-span-3">
                                        <label for=""
                                            class="block text-sm font-medium uppercase text-sidebar">FIRSTNAME</label>
                                        <input type="text" wire:model.lazy="fatherfirstname"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="col-span-3">
                                        <label for=""
                                            class="block text-sm font-medium uppercase text-sidebar">MIDDLENAME</label>
                                        <input type="text" wire:model.lazy="fathermiddlename"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                </div>
                                <div class="grid grid-cols-6 gap-2">
                                    <div class="col-span-3">
                                        <label for="" class="block text-sm font-medium uppercase text-sidebar">MOTHER'S
                                            MAIDEN NAME</label>
                                        <input type="text" wire:model.lazy="mothermaiden" autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="col-span-3">
                                        <label for=""
                                            class="block text-sm font-medium uppercase text-sidebar">SURNAME</label>
                                        <input type="text" wire:model.lazy="mothersurname" autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="col-span-3">
                                        <label for=""
                                            class="block text-sm font-medium uppercase text-sidebar">FIRSTNAME</label>
                                        <input type="text" wire:model.lazy="motherfirstname"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                    <div class="col-span-3">
                                        <label for=""
                                            class="block text-sm font-medium uppercase text-sidebar">MIDDLENAME</label>
                                        <input type="text" wire:model.lazy="mothermiddlename"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class=" border-t-2 border-side flex justify-end px-2 py-2">
            <button wire:click="save" class="px-5 shadow py-1 bg-green-600 font-bold text-white">
                SAVE
            </button>
        </div>
    </div>

</div>
