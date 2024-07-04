<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    @if (session('status'))
                        <div id="alert-message" class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <a href="{{ route('books.create') }}" class="mb-2 btn btn-primary">Add new record</a>
                    <form action="{{ route('books.index') }}" method="GET">
                        <input style="color:black" type="text" name="search" placeholder="Search books...">
                        <button style="color:black" class="btn btn-primary" type="submit">Search</button>
                    </form>

                    <table class="table table-striped table-bordered text-center">
                        <tr>
                            <th>Author</th>
                            <th>Title</th>
                            <th>VIEW</th>
                            <th>Edit</th>
                            <th>DELETE</th>
                        </tr>
                        @foreach ($books as $book)
                            <tr>

                                <td>{{ $book->author }}</td>
                                <td>{{ $book->title }}</td>
                                <td><a href="{{ route('books.show', $book->id) }}"
                                        class="btn btn-warning btn-sm">VIEW</a></td>
                                <td><a href="{{ route('books.edit', $book->id) }}"
                                        class="btn btn-warning btn-sm">EDIT</a></td>
                                <td>
                                    <form action="{{ route('books.destroy', $book->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"
                                            onclick="return confirm('Are you sure you want to delete this record?')">DELETE</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>

                    {{ $books->links() }}

                </div>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $("#alert-message").delay(2000).fadeOut(500);
        });
    </script>


</x-app-layout>
