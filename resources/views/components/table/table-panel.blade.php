@props(['tableName', 'paginatorAttr'])
<x-layout>
    <h1 class="text-3xl text-black pb-6">{{$tableName}}</h1>
    <div class="w-full mt-4">
        <p class="text-xl pb-3 flex items-center">
            <i class="fas fa-list mr-3"></i> <a href="{{ route('task.create') }}">New Task</a>
        </p>
        <div class="bg-white overflow-auto">
            <table class="text-left w-full border-collapse"> <!--Border collapse doesn't work on this site yet but it's available in newer tailwind versions -->
               {{$slot}}
            </table>
        </div>
        <p class="pt-3 text-gray-600">
            Source: <a class="underline" href="https://tailwindcomponents.com/component/table">https://tailwindcomponents.com/component/table</a>
        </p>
        <p>{{ $paginatorAttr->links() }}</p>
    </div>
</x-layout>