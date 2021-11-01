<div>
    <div class="mt-5 border-l border-r ">
        <div class="title px-2 bg-side text-white uppercase">
            <h1>V. Work Experience </h1>
            <h1 class="text-xs">(Include private employment. Start from your recent work) Description of duties
                should be indicated in
                the attached Work Experience sheet.</h1>
        </div>
        <div class="body border-b px-2 py-2">
            <form action="#" method="POST">
                <div class="sm:rounded-md">
                    <div class="">
                        <div class="grid grid-cols-6 gap-2">

                            <div class="col-span-2 mt-5 leading-3">
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
                            <div class="col-span-2 mt-5 leading-3">
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
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">POSITION TITLE
                                    <span class="text-xs">(Write in full/Do not abbreviate)</span></label>
                                <input type="text" name="street-address" id="street-address"
                                    autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-4 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">DEPARTMENT /
                                    AGENCY / OFFICE / COMPANY (Write in full/Do not abbreviate)</span></label>
                                <input type="text" name="street-address" id="street-address"
                                    autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">MONTHLY
                                    SALARY</label>
                                <input type="number" name="street-address" id="street-address"
                                    autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar"> SALARY/ JOB/ PAY
                                    GRADE (if applicable) &
                                    STEP (Format "00-0")/ INCREMENT</label>
                                <input type="number" name="street-address" id="street-address"
                                    autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-2 mt-5 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">STATUS OF
                                    APPOINTMENT</label>
                                <input type="text" name="street-address" id="street-address"
                                    autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                            </div>
                            <div class="col-span-2 mt-5 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">GOV'T SERVICE (Y/
                                    N)</label>
                                <select name="" id="" class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    <option value="YES">YES</option>
                                    <option value="NO">NO</option>
                                </select>
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
