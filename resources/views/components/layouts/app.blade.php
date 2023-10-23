<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>BookFriends</title>
</head>
<body>
<div class="max-w-4xl mx-auto px-6 grid grid-cols-8 gap-12 mt-16">
    <div class="col-span-2 border-r border-slate-200 space-y-6">
        @auth
            <ul>
            <li>
                <span  class="font-bold text-lg text-slate-600
                 hover:text-slate-800 block py-1">
                    {{ auth()->user() }}
                </span>
            </li>
            <li>
                <a href="#" class="font-bold text-lg text-slate-600
                 hover:text-slate-800 block py-1">Feed</a>
            </li>
        </ul>

            <ul>
                <li>
                    <a href="#" class="font-bold text-lg text-slate-600
                     hover:text-slate-800 block py-1">My Books</a>
                </li>
                <li>
                    <a href="#" class="font-bold text-lg text-slate-600
                     hover:text-slate-800 block py-1">Add a book</a>
                </li>
                <li>
                    <a href="#" class="font-bold text-lg text-slate-600
                     hover:text-slate-800 block py-1">Friends</a>
                </li>
            </ul>

            <ul>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button href="#" class="font-bold text-lg text-slate-600
                     hover:text-slate-800 block py-1">Logout</button>
                    </form>

                </li>
            </ul>
        @endauth

        @guest
            <ul>
                <li>
                    <a href="#" class="font-bold text-lg text-slate-600
                 hover:text-slate-800 block py-1">Home</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="/auth/login" class="font-bold text-lg text-slate-600
                 hover:text-slate-800 block py-1">Login</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="/auth/register" class="font-bold text-lg text-slate-600
                 hover:text-slate-800 block py-1">Register</a>
                </li>
            </ul>
        @endguest
    </div>
    <div class="col-span-6">
        @isset($header)
            <h1 class="font-bold text-2xl text-slate-800">
                {{ $header }}
            </h1>
        @endisset
        {{ $slot }}
    </div>
</div>

</body>
</html>
