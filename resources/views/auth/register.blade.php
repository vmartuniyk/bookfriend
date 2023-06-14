<x-layouts.app>
    <x-slot name="header">
        Register
    </x-slot>

    <div class="mt-8">
        <form action="/register" method="Post" class="space-y-8">
            @csrf
            <div>
                <label for="name">Name</label>
                <input type="text" id="name" name="name" class="block border border-slate-400 rounded mt-2">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" class="block border border-slate-400 rounded mt-2">
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" class="block border border-slate-400 rounded mt-2">
            </div>

            <div>
                <button class="bg-indigo-800 text-white rounded p-4">Register</button>
            </div>

        </form>
    </div>

</x-layouts.app>
