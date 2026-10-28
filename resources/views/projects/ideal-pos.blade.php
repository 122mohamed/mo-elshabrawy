<!DOCTYPE html>
<html lang="en" class="scroll-smooth dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ideal POS & ERP Solution | Mohamed Elshabrawy Portfolio</title>
    <meta name="description" content="Case Study: Ideal POS & ERP Solution - Enterprise-grade, offline-first Flutter Point of Sale & ERP platform with Odoo integration, SoftPOS NFC payments, and AI HR assistant.">

    <!-- Fonts: Instrument Serif, Inter, & JetBrains Mono -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Inter:wght@300;400;500;600;700;800&family=JetBrains+Mono:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <!-- Fallback Tailwind v4 CDN -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <style type="text/tailwindcss">
            @theme {
                --color-dark: #070709;
                --color-card-dark: #0e0e12;
                --color-accent-cyan: #38bdf8;
                --color-accent-emerald: #10b981;
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
            selection-background-color: #10b981;
            selection-color: #000;
        }

        ::selection {
            background: #10b981;
            color: #070709;
        }

        .instrument-serif {
            font-family: 'Instrument Serif', Georgia, serif;
        }

        .glass-pill {
            background: rgba(255, 255, 255, 0.04);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .glass-pill:hover {
            background: rgba(255, 255, 255, 0.08);
            border-color: rgba(255, 255, 255, 0.18);
        }

        .glass-card {
            background: rgba(14, 14, 18, 0.65);
            backdrop-filter: blur(18px);
            -webkit-backdrop-filter: blur(18px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .glass-card:hover {
            border-color: rgba(16, 185, 129, 0.3);
        }

        .hero-glow {
            animation: heroGlowPulse 9s ease-in-out infinite alternate;
        }

        @keyframes heroGlowPulse {
            0% { transform: scale(1) translate(-50%, -50%); opacity: 0.5; }
            100% { transform: scale(1.18) translate(-48%, -48%); opacity: 0.85; }
        }

        .gradient-text-emerald {
            background: linear-gradient(135deg, #34d399 0%, #10b981 50%, #38bdf8 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>
<body class="relative min-h-screen bg-[#070709] text-zinc-100 antialiased selection:bg-emerald-500 selection:text-black">

    <!-- Interactive Cursor Follower elements handled by app.js -->
    
    <!-- Ambient Glowing Orbs -->
    <div class="pointer-events-none fixed top-24 left-1/2 -translate-x-1/2 w-[850px] h-[450px] bg-gradient-to-r from-emerald-600/15 via-teal-600/15 to-cyan-600/10 rounded-full blur-[130px] hero-glow z-0"></div>
    <div class="pointer-events-none fixed bottom-10 right-10 w-[500px] h-[500px] bg-gradient-to-tr from-emerald-900/10 to-indigo-900/10 rounded-full blur-[140px] z-0"></div>

    <!-- Floating Top Navigation -->
    <header class="fixed top-5 left-1/2 -translate-x-1/2 z-50 w-[calc(100%-2rem)] max-w-5xl">
        <nav class="flex items-center justify-between p-2 rounded-full glass-pill border border-white/10 shadow-[0_12px_35px_rgba(0,0,0,0.6)]">
            <a href="{{ route('home') }}/#projects" class="flex items-center gap-2 pl-3 pr-4 py-1.5 rounded-full text-xs sm:text-sm font-medium text-zinc-300 hover:text-white hover:bg-white/10 transition group">
                <i data-lucide="arrow-left" class="w-4 h-4 text-emerald-400 group-hover:-translate-x-1 transition duration-200"></i>
                <span>Portfolio</span>
            </a>

            <!-- In-page Navigation anchors (Hidden on small screens) -->
            <div class="hidden md:flex items-center gap-1 text-xs text-zinc-400 font-mono">
                <a href="#overview" class="px-2.5 py-1 rounded-full hover:text-white hover:bg-white/5 transition">Overview</a>
                <a href="#architecture" class="px-2.5 py-1 rounded-full hover:text-white hover:bg-white/5 transition">Architecture</a>
                <a href="#engineering" class="px-2.5 py-1 rounded-full hover:text-white hover:bg-white/5 transition">Highlights</a>
                <a href="#modules" class="px-2.5 py-1 rounded-full hover:text-white hover:bg-white/5 transition">Modules</a>
                <a href="#tech-stack" class="px-2.5 py-1 rounded-full hover:text-white hover:bg-white/5 transition">Stack</a>
                <a href="#resume" class="px-2.5 py-1 rounded-full hover:text-white hover:bg-white/5 transition">Resume</a>
            </div>

            <div class="flex items-center gap-2">
                <a href="{{ asset('cv/Mohamed_Elshabrawy_Flutter_Developer_CV-1.pdf') }}" download="Mohamed_Elshabrawy_Flutter_Developer.pdf" target="_blank" class="px-3 py-1.5 rounded-full text-xs font-mono text-cyan-400 hover:text-cyan-300 hover:bg-white/10 transition flex items-center gap-1.5">
                    <i data-lucide="download" class="w-3.5 h-3.5"></i>
                    <span>CV</span>
                </a>
                <a href="{{ route('home') }}/#contact" class="flex items-center gap-1.5 px-4 py-1.5 rounded-full text-xs font-semibold bg-emerald-400 text-black hover:bg-emerald-300 transition shadow-sm">
                    <span>Contact</span>
                    <i data-lucide="mail" class="w-3.5 h-3.5"></i>
                </a>
            </div>
        </nav>
    </header>

    <!-- Copy Notification Toast -->
    <div id="copy-toast" class="fixed bottom-6 right-6 z-50 flex items-center gap-2.5 px-4 py-2.5 rounded-xl bg-zinc-900 border border-emerald-500/50 text-emerald-300 text-xs sm:text-sm font-mono shadow-2xl transition-all duration-300 opacity-0 translate-y-2 pointer-events-none">
        <i data-lucide="check-circle" class="w-4 h-4 text-emerald-400"></i>
        <span id="toast-message">Copied to clipboard!</span>
    </div>

    <!-- Lightbox Modal for High-Res Image Inspection -->
    <div id="image-modal" class="fixed inset-0 z-[9999] bg-black/95 backdrop-blur-xl flex items-center justify-center p-4 opacity-0 pointer-events-none transition-all duration-300">
        <button id="close-modal-btn" class="absolute top-6 right-6 w-10 h-10 rounded-full bg-white/10 hover:bg-white/20 text-white flex items-center justify-center transition" aria-label="Close modal">
            <i data-lucide="x" class="w-6 h-6"></i>
        </button>
        <div class="relative max-w-7xl max-h-[90vh] overflow-auto rounded-2xl border border-white/20 shadow-2xl">
            <img id="modal-img" src="{{ asset('images/ideal_pos.png') }}" alt="Ideal POS & ERP High-Res Screenshot" class="w-full h-auto object-contain rounded-2xl" />
        </div>
    </div>

    <!-- MAIN CASE STUDY WRAPPER -->
    <main class="relative z-10 flex flex-col items-center w-full px-4 pt-28 pb-32">

        <!-- 1. HERO SECTION -->
        <section class="w-full max-w-5xl flex flex-col items-center text-center pt-8 pb-14">
            
            <!-- Category & Badge -->
            <div class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-emerald-950/60 border border-emerald-500/30 text-emerald-300 text-xs font-mono mb-6 shadow-inner">
                <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span>
                <span class="tracking-widest uppercase font-semibold">ENTERPRISE CASE STUDY</span>
                <span class="text-zinc-600">|</span>
                <span class="text-zinc-400">FLUTTER & ODOO ERP</span>
            </div>

            <!-- Main Heading -->
            <h1 class="instrument-serif text-4xl sm:text-6xl md:text-7xl font-normal tracking-tight text-white max-w-4xl leading-[1.1]">
                Ideal POS &amp; ERP Solution
            </h1>

            <!-- Subtitle -->
            <p class="text-zinc-300 text-base sm:text-lg md:text-xl font-light max-w-3xl mt-5 leading-relaxed">
                An enterprise-grade, <strong class="text-emerald-400 font-medium">offline-first Point of Sale &amp; ERP mobile platform</strong> designed for retail, restaurants, and quick service chains. Engineered with Clean Architecture, bank-grade <strong class="text-cyan-300 font-medium">SQLCipher AES-256</strong> encryption, contactless <strong class="text-amber-300 font-medium">SoftPOS (NFC Tap-on-Phone)</strong>, POS hardware thermal printing, and an intelligent <strong class="text-indigo-300 font-medium">AI HR Assistant</strong>.
            </p>

            <!-- Quick Metadata Badges -->
            <div class="flex flex-wrap items-center justify-center gap-3 mt-8">
                <span class="px-3.5 py-1.5 rounded-lg bg-white/5 border border-white/10 text-xs font-mono text-zinc-300 flex items-center gap-2">
                    <i data-lucide="briefcase" class="w-3.5 h-3.5 text-emerald-400"></i>
                    <span>Retail &amp; QSR Hospitality</span>
                </span>
                <span class="px-3.5 py-1.5 rounded-lg bg-white/5 border border-white/10 text-xs font-mono text-zinc-300 flex items-center gap-2">
                    <i data-lucide="layers" class="w-3.5 h-3.5 text-cyan-400"></i>
                    <span>Clean Architecture &amp; DDD</span>
                </span>
                <span class="px-3.5 py-1.5 rounded-lg bg-white/5 border border-white/10 text-xs font-mono text-zinc-300 flex items-center gap-2">
                    <i data-lucide="shield-check" class="w-3.5 h-3.5 text-purple-400"></i>
                    <span>Bank-Grade Encryption</span>
                </span>
                <span class="px-3.5 py-1.5 rounded-lg bg-white/5 border border-white/10 text-xs font-mono text-zinc-300 flex items-center gap-2">
                    <i data-lucide="contactless" class="w-3.5 h-3.5 text-amber-400"></i>
                    <span>NearPay SoftPOS (NFC)</span>
                </span>
                <span class="px-3.5 py-1.5 rounded-lg bg-white/5 border border-white/10 text-xs font-mono text-zinc-300 flex items-center gap-2">
                    <i data-lucide="file-check-2" class="w-3.5 h-3.5 text-emerald-400"></i>
                    <span>ZATCA Phase 1 &amp; 2</span>
                </span>
            </div>

            <!-- Primary Showcase: High-Res Image Display Container -->
            <div class="relative w-full max-w-5xl mt-12 rounded-3xl p-2.5 sm:p-4 bg-gradient-to-b from-emerald-500/20 via-zinc-900/60 to-black/80 border border-emerald-500/30 shadow-[0_20px_70px_rgba(16,185,129,0.15)] group">
                
                <!-- Terminal Bar Header -->
                <div class="flex items-center justify-between px-3 sm:px-5 py-2.5 rounded-2xl bg-zinc-950/80 border border-white/10 mb-3">
                    <div class="flex items-center gap-2">
                        <div class="w-3 h-3 rounded-full bg-red-500/80"></div>
                        <div class="w-3 h-3 rounded-full bg-yellow-500/80"></div>
                        <div class="w-3 h-3 rounded-full bg-emerald-500/80"></div>
                        <span class="ml-2 font-mono text-xs text-zinc-400 hidden sm:inline">IDAL POS &amp; ERP v3.8 · Production Terminal</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <span class="flex items-center gap-1.5 font-mono text-[11px] text-emerald-400 bg-emerald-950/60 px-2.5 py-0.5 rounded-full border border-emerald-500/40">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-ping"></span>
                            <span>Odoo RPC Online</span>
                        </span>
                        <button id="open-lightbox-btn" class="px-3 py-1 rounded-md bg-white/10 hover:bg-white/20 text-xs font-mono text-zinc-200 transition flex items-center gap-1.5">
                            <i data-lucide="maximize-2" class="w-3.5 h-3.5 text-emerald-400"></i>
                            <span class="hidden sm:inline">Zoom High-Res</span>
                        </button>
                    </div>
                </div>

                <!-- Framed High-Res Image with Hover Effect -->
                <div class="relative w-full aspect-[16/9] sm:aspect-[16/10] rounded-2xl overflow-hidden bg-zinc-950 border border-white/10 shadow-2xl cursor-pointer" id="hero-img-trigger">
                    <img 
                        src="{{ asset('images/ideal_pos.png') }}" 
                        alt="Ideal POS & ERP Mobile Solution Interface" 
                        class="w-full h-full object-cover object-center group-hover:scale-[1.02] transition-transform duration-700 ease-out"
                    />

                    <!-- Interactive Magnify Overlay -->
                    <div class="absolute inset-0 bg-black/40 opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-center justify-center pointer-events-none">
                        <div class="px-5 py-2.5 rounded-full glass-pill border border-emerald-400/50 text-white font-mono text-xs sm:text-sm font-semibold flex items-center gap-2 shadow-2xl backdrop-blur-md">
                            <i data-lucide="search" class="w-4 h-4 text-emerald-400"></i>
                            <span>Click to Inspect Fullscreen (5760 x 3240)</span>
                        </div>
                    </div>
                </div>

                <!-- Footer Metrics Strip -->
                <div class="grid grid-cols-2 sm:grid-cols-4 gap-2 sm:gap-4 mt-3 pt-1 text-left">
                    <div class="p-3 rounded-xl bg-zinc-950/60 border border-white/5">
                        <span class="text-[10px] font-mono text-zinc-500 uppercase block">Database Engine</span>
                        <span class="text-xs sm:text-sm font-semibold text-emerald-400 font-mono">Drift &amp; SQLCipher</span>
                    </div>
                    <div class="p-3 rounded-xl bg-zinc-950/60 border border-white/5">
                        <span class="text-[10px] font-mono text-zinc-500 uppercase block">Contactless Payments</span>
                        <span class="text-xs sm:text-sm font-semibold text-amber-300 font-mono">NearPay SoftPOS (NFC)</span>
                    </div>
                    <div class="p-3 rounded-xl bg-zinc-950/60 border border-white/5">
                        <span class="text-[10px] font-mono text-zinc-500 uppercase block">Hardware Printing</span>
                        <span class="text-xs sm:text-sm font-semibold text-cyan-300 font-mono">Sunmi &amp; Newland POS</span>
                    </div>
                    <div class="p-3 rounded-xl bg-zinc-950/60 border border-white/5">
                        <span class="text-[10px] font-mono text-zinc-500 uppercase block">AI HR Assistant</span>
                        <span class="text-xs sm:text-sm font-semibold text-indigo-300 font-mono">Conversational Agent</span>
                    </div>
                </div>
            </div>
        </section>


        <!-- 2. KEY ARCHITECTURAL METRICS (STATS BAR) -->
        <section class="w-full max-w-5xl py-10 border-t border-b border-white/5 my-6">
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4">
                
                <div class="p-4 rounded-2xl glass-card text-center flex flex-col justify-between">
                    <div class="font-mono text-2xl sm:text-3xl font-bold text-emerald-400">60+ FPS</div>
                    <p class="text-zinc-400 text-xs mt-1">Sustained UI Rate</p>
                    <span class="text-[10px] font-mono text-zinc-500 mt-2 block">Dart Isolates for PDF &amp; Printing</span>
                </div>

                <div class="p-4 rounded-2xl glass-card text-center flex flex-col justify-between">
                    <div class="font-mono text-2xl sm:text-3xl font-bold text-cyan-400">100%</div>
                    <p class="text-zinc-400 text-xs mt-1">Offline-First</p>
                    <span class="text-[10px] font-mono text-zinc-500 mt-2 block">Zero Transaction Loss</span>
                </div>

                <div class="p-4 rounded-2xl glass-card text-center flex flex-col justify-between">
                    <div class="font-mono text-2xl sm:text-3xl font-bold text-emerald-300">0.00%</div>
                    <p class="text-zinc-400 text-xs mt-1">Math Errors</p>
                    <span class="text-[10px] font-mono text-zinc-500 mt-2 block">Arbitrary Precision Decimal</span>
                </div>

                <div class="p-4 rounded-2xl glass-card text-center flex flex-col justify-between">
                    <div class="font-mono text-2xl sm:text-3xl font-bold text-purple-400">AES-256</div>
                    <p class="text-zinc-400 text-xs mt-1">Bank-Grade Crypto</p>
                    <span class="text-[10px] font-mono text-zinc-500 mt-2 block">SQLCipher &amp; Keystore</span>
                </div>

                <div class="p-4 rounded-2xl glass-card text-center flex flex-col justify-between">
                    <div class="font-mono text-2xl sm:text-3xl font-bold text-amber-400">&lt; 1s</div>
                    <p class="text-zinc-400 text-xs mt-1">NFC Tap-to-Pay</p>
                    <span class="text-[10px] font-mono text-zinc-500 mt-2 block">NearPay SoftPOS SDK</span>
                </div>

                <div class="p-4 rounded-2xl glass-card text-center flex flex-col justify-between">
                    <div class="font-mono text-2xl sm:text-3xl font-bold text-teal-400">ZATCA</div>
                    <p class="text-zinc-400 text-xs mt-1">Phase 1 &amp; 2 Ready</p>
                    <span class="text-[10px] font-mono text-zinc-500 mt-2 block">Base64 TLV QR Codes</span>
                </div>

            </div>
        </section>


        <!-- 3. PROJECT OVERVIEW & THE PROBLEM/SOLUTION -->
        <section id="overview" class="w-full max-w-5xl py-16">
            <div class="flex items-center gap-3 mb-4">
                <span class="font-mono text-xs text-emerald-400 uppercase tracking-widest">01 / OVERVIEW</span>
                <div class="h-px flex-1 bg-white/10"></div>
            </div>
            
            <h2 class="instrument-serif text-3xl sm:text-4xl text-white mb-6">
                Redefining Edge Retail &amp; QSR Operations
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-stretch">
                <!-- The Challenge Card -->
                <div class="p-6 sm:p-8 rounded-3xl glass-card border border-red-500/20 relative flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="w-10 h-10 rounded-xl bg-red-500/10 border border-red-500/30 flex items-center justify-center text-red-400">
                            <i data-lucide="alert-triangle" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white">The Operational Challenge</h3>
                        <p class="text-zinc-300 text-sm leading-relaxed">
                            Traditional retail and food &amp; beverage enterprises suffer from severe point-of-sale friction during peak hours:
                        </p>
                        <ul class="space-y-2.5 text-zinc-400 text-xs sm:text-sm">
                            <li class="flex items-start gap-2.5">
                                <i data-lucide="x-circle" class="w-4 h-4 text-red-400 shrink-0 mt-0.5"></i>
                                <span><strong>Network Fragility:</strong> Slow or dropped internet connections halt checkout lines and corrupt cart records.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i data-lucide="x-circle" class="w-4 h-4 text-red-400 shrink-0 mt-0.5"></i>
                                <span><strong>Hardware Clutter:</strong> Separate standalone card payment terminals, external receipt printers, and desktop PCs cause clutter and maintenance overhead.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i data-lucide="x-circle" class="w-4 h-4 text-red-400 shrink-0 mt-0.5"></i>
                                <span><strong>Tax Compliance Hurdles:</strong> Stricter regulatory mandates (such as Saudi ZATCA e-invoicing) require cryptographic QR generation with zero arithmetic tolerance.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i data-lucide="x-circle" class="w-4 h-4 text-red-400 shrink-0 mt-0.5"></i>
                                <span><strong>Fragmented Staff Management:</strong> Cashiers lack visibility into their shifts, leaves, and commissions, burdening store managers with administrative queries.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- The Engineering Solution Card -->
                <div class="p-6 sm:p-8 rounded-3xl glass-card border border-emerald-500/20 relative flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="w-10 h-10 rounded-xl bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center text-emerald-400">
                            <i data-lucide="check-check" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-xl font-bold text-white">The Ideal POS Solution</h3>
                        <p class="text-zinc-300 text-sm leading-relaxed">
                            A unified, high-performance Flutter mobile application deployed directly onto handheld smart POS devices and tablets:
                        </p>
                        <ul class="space-y-2.5 text-zinc-300 text-xs sm:text-sm">
                            <li class="flex items-start gap-2.5">
                                <i data-lucide="check" class="w-4 h-4 text-emerald-400 shrink-0 mt-0.5"></i>
                                <span><strong>Autonomous Offline-First:</strong> Local SQLite with Drift ORM stores every catalog item and cart mutation locally, syncing transparently with Odoo ERP when online.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i data-lucide="check" class="w-4 h-4 text-emerald-400 shrink-0 mt-0.5"></i>
                                <span><strong>All-In-One SoftPOS Terminal:</strong> NearPay SDK integration allows customers to tap contactless bank cards (Mada, Visa, Mastercard, Apple Pay) directly on the device.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i data-lucide="check" class="w-4 h-4 text-emerald-400 shrink-0 mt-0.5"></i>
                                <span><strong>ZATCA Certified Invoicing:</strong> Native generation of compliant PDF tax invoices and ESC/POS thermal receipts with Base64 TLV QR codes.</span>
                            </li>
                            <li class="flex items-start gap-2.5">
                                <i data-lucide="check" class="w-4 h-4 text-emerald-400 shrink-0 mt-0.5"></i>
                                <span><strong>AI HR Intelligence:</strong> An embedded conversational AI assistant allows cashiers to check leave balances and submit advance requests conversationally.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>


        <!-- 4. SOFTWARE ARCHITECTURE & CODE DESIGN -->
        <section id="architecture" class="w-full max-w-5xl py-16 border-t border-white/5">
            <div class="flex items-center gap-3 mb-4">
                <span class="font-mono text-xs text-emerald-400 uppercase tracking-widest">02 / ARCHITECTURE</span>
                <div class="h-px flex-1 bg-white/10"></div>
            </div>

            <h2 class="instrument-serif text-3xl sm:text-4xl text-white mb-4">
                Clean Architecture &amp; Domain-Driven Design (DDD)
            </h2>
            <p class="text-zinc-400 text-sm sm:text-base max-w-3xl mb-12">
                Built from the ground up on modular Clean Architecture principles, ensuring complete decoupling between enterprise business rules, external ERP communication, and UI rendering.
            </p>

            <!-- 3 Isolated Layers Breakdown -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-12">
                
                <!-- Domain Layer -->
                <div class="p-6 rounded-2xl glass-card border-t-2 border-t-emerald-400 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="font-mono text-xs text-emerald-400 font-bold uppercase tracking-wider">Layer 01</span>
                            <span class="px-2 py-0.5 rounded bg-emerald-500/10 text-emerald-300 text-[10px] font-mono">Pure Dart</span>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Domain Layer</h3>
                        <p class="text-zinc-400 text-xs sm:text-sm leading-relaxed mb-4">
                            The heart of the application containing pure business logic:
                        </p>
                        <ul class="space-y-2 text-xs text-zinc-300 font-mono">
                            <li class="flex items-center gap-2">
                                <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-emerald-400"></i>
                                <span>Entities &amp; Value Objects</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-emerald-400"></i>
                                <span>UseCases (Interactors)</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-emerald-400"></i>
                                <span>Repository Interfaces</span>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-4 border-t border-white/5 mt-4 text-[11px] text-zinc-500">
                        Zero 3rd-party dependencies for 100% unit testability and business logic purity.
                    </div>
                </div>

                <!-- Data & Infrastructure Layer -->
                <div class="p-6 rounded-2xl glass-card border-t-2 border-t-cyan-400 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="font-mono text-xs text-cyan-400 font-bold uppercase tracking-wider">Layer 02</span>
                            <span class="px-2 py-0.5 rounded bg-cyan-500/10 text-cyan-300 text-[10px] font-mono">Infrastructure</span>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Data &amp; Infrastructure</h3>
                        <p class="text-zinc-400 text-xs sm:text-sm leading-relaxed mb-4">
                            Implements repository abstractions and coordinates data persistence:
                        </p>
                        <ul class="space-y-2 text-xs text-zinc-300 font-mono">
                            <li class="flex items-center gap-2">
                                <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-cyan-400"></i>
                                <span>Drift Type-Safe SQLite ORM</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-cyan-400"></i>
                                <span>Custom In-House Odoo RPC</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-cyan-400"></i>
                                <span>DTOs &amp; Bi-Directional Mappers</span>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-4 border-t border-white/5 mt-4 text-[11px] text-zinc-500">
                        Custom RPC client inside <code class="text-zinc-300">package/odoo</code> supporting JSON-RPC and XML-RPC.
                    </div>
                </div>

                <!-- Presentation Layer -->
                <div class="p-6 rounded-2xl glass-card border-t-2 border-t-indigo-400 flex flex-col justify-between">
                    <div>
                        <div class="flex items-center justify-between mb-4">
                            <span class="font-mono text-xs text-indigo-400 font-bold uppercase tracking-wider">Layer 03</span>
                            <span class="px-2 py-0.5 rounded bg-indigo-500/10 text-indigo-300 text-[10px] font-mono">BLoC / Cubit</span>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Presentation Layer</h3>
                        <p class="text-zinc-400 text-xs sm:text-sm leading-relaxed mb-4">
                            Manages deterministic UI states and user interactions:
                        </p>
                        <ul class="space-y-2 text-xs text-zinc-300 font-mono">
                            <li class="flex items-center gap-2">
                                <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-indigo-400"></i>
                                <span>Flutter BLoC &amp; Cubit</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-indigo-400"></i>
                                <span>Unidirectional Data Flow</span>
                            </li>
                            <li class="flex items-center gap-2">
                                <i data-lucide="chevron-right" class="w-3.5 h-3.5 text-indigo-400"></i>
                                <span>Responsive Adaptive Layouts</span>
                            </li>
                        </ul>
                    </div>
                    <div class="pt-4 border-t border-white/5 mt-4 text-[11px] text-zinc-500">
                        Widgets are strictly dumb views driven by immutable state objects.
                    </div>
                </div>

            </div>

            <!-- Architectural Blueprint Diagram -->
            <div class="p-6 sm:p-8 rounded-3xl glass-card border border-white/10 mb-12">
                <div class="flex items-center justify-between mb-6">
                    <div class="flex items-center gap-2">
                        <i data-lucide="git-branch" class="w-5 h-5 text-emerald-400"></i>
                        <h3 class="text-lg font-bold text-white">System Architecture &amp; Data Pipeline</h3>
                    </div>
                    <span class="text-xs font-mono text-zinc-400">Unidirectional Dependency Rule</span>
                </div>

                <!-- Visual Node Flow -->
                <div class="space-y-4">
                    
                    <!-- Presentation UI Layer -->
                    <div class="p-4 rounded-xl bg-indigo-950/30 border border-indigo-500/30 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div class="flex items-center gap-3">
                            <span class="w-8 h-8 rounded-lg bg-indigo-500/20 text-indigo-400 flex items-center justify-center font-mono font-bold text-xs">UI</span>
                            <div>
                                <div class="text-sm font-semibold text-white">Presentation Layer (Flutter BLoC &amp; Cubits)</div>
                                <div class="text-xs text-zinc-400 font-mono">CartBloc · SessionCubit · InventoryCubit · NearPayBloc · HRAssistantBloc</div>
                            </div>
                        </div>
                        <span class="px-2.5 py-1 rounded bg-indigo-500/10 text-indigo-300 text-xs font-mono">Dispatches Events</span>
                    </div>

                    <div class="flex justify-center text-zinc-500"><i data-lucide="arrow-down" class="w-4 h-4"></i></div>

                    <!-- Domain UseCases Layer -->
                    <div class="p-4 rounded-xl bg-emerald-950/30 border border-emerald-500/30 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div class="flex items-center gap-3">
                            <span class="w-8 h-8 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center font-mono font-bold text-xs">DOM</span>
                            <div>
                                <div class="text-sm font-semibold text-white">Domain Core (Business Rules &amp; UseCases)</div>
                                <div class="text-xs text-zinc-400 font-mono">ProcessOrderUseCase · SyncQueueUseCase · CalculateZatcaTaxUseCase · SubmitLeaveUseCase</div>
                            </div>
                        </div>
                        <span class="px-2.5 py-1 rounded bg-emerald-500/10 text-emerald-300 text-xs font-mono">Zero Dependencies</span>
                    </div>

                    <div class="flex justify-center text-zinc-500"><i data-lucide="arrow-down" class="w-4 h-4"></i></div>

                    <!-- Data Repositories Layer -->
                    <div class="p-4 rounded-xl bg-cyan-950/30 border border-cyan-500/30 flex flex-col sm:flex-row items-center justify-between gap-4">
                        <div class="flex items-center gap-3">
                            <span class="w-8 h-8 rounded-lg bg-cyan-500/20 text-cyan-400 flex items-center justify-center font-mono font-bold text-xs">DATA</span>
                            <div>
                                <div class="text-sm font-semibold text-white">Data Repositories &amp; Failover Sync Router</div>
                                <div class="text-xs text-zinc-400 font-mono">OrderRepositoryImpl · SyncQueueRepository · OdooRpcBridge</div>
                            </div>
                        </div>
                        <span class="px-2.5 py-1 rounded bg-cyan-500/10 text-cyan-300 text-xs font-mono">Idempotent UUID v4</span>
                    </div>

                    <div class="flex justify-center text-zinc-500"><i data-lucide="arrow-down" class="w-4 h-4"></i></div>

                    <!-- Storage & External Dual Endpoints -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        
                        <!-- Local Encrypted Cache -->
                        <div class="p-4 rounded-xl bg-zinc-900/90 border border-purple-500/30 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg bg-purple-500/20 text-purple-400 flex items-center justify-center">
                                <i data-lucide="database" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <div class="text-xs font-bold text-white uppercase font-mono">Local Storage (Offline-First)</div>
                                <div class="text-xs text-purple-300 font-mono">Drift ORM + SQLCipher (AES-256)</div>
                                <div class="text-[11px] text-zinc-400">Android Keystore Key Management</div>
                            </div>
                        </div>

                        <!-- Remote Odoo ERP Server -->
                        <div class="p-4 rounded-xl bg-zinc-900/90 border border-emerald-500/30 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-lg bg-emerald-500/20 text-emerald-400 flex items-center justify-center">
                                <i data-lucide="cloud" class="w-5 h-5"></i>
                            </div>
                            <div>
                                <div class="text-xs font-bold text-white uppercase font-mono">Enterprise Backend (Remote)</div>
                                <div class="text-xs text-emerald-300 font-mono">Odoo ERP RPC Gateway</div>
                                <div class="text-[11px] text-zinc-400">SSL Pinning (TOFU) · Exponential Retry</div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- 5 Essential Design Patterns & Principles -->
            <div class="space-y-4">
                <h3 class="text-xl font-bold text-white mb-2">Applied Engineering Design Patterns</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    
                    <div class="p-5 rounded-2xl glass-card">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                            <h4 class="text-sm font-bold text-white font-mono">Dependency Injection &amp; IoC (GetIt)</h4>
                        </div>
                        <p class="text-xs text-zinc-400 leading-relaxed">
                            Each module defines a dedicated <code class="text-zinc-300">FeatureInjector</code> that registers datasources, repositories, and usecases. This enforces loose coupling, accelerates compilation, and enables mock injection for unit tests.
                        </p>
                    </div>

                    <div class="p-5 rounded-2xl glass-card">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="w-2 h-2 rounded-full bg-cyan-400"></span>
                            <h4 class="text-sm font-bold text-white font-mono">Repository Pattern with Dynamic Failover</h4>
                        </div>
                        <p class="text-xs text-zinc-400 leading-relaxed">
                            Abstracts storage mechanics from the domain layer. The repository transparently decides whether to serve product queries directly from the local SQLite cache or pull live stock quanta from Odoo ERP.
                        </p>
                    </div>

                    <div class="p-5 rounded-2xl glass-card">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="w-2 h-2 rounded-full bg-amber-400"></span>
                            <h4 class="text-sm font-bold text-white font-mono">Idempotent Transactions via UUID v4</h4>
                        </div>
                        <p class="text-xs text-zinc-400 leading-relaxed">
                            Every checkout, split payment, and invoice is tagged with a globally unique UUID v4. When network connections drop and retry queues fire, Odoo recognizes duplicate transmissions and prevents double-billing.
                        </p>
                    </div>

                    <div class="p-5 rounded-2xl glass-card">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="w-2 h-2 rounded-full bg-purple-400"></span>
                            <h4 class="text-sm font-bold text-white font-mono">High-Precision Financial Math (Decimal)</h4>
                        </div>
                        <p class="text-xs text-zinc-400 leading-relaxed">
                            Floating-point arithmetic (IEEE 754) is notoriously error-prone in finance. All monetary amounts, 15% ZATCA VAT calculations, and line discounts use <code class="text-zinc-300">package:decimal</code>, guaranteeing 0.00% rounding error.
                        </p>
                    </div>

                    <div class="p-5 rounded-2xl glass-card md:col-span-2">
                        <div class="flex items-center gap-2 mb-2">
                            <span class="w-2 h-2 rounded-full bg-emerald-400"></span>
                            <h4 class="text-sm font-bold text-white font-mono">Multi-Threading via Dart Isolates (Background Rendering)</h4>
                        </div>
                        <p class="text-xs text-zinc-400 leading-relaxed">
                            Heavy compute workloads—such as generating multi-page PDF tax invoices, rendering Base64 TLV QR matrices, and rasterizing bitmaps for 80mm ESC/POS thermal printers—are offloaded to separate background <strong class="text-white">Dart Isolates</strong>. The main UI thread never drops below 60 FPS, ensuring zero cashier stuttering.
                        </p>
                    </div>

                </div>
            </div>

        </section>


        <!-- 5. ADVANCED TECHNICAL HIGHLIGHTS & ENGINEERING SOLUTIONS -->
        <section id="engineering" class="w-full max-w-5xl py-16 border-t border-white/5">
            <div class="flex items-center gap-3 mb-4">
                <span class="font-mono text-xs text-emerald-400 uppercase tracking-widest">03 / TECHNICAL HIGHLIGHTS</span>
                <div class="h-px flex-1 bg-white/10"></div>
            </div>

            <h2 class="instrument-serif text-3xl sm:text-4xl text-white mb-4">
                Five Core Engineering Pillars
            </h2>
            <p class="text-zinc-400 text-sm sm:text-base max-w-3xl mb-12">
                Architectural solutions built to withstand high-traffic enterprise demands, intermittent connections, and strict bank security standards.
            </p>

            <div class="space-y-8">
                
                <!-- Pillar 1: Offline-First Engine -->
                <div class="p-6 sm:p-8 rounded-3xl glass-card border border-emerald-500/20">
                    <div class="flex flex-col lg:flex-row gap-6 items-start justify-between">
                        <div class="space-y-4 max-w-2xl">
                            <div class="flex items-center gap-2">
                                <span class="px-2.5 py-1 rounded bg-emerald-500/10 text-emerald-300 font-mono text-xs">Pillar 01</span>
                                <h3 class="text-xl sm:text-2xl font-bold text-white">Intelligent Offline-First &amp; Autonomous Odoo Sync</h3>
                            </div>
                            <p class="text-zinc-300 text-sm leading-relaxed">
                                Cashiers cannot wait for a server handshake during rush hours. Ideal POS runs a comprehensive local replica of products, price lists, customer accounts, and stock quotas using <strong class="text-white">Drift ORM</strong> (type-safe SQLite).
                            </p>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-zinc-400">
                                <div class="p-3 rounded-xl bg-black/40 border border-white/5">
                                    <strong class="text-emerald-300 block mb-1 font-mono">SyncService &amp; Connectivity:</strong>
                                    Listens to network status via <code class="text-zinc-300">connectivity_plus</code>. Automatically queues offline mutations and flushes when bandwidth restores.
                                </div>
                                <div class="p-3 rounded-xl bg-black/40 border border-white/5">
                                    <strong class="text-emerald-300 block mb-1 font-mono">Exponential Backoff:</strong>
                                    Implements intelligent retry timing (1s, 2s, 4s, 8s up to 60s) to avoid flooding the Odoo RPC server during intermittent network flapping.
                                </div>
                            </div>
                        </div>

                        <!-- Finite State Machine Badge -->
                        <div class="w-full lg:w-72 p-4 rounded-2xl bg-zinc-950/80 border border-white/10 shrink-0 font-mono text-xs space-y-2">
                            <span class="text-zinc-500 text-[10px] uppercase block">Transaction State Machine</span>
                            <div class="flex items-center justify-between text-zinc-400">
                                <span>1. Draft Order</span>
                                <span class="text-zinc-500">→</span>
                            </div>
                            <div class="flex items-center justify-between text-amber-300">
                                <span>2. confirmed_local</span>
                                <span class="text-zinc-500">→</span>
                            </div>
                            <div class="flex items-center justify-between text-cyan-300">
                                <span>3. SyncQueue Pending</span>
                                <span class="text-zinc-500">→</span>
                            </div>
                            <div class="flex items-center justify-between text-emerald-400 font-bold">
                                <span>4. synced_to_odoo</span>
                                <i data-lucide="check" class="w-3.5 h-3.5"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pillar 2: Enterprise Security -->
                <div class="p-6 sm:p-8 rounded-3xl glass-card border border-purple-500/20">
                    <div class="flex flex-col lg:flex-row gap-6 items-start justify-between">
                        <div class="space-y-4 max-w-2xl">
                            <div class="flex items-center gap-2">
                                <span class="px-2.5 py-1 rounded bg-purple-500/10 text-purple-300 font-mono text-xs">Pillar 02</span>
                                <h3 class="text-xl sm:text-2xl font-bold text-white">Bank-Grade Security &amp; On-Device Encryption</h3>
                            </div>
                            <p class="text-zinc-300 text-sm leading-relaxed">
                                Since transactional and customer data is stored locally, POS terminals are hardened with defense-in-depth enterprise security:
                            </p>
                            <ul class="space-y-2.5 text-xs sm:text-sm text-zinc-300">
                                <li class="flex items-start gap-2.5">
                                    <i data-lucide="shield" class="w-4 h-4 text-purple-400 shrink-0 mt-0.5"></i>
                                    <span><strong>Full-Database Encryption:</strong> All SQLite files on flash memory are encrypted at rest using <code class="text-zinc-200">SQLCipher AES-256</code> (<code class="text-zinc-400">sqlcipher_flutter_libs</code>).</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <i data-lucide="key" class="w-4 h-4 text-purple-400 shrink-0 mt-0.5"></i>
                                    <span><strong>Hardware Keystore Integration:</strong> Encryption keys are never written to disk in plain text; they are stored in the hardware security module via <code class="text-zinc-200">FlutterSecureStorage</code> (Android Keystore / TEE).</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <i data-lucide="lock" class="w-4 h-4 text-purple-400 shrink-0 mt-0.5"></i>
                                    <span><strong>SSL Certificate Pinning (TOFU):</strong> Protects RPC payloads from Man-In-The-Middle (MITM) inspection on compromised local Wi-Fi networks.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <i data-lucide="shield-alert" class="w-4 h-4 text-purple-400 shrink-0 mt-0.5"></i>
                                    <span><strong>Tamper &amp; Root Detection:</strong> Checks for jailbreaks, rooted binaries, and debugger attachment using <code class="text-zinc-200">safe_device</code>.</span>
                                </li>
                                <li class="flex items-start gap-2.5">
                                    <i data-lucide="fingerprint" class="w-4 h-4 text-purple-400 shrink-0 mt-0.5"></i>
                                    <span><strong>Rapid Teller Lock Screen:</strong> PIN-authenticated cashier handover (<code class="text-zinc-200">flutter_screen_lock</code>) with supervisor authorization for refunds and discounts.</span>
                                </li>
                            </ul>
                        </div>

                        <!-- Security Features Card -->
                        <div class="w-full lg:w-72 p-4 rounded-2xl bg-zinc-950/80 border border-white/10 shrink-0 space-y-3">
                            <span class="text-zinc-500 font-mono text-[10px] uppercase block">Security Matrix</span>
                            <div class="p-2.5 rounded-lg bg-white/5 border border-white/5 flex items-center justify-between text-xs">
                                <span class="text-zinc-300">Data At Rest</span>
                                <span class="text-purple-400 font-mono">AES-256</span>
                            </div>
                            <div class="p-2.5 rounded-lg bg-white/5 border border-white/5 flex items-center justify-between text-xs">
                                <span class="text-zinc-300">Key Storage</span>
                                <span class="text-purple-400 font-mono">Keystore / TEE</span>
                            </div>
                            <div class="p-2.5 rounded-lg bg-white/5 border border-white/5 flex items-center justify-between text-xs">
                                <span class="text-zinc-300">Transport Layer</span>
                                <span class="text-purple-400 font-mono">Pinned TLS 1.3</span>
                            </div>
                            <div class="p-2.5 rounded-lg bg-white/5 border border-white/5 flex items-center justify-between text-xs">
                                <span class="text-zinc-300">Root / Tamper</span>
                                <span class="text-emerald-400 font-mono">Active Guard</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pillar 3: SoftPOS & Contactless NFC Payments -->
                <div class="p-6 sm:p-8 rounded-3xl glass-card border border-amber-500/20">
                    <div class="flex flex-col lg:flex-row gap-6 items-start justify-between">
                        <div class="space-y-4 max-w-2xl">
                            <div class="flex items-center gap-2">
                                <span class="px-2.5 py-1 rounded bg-amber-500/10 text-amber-300 font-mono text-xs">Pillar 03</span>
                                <h3 class="text-xl sm:text-2xl font-bold text-white">SoftPOS Contactless Card Payments (NFC Tap-on-Phone)</h3>
                            </div>
                            <p class="text-zinc-300 text-sm leading-relaxed">
                                Eliminates costly external credit card terminals by embedding direct bank-certified SoftPOS payment processing directly inside the Flutter app via the <strong class="text-white">NearPay SDK</strong>.
                            </p>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-zinc-400">
                                <div class="p-3 rounded-xl bg-black/40 border border-white/5">
                                    <strong class="text-amber-300 block mb-1 font-mono">NearPay NFC Engine:</strong>
                                    Customers tap physical debit/credit cards or phones (Mada, Visa, Mastercard, Apple Pay) directly on the smart POS terminal or Android phone.
                                </div>
                                <div class="p-3 rounded-xl bg-black/40 border border-white/5">
                                    <strong class="text-amber-300 block mb-1 font-mono">Multi-Tender &amp; Split Pay:</strong>
                                    Seamlessly handles split payments (e.g., partial Cash + partial NFC Tap + Customer Ledger Account credit) in a single transaction.
                                </div>
                            </div>
                        </div>

                        <!-- Card Networks Strip -->
                        <div class="w-full lg:w-72 p-4 rounded-2xl bg-zinc-950/80 border border-white/10 shrink-0 space-y-2.5">
                            <span class="text-zinc-500 font-mono text-[10px] uppercase block">Certified Networks</span>
                            <div class="flex items-center justify-between text-xs font-mono text-zinc-300 p-2 rounded bg-white/5">
                                <span>Mada Debit (KSA)</span>
                                <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                            </div>
                            <div class="flex items-center justify-between text-xs font-mono text-zinc-300 p-2 rounded bg-white/5">
                                <span>Visa &amp; Mastercard</span>
                                <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                            </div>
                            <div class="flex items-center justify-between text-xs font-mono text-zinc-300 p-2 rounded bg-white/5">
                                <span>Apple Pay &amp; Google Pay</span>
                                <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                            </div>
                            <div class="flex items-center justify-between text-xs font-mono text-zinc-300 p-2 rounded bg-white/5">
                                <span>Bank Reconciliation Receipt</span>
                                <i data-lucide="check" class="w-3.5 h-3.5 text-emerald-400"></i>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pillar 4: Smart POS Thermal Printer Hardware Integration -->
                <div class="p-6 sm:p-8 rounded-3xl glass-card border border-cyan-500/20">
                    <div class="flex flex-col lg:flex-row gap-6 items-start justify-between">
                        <div class="space-y-4 max-w-2xl">
                            <div class="flex items-center gap-2">
                                <span class="px-2.5 py-1 rounded bg-cyan-500/10 text-cyan-300 font-mono text-xs">Pillar 04</span>
                                <h3 class="text-xl sm:text-2xl font-bold text-white">Smart POS Thermal Printer Hardware Integration</h3>
                            </div>
                            <p class="text-zinc-300 text-sm leading-relaxed">
                                Built-in hardware abstraction drivers interface seamlessly with smart POS terminals and external thermal receipt printers across restaurant kitchens and retail checkouts:
                            </p>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-zinc-400">
                                <div class="p-3 rounded-xl bg-black/40 border border-white/5">
                                    <strong class="text-cyan-300 block mb-1 font-mono">Sunmi &amp; Newland SDKs:</strong>
                                    Direct hardware communication with Sunmi (<code class="text-zinc-300">sunmi_printer_plus</code>), Newland devices, and Ethernet/Wi-Fi ESC/POS printers.
                                </div>
                                <div class="p-3 rounded-xl bg-black/40 border border-white/5">
                                    <strong class="text-cyan-300 block mb-1 font-mono">ZATCA Compliant QR:</strong>
                                    Encodes Seller Name, VAT ID, Timestamp, Invoice Total, and VAT Amount in Base64 Tag-Length-Value (TLV) format according to ZATCA Fatoora regulations.
                                </div>
                            </div>
                        </div>

                        <!-- Paper Width Specs -->
                        <div class="w-full lg:w-72 p-4 rounded-2xl bg-zinc-950/80 border border-white/10 shrink-0 space-y-2 font-mono text-xs">
                            <span class="text-zinc-500 text-[10px] uppercase block">Printing Specs</span>
                            <div class="p-2.5 rounded-lg bg-white/5 flex items-center justify-between">
                                <span class="text-zinc-400">Paper Standard</span>
                                <span class="text-cyan-300 font-bold">80mm &amp; 58mm</span>
                            </div>
                            <div class="p-2.5 rounded-lg bg-white/5 flex items-center justify-between">
                                <span class="text-zinc-400">Encoding</span>
                                <span class="text-cyan-300">ESC/POS Bitmap</span>
                            </div>
                            <div class="p-2.5 rounded-lg bg-white/5 flex items-center justify-between">
                                <span class="text-zinc-400">Threading</span>
                                <span class="text-emerald-400">Background Isolate</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pillar 5: HR Module & Conversational AI Assistant -->
                <div class="p-6 sm:p-8 rounded-3xl glass-card border border-indigo-500/20">
                    <div class="flex flex-col lg:flex-row gap-6 items-start justify-between">
                        <div class="space-y-4 max-w-2xl">
                            <div class="flex items-center gap-2">
                                <span class="px-2.5 py-1 rounded bg-indigo-500/10 text-indigo-300 font-mono text-xs">Pillar 05</span>
                                <h3 class="text-xl sm:text-2xl font-bold text-white">Integrated HR Management &amp; Conversational AI Agent</h3>
                            </div>
                            <p class="text-zinc-300 text-sm leading-relaxed">
                                Bridges employee operations with cashiering. Instead of switching apps, employees manage their shifts, view performance metrics, and consult an intelligent conversational HR bot right on the POS terminal.
                            </p>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 text-xs text-zinc-400">
                                <div class="p-3 rounded-xl bg-black/40 border border-white/5">
                                    <strong class="text-indigo-300 block mb-1 font-mono">Shift &amp; Attendance Analytics:</strong>
                                    Clock-in/out logging, overtime calculation, and interactive shift performance charts rendered with <code class="text-zinc-300">fl_chart</code>.
                                </div>
                                <div class="p-3 rounded-xl bg-black/40 border border-white/5">
                                    <strong class="text-indigo-300 block mb-1 font-mono">Conversational AI Chatbot:</strong>
                                    Natural language agent answering employee policy questions, checking remaining annual leaves, and creating advance salary requests.
                                </div>
                            </div>
                        </div>

                        <!-- Chat Simulation Badge -->
                        <div class="w-full lg:w-72 p-4 rounded-2xl bg-zinc-950/80 border border-white/10 shrink-0 space-y-2 text-xs">
                            <span class="text-zinc-500 font-mono text-[10px] uppercase block">AI Assistant Sample</span>
                            <div class="p-2 rounded bg-white/5 text-zinc-300 text-[11px]">
                                <span class="text-cyan-400 font-mono text-[10px] block">Cashier:</span>
                                "What's my remaining paid leave balance?"
                            </div>
                            <div class="p-2 rounded bg-indigo-950/60 border border-indigo-500/30 text-indigo-200 text-[11px]">
                                <span class="text-indigo-400 font-mono text-[10px] block">AI HR Agent:</span>
                                "You have 14 days remaining. Would you like me to submit a vacation request?"
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>


        <!-- 6. OPERATIONAL MODULES & CAPABILITIES -->
        <section id="modules" class="w-full max-w-5xl py-16 border-t border-white/5">
            <div class="flex items-center gap-3 mb-4">
                <span class="font-mono text-xs text-emerald-400 uppercase tracking-widest">04 / COMPLETE MODULE SUITE</span>
                <div class="h-px flex-1 bg-white/10"></div>
            </div>

            <h2 class="instrument-serif text-3xl sm:text-4xl text-white mb-4">
                Operational Modules Breakdown
            </h2>
            <p class="text-zinc-400 text-sm sm:text-base max-w-3xl mb-12">
                A granular look at the end-to-end operational capabilities delivered inside Ideal POS &amp; ERP.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <!-- Module 1: Sales & Cart Engine -->
                <div class="p-6 rounded-2xl glass-card flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center text-emerald-400 mb-4">
                            <i data-lucide="shopping-cart" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Sales &amp; Cart Engine</h3>
                        <p class="text-zinc-400 text-xs sm:text-sm leading-relaxed mb-4">
                            Sub-second cashier checkout interface. Features fast camera &amp; laser barcode scanning, line-item discounts, invoice-level coupons, cart hold/suspend, and custom product price overrides with manager approval.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-white/5 text-[11px] font-mono text-emerald-400">
                        High-throughput POS UI
                    </div>
                </div>

                <!-- Module 2: POS Sessions -->
                <div class="p-6 rounded-2xl glass-card flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-cyan-500/10 border border-cyan-500/30 flex items-center justify-center text-cyan-400 mb-4">
                            <i data-lucide="clock" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">POS Sessions &amp; Cash Float</h3>
                        <p class="text-zinc-400 text-xs sm:text-sm leading-relaxed mb-4">
                            Full lifecycle session management. Supports opening cash floats, mid-shift cash in/out, blind cash counts during shift close, and automated drawer discrepancy reporting synced to Odoo cash registers.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-white/5 text-[11px] font-mono text-cyan-400">
                        Audit &amp; Float Control
                    </div>
                </div>

                <!-- Module 3: Inventory & Warehouse -->
                <div class="p-6 rounded-2xl glass-card flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/30 flex items-center justify-center text-amber-400 mb-4">
                            <i data-lucide="boxes" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Inventory &amp; Warehouse</h3>
                        <p class="text-zinc-400 text-xs sm:text-sm leading-relaxed mb-4">
                            Real-time on-hand stock lookups (<code class="text-zinc-300">stock.quant</code>), goods dispatch receipts (<code class="text-zinc-300">stock.picking</code>), multi-warehouse transfers, and automated store replenishment requisitions.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-white/5 text-[11px] font-mono text-amber-400">
                        Odoo Stock Models
                    </div>
                </div>

                <!-- Module 4: ZATCA Compliance -->
                <div class="p-6 rounded-2xl glass-card flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-teal-500/10 border border-teal-500/30 flex items-center justify-center text-teal-400 mb-4">
                            <i data-lucide="qr-code" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">ZATCA Tax Invoicing</h3>
                        <p class="text-zinc-400 text-xs sm:text-sm leading-relaxed mb-4">
                            Strict 15% VAT tax engine compliant with Saudi ZATCA Fatoora regulations. Automatically calculates tax breakdowns and encodes Base64 TLV electronic QR codes for both simplified and standard tax invoices.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-white/5 text-[11px] font-mono text-teal-400">
                        ZATCA Phase 1 &amp; Phase 2
                    </div>
                </div>

                <!-- Module 5: Customer CRM & Credit -->
                <div class="p-6 rounded-2xl glass-card flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-purple-500/10 border border-purple-500/30 flex items-center justify-center text-purple-400 mb-4">
                            <i data-lucide="users" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Customer CRM &amp; Credit</h3>
                        <p class="text-zinc-400 text-xs sm:text-sm leading-relaxed mb-4">
                            Partner management (<code class="text-zinc-300">res.partner</code>) with corporate tax ID validation, customer loyalty points, store credit balances, and deferred payment terms with credit limits.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-white/5 text-[11px] font-mono text-purple-400">
                        B2B &amp; Retail Ledgers
                    </div>
                </div>

                <!-- Module 6: Multi-Language & Theme -->
                <div class="p-6 rounded-2xl glass-card flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-blue-500/10 border border-blue-500/30 flex items-center justify-center text-blue-400 mb-4">
                            <i data-lucide="languages" class="w-5 h-5"></i>
                        </div>
                        <h3 class="text-lg font-bold text-white mb-2">Bilingual &amp; Adaptive UI</h3>
                        <p class="text-zinc-400 text-xs sm:text-sm leading-relaxed mb-4">
                            Full bidirectional layout support with native Arabic (RTL) and English (LTR). Responsive typography that dynamically scales across 5.5" handheld POS terminals, 10" tablets, and 15.6" dual-display registers.
                        </p>
                    </div>
                    <div class="pt-3 border-t border-white/5 text-[11px] font-mono text-blue-400">
                        Handheld to 15.6" POS
                    </div>
                </div>

                <!-- Module 7: Device Licensing (Full Width on desktop) -->
                <div class="p-6 rounded-2xl glass-card md:col-span-2 lg:col-span-3 flex flex-col sm:flex-row items-center justify-between gap-6">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-emerald-500/10 border border-emerald-500/30 flex items-center justify-center text-emerald-400 shrink-0">
                            <i data-lucide="cpu" class="w-5 h-5"></i>
                        </div>
                        <div>
                            <h3 class="text-lg font-bold text-white mb-1">Device Licensing &amp; Cloud Tenant Binding</h3>
                            <p class="text-zinc-400 text-xs sm:text-sm leading-relaxed">
                                Hardware fingerprinting service (<code class="text-zinc-300">MobileLicenseService</code>) that binds specific smart POS serial numbers to enterprise tenant licenses, validating subscription status, remote lockouts, and feature access permissions.
                            </p>
                        </div>
                    </div>
                    <span class="px-3.5 py-1.5 rounded-full bg-emerald-500/10 border border-emerald-500/30 text-emerald-300 font-mono text-xs shrink-0">
                        Multi-Tenant Cloud Guard
                    </span>
                </div>

            </div>
        </section>


        <!-- 7. TECHNOLOGY STACK MATRIX -->
        <section id="tech-stack" class="w-full max-w-5xl py-16 border-t border-white/5">
            <div class="flex items-center gap-3 mb-4">
                <span class="font-mono text-xs text-emerald-400 uppercase tracking-widest">05 / TECH STACK</span>
                <div class="h-px flex-1 bg-white/10"></div>
            </div>

            <h2 class="instrument-serif text-3xl sm:text-4xl text-white mb-4">
                Comprehensive Technology Matrix
            </h2>
            <p class="text-zinc-400 text-sm sm:text-base max-w-3xl mb-12">
                A curated selection of modern, battle-tested tools and frameworks selected for extreme resilience and performance.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                
                <div class="p-5 rounded-2xl glass-card space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-mono font-bold text-emerald-400 uppercase">Core Framework</span>
                        <i data-lucide="code" class="w-4 h-4 text-zinc-500"></i>
                    </div>
                    <div class="text-sm font-semibold text-white">Flutter SDK &amp; Dart 3.9+</div>
                    <p class="text-xs text-zinc-400">High-performance AOT compiled native mobile code running at 60/120 FPS.</p>
                </div>

                <div class="p-5 rounded-2xl glass-card space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-mono font-bold text-cyan-400 uppercase">Architecture</span>
                        <i data-lucide="layers" class="w-4 h-4 text-zinc-500"></i>
                    </div>
                    <div class="text-sm font-semibold text-white">Clean Architecture &amp; DDD</div>
                    <p class="text-xs text-zinc-400">Domain-Driven Design with 3 isolated layers and modular package structure.</p>
                </div>

                <div class="p-5 rounded-2xl glass-card space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-mono font-bold text-indigo-400 uppercase">State Management</span>
                        <i data-lucide="git-merge" class="w-4 h-4 text-zinc-500"></i>
                    </div>
                    <div class="text-sm font-semibold text-white">Flutter BLoC &amp; Cubit</div>
                    <p class="text-xs text-zinc-400">Reactive, predictable, unidirectional state flows with clear separation of concerns.</p>
                </div>

                <div class="p-5 rounded-2xl glass-card space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-mono font-bold text-purple-400 uppercase">Database &amp; Storage</span>
                        <i data-lucide="database" class="w-4 h-4 text-zinc-500"></i>
                    </div>
                    <div class="text-sm font-semibold text-white">Drift ORM &amp; SQLCipher</div>
                    <p class="text-xs text-zinc-400">Type-safe SQLite persistence with full-database AES-256 encryption at rest.</p>
                </div>

                <div class="p-5 rounded-2xl glass-card space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-mono font-bold text-amber-400 uppercase">SoftPOS &amp; NFC</span>
                        <i data-lucide="contactless" class="w-4 h-4 text-zinc-500"></i>
                    </div>
                    <div class="text-sm font-semibold text-white">NearPay Flutter SDK</div>
                    <p class="text-xs text-zinc-400">Direct contactless card payments over NFC (Mada, Visa, Mastercard, Apple Pay).</p>
                </div>

                <div class="p-5 rounded-2xl glass-card space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-mono font-bold text-emerald-400 uppercase">ERP Integration</span>
                        <i data-lucide="server" class="w-4 h-4 text-zinc-500"></i>
                    </div>
                    <div class="text-sm font-semibold text-white">Custom Odoo RPC Client</div>
                    <p class="text-xs text-zinc-400">In-house RPC client (<code class="text-zinc-300">package/odoo</code>) communicating over JSON-RPC with Dio &amp; HTTP.</p>
                </div>

                <div class="p-5 rounded-2xl glass-card space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-mono font-bold text-teal-400 uppercase">POS Hardware</span>
                        <i data-lucide="printer" class="w-4 h-4 text-zinc-500"></i>
                    </div>
                    <div class="text-sm font-semibold text-white">Sunmi Printer Plus &amp; ESC/POS</div>
                    <p class="text-xs text-zinc-400">Native driver integration with Sunmi, Newland POS, and Network thermal printers.</p>
                </div>

                <div class="p-5 rounded-2xl glass-card space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-mono font-bold text-red-400 uppercase">Enterprise Security</span>
                        <i data-lucide="shield-check" class="w-4 h-4 text-zinc-500"></i>
                    </div>
                    <div class="text-sm font-semibold text-white">Keystore, SafeDevice, TOFU Pinning</div>
                    <p class="text-xs text-zinc-400">Flutter Secure Storage, Root/Jailbreak detection, and SSL certificate pinning.</p>
                </div>

                <div class="p-5 rounded-2xl glass-card space-y-3">
                    <div class="flex items-center justify-between">
                        <span class="text-xs font-mono font-bold text-blue-400 uppercase">Data Precision &amp; Math</span>
                        <i data-lucide="calculator" class="w-4 h-4 text-zinc-500"></i>
                    </div>
                    <div class="text-sm font-semibold text-white">Decimal, Equatable, UUID</div>
                    <p class="text-xs text-zinc-400">Zero floating-point calculation errors for ZATCA VAT and financial transactions.</p>
                </div>

            </div>
        </section>


        <!-- 8. ATS-FRIENDLY RESUME / CV BULLETS -->
        <section id="resume" class="w-full max-w-5xl py-16 border-t border-white/5">
            <div class="flex items-center gap-3 mb-4">
                <span class="font-mono text-xs text-emerald-400 uppercase tracking-widest">06 / ATS-FRIENDLY RESUME SUMMARY</span>
                <div class="h-px flex-1 bg-white/10"></div>
            </div>

            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
                <div>
                    <h2 class="instrument-serif text-3xl sm:text-4xl text-white">
                        Curated Experience Bullets
                    </h2>
                    <p class="text-zinc-400 text-sm mt-1">Formatted and optimized for hiring managers, technical leads, and ATS screeners.</p>
                </div>
                <button id="copy-bullets-btn" class="px-4 py-2 rounded-full glass-pill border border-emerald-500/40 text-emerald-300 font-mono text-xs font-semibold hover:bg-emerald-500/10 transition flex items-center gap-2 shrink-0">
                    <i data-lucide="copy" class="w-4 h-4"></i>
                    <span>Copy ATS Bullets</span>
                </button>
            </div>

            <div class="p-6 sm:p-8 rounded-3xl glass-card border border-white/10 relative">
                
                <div class="font-mono text-xs text-emerald-400 mb-4 pb-3 border-b border-white/10 flex items-center justify-between">
                    <span>Enterprise Point of Sale (POS) &amp; ERP Mobile Solution | Flutter, Odoo, Clean Architecture</span>
                    <span class="text-zinc-500 hidden sm:inline">ATS-Optimized</span>
                </div>

                <div id="bullets-content" class="space-y-3 text-zinc-300 text-xs sm:text-sm leading-relaxed">
                    <div class="flex items-start gap-2.5">
                        <span class="text-emerald-400 font-bold mt-1">•</span>
                        <span>Engineered an enterprise-grade offline-first POS application for retail and restaurants, natively integrated with Odoo ERP using Clean Architecture and BLoC/Cubit.</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <span class="text-emerald-400 font-bold mt-1">•</span>
                        <span>Architected a secure, encrypted offline-first data layer leveraging Drift ORM and SQLCipher (AES-256) with hardware-backed encryption keys (FlutterSecureStorage).</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <span class="text-emerald-400 font-bold mt-1">•</span>
                        <span>Designed an autonomous background synchronization engine with network status listeners and exponential backoff retry mechanisms to guarantee zero lost transactions.</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <span class="text-emerald-400 font-bold mt-1">•</span>
                        <span>Implemented seamless SoftPOS contactless card payments (Mada, Visa, Mastercard, Apple Pay) utilizing the NearPay SDK over NFC directly on POS terminals.</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <span class="text-emerald-400 font-bold mt-1">•</span>
                        <span>Integrated hardware thermal printing for Sunmi &amp; Newland POS devices, offloading PDF and receipt rendering into background Dart Isolates to maintain 60+ FPS UI performance.</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <span class="text-emerald-400 font-bold mt-1">•</span>
                        <span>Enforced strict financial precision across tax calculations (ZATCA compliant) and cart calculations using decimal to prevent floating-point rounding discrepancies.</span>
                    </div>
                    <div class="flex items-start gap-2.5">
                        <span class="text-emerald-400 font-bold mt-1">•</span>
                        <span>Embedded a comprehensive HR module featuring attendance analytics (fl_chart) and a conversational AI HR Assistant for employee requests.</span>
                    </div>
                </div>

            </div>
        </section>


        <!-- 9. LIVE DEMO & SHOWCASE ADVICE -->
        <section class="w-full max-w-5xl py-12 border-t border-white/5">
            <div class="p-6 sm:p-8 rounded-3xl bg-gradient-to-br from-emerald-950/40 via-zinc-900/60 to-black/80 border border-emerald-500/30 flex flex-col md:flex-row items-start gap-6">
                <div class="w-12 h-12 rounded-2xl bg-emerald-500/20 text-emerald-400 flex items-center justify-center shrink-0">
                    <i data-lucide="video" class="w-6 h-6"></i>
                </div>
                <div class="space-y-3">
                    <div class="flex items-center gap-2">
                        <span class="px-2 py-0.5 rounded bg-emerald-500/20 text-emerald-300 font-mono text-[10px] font-bold">PORTFOLIO TIP</span>
                        <h3 class="text-lg font-bold text-white">Recommended Video &amp; Interactive Walkthrough Flow</h3>
                    </div>
                    <p class="text-zinc-300 text-xs sm:text-sm leading-relaxed">
                        For recruiter presentations and portfolio screencasts, highlight these five moments to capture the full scope of engineering:
                    </p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-3 pt-2">
                        <div class="p-3 rounded-xl bg-black/40 border border-white/5 text-xs text-zinc-300">
                            <strong class="text-emerald-300 block mb-1">1. Rapid Checkout Flow</strong>
                            Laser barcode scan &amp; instant cart calculations.
                        </div>
                        <div class="p-3 rounded-xl bg-black/40 border border-white/5 text-xs text-zinc-300">
                            <strong class="text-amber-300 block mb-1">2. SoftPOS Tap-to-Pay</strong>
                            Contactless NFC card tap with NearPay SDK.
                        </div>
                        <div class="p-3 rounded-xl bg-black/40 border border-white/5 text-xs text-zinc-300">
                            <strong class="text-cyan-300 block mb-1">3. Thermal Print with QR</strong>
                            ZATCA Base64 TLV invoice output.
                        </div>
                        <div class="p-3 rounded-xl bg-black/40 border border-white/5 text-xs text-zinc-300">
                            <strong class="text-purple-300 block mb-1">4. Offline Mode Recovery</strong>
                            Airplane mode trigger and automatic sync recovery.
                        </div>
                        <div class="p-3 rounded-xl bg-black/40 border border-white/5 text-xs text-zinc-300">
                            <strong class="text-indigo-300 block mb-1">5. AI HR Assistant</strong>
                            Real-time chat inquiring about remaining leaves.
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- 10. BOTTOM NAVIGATION & CALL TO ACTION -->
        <section class="w-full max-w-5xl pt-16 flex flex-col sm:flex-row items-center justify-between gap-6 border-t border-white/10">
            <a href="{{ route('home') }}/#projects" class="inline-flex items-center gap-2 text-sm text-zinc-400 hover:text-white transition group">
                <i data-lucide="arrow-left" class="w-4 h-4 text-emerald-400 group-hover:-translate-x-1 transition duration-200"></i>
                <span>Back to Selected Projects</span>
            </a>

            <div class="flex items-center gap-4">
                <a href="{{ asset('cv/Mohamed_Elshabrawy_Flutter_Developer_CV-1.pdf') }}" download="Mohamed_Elshabrawy_Flutter_Developer.pdf" target="_blank" class="px-5 py-2.5 rounded-full glass-pill border border-white/10 text-xs font-mono font-semibold text-zinc-200 hover:text-white hover:bg-white/10 transition flex items-center gap-2">
                    <i data-lucide="download" class="w-4 h-4 text-cyan-400"></i>
                    <span>Download CV</span>
                </a>

                <a href="{{ route('home') }}/#contact" class="px-6 py-2.5 rounded-full bg-gradient-to-r from-emerald-500 to-teal-500 text-black font-semibold text-xs sm:text-sm hover:from-emerald-400 hover:to-teal-400 transition shadow-[0_0_25px_rgba(16,185,129,0.4)] flex items-center gap-2">
                    <span>Contact Mohamed</span>
                    <i data-lucide="arrow-up-right" class="w-4 h-4"></i>
                </a>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="w-full py-8 border-t border-white/5 text-center text-xs font-mono text-zinc-500">
        <p>© {{ date('Y') }} Mohamed Elshabrawy · Ideal POS Case Study · Engineered with Flutter &amp; Odoo ERP</p>
    </footer>

    <!-- INTERACTIVE JAVASCRIPT -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Re-render Lucide icons
            if (window.lucide) {
                window.lucide.createIcons();
            }

            // Lightbox Modal for screenshot inspection
            const modal = document.getElementById('image-modal');
            const heroTrigger = document.getElementById('hero-img-trigger');
            const openBtn = document.getElementById('open-lightbox-btn');
            const closeBtn = document.getElementById('close-modal-btn');

            function openModal() {
                if (!modal) return;
                modal.classList.remove('opacity-0', 'pointer-events-none');
                modal.classList.add('opacity-100', 'pointer-events-auto');
                document.body.style.overflow = 'hidden';
            }

            function closeModal() {
                if (!modal) return;
                modal.classList.add('opacity-0', 'pointer-events-none');
                modal.classList.remove('opacity-100', 'pointer-events-auto');
                document.body.style.overflow = '';
            }

            if (heroTrigger) heroTrigger.addEventListener('click', openModal);
            if (openBtn) openBtn.addEventListener('click', openModal);
            if (closeBtn) closeBtn.addEventListener('click', closeModal);

            if (modal) {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) closeModal();
                });
            }

            window.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') closeModal();
            });

            // Copy ATS Bullets to clipboard
            const copyBulletsBtn = document.getElementById('copy-bullets-btn');
            const toast = document.getElementById('copy-toast');
            const toastMessage = document.getElementById('toast-message');

            function showToast(msg) {
                if (!toast) return;
                if (toastMessage) toastMessage.innerText = msg;
                toast.classList.remove('opacity-0', 'translate-y-2');
                toast.classList.add('opacity-100', 'translate-y-0');
                setTimeout(() => {
                    toast.classList.add('opacity-0', 'translate-y-2');
                    toast.classList.remove('opacity-100', 'translate-y-0');
                }, 2400);
            }

            if (copyBulletsBtn) {
                copyBulletsBtn.addEventListener('click', () => {
                    const bulletsText = `Enterprise Point of Sale (POS) & ERP Mobile Solution | Flutter, Odoo, Clean Architecture
• Engineered an enterprise-grade offline-first POS application for retail and restaurants, natively integrated with Odoo ERP using Clean Architecture and BLoC/Cubit.
• Architected a secure, encrypted offline-first data layer leveraging Drift ORM and SQLCipher (AES-256) with hardware-backed encryption keys (FlutterSecureStorage).
• Designed an autonomous background synchronization engine with network status listeners and exponential backoff retry mechanisms to guarantee zero lost transactions.
• Implemented seamless SoftPOS contactless card payments (Mada, Visa, Mastercard, Apple Pay) utilizing the NearPay SDK over NFC directly on POS terminals.
• Integrated hardware thermal printing for Sunmi & Newland POS devices, offloading PDF and receipt rendering into background Dart Isolates to maintain 60+ FPS UI performance.
• Enforced strict financial precision across tax calculations (ZATCA compliant) and cart calculations using decimal to prevent floating-point rounding discrepancies.
• Embedded a comprehensive HR module featuring attendance analytics (fl_chart) and a conversational AI HR Assistant for employee requests.`;

                    navigator.clipboard.writeText(bulletsText).then(() => {
                        showToast('ATS Resume bullets copied to clipboard!');
                    });
                });
            }
        });
    </script>
</body>
</html>
