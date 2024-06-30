<div class="flex items-center ">
    <div class="flex w-[266px] h-screen  flex-col bg-[#1F2125]">
    <div class="flex items-center gap-3 p-5">
        <div class="flex-1 px-2">
        <img
            class="w-24 translate-x-5 scale-[1.8]"
            src="{{ asset('assets/images/logo.png') }}"
        />
        </div>

    </div>
    <div class="h-full flex-1 overflow-y-auto">
        <nav aria-label="Sidebar">
        <div
            class="relative w-full items-center text-xs">
            <a
                class="relative block flex-1 cursor-pointer text-white px-5 py-2 hover:bg-[#093C65]"
                [routerLink]="mainMenu.route"
                routerLinkActive="[&>.indicator]:block  bg-[#093C65]">
                <div>Dashboard</div>
                <span
                class="indicator absolute left-0 top-0 hidden h-full w-2 bg-[#085592]"></span>
            </a>
        </div>
        </nav>
    </div>

    <div class="text-white px-4 text-xs py-3">
        <p class="block text-center ">
        ©2024 Soundwave Administration System
        </p>
        <p class="block text-center ">Design and Developed by IF2C</p>
    </div>
    </div>

    <div class="flex-1 p-4 text-white bg-[#161819] h-screen">
        <p>Ini Header</p>
    </div>
</div>
