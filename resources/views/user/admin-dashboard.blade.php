<x-table.table-panel tableName="Admin Panel" :paginatorAttr="$users">
    {{-- summary panel --}}
    <div class="container">
        <x-content-layout contentName="No. of Users" contents="{{ $userCount }}" />
        <x-content-layout contentName="No. of Tasks" contents="{{ $tasks->count() }}" />
        <x-content-layout contentName="Due" contents="{{ $taskDue }}" />
        <x-content-layout contentName="Completed" contents="{{ $taskCompleted }}" />
    </div>

    {{-- User's task table --}}
    <thead>
        <tr>
            <x-table.table-head thName="User Name" />
            <x-table.table-head thName="Email" />
            <x-table.table-head thName="Tasks created" />
            <x-table.table-head thName="Tasks assigned" />
            <x-table.table-head thName="Due" />
            <x-table.table-head thName="Completed" />
            <x-table.table-head thName="User Dashboard" />

        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr class="hover:bg-grey-lighter">
                <x-table.table-data tdName="{{$user->name}}"/>
                <x-table.table-data tdName="{{$user->email}}" />
                <x-table.table-data tdName="{{$user->noOfTaskCreated()}}" />
                <x-table.table-data tdName="{{$user->noOfTaskAssigned()}}" />
                <x-table.table-data tdName="{{$user->noOfTaskDue()}}" />
                <x-table.table-data tdName="{{$user->noOfTaskCompleted()}}" />
                <td class="py-4 px-6 border-b border-grey-light">
                     <a href="/user/{{$user->id}}/dashboard">Show</a>
                </td>
            </tr>
        @endforeach
    </tbody>
    
</x-table.table-panel>




