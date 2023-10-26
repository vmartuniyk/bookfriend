<x-layouts.app>
    <x-slot name="header">
        Add a book
    </x-slot>

    <div class="mt-8">
        <form action="/books" method="Post" class="mt-4 space-y-4">
            @csrf
            <div>
                <label for="title">Title</label>
                <input type="text"  name="title" class="block border border-slate-400 w-full rounded mt-2">

                @error('title')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div>
                <label for="author">Author</label>
                <input type="text"  name="author" class="block border border-slate-400 w-full rounded mt-2">

                @error('author')
                    <div class="text-red-500 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div>
                <label for="status">Status</label>
                <select  name="status" class="block border border-slate-400 w-full rounded mt-2">
                    @foreach(\App\Models\Pivot\BookUser::$statuses as $key => $status)
                        <option value="{{ $key }}">{{ $status }}</option>
                    @endforeach
                </select>

                @error('status')
                <div class="text-red-500 text-sm">
                    {{ $message }}
                </div>
                @enderror
            </div>


            <div>
                <button class="bg-indigo-800 text-white rounded p-4">Create a book</button>
            </div>

        </form>
    </div>

</x-layouts.app>

