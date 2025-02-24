@extends('admin.layouts')
@section('content')
    <div class="bg-gray-800 rounded-lg shadow-lg p-6 mb-6 border border-gray-700 w-full">
        <div class="flex items-center justify-between mb-4">
            <!-- Button Back -->
            <a href="{{ route('experience.index') }}" class="text-white flex items-center gap-2 hover:text-gray-400">
                <i class="bi bi-arrow-left"></i> Back
            </a>
            <h2 class="text-xl font-semibold text-white">Edit Experience</h2>
        </div>

        <form class="space-y-4" action="{{ route('experience.update', $experience->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-gray-300 mb-2" for="title">Title</label>
                <input type="text" class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" id="title" name="title" value="{{ old('title', $experience->title) }}">
            </div>

            <div>
                <label class="block text-gray-300 mb-2" for="year">Year</label>
                <input type="text" class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" id="year" name="year" value="{{ old('year', $experience->year) }}">
            </div>

            <div>
                <label class="block text-gray-300 mb-2" for="description">Description</label>
                <input type="text" class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" id="description" name="description" value="{{ old('description', $experience->description) }}">
            </div>

            <button type="submit" class="px-6 py-2 w-full bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                Update Experience
            </button>
        </form>
    </div>
@endsection
