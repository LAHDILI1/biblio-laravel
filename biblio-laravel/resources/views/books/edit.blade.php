<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Add New Book</title>
</head>

<body class="bg-gray-100">

    <div class="container mx-auto mt-8">
        <h1 class="text-3xl font-bold mb-6">update this Book</h1>
        <div class=" text-red-500">
            @if($errors->any())
            <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            @endif
        </div>


        <form method="post" action="{{route('book.update',['book'=> $book] )}}" class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
            @csrf
            @method('put')
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-semibold">Title:</label>
                <input value="{{$book->title}}" type="text" id="title" name="title" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="author" class="block text-gray-700 font-semibold">Author:</label>
                <input value="{{$book->author}}" type="text" id="author" name="author" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="genre" class="block text-gray-700 font-semibold">Genre:</label>
                <input value="{{$book->genre}}" type="text" id="genre" name="genre" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-semibold">Description:</label>
                <input value="{{$book->description}}" id="description" name="description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>

            <!-- <div class="mb-4">
                <label for="image" class="block text-gray-700 font-semibold">Image (Upload):</label>
                <input type="file" id="image" name="image" class="w-full">
            </div> -->

            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-semibold">Price:</label>
                <input value="{{$book->price}}" type="text" id="price" name="price" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="publication_year" class="block text-gray-700 font-semibold">Publication Year (Date):</label>
                <input value="{{$book->publication_year}}" type="date" id="publication_year" name="publication_year" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>

            <div class="mb-4">
                <label for="total_copies" class="block text-gray-700 font-semibold">Total Copies (int):</label>
                <input value="{{$book->total_copies}}" type="number" id="total_copies" name="total_copies" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>

            <div class="mb-6">
                <label for="available_copies" class="block text-gray-700 font-semibold">Available Copies (int):</label>
                <input value="{{$book->available_copies}}" type="number" id="available_copies" name="available_copies" class="w-full px-4 py-2 border border-gray-300 rounded-md">
            </div>

            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-md">
                save edit
            </button>
        </form>
    </div>

</body>

</html>