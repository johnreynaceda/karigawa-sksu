<div class="w-full">
    <div class=" w-full flex flex-col bg-gray-100">
        <div class="pt-8  px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-side">
                MONITOR
            </h2>
        </div>

        <div class="bg-green-500 flex">

            <main class="hidden  w-96  h-screen bg-gray-100 lg:block">
                <div class="max-w-7xl mx-auto lg:px-2 mt-5 ">
                    <div class="bg-white p-1 flex sticky top-5 shadow items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                        </svg>
                        <span class="text-bold ">FILTER:</span>
                        <select wire:model="filter"
                            class="h-10 w-full focus:outline-none border-none focus:ring-0 border-gray-100 text-gray-700 rounded"
                            name="" id="">
                            <option selected hidden value="null">Select Segmentation</option>
                            <option value="Age">Age</option>
                            <option value="Course">Course</option>
                            <option value="Seminars">Seminars</option>
                            <option value="Gender">Gender</option>
                            <option value="Civil Status">Civil Status</option>
                            <option value="Address">Address</option>
                            <option value="Blood Type">Blood Type</option>
                            <option value="Graduate Studies">Graduate Studies</option>
                            <option value="Civil Service/Eligibility">Civil Service/Eligibility</option>
                        </select>

                    </div>
                    <div class="mt-3 bg-white shadow p-1 ">
                        <div class="input flex w-full border px-2 items-center">
                            <input wire:model="search" type="text" placeholder="Search Faculty"
                                class="flex-1 border-0 focus:outline-none focus:ring-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-700" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>

                        <div class="mt-2 border flex items-center space-x-2 px-1 text-gray-700">
                            <label class="font-semibold" for="">CAMPUS:</label>
                            <select wire:model="campusid"
                                class="h-10 w-full focus:outline-none border-none focus:ring-0 border-gray-100 text-gray-700 rounded"
                                name="" id="">
                                <option selected hidden value="null">Select Campus</option>
                                @foreach ($campuses as $campus)
                                    <option value="{{ $campus->id }}">{{ $campus->campus_name }}</option>
                                @endforeach

                            </select>
                        </div>
                        <div class="mt-2 border flex items-center space-x-2 px-1 text-gray-700">
                            <label class="font-semibold" for="">DEPARTMENT:</label>
                            <select wire:model="departmentid"
                                class="h-10 w-full focus:outline-none border-none focus:ring-0 border-gray-100 text-gray-700 rounded"
                                name="" id="">
                                <option selected hidden value="null">Select Department</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->department_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @switch($filter)
                            @case('')

                            @break
                            @case('Age')
                                <div class="mt-2 border flex items-center space-x-2 px-1 text-gray-700">
                                    <label class="font-semibold" for="">AGE:</label>
                                    <input type="number" wire:model="age"
                                        class="w-full focus:outline-none border-none focus:ring-0">
                                </div>
                            @break
                            @case('Course')
                                <div class="mt-2 border flex items-center space-x-2 px-1 text-gray-700">
                                    <label class="font-semibold" for="">PROGRAM:</label>
                                    <select wire:model="programid"
                                        class="h-10 w-full focus:outline-none border-none focus:ring-0 border-gray-100 text-gray-700 rounded"
                                        name="" id="">
                                        <option selected hidden value="null">Select Campus</option>
                                        @foreach ($programs as $program)
                                            <option value="{{ $program->id }}">{{ $program->program_name }}</option>
                                        @endforeach

                                    </select>
                                </div>
                            @break
                            @case('Gender')
                                <div class="mt-2 border flex items-center space-x-2 px-1 text-gray-700">
                                    <label class="font-semibold" for="">GENDER:</label>
                                    <select wire:model="gender"
                                        class="h-10 w-full focus:outline-none border-none focus:ring-0 border-gray-100 text-gray-700 rounded"
                                        name="" id="">
                                        <option selected hidden value="null">Select Gender</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>


                                    </select>
                                </div>
                            @break
                            @case('Blood Type')
                                <div class="mt-2 border flex items-center space-x-2 px-1 text-gray-700">
                                    <label class="font-semibold" for="">BLOOD TYPE:</label>
                                    <select wire:model="bloodtype"
                                        class="h-10 w-full focus:outline-none border-none focus:ring-0 border-gray-100 text-gray-700 rounded"
                                        name="" id="">
                                        <option selected hidden value="null">Select Blood Type</option>
                                        <option value="Male">A+</option>
                                        <option value="Female">A-</option>
                                        <option value="Male">B+</option>
                                        <option value="Female">B-</option>
                                        <option value="Male">O+</option>
                                        <option value="Female">O-</option>
                                        <option value="Male">AB+</option>
                                        <option value="Female">AB-</option>
                                    </select>
                                </div>
                            @break
                            @default

                        @endswitch
                    </div>
                </div>
            </main>



            <aside class="flex-1 h-screen overflow-y-auto bg-gray-100 px-4 lg:px-6 border-l-2 border-gray-200  ">
                <section class="mt-5" aria-labelledby="gallery-heading">


                </section>
                @switch($filter)
                    @case('')
                        <div class="bg-white h-full flex justify-center pt-20">
                            <h1 class="text-xl font-bold text-gray-700">Please Select a Category!</h1>
                        </div>
                    @break
                    @case('Age')
                        <div class="flex justify-between items-end mt-5">
                            <h3 class="font-bold text-side uppercase  text-lg">{{ $filter }}</h3>
                            <div class="flex space-x-2">

                                <button wire:click="return"
                                    class="bg-green-500 hover:bg-green-700 p-1 px-4 font-semibold flex space-x-1 text-white">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                    </svg>
                                    <span>EXPORT DATA</span>
                                </button>
                            </div>
                        </div>
                        <div class=" border-2 mt-2 shadow overflow-hidden ">

                            <div class="flex flex-col">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                        <div class="shadow overflow-hidden border-b border-gray-200 ">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead class="bg-gray-50">
                                                    <tr>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Faculty Name
                                                        </th>
                                                        <th scope="col"
                                                            class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                            Age
                                                        </th>

                                                    </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200 ">
                                                    @forelse ($datas as $age)
                                                        <tr>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="flex items-center">
                                                                    <div class="flex-shrink-0 h-10 w-10">
                                                                        <img class="h-10 w-10 rounded-full"
                                                                            src="{{ $age->user->profile_photo_url }}"
                                                                            alt="">
                                                                    </div>
                                                                    <div class="ml-4">
                                                                        <div class="text-sm font-medium text-gray-900">
                                                                            {{ $age->user->name }}
                                                                        </div>
                                                                        <div class="text-sm text-gray-500">
                                                                            {{ $age->user->email }}
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="px-6 py-4 whitespace-nowrap">
                                                                <div class="text-sm text-gray-900">
                                                                    {{ $age->user->userinformation->age }}
                                                                </div>
                                                            </td>

                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="2"
                                                                class="px-6 py-2 text-gray-700 whitespace-nowrap">
                                                                No faculty found...
                                                            </td>
                                                        </tr>
                                                    @endforelse

                                                    <!-- More people... -->
                                                </tbody>
                                            </table>
                                            <div class="page mt-2 px-2">
                                                {{ $datas->links() }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @break
                @case('Course')
                    <div class="flex justify-between items-end mt-5">
                        <h3 class="font-bold text-side uppercase  text-lg">{{ $filter }}</h3>
                        <div class="flex space-x-2">

                            <button wire:click="return"
                                class="bg-green-500 hover:bg-green-700 p-1 px-4 font-semibold flex space-x-1 text-white">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                                <span>EXPORT DATA</span>
                            </button>
                        </div>
                    </div>
                    <div class=" border-2 mt-2 shadow overflow-hidden ">

                        <div class="flex flex-col">
                            <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 ">
                                        <table class="min-w-full divide-y divide-gray-200">
                                            <thead class="bg-gray-50">
                                                <tr>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Faculty Name
                                                    </th>
                                                    <th scope="col"
                                                        class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Course
                                                    </th>

                                                </tr>
                                            </thead>
                                            <tbody class="bg-white divide-y divide-gray-200 ">
                                                @foreach ($datas as $course)
                                                    <tr>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="flex items-center">
                                                                <div class="flex-shrink-0 h-10 w-10">
                                                                    <img class="h-10 w-10 rounded-full"
                                                                        src="{{ $course->user->profile_photo_url }}"
                                                                        alt="">
                                                                </div>
                                                                <div class="ml-4">
                                                                    <div class="text-sm font-medium text-gray-900">
                                                                        {{ $course->user->name }}
                                                                    </div>
                                                                    <div class="text-sm text-gray-500">
                                                                        {{ $course->user->email }}
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="px-6 py-4 whitespace-nowrap">
                                                            <div class="text-sm text-gray-900">
                                                                {{ $course->program->program_name }}
                                                            </div>
                                                        </td>

                                                    </tr>
                                                @endforeach

                                                <!-- More people... -->
                                            </tbody>
                                        </table>
                                        <div class="page mt-2 px-2">
                                            {{ $datas->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                @break
            @case('Gender')
                <div class="flex justify-between items-end mt-5">
                    <h3 class="font-bold text-side uppercase  text-lg">{{ $filter }}</h3>
                    <div class="flex space-x-2">

                        <button wire:click="return"
                            class="bg-green-500 hover:bg-green-700 p-1 px-4 font-semibold flex space-x-1 text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                            <span>EXPORT DATA</span>
                        </button>
                    </div>
                </div>
                <div class=" border-2 mt-2 shadow overflow-hidden ">

                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 ">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Faculty Name
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Gender
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200 ">
                                            @foreach ($datas as $gender)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="flex items-center">
                                                            <div class="flex-shrink-0 h-10 w-10">
                                                                <img class="h-10 w-10 rounded-full"
                                                                    src="{{ $gender->user->profile_photo_url }}"
                                                                    alt="">
                                                            </div>
                                                            <div class="ml-4">
                                                                <div class="text-sm font-medium text-gray-900">
                                                                    {{ $gender->user->name }}
                                                                </div>
                                                                <div class="text-sm text-gray-500">
                                                                    {{ $gender->user->email }}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900">
                                                            {{ $gender->user->userinformation->sex }}
                                                        </div>
                                                    </td>

                                                </tr>
                                            @endforeach

                                            <!-- More people... -->
                                        </tbody>
                                    </table>
                                    <div class="page mt-2 px-2">
                                        {{ $datas->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            @break
        @case('Blood Type')
            <div class="flex justify-between items-end mt-5">
                <h3 class="font-bold text-side uppercase  text-lg">{{ $filter }}</h3>
                <div class="flex space-x-2">

                    <button wire:click="return"
                        class="bg-green-500 hover:bg-green-700 p-1 px-4 font-semibold flex space-x-1 text-white">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                        </svg>
                        <span>EXPORT DATA</span>
                    </button>
                </div>
            </div>
            <div class=" border-2 mt-2 shadow overflow-hidden ">

                <div class="flex flex-col">
                    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                        <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                            <div class="shadow overflow-hidden border-b border-gray-200 ">
                                <table class="min-w-full divide-y divide-gray-200">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Faculty Name
                                            </th>
                                            <th scope="col"
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Blood Type
                                            </th>

                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200 ">
                                        @foreach ($datas as $bloodtype)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div class="flex-shrink-0 h-10 w-10">
                                                            <img class="h-10 w-10 rounded-full"
                                                                src="{{ $bloodtype->user->profile_photo_url }}"
                                                                alt="">
                                                        </div>
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                {{ $bloodtype->user->name }}
                                                            </div>
                                                            <div class="text-sm text-gray-500">
                                                                {{ $bloodtype->user->email }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">
                                                        {{ $bloodtype->user->userinformation->blood_type }}
                                                    </div>
                                                </td>

                                            </tr>
                                        @endforeach

                                        <!-- More people... -->
                                    </tbody>
                                </table>
                                <div class="page mt-2 px-2">
                                    {{ $datas->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        @break
        @default

    @endswitch

</div>
<div class="mt-2">

</div>






</aside>

</div>
</div>
</div>
