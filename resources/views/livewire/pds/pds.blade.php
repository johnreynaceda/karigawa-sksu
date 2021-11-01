 <div class="flex w-full" x-data="{steps: @entangle('steps')}">
     <main class=" overflow-y-auto h-screen bg-white">
         <div class=" hidden lg:block  w-80 pt-8 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
             <div class="flex">
                 <h1 class="flex-1 text-2xl font-bold text-side">Personal Data Sheet</h1>
                 {{-- <h1>{{ $steps }}</h1> --}}
             </div>


             <!-- Gallery -->
             <section class="mt-5" aria-labelledby="gallery-heading">
                 <nav aria-label="Progress">
                     <ol role="list" class="overflow-hidden">
                         <li @click="steps = 'personal'" class="relative pb-5">
                             <div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-gray-300 "
                                 aria-hidden="true">
                             </div>
                             <!-- Upcoming Step -->
                             <a href="#" class="relative flex items-start  group">
                                 <span class="h-9 flex items-center" aria-hidden="true">
                                     <span
                                         class="relative z-10 w-8 h-8 flex items-center justify-center  bg-white border-2 {{ $steps == 'personal' ? 'border-indigo-600' : 'border-gray-300' }} rounded-full group-hover:border-gray-400">
                                         <span
                                             class="h-2.5 w-2.5  rounded-full  {{ $steps == 'personal' ? 'bg-indigo-600' : '' }} group-hover:bg-gray-300"></span>
                                     </span>
                                 </span>
                                 <span class="ml-4 min-w-0 flex flex-col">
                                     <span
                                         class="text-xs mt-2 font-semibold tracking-wide uppercase {{ $steps == 'personal' ? 'text-indigo-600' : 'text-gray-500' }}">Personal
                                         Information</span>
                                 </span>
                             </a>
                         </li>
                         <li @click="steps = 'family'" class="relative pb-5">
                             <div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-gray-300 "
                                 aria-hidden="true">
                             </div>
                             <!-- Upcoming Step -->
                             <a href="#" class="relative flex items-start  group">
                                 <span class="h-9 flex items-center" aria-hidden="true">
                                     <span
                                         class="relative z-10 w-8 h-8 flex items-center justify-center  bg-white border-2 {{ $steps == 'family' ? 'border-indigo-600' : 'border-gray-300' }} rounded-full group-hover:border-gray-400">
                                         <span
                                             class="h-2.5 w-2.5  rounded-full {{ $steps == 'family' ? 'bg-indigo-600' : '' }}   group-hover:bg-gray-300"></span>
                                     </span>
                                 </span>
                                 <span class="ml-4 min-w-0 flex flex-col">
                                     <span
                                         class="text-xs mt-2 font-semibold tracking-wide uppercase {{ $steps == 'family' ? 'text-indigo-600' : 'text-gray-500' }}">Family
                                         Background</span>
                                 </span>
                             </a>
                         </li>
                         <li @click="steps = 'educational'" class="relative pb-5">
                             <div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-gray-300"
                                 aria-hidden="true">
                             </div>
                             <!-- Upcoming Step -->
                             <a href="#" class="relative flex items-start group">
                                 <span class="h-9 flex items-center" aria-hidden="true">
                                     <span
                                         class="relative z-10 w-8 h-8 flex items-center justify-center bg-white border-2 {{ $steps == 'educational' ? 'border-indigo-600' : 'border-gray-300' }} rounded-full group-hover:border-gray-400">
                                         <span
                                             class="h-2.5 w-2.5 rounded-full {{ $steps == 'educational' ? 'bg-indigo-600' : '' }} group-hover:bg-gray-300"></span>
                                     </span>
                                 </span>
                                 <span class="ml-4 min-w-0 flex flex-col">
                                     <span
                                         class="text-xs mt-2 font-semibold tracking-wide uppercase {{ $steps == 'educational' ? 'text-indigo-600' : 'text-gray-500' }}">Educational
                                         Background</span>
                                 </span>
                             </a>
                         </li>
                         <li @click="steps = 'civil'" class="relative pb-5">
                             <div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-gray-300"
                                 aria-hidden="true">
                             </div>
                             <!-- Upcoming Step -->
                             <a href="#" class="relative flex items-start group">
                                 <span class="h-9 flex items-center" aria-hidden="true">
                                     <span
                                         class="relative z-10 w-8 h-8 flex items-center justify-center bg-white border-2 {{ $steps == 'civil' ? 'border-indigo-600' : 'border-gray-300' }} rounded-full group-hover:border-gray-400">
                                         <span
                                             class="h-2.5 w-2.5 rounded-full {{ $steps == 'civil' ? 'bg-indigo-600' : '' }} group-hover:bg-gray-300"></span>
                                     </span>
                                 </span>
                                 <span class="ml-4 min-w-0 flex flex-col">
                                     <span
                                         class="text-xs mt-2 font-semibold tracking-wide uppercase {{ $steps == 'civil' ? 'text-indigo-600' : 'text-gray-500' }}">Civil
                                         Service Eligibility</span>
                                 </span>
                             </a>
                         </li>
                         <li @click="steps = 'work'" class="relative pb-5">
                             <div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-gray-300"
                                 aria-hidden="true">
                             </div>
                             <!-- Upcoming Step -->
                             <a href="#" class="relative flex items-start group">
                                 <span class="h-9 flex items-center" aria-hidden="true">
                                     <span
                                         class="relative z-10 w-8 h-8 flex items-center justify-center bg-white border-2 {{ $steps == 'work' ? 'border-indigo-600' : 'border-gray-300' }} rounded-full group-hover:border-gray-400">
                                         <span
                                             class="h-2.5 w-2.5  {{ $steps == 'work' ? 'bg-indigo-600' : '' }} rounded-full group-hover:bg-gray-300"></span>
                                     </span>
                                 </span>
                                 <span class="ml-4 min-w-0 flex flex-col">
                                     <span
                                         class="text-xs mt-2 font-semibold tracking-wide uppercase {{ $steps == 'work' ? 'text-indigo-600' : 'text-gray-500' }}">Work
                                         Experience</span>
                                 </span>
                             </a>
                         </li>
                         <li @click="steps = 'voluntary'" class="relative pb-5">
                             <div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-gray-300"
                                 aria-hidden="true">
                             </div>
                             <!-- Upcoming Step -->
                             <a href="#" class="relative flex items-start group">
                                 <span class="h-9 flex items-center" aria-hidden="true">
                                     <span
                                         class="relative z-10 w-8 h-8 flex items-center justify-center bg-white border-2 {{ $steps == 'voluntary' ? 'border-indigo-600' : 'border-gray-300' }} rounded-full group-hover:border-gray-400">
                                         <span
                                             class="h-2.5 w-2.5 {{ $steps == 'voluntary' ? 'bg-indigo-600' : '' }} rounded-full group-hover:bg-gray-300"></span>
                                     </span>
                                 </span>
                                 <span class="ml-4 min-w-0 flex flex-col">
                                     <p
                                         class="text-xs mt-2 font-semibold tracking-wide uppercase {{ $steps == 'voluntary' ? 'text-indigo-600' : 'text-gray-500' }}">
                                         VOLUNTARY
                                         WORK OR INVOLVEMENT IN CIVIC / NON-GOVERNMENT / PEOPLE / VOLUNTARY
                                         ORGANIZATION/S</p>
                                 </span>
                             </a>
                         </li>
                         <li @click="steps = 'learning'" class="relative pb-5">
                             <div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-gray-300"
                                 aria-hidden="true">
                             </div>
                             <!-- Upcoming Step -->
                             <a href="#" class="relative flex items-start group">
                                 <span class="h-9 flex items-center" aria-hidden="true">
                                     <span
                                         class="relative z-10 w-8 h-8 flex items-center justify-center bg-white border-2 {{ $steps == 'learning' ? 'border-indigo-600' : 'border-gray-300' }} rounded-full group-hover:border-gray-400">
                                         <span
                                             class="h-2.5 w-2.5 {{ $steps == 'learning' ? 'bg-indigo-600' : '' }} rounded-full group-hover:bg-gray-300"></span>
                                     </span>
                                 </span>
                                 <span class="ml-4 min-w-0 flex flex-col">
                                     <span
                                         class="text-xs mt-2 font-semibold tracking-wide uppercase {{ $steps == 'learning' ? 'text-indigo-600' : 'text-gray-500' }}">LEARNING
                                         AND DEVELOPMENT (L&D) INTERVENTIONS/TRAINING PROGRAMS ATTENDED</span>
                                 </span>
                             </a>
                         </li>
                         <li @click="steps = 'other'" class="relative pb-5">
                             <div class="-ml-px absolute mt-0.5 top-4 left-4 w-0.5 h-full bg-gray-300"
                                 aria-hidden="true">
                             </div>
                             <!-- Upcoming Step -->
                             <a href="#" class="relative flex items-start group">
                                 <span class="h-9 flex items-center" aria-hidden="true">
                                     <span
                                         class="relative z-10 w-8 h-8 flex items-center justify-center bg-white border-2 {{ $steps == 'other' ? 'border-indigo-600' : 'border-gray-300' }} rounded-full group-hover:border-gray-400">
                                         <span
                                             class="h-2.5 w-2.5 {{ $steps == 'other' ? 'bg-indigo-600' : '' }} rounded-full group-hover:bg-gray-300"></span>
                                     </span>
                                 </span>
                                 <span class="ml-4 min-w-0 flex flex-col">
                                     <span
                                         class="text-xs mt-2 font-semibold tracking-wide uppercase {{ $steps == 'other' ? 'text-indigo-600' : 'text-gray-500' }}">Other
                                         Information</span>
                                 </span>
                             </a>
                         </li>



                         <li @click="steps = 'help'" class="relative">
                             <!-- Upcoming Step -->
                             <a href="#" class="relative flex items-start group">
                                 <span class="h-9 flex items-center" aria-hidden="true">
                                     <span
                                         class="relative z-10 w-8 h-8 flex items-center justify-center bg-white border-2 {{ $steps == 'help' ? 'border-indigo-600' : 'border-gray-300' }} rounded-full group-hover:border-gray-400">
                                         <span
                                             class="h-2.5 w-2.5 {{ $steps == 'help' ? 'bg-indigo-600' : '' }} rounded-full group-hover:bg-gray-300"></span>
                                     </span>
                                 </span>
                                 <span class="ml-4 min-w-0 flex flex-col">
                                     <span
                                         class="text-xs font-semibold tracking-wide uppercase mt-2 {{ $steps == 'help' ? 'text-indigo-600' : 'text-gray-500' }}">Help</span>
                                 </span>
                             </a>
                         </li>
                     </ol>
                 </nav>
             </section>

         </div>
     </main>

     <aside class=" w-80 flex-1 h-screen p-2 lg:p-4 bg-gray-100  border-l border-gray-200 overflow-y-auto lg:block">

         <div class="bg-white border-2 mb-20  border-side p-2">
             <h1 class="text-center font-black uppercase text-xl">PERSONAL DATA SHEET</h1>
             <p class="italic text-xs w-full lg:text-sm mt-2"><span class="font-bold">WARNING:</span> Any
                 misinterpretation
                 made in the
                 Personal Data Sheet and the Work Experience Sheet shall cause the filing of administrative/criminal
                 case/s
                 against the person concerned.</p>
             <p class="italic uppercase text-sm font-bold mt-1">READ THE ATTACHED GUIDE TO FILLING OUT THE PERSONAL DATA
                 SHEET (PDS)
                 BEFORE ACCOMPLISHING THE PDS FORM.</p>
             <p class="text-xs">Print legibly. Tick appropriate boxes ( ☐ ) and use separate sheet if necessary.
                 Indicate N/A if not applicable. <span class="font-bold">DO NOT ABBREVIATE.</span></p>

             <div x-show="steps == 'personal'" x-cloak x-transition>
                 @livewire('personal')
             </div>
             <div x-show="steps == 'family'" x-cloak x-transition>
                 @livewire('family')
             </div>
             <div x-show="steps == 'educational'" x-cloak x-transition>
                 @livewire('educational')
             </div>
             <div x-show="steps == 'civil'" x-cloak x-transition>
                 @livewire('civil-service')
             </div>
             <div x-show="steps == 'work'" x-cloak x-transition>
                 @livewire('work-experience')
             </div>
             <div x-show="steps == 'voluntary'" x-cloak x-transition>
                 @livewire('voluntary')
             </div>
             <div x-show="steps == 'learning'" x-cloak x-transition>
                 @livewire('learning')
             </div>

             <div x-show="steps == 'other'" x-cloak x-transition>
                 @livewire('other-information')
             </div>
             <div x-show="steps == 'help'" x-cloak x-transition>
                 @livewire('help')
             </div>


         </div>

     </aside>
 </div>
