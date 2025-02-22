<!DOCTYPE html>
<html>

<head>
    <title>fruits</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">fruits</h1>
            <a href="{{ route('fruits.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Create fruits</a>
        </div>

        @if ($message = Session::get('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="bg-white shadow-md rounded-lg">
            @foreach ($fruits as $fruit)
                <div class="border-b p-4">
                    <h2 class="text-xl font-semibold">{{ $fruits->name }}</h2>
                    <p class="text-gray-600 mt-2">{{ $fruits->quantity }}</p>
                    <div class="mt-4 flex space-x-2">
                        <a href="{{ route('fruits.show', $fruits->id) }}" class="text-blue-500">View</a>
                        <a href="{{ route('fruits.edit', $fruits->id) }}" class="text-yellow-500">Edit</a>
                        <form action="{{ route('fruits.destroy', $fruits->id) }}" method="fruits" class="inline"
                            method="fruits" class="inline"
                            onsubmit="return confirm('Are you sure you want to delete this fruits?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Delete</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-4">
            {{ $fruits->links() }}
        </div>
    </div>
</body>

</html>
