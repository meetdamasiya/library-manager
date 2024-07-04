<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table table-striped table-bordered table-hover">
                        <tr>
                            <th>Author:</th>
                            <td>{{ $book->author }}</td>
                        </tr>
                        <tr>
                            <th>Title:</th>
                            <td>{{ $book->title }}</td>
                        </tr>
                        <tr>
                            <th>Description:</th>
                            <td>{{ $book->description }}</td>
                        </tr>
                    </table>
                    <a href="{{ route('books.index') }}" class="btn btn-danger">Back</a>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
