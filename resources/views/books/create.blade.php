<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800  shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form action="{{ route('books.store') }}" method="post" >
                        @csrf
            
                        <div class="mb-3">
                            <label style="color:black" for="author" class="form-lable">Author:</label>
                            <input type="text" class="form-control"name="author">
                        </div>
                        <div class="mb-3">
                            <label style="color:black"for="title" class="form-lable">Title:</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="mb-3 lg">
                            <label style="color:black"for="description" class="form-lable">Description:</label>
                            <textarea class="form-control" name="description"></textarea>
                        </div>
                        <div>
                            <input type="submit" value="Save" class="btn btn-success">
                            <a href="{{ route('books.index') }}" class="btn btn-danger">Back</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>