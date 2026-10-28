<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Dawami HR · Case Study — Mohamed Elshabrawy</title>
    <meta name="description" content="Case study for Dawami HR: an enterprise-grade HR & attendance management Flutter app integrated with Odoo ERP. Live on App Store & Google Play."/>
    <link rel="preconnect" href="https://fonts.googleapis.com"/>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Instrument+Serif:ital@0;1&family=JetBrains+Mono:wght@400;500;600&display=swap" rel="stylesheet"/>
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.js" defer></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        body{background:#070709;color:#e4e4e7;font-family:'Inter',sans-serif;-webkit-font-smoothing:antialiased;}
        .serif{font-family:'Instrument Serif',serif;}
        .mono{font-family:'JetBrains Mono',monospace;}
        .glass{background:rgba(255,255,255,0.03);backdrop-filter:blur(14px);-webkit-backdrop-filter:blur(14px);}
        .grad-text{background:linear-gradient(135deg,#a78bfa,#818cf8,#c084fc);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}
        .blob{position:absolute;border-radius:50%;filter:blur(100px);pointer-events:none;}
        ::-webkit-scrollbar{width:6px;}::-webkit-scrollbar-track{background:#0a0a0f;}::-webkit-scrollbar-thumb{background:rgba(139,92,246,.4);border-radius:3px;}
        .section-lbl{font-family:'JetBrains Mono',monospace;font-size:.7rem;letter-spacing:.22em;text-transform:uppercase;color:#a78bfa;}
        .feat-card{background:rgba(255,255,255,.025);border:1px solid rgba(139,92,246,.12);border-radius:1.25rem;padding:1.5rem;transition:border-color .25s,background .25s,transform .25s;}
        .feat-card:hover{border-color:rgba(139,92,246,.4);background:rgba(139,92,246,.06);transform:translateY(-2px);}
        /* ---- Gallery ---- */
        .gallery-wrap{position:relative;overflow:hidden;}
        .gallery-track{display:flex;transition:transform .45s cubic-bezier(.4,0,.2,1);}
        .gallery-slide{flex:0 0 100%;display:flex;align-items:center;justify-content:center;padding:0 1rem;}
        .phone-frame{border-radius:2.6rem;overflow:hidden;background:#111114;border:2.5px solid rgba(139,92,246,.45);box-shadow:0 40px 100px rgba(139,92,246,.22),0 0 0 1px rgba(255,255,255,.04);}
        .phone-notch{position:absolute;top:8px;left:50%;transform:translateX(-50%);width:3.5rem;height:6px;background:#1a1a1f;border-radius:4px;z-index:10;}
        /* Lightbox */
        .lightbox{display:none;position:fixed;inset:0;z-index:100;background:rgba(0,0,0,.92);backdrop-filter:blur(12px);}
        .lightbox.active{display:flex;align-items:center;justify-content:center;}
        .lightbox img{max-height:90vh;max-width:90vw;border-radius:1.5rem;object-fit:contain;box-shadow:0 30px 80px rgba(0,0,0,.6);}
        /* Arch layer */
        .arch{border-left:3px solid rgba(139,92,246,.3);padding-left:1.25rem;position:relative;}
        .arch::before{content:'';position:absolute;left:-7px;top:.4rem;width:11px;height:11px;border-radius:50%;background:#7c3aed;box-shadow:0 0 12px rgba(139,92,246,.6);}
        .tech-tag{display:inline-flex;align-items:center;gap:.35rem;padding:.3rem .75rem;border-radius:.5rem;font-family:'JetBrains Mono',monospace;font-size:.72rem;background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.1);color:#a1a1aa;}
        .store-btn{display:inline-flex;align-items:center;gap:.6rem;padding:.75rem 1.5rem;border-radius:9999px;font-weight:600;font-size:.85rem;transition:all .2s;text-decoration:none;}
        .stat-card{background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.06);border-radius:1rem;padding:1.25rem;text-align:center;}
        @keyframes float-up{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}
        .float{animation:float-up 5s ease-in-out infinite;}
        @keyframes fade-in-up{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
        .ani{animation:fade-in-up .6s ease both;}
        .ani-1{animation-delay:.1s}.ani-2{animation-delay:.2s}.ani-3{animation-delay:.3s}
        /* dot nav */
        .dot{width:8px;height:8px;border-radius:50%;background:rgba(255,255,255,.2);transition:all .3s;cursor:pointer;}
        .dot.active{background:#a78bfa;width:20px;border-radius:4px;}
        /* thumb strip */
        .thumb{cursor:pointer;border-radius:1rem;overflow:hidden;border:2px solid transparent;transition:all .3s;}
        .thumb.active,.thumb:hover{border-color:rgba(139,92,246,.7);}
        .thumb img{width:100%;height:100%;object-fit:cover;object-position:top;}
    </style>
</head>
<body class="min-h-screen">

<!-- NAV -->
<nav class="fixed top-0 inset-x-0 z-50 border-b border-white/5 bg-[#070709]/80 backdrop-blur-xl">
    <div class="max-w-6xl mx-auto px-4 h-14 flex items-center justify-between">
        <a href="{{ route('home') }}" class="flex items-center gap-2 text-sm mono text-zinc-400 hover:text-white transition group">
            <i data-lucide="arrow-left" class="w-4 h-4 group-hover:-translate-x-1 transition duration-200"></i>
            Mohamed Elshabrawy
        </a>
        <div class="flex items-center gap-4">
            <a href="https://play.google.com/store/apps/details?id=com.quick_services.dawami" target="_blank" rel="noopener" class="hidden sm:inline-flex items-center gap-1.5 text-xs mono text-emerald-400 hover:text-emerald-300 transition">
                <i data-lucide="play" class="w-3 h-3"></i> Play Store
            </a>
            <a href="https://apps.apple.com/us/app/dawami-qs-solutions/id6752605490" target="_blank" rel="noopener" class="hidden sm:inline-flex items-center gap-1.5 text-xs mono text-zinc-300 hover:text-white transition">
                <i data-lucide="apple" class="w-3 h-3"></i> App Store
            </a>
            <span class="flex items-center gap-1.5 text-xs mono text-violet-400">
                <span class="w-2 h-2 rounded-full bg-violet-400 animate-pulse"></span>
                Live on Stores
            </span>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="relative min-h-[90vh] flex flex-col items-center justify-center px-4 pt-24 pb-10 overflow-hidden">
    <div class="blob w-[600px] h-[600px] bg-violet-700/10 -top-40 -right-40"></div>
    <div class="blob w-[400px] h-[400px] bg-purple-800/10 bottom-0 -left-32"></div>

    <div class="ani mb-5 flex items-center gap-2 px-4 py-1.5 rounded-full glass border border-violet-500/20 text-violet-300 text-xs mono">
        <i data-lucide="smartphone" class="w-3.5 h-3.5"></i>
        Flutter · Odoo ERP Integration · HR &amp; Attendance
    </div>

    <div class="ani ani-1 text-center mb-4 max-w-3xl">
        <h1 class="serif text-5xl sm:text-7xl text-white leading-tight">
            Dawami <span class="grad-text">HR</span>
        </h1>
        <p class="mt-4 text-zinc-400 text-base sm:text-lg leading-relaxed max-w-2xl mx-auto">
            Enterprise HR &amp; Attendance Management — live on <strong class="text-white">iOS &amp; Android</strong>, integrated with Odoo ERP, QR/NFC punch-in, self-service payslips, and an AI conversational assistant.
        </p>
    </div>

    <div class="ani ani-2 flex flex-wrap justify-center gap-3 mb-12">
        <a href="https://play.google.com/store/apps/details?id=com.quick_services.dawami" target="_blank" rel="noopener" class="store-btn bg-emerald-600 hover:bg-emerald-500 text-white shadow-[0_0_20px_rgba(16,185,129,0.3)]">
            <i data-lucide="play" class="w-4 h-4"></i> Google Play
        </a>
        <a href="https://apps.apple.com/us/app/dawami-qs-solutions/id6752605490" target="_blank" rel="noopener" class="store-btn border border-white/15 bg-white/5 text-white hover:bg-white/10">
            <i data-lucide="apple" class="w-4 h-4"></i> App Store
        </a>
    </div>

    <!-- Hero phone (single, floating) -->
    <div class="ani ani-3 relative flex justify-center">
        <div class="absolute inset-0 bg-violet-500/10 blur-3xl rounded-full pointer-events-none"></div>
        <div class="float phone-frame relative w-52 sm:w-60">
            <div class="phone-notch"></div>
            <img src="{{ asset('images/projects/dawami_2.png') }}" alt="Dawami HR" class="w-full object-cover object-top" style="aspect-ratio:9/19.5;"/>
        </div>
        <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 flex items-center gap-1.5 px-3 py-1 rounded-full bg-zinc-900/90 border border-violet-500/30 backdrop-blur-sm whitespace-nowrap">
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-[10px] mono text-zinc-300">Live · iOS &amp; Android · 5 Screenshots Below ↓</span>
        </div>
    </div>
</section>

<!-- STATS -->
<section class="max-w-5xl mx-auto px-4 pb-16">
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
        <div class="stat-card"><div class="text-2xl font-bold text-violet-300 mono mb-1">2</div><div class="text-xs text-zinc-400">Platforms<br/><span class="text-zinc-500">iOS &amp; Android</span></div></div>
        <div class="stat-card"><div class="text-2xl font-bold text-emerald-300 mono mb-1">Live</div><div class="text-xs text-zinc-400">Status<br/><span class="text-zinc-500">Published on stores</span></div></div>
        <div class="stat-card"><div class="text-2xl font-bold text-cyan-300 mono mb-1">AES-256</div><div class="text-xs text-zinc-400">Encryption<br/><span class="text-zinc-500">Secure local cache</span></div></div>
        <div class="stat-card"><div class="text-2xl font-bold text-amber-300 mono mb-1">Offline</div><div class="text-xs text-zinc-400">Sync Mode<br/><span class="text-zinc-500">Hive + Odoo RPC</span></div></div>
    </div>
</section>

<!-- =================== GALLERY =================== -->
<section id="gallery" class="max-w-5xl mx-auto px-4 pb-24 border-t border-white/5 pt-16">
    <div class="text-center mb-10">
        <p class="section-lbl mb-2">App Screenshots</p>
        <h2 class="serif text-3xl sm:text-4xl text-white">Browse All Screens</h2>
        <p class="text-zinc-500 text-sm mt-2">Click any screenshot to zoom · use arrows or thumbnails to navigate</p>
    </div>

    <!-- Main Slider -->
    <div class="gallery-wrap mb-6" id="mainGallery">
        <div class="gallery-track" id="galleryTrack">
            <div class="gallery-slide">
                <div class="phone-frame relative w-52 sm:w-64 cursor-zoom-in" onclick="openLightbox(0)">
                    <div class="phone-notch"></div>
                    <img src="{{ asset('images/projects/dawami_1.png') }}" alt="Dashboard Screen" class="w-full object-cover object-top" style="aspect-ratio:9/19.5;" loading="lazy"/>
                </div>
            </div>
            <div class="gallery-slide">
                <div class="phone-frame relative w-52 sm:w-64 cursor-zoom-in" onclick="openLightbox(1)">
                    <div class="phone-notch"></div>
                    <img src="{{ asset('images/projects/dawami_2.png') }}" alt="Attendance Screen" class="w-full object-cover object-top" style="aspect-ratio:9/19.5;" loading="lazy"/>
                </div>
            </div>
            <div class="gallery-slide">
                <div class="phone-frame relative w-52 sm:w-64 cursor-zoom-in" onclick="openLightbox(2)">
                    <div class="phone-notch"></div>
                    <img src="{{ asset('images/projects/dawami_3.png') }}" alt="Leave Requests Screen" class="w-full object-cover object-top" style="aspect-ratio:9/19.5;" loading="lazy"/>
                </div>
            </div>
            <div class="gallery-slide">
                <div class="phone-frame relative w-52 sm:w-64 cursor-zoom-in" onclick="openLightbox(3)">
                    <div class="phone-notch"></div>
                    <img src="{{ asset('images/projects/dawami_4.png') }}" alt="Payslip Screen" class="w-full object-cover object-top" style="aspect-ratio:9/19.5;" loading="lazy"/>
                </div>
            </div>
            <div class="gallery-slide">
                <div class="phone-frame relative w-52 sm:w-64 cursor-zoom-in" onclick="openLightbox(4)">
                    <div class="phone-notch"></div>
                    <img src="{{ asset('images/projects/dawami_5.png') }}" alt="Settings Screen" class="w-full object-cover object-top" style="aspect-ratio:9/19.5;" loading="lazy"/>
                </div>
            </div>
        </div>
    </div>

    <!-- Prev / Next + Dot nav -->
    <div class="flex items-center justify-center gap-4 mb-6">
        <button onclick="goPrev()" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-violet-500/20 hover:border-violet-500/40 transition" aria-label="Previous">
            <i data-lucide="chevron-left" class="w-5 h-5 text-zinc-300"></i>
        </button>
        <div class="flex items-center gap-2" id="dotNav">
            <div class="dot active" onclick="goTo(0)"></div>
            <div class="dot" onclick="goTo(1)"></div>
            <div class="dot" onclick="goTo(2)"></div>
            <div class="dot" onclick="goTo(3)"></div>
            <div class="dot" onclick="goTo(4)"></div>
        </div>
        <button onclick="goNext()" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-violet-500/20 hover:border-violet-500/40 transition" aria-label="Next">
            <i data-lucide="chevron-right" class="w-5 h-5 text-zinc-300"></i>
        </button>
    </div>

    <!-- Thumbnail strip -->
    <div class="flex justify-center gap-3 flex-wrap">
        <div class="thumb active w-14 h-24" id="thumb-0" onclick="goTo(0)">
            <img src="{{ asset('images/projects/dawami_1.png') }}" alt="Screen 1" loading="lazy"/>
        </div>
        <div class="thumb w-14 h-24" id="thumb-1" onclick="goTo(1)">
            <img src="{{ asset('images/projects/dawami_2.png') }}" alt="Screen 2" loading="lazy"/>
        </div>
        <div class="thumb w-14 h-24" id="thumb-2" onclick="goTo(2)">
            <img src="{{ asset('images/projects/dawami_3.png') }}" alt="Screen 3" loading="lazy"/>
        </div>
        <div class="thumb w-14 h-24" id="thumb-3" onclick="goTo(3)">
            <img src="{{ asset('images/projects/dawami_4.png') }}" alt="Screen 4" loading="lazy"/>
        </div>
        <div class="thumb w-14 h-24" id="thumb-4" onclick="goTo(4)">
            <img src="{{ asset('images/projects/dawami_5.png') }}" alt="Screen 5" loading="lazy"/>
        </div>
    </div>
    <p class="text-center text-[11px] mono text-zinc-600 mt-3">← swipe on mobile · click to zoom</p>
</section>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox" onclick="closeLightbox()">
    <button onclick="lightboxPrev(event)" class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition z-10">
        <i data-lucide="chevron-left" class="w-6 h-6 text-white"></i>
    </button>
    <img id="lightboxImg" src="" alt="Screenshot" onclick="event.stopPropagation()"/>
    <button onclick="lightboxNext(event)" class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition z-10">
        <i data-lucide="chevron-right" class="w-6 h-6 text-white"></i>
    </button>
    <button onclick="closeLightbox()" class="absolute top-4 right-4 w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition">
        <i data-lucide="x" class="w-5 h-5 text-white"></i>
    </button>
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 text-xs mono text-zinc-400" id="lightboxCounter"></div>
</div>

<!-- OVERVIEW -->
<section class="max-w-5xl mx-auto px-4 pb-24 border-t border-white/5 pt-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
        <div>
            <p class="section-lbl mb-3">Project Overview</p>
            <h2 class="serif text-3xl sm:text-4xl text-white mb-4">Built for the modern workplace</h2>
            <div class="space-y-4 text-zinc-400 text-sm sm:text-base leading-relaxed">
                <p>Dawami HR is a fully-featured human resources and attendance platform built with <strong class="text-white">Flutter</strong> and tightly integrated with <strong class="text-violet-300">Odoo ERP</strong> via a custom JSON-RPC API layer. It enables enterprises to manage their entire workforce lifecycle from daily check-ins to payslip distribution.</p>
                <p>The app is built <strong class="text-white">offline-first</strong> using Hive as a local persistence layer, ensuring employees can clock in/out even without internet. Data auto-syncs with Odoo when connectivity restores, with conflict resolution handled gracefully.</p>
                <p>Designed with a bilingual <strong class="text-amber-300">Arabic (RTL) / English (LTR)</strong> experience, the app dynamically switches layout direction and typography based on user locale.</p>
            </div>
        </div>
        <div>
            <p class="section-lbl mb-3">Key Features</p>
            <ul class="space-y-3">
                <li class="flex items-start gap-3">
                    <span class="w-6 h-6 rounded-full bg-emerald-500/15 border border-emerald-500/30 flex items-center justify-center flex-shrink-0 mt-0.5"><i data-lucide="scan-line" class="w-3.5 h-3.5 text-emerald-400"></i></span>
                    <div><strong class="text-white text-sm">QR &amp; NFC Attendance</strong><p class="text-xs text-zinc-500 mt-0.5">GPS-verified check-in/out, real-time Odoo sync, fraud prevention.</p></div>
                </li>
                <li class="flex items-start gap-3">
                    <span class="w-6 h-6 rounded-full bg-violet-500/15 border border-violet-500/30 flex items-center justify-center flex-shrink-0 mt-0.5"><i data-lucide="calendar-days" class="w-3.5 h-3.5 text-violet-400"></i></span>
                    <div><strong class="text-white text-sm">Self-Service Leave</strong><p class="text-xs text-zinc-500 mt-0.5">Submit, track, cancel leaves. Manager approval via push notification.</p></div>
                </li>
                <li class="flex items-start gap-3">
                    <span class="w-6 h-6 rounded-full bg-cyan-500/15 border border-cyan-500/30 flex items-center justify-center flex-shrink-0 mt-0.5"><i data-lucide="file-text" class="w-3.5 h-3.5 text-cyan-400"></i></span>
                    <div><strong class="text-white text-sm">Payslip Downloads</strong><p class="text-xs text-zinc-500 mt-0.5">In-app PDF payslip viewing from Odoo Payroll — salary breakdown included.</p></div>
                </li>
                <li class="flex items-start gap-3">
                    <span class="w-6 h-6 rounded-full bg-amber-500/15 border border-amber-500/30 flex items-center justify-center flex-shrink-0 mt-0.5"><i data-lucide="wifi-off" class="w-3.5 h-3.5 text-amber-400"></i></span>
                    <div><strong class="text-white text-sm">Offline-First Engine</strong><p class="text-xs text-zinc-500 mt-0.5">Hive + AES-256 encrypted local cache. Zero data loss during offline periods.</p></div>
                </li>
                <li class="flex items-start gap-3">
                    <span class="w-6 h-6 rounded-full bg-blue-500/15 border border-blue-500/30 flex items-center justify-center flex-shrink-0 mt-0.5"><i data-lucide="bot" class="w-3.5 h-3.5 text-blue-400"></i></span>
                    <div><strong class="text-white text-sm">AI HR Assistant</strong><p class="text-xs text-zinc-500 mt-0.5">Conversational AI in Arabic &amp; English — HR policy, leave flows, attendance summaries.</p></div>
                </li>
                <li class="flex items-start gap-3">
                    <span class="w-6 h-6 rounded-full bg-rose-500/15 border border-rose-500/30 flex items-center justify-center flex-shrink-0 mt-0.5"><i data-lucide="check-square" class="w-3.5 h-3.5 text-rose-400"></i></span>
                    <div><strong class="text-white text-sm">Tasks &amp; HR Requests</strong><p class="text-xs text-zinc-500 mt-0.5">Task management, document/certificate requests with full approval workflow.</p></div>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- ARCHITECTURE -->
<section class="max-w-5xl mx-auto px-4 pb-24 border-t border-white/5 pt-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <div>
            <p class="section-lbl mb-3">Engineering</p>
            <h2 class="serif text-3xl sm:text-4xl text-white mb-6">Clean Architecture</h2>
            <p class="text-zinc-400 text-sm mb-8 leading-relaxed">Strict feature-first folder structure with three distinct layers. BLoC/Cubit handles all state transitions. <code class="text-violet-300 bg-white/5 px-1.5 py-0.5 rounded text-xs">get_it</code> for dependency injection keeps everything testable and decoupled.</p>
            <div class="space-y-6">
                <div class="arch"><h3 class="font-semibold text-violet-300 mb-1">Presentation Layer</h3><p class="text-sm text-zinc-400">Flutter Widgets + BLoC/Cubit. Pure UI — no business logic. Adaptive RTL/LTR layout.</p></div>
                <div class="arch"><h3 class="font-semibold text-cyan-300 mb-1">Domain Layer</h3><p class="text-sm text-zinc-400">Pure Dart use-cases, entities, repository interfaces. Zero Flutter dependencies — fully unit-testable.</p></div>
                <div class="arch"><h3 class="font-semibold text-emerald-300 mb-1">Data Layer</h3><p class="text-sm text-zinc-400">Odoo JSON-RPC remote sources + Hive local sources. Repository handles network/cache strategy and offline queue.</p></div>
                <div class="arch"><h3 class="font-semibold text-amber-300 mb-1">Core / Shared</h3><p class="text-sm text-zinc-400">DI (get_it), network interceptors (Dio), error handling, localization, theme, routing (go_router), AES encryption.</p></div>
            </div>
        </div>
        <div class="flex flex-col gap-4 justify-center">
            <div class="rounded-xl bg-white/3 border border-violet-500/15 p-4">
                <div class="mono text-[10px] text-zinc-500 mb-2 uppercase tracking-widest">Feature Module Structure</div>
                <pre class="text-xs text-zinc-300 leading-relaxed overflow-x-auto"><code>features/
├── attendance/
│   ├── data/         ← Odoo RPC + Hive
│   ├── domain/       ← UseCases, Entities
│   └── presentation/ ← BLoC, Pages
├── leaves/
├── payslip/
├── tasks/ &amp; requests/
├── notifications/
└── settings/
core/
├── di/       ← GetIt
├── network/  ← Dio + interceptors
├── storage/  ← AES-256 Hive
└── l10n/     ← AR / EN</code></pre>
            </div>
            <div class="rounded-xl bg-white/3 border border-cyan-500/15 p-4">
                <div class="mono text-[10px] text-zinc-500 mb-2 uppercase tracking-widest">BLoC State Flow</div>
                <div class="flex items-center gap-2 flex-wrap">
                    <span class="tech-tag text-zinc-200">UI Event</span>
                    <i data-lucide="arrow-right" class="w-3 h-3 text-zinc-600 flex-shrink-0"></i>
                    <span class="tech-tag text-violet-300">BLoC/Cubit</span>
                    <i data-lucide="arrow-right" class="w-3 h-3 text-zinc-600 flex-shrink-0"></i>
                    <span class="tech-tag text-cyan-300">UseCase</span>
                    <i data-lucide="arrow-right" class="w-3 h-3 text-zinc-600 flex-shrink-0"></i>
                    <span class="tech-tag text-emerald-300">Repository</span>
                    <i data-lucide="arrow-right" class="w-3 h-3 text-zinc-600 flex-shrink-0"></i>
                    <span class="tech-tag text-amber-300">Odoo/Hive</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- TECH STACK -->
<section class="max-w-5xl mx-auto px-4 pb-24 border-t border-white/5 pt-16">
    <div class="text-center mb-10"><p class="section-lbl mb-2">Under the Hood</p><h2 class="serif text-3xl sm:text-4xl text-white">Technology Stack</h2></div>
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
        <div class="feat-card text-center"><div class="text-2xl mb-2">🐦</div><div class="font-semibold text-white text-sm">Flutter</div><div class="text-xs text-zinc-500 mt-0.5">Cross-platform UI</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">🎯</div><div class="font-semibold text-white text-sm">Dart</div><div class="text-xs text-zinc-500 mt-0.5">Core language</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">🧱</div><div class="font-semibold text-white text-sm">BLoC / Cubit</div><div class="text-xs text-zinc-500 mt-0.5">State management</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">🟠</div><div class="font-semibold text-white text-sm">Odoo ERP</div><div class="text-xs text-zinc-500 mt-0.5">Backend / JSON-RPC</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">🐝</div><div class="font-semibold text-white text-sm">Hive</div><div class="text-xs text-zinc-500 mt-0.5">Offline local DB</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">🌐</div><div class="font-semibold text-white text-sm">Dio</div><div class="text-xs text-zinc-500 mt-0.5">HTTP + interceptors</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">🔔</div><div class="font-semibold text-white text-sm">Firebase FCM</div><div class="text-xs text-zinc-500 mt-0.5">Push notifications</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">💉</div><div class="font-semibold text-white text-sm">get_it</div><div class="text-xs text-zinc-500 mt-0.5">Dependency injection</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">🗺️</div><div class="font-semibold text-white text-sm">go_router</div><div class="text-xs text-zinc-500 mt-0.5">Declarative routing</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">📷</div><div class="font-semibold text-white text-sm">QR Scanner</div><div class="text-xs text-zinc-500 mt-0.5">Attendance check-in</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">🔒</div><div class="font-semibold text-white text-sm">AES-256</div><div class="text-xs text-zinc-500 mt-0.5">Encrypted storage</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">🌍</div><div class="font-semibold text-white text-sm">flutter_intl</div><div class="text-xs text-zinc-500 mt-0.5">AR / EN l10n</div></div>
    </div>
</section>

<!-- CTA -->
<section class="max-w-5xl mx-auto px-4 pb-24 pt-4">
    <div class="rounded-3xl glass border border-violet-500/15 p-10 sm:p-14 text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-violet-950/20 to-transparent pointer-events-none rounded-3xl"></div>
        <p class="section-lbl mb-4">Download &amp; Try</p>
        <h2 class="serif text-3xl sm:text-4xl text-white mb-3">Available on both platforms</h2>
        <p class="text-zinc-400 text-sm max-w-lg mx-auto mb-8">Dawami HR is live on the App Store and Google Play. Download it today.</p>
        <div class="flex flex-wrap justify-center gap-4 mb-8">
            <a href="https://play.google.com/store/apps/details?id=com.quick_services.dawami" target="_blank" rel="noopener" class="store-btn bg-emerald-600 hover:bg-emerald-500 text-white shadow-[0_0_24px_rgba(16,185,129,0.3)] text-sm">
                <i data-lucide="play" class="w-4 h-4"></i> Google Play Store
            </a>
            <a href="https://apps.apple.com/us/app/dawami-qs-solutions/id6752605490" target="_blank" rel="noopener" class="store-btn border border-white/15 bg-white/5 hover:bg-white/10 text-white text-sm">
                <i data-lucide="apple" class="w-4 h-4"></i> Apple App Store
            </a>
        </div>
        <a href="{{ route('home') }}#projects" class="inline-flex items-center gap-2 text-sm mono text-zinc-400 hover:text-white transition group">
            <i data-lucide="arrow-left" class="w-4 h-4 group-hover:-translate-x-1 transition duration-200"></i>
            Back to All Projects
        </a>
    </div>
</section>

<!-- FOOTER -->
<footer class="border-t border-white/5 py-8 px-4">
    <div class="max-w-5xl mx-auto flex flex-col sm:flex-row items-center justify-between gap-3">
        <p class="text-xs mono text-zinc-600">© 2025 Mohamed Elshabrawy · Dawami HR Case Study</p>
        <div class="flex items-center gap-4 text-xs mono text-zinc-600">
            <a href="{{ route('home') }}" class="hover:text-zinc-300 transition">Portfolio</a>
            <a href="{{ route('projects.ideal-pos') }}" class="hover:text-zinc-300 transition">Ideal POS</a>
        </div>
    </div>
</footer>

<script>
// ---- SLIDER ----
const images = [
    '{{ asset("images/projects/dawami_1.png") }}',
    '{{ asset("images/projects/dawami_2.png") }}',
    '{{ asset("images/projects/dawami_3.png") }}',
    '{{ asset("images/projects/dawami_4.png") }}',
    '{{ asset("images/projects/dawami_5.png") }}'
];
let current = 0;
const track = document.getElementById('galleryTrack');
const dots = document.querySelectorAll('.dot');
const thumbs = document.querySelectorAll('.thumb');

function goTo(idx) {
    current = (idx + images.length) % images.length;
    track.style.transform = `translateX(-${current * 100}%)`;
    dots.forEach((d, i) => d.classList.toggle('active', i === current));
    thumbs.forEach((t, i) => t.classList.toggle('active', i === current));
}
function goNext() { goTo(current + 1); }
function goPrev() { goTo(current - 1); }

// Touch/swipe support
let startX = 0;
const gallery = document.getElementById('mainGallery');
gallery.addEventListener('touchstart', e => { startX = e.touches[0].clientX; }, { passive: true });
gallery.addEventListener('touchend', e => {
    const dx = e.changedTouches[0].clientX - startX;
    if (Math.abs(dx) > 40) dx < 0 ? goNext() : goPrev();
});

// Keyboard nav
document.addEventListener('keydown', e => {
    if (e.key === 'ArrowRight') goNext();
    if (e.key === 'ArrowLeft') goPrev();
    if (e.key === 'Escape') closeLightbox();
});

// ---- LIGHTBOX ----
let lbIndex = 0;
const lb = document.getElementById('lightbox');
const lbImg = document.getElementById('lightboxImg');
const lbCounter = document.getElementById('lightboxCounter');

function openLightbox(idx) {
    lbIndex = idx;
    lbImg.src = images[idx];
    lbCounter.textContent = (idx + 1) + ' / ' + images.length;
    lb.classList.add('active');
    document.body.style.overflow = 'hidden';
}
function closeLightbox() {
    lb.classList.remove('active');
    document.body.style.overflow = '';
}
function lightboxNext(e) {
    e.stopPropagation();
    lbIndex = (lbIndex + 1) % images.length;
    lbImg.src = images[lbIndex];
    lbCounter.textContent = (lbIndex + 1) + ' / ' + images.length;
}
function lightboxPrev(e) {
    e.stopPropagation();
    lbIndex = (lbIndex - 1 + images.length) % images.length;
    lbImg.src = images[lbIndex];
    lbCounter.textContent = (lbIndex + 1) + ' / ' + images.length;
}

document.addEventListener('DOMContentLoaded', () => { lucide.createIcons(); });
</script>
</body>
</html>
