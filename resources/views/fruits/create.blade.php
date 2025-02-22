<!DOCTYPE html>
<html>

<head>
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            <h1 class="text-3xl font-bold mb-6">Create Post</h1>

            <form action="{{ route('fruits.store') }}" method="POST" class="bg-white shadow-md rounded-lg p-6">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Name:</label>
                    <input type="text" name="name" class="w-full border rounded px-3 py-2" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Quantity:</label>
                    <input type="text" name="quantity" class="w-full border rounded px-3 py-2" required>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 mb-2">Description:</label>
                    <textarea name="description" class="w-full border rounded px-3 py-2" rows="4" required></textarea>
                </div>
                <div class="flex justify-between">
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Submit</button>
                    <a href="{{ route('fruits.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
