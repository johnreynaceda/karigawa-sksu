<div class="flex flex-col w-64 border-r relative border-gray-200  bg-side">
    <div class="absolute flex items-center justify-center h-full w-full">
        <img src="{{ asset('images/logo.png') }}" class="opacity-30 h-56" alt="">
    </div>
    <div class="flex items-center justify-center h-16 bg-white flex-shrink-0">
        <img class="h-14 w-auto" src="{{ asset('images/HR.jpg') }}" alt="Workflow">
    </div>
    <!-- Sidebar component, swap this element with another sidebar if you like -->
    <div class="h-0 flex-1 flex flex-col relative  pb-4 overflow-y-auto">
        <!-- User account dropdown -->
        <div class="px-3 mt-6 relative inline-block text-left" x-data="{user:false}">
            <div>
                <button @click="user = !user" type="button"
                    class="group w-full bg-white rounded-md px-3.5 py-3 text-sm text-left font-medium text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-100 focus:ring-purple-500"
                    id="options-menu-button" aria-expanded="false" aria-haspopup="true">
                    <span class="flex w-full justify-between items-center">
                        <span class="flex min-w-0 items-center justify-between space-x-3">
                            <img class="w-10 h-10 bg-gray-300 ring-gray-700 rounded-full flex-shrink-0"
                                src="{{ auth()->user()->profile_photo_url }}" alt="">
                            <span class="flex-1 flex flex-col min-w-0">
                                <span
                                    class="text-gray-900 text-sm font-medium truncate">{{ auth()->user()->name }}</span>
                                <span class="text-gray-500 text-sm truncate">@sksu.edu.ph</span>
                            </span>
                        </span>
                        <!-- Heroicon name: solid/selector -->
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                            aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
            </div>

            <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->

            <div x-cloak x-show="user"
                class="z-10 mx-3 origin-top absolute right-0 left-0 mt-1 rounded-md  bg-white focus:outline-none"
                role="menu" aria-orientation="vertical" aria-labelledby="options-menu-button" tabindex="-1">
                <div class="py-1" role="none">

                    <a href="#" class="text-gray-700 hover:font-bold block px-4 py-2 text-sm" role="menuitem"
                        tabindex="-1" id="options-menu-item-1">Settings</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault();
                            this.closest('form').submit();"
                            class="text-gray-700 hover:font-bold block px-4 py-2 text-sm" role="menuitem" tabindex="-1"
                            id="options-menu-item-5">Logout</a>
                    </form>
                </div>


            </div>
        </div>
        <!-- Sidebar Search -->

        <!-- Navigation -->
        <nav class="px-3 mt-6 text-white">
            <div class="mt-2">
                <!-- Secondary navigation -->
                <h3 class="px-3 text-xs font-semibold text-white uppercase tracking-wider" id="desktop-teams-headline">
                    @switch(session('role'))
                        @case(1)
                            VPAA
                        @break
                        @case(2)
                            CAMPUS DIRECTOR
                        @break
                        @case(3)
                            DEAN
                        @break
                        @case(4)
                            PROGRAM HEAD
                        @break
                        @case(5)
                            FACULTY
                        @break
                        @case(6)
                            HUMAN RESOURCE
                        @break
                        @default

                    @endswitch
                </h3>

                @switch(session('role'))
                    @case(1)
                        VPAA
                    @break
                    @case(2)
                        CAMPUS DIRECTOR
                    @break
                    @case(3)
                        DEAN
                    @break
                    @case(4)
                        <div class="mt-2 space-y-1" role="group" aria-labelledby="desktop-teams-headline">
                            <a href="{{ route('faculty-dashboard') }}"
                                class="{{ Request::routeIs('programhead-dashboard') ? 'bg-gray-50 bg-opacity-90 text-side' : '' }} group flex items-end px-3 py-2 space-x-2  text-sm font-bold text-white rounded-md hover:text-side hover:bg-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                                <span class="truncate">
                                    DASHBOARD
                                </span>
                            </a>
                            <a href="{{ route('programhead-application') }}"
                                class="{{ Request::routeIs('programhead-application') ? 'bg-gray-50 bg-opacity-90 text-side' : '' }} group flex items-end px-3 py-2 space-x-2  text-sm font-bold text-white rounded-md hover:text-side hover:bg-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="truncate">
                                    APPLICATION
                                </span>
                            </a>


                        </div>
                    @break
                    @case(5)
                        <div class="mt-2 space-y-1" role="group" aria-labelledby="desktop-teams-headline">
                            <a href="{{ route('faculty-dashboard') }}"
                                class="{{ Request::routeIs('faculty-dashboard') ? 'bg-gray-50 bg-opacity-90 text-side' : '' }} group flex items-end px-3 py-2 space-x-2  text-sm font-bold text-white rounded-md hover:text-side hover:bg-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                                <span class="truncate">
                                    DASHBOARD
                                </span>
                            </a>
                            <a href="{{ route('faculty-application') }}"
                                class="{{ Request::routeIs('faculty-application') ? 'bg-gray-50 bg-opacity-90 text-side' : '' }} group flex items-end px-3 py-2 space-x-2  text-sm font-bold text-white rounded-md hover:text-side hover:bg-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="truncate">
                                    AWA APPLICATION
                                </span>
                            </a>
                            <a href="#"
                                class="group flex items-end px-3 py-2 space-x-2  text-sm font-bold text-white rounded-md hover:text-side hover:bg-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z" />
                                </svg>
                                <span class="truncate">
                                    REQUEST
                                </span>
                            </a>
                            <a href="{{ route('faculty-pds') }}"
                                class="{{ Request::routeIs('faculty-pds') ? 'bg-gray-50 bg-opacity-90 text-side' : '' }} group flex items-end px-3 py-2 space-x-2  text-sm font-bold text-white rounded-md hover:text-side hover:bg-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="truncate">
                                    PERSONAL DATA SHEET
                                </span>
                            </a>
                            <a href="#"
                                class="group flex items-end px-3 py-2 space-x-2  text-sm font-bold text-white rounded-md hover:text-side hover:bg-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="truncate">
                                    SAL-N
                                </span>
                            </a>
                        </div>
                    @break
                    @case(6)
                        <div class="mt-2 space-y-1" role="group" aria-labelledby="desktop-teams-headline">
                            <a href="#"
                                class="{{ Request::routeIs('hr-dashboard') ? 'bg-gray-50 bg-opacity-90 text-side' : '' }} group flex items-end px-3 py-2 space-x-2  text-sm font-bold text-white rounded-md hover:text-side hover:bg-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                                </svg>
                                <span class="truncate">
                                    DASHBOARD
                                </span>
                            </a>
                            <a href="{{ route('hr-monitor') }}"
                                class="{{ Request::routeIs('hr-monitor') ? 'bg-gray-50 bg-opacity-90 text-side' : '' }} group flex items-end px-3 py-2 space-x-2  text-sm font-bold text-white rounded-md hover:text-side hover:bg-gray-50">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M5 3a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2V5a2 2 0 00-2-2H5zm9 4a1 1 0 10-2 0v6a1 1 0 102 0V7zm-3 2a1 1 0 10-2 0v4a1 1 0 102 0V9zm-3 3a1 1 0 10-2 0v1a1 1 0 102 0v-1z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="truncate">
                                    MONITOR
                                </span>
                            </a>

                        </div>
                    @break
                    @default

                @endswitch
            </div>
        </nav>
    </div>
</div>
