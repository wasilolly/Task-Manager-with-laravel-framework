@props(['tableName', 'paginatorAttr'])
<x-layout>
    <x-section-header sectionName="{{$tableName}}"/>
    <div class="w-full mt-4">
        <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-list mr-3"></i> <a href="{{ route('task.create') }}">New Task</a>
        </p>
        <div class="bg-white overflow-auto">
            <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
               {{$slot}}
            </table>
        </div>
        <p>{{ $paginatorAttr->links() }}</p>
    </div>
</x-layout>