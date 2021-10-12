@props(['contentName', 'contents'])

<div class="flex">
    <div class="w-1/3 border border-gray-100 shadow">
        <p class="font-bold font-sans mt-2 text-right mr-2">{{ $contentName }}</p>
    </div>
    <div class="w-2/3 border border-gray-50 inner-shadow">
        <p class="ml-2 mt-2 font-sans break-words leading-relaxed">{{ $contents }}</p>
    </div>
</div>
