@props(['sectionName'])
<x-layout>
    <x-section-header sectionName="{{$sectionName}}"/>
    <div class="w-auto mt-4">
        <div class="bg-white-50 overflow-auto">
           {{$slot}}
          
        </div>
        <p class="pt-3 text-gray-600">
            Source: <a class="underline" href="https://tailwindcomponents.com/component/table">https://tailwindcomponents.com/component/table</a>
        </p>
    </div>
</x-layout>