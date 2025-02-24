<aside class="w-64 h-screen bg-gray-900 border-r-2 border-grey-600 fixed z-50">
    <div class="flex items-center justify-center gap-2 py-4">
        <i class="bi bi-activity text-2xl text-white p-1 px-2 rounded-lg border"></i>
        <h1 class="text-white text-3xl font-bold">Dafa</h1>
    </div>

    <hr>

    <nav class="p-4 space-y-2">
        <a href="" class="flex items-center gap-3 py-2 px-2 text-white font-semibold rounded-lg hover:bg-blue-500">
            <i class="bi bi-speedometer2 text-2xl text-white"></i>
            Dashboard
        </a>
        <a href="{{ route('experience.index') }}" class="flex items-center gap-3 py-2 px-2 text-white font-semibold rounded-lg hover:bg-blue-500">
            <i class="bi bi-briefcase-fill text-2xl text-white"></i>
            Experience
        </a>
        <a href="{{ route('company.index') }}" class="flex items-center gap-3 py-2 px-2 text-white font-semibold rounded-lg hover:bg-blue-500">
            <i class="bi bi-buildings-fill text-2xl text-white"></i>
            Companies
        </a>
        <a href="{{ route('galery.index') }}" class="flex items-center gap-3 py-2 px-2 text-white font-semibold rounded-lg hover:bg-blue-500">
            <i class="bi bi-images text-2xl text-white"></i>
            Galleries
        </a>
        <a href="{{ route('contact.index') }}" class="flex items-center gap-3 py-2 px-2 text-white font-semibold rounded-lg hover:bg-blue-500">
            <i class="bi bi-envelope-fill text-2xl text-white"></i>
            Contact
        </a>
        <a href="{{ route('tech.index') }}" class="flex items-center gap-3 py-2 px-2 text-white font-semibold rounded-lg hover:bg-blue-500">
            <i class="bi bi-code-slash text-2xl text-white"></i>
            Tech
        </a>
        <a href="{{ route('work.index') }}" class="flex items-center gap-3 py-2 px-2 text-white font-semibold rounded-lg hover:bg-blue-500">
            <i class="bi bi-gear-wide-connected text-2xl text-white"></i>
            Work
        </a>
    </nav>

    <a href="" class="text-center text-white text-xl bg-red-500 rounded px-20 absolute bottom-4 left-4 p-2">
        Logout
    </a>
</aside>
