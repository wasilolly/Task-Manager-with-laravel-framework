<x-table.table-panel tableName="{{ ucwords($user->name) }} Tasks" :paginatorAttr="$tasks">
    {{-- summary panel --}}
    <div class="container">
        <x-content-layout contentName="Completed" contents="{{ $user->noOfTaskCompleted() }}" />
        <x-content-layout contentName="Due" contents="{{ $user->noOfTaskDue() }}" />
        <x-content-layout contentName="Task Created" contents="{{ $user->noOfTaskCreated() }}" />
        <x-content-layout contentName="Task Assigned" contents="{{ $user->noOfTaskAssigned() }}" />
    </div>

    {{-- User's task table --}}

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
                    <a href="/task/{{ $task->id }}" class="underline">{{ $task->title }}</a>
                </td>
                <x-table.table-data tdName="{{ $task->getTaskCreatorUser() }}" />
                <x-table.table-data tdName="{{ $task->getAssignedUser() }}" />
                <x-table.table-data tdName="{{ $task->due }}" />
                @if ($task->completed)
                    <x-table.table-data tdName="Yes" />
                @else
                    <x-table.table-data tdName="No" />
                @endif
            </tr>
        @endforeach
    </tbody>
</x-table.table-panel>
