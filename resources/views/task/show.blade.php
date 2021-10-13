<x-sub-section-panel sectionName="Task: {{ $task->title }}">
    <section>
        <div class="container">
            <div class="flex flex-row-reverse space-x-2 space-x-reverse">
                <form method="post" action="/task/{{ $task->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="bg-red-500 h-8 w-12"> Delete</button>
                </form>
                <button class="bg-blue-500 h-8 w-12"><a href="/task/{{ $task->id }}/edit"> Edit</a></button>
                <button class="bg-green-500 h-8 w-12"><a href=""> Notify</a></button>
                <form method="post" action="/task/{{ $task->id }}/completed">
                    @csrf
                    @method('PATCH')
                    <button class="bg-blue-300 h-8 w-auto"> Mark Complete</button>
                </form>
            </div>
            <x-content-layout contentName="Date Created" contents="{{ $task->created_at }}" />
            <x-content-layout contentName="Due Date" contents="{{ $task->due }}" />
            <x-content-layout contentName="Created by" contents="{{ $task->getTaskCreatorUser() }}" />
            <x-content-layout contentName="Assigned to" contents="{{ $task->getAssignedUser() }}" />
            <x-content-layout contentName="Description" contents="{{ $task->description }}" />
        </div>
    </section>
    <hr class="bg-gray-500 my-5">
    {{-- task comment section --}}
    <div class="row flex mt-2">
        <div class="bg-gray-500 border border-blue-100 w-1/3">
            <form action="/posts/comments" method="post" class="bg-gray-100 border border-gray-200 p-2 rounded-xl">
                @csrf
                <header class="flex items-center">
                    <h2 class="ml-3">
                        Want to Comment?
                    </h2>
                </header>
                <div>
                    <textarea name="body" class="w-full mt-3 rounded-xl" cols="30" rows="3" required></textarea>
                    @error('body')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>
                <button type="submit"
                    class="text-white uppercase bg-blue-500 font:semibold text-xs py-2 px-10 rounded-2xl flex">Post</button>
            </form>
        </div>
        <div class="bg-gray-100 border border-gray-200 p-2 rounded-xl w-2/3">
            
        </div>

    </div>
</x-sub-section-panel>
