<!DOCTYPE html>
<html lang="en" class="scroll-smooth dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mohamed Elshabrawy | Flutter Developer & Mobile Engineer</title>
    <meta name="description" content="Mohamed Elshabrawy - Flutter Developer specializing in high-performance cross-platform mobile apps for iOS and Android with Clean Architecture, BLoC, and Firebase.">

    <!-- Fonts: Instrument Serif & Inter & JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Lottie Player for Animations -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <!-- Fallback Tailwind v4 CDN if not built -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <style type="text/tailwindcss">
            @theme {
                --color-dark: #070709;
                --color-card-dark: #0e0e12;
                --color-accent-cyan: #38bdf8;
                --color-accent-indigo: #6366f1;
                --font-sans: 'Inter', sans-serif;
                --font-serif: 'Instrument Serif', serif;
                --font-mono: 'JetBrains Mono', monospace;
            }
        </style>
    @endif

    <style>
        body {
            background-color: #070709;
            color: #f3f4f6;
            font-family: 'Inter', sans-serif;
            overflow-x: hidden;
            selection-background-color: #38bdf8;
            selection-color: #000;
        }

        ::selection {
            background: #38bdf8;
            color: #070709;
        }

        .instrument-serif {
            font-family: 'Instrument Serif', Georgia, serif;
        }

        .glass-pill {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }

        .glass-pill:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: rgba(255, 255, 255, 0.22);
        }

        .cursor-dot {
            pointer-events: none;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background-color: #38bdf8;
            box-shadow: 0 0 10px #38bdf8, 0 0 20px #38bdf8;
            transform: translate(-50%, -50%);
        }

        .cursor-follower {
            pointer-events: none;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9998;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            border: 1.5px solid rgba(56, 189, 248, 0.45);
            background: radial-gradient(circle, rgba(56, 189, 248, 0.12) 0%, transparent 70%);
            transform: translate(-50%, -50%);
            transition: width 0.25s ease, height 0.25s ease, border-color 0.25s ease, background 0.25s ease;
        }

        .cursor-follower.hovering {
            width: 78px;
            height: 78px;
            border-color: rgba(168, 85, 247, 0.7);
            background: radial-gradient(circle, rgba(168, 85, 247, 0.2) 0%, rgba(56, 189, 248, 0.05) 70%, transparent 100%);
        }

        .cursor-badge {
            pointer-events: none;
            position: fixed;
            top: 0;
            left: 0;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 0.15em;
            color: #fff;
            text-transform: uppercase;
            opacity: 0;
            transform: translate(-50%, -50%) scale(0.5);
            transition: opacity 0.2s ease, transform 0.2s ease;
        }

        .cursor-badge.visible {
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }

        .hero-glow-shift {
            animation: glowCycle 8s ease-in-out infinite alternate;
        }

        @keyframes glowCycle {
            0% { transform: scale(1) translateX(-5%); opacity: 0.6; }
            100% { transform: scale(1.15) translateX(5%); opacity: 0.9; }
        }

        .animate-gradient-text {
            background: linear-gradient(90deg, #38bdf8, #818cf8, #c084fc, #38bdf8);
            background-size: 200% auto;
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: gradientMove 5s linear infinite;
        }

        @keyframes gradientMove {
            to { background-position: 200% center; }
        }
    </style>
</head>
<body class="relative min-h-screen bg-[#070709] text-zinc-100 antialiased selection:bg-cyan-500 selection:text-black">

    <!-- Splash Screen (Black background with full-screen Lottie Animation from public/images/splashs) -->
    <div id="splash-screen" class="fixed inset-0 z-[99999] flex items-center justify-center bg-black transition-all duration-700 ease-in-out overflow-hidden w-screen h-screen">
        <lottie-player
            src="{{ asset('images/splashs/animations/siri-animation.json') }}"
            background="transparent"
            speed="1"
            class="w-full h-full object-cover scale-110 sm:scale-105 pointer-events-none"
            style="width: 100vw; height: 100vh;"
            loop
            autoplay>
        </lottie-player>
    </div>

    <!-- Background Canvas Particles -->
    <canvas id="particles-canvas" class="pointer-events-none fixed inset-0 z-0 h-full w-full opacity-70"></canvas>

    <!-- Floating Top Navigation -->
    <header class="fixed top-5 left-1/2 -translate-x-1/2 z-50 w-[calc(100%-2rem)] max-w-fit">
        <nav class="flex items-center gap-2 p-1.5 rounded-full glass-pill border border-white/10 shadow-[0_10px_30px_rgba(0,0,0,0.5)]">
            <a href="#home" class="px-3.5 py-1.5 rounded-full text-xs sm:text-sm font-medium text-zinc-300 hover:text-white hover:bg-white/10 transition">Home</a>
            <a href="#about" class="px-3.5 py-1.5 rounded-full text-xs sm:text-sm font-medium text-zinc-300 hover:text-white hover:bg-white/10 transition">About</a>
            <a href="#skills" class="px-3.5 py-1.5 rounded-full text-xs sm:text-sm font-medium text-zinc-300 hover:text-white hover:bg-white/10 transition">Skills</a>
            <a href="#projects" class="px-3.5 py-1.5 rounded-full text-xs sm:text-sm font-medium text-zinc-300 hover:text-white hover:bg-white/10 transition">Projects</a>
            <a href="{{ asset('cv/Mohamed_Elshabrawy_Flutter_Developer_CV-1.pdf') }}" download="Mohamed_Elshabrawy_Flutter_Developer.pdf" target="_blank" class="px-3.5 py-1.5 rounded-full text-xs sm:text-sm font-medium text-cyan-400 hover:text-cyan-300 hover:bg-white/10 transition flex items-center gap-1.5">
                <i data-lucide="file-text" class="w-3.5 h-3.5"></i>
                <span>CV</span>
            </a>
            <a href="#contact" class="flex items-center gap-1.5 ml-1 px-4 py-1.5 rounded-full text-xs sm:text-sm font-medium bg-white text-black hover:bg-zinc-200 transition shadow-sm">
                <span>Contact</span>
                <i data-lucide="arrow-up-right" class="w-3.5 h-3.5"></i>
            </a>
        </nav>
    </header>

    <!-- Copy Notification Toast -->
    <div id="copy-toast" class="fixed bottom-6 right-6 z-50 flex items-center gap-2.5 px-4 py-2.5 rounded-xl bg-zinc-900 border border-cyan-500/40 text-cyan-300 text-xs sm:text-sm font-mono shadow-2xl transition-all duration-300 opacity-0 translate-y-2 pointer-events-none">
        <i data-lucide="check-circle" class="w-4 h-4 text-cyan-400"></i>
        <span>Email copied to clipboard!</span>
    </div>

    <!-- MAIN CONTENT -->
    <main class="relative z-10 flex flex-col items-center w-full">

        <!-- 1. HERO SECTION -->
        <section id="home" class="relative flex min-h-screen w-full flex-col items-center justify-center px-4 pt-32 pb-24 text-center overflow-hidden">
            <!-- Ambient glowing orbs (like Moataz site) -->
            <div class="pointer-events-none absolute top-1/3 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[700px] h-[350px] bg-gradient-to-r from-blue-600/20 via-indigo-600/25 to-purple-600/20 rounded-full blur-[110px] hero-glow-shift"></div>

            <div class="relative z-10 max-w-4xl mx-auto flex flex-col items-center">
                <!-- Status pill -->
                <div class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full glass-pill text-xs font-mono text-zinc-300 mb-8 border border-white/10 shadow-inner">
                    <span class="flex h-2 w-2 rounded-full bg-emerald-400 animate-ping"></span>
                    <span class="text-zinc-400">Available for Opportunities</span>
                    <span class="text-zinc-600">|</span>
                    <span class="text-cyan-400">Flutter & Cross-Platform</span>
                </div>

                <!-- Main Punchy Title -->
                <h1 class="instrument-serif text-4xl sm:text-6xl md:text-7xl lg:text-8xl tracking-tight text-white leading-[1.08] mb-6">
                    Apps thatssss <em class="italic text-zinc-300 font-light">feel</em> intuitive.<br>
                    Engineering that <em class="italic animate-gradient-text font-serif">actually</em> delivers.
                </h1>

                <!-- Subtitle -->
                <div class="flex flex-wrap items-center justify-center gap-2 text-base sm:text-xl text-zinc-400 mb-4 font-normal">
                    <span>Hello, I'm</span>
                    <span class="font-semibold text-white tracking-wide">Mohamed Elshabrawy</span>
                    <span class="text-zinc-500">—</span>
                    <span class="text-cyan-300 font-medium">Cross-Platform Flutter Developer</span>
                </div>

                <!-- Location / Experience badge -->
                <p class="font-mono text-xs uppercase tracking-[0.25em] text-zinc-500 mb-10">
                    Cairo, Egypt · Zagazig University Alum · Clean Architecture Specialist
                </p>

                <!-- CTA Actions -->
                <div class="flex flex-col sm:flex-row items-center gap-3.5">
                    <a href="{{ asset('cv/Mohamed_Elshabrawy_Flutter_Developer_CV-1.pdf') }}" download="Mohamed_Elshabrawy_Flutter_Developer.pdf" target="_blank" class="group flex items-center gap-2.5 px-6 py-3 rounded-full bg-cyan-400 text-black font-semibold text-sm hover:bg-cyan-300 transition shadow-[0_0_25px_rgba(56,189,248,0.35)]">
                        <i data-lucide="download" class="w-4 h-4"></i>
                        <span>Download CV</span>
                    </a>

                    <a href="#projects" class="group flex items-center gap-2.5 px-6 py-3 rounded-full bg-white text-black font-medium text-sm hover:bg-zinc-200 transition shadow-[0_0_20px_rgba(255,255,255,0.15)]">
                        <span>Explore Projects</span>
                        <span class="flex items-center justify-center w-6 h-6 rounded-full bg-black text-white group-hover:translate-x-0.5 transition">
                            <i data-lucide="arrow-right" class="w-3.5 h-3.5"></i>
                        </span>
                    </a>

                    <button id="copy-email-btn" data-email="melshebrawy428@gmail.com" class="flex items-center gap-2 px-4 py-3 rounded-full glass-pill border border-white/10 text-xs sm:text-sm font-mono text-zinc-300 hover:text-white transition">
                        <i data-lucide="copy" class="w-4 h-4 text-cyan-400"></i>
                        <span>melshebrawy428@gmail.com</span>
                    </button>
                </div>

                <!-- Social Links -->
                <div class="flex items-center gap-5 mt-12 text-zinc-400">
                    <a href="https://linkedin.com/in/moshabrawyflutterdev" target="_blank" class="flex items-center gap-1.5 text-xs hover:text-cyan-400 transition">
                        <i data-lucide="linkedin" class="w-4 h-4"></i>
                        <span>LinkedIn</span>
                    </a>
                    <span class="text-zinc-700">·</span>
                    <a href="https://github.com/122mohamed" target="_blank" class="flex items-center gap-1.5 text-xs hover:text-cyan-400 transition">
                        <i data-lucide="github" class="w-4 h-4"></i>
                        <span>GitHub</span>
                    </a>
                    <span class="text-zinc-700">·</span>
                    <a href="tel:+201069412004" class="flex items-center gap-1.5 text-xs hover:text-cyan-400 transition">
                        <i data-lucide="phone" class="w-4 h-4"></i>
                        <span>+20 106 941 2004</span>
                    </a>
                </div>
            </div>

            <!-- Bottom Wave / Glow separator line -->
            <div class="pointer-events-none absolute bottom-0 inset-x-0 h-px bg-gradient-to-r from-transparent via-cyan-500/50 to-transparent"></div>
        </section>


        <!-- 2. BENTO GRID ABOUT / STATS SECTION (Moataz Mohamed Style) -->
        <section id="about" class="w-full max-w-6xl px-4 py-24">
            <div class="text-center mb-14">
                <p class="font-mono text-xs uppercase tracking-[0.2em] text-cyan-400 mb-2">Overview</p>
                <h2 class="instrument-serif text-3xl sm:text-5xl text-white">Engineering Quality & Precision</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-12 gap-4">
                
                <!-- Card 1: Experience & Focus (7 cols) -->
                <div class="card-3d md:col-span-7 rounded-2xl glass-pill p-7 flex flex-col justify-between border border-white/10 relative overflow-hidden group">
                    <div class="absolute -right-16 -top-16 w-52 h-52 bg-blue-600/15 rounded-full blur-2xl group-hover:scale-125 transition duration-500"></div>
                    <div class="relative z-10">
                        <span class="font-mono text-[11px] uppercase tracking-wider text-cyan-400">Profile & Vision</span>
                        <h3 class="instrument-serif text-2xl sm:text-3xl text-white mt-2 mb-3">Modern Mobile Experience Engineer</h3>
                        <p class="text-zinc-400 text-sm leading-relaxed">
                            Passionate Flutter Developer with hands-on experience building production-ready iOS and Android mobile apps. Specialized in modular Clean Architecture, deterministic state management (BLoC / Cubit), secure RESTful API integrations, and offline-first storage solutions.
                        </p>
                    </div>
                    <div class="relative z-10 grid grid-cols-3 gap-3 mt-8 pt-6 border-t border-white/5 text-center">
                        <div>
                            <span class="instrument-serif text-3xl sm:text-4xl text-cyan-400 font-bold">8+</span>
                            <p class="text-[11px] font-mono text-zinc-400 uppercase mt-0.5">Projects Built</p>
                        </div>
                        <div>
                            <span class="instrument-serif text-3xl sm:text-4xl text-purple-400 font-bold">100%</span>
                            <p class="text-[11px] font-mono text-zinc-400 uppercase mt-0.5">Clean Code</p>
                        </div>
                        <div>
                            <span class="instrument-serif text-3xl sm:text-4xl text-emerald-400 font-bold">2+</span>
                            <p class="text-[11px] font-mono text-zinc-400 uppercase mt-0.5">Years Active</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Tech Stack at a glance (5 cols) -->
                <div class="card-3d md:col-span-5 rounded-2xl glass-pill p-7 flex flex-col justify-between border border-white/10 relative overflow-hidden group">
                    <div class="absolute -left-12 -bottom-12 w-48 h-48 bg-purple-600/15 rounded-full blur-2xl group-hover:scale-125 transition duration-500"></div>
                    <div>
                        <span class="font-mono text-[11px] uppercase tracking-wider text-purple-400">Core Stack</span>
                        <h3 class="instrument-serif text-2xl text-white mt-2 mb-3">What I Ship With</h3>
                        <div class="flex flex-wrap gap-2 mt-4">
                            <span class="px-3 py-1 rounded-lg bg-cyan-500/10 border border-cyan-500/20 text-cyan-300 text-xs font-mono">Flutter & Dart</span>
                            <span class="px-3 py-1 rounded-lg bg-blue-500/10 border border-blue-500/20 text-blue-300 text-xs font-mono">BLoC / Cubit</span>
                            <span class="px-3 py-1 rounded-lg bg-orange-500/10 border border-orange-500/20 text-orange-300 text-xs font-mono">Firebase Suite</span>
                            <span class="px-3 py-1 rounded-lg bg-emerald-500/10 border border-emerald-500/20 text-emerald-300 text-xs font-mono">Dio & REST APIs</span>
                            <span class="px-3 py-1 rounded-lg bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 text-xs font-mono">Hive & SQLite</span>
                            <span class="px-3 py-1 rounded-lg bg-pink-500/10 border border-pink-500/20 text-pink-300 text-xs font-mono">Odoo Integration</span>
                        </div>
                    </div>
                    <div class="mt-6 flex items-center justify-between text-xs text-zinc-500 font-mono">
                        <span>Cross-Platform iOS & Android</span>
                        <i data-lucide="smartphone" class="w-4 h-4 text-cyan-400"></i>
                    </div>
                </div>

                <!-- Card 3: Location / Remote (4 cols) -->
                <div class="card-3d md:col-span-4 rounded-2xl glass-pill p-6 border border-white/10 flex flex-col justify-between">
                    <div>
                        <span class="font-mono text-[11px] uppercase tracking-wider text-zinc-500">Location</span>
                        <h4 class="text-xl font-semibold text-white mt-1">Cairo, Egypt</h4>
                        <p class="text-xs text-zinc-400 mt-2">Available for remote contracts, full-time positions, and hybrid opportunities worldwide.</p>
                    </div>
                    <div class="mt-6 flex items-center gap-2 text-xs font-mono text-emerald-400">
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-emerald-400 opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-emerald-500"></span>
                        </span>
                        <span>UTC+2 (Cairo Timezone)</span>
                    </div>
                </div>

                <!-- Card 4: Education & Degree (4 cols) -->
                <div class="card-3d md:col-span-4 rounded-2xl glass-pill p-6 border border-white/10 flex flex-col justify-between">
                    <div>
                        <span class="font-mono text-[11px] uppercase tracking-wider text-zinc-500">Education</span>
                        <h4 class="text-lg font-semibold text-white mt-1">Zagazig University</h4>
                        <p class="text-xs text-cyan-300 font-mono mt-1">Bachelor of Computers & Information (2024)</p>
                        <p class="text-xs text-zinc-400 mt-2">Certified Flutter Diploma. Solid foundations in software design patterns & algorithms.</p>
                    </div>
                    <div class="mt-6 flex items-center justify-between text-xs font-mono text-zinc-500">
                        <span>Class of 2024</span>
                        <i data-lucide="graduation-cap" class="w-4 h-4 text-purple-400"></i>
                    </div>
                </div>

                <!-- Card 5: Methodologies & Standards (4 cols) -->
                <div class="card-3d md:col-span-4 rounded-2xl glass-pill p-6 border border-white/10 flex flex-col justify-between">
                    <div>
                        <span class="font-mono text-[11px] uppercase tracking-wider text-zinc-500">Practices</span>
                        <h4 class="text-lg font-semibold text-white mt-1">Clean Architecture</h4>
                        <p class="text-xs text-zinc-400 mt-2">Separation of concerns (UI, Domain, Data layers), repository pattern, dependency injection, and Postman API contract testing.</p>
                    </div>
                    <div class="mt-6 flex items-center justify-between text-xs font-mono text-zinc-500">
                        <span>Agile & Git Workflows</span>
                        <i data-lucide="layers" class="w-4 h-4 text-cyan-400"></i>
                    </div>
                </div>

            </div>
        </section>


        <!-- 3. DETAILED SKILLS SECTION -->
        <section id="skills" class="w-full max-w-6xl px-4 py-20 border-t border-white/5">
            <div class="text-center mb-16">
                <p class="font-mono text-xs uppercase tracking-[0.2em] text-cyan-400 mb-2">Capabilities</p>
                <h2 class="instrument-serif text-3xl sm:text-5xl text-white">Technical Arsenal</h2>
                <p class="text-zinc-400 text-sm mt-3 max-w-lg mx-auto">Specialized tools and engineering paradigms applied across mobile ecosystems.</p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                <!-- Skill Group 1 -->
                <div class="rounded-2xl glass-pill p-6 border border-white/10 hover:border-cyan-500/40 transition">
                    <div class="w-10 h-10 rounded-xl bg-cyan-500/10 flex items-center justify-center text-cyan-400 mb-4">
                        <i data-lucide="smartphone" class="w-5 h-5"></i>
                    </div>
                    <h3 class="text-base font-semibold text-white mb-2">Mobile Development</h3>
                    <ul class="space-y-1.5 text-xs text-zinc-400 font-mono">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>Flutter & Dart</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>iOS & Android Cross-Platform</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>Custom Reusable Widgets</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-cyan-400"></span>Responsive Layouts & Themes</li>
                    </ul>
                </div>

                <!-- Skill Group 2 -->
                <div class="rounded-2xl glass-pill p-6 border border-white/10 hover:border-purple-500/40 transition">
                    <div class="w-10 h-10 rounded-xl bg-purple-500/10 flex items-center justify-center text-purple-400 mb-4">
                        <i data-lucide="cpu" class="w-5 h-5"></i>
                    </div>
                    <h3 class="text-base font-semibold text-white mb-2">State Management</h3>
                    <ul class="space-y-1.5 text-xs text-zinc-400 font-mono">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>BLoC Pattern</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>Cubit</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>Provider</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-purple-400"></span>Reactive Event Streaming</li>
                    </ul>
                </div>

                <!-- Skill Group 3 -->
                <div class="rounded-2xl glass-pill p-6 border border-white/10 hover:border-amber-500/40 transition">
                    <div class="w-10 h-10 rounded-xl bg-amber-500/10 flex items-center justify-center text-amber-400 mb-4">
                        <i data-lucide="server" class="w-5 h-5"></i>
                    </div>
                    <h3 class="text-base font-semibold text-white mb-2">Backend & APIs</h3>
                    <ul class="space-y-1.5 text-xs text-zinc-400 font-mono">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>RESTful APIs (Dio / Http)</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>Firebase (Auth, Firestore)</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>FCM (Cloud Messaging)</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span>Secure JWT Auth</li>
                    </ul>
                </div>

                <!-- Skill Group 4 -->
                <div class="rounded-2xl glass-pill p-6 border border-white/10 hover:border-emerald-500/40 transition">
                    <div class="w-10 h-10 rounded-xl bg-emerald-500/10 flex items-center justify-center text-emerald-400 mb-4">
                        <i data-lucide="database" class="w-5 h-5"></i>
                    </div>
                    <h3 class="text-base font-semibold text-white mb-2">Storage & Architecture</h3>
                    <ul class="space-y-1.5 text-xs text-zinc-400 font-mono">
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>Hive NoSQL DB</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>Sqflite / SQLite</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>SharedPreferences</li>
                        <li class="flex items-center gap-2"><span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>Odoo ERP Integration</li>
                    </ul>
                </div>
            </div>
        </section>


        <!-- 4. SELECTED PROJECTS (With interactive Mockups and Image Placeholders ready) -->
        <section id="projects" class="w-full max-w-6xl px-4 py-24 border-t border-white/5">
            <div class="text-center mb-16">
                <p class="font-mono text-xs uppercase tracking-[0.25em] text-cyan-400 mb-2">Case Studies</p>
                <h2 class="instrument-serif text-3xl sm:text-5xl text-white">Curated Works</h2>
                <p class="text-zinc-400 text-sm mt-3 max-w-lg mx-auto">Selected mobile applications built with precision, scalability, and user-centric polish.</p>
            </div>

            <div class="space-y-16">

                <!-- PROJECT 1: Hospital Mobile App -->
                <article class="card-3d rounded-3xl glass-pill p-6 sm:p-10 border border-white/10 overflow-hidden relative group" data-cursor-view>
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        <div class="lg:col-span-6 space-y-4">
                            <div class="flex items-center gap-3">
                                <span class="font-mono text-xs text-cyan-400 uppercase tracking-wider">01</span>
                                <div class="w-8 h-px bg-white/20"></div>
                                <span class="font-mono text-xs text-zinc-400 uppercase tracking-wider">Mobile Healthcare</span>
                            </div>
                            <h3 class="text-3xl sm:text-4xl font-bold text-white group-hover:text-cyan-300 transition">Hospital Mobile App</h3>
                            <p class="text-zinc-300 text-sm sm:text-base leading-relaxed">
                                A comprehensive healthcare mobile platform featuring patient profile management, live doctor appointment scheduling, prescription tracking, and instant real-time push notifications via Firebase Cloud Messaging.
                            </p>
                            
                            <!-- Tags -->
                            <div class="flex flex-wrap gap-2 pt-2">
                                <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs font-mono text-cyan-300">Flutter</span>
                                <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs font-mono text-zinc-300">Dart</span>
                                <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs font-mono text-amber-400">Firebase Firestore</span>
                                <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs font-mono text-blue-400">FCM Push</span>
                                <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs font-mono text-purple-400">BLoC</span>
                            </div>

                            <div class="pt-4 flex items-center gap-4">
                                <span class="text-xs font-mono text-zinc-500">Ready for image upload: <code class="text-zinc-300">/public/images/projects/hospital.png</code></span>
                            </div>
                        </div>

                        <!-- Project visual display (Mockup container) -->
                        <div class="lg:col-span-6 flex justify-center">
                            <div class="relative w-full max-w-md aspect-[16/10] rounded-2xl overflow-hidden bg-gradient-to-br from-cyan-900/40 via-blue-900/30 to-zinc-950 p-6 border border-white/10 flex flex-col justify-between shadow-2xl">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-2">
                                        <div class="w-3 h-3 rounded-full bg-red-500/80"></div>
                                        <div class="w-3 h-3 rounded-full bg-yellow-500/80"></div>
                                        <div class="w-3 h-3 rounded-full bg-emerald-500/80"></div>
                                    </div>
                                    <span class="text-[11px] font-mono text-cyan-400/80">HealthTech v2.4</span>
                                </div>

                                <!-- UI Mockup Preview -->
                                <div class="flex items-center justify-center gap-4 py-4">
                                    <!-- Phone Screen 1 -->
                                    <div class="w-32 h-48 rounded-xl bg-zinc-900/90 border border-cyan-500/30 p-2.5 flex flex-col justify-between shadow-lg transform -rotate-3 hover:rotate-0 transition duration-300">
                                        <div class="w-full flex items-center justify-between text-[8px] font-mono text-cyan-300">
                                            <span>9:41</span>
                                            <i data-lucide="wifi" class="w-2.5 h-2.5"></i>
                                        </div>
                                        <div class="space-y-1.5 my-auto text-left">
                                            <div class="w-16 h-2 rounded bg-cyan-400/50"></div>
                                            <div class="w-20 h-1.5 rounded bg-zinc-700"></div>
                                            <div class="p-1 rounded bg-cyan-950/80 border border-cyan-500/30 text-[7px] text-cyan-200">
                                                Dr. Sarah (Cardio)
                                            </div>
                                        </div>
                                        <div class="w-full h-4 rounded bg-cyan-500 text-[8px] text-black font-bold flex items-center justify-center">Book Now</div>
                                    </div>

                                    <!-- Phone Screen 2 -->
                                    <div class="w-32 h-48 rounded-xl bg-zinc-900/90 border border-blue-500/30 p-2.5 flex flex-col justify-between shadow-lg transform rotate-3 hover:rotate-0 transition duration-300">
                                        <div class="w-full flex items-center justify-between text-[8px] font-mono text-blue-300">
                                            <span>Upcoming</span>
                                            <i data-lucide="bell" class="w-2.5 h-2.5"></i>
                                        </div>
                                        <div class="space-y-1 my-auto text-left">
                                            <div class="text-[8px] text-zinc-300 font-semibold">Appointment #409</div>
                                            <div class="w-24 h-1 rounded bg-zinc-700"></div>
                                            <div class="p-1 rounded bg-blue-950/80 border border-blue-500/30 text-[7px] text-blue-200">
                                                Confirmed · 11:30 AM
                                            </div>
                                        </div>
                                        <div class="w-full h-4 rounded bg-zinc-800 text-[8px] text-zinc-300 flex items-center justify-center">View QR</div>
                                    </div>
                                </div>

                                <div class="text-right text-[10px] font-mono text-zinc-500">Live Architecture · Real-time Sync</div>
                            </div>
                        </div>
                    </div>
                </article>


                <!-- PROJECT 2: Online Banking Mobile App -->
                <article class="card-3d rounded-3xl glass-pill p-6 sm:p-10 border border-white/10 overflow-hidden relative group" data-cursor-view>
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        <div class="lg:col-span-6 space-y-4">
                            <div class="flex items-center gap-3">
                                <span class="font-mono text-xs text-purple-400 uppercase tracking-wider">02</span>
                                <div class="w-8 h-px bg-white/20"></div>
                                <span class="font-mono text-xs text-zinc-400 uppercase tracking-wider">Fintech & AI</span>
                            </div>
                            <h3 class="text-3xl sm:text-4xl font-bold text-white group-hover:text-purple-300 transition">Online Banking App</h3>
                            <p class="text-zinc-300 text-sm sm:text-base leading-relaxed">
                                High-security banking application built with Flutter & Firebase. Integrated with an intelligent Dialogflow AI chatbot for instant customer support, transaction history, cards control, and biometric authentication.
                            </p>
                            
                            <div class="flex flex-wrap gap-2 pt-2">
                                <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs font-mono text-cyan-300">Flutter</span>
                                <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs font-mono text-purple-400">Dialogflow AI</span>
                                <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs font-mono text-amber-400">Firebase Auth</span>
                                <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs font-mono text-emerald-400">Biometrics</span>
                                <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs font-mono text-zinc-300">Cubit</span>
                            </div>

                            <div class="pt-4 flex items-center gap-4">
                                <span class="text-xs font-mono text-zinc-500">Ready for image upload: <code class="text-zinc-300">/public/images/projects/banking.png</code></span>
                            </div>
                        </div>

                        <!-- Project visual display -->
                        <div class="lg:col-span-6 flex justify-center">
                            <div class="relative w-full max-w-md aspect-[16/10] rounded-2xl overflow-hidden bg-gradient-to-br from-purple-950/40 via-indigo-950/30 to-zinc-950 p-6 border border-white/10 flex flex-col justify-between shadow-2xl">
                                <div class="flex items-center justify-between">
                                    <span class="text-xs font-mono text-purple-400 font-bold">Secure Banking</span>
                                    <span class="px-2 py-0.5 rounded-full bg-emerald-500/20 text-emerald-300 text-[9px] font-mono">Encrypted</span>
                                </div>

                                <!-- Banking card visual -->
                                <div class="my-auto mx-auto w-64 h-36 rounded-xl bg-gradient-to-r from-violet-600 via-indigo-600 to-purple-800 p-4 text-white flex flex-col justify-between shadow-2xl border border-white/20 transform group-hover:scale-105 transition duration-300">
                                    <div class="flex items-center justify-between">
                                        <span class="text-xs font-mono tracking-widest uppercase">MOHAMED ELSHABRAWY</span>
                                        <i data-lucide="credit-card" class="w-4 h-4"></i>
                                    </div>
                                    <div class="font-mono text-sm tracking-wider">•••• •••• •••• 4289</div>
                                    <div class="flex items-center justify-between text-[10px] font-mono text-white/80">
                                        <span>EXP 08/29</span>
                                        <span class="font-bold text-xs">VISA</span>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between text-[10px] font-mono text-zinc-500">
                                    <span>Dialogflow AI Bot Active</span>
                                    <span>Clean Cubit State</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>


                <!-- PROJECT 3: Real Estate Mobile App -->
                <article class="card-3d rounded-3xl glass-pill p-6 sm:p-10 border border-white/10 overflow-hidden relative group" data-cursor-view>
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        <div class="lg:col-span-6 space-y-4">
                            <div class="flex items-center gap-3">
                                <span class="font-mono text-xs text-amber-400 uppercase tracking-wider">03</span>
                                <div class="w-8 h-px bg-white/20"></div>
                                <span class="font-mono text-xs text-zinc-400 uppercase tracking-wider">PropTech & Maps</span>
                            </div>
                            <h3 class="text-3xl sm:text-4xl font-bold text-white group-hover:text-amber-300 transition">Real Estate Mobile App</h3>
                            <p class="text-zinc-300 text-sm sm:text-base leading-relaxed">
                                Property discovery and rental marketplace with interactive Google Maps integration, custom filters (budget, rooms, location), virtual tours, and Firebase real-time database syncing.
                            </p>
                            
                            <div class="flex flex-wrap gap-2 pt-2">
                                <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs font-mono text-cyan-300">Flutter</span>
                                <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs font-mono text-amber-400">Google Maps API</span>
                                <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs font-mono text-orange-400">Firebase</span>
                                <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs font-mono text-zinc-300">Clean Architecture</span>
                            </div>

                            <div class="pt-4 flex items-center gap-4">
                                <span class="text-xs font-mono text-zinc-500">Ready for image upload: <code class="text-zinc-300">/public/images/projects/realestate.png</code></span>
                            </div>
                        </div>

                        <!-- Project visual display -->
                        <div class="lg:col-span-6 flex justify-center">
                            <div class="relative w-full max-w-md aspect-[16/10] rounded-2xl overflow-hidden bg-gradient-to-br from-amber-950/40 via-stone-900/30 to-zinc-950 p-6 border border-white/10 flex flex-col justify-between shadow-2xl">
                                <div class="flex items-center justify-between">
                                    <span class="text-xs font-mono text-amber-400">Interactive Map View</span>
                                    <span class="text-[10px] font-mono text-zinc-400">New Cairo, Egypt</span>
                                </div>

                                <div class="p-4 rounded-xl bg-zinc-900/80 border border-white/10 my-auto flex items-center gap-4">
                                    <div class="w-16 h-16 rounded-lg bg-amber-500/20 flex items-center justify-center text-amber-400">
                                        <i data-lucide="home" class="w-8 h-8"></i>
                                    </div>
                                    <div class="space-y-1">
                                        <div class="text-sm font-semibold text-white">Luxury Penthouse</div>
                                        <div class="text-xs text-amber-400 font-mono">$450,000 · 3 Beds · 2 Baths</div>
                                        <div class="text-[10px] text-zinc-400 flex items-center gap-1">
                                            <i data-lucide="map-pin" class="w-3 h-3 text-cyan-400"></i>
                                            <span>Fifth Settlement, Cairo</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between text-[10px] font-mono text-zinc-500">
                                    <span>Geo-Location Filter</span>
                                    <span>Live Marker Clustering</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>


                <!-- PROJECT 4: ERP & Cashier Suite (Odoo & POS) -->
                <article class="card-3d rounded-3xl glass-pill p-6 sm:p-10 border border-white/10 overflow-hidden relative group" data-cursor-view>
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                        <div class="lg:col-span-6 space-y-4">
                            <div class="flex items-center gap-3">
                                <span class="font-mono text-xs text-emerald-400 uppercase tracking-wider">04</span>
                                <div class="w-8 h-px bg-white/20"></div>
                                <span class="font-mono text-xs text-zinc-400 uppercase tracking-wider">Enterprise & POS</span>
                            </div>
                            <h3 class="text-3xl sm:text-4xl font-bold text-white group-hover:text-emerald-300 transition">Odoo HR & POS Cashier System</h3>
                            <p class="text-zinc-300 text-sm sm:text-base leading-relaxed">
                                Complete point-of-sale and human resources ecosystem. Includes Mada payment gateway integration, offline-capable inventory and sales with Hive database, and direct API bridge with Odoo ERP.
                            </p>
                            
                            <div class="flex flex-wrap gap-2 pt-2">
                                <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs font-mono text-cyan-300">Flutter & Dart</span>
                                <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs font-mono text-emerald-400">Odoo ERP</span>
                                <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs font-mono text-purple-400">Hive DB</span>
                                <span class="px-3 py-1 rounded-md bg-white/5 border border-white/10 text-xs font-mono text-blue-400">Mada Gateway</span>
                            </div>

                            <div class="pt-4 flex items-center gap-4">
                                <span class="text-xs font-mono text-zinc-500">Ready for image upload: <code class="text-zinc-300">/public/images/projects/pos.png</code></span>
                            </div>
                        </div>

                        <!-- Project visual display -->
                        <div class="lg:col-span-6 flex justify-center">
                            <div class="relative w-full max-w-md aspect-[16/10] rounded-2xl overflow-hidden bg-gradient-to-br from-emerald-950/40 via-teal-950/30 to-zinc-950 p-6 border border-white/10 flex flex-col justify-between shadow-2xl">
                                <div class="flex items-center justify-between">
                                    <span class="text-xs font-mono text-emerald-400 font-bold">POS Terminal Online</span>
                                    <span class="px-2 py-0.5 rounded-full bg-cyan-500/20 text-cyan-300 text-[9px] font-mono">Mada Verified</span>
                                </div>

                                <div class="my-auto grid grid-cols-2 gap-3">
                                    <div class="p-3 rounded-lg bg-zinc-900/90 border border-white/5 text-left">
                                        <div class="text-[10px] font-mono text-zinc-400">Today's Sales</div>
                                        <div class="text-lg font-bold text-white mt-1">42,850 EGP</div>
                                        <div class="text-[9px] text-emerald-400 font-mono">+18% vs yesterday</div>
                                    </div>
                                    <div class="p-3 rounded-lg bg-zinc-900/90 border border-white/5 text-left">
                                        <div class="text-[10px] font-mono text-zinc-400">Odoo Sync Status</div>
                                        <div class="text-sm font-semibold text-emerald-400 mt-1 flex items-center gap-1.5">
                                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span> Synced
                                        </div>
                                        <div class="text-[9px] text-zinc-400 font-mono">0 pending orders</div>
                                    </div>
                                </div>

                                <div class="flex items-center justify-between text-[10px] font-mono text-zinc-500">
                                    <span>High-throughput Transaction Bus</span>
                                    <span>Fast Thermal Printing</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>

            </div>
        </section>


        <!-- 5. EXPERIENCE & TIMELINE -->
        <section id="experience" class="w-full max-w-4xl px-4 py-24 border-t border-white/5">
            <div class="text-center mb-16">
                <p class="font-mono text-xs uppercase tracking-[0.2em] text-cyan-400 mb-2">Career</p>
                <h2 class="instrument-serif text-3xl sm:text-5xl text-white">Professional Experience</h2>
            </div>

            <div class="relative pl-6 sm:pl-8 border-l border-white/10 space-y-12">

                <!-- Job 1 -->
                <div class="relative group">
                    <!-- Dot -->
                    <div class="absolute -left-[31px] sm:-left-[39px] top-1.5 w-3.5 h-3.5 rounded-full bg-cyan-500 border-4 border-[#070709] group-hover:scale-125 transition"></div>

                    <div class="flex flex-wrap items-center justify-between gap-2">
                        <h3 class="text-xl font-bold text-white">Flutter Developer</h3>
                        <span class="px-3 py-1 rounded-full glass-pill text-xs font-mono text-cyan-300 border border-cyan-500/30">May 2025 – Present</span>
                    </div>
                    <p class="text-sm font-medium text-cyan-400 mt-1">Quick Services Solutions · Cairo, Egypt</p>
                    <ul class="mt-3 space-y-2 text-sm text-zinc-400 list-disc list-inside">
                        <li>Developed and maintained high-performance cross-platform mobile apps for Android & iOS.</li>
                        <li>Implemented robust BLoC / Cubit state management architectures ensuring zero state leaks.</li>
                        <li>Integrated Firebase services (Auth, Firestore, Cloud Messaging) and local Hive persistence.</li>
                        <li>Collaborated closely with backend & UI/UX teams following strict Clean Architecture guidelines.</li>
                    </ul>
                </div>

                <!-- Job 2 -->
                <div class="relative group">
                    <div class="absolute -left-[31px] sm:-left-[39px] top-1.5 w-3.5 h-3.5 rounded-full bg-purple-500 border-4 border-[#070709] group-hover:scale-125 transition"></div>

                    <div class="flex flex-wrap items-center justify-between gap-2">
                        <h3 class="text-xl font-bold text-white">Flutter Developer Intern</h3>
                        <span class="px-3 py-1 rounded-full glass-pill text-xs font-mono text-purple-300 border border-purple-500/30">Feb 2025 – May 2025</span>
                    </div>
                    <p class="text-sm font-medium text-purple-400 mt-1">OnClick · Cairo, Egypt</p>
                    <ul class="mt-3 space-y-2 text-sm text-zinc-400 list-disc list-inside">
                        <li>Crafted pixel-perfect Material Design UI components and custom widgets.</li>
                        <li>Consumed REST APIs using Dio and handled asynchronous state flows.</li>
                        <li>Participated in code reviews, Postman API contract testing, and performance profiling.</li>
                    </ul>
                </div>

                <!-- Job 3 -->
                <div class="relative group">
                    <div class="absolute -left-[31px] sm:-left-[39px] top-1.5 w-3.5 h-3.5 rounded-full bg-zinc-600 border-4 border-[#070709] group-hover:scale-125 transition"></div>

                    <div class="flex flex-wrap items-center justify-between gap-2">
                        <h3 class="text-xl font-bold text-white">Flutter Course & Intensive Internship</h3>
                        <span class="px-3 py-1 rounded-full glass-pill text-xs font-mono text-zinc-400 border border-white/10">July 2021 – Nov 2021</span>
                    </div>
                    <p class="text-sm font-medium text-zinc-400 mt-1">IT Sharks · Cairo, Egypt</p>
                    <p class="mt-2 text-sm text-zinc-400">Completed intensive training in Dart & Flutter, shipping practical applications covering e-commerce, location services, and local databases.</p>
                </div>

            </div>
        </section>


        <!-- 6. CONTACT SECTION -->
        <section id="contact" class="w-full max-w-4xl px-4 py-24 border-t border-white/5">
            <div class="rounded-3xl glass-pill p-8 sm:p-14 border border-white/10 text-center relative overflow-hidden">
                <div class="absolute -top-24 left-1/2 -translate-x-1/2 w-96 h-96 bg-gradient-to-b from-cyan-500/20 to-purple-600/20 rounded-full blur-3xl pointer-events-none"></div>

                <div class="relative z-10 max-w-xl mx-auto space-y-6">
                    <span class="font-mono text-xs uppercase tracking-widest text-cyan-400">Let's Connect</span>
                    <h2 class="instrument-serif text-3xl sm:text-5xl text-white">Have a project or opportunity in mind?</h2>
                    <p class="text-zinc-400 text-sm leading-relaxed">
                        I am currently available for Flutter mobile app development contracts, remote full-time positions, and collaborations. Let's build something exceptional together.
                    </p>

                    <div class="pt-4 flex flex-col sm:flex-row items-center justify-center gap-4">
                        <a href="mailto:melshebrawy428@gmail.com" class="w-full sm:w-auto px-8 py-3.5 rounded-full bg-white text-black font-semibold text-sm hover:bg-zinc-200 transition shadow-lg flex items-center justify-center gap-2">
                            <i data-lucide="mail" class="w-4 h-4"></i>
                            <span>Send an Email</span>
                        </a>
                        <a href="https://linkedin.com/in/moshabrawyflutterdev" target="_blank" class="w-full sm:w-auto px-8 py-3.5 rounded-full glass-pill border border-white/15 text-white font-medium text-sm hover:bg-white/10 transition flex items-center justify-center gap-2">
                            <i data-lucide="linkedin" class="w-4 h-4 text-cyan-400"></i>
                            <span>LinkedIn Profile</span>
                        </a>
                    </div>

                    <div class="pt-6 font-mono text-xs text-zinc-500">
                        Phone / WhatsApp: <a href="tel:+201069412004" class="text-zinc-300 hover:text-cyan-400 underline decoration-zinc-700 underline-offset-4">+20 106 941 2004</a>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- Footer -->
    <footer class="w-full border-t border-white/5 py-8 text-center text-xs font-mono text-zinc-600">
        <p>© {{ date('Y') }} Mohamed Elshabrawy. Crafted with precision & clean code.</p>
    </footer>

    <!-- Interactive script for particles and cursor -->
    <script>
        // Lucide icons init
        if (window.lucide) {
            lucide.createIcons();
        }

        // Mouse follower & custom cursor
        document.addEventListener('DOMContentLoaded', () => {
            const dot = document.createElement('div');
            dot.className = 'cursor-dot hidden md:block';
            
            const follower = document.createElement('div');
            follower.className = 'cursor-follower hidden md:block';

            const badge = document.createElement('div');
            badge.className = 'cursor-badge hidden md:block';
            badge.innerText = 'EXPLORE';

            document.body.appendChild(dot);
            document.body.appendChild(follower);
            document.body.appendChild(badge);

            let mouseX = window.innerWidth / 2;
            let mouseY = window.innerHeight / 2;
            let followerX = mouseX;
            let followerY = mouseY;

            window.addEventListener('mousemove', (e) => {
                mouseX = e.clientX;
                mouseY = e.clientY;
                dot.style.transform = `translate(${mouseX}px, ${mouseY}px) translate(-50%, -50%)`;
            });

            function animateCursor() {
                followerX += (mouseX - followerX) * 0.15;
                followerY += (mouseY - followerY) * 0.15;
                follower.style.transform = `translate(${followerX}px, ${followerY}px) translate(-50%, -50%)`;
                badge.style.transform = `translate(${followerX}px, ${followerY}px) translate(-50%, -50%)`;
                requestAnimationFrame(animateCursor);
            }
            requestAnimationFrame(animateCursor);

            // Hover interactions
            const interactives = document.querySelectorAll('a, button, input');
            interactives.forEach(el => {
                el.addEventListener('mouseenter', () => follower.classList.add('hovering'));
                el.addEventListener('mouseleave', () => follower.classList.remove('hovering'));
            });

            const projectCards = document.querySelectorAll('[data-cursor-view]');
            projectCards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    follower.classList.add('hovering');
                    badge.classList.add('visible');
                });
                card.addEventListener('mouseleave', () => {
                    follower.classList.remove('hovering');
                    badge.classList.remove('visible');
                });
            });

            // Particles Canvas
            const canvas = document.getElementById('particles-canvas');
            if (canvas) {
                const ctx = canvas.getContext('2d');
                let width = canvas.width = window.innerWidth;
                let height = canvas.height = window.innerHeight;

                const particles = [];
                const particleCount = Math.min(Math.floor(window.innerWidth / 24), 60);

                class Particle {
                    constructor() {
                        this.x = Math.random() * width;
                        this.y = Math.random() * height;
                        this.vx = (Math.random() - 0.5) * 0.5;
                        this.vy = (Math.random() - 0.5) * 0.5;
                        this.radius = Math.random() * 1.5 + 0.5;
                        this.baseAlpha = Math.random() * 0.4 + 0.15;
                        this.alpha = this.baseAlpha;
                    }
                    update() {
                        this.x += this.vx;
                        this.y += this.vy;
                        if (this.x < 0 || this.x > width) this.vx *= -1;
                        if (this.y < 0 || this.y > height) this.vy *= -1;

                        const dx = mouseX - this.x;
                        const dy = mouseY - this.y;
                        const dist = Math.sqrt(dx * dx + dy * dy);
                        if (dist < 120) {
                            const force = (120 - dist) / 120;
                            this.x -= (dx / dist) * force * 1.2;
                            this.y -= (dy / dist) * force * 1.2;
                            this.alpha = Math.min(1, this.baseAlpha + force * 0.6);
                        } else {
                            this.alpha = this.baseAlpha;
                        }
                    }
                    draw() {
                        ctx.beginPath();
                        ctx.arc(this.x, this.y, this.radius, 0, Math.PI * 2);
                        ctx.fillStyle = `rgba(56, 189, 248, ${this.alpha})`;
                        ctx.fill();
                    }
                }

                for (let i = 0; i < particleCount; i++) {
                    particles.push(new Particle());
                }

                function drawLines() {
                    for (let i = 0; i < particles.length; i++) {
                        for (let j = i + 1; j < particles.length; j++) {
                            const dx = particles[i].x - particles[j].x;
                            const dy = particles[i].y - particles[j].y;
                            const dist = Math.sqrt(dx * dx + dy * dy);
                            if (dist < 100) {
                                const alpha = (1 - dist / 100) * 0.14;
                                ctx.strokeStyle = `rgba(99, 102, 241, ${alpha})`;
                                ctx.lineWidth = 0.8;
                                ctx.beginPath();
                                ctx.moveTo(particles[i].x, particles[i].y);
                                ctx.lineTo(particles[j].x, particles[j].y);
                                ctx.stroke();
                            }
                        }
                    }
                }

                function loop() {
                    ctx.clearRect(0, 0, width, height);
                    particles.forEach(p => {
                        p.update();
                        p.draw();
                    });
                    drawLines();
                    requestAnimationFrame(loop);
                }
                loop();

                window.addEventListener('resize', () => {
                    width = canvas.width = window.innerWidth;
                    height = canvas.height = window.innerHeight;
                });
            }

            // 3D card tilt
            const tiltCards = document.querySelectorAll('.card-3d');
            tiltCards.forEach(card => {
                card.addEventListener('mousemove', (e) => {
                    const rect = card.getBoundingClientRect();
                    const x = e.clientX - rect.left;
                    const y = e.clientY - rect.top;
                    const centerX = rect.width / 2;
                    const centerY = rect.height / 2;
                    const rotateX = ((y - centerY) / centerY) * -5;
                    const rotateY = ((x - centerX) / centerX) * 5;
                    card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-4px)`;
                });
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'perspective(1000px) rotateX(0deg) rotateY(0deg) translateY(0px)';
                });
            });

            // Copy Email
            const copyBtn = document.getElementById('copy-email-btn');
            if (copyBtn) {
                copyBtn.addEventListener('click', () => {
                    const email = copyBtn.getAttribute('data-email');
                    navigator.clipboard.writeText(email).then(() => {
                        const toast = document.getElementById('copy-toast');
                        if (toast) {
                            toast.classList.remove('opacity-0', 'translate-y-2');
                            toast.classList.add('opacity-100', 'translate-y-0');
                            setTimeout(() => {
                                toast.classList.add('opacity-0', 'translate-y-2');
                                toast.classList.remove('opacity-100', 'translate-y-0');
                            }, 2200);
                        }
                    });
                });
            }

            // Splash screen 2-second timeout with smooth fade-out
            const splash = document.getElementById('splash-screen');
            if (splash) {
                setTimeout(() => {
                    splash.style.opacity = '0';
                    splash.style.visibility = 'hidden';
                    setTimeout(() => {
                        splash.remove();
                    }, 700);
                }, 2000);
            }
        });
    </script>
</body>
</html>
