<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dafa - Developer Portfolio</title>
    <!-- Core Libraries -->
    @vite('resources/css/app.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/particles.js/2.0.0/particles.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.7.0/vanilla-tilt.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>
</head>

<body class="bg-gray-900 text-white relative overflow-x-hidden">
    <!-- Particle Background -->
    <div id="particles-js" class="absolute inset-0 z-0"></div>

    <!-- Navigation -->
    <x-navbar></x-navbar>

    <!-- Hero Section - Modified for wider layout -->
    <section id=""
        class="min-h-screen flex flex-col items-center justify-center px-4 relative z-10 mt-36 md:mt-0 container mx-auto xl:max-w-7xl">
        <div class="w-full flex flex-col md:flex-row-reverse md:items-center md:justify-between gap-12">
            <!-- Profile Image Container -->
            <div class="relative w-64 h-64 md:w-80 md:h-80 flex justify-center mx-auto md:mx-0" data-tilt
                data-tilt-max="10" data-aos="fade-left" data-aos-duration="2000">
                <div
                    class="absolute -inset-4 bg-gradient-to-r from-purple-500 to-blue-500 blur-2xl opacity-50 rounded-full animate-glow">
                </div>
                <img src="{{ asset('storage/galery/D1nhE4SkzbldcnY9sRqzsSnqjNzT265Hve9t44P8.jpg') }}" alt="Profile"
                    class="relative w-full h-full object-cover rounded-full border-4 border-purple-500 shadow-2xl animate__animated animate__fadeIn">

                <!-- Floating Tech Icons -->
                <div class="absolute -top-4 -left-4 w-16 md:w-32 floating-icon">
                    <img src="{{ asset('storage/tech/AEVqBHNyQjV7sswrOd3T6dFpbieQCtamxX5tnclU.png') }}" alt="Tech Icon">
                </div>
                <div class="absolute -bottom-4 -right-4 w-16 md:w-20 floating-icon-reverse">
                    <i class="bi bi-code-square text-4xl text-purple-400"></i>
                </div>
            </div>

            <!-- Text Content - Modified for wider layout -->
            <div class="max-w-2xl space-y-8 text-center md:text-left">
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-extrabold" data-aos="fade-right"
                    data-aos-duration="800">
                    <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-400 to-purple-500">
                        Dpps - <span id="role-text" class="typing"></span>
                    </span>
                </h1>

                <p class="text-gray-300 text-xl lg:text-2xl leading-relaxed" data-aos="fade-down"
                    data-aos-duration="1800">
                    Full Stack Laravel Expert skilled in backend, frontend, APIs, Mobile, and UI/UX. Passionate about
                    building scalable and efficient web applications
                </p>

                <!-- Social Links -->
                <p class="flex items-center justify-center md:justify-start space-x-2 text-gray-300 text-lg">
                    <i class="bi bi-geo-alt-fill text-red-500" data-aos="fade-right" data-aos-duration="1800"></i>
                    <span data-aos="fade-left" data-aos-duration="1800">Jakarta, Indonesia</span>
                </p>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row justify-center md:justify-start gap-6">
                    <button
                        class="group px-8 py-4 rounded-xl bg-gradient-to-br from-blue-600 to-purple-700 text-white font-bold text-xl shadow-lg hover:shadow-purple-500/50 transition-all duration-300"
                        data-aos="fade-up" data-aos-duration="1800">
                        <i class="bi bi-download mr-2 group-hover:animate-bounce"></i>
                        Download CV
                    </button>
                    <button
                        class="group px-8 py-4 rounded-xl border border-purple-600 text-white font-bold text-xl backdrop-blur-lg hover:bg-purple-600/20 transition-all duration-300"
                        data-aos="fade-up" data-aos-duration="1800">
                        <i class="bi bi-person-circle mr-2 group-hover:rotate-12 transition-transform duration-300"></i>
                        About Me
                    </button>
                </div>
            </div>
        </div>

    </section>

    <section id="about"
        class="min-h-screen flex items-center justify-center px-4 relative z-10 mt-36 md:mt-0 container mx-auto xl:max-w-7xl">
        <div class="grid md:grid-cols-3 gap-6 w-full">
            <!-- Experience Kiri -->
            <div class="bg-gray-900 border border-gray-800 p-4 rounded-xl shadow-lg shadow-gray-950 w-full"
                data-aos="fade-right" data-aos-duration="800">
                <div class="flex justify-between items-center mb-3">
                    <p class="font-semibold text-2xl text-gray-200">Experience</p>
                    <p class="text-gray-400 font-semibold">5 years</p>
                </div>
                <ul class="relative space-y-3 pl-6">
                    <div class="absolute left-2 top-0 bottom-0 w-1 bg-gray-700 rounded-lg"></div>
                    @foreach ($experience as $item)
                        <li
                            class="relative bg-gray-800 p-3 pl-6 rounded-lg flex justify-between items-center shadow-md hover:shadow-xl transition-all">
                            <div class="absolute left-0 -translate-x-1/2 w-3 h-3 bg-blue-500 rounded-full"></div>
                            <div class="mr-5">
                                <p class="text-gray-300 font-semibold">{{ $item->title }}</p>
                                <p class="text-gray-400 text-sm">{{ Str::limit($item->description, 15) }}</p>
                            </div>
                            <p class="text-gray-500">{{ $item->year }}</p>
                        </li>
                    @endforeach
                </ul>
            </div>

            <!-- Skills & Technology (Tengah) -->
            <div class="flex flex-col gap-6">
                <!-- Skills (Tengah Atas) -->
                <div class="bg-gray-900 border border-gray-800 p-4 rounded-xl shadow-lg shadow-gray-950 w-full"
                    data-aos="fade-down" data-aos-duration="1000">
                    <div class="mb-3">
                        <p class="font-semibold text-2xl text-gray-200 text-center">Skills</p>
                    </div>
                    <div class="flex flex-wrap justify-center gap-2">
                        @foreach ($tech as $item)
                            <span
                                class="bg-gray-800 text-gray-300 px-4 py-2 rounded-lg shadow-md">{{ $item->name }}</span>
                        @endforeach
                    </div>
                </div>

                <!-- Technology (Tengah Bawah) -->
                <div class="bg-gray-900 border border-gray-800 p-4 rounded-xl shadow-lg shadow-gray-950 w-full"
                    data-aos="fade-up" data-aos-duration="1200">
                    <div class="mb-3">
                        <p class="font-semibold text-2xl text-gray-200 text-center">Company</p>
                        <p class="font-semibold text-sm text-gray-200 text-center">Hire me in Company</p>
                    </div>
                    <div class="flex flex-wrap justify-center gap-2 py-2 bg-gray-700 rounded-lg">
                        @foreach ($company as $item)
                            <img src="{{ asset('storage/company/' . $item->logo) }}" alt="" class="w-auto h-16">
                        @endforeach
                    </div>
                </div>
            </div>

            <!-- Experience Kanan -->
            <div class="bg-gray-900 border border-gray-800 p-4 rounded-xl shadow-lg shadow-gray-950 w-full"
                data-aos="fade-left" data-aos-duration="1500">
                <div class="flex justify-between items-center mb-3">
                    <p class="font-semibold text-2xl text-gray-200">Contact</p>
                </div>
                <ul class="relative space-y-4 pl-6">
                    <div class="absolute left-2 top-0 bottom-0 w-1 bg-gray-700 rounded-lg"></div>
                    @foreach ($contact as $item)
                        <a href="{{ $item->url }}"
                            class="flex items-center space-x-3 bg-gray-800 p-3 rounded-lg hover:bg-gray-700 transition">
                            <div
                                class="flex items-center justify-center w-10 h-10 bg-gray-700 text-gray-300 rounded-full">
                                <i class="bi bi-person"></i>
                            </div>
                            <div>
                                <p class="text-gray-200 font-medium">{{ $item->title }}</p>
                                <p class="text-gray-400 text-sm">{{ Str::limit($item->url, 30) }}</p>
                            </div>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
        </div>
    </section>

    <section id="work"
        class="min-h-screen flex items-center justify-center px-4 relative z-10 mt-36 md:mt-0 container mx-auto xl:max-w-7xl">
        <div class="bg-gray-900 border border-gray-800 p-8 rounded-xl shadow-lg shadow-gray-950 w-full">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($work as $item)
                    <div data-aos="fade-up" data-aos-duration="800"
                        class="group relative bg-gray-900/40 backdrop-blur-sm rounded-xl overflow-hidden border border-blue-500/30 hover:border-purple-500/30 shadow-lg shadow-blue-500/10 hover:shadow-purple-500/10 transition-all duration-300 transform hover:-translate-y-1 w-full md:w-80 mx-auto">

                        <!-- Image Container -->
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('storage/work/' . $item->photo) }}" alt="{{ $item->title }}"
                                class="w-full h-48 object-cover transform group-hover:scale-105 transition-transform duration-700 ease-in-out" />
                            <!-- Date Badge -->
                            <div class="absolute top-3 right-3">
                                <div
                                    class="backdrop-blur-md bg-black/30 text-white text-xs px-3 py-1.5 rounded-full border border-white/10 shadow-lg">
                                    20 Feb 2024
                                </div>
                            </div>
                            <!-- Gradient Overlay -->
                            <div
                                class="absolute inset-0 bg-gradient-to-t from-gray-900 via-gray-900/20 to-transparent opacity-60 group-hover:opacity-70 transition-opacity duration-300">
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="p-5 relative z-10">
                            <!-- Title -->
                            <h3
                                class="text-xl font-semibold text-blue-400 group-hover:text-purple-400 transition-colors duration-300">
                                {{ $item->title }}
                            </h3>

                            <!-- Description -->
                            <p class="text-gray-300 text-sm mb-4 line-clamp-2 leading-relaxed">
                                {{ Str::limit($item->description, 100) }}
                            </p>

                            <!-- Tech Stack & Button -->
                            <div class="flex flex-col space-y-4">
                                <!-- Tech Stack Tags -->
                                <div class="flex flex-wrap gap-2">
                                    @foreach ($item->teches as $tech)
                                        <span
                                            class="px-3 py-1 text-xs bg-blue-500/10 hover:bg-purple-500/10 text-blue-300 hover:text-purple-300 rounded-full border border-blue-500/20 hover:border-purple-500/20 transition-colors duration-200">
                                            {{ $tech->name }}
                                        </span>
                                    @endforeach
                                </div>

                                <!-- Learn More Button -->
                                <a href="{{ route('workshow', $item->id) }}"
                                    class="w-full group/btn bg-blue-500/10 hover:bg-purple-500/10 text-blue-400 hover:text-purple-300 py-2 px-4 rounded-lg transition-all duration-300 flex items-center justify-center space-x-2">
                                    <span>Learn more</span>
                                    <span
                                        class="transform group-hover/btn:translate-x-1 transition-transform duration-300">→</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section id="contact"
        class="min-h-screen flex items-center justify-center px-4 relative z-10 mt-36 md:mt-0 w-full">
        <div
            class="bg-gray-900 border border-gray-800 p-8 rounded-xl shadow-lg shadow-gray-950 w-full container mx-auto flex flex-col md:flex-row items-center gap-8">
            <!-- Model Viewer (Kiri) -->
            <div class="w-full md:w-1/2 flex justify-center">
                <model-viewer src="/storage/galery/love.glb" camera-controls disable-zoom
                    class="w-64 h-64 md:w-80 md:h-80 animate-float"></model-viewer>
            </div>

            <style>
                @keyframes floatAnimation {
                    0% {
                        transform: translateY(0);
                    }

                    50% {
                        transform: translateY(-20px);
                    }

                    100% {
                        transform: translateY(0);
                    }
                }

                .animate-float {
                    animation: floatAnimation 3s ease-in-out infinite;
                }
            </style>


            <!-- Form Contact (Kanan) -->
            <div class="w-full md:w-1/2">
                <h2 class="text-3xl font-bold text-white text-center md:text-left mb-4">Get in Touch</h2>
                <p class="text-gray-400 text-center md:text-left mb-4">We'd love to hear from you! Fill out the form
                    below.</p>

                <form id="contactForm" class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-300">Name</label>
                        <input type="text" id="name"
                            class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                            required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300">Email</label>
                        <input type="email" id="email"
                            class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                            required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-gray-300">Message</label>
                        <textarea id="message" rows="4"
                            class="w-full px-4 py-3 bg-gray-800 text-white border border-gray-700 rounded-lg focus:ring-2 focus:ring-blue-500 outline-none"
                            required></textarea>
                    </div>

                    <button type="button" onclick="sendToWhatsApp()"
                        class="w-full bg-blue-600 hover:bg-blue-700 transition py-3 rounded-lg font-semibold">Send
                        Message</button>
                </form>

                <div class="flex justify-center md:justify-start space-x-4 mt-6">
                    <a href="#" class="text-gray-400 hover:text-white text-2xl"><i
                            class="bi bi-facebook"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white text-2xl"><i
                            class="bi bi-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white text-2xl"><i
                            class="bi bi-instagram"></i></a>
                </div>
            </div>
        </div>
    </section>

    <script>
        function sendToWhatsApp() {
            let name = document.getElementById("name").value;
            let email = document.getElementById("email").value;
            let message = document.getElementById("message").value;
            let phoneNumber = "62XXXXXXXXXX"; // Ganti dengan nomor WhatsApp-mu (tanpa tanda +)

            if (name === "" || email === "" || message === "") {
                alert("Please fill out all fields.");
                return;
            }

            let whatsappMessage = `Hello, my name is ${name}. %0AEmail: ${email} %0A%0A${message}`;
            let whatsappURL = `https://wa.me/${phoneNumber}?text=${whatsappMessage}`;

            window.open(whatsappURL, "_blank");
        }
    </script>

    <footer class="bg-gray-900 text-gray-300 border-t border-gray-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Logo and tagline -->
                <div class="col-span-1 md:col-span-2">
                    <h2 class="text-2xl font-bold text-blue-400 mb-2">Dafa</h2>
                    <p class="text-sm text-gray-400 mb-4">Crafting digital experiences with passion and precision</p>
                   
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-lg font-semibold text-blue-400 mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li>
                            <a href="/" class="hover:text-purple-400 transition-colors duration-300">Home</a>
                        </li>
                        <li>
                            <a href="/about" class="hover:text-purple-400 transition-colors duration-300">About</a>
                        </li>
                        <li>
                            <a href="/work" class="hover:text-purple-400 transition-colors duration-300">Work</a>
                        </li>
                        <li>
                            <a href="/contact"
                                class="hover:text-purple-400 transition-colors duration-300">Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Contact Info -->
                <div>
                    <h3 class="text-lg font-semibold text-blue-400 mb-4">Contact</h3>
                    <ul>
                        @foreach ($contact as $item)
                            <li><a href="{{ $item->url }}" class="text-sm mb-2">{{ $item->title }}</a></li>
                    @endforeach
                    </ul>
                </div>
            </div>

            <!-- Bottom bar -->
            <div class="mt-8 pt-8 border-t border-gray-800 flex flex-col sm:flex-row justify-between items-center">
                <p class="text-sm text-gray-400 text-center">&copy; 2025 Dafa. All rights reserved.</p>
                <div class="mt-4 sm:mt-0">
                    <a href="/privacy"
                        class="text-sm text-gray-400 hover:text-blue-400 transition-colors duration-300 mr-4">Privacy
                        Policy</a>
                    <a href="/terms"
                        class="text-sm text-gray-400 hover:text-blue-400 transition-colors duration-300">Terms of
                        Service</a>
                </div>
            </div>
        </div>
    </footer>


    <!-- Tambahkan AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script>
        AOS.init();
    </script>

    <script>
        AOS.init({
            once: true, // Animasi hanya berjalan sekali
            easing: 'ease-in-out', // Efek animasi
        });
    </script>


    <script>
        // Initialize GSAP ScrollTrigger
        gsap.registerPlugin(ScrollTrigger);

        // Initialize Vanilla Tilt
        VanillaTilt.init(document.querySelectorAll("[data-tilt]"), {
            max: 10,
            speed: 400,
            glare: true,
            "max-glare": 0.2,
        });

        // Particles.js Configuration
        particlesJS('particles-js', {
            particles: {
                number: {
                    value: 80,
                    density: {
                        enable: true,
                        value_area: 800
                    }
                },
                color: {
                    value: ['#3B82F6', '#6366F1', '#8B5CF6']
                },
                shape: {
                    type: ["circle", "triangle", "edge"],
                    stroke: {
                        width: 0,
                        color: "#000000"
                    },
                },
                opacity: {
                    value: 0.5,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 1,
                        opacity_min: 0.1,
                        sync: false
                    }
                },
                size: {
                    value: 3,
                    random: true,
                    anim: {
                        enable: true,
                        speed: 2,
                        size_min: 0.1,
                        sync: false
                    }
                },
                line_linked: {
                    enable: true,
                    distance: 150,
                    color: '#6366F1',
                    opacity: 0.4,
                    width: 1
                },
                move: {
                    enable: true,
                    speed: 2,
                    direction: "none",
                    random: true,
                    straight: false,
                    out_mode: "out",
                    bounce: false,
                }
            },
            interactivity: {
                detect_on: 'canvas',
                events: {
                    onhover: {
                        enable: true,
                        mode: "repulse"
                    },
                    onclick: {
                        enable: true,
                        mode: "push"
                    },
                    resize: true
                },
                modes: {
                    repulse: {
                        distance: 100,
                        duration: 0.4
                    },
                    push: {
                        particles_nb: 4
                    }
                }
            },
            retina_detect: true
        });

        // Typing Effect
        const roles = ["Front-End", "Back-End", "UI/UX", "Mobile Dev"];
        let roleIndex = 0;
        const textElement = document.getElementById("role-text");

        function typeEffect(text, callback) {
            let i = 0;
            textElement.innerHTML = "";

            function typing() {
                if (i < text.length) {
                    textElement.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(typing, 100);
                } else {
                    setTimeout(callback, 1500);
                }
            }
            typing();
        }

        function deleteEffect(callback) {
            let text = textElement.innerHTML;
            let i = text.length;

            function deleting() {
                if (i >= 0) {
                    textElement.innerHTML = text.substring(0, i);
                    i--;
                    setTimeout(deleting, 50);
                } else {
                    setTimeout(callback, 500);
                }
            }
            deleting();
        }

        function loopRoles() {
            typeEffect(roles[roleIndex], () => {
                deleteEffect(() => {
                    roleIndex = (roleIndex + 1) % roles.length;
                    loopRoles();
                });
            });
        }

        // Animations
        gsap.to(".floating-icon", {
            y: 15,
            rotation: 5,
            repeat: -1,
            yoyo: true,
            ease: "power1.inOut",
            duration: 2
        });

        gsap.to(".floating-icon-reverse", {
            y: -15,
            rotation: -5,
            repeat: -1,
            yoyo: true,
            ease: "power1.inOut",
            duration: 2.5
        });

        gsap.to(".animate-glow", {
            opacity: 0.2,
            scale: 1.1,
            repeat: -1,
            yoyo: true,
            ease: "power2.inOut",
            duration: 2
        });

        // Start animations
        window.addEventListener('DOMContentLoaded', () => {
            loopRoles();
        });
    </script>
</body>

</html>
