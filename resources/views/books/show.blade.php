<!DOCTYPE html>
<html>

<head>
    <title>Show Fruit</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white shadow-md rounded-lg p-6">
                <h1 class="text-3xl font-bold mb-4">{{ $fruit->name }}</h1>
                <p class="text-gray-600 mb-6">{{ $fruit->quantity }}</p>
                <p class="text-gray-600 mb-6">{{ $fruit->description }}</p>
                <div class="flex justify-between">
                    <a href="{{ route('fruits.edit', $fruit->id) }}"
                        class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                    <a href="{{ route('fruits.index') }}" class="bg-gray-500 text-white px-4 py-2 rounded">Back</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
