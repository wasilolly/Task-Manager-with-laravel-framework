<x-table.table-panel tableName="Users" :paginatorAttr="$users">
    <thead>
        <tr>
            <x-table.table-head thName="User Name" />
            <x-table.table-head thName="Email" />
            <x-table.table-head thName="Tasks created" />
            <x-table.table-head thName="Tasks assigned" />
            <x-table.table-head thName="Due" />
            <x-table.table-head thName="Completed" />

        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr class="hover:bg-grey-lighter">
                <x-table.table-data tdName="{{$user->name}}" />
                <x-table.table-data tdName="{{$user->email}}" />
                <x-table.table-data tdName="{{$user->noOfTaskCreated()}}" />
                <x-table.table-data tdName="{{$user->noOfTaskAssigned()}}" />
                <x-table.table-data tdName="{{$user->noOfTaskDue()}}" />
                <x-table.table-data tdName="{{$user->noOfTaskCompleted()}}" />
            </tr>
        @endforeach
    </tbody>
</x-table.table-panel>
