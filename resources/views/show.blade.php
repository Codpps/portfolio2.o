<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dafa - Developer Portfolio</title>
    <!-- Core Libraries -->
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>
<div class="min-h-screen bg-gray-950 text-white">
    <x-navbar></x-navbar>
    <!-- Hero Section -->
    <div class="relative h-[60vh] w-full overflow-hidden">
        <!-- Main Image -->
        <img
            src="{{ asset('storage/work/' . $work->photo) }}"
            alt="{{ $work->title }}"
            class="w-full h-full object-cover"
        />
        <!-- Gradient Overlay -->
        <div class="absolute inset-0 bg-gradient-to-t from-gray-950 via-gray-950/50 to-transparent"></div>

        <!-- Content Overlay -->
       
    </div>

    <!-- Main Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        <!-- Hero Section -->
        <div class="relative text-center lg:text-left">
            <div class="max-w-7xl mx-auto">
                <!-- Tech Stack -->
                <div class="flex flex-wrap gap-2 mb-6">
                    @foreach ($work->teches as $tech)
                    <span class="px-4 py-1.5 text-sm bg-blue-500/10 text-blue-300 rounded-full border border-blue-500/20">
                        {{ $tech->name }}
                    </span>
                    @endforeach
                </div>
    
                <!-- Title -->
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 text-white">
                    {{ $work->title }}
                </h1>
    
                <!-- Date and Status -->
                <div class="flex items-center space-x-4 text-gray-300">
                    <div class="flex items-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>20 Feb 2024</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span class="w-2 h-2 rounded-full bg-green-500"></span>
                        <span>Completed</span>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Main Content -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12 mt-12">
            <!-- Left Content -->
            <div class="lg:col-span-2 space-y-12">
                <!-- Overview Section -->
                <section>
                    <h2 class="text-2xl font-semibold text-blue-400 mb-6">Project Overview</h2>
                    <div class="prose prose-lg prose-invert text-gray-300 leading-relaxed">
                        <p>{{ $work->description }}</p>
                    </div>
                </section>
            </div>
    
            <!-- Right Sidebar -->
            <div class="space-y-8">
    
                <!-- Technologies Used -->
                <div class="bg-gray-900/40 backdrop-blur-sm rounded-xl p-6 border border-blue-500/20">
                    <h3 class="text-xl font-semibold text-blue-400 mb-4">Technologies</h3>
                    <div class="grid grid-cols-2 gap-3">
                        @foreach ($work->teches as $tech)
                        <div class="flex items-center space-x-2 text-gray-300">
                            <img src="{{ asset('storage/tech/' . $tech->logo) }}" class="w-10 text-blue-400" alt="">
                            <span>{{ $tech->name }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>
    
                <!-- Call to Action -->
                <div class="bg-gradient-to-r from-blue-500/20 to-purple-500/20 rounded-xl p-6 text-center">
                    <h3 class="text-xl font-semibold text-white mb-4">Interested in this project?</h3>
                    <p class="text-gray-300 mb-6">Let's discuss how we can create something amazing together.</p>
                    <button class="w-full bg-blue-500 hover:bg-purple-500 text-white py-3 px-6 rounded-lg transition-colors duration-300">
                        Contact Us
                    </button>
                </div>
            </div>
        </div>
    </div>
    
</div>
</body>
</html>
