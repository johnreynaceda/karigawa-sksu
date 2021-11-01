<div>

    <div class="mt-5 border-l border-r ">
        <div class="title px-2 bg-side text-white">I. PERSONAL INFORMATION</div>
        <div class="body border-b px-2 py-2">
            <form action="#" method="POST">
                <div class="sm:rounded-md">
                    <div class="">
                        <div class="grid grid-cols-6 gap-2">
                            <div class="col-span-4">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">SURNAME</label>
                                <input type="text" wire:model.lazy="surname" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                @error('surname') <span
                                        class="error text-xs text-red-500 leading-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">NAME
                                    EXTENSION (JR., SR) </label>
                                <select wire:model.lazy="extension"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    <option value="NONE">NONE</option>
                                    <option value="JR">JR</option>
                                    <option value="SR">SR</option>
                                </select>
                                @error('extension') <span
                                        class="error text-xs text-red-500 leading-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-3 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">FIRSTNAME</label>
                                <input type="text" wire:model.lazy="firstname" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                @error('firstname') <span
                                        class="error text-xs text-red-500 leading-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-3 leading-3">
                                <label for=""
                                    class="block text-sm font-medium uppercase text-sidebar">MIDDLENAME</label>
                                <input type="text" wire:model.lazy="middlename" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                @error('middlename') <span
                                        class="error text-xs text-red-500 leading-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">DATE OF
                                    BIRTH</label>
                                <input wire:ignore wire:key="datepicker" x-data="{}" x-ref="datepicker"
                                    x-init="
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            flatpickr($refs.datepicker);
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        "
                                    type="date" wire:model='birthdate'
                                    placeholder="{{ Carbon\Carbon::today()->format('m-d-y') }}"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                @error('birthdate') <span
                                        class="error text-xs text-red-500 leading-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">PLACE
                                    OF
                                    BIRTH</label>
                                <input type="text" wire:model.lazy="birthplace"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                @error('birthplace') <span
                                        class="error text-xs text-red-500 leading-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">SEX</label>
                                <div class="flex items-center mt-2 space-x-3">
                                    <label class="inline-flex items-center">
                                        <input wire:model.lazy="sex" type="radio"
                                            class="form-radio mt-1 uppercase text-green-500" name="radio-sex"
                                            value="MALE">
                                        <span class="ml-2 uppercase">MALE</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input wire:model.lazy="sex" type="radio" class="form-radio mt-1 text-green-500"
                                            name="radio-sex" value="FEMALE">
                                        <span class="ml-2 uppercase">FEMALE</span>
                                    </label>
                                </div>
                                @error('sex') <span
                                        class="error text-xs text-red-500 leading-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">CIVIL
                                    STATUS</label>
                                <div class="flex items-center mt-2 space-x-3">
                                    <label class="inline-flex items-center">
                                        <input wire:model.lazy="status" type="radio"
                                            class="form-radio mt-1 uppercase text-green-500" name="radio-status"
                                            value="SINGLE">
                                        <span class="ml-2 text-sm uppercase">SINGLE</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input wire:model.lazy="status" type="radio"
                                            class="form-radio mt-1 text-green-500" name="radio-status" value="MARRIED">
                                        <span class="ml-2 text-sm uppercase">MARRIED</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input wire:model.lazy="status" type="radio"
                                            class="form-radio mt-1 text-green-500" name="radio-status" value="WIDOWED">
                                        <span class="ml-2 text-sm uppercase">WIDOWED</span>
                                    </label>
                                </div>
                                <div class="flex items-center mt-2 space-x-3">
                                    <label class="inline-flex items-center">
                                        <input wire:model.lazy="status" type="radio"
                                            class="form-radio mt-1 uppercase text-green-500" name="radio-status"
                                            value="SEPARATED">
                                        <span class="ml-2 text-sm uppercase">SEPARATED</span>
                                    </label>
                                    <label class="inline-flex items-center">

                                        <span class=" uppercase text-sm">others:</span>
                                        <input type="text" wire:model.lazy="status" autocomplete="street-address"
                                            class="ml-2  h-8  block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    </label>

                                </div>
                                @error('status') <span
                                        class="error text-xs text-red-500 leading-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for=""
                                    class="block text-sm font-medium uppercase text-sidebar">CITIZENSHIP</label>

                                <div class="flex items-center mt-2 space-x-3">
                                    <label class="inline-flex items-center">
                                        <input wire:model.lazy="citizenship" type="radio"
                                            class="form-radio mt-1 uppercase text-green-500" name="radio-citizenship"
                                            value="FILIPINO">
                                        <span class="ml-2 text-sm uppercase">FILIPINO</span>
                                    </label>

                                </div>
                                <div class="flex items-center mt-2 space-x-3">
                                    <label class="inline-flex items-center">
                                        <input wire:model.lazy="citizenship" type="radio"
                                            class="form-radio mt-1 uppercase text-green-500" name="radio-citizenship"
                                            value="DUAL CITIZEN">
                                        <span class="ml-2 text-sm uppercase">DUAL CITIZEN</span>
                                    </label>

                                </div>
                                @error('citizenship') <span
                                        class="error text-xs text-red-500 leading-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for=""
                                    class="block text-sm font-medium uppercase text-sidebar text-white"></label>
                                <div class="flex items-center mt-2 space-x-3">
                                    <label class="inline-flex items-center">
                                        <input wire:model.lazy="citizenship" type="radio"
                                            class="form-radio mt-1 uppercase text-green-500" name="radio-citizenship"
                                            value="BY BIRTH">
                                        <span class="ml-2 text-sm uppercase">BY BIRTH</span>
                                    </label>
                                    <label class="inline-flex items-center">
                                        <input wire:model.lazy="citizenship" type="radio"
                                            class="form-radio mt-1 text-green-500" name="radio-citizenship"
                                            value="BY NATURALIZATION">
                                        <span class="ml-2 text-sm uppercase">BY NATURALIZATION</span>
                                    </label>
                                </div>
                                <div class="flex items-center mt-2 space-x-3">
                                    <label class="inline-flex items-center">
                                        <span class=" text-sm">Pls. Indicate Country:</span>
                                        <input type="text" wire:model.lazy="citizenship" autocomplete="street-address"
                                            class="ml-2  h-8  block w-auto shadow-sm sm:text-sm border-gray-300 ">
                                    </label>
                                </div>
                            </div>

                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">HEIGHT(M)</label>
                                <input type="text" wire:model.lazy="height" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                @error('height') <span
                                        class="error text-xs text-red-500 leading-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for=""
                                    class="block text-sm font-medium uppercase text-sidebar">WEIGHT(KG)</label>
                                <input type="text" wire:model.lazy="weight" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                @error('weight') <span
                                        class="error text-xs text-red-500 leading-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">BLOOD
                                    TYPE</label>
                                <select wire:model.lazy="bloodtype"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                </select>
                                @error('bloodtype') <span
                                        class="error text-xs text-red-500 leading-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">GSIS ID
                                    NO.</label>
                                <input type="number" wire:model.lazy="gsis" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                @error('gsis') <span
                                        class="error text-xs text-red-500 leading-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">PAG-IBIG
                                    ID
                                    NO.</label>
                                <input type="number" wire:model.lazy="pagibig" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                @error('pagibig') <span
                                        class="error text-xs text-red-500 leading-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">PHILHEALTH
                                    NO.</label>
                                <input type="number" wire:model.lazy="philhealth" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                @error('philhealth') <span
                                        class="error text-xs text-red-500 leading-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">SSS
                                    NO.</label>
                                <input type="number" wire:model.lazy="sss" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                @error('sss') <span
                                        class="error text-xs text-red-500 leading-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">TIN
                                    NO.</label>
                                <input type="number" wire:model.lazy="tin" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                @error('tin') <span
                                        class="error text-xs text-red-500 leading-3">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">AGENCY
                                    EMPLOYEE
                                    NO.</label>
                                <input type="number" wire:model.lazy="agency" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                @error('agency') <span class="error text-xs text-red-500 leading-3">The agency employee
                                        number field is required.</span>
                                @enderror
                            </div>



                        </div>
                        <div class="mt-2  border-r border-l border-b w-full">
                            <h1 class="text-gray-700 bg-gray-200">PERMANENT ADDRESS</h1>
                            <div class="body">
                                <div class="grid grid-cols-6 gap-2">
                                    <div class="col-span-2 leading-3">
                                        <select wire:model.lazy="permanentprovince"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                            @foreach ($provinces as $province)
                                                <option value="{{ $province->province_code }}">
                                                    {{ $province->province_description }}</option>
                                            @endforeach

                                        </select>
                                        <label for="" class="block text-xs italic  text-sidebar">Province
                                        </label>

                                    </div>
                                    <div class="col-span-2 leading-3">
                                        <select wire:model.lazy="permanentcityid"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                            @foreach ($permanentcity as $city)
                                                <option value="{{ $city->city_municipality_code }}">
                                                    {{ $city->city_municipality_description }}</option>
                                            @endforeach

                                        </select>
                                        <label for="" class="block text-xs italic  text-sidebar">City/Municipality
                                        </label>
                                        @error('permanentcityid') <span
                                                class="error text-xs text-red-500 leading-3">The city field is
                                                required.</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-2 leading-3">
                                        <select wire:model.lazy="permanentbarangayid"
                                            class="mt-1   block w-full shadow-sm sm:text-sm uppercase border-gray-300 ">
                                            @foreach ($permanentbarangay as $barangay)
                                                <option class="uppercase"
                                                    value="{{ $barangay->barangay_code }}">
                                                    {{ $barangay->barangay_description }}</option>
                                            @endforeach

                                        </select>
                                        <label for="" class="block text-xs italic  text-sidebar">Barangay
                                        </label>
                                        @error('permanentbarangayid') <span
                                                class="error text-xs text-red-500 leading-3">The barangay field is
                                                required.</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-2 leading-3">
                                        <input type="text" wire:model.lazy="permanentblock"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                        <label for="" class="block text-xs italic  text-sidebar">House/Block/Lot
                                            No.
                                        </label>
                                        @error('permanentblock') <span class="error text-xs text-red-500 leading-3">The
                                                block field is
                                                required.</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-2 leading-3">
                                        <input type="text" wire:model.lazy="permanentstreet"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                        <label for="" class="block text-xs italic  text-sidebar">Street
                                        </label>
                                        @error('permanentstreet') <span
                                                class="error text-xs text-red-500 leading-3">The street field is
                                                required.</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-2 leading-3">
                                        <input type="text" wire:model.lazy="permanentsubdivision"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                        <label for="" class="block text-xs italic  text-sidebar">Subdivision/Village
                                        </label>
                                        @error('permanentsubdivision') <span
                                                class="error text-xs text-red-500 leading-3">The subdivision field is
                                                required.</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-2 leading-3">
                                        <input type="text" wire:model.lazy="permanentzipcode"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                        <label for="" class="block text-xs italic  text-sidebar">Zip Code
                                        </label>
                                        @error('permanentzipcode') <span
                                                class="error text-xs text-red-500 leading-3">The zipcode field is
                                                required.</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-2  border-r border-l border-b w-full">
                            <h1 class="text-gray-700 bg-gray-200">TEMPORARY ADDRESS</h1>
                            <div class="body">
                                <div class="grid grid-cols-6 gap-2">
                                    <div class="col-span-2 leading-3">
                                        <select wire:model.lazy="temporaryprovince"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                            @foreach ($provinces as $province)
                                                <option value="{{ $province->province_code }}">
                                                    {{ $province->province_description }}</option>
                                            @endforeach

                                        </select>
                                        <label for="" class="block text-xs italic  text-sidebar">Province
                                        </label>
                                    </div>
                                    <div class="col-span-2 leading-3">
                                        <select wire:model.lazy="temporarycityid"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                            @foreach ($temporarycity as $city)
                                                <option value="{{ $city->city_municipality_code }}">
                                                    {{ $city->city_municipality_description }}</option>
                                            @endforeach

                                        </select>
                                        <label for="" class="block text-xs italic  text-sidebar">City/Municipality
                                        </label>
                                        @error('temporarycityid') <span
                                                class="error text-xs text-red-500 leading-3">The city field is
                                                required.</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-2 leading-3">
                                        <select wire:model.lazy="temporarybarangayid"
                                            class="mt-1   block w-full shadow-sm sm:text-sm uppercase border-gray-300 ">
                                            @foreach ($temporarybarangay as $barangay)
                                                <option class="uppercase"
                                                    value="{{ $barangay->barangay_code }}">
                                                    {{ $barangay->barangay_description }}</option>
                                            @endforeach

                                        </select>
                                        <label for="" class="block text-xs italic  text-sidebar">Barangay
                                        </label>
                                        @error('temporarybarangayid') <span
                                                class="error text-xs text-red-500 leading-3">The barangay field is
                                                required.</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-2 leading-3">
                                        <input type="text" wire:model.lazy="temporaryblock"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                        <label for="" class="block text-xs italic  text-sidebar">House/Block/Lot
                                            No.
                                        </label>
                                        @error('temporaryblock') <span class="error text-xs text-red-500 leading-3">The
                                                block field is
                                                required.</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-2 leading-3">
                                        <input type="text" wire:model.lazy="temporarystreet"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                        <label for="" class="block text-xs italic  text-sidebar">Street
                                        </label>
                                        @error('temporarystreet') <span
                                                class="error text-xs text-red-500 leading-3">The street field is
                                                required.</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-2 leading-3">
                                        <input type="text" wire:model.lazy="temporarysubdivision"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                        <label for="" class="block text-xs italic  text-sidebar">Subdivision/Village
                                        </label>
                                        @error('temporarysubdivision') <span
                                                class="error text-xs text-red-500 leading-3">The subdivision field is
                                                required.</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-2 leading-3">
                                        <input type="text" wire:model.lazy="temporaryzipcode"
                                            autocomplete="street-address"
                                            class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                        <label for="" class="block text-xs italic  text-sidebar">Zip Code
                                        </label>
                                        @error('temporaryzipcode') <span
                                                class="error text-xs text-red-500 leading-3">The zipcode field is
                                                required.</span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=" mt-2 grid grid-cols-6 gap-2">
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">Telephone
                                    No.</label>
                                <input type="number" wire:model.lazy="telephone" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                @error('telephone') <span class="error text-xs text-red-500 leading-3">The telephone
                                        field is
                                        required.</span>
                                @enderror
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">Mobile
                                    NO.</label>
                                <input type="number" wire:model.lazy="mobile" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                @error('mobile') <span class="error text-xs text-red-500 leading-3">The mobile field is
                                        required.</span>
                                @enderror
                            </div>
                            <div class="col-span-2 leading-3">
                                <label for="" class="block text-sm font-medium uppercase text-sidebar">email
                                    address(if any)
                                </label>
                                <input type="text" wire:model.lazy="email" autocomplete="street-address"
                                    class="mt-1   block w-full shadow-sm sm:text-sm border-gray-300 ">
                                @error('email') <span class="error text-xs text-red-500 leading-3">The email field is
                                        required.</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class=" border-t-2 border-side flex justify-end px-2 py-2">
            <button wire:click="save" class="px-5 shadow py-1 bg-green-600 hover:bg-green-800 font-bold text-white">
                SAVE
            </button>
        </div>
    </div>

</div>
