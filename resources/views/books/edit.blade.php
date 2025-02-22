<!DOCTYPE html>
<html>

<head>
    <title>Edit fruit</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-3xl font-bold mb-6">Edit fruit</h1>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('fruits.update', $fruit->id) }}" method="POST"
                class="bg-white shadow-md rounded-lg p-6">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Name:</label>
                    <input type="text" name="name" value="{{ $fruit->name }}"
                        class="w-full border rounded px-3 py-2" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Quantity:</label>
                    <input type="text" name="quantity" value="{{ $fruit->quantity }}"
                        class="w-full border rounded px-3 py-2" required>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Description:</label>
                    <textarea name="description" class="w-full border rounded px-3 py-2" rows="4" required>{{ $fruit->description }}</textarea>
                </div>
                <div class="flex justify-between">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Update</button>
                    <a href="{{ route('fruits.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
