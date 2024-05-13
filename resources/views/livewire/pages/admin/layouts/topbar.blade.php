<div class="flex items-center justify-between h-8 px-4">
    <div class="flex items-center gap-3">
        <button class="rounded px-1.5 py-0.5 -mx-1.5 hover:bg-secondary" x-show="!sidebar" x-on:click="toggleSidebar">
            <p class="text-xs">Menu</p>
        </button>
    </div>
    <div class="flex items-center gap-3">
        <button class="group rounded p-1.5 -mx-1.5 hover:bg-secondary">
            <div class="w-4 h-4 bg-secondary rounded-full group-hover:bg-accent"></div>
        </button>
    </div>
</div>
