<x-layout>
    <x-panel>
        <h2 class="block m-2 uppercase font-bold text-xl text-gray-700">Register</h2>
        <form method="POST" action="/register">
            @csrf
            <x-form.input name="name" placeholder="name" />
            <x-form.input name="email" placeholder="email" />
            <x-form.input name="password" type="password" placeholder="password" />
            <x-form.button name="register" />

            <div class="mt-8">
                <p>
                    Already have an account?
                    <a href="/login" class="text-laravel font-semibold">Login</a>
                </p>
            </div>
        </form>
    </x-panel>
</x-layout>
