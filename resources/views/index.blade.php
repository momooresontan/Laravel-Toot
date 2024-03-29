<x-layout>
    @auth
    <p>Congrats you are logged in</p>
    <form method="POST" action="/logout">
        @csrf
        <x-form.button>logout</x-form.button>
    </form>
    <x-panel>
    <div class="mt-5">
        <h2 class="text-xl font-bold m-2">Toot something</h2>
        <form action="/create" method="POST">
            @csrf
            <x-form.input name="title" placeholder="title" />
            <textarea name="body" class="w-full text-sm m-2 focus:outline-none focus:ring" rows="5" placeholder="Say something" required></textarea>
            <x-form.error name="body"/>
            <div class="flex justify-end mt-5 border-t border-gray-200 pt-3 ">
                <x-form.button>Toot</x-form.button>
            </div>
        </form>
    </div>
    </x-panel>

    <x-panel>
        @unless(count($toots) == 0)
        <h2 class="text-xl font-bold m-2">All toots</h2>
        @foreach($toots as $toot)
        <div>
            <h3 class="text-2xl">
                <a href="/toot/{{ $toot->id }}">{{ $toot->title }}</a> by <span>{{ $toot->user->name }}</span>
            </h3>
            <p>
                <a href="/toots/{{$toot->id}}/edit" class="text-blue-400 px-6 py-2 rounded-xl">
                <i class="fa-solid fa-pen-to-square"></i>
                Edit</a>
                <form method="POST" action="/toots/{{ $toot->id }}">
                    @csrf
                    @method('DELETE')
                    <button class="text-red-600">
                        <i class="fa-solid fa-trash-can"></i>
                        Delete
                    </button>
                </form>
            </p>
            <div class="text-xl font-bold mb-4">{{ $toot->body }}</div>
        </div>
        @endforeach

        @else
        <p>No Toots</p>
        @endunless
    </x-panel>

    @else
    <x-panel>
        <h2 class="block m-2 uppercase font-bold text-xl text-gray-700">Login</h2>
        <form method="POST" action="/users/authenticate">
            @csrf
            <x-form.input name="email" placeholder="email" />
            <x-form.input name="password" type="password"  placeholder="password" />
            <x-form.button>login</x-form.button>

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