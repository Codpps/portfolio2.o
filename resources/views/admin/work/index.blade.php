@extends('admin.layouts')
@section('content')
<div class="bg-gray-800 rounded-lg shadow-lg border border-gray-700 w-full">
    <div class="p-4 border-b border-gray-700 flex items-center justify-between">
        <h2 class="text-xl font-semibold text-white">Work</h2>
    </div>

    <div class="p-4">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-4">
            <div class="relative max-w-md w-full">
                <input type="text" placeholder="Search work..."
                    class="w-full px-4 py-2 pl-10 bg-gray-700 text-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 border border-gray-600">
                <i class="bi bi-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
            </div>
            <a href="{{ route('work.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500 flex items-center gap-2">
                <i class="bi bi-plus-circle"></i> Add Work
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-700">
                    <tr>
                        <th class="px-4 py-3 text-left text-white font-semibold">Photo</th>
                        <th class="px-4 py-3 text-left text-white font-semibold">Title</th>
                        <th class="px-4 py-3 text-left text-white font-semibold">Description</th>
                        <th class="px-4 py-3 text-left text-white font-semibold">Technologies</th>
                        <th class="px-4 py-3 text-left text-white font-semibold">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @foreach ($works as $item)
                    <tr class="text-gray-300">
                        <td class="px-4 py-3">
                            <img src="{{ asset('storage/work/' . $item->photo) }}" alt="Work Image" class="w-20 h-20 object-cover">
                        </td>
                        <td class="px-4 py-3">{{ $item->title }}</td>
                        <td class="px-4 py-3">{{ Str::limit($item->description, 10) }}</td>
                        <td class="px-4 py-3">
                            @foreach ($item->teches as $tech)
                                    <span>{{ $tech->name }}</span>
                            @endforeach
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex gap-2">
                                <a href="{{ route('work.edit', $item->id) }}" class="p-2 text-blue-500 hover:text-blue-400">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('work.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="p-2 text-red-500 hover:text-red-400" onclick="return confirm('Are you sure you want to delete this work?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
