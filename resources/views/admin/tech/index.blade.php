@extends('admin.layouts')
@section('content')
<div class="bg-gray-800 rounded-lg shadow-lg border border-gray-700 w-full">
    <div class="p-4 border-b border-gray-700 flex items-center justify-between">
        <h2 class="text-xl font-semibold text-white">tech</h2>
    </div>

    <div class="p-4">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 mb-4">
            <div class="relative max-w-md w-full">
                <input type="text" placeholder="Search tech..."
                    class="w-full px-4 py-2 pl-10 bg-gray-700 text-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 border border-gray-600">
                <i class="bi bi-search absolute left-3 top-1/2 -translate-y-1/2 text-gray-400"></i>
            </div>
            <a href="{{ route('tech.create') }}" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-500 flex items-center gap-2">
                <i class="bi bi-plus-circle"></i> Add tech
            </a>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-700">
                    <tr>
                        <th class="px-4 py-3 text-left text-white font-semibold">Logo</th>
                        <th class="px-4 py-3 text-left text-white font-semibold">Name</th>
                        <th class="px-4 py-3 text-left text-white font-semibold">Description</th>
                        <th class="px-4 py-3 text-left text-white font-semibold">Action</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-700">
                    @foreach ($tech as $item)
                    <tr class="text-gray-300">
                        <td class="px-4 py-3">
                            <img src="{{ asset('storage/tech/' . $item->logo) }}" alt="" class="w-20 h-20 object-cover">
                        <td class="px-4 py-3">{{ $item->name }}</td>
                        <td class="px-4 py-3">{{ $item->description }}</td>
                        </td>
                        <td class="px-4 py-3">
                            <div class="flex gap-2">
                                <a href="{{ route('tech.edit', $item->id) }}" class="p-2 text-blue-500 hover:text-blue-400">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="{{ route('tech.destroy', $item->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="p-2 text-red-500 hover:text-red-400" onclick="return confirm('are you sure delet this tech?')">
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

        <!-- Pagination -->
        <div class="flex items-center justify-between mt-4">
            <div class="text-gray-400">Showing 1 to 2 of 2 entries</div>
            <div class="flex gap-2">
                <button class="px-3 py-1 bg-gray-700 text-gray-300 rounded hover:bg-gray-600">Previous</button>
                <button class="px-3 py-1 bg-blue-600 text-white rounded">1</button>
                <button class="px-3 py-1 bg-gray-700 text-gray-300 rounded hover:bg-gray-600">Next</button>
            </div>
        </div>
    </div>
</div>

@endsection
