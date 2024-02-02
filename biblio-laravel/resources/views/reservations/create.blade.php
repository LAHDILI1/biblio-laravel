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
        <h1 class="text-3xl font-bold mb-6">Add New Book</h1>
        <div class=" text-red-500">
            @if($errors->any())
            <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            @endif
        </div>

        <div class="max-w-md mx-auto bg-white p-6 rounded-md shadow-md">
    <h2 class="text-2xl font-bold mb-4">Book Reservation Form</h2>
    <form action="{{ route('reservation.store') }}" method="POST">
        @csrf
        <div class="mb-4">
            <label for="description" class="block text-sm font-semibold text-gray-600 mb-1">Description</label>
            <textarea id="description" name="description" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" rows="4" required></textarea>
        </div>
        <div class="mb-4">
            <label for="reservation_date" class="block text-sm font-semibold text-gray-600 mb-1">Reservation Date</label>
            <input type="date" id="reservation_date" name="reservation_date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4">
            <label for="return_date" class="block text-sm font-semibold text-gray-600 mb-1">Return Date</label>
            <input type="date" id="return_date" name="return_date" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4 hidden">
            <label for="is_returned" class="block text-sm font-semibold text-gray-600 mb-1">Is Returned?</label>
            <select id="is_returned" name="is_returned" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
                <option value="0">No</option>
                <option value="1">Yes</option>   
            </select>
        </div>
        <div class="mb-4 hidden">
            <label for="book_id" class="block text-sm font-semibold text-gray-600 mb-1">Book ID</label>
            <input type="number" value="{{$user->id}}" id="book_id" name="book_id" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
        </div>
        <div class="mb-4 hidden">
            <label for="user_id" class="block text-sm font-semibold text-gray-600 mb-1">User ID</label>
            <input type="number" value="{{$user->id}}" id="user_id" name="user_id" class="w-full px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" required>
        </div>
        <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded-md hover:bg-blue-600 transition duration-200">Submit</button>
    </form>
</div>

    </div>

</body>

</html>