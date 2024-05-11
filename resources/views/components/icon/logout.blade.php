@props(['stroke' => 'currentColor'])

<svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" {{ $attributes }}>
    <g id="logout-{{ rand() }}-SVGRepo_bgCarrier" stroke-width="0"></g>
    <g id="logout-{{ rand() }}-SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
    <g id="logout-{{ rand() }}-SVGRepo_iconCarrier">
        <path d="M10 12H20M20 12L17 9M20 12L17 15" stroke="{{ $stroke }}" stroke-width="2" stroke-linecap="round"
            stroke-linejoin="round"></path>
        <path d="M4 12C4 7.58172 7.58172 4 12 4M12 20C9.47362 20 7.22075 18.8289 5.75463 17" stroke="{{ $stroke }}"
            stroke-width="2" stroke-linecap="round"></path>
    </g>
</svg>