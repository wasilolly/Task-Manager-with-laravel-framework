<x-layout>
    <x-section-header sectionName="Updating Task: {{$task->title}}" />
    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
        
        <span class="mb-3">
            <x-content-layout contentName="Created by" contents="{{ $task->getTaskCreatorUser() }}" />
            <x-content-layout contentName="Assigned to" contents="{{ $task->getAssignedUser() }}" />
        </span>

        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl mt-2" method="post" action="/task/{{$task->id}}">
                @csrf
                @method('PATCH')
                <x-form.input inputName="title" value="{{$task->title}}"/>

                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="description">Task Details</label>
                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="description"
                        name="description" rows="6" placeholder="Task Details...." required>{{$task->description}}
                    </textarea>
                </div>

                <x-form.input inputName="due" type="date" value="{{$task->due}}"/>
                    
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="user">Assign new user</label>
                    <select name="assigneduser_id" id="assigneduser_id">
                        @if ($users->count())
                            @foreach ($users as $user)
                                @if ($user->id === $task->assigneduser_id)
                                <option value="{{ $user->id }}" selected>
                                    {{ $user->name }}
                                </option>
                                @endif
                                <option value="{{ $user->id }}">
                                    {{ $user->name }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </div>
                @auth
                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                        type="Update">Update</button>
                </div>
                @else
                <p class="font-bold "><a href="/login" class="underline">Sign in</a> to update this
                    Task</p>
                @endauth
            </form>
        </div>
    </div>
</x-layout>
