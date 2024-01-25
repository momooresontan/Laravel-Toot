<x-layout>
    <x-panel>
        <h2 class="block m-2 uppercase font-bold text-xl text-gray-700">Login</h2>
        <form method="POST" action="users/authenticate">
            @csrf
            <x-form.input name="email" placeholder="email" />
            <x-form.input name="password" type="password" placeholder="password" />
            <x-form.button>login</x-form.button>

            <div class="mt-8">
                <p>
                    Don't have an account?
                    <a href="/register" class="font-semibold">Register</a>
                </p>
            </div>
        </form>
    </x-panel>
</x-layout>
