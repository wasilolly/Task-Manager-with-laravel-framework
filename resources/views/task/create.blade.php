<x-layout>
    <x-section-header sectionName="Create a Task" />
    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
        <p class="text-xl pb-6 flex items-center">
            <i class="fas fa-list mr-3"></i> <a href="{{ route('task.index') }}">All Tasks</a>
        </p>
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" method="post" action="{{ route('task.store') }}">
                @csrf
                <div class="">
                    <label class="block text-sm text-gray-600" for="name"> Task Title</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded" id="name" name="title" type="text"
                        required="" placeholder="Task Title">
                </div>
                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="description">Message</label>
                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="description"
                        name="description" rows="6" required="" placeholder="Task Details...."></textarea>
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="due">Due Date</label>
                    <input class="w-full px-5  py-4 text-gray-700 bg-gray-200 rounded" id="due" name="due" type="date"
                        required="">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="email">Assign to</label>
                    <select name="user" id="user">
                        @if ($users->count())
                            @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded"
                        type="submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</x-layout>
