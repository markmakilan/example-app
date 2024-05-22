<nav class="flex flex-col h-full text-sm">
    <ul class="flex-1 space-y-1 my-2">
        <li class="px-4">
            <a href="/admin/dashboard" wire:navigate>
                <div @class(['flex items-center gap-1.5 rounded px-3 py-1.5 hover:bg-zinc-100', 'bg-zinc-100' => $current_route_name == 'admin.dashboard'])>
                    <span class="w-4 h-4 rounded-sm bg-secondary"></span>
                    <span>Dashboard</span>
                </div>
            </a>
        </li>
        <li class="px-4">
            <a href="/admin/user" wire:navigate>
                <div @class(['flex items-center gap-1.5 rounded px-3 py-1.5 hover:bg-zinc-100', 'bg-zinc-100' => $current_route_name == 'admin.user'])>
                    <span class="w-4 h-4 rounded-sm bg-secondary"></span>
                    <span>Users</span>
                </div>
            </a>
        </li>
        <li class="px-4">
            <a href="#">
                <div class="flex items-center gap-1.5 rounded px-3 py-1.5 hover:bg-zinc-100">
                    <span class="w-4 h-4 rounded-sm bg-secondary"></span>
                    <span>Menu</span>
                </div>
            </a>
        </li>
        <li class="space-y-1 px-4" x-data="{ dropdown: false, toggleDropdownMenu() { this.dropdown = !this.dropdown } }">
            <div class="flex items-center justify-between rounded cursor-pointer px-3 py-1.5 hover:bg-zinc-100 group/dropdown-menu-1" x-on:click="toggleDropdownMenu">
                <div class="flex items-center gap-1.5">
                    <span
                        class="w-4 h-4 rounded-sm bg-secondary"
                    ></span>
                    <span>Dropdown Menu 1</span>
                </div>
                <span class="w-4 h-4 rounded-sm bg-secondary hidden group-hover/dropdown-menu-1:block"></span>
            </div>
            <ul class="space-y-1" x-show="dropdown" x-collapse>
                <li>
                    <a href="#">
                        <div class="flex items-center gap-1.5 rounded px-3 py-1.5 hover:bg-zinc-100">
                            <span class="w-4 h-4 invisible"></span>
                            <span>Sub Menu 1</span>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="flex items-center gap-1.5 rounded px-3 py-1.5 hover:bg-zinc-100">
                            <span class="w-4 h-4 invisible"></span>
                            <span>Sub Menu 2</span>
                        </div>
                    </a>
                </li>
            </ul>
        </li>
        <li class="space-y-1 px-4" x-data="{ dropdown: false, toggleDropdownMenu() { this.dropdown = !this.dropdown } }">
            <div class="flex items-center justify-between rounded cursor-pointer px-3 py-1.5 hover:bg-zinc-100 group/dropdown-menu-1" x-on:click="toggleDropdownMenu">
                <div class="flex items-center gap-1.5">
                    <span
                        class="w-4 h-4 rounded-sm bg-secondary"
                    ></span>
                    <span>Dropdown Menu 2</span>
                </div>
                <span class="w-4 h-4 rounded-sm bg-secondary hidden group-hover/dropdown-menu-1:block"></span>
            </div>
            <ul class="space-y-1" x-show="dropdown" x-collapse>
                <li x-data="{ dropdown: false, toggleDropdownMenu() { this.dropdown = !this.dropdown } }">
                    <div class="flex items-center justify-between rounded cursor-pointer px-3 py-1.5 hover:bg-zinc-100 group/dropdown-menu-2" x-on:click="toggleDropdownMenu">
                        <div class="flex items-center gap-1.5">
                            <span class="w-4 h-4 invisible"></span>
                            <span>Dropdown Sub Menu</span>
                        </div>
                        
                        <span class="w-4 h-4 rounded-sm bg-secondary hidden group-hover/dropdown-menu-2:block"></span>
                    </div>
                    <ul class="space-y-1" x-show="dropdown" x-collapse>
                        <li>
                            <a href="#">
                                <div class="flex items-center gap-1.5 rounded px-3 py-1.5 hover:bg-zinc-100">
                                    <span class="w-4 h-4 invisible"></span>
                                    <span>Sub Menu 1</span>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <div class="flex items-center gap-1.5 rounded px-3 py-1.5 hover:bg-zinc-100">
                                    <span class="w-4 h-4 invisible"></span>
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
                <div class="flex items-center gap-1.5 rounded px-3 py-1.5 hover:bg-zinc-100">
                    <span class="w-4 h-4 rounded-sm bg-secondary"></span>
                    <span>Menu</span>
                </div>
            </a>
        </li>
    </ul>
</nav>