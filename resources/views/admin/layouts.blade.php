<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  </head>
  <body class="bg-gray-50">
    <div class="flex h-screen">
    <x-sidebar></x-sidebar>

    <div class="flex flex-col min-h-screen flex-1">
            <header class="sticky top-0 z-10 bg-gray-800 border-b border-gray-700">
                <div class="flex items-center justify-end px-6 py-5">
                    <div class="flex items-center gap-4">
                        <button class="p-2 text-gray-300 hover:text-white">
                            <i class="fas fa-bell"></i>
                        </button>
                        <div class="flex items-center gap-3">
                            <img src="https://ui-avatars.com/api/?name=User+Name" alt="User"
                                class="w-8 h-8 rounded-full">
                            <span class="text-sm font-medium text-gray-200">User Name</span>
                        </div>
                    </div>
                </div>
            </header>

            <main class="flex flex-grow p-6 bg-gray-900 ml-64">
                @yield('content')
            </main>

            <footer class="bg-gray-800 border-t sticky bottom-0 z-10 border-gray-700 mt-auto">
                <div class="px-6 py-4">
                    <div class="flex items-center justify-between">
                        <div class="text-sm text-gray-400">
                            © 2025 Dashboard. All rights reserved.
                        </div>
                        <div class="flex items-center gap-4">
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fab fa-github"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" class="text-gray-400 hover:text-white transition-colors">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
    </div>
    </div>
  </body>
</html>
