<?php

namespace App\Livewire\Layouts\Admin\Sidebar;

use Livewire\Component;
use Illuminate\Support\Facades\Route;

class Menu extends Component
{
    public $current_route_name;

    public function mount()
    {
        $this->current_route_name = Route::currentRouteName();
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div>
            Loading
        </div>
        HTML;
    }

    public function render()
    {
        return view('livewire.layouts.admin.sidebar.menu');
    }
}
