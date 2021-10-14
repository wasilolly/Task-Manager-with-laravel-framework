<x-table.table-panel tableName="Admin Panel" :paginatorAttr="$users">
    {{-- summary panel --}}
    <div class="container flex flex-row">
        <x-dashboard-panel attributeContent="{{$userCount}}"  attributeName="Users" fontName="users"/>
        <x-dashboard-panel attributeContent="{{$tasks->Count()}}" attributeName="Tasks"  fontName="tasks"/>
        <x-dashboard-panel attributeContent="{{$taskCompleted}}"  attributeName="Completed" fontName="check-square"/>
        <x-dashboard-panel attributeContent="{{$taskDue}}"  attributeName="Due" fontName="minus-square"/>
    </div>

    {{-- User search form --}}
    <div class="container flex items-center">
        <form method="GET" action="/user/admin/dashboard">
            <x-form.input inputName="search"  value="{{ request('search') }}"/>
            <x-form.button  buttonName="search" />
        </form>
    </div>

    {{-- User's task summary table --}}
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
                <x-table.table-data tdName="{{ ucwords($user->name)}}"/>
                <x-table.table-data tdName="{{$user->email}}" />
                <x-table.table-data tdName="{{$user->noOfTaskCreated()}}" />
                <x-table.table-data tdName="{{$user->noOfTaskAssigned()}}" />
                <x-table.table-data tdName="{{$user->noOfTaskDue()}}" />
                <x-table.table-data tdName="{{$user->noOfTaskCompleted()}}" />
                <td class="py-4 px-6 border-b border-grey-light">
                     <a href="/user/{{$user->id}}/dashboard" class="underline">View</a>
                </td>
            </tr>
        @endforeach
    </tbody>
    
</x-table.table-panel>




