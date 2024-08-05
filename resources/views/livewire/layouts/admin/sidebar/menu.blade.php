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
    </ul>
</nav>