<div class="h-screen flex divide-x">
    <div class="flex-1 hidden md:block bg-accent"></div>
    <div class="w-full md:w-[500px] flex items-center justify-center p-4">
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <form wire:submit="login" class="w-[400px] border rounded-lg p-4 space-y-2">
            <x-form.form-group>
                <x-label.primary>Email</x-label.primary>
                <x-input.input type="email" placeholder="Email address" required wire:model="form.email" />
                <x-input-error :messages="$errors->get('form.email')" />
            </x-form.form-group>

            <x-form.form-group>
                <x-label.primary>Password</x-label.primary>
                <x-input.input type="password" placeholder="Password" required wire:model="form.password" />
                <x-input-error :messages="$errors->get('form.password')" />
            </x-form.form-group>

            <label for="remember" class="inline-flex items-center cursor-pointer gap-1.5">
                <input id="remember" name="remember" type="checkbox" class="rounded border-secondary text-accent shadow-sm focus:ring-0" wire:model="form.remember">
                <span class="text-sm">Remember me</span>
            </label>

            <div class="flex items-center justify-between">
                <x-button.primary target="login">
                    <x-icon.login class="w-4 h-4" wire:target="login" wire:loading.remove/>
                    <span>Login</span>
                </x-button.primary>
                
                <a href="{{ route('password.request') }}" class="text-sm" wire:navigate>Forgot your password?</a>
            </div>
        </form>
    </div>
</div>
