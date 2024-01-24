<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="max-w-lg mx-auto mt-10 border border-gray-200 p-6 w-auto rounded-xl">
        <h2 class="block m-2 uppercase font-bold text-xl text-gray-700">Register</h2>
        <form method="POST" action="/register">
            <x-form.input name="name" placeholder="name" />
            <x-form.input name="email" placeholder="email" />
            <x-form.input name="password" type="password"  placeholder="password" />
            <button class="bg-blue-500 text-white uppercase font-semibold text-xs py-2 px-10 rounded-2xl hover:bg-blue-600 m-2">Register</button>
        </form>
    </div>
</body>
</html>