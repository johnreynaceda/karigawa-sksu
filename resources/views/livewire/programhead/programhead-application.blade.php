  <div class="w-full">
      <div wire:loading class="bg-white fixed inset-0 z-50 bg-opacity-0">
          <div class=" h-full w-full flex cursor-wait items-center justify-center">

          </div>
      </div>
      <div class=" w-full flex flex-col bg-gray-100">
          <div class="pt-8  px-4 sm:px-6 lg:px-8">
              <h2 class="text-2xl font-bold text-side">
                  APPLICATION
              </h2>
          </div>
          <div class="pt-3 mb-1  lg:mx-5  px-4 sm:px-6 lg:px-8 relative">
              <h2
                  class="lg:text-2xl text-lg bg-white relative p-3 rounded border-2 flex items-center font-semibold uppercase text-side">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 hidden lg:block" fill="none" viewBox="0 0 24 24"
                      stroke="currentColor">
                      <path d="M12 14l9-5-9-5-9 5 9 5z" />
                      <path
                          d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
                  </svg>
                  <span>{{ auth()->user()->designations->where('designation_type_id', 4)->first()->program->program_name }}</span>
                  <div class="absolute bg-green-500 top-0 left-0 w-2 h-full rounded-tl rounded-bl"></div>
              </h2>

          </div>
          <div class="bg-green-500 flex">

              <main class="hidden  w-96  h-screen bg-gray-100 lg:block">
                  <div class="max-w-7xl mx-auto lg:px-2 mt-5 ">
                      <div class="bg-white p-1 flex sticky top-5 items-center space-x-1">
                          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                              stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                          </svg>
                          <span class="text-bold ">FILTER:</span>
                          <select wire:model="filter" class="h-10 w-full border-gray-100  rounded" name="" id="">
                              <option value="0">UNSUBMIT</option>
                              <option value="1">SUBMITTED</option>
                          </select>

                      </div>
                      <div class="bg-white border-2 mt-2 p-1 flex flex-col space-x-1">
                          <div class="input flex w-full px-2 border rounded shadow items-center">
                              <input wire:model="search" type="text" placeholder="Search Faculty"
                                  class="flex-1 border-0 focus:outline-none focus:ring-0">
                              <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                  viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                              </svg>
                          </div>
                          <div class="users">
                              <div class="">
                                  <div class=" flow-root mt-2 ">
                                      <ul role=" list" class="-my-5  divide-y divide-gray-200">
                                  @forelse ($facultys as $faculty)
                                      <li class="py-4">
                                          <div class="flex items-center space-x-4  py-2 ">
                                              <div class="flex-shrink-0">
                                                  <img class="h-8 w-8 rounded-full"
                                                      src="{{ $faculty->user->profile_photo_url }}" alt="">
                                              </div>
                                              <div class="flex-1 flex flex-col  min-w-0">
                                                  <span class="text-sm font-medium text-gray-900 truncate">
                                                      {{ $faculty->user->name }}
                                                  </span>
                                                  <span class="text-sm   text-gray-500 truncate">
                                                      @switch($faculty->user->awaStatus)
                                                          @case(0)
                                                              <span
                                                                  class="bg-yellow-100 text-xs text-side px-2 rounded-full border border-green-500">
                                                                  UNSUBMIT</span>
                                                          @break
                                                          @case(1)
                                                              <span
                                                                  class="bg-yellow-100 text-xs text-side px-2 rounded-full border border-green-500">
                                                                  SUBMITTED</span>
                                                          @break
                                                          @case(2)
                                                              <span
                                                                  class="bg-yellow-100 text-xs text-side px-2 rounded-full border border-green-500">
                                                                  APPROVED</span>
                                                          @break
                                                          @case(3)
                                                              <span
                                                                  class="bg-yellow-100 text-xs text-side px-2 rounded-full border border-green-500">
                                                                  RETURNED</span>
                                                          @break
                                                          @default

                                                      @endswitch
                                                  </span>
                                              </div>
                                              <div>
                                                  <a wire:click="viewfaculty({{ $faculty->id }})"
                                                      class="inline-flex cursor-pointer items-center shadow-sm px-2.5 py-0.5 border border-gray-300 text-sm leading-5 font-medium rounded-full text-gray-700 bg-white hover:bg-gray-50">
                                                      View
                                                  </a>
                                              </div>
                                          </div>
                                      </li>
                                      @empty
                                          <li class="py-4">
                                              <div class="text-center mb-2">
                                                  <h1 class="flex items-end space-x-1 text-side justify-center pt-2">
                                                      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                          fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                          <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                      </svg>
                                                      <span> No {{ $this->search }} Found..
                                                      </span>
                                                  </h1>

                                              </div>
                                          </li>
                                      @endforelse

                                      </ul>

                                  </div>

                              </div>

                          </div>

                      </div>
                      <div class="mt-1">
                          {{ $facultys->links() }}
                      </div>
              </div>
              </main>


              @if ($userid == null)
                  <div class="flex-1 bg-gray-100 px-1">

                      <div class="bg-white h-full flex justify-center pt-40">
                          <img src="{{ asset('images/HR.jpg') }}" class="h-40" alt="">
                      </div>
                  </div>
              @else
                  <aside class="flex-1 h-screen bg-gray-100 px-4 lg:px-6 border-l-2 border-gray-200  ">
                      <section class="mt-5" aria-labelledby="gallery-heading">
                          <div class="flex justify-between bg-white relative p-2 lg:px-5 rounded shadow items-center">

                              <div class="user flex  space-x-5">
                                  <div class="flex-shrink-0">
                                      <div class="relative">
                                          <img class="h-16 w-16 rounded-full" src="{{ $users->profile_photo_url }}"
                                              alt="">
                                          <span class="absolute inset-0 shadow-inner rounded-full"
                                              aria-hidden="true"></span>
                                      </div>
                                  </div>
                                  <div>
                                      <h1 class="text-2xl font-bold flex space-x-1 items-center text-gray-800">
                                          <span>{{ $users->name }}</span>
                                      </h1>
                                      <span class="flex items-center text-gray-600">
                                          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                              fill="currentColor">
                                              <path
                                                  d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z" />
                                          </svg>
                                          <span>{{ $users->designations->where('designation_type_id', 5)->first()->program->program_name }}</span>
                                      </span>
                                  </div>
                              </div>
                              <div class="status   hidden lg:block">
                                  @if ($status->awaStatus == 0)
                                      <div class="bg-yellow-200 mr-3 px-3 shadow text-side font-semibold rounded-full">
                                          UNSUBMIT
                                      </div>
                                  @elseif($status->awaStatus == 1)
                                      <div class="bg-yellow-200 mr-3 px-3 shadow text-side font-semibold rounded-full">
                                          NONE
                                      </div>
                                  @elseif($status->awaStatus == 2)
                                      <div class="bg-yellow-200 mr-3 px-3 shadow text-side font-semibold rounded-full">
                                          APPROVED
                                      </div>
                                  @elseif($status->awaStatus == 3)
                                      <div class="bg-yellow-200 mr-3 px-3 shadow text-side font-semibold rounded-full">
                                          RETURNED
                                      </div>
                                  @endif
                              </div>
                              <div class="absolute top-0 right-0 bg-green-500 w-4 rounded-tr rounded-br h-full"></div>
                          </div>

                      </section>

                      <div class="flex justify-between items-end mt-5">
                          <h3 class="font-bold text-side  text-lg">AWA TASK</h3>
                          <div class="flex space-x-2">
                              <button wire:click="approve"
                                  class="bg-green-500 hover:bg-green-700 p-1 px-4 font-semibold text-white">
                                  APPROVE
                              </button>
                              <button wire:click="return"
                                  class="bg-red-500 hover:bg-red-700 p-1 px-4 font-semibold text-white">
                                  RETURN
                              </button>
                          </div>
                      </div>
                      <div class="bg-white border-2 mt-2 shadow overflow-hidden ">
                          <ul role=" list" class="divide-y divide-gray-200">
                              @forelse ($users->tasks as $task)
                                  <div class="relative ">

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

                      </div>






                  </aside>

              @endif
          </div>
      </div>
      </div>
