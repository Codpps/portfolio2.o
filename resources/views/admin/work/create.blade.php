@extends('admin.layouts')

@section('content')
    <div class="bg-gray-800 rounded-lg shadow-lg p-6 mb-6 border border-gray-700 w-full">
        <div class="flex items-center justify-between mb-4">
            <a href="{{ route('work.index') }}" class="text-white flex items-center gap-2 hover:text-gray-400">
                <i class="bi bi-arrow-left"></i> Back
            </a>
            <h2 class="text-xl font-semibold text-white">Create New Work</h2>
        </div>

        <form class="space-y-4" action="{{ route('work.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div>
                <label class="block text-gray-300 mb-2" for="title">Title</label>
                <input type="text" class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" id="title" name="title">
            </div>

            <div>
                <label class="block text-gray-300 mb-2" for="photo">Photo</label>
                <input type="file" class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" id="photo" name="photo">
            </div>

            <div>
                <label class="block text-gray-300 mb-2" for="description">Description</label>
                <textarea class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" id="description" name="description"></textarea>
            </div>

            <div class="flex space-x-4">
                @foreach ($tech as $tech)
                    <label class="flex items-center text-gray-300">
                        <input type="checkbox" class="w-5 h-5 rounded border-gray-600 bg-gray-700 text-blue-500 focus:ring-2 focus:ring-blue-500" name="tech_id[]" value="{{ $tech->id }}">
                        <span class="ml-2">
                            <img src="{{ asset('storage/tech/' . $tech->logo) }}" class="w-12 h-12 object-cover" alt="">
                        </span>
                    </label>
                @endforeach
            </div>

            <button type="submit" class="px-6 py-2 w-full bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                Create Work
            </button>
        </form>
    </div>
@endsection
