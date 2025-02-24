@extends('admin.layouts')

@section('content')
    <div class="bg-gray-800 rounded-lg shadow-lg p-6 mb-6 border border-gray-700 w-full">
        <div class="flex items-center justify-between mb-4">
            <a href="{{ route('work.index') }}" class="text-white flex items-center gap-2 hover:text-gray-400">
                <i class="bi bi-arrow-left"></i> Back
            </a>
            <h2 class="text-xl font-semibold text-white">Edit Work</h2>
        </div>

        <form class="space-y-4" action="{{ route('work.update', $work->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div>
                <label class="block text-gray-300 mb-2" for="title">Title</label>
                <input type="text" class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                       id="title" name="title" value="{{ old('title', $work->title) }}">
            </div>

            <div>
                <label class="block text-gray-300 mb-2" for="photo">Photo</label>
                <input type="file" class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                       id="photo" name="photo">
                @if ($work->photo)
                    <div class="mt-2">
                        <img src="{{ asset('storage/work/' . $work->photo) }}" class="w-32 h-32 object-cover rounded-lg">
                    </div>
                @endif
            </div>

            <div>
                <label class="block text-gray-300 mb-2" for="description">Description</label>
                <textarea class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-blue-500"
                          id="description" name="description">{{ old('description', $work->description) }}</textarea>
            </div>

            <div class="flex flex-wrap gap-4">
                @foreach ($tech as $t)
                    <label class="flex items-center text-gray-300">
                        <input type="checkbox" class="w-5 h-5 rounded border-gray-600 bg-gray-700 text-blue-500 focus:ring-2 focus:ring-blue-500"
                               name="tech_id[]" value="{{ $t->id }}" {{ $work->teches->contains($t->id) ? 'checked' : '' }}>
                        <span class="ml-2 flex items-center">
                            <img src="{{ asset('storage/tech/' . $t->logo) }}" class="w-8 h-8 object-cover rounded-full">
                            <span class="ml-2">{{ $t->name }}</span>
                        </span>
                    </label>
                @endforeach
            </div>

            <button type="submit" class="px-6 py-2 w-full bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                Update Work
            </button>
        </form>
    </div>
@endsection
