<div class="w-64 h-full group/toggle-button" x-show="sidebar">
    <div class="flex flex-col h-full divide-y">
        <div class="h-12 flex items-center relative">
            <button class="absolute -right-2 w-4 h-4 bg-secondary hidden hover:bg-accent group-hover/toggle-button:block rounded-sm" x-on:click="toggleSidebar"></button>
        </div>
        <div class="flex-1 overflow-y-auto scrollable">
            <nav class="flex flex-col h-full text-sm">
                <ul class="flex-1 space-y-1 my-2">
                    <li class="px-4">
                        <a href="#">
                            <div class="flex items-center gap-1.5 rounded-md px-3 py-1.5 hover:bg-zinc-100">
                                <span class="w-6 h-6 rounded-sm bg-secondary"></span>
                                <span>Menu</span>
                            </div>
                        </a>
                    </li>
                    <li class="space-y-1 px-4" x-data="{ dropdown: false, toggleDropdownMenu() { this.dropdown = !this.dropdown } }">
                        <div class="flex items-center justify-between rounded-md cursor-pointer px-3 py-1.5 hover:bg-zinc-100 group/dropdown-menu-1" x-on:click="toggleDropdownMenu">
                            <div class="flex items-center gap-1.5">
                                <span
                                    class="w-6 h-6 rounded-sm bg-secondary"
                                ></span>
                                <span>Dropdown Menu 1</span>
                            </div>
                            <span class="w-4 h-4 rounded-sm bg-secondary hidden group-hover/dropdown-menu-1:block"></span>
                        </div>
                        <ul class="space-y-1" x-show="dropdown">
                            <li>
                                <a href="#">
                                    <div class="flex items-center gap-1.5 rounded-md px-3 py-1.5 hover:bg-zinc-100">
                                        <span class="w-6 h-6 invisible"></span>
                                        <span>Sub Menu 1</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="flex items-center gap-1.5 rounded-md px-3 py-1.5 hover:bg-zinc-100">
                                        <span class="w-6 h-6 invisible"></span>
                                        <span>Sub Menu 2</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="space-y-1 px-4" x-data="{ dropdown: false, toggleDropdownMenu() { this.dropdown = !this.dropdown } }">
                        <div class="flex items-center justify-between rounded-md cursor-pointer px-3 py-1.5 hover:bg-zinc-100 group/dropdown-menu-2" x-on:click="toggleDropdownMenu">
                            <div class="flex items-center gap-1.5">
                                <span
                                    class="w-6 h-6 rounded-sm bg-secondary"
                                ></span>
                                <span>Dropdown Menu 2</span>
                            </div>
                            <span class="w-4 h-4 rounded-sm bg-secondary hidden group-hover/dropdown-menu-2:block"></span>
                        </div>
                        <ul class="space-y-1" x-show="dropdown">
                            <li x-data="{ dropdown: false, toggleDropdownMenu() { this.dropdown = !this.dropdown } }">
                                <div class="flex items-center justify-between rounded-md cursor-pointer px-3 py-1.5 hover:bg-zinc-100 group/dropdown-menu-3" x-on:click="toggleDropdownMenu">
                                    <div class="flex items-center gap-1.5">
                                        <span class="w-6 h-6 invisible"></span>
                                        <span>Dropdown Sub Menu</span>
                                    </div>
                                    
                                    <span class="w-4 h-4 rounded-sm bg-secondary hidden group-hover/dropdown-menu-3:block"></span>
                                </div>
                                <ul class="space-y-1" x-show="dropdown">
                                    <li>
                                        <a href="#">
                                            <div class="flex items-center gap-1.5 rounded-md px-3 py-1.5 hover:bg-zinc-100">
                                                <span class="w-6 h-6 invisible"></span>
                                                <span>Sub Menu 1</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="flex items-center gap-1.5 rounded-md px-3 py-1.5 hover:bg-zinc-100">
                                                <span class="w-6 h-6 invisible"></span>
                                                <span>Sub Menu 2</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>

                <ul class="space-y-1 my-2">
                    <li class="px-4">
                        <a href="#">
                            <div class="flex items-center gap-1.5 rounded-md px-3 py-1.5 hover:bg-zinc-100">
                                <span class="w-6 h-6 rounded-sm bg-secondary"></span>
                                <span>Menu</span>
                            </div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>