@props(['tableName', 'paginatorAttr'])
<x-layout>
    <x-section-header sectionName="{{$tableName}}"/>
    <div class="w-full mt-4  bg-gradient-to-b from-gray-200 to-gray-100 border-b-4 border-blue-600 rounded-lg shadow-xl p-2">
        <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-tasks mr-3"></i> <a class="underline" 
            href="{{ route('task.create') }}">New Task</a>
        </p>
        <div class="bg-white overflow-auto">
            <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
               {{$slot}}
            </table>
        </div>
        <p class="mt-2">{{ $paginatorAttr->links() }}</p>
    </div>
</x-layout>