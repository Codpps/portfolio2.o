@extends('admin.layouts')
@section('content')
    <div class="bg-gray-800 rounded-lg shadow-lg p-6 mb-6 border border-gray-700 w-full">
                   <div class="flex items-center justify-between mb-4">
            <a href="{{ route('tech.index') }}" class="text-white flex items-center gap-2 hover:text-gray-400">
                <i class="bi bi-arrow-left"></i> Back
            </a>
            <h2 class="text-xl font-semibold text-white">Create New tech</h2>
        </div>

                    <form class="space-y-4" action="{{ route('tech.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div>
                                <label class="block text-gray-300 mb-2" for="logo">logo</label>
                                <input type="file" class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" id="logo" name="logo">
                                @if ($tech->logo)

                                <img src="{{ asset('storage/tech/' . $tech->logo) }}" alt="">

                                @endif
                        </div>

                            <div>
                                <label class="block text-gray-300 mb-2" for="name">name</label>
                                <input type="text" class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" id="name" name="name" value="{{ old('name', $tech->name) }}">
                            </div>



                        <div>
                                <label class="block text-gray-300 mb-2" for="descrption">description</label>
                                <input type="text" class="w-full px-4 py-2 rounded-lg bg-gray-700 border border-gray-600 text-white focus:outline-none focus:ring-2 focus:ring-blue-500" id="descrption" name="description" value="{{ old('description', $tech->description) }}">
                        </div>

                            <button type="submit" class="px-6 py-2  w-full bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                                Create tech
                            </button>
                    </form>
                </div>
@endsection
