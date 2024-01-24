<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body>
    @auth
    <p>Congrats you are logged in</p>
    <form method="POST" action="/logout">
        @csrf
        <x-form.button name="logout" />
    </form>
    @else
    <div class="max-w-lg mx-auto mt-10 border border-gray-200 p-6 w-auto rounded-xl">
        <h2 class="block m-2 uppercase font-bold text-xl text-gray-700">Register</h2>
        <form method="POST" action="/register">
            @csrf
            <x-form.input name="name" placeholder="name" />
            <x-form.input name="email" placeholder="email" />
            <x-form.input name="password" type="password"  placeholder="password" />
            <x-form.button name="register" />
        </form>
    </div>
    @endauth
    <x-flash />
</body>
</html>