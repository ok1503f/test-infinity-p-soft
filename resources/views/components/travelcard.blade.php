@props(['image', 'image2'])
<div class="group relative w-full rounded-xl">
    <div class="relative w-full">
        <img src="{{ asset($image) }}" alt="{{ $slot }}" class="w-full h-158 object-cover" loading="lazy">
    </div>
    <div class="p-4 flex justify-center gap-4 items-center">
        <img src="{{ asset($image2) }}" alt="{{ $slot }}" class="w-55 h-55 object-cover" loading="lazy">
        <article class="text-lg font-semibold text-[#686868]">{{ $slot }}</article>
    </div>
</div>
