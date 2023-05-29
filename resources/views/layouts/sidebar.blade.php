<nav class="absolute inset-0 transform lg:transform-none lg:opacity-100 duration-200 lg:relative w-56 bg-stone-50 text-gray-700 h-screen p-3 text-base border-r-2 border-r-stone-200"
    :class="{ 'translate-x-0 ease-in opacity-100': open === true, '-translate-x-full ease-out opacity-0': open === false }">
    <div class="flex justify-between">
        <div class="dropdown  w-full relative">
            <div tabindex="0" class="cursor-pointer m-1 btn btn-ghost w-full justify-between ">
                <span class="font-normal w-24 lg:w-auto truncate">Prabhul's Team</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
              </svg>
            </div>
            <div class="dropdown-content menu p-2 shadow-lg bg-base-100 text-gray-600 rounded-box w-64 max-w-screen-sm">
                <div class="text-xs text-gray-500 p-2">Switch To</div>
                <ul tabindex="0">
                    <li class="mb-1"><a>ACME Company Space</a></li>
                    <li class="mb-1 mt-2"><a class="btn btn-primary w-fit mx-auto" style="border-radius:50px;"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Create Team</a></li>
                </ul>
            </div>
        </div>
        <button class=" z-10 p-1 px-4 -mr-10 focus:outline-none border border-stone-300 bg-stone-50 focus:bg-stone-200 hover:bg-stone-200 rounded-full shadow-lg  lg:hidden"
            @click="open = false">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
    </div>
    <ul class="mt-4">
        <li>
            <a href="#" class="menu-sidebar">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
              </svg>
              <span>Dashboard</span>
            </a>
            <a href="#" class="menu-sidebar">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.393A9.065 9.065 0 0112 15a9.065 9.065 0 00-6.23-.693L5 14.5m14.8.8l1.402 1.402c1.232 1.232.65 3.318-1.067 3.611A48.309 48.309 0 0112 21c-2.773 0-5.491-.235-8.135-.687-1.718-.293-2.3-2.379-1.067-3.61L5 14.5" />
                  </svg>
                  
                <span>Survey</span>
            </a>
            <div class="text-center mt-4">
                <a href="#" class="btn btn-outline">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 mr-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>                      
                    <span>Add Tool</span>
                </a>
            </div>
        </li>
    </ul>
</nav>
