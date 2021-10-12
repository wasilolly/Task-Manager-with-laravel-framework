<x-sub-section-panel sectionName="Task: {{ $task->title }}">
    <section>
        <div class="container"> 
            <div class="flex flex-row-reverse space-x-2 space-x-reverse">       
                <button class="bg-red-500 h-8 w-12"><a href="/task/{$task->id}/edit"> Delete</a></button>
                <button class="bg-blue-500 h-8 w-12"><a href="/task/{$task->id}/edit"> Edit</a></button>         
                <button class="bg-green-500 h-8 w-12"><a href="/task/{$task->id}/edit"> Notify</a></button>         
            </div>
            <x-content-layout contentName="Date Created" contents="{{$task->created_at}}"/>
            <x-content-layout contentName="Due Date" contents="{{$task->due}}"/>
            <x-content-layout contentName="Created by" contents="{{$task->getTaskCreatorUser()}}"/>
            <x-content-layout contentName="Assigned to" contents="{{$task->getAssignedUser()}}"/>
            <x-content-layout contentName="Description" contents="{{$task->description}}"/>         
        </div>
    </section>
</x-sub-section-panel>
