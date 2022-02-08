<x-layout>
    <x-section-header sectionName="Create a Task" />
    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
        <p class="text-xl pb-6 flex items-center">
            <i class="fas fa-list mr-3"></i> <a href="{{ route('task.index') }}">All Tasks</a>
        </p>
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" method="post" action="{{ route('task.store') }}">
                @csrf
                <x-form.input inputName="title"/>
                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="description">Task Details</label>
                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="description"
                        name="description" rows="6" placeholder="Task Details...." required>
                    </textarea>
                    <x-form.error inputName="description"/>
                </div>
                <x-form.input inputName="due" type="date" name="minDate" min="2022-01-01"/>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="user">Assign to</label>
                    <select name="assigneduser_id" id="assigneduser_id">
                        @if ($users->count())
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                @auth
                <x-form.button buttonName="Create" />
                @else
                <p class="font-bold "><a href="/login" class="underline">Sign in</a> to create a
                    Task</p>                
                @endauth
            </form>
        </div>
    </div>
</x-layout>
