<!-- resources/views/books/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book List</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    @include('partials.header')

    <main class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Book List</h1>
        <table class="min-w-full bg-white border border-gray-200">
            <thead>
                <tr>
                    <th class="border-b px-4 py-2">ISBN</th>
                    <th class="border-b px-4 py-2">Title</th>
                    <th class="border-b px-4 py-2">Author</th>
                    <th class="border-b px-4 py-2">Description</th>
                    <th class="border-b px-4 py-2">Date Published</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td class="border-b px-4 py-2">{{ $book->isbn }}</td>
                        <td class="border-b px-4 py-2">{{ $book->title }}</td>
                        <td class="border-b px-4 py-2">{{ $book->author }}</td>
                        <td class="border-b px-4 py-2">{{ $book->description }}</td>
                        <td class="border-b px-4 py-2">{{ $book->date_published->format('Y-m-d') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </main>

    @include('partials.footer')
</body>
</html>
