<div>
    <div class="mt-5 border-l border-r ">
        <div class="title px-2 bg-side text-white uppercase">
            <h1>VII. LEARNING AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED </h1>
            <h1 class="text-xs">(Start from the most recent L&D/training program and include only the relevant
                L&D/training taken for the last five (5) years for Division Chief/Executive/Managerial positions)</h1>

        </div>
        <div class="body border-b px-2 py-2">
            <form action="#" method="POST">
                <div class="sm:rounded-md">
                    <div class="">
                        <div class="grid grid-cols-6 gap-2">
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">TITLE OF LEARNING
                                    AND DEVELOPMENT INTERVENTIONS/TRAINING PROGRAMS
                                    <span class="text-xs">((Write in full)</span></label>
                                <input type="text" name="street-address" id="street-address"
                                    autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-2 mt-10 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">INCLUSIVE DATE
                                    FROM</label>
                                <input wire:ignore wire:key="datepicker" x-data="{}" x-ref="datepicker"
                                    x-init="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            flatpickr($refs.datepicker);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "
                                    type="date" wire:model='schedule'
                                    placeholder="{{ Carbon\Carbon::today()->format('m-d-y') }}"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-2 mt-10 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">INCLUSIVE DATE
                                    TO</label>
                                <input wire:ignore wire:key="datepicker" x-data="{}" x-ref="datepicker"
                                    x-init="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            flatpickr($refs.datepicker);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "
                                    type="date" wire:model='schedule'
                                    placeholder="{{ Carbon\Carbon::today()->format('m-d-y') }}"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>

                            <div class="col-span-2 mt-5 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">NUMBER OF
                                    HOURS</label>
                                <input type="number" name="street-address" id="street-address"
                                    autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">Type of LD
                                    (Managerial/ Supervisory/Technical/etc) </label>
                                <input type="text" name="street-address" id="street-address"
                                    autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">CONDUCTED/
                                    SPONSORED BY (Write in full)</label>
                                <input type="text" name="street-address" id="street-address"
                                    autocomplete="street-address"
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
