<x-table.table-panel tableName="Tasks" :paginatorAttr="$tasks">
    <thead>
        <tr>
            <x-table.table-head thName="Task Name" />
            <x-table.table-head thName="Assignee" />
            <x-table.table-head thName="Date Created" />
            <x-table.table-head thName="Due" />
            <x-table.table-head thName="Completed" />
        </tr>
    </thead>
    <tbody>
        @foreach ($tasks as $task)
            <tr class="hover:bg-grey-lighter">
                <x-table.table-data tdName="{{ $task->title }}" />
                <x-table.table-data tdName="User" />
                <x-table.table-data tdName="{{ date_format($task->created_at, 'Y/m/d') }}" />
                <x-table.table-data tdName="15/04/20" />
                <x-table.table-data tdName="{{ $task->completed }}" />
            </tr>
        @endforeach

    </tbody>

</x-table.table-panel>
