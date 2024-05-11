@props(['stroke' => 'currentColor'])

<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <g id="login-{{ rand() }}-SVGRepo_bgCarrier" stroke-width="0"></g>
    <g id="login-{{ rand() }}-SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
    <g id="login-{{ rand() }}-SVGRepo_iconCarrier">
        <path d="M20 12C20 7.58172 16.4183 4 12 4M12 20C14.5264 20 16.7792 18.8289 18.2454 17" stroke="{{ $stroke }}"
            stroke-width="2" stroke-linecap="round"></path>
        <path d="M4 12H14M14 12L11 9M14 12L11 15" stroke="{{ $stroke }}" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"></path>
    </g>
</svg>