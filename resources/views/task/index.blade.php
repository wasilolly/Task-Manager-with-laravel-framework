<x-table.table-panel tableName="Tasks" :paginatorAttr="$tasks">
    <thead>
        <tr>
            <x-table.table-head thName="Date Created" />
            <x-table.table-head thName="Task Name" />
            <x-table.table-head thName="Created By" />
            <x-table.table-head thName="Assigned to" />
            <x-table.table-head thName="Due" />
            <x-table.table-head thName="Completed" />
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr class="hover:bg-grey-lighter">
                <x-table.table-data tdName="{{ date_format($task->created_at, 'd/m/Y') }}" />
                <td class="py-4 px-6 border-b border-grey-light">
                    <a href="/task/{{$task->id}}">{{ $task->title }}</a>
                </td>
                <x-table.table-data tdName="{{ $task->getTaskCreatorUser()}}" />
                <x-table.table-data tdName="{{ $task->getAssignedUser()}}" />                
                <x-table.table-data tdName="{{ $task->due}}" />
                <x-table.table-data tdName="{{ $task->completed }}" />
            </tr>
        @endforeach

    </tbody>

</x-table.table-panel>
