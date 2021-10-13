<x-sub-section-panel sectionName="Login">
    <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2">
        <div class="leading-loose">
            <form class="p-10 bg-white rounded shadow-xl" method="post" action="{{ route('sessions.login') }}">
                @csrf
                <x-form.input inputName="email" type="email"/>
                <x-form.input inputName="password" type="password"/>
                <x-form.button buttonName="Login" />
            </form>
        </div>
    </div>
</x-sub-section-panel>

