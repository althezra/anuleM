@props(['type' => 'text', 'name', 'id' => null, 'placeholder' => '', 'disabled' => false])

@php
    $id = $id ?? $name;
    $baseClasses = 'bg-[#F5F5F5] w-full px-4 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out';
@endphp

@if($type === 'password')
    @php
        $id = $id ?? $name;
        $baseClasses = 'bg-[#F5F5F5] w-full ps-4 pe-14 py-2 rounded-sm outline-none text-[#1F1F1F] placeholder:text-[#D6D6D6] border border-[#D6D6D6] focus:border-[#1F1F1F] transition duration-150 ease-in-out';
    @endphp
    <div class="relative w-full">
        <input type="password" name="{{ $name }}" id="{{ $id }}" placeholder="{{ $placeholder }}" {{ $attributes->merge(['class' => $baseClasses]) }} autocomplete="off">
        <button type="button" class="absolute right-0 mx-4 p-1 top-1/2 transform -translate-y-1/2 rounded-full text-[#302995] bg-transparent hover:bg-[#E0E0E0]/50 active:bg-[#E0E0E0]/75 transition duration-150 ease-in-out cursor-pointer"
            onclick="let pwd = document.getElementById('{{ $id }}'); let eyeOpen = this.children[0]; let eyeClosed = this.children[1]; pwd.type = pwd.type === 'password' ? 'text' : 'password'; eyeOpen.classList.toggle('hidden'); eyeClosed.classList.toggle('hidden');">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye hidden">
                <path d="M2.062 12.348a1 1 0 0 1 0-.696 10.75 10.75 0 0 1 19.876 0 1 1 0 0 1 0 .696 10.75 10.75 0 0 1-19.876 0"/>
                <circle cx="12" cy="12" r="3"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye-closed">
                <path d="m15 18-.722-3.25"/>
                <path d="M2 8a10.645 10.645 0 0 0 20 0"/>
                <path d="m20 15-1.726-2.05"/>
                <path d="m4 15 1.726-2.05"/>
                <path d="m9 18 .722-3.25"/>
            </svg>
        </button>
    </div>
@else
    <input type="{{ $type }}" name="{{ $name }}" id="{{ $id }}" placeholder="{{ $placeholder }}" {{ $attributes->merge(['class' => $baseClasses]) }} autocomplete="off">
@endif
