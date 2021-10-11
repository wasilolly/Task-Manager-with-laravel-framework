<x-table.table-panel tableName="Users" :paginatorAttr="$users">
    <thead>
        <tr>
            <x-table.table-head thName="User Name" />
            <x-table.table-head thName="Email" />
            <x-table.table-head thName="No. of Tasks" />
            <x-table.table-head thName="Due" />
            <x-table.table-head thName="Completed" />

        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <tr class="hover:bg-grey-lighter">
                <x-table.table-data tdName="{{$user->name}}" />
                <x-table.table-data tdName="{{$user->email}}" />
                <x-table.table-data tdName="5" />
                <x-table.table-data tdName="15/04/20" />
                <x-table.table-data tdName="8" />
            </tr>
        @endforeach
    </tbody>
</x-table.table-panel>
