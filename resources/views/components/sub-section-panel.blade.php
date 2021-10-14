@props(['sectionName'])
<x-layout>
    <x-section-header sectionName="{{$sectionName}}"/>
    <div class="w-auto mt-4  bg-gradient-to-b from-gray-200 to-gray-100 border-b-4 border-blue-600 rounded-lg shadow-xl p-2">
        <div class="bg-white-50 overflow-auto">
           {{$slot}}
          
        </div>
    </div>
</x-layout>