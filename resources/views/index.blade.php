<x-layout>
    @auth
    <p>Congrats you are logged in</p>
    <form method="POST" action="/logout">
        @csrf
        <x-form.button name="logout" />
    </form>
    <x-panel>
    <div class="mt-5">
        <textarea name="body" class="w-full text-sm focus:outline-none focus:ring" rows="5" placeholder="Say something" required></textarea>
        
        <x-form.error name="body"/>
    </div>
    <div class="flex justify-end mt-5 border-t border-gray-200 pt-3 ">
        <x-form.button name="toot"></x-form.button>
    </div>
    </x-panel>

    @else
    <x-panel>
        <h2 class="block m-2 uppercase font-bold text-xl text-gray-700">Login</h2>
        <form method="POST" action="/users/authenticate">
            @csrf
            <x-form.input name="email" placeholder="email" />
            <x-form.input name="password" type="password"  placeholder="password" />
            <x-form.button name="login" />

            <div class="mt-8">
                <p>
                    Don't have an account?
                    <a href="/register" class="font-semibold">Register</a>
                </p>
            </div>
        </form>
    </x-panel>
    @endauth
</x-layout>