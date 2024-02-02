<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <title>Dashboard</title>
    <!-- You can add more styles or link additional stylesheets here -->
</head>
<body class="bg-gray-100">



<div class="dashboard container mx-auto mt-8">
    <h1 class="text-3xl font-bold mb-6">Book Catalog</h1>

        <div class=" text-green-300">
            @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
            @endif
        </div>
    
   
    <a href="book/create">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mb-4">
        Add New Book
    </button>
    </a>

    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr>
                <th class="py-2 px-4 border-b">Title</th>
                <th class="py-2 px-4 border-b">Author</th>
                <th class="py-2 px-4 border-b">Genre</th>
                <th class="py-2 px-4 border-b">Price</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
            <tr>
                <td class="py-2 px-4 border-b">{{$book->title}}</td>
                <td class="py-2 px-4 border-b">{{$book->author}}</td>
                <td class="py-2 px-4 border-b">{{$book->genre}}</td>
                <td class="py-2 px-4 border-b">{{$book->price}} DH</td>
                <td class="py-2 px-4 border-b">
                    <a href="{{route('book.edit',['book'=>$book])}}">
                    <button class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-2 mr-2">
                        Update
                    </button>
                    </a>
                    <form class="" method="post" action="{{route('book.destroy',['book'=>$book])}}">
                       @csrf
                       @method('delete')
                       <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3">
                        Delete
                      </button>
                    </form>
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
