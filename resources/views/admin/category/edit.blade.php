<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Category
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

        <div class="container">
        <div class="row">

            <div class="col-md-4">
                <div class="card">

                    <form action="{{ url('/category/update', $update->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <h3>Edit {{$update->category_name}}</h3>
                            <label for="category_name">Category Name</label>
                            <input type="text" class="form-control" name="category_name"
                                placeholder="Enter category name" value="{{$update->category_name}}">
                            @error('category_name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="user_id">User ID</label>
                            <input type="number" class="form-control" name="user_id" placeholder="Enter User ID"
                                min="1" value={{$update->user_id}}>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        <a href="{{route('AllCat')}}" class="btn btn-secondary">Back</a>
                    </form>
            </div>
        </div>
    </div>
</x-app-layout>
