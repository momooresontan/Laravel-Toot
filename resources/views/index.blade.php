<x-layout>
    @auth
    <p>Congrats you are logged in</p>
    <form method="POST" action="/logout">
        @csrf
        <x-form.button name="logout" />
    </form>
    @else
    <x-panel>
        <h2 class="block m-2 uppercase font-bold text-xl text-gray-700">Register</h2>
        <form method="POST" action="/register">
            @csrf
            <x-form.input name="name" placeholder="name" />
            <x-form.input name="email" placeholder="email" />
            <x-form.input name="password" type="password"  placeholder="password" />
            <x-form.button name="register" />
        </form>
    </x-panel>
    <x-panel>
        <h2 class="block m-2 uppercase font-bold text-xl text-gray-700">Login</h2>
        <form method="POST" action="/login">
            @csrf
            <x-form.input name="email" placeholder="email" />
            <x-form.input name="password" type="password"  placeholder="password" />
            <x-form.button name="login" />
        </form>
    </x-panel>
    @endauth
</x-layout>