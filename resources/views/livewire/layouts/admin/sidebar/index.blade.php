<div class="w-64 h-full group/toggle-button" x-show="sidebar">
    <div class="flex flex-col h-full divide-y">
        <div class="h-12 flex items-center relative">
            <button class="absolute hidden group/sidebar-toggle rounded p-1.5 right-2.5 hover:bg-secondary group-hover/toggle-button:block" x-on:click="toggleSidebar">
                <div class="w-4 h-4 bg-secondary rounded-sm group-hover/sidebar-toggle:bg-accent"></div>
            </button>
        </div>
        <div class="flex-1 overflow-y-auto scroller">
            <livewire:layouts.admin.sidebar.menu />
        </div>
    </div>
</div>