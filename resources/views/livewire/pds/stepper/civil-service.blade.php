<div>
    <div class="mt-5 border-l border-r ">
        <div class="title px-2 bg-side text-white">IV. CIVIL SERVICE ELIGIBILITY</div>
        <div class="body border-b px-2 py-2">
            <form action="#" method="POST">
                <div class="sm:rounded-md">
                    <div class="">
                        <div class="grid grid-cols-6 gap-2">
                            <div class="col-span-6">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">CAREER SERVICE/ RA
                                    1080 (BOARD/ BAR) UNDER SPECIAL LAWS/ CES/ CSEE BARANGAY ELIGIBILITY / DRIVER'S
                                    LICENSE</label>
                                <input type="text" name="street-address" id="street-address"
                                    autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">
                                    RATING(If Applicable) </label>
                                <input type="number" name="street-address" id="street-address"
                                    autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-3 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">
                                    DATE OF EXAMINATION / CONFERMENT</label>
                                <input wire:ignore wire:key="datepicker" x-data="{}" x-ref="datepicker"
                                    x-init="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            flatpickr($refs.datepicker);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "
                                    type="date" wire:model='schedule'
                                    placeholder="{{ Carbon\Carbon::today()->format('m-d-y') }}"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">PLACE OF
                                    EXAMINATION / CONFERMENT</label>
                                <input wire:ignore wire:key="datepicker" x-data="{}" x-ref="datepicker"
                                    x-init="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            flatpickr($refs.datepicker);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "
                                    type="date" wire:model='schedule'
                                    placeholder="{{ Carbon\Carbon::today()->format('m-d-y') }}"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar"> LICENSE
                                    NUMBER(if applicable)</label>
                                <input type="text" name="street-address" id="street-address"
                                    autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">Date of
                                    validity</label>
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
