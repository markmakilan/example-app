<?php

namespace App\Livewire\Pages\Public\Login;

use Livewire\Component;
use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Session;
use App\Providers\RouteServiceProvider;

class Index extends Component
{
    public LoginForm $form;

    public function login()
    {
        $this->validate();

        $this->form->authenticate();

        Session::regenerate();

        $this->redirectIntended(default: RouteServiceProvider::HOME, navigate: false);
    }

    public function render()
    {
        return view('livewire.pages.public.login.index')->layout('layouts.public.guest');;
    }
}
