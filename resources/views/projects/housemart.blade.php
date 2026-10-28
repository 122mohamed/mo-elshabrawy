<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>HouseMart · Real Estate Marketplace — Mohamed Elshabrawy</title>
    <meta name="description" content="Case study for HouseMart: A scalable real estate marketplace Flutter app with Clean Architecture, Paymob e-payment, Sightengine AI image moderation, Google Maps, and Deep Linking."/>
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
        .grad-text{background:linear-gradient(135deg,#f59e0b,#fbbf24,#10b981);-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;}
        .blob{position:absolute;border-radius:50%;filter:blur(100px);pointer-events:none;}
        ::-webkit-scrollbar{width:6px;}::-webkit-scrollbar-track{background:#0a0a0f;}::-webkit-scrollbar-thumb{background:rgba(245,158,11,.4);border-radius:3px;}
        .section-lbl{font-family:'JetBrains Mono',monospace;font-size:.7rem;letter-spacing:.22em;text-transform:uppercase;color:#fbbf24;}
        .feat-card{background:rgba(255,255,255,.025);border:1px solid rgba(245,158,11,.15);border-radius:1.25rem;padding:1.5rem;transition:border-color .25s,background .25s,transform .25s;}
        .feat-card:hover{border-color:rgba(245,158,11,.45);background:rgba(245,158,11,.05);transform:translateY(-2px);}
        
        /* ---- Gallery Slider ---- */
        .gallery-wrap{position:relative;overflow:hidden;}
        .gallery-track{display:flex;transition:transform .45s cubic-bezier(.4,0,.2,1);}
        .gallery-slide{flex:0 0 100%;display:flex;align-items:center;justify-content:center;padding:0 1rem;}
        .phone-frame{border-radius:2.6rem;overflow:hidden;background:#111114;border:2.5px solid rgba(245,158,11,.4);box-shadow:0 40px 100px rgba(245,158,11,.18),0 0 0 1px rgba(255,255,255,.04);}
        .phone-camera{position:absolute;top:10px;left:50%;transform:translateX(-50%);width:11px;height:11px;background:#000;border:1.5px solid rgba(255,255,255,0.15);border-radius:50%;z-index:10;}
        
        /* Lightbox */
        .lightbox{display:none;position:fixed;inset:0;z-index:100;background:rgba(0,0,0,.92);backdrop-filter:blur(12px);}
        .lightbox.active{display:flex;align-items:center;justify-content:center;}
        .lightbox img{max-height:90vh;max-width:90vw;border-radius:1.5rem;object-fit:contain;box-shadow:0 30px 80px rgba(0,0,0,.6);}
        
        /* Engineering Layer styling */
        .arch{border-left:3px solid rgba(245,158,11,.35);padding-left:1.25rem;position:relative;}
        .arch::before{content:'';position:absolute;left:-7px;top:.4rem;width:11px;height:11px;border-radius:50%;background:#f59e0b;box-shadow:0 0 12px rgba(245,158,11,.7);}
        .tech-tag{display:inline-flex;align-items:center;gap:.35rem;padding:.3rem .75rem;border-radius:.5rem;font-family:'JetBrains Mono',monospace;font-size:.72rem;background:rgba(255,255,255,.04);border:1px solid rgba(255,255,255,.1);color:#a1a1aa;}
        .stat-card{background:rgba(255,255,255,.03);border:1px solid rgba(255,255,255,.06);border-radius:1rem;padding:1.25rem;text-align:center;}
        
        @keyframes float-up{0%,100%{transform:translateY(0)}50%{transform:translateY(-8px)}}
        .float{animation:float-up 5s ease-in-out infinite;}
        @keyframes fade-in-up{from{opacity:0;transform:translateY(20px)}to{opacity:1;transform:translateY(0)}}
        .ani{animation:fade-in-up .6s ease both;}
        .ani-1{animation-delay:.1s}.ani-2{animation-delay:.2s}.ani-3{animation-delay:.3s}
        
        /* Slider dots */
        .dot{width:8px;height:8px;border-radius:50%;background:rgba(255,255,255,.2);transition:all .3s;cursor:pointer;}
        .dot.active{background:#f59e0b;width:20px;border-radius:4px;}
        
        /* Thumbnails */
        .thumb{cursor:pointer;border-radius:1rem;overflow:hidden;border:2px solid transparent;transition:all .3s;}
        .thumb.active,.thumb:hover{border-color:rgba(245,158,11,.8);}
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
            <a href="https://play.google.com/store/apps/details?id=com.housemart.house_mart" target="_blank" rel="noopener" class="hidden sm:inline-flex items-center gap-1.5 text-xs mono text-emerald-400 hover:text-emerald-300 transition">
                <i data-lucide="play" class="w-3 h-3"></i> Google Play
            </a>
            <a href="#gallery" class="hidden sm:inline-flex items-center gap-1.5 text-xs mono text-amber-400 hover:text-amber-300 transition">
                <i data-lucide="images" class="w-3 h-3"></i> Gallery
            </a>
            <a href="#engineering" class="hidden sm:inline-flex items-center gap-1.5 text-xs mono text-zinc-300 hover:text-white transition">
                <i data-lucide="code-2" class="w-3 h-3"></i> Architecture
            </a>
            <span class="flex items-center gap-1.5 text-xs mono text-amber-400">
                <span class="w-2 h-2 rounded-full bg-amber-400 animate-pulse"></span>
                Live on Google Play
            </span>
        </div>
    </div>
</nav>

<!-- HERO -->
<section class="relative min-h-[90vh] flex flex-col items-center justify-center px-4 pt-24 pb-12 overflow-hidden">
    <div class="blob w-[600px] h-[600px] bg-amber-600/10 -top-40 -right-40"></div>
    <div class="blob w-[450px] h-[450px] bg-emerald-600/10 bottom-0 -left-32"></div>

    <div class="ani mb-5 flex items-center gap-2 px-4 py-1.5 rounded-full glass border border-amber-500/20 text-amber-300 text-xs mono">
        <i data-lucide="home" class="w-3.5 h-3.5 text-amber-400"></i>
        Flutter · Clean Architecture · Real Estate &amp; Marketplace
    </div>

    <div class="ani ani-1 text-center mb-4 max-w-3xl">
        <h1 class="serif text-5xl sm:text-7xl text-white leading-tight">
            House<span class="grad-text">Mart</span>
        </h1>
        <p class="mt-4 text-zinc-400 text-base sm:text-lg leading-relaxed max-w-2xl mx-auto">
            Comprehensive real estate marketplace for buying, selling, and renting apartments, buildings, and commercial shops. Integrated with <strong class="text-white">Paymob e-payment</strong>, <strong class="text-amber-300">Sightengine AI content moderation</strong>, interactive Google Maps GPS, and bank-grade anti-tampering security.
        </p>
    </div>

    <div class="ani ani-2 flex flex-wrap justify-center gap-3 mb-10">
        <a href="https://play.google.com/store/apps/details?id=com.housemart.house_mart" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-xs sm:text-sm shadow-[0_0_24px_rgba(16,185,129,0.35)] transition-all">
            <i data-lucide="play" class="w-4 h-4"></i> Google Play Store
        </a>
        <a href="#gallery" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-gradient-to-r from-amber-500 to-amber-600 text-black font-semibold text-xs sm:text-sm hover:from-amber-400 hover:to-amber-500 transition-all shadow-[0_0_24px_rgba(245,158,11,0.35)]">
            <i data-lucide="images" class="w-4 h-4"></i> Explore Screenshots
        </a>
        <a href="#engineering" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-white/15 bg-white/5 text-white text-xs sm:text-sm hover:bg-white/10 transition-all">
            <i data-lucide="cpu" class="w-4 h-4 text-amber-400"></i> Technical Architecture
        </a>
    </div>

    <!-- Hero Device (Single floating mockup with elongated height) -->
    <div class="ani ani-3 relative flex justify-center">
        <div class="absolute inset-0 bg-amber-500/12 blur-3xl rounded-full pointer-events-none"></div>
        <div class="float phone-frame relative w-56 sm:w-64 border-amber-500/40">
            <div class="phone-camera"></div>
            <img src="{{ asset('images/projects/housemart_1.png') }}" alt="HouseMart Dashboard" class="w-full object-cover object-top" style="aspect-ratio:9/19.5;"/>
        </div>
        <div class="absolute -bottom-3 left-1/2 -translate-x-1/2 flex items-center gap-1.5 px-3 py-1 rounded-full bg-zinc-900/90 border border-amber-500/30 backdrop-blur-sm whitespace-nowrap shadow-lg">
            <span class="w-1.5 h-1.5 rounded-full bg-emerald-400 animate-pulse"></span>
            <span class="text-[10px] mono text-zinc-300">Live on Play Store · 4 Screens Below ↓</span>
        </div>
    </div>
</section>

<!-- STATS -->
<section class="max-w-5xl mx-auto px-4 pb-16">
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-4">
        <div class="stat-card">
            <div class="text-2xl font-bold text-amber-400 mono mb-1">Paymob</div>
            <div class="text-xs text-zinc-400">Payment Gateway<br/><span class="text-zinc-500">Unified In-App Checkout</span></div>
        </div>
        <div class="stat-card">
            <div class="text-2xl font-bold text-emerald-400 mono mb-1">AI Safety</div>
            <div class="text-xs text-zinc-400">Content Moderation<br/><span class="text-zinc-500">Sightengine Vision API</span></div>
        </div>
        <div class="stat-card">
            <div class="text-2xl font-bold text-cyan-400 mono mb-1">Maps &amp; GPS</div>
            <div class="text-xs text-zinc-400">Geolocation<br/><span class="text-zinc-500">Google Maps SDK &amp; Geolocator</span></div>
        </div>
        <div class="stat-card">
            <div class="text-2xl font-bold text-violet-400 mono mb-1">70% Less</div>
            <div class="text-xs text-zinc-400">Image Bandwidth<br/><span class="text-zinc-500">Pure-Dart 75% Compression</span></div>
        </div>
    </div>
</section>

<!-- =================== GALLERY SECTION =================== -->
<section id="gallery" class="max-w-5xl mx-auto px-4 pb-24 border-t border-white/5 pt-16">
    <div class="text-center mb-10">
        <p class="section-lbl mb-2">App Showcase</p>
        <h2 class="serif text-3xl sm:text-4xl text-white">Interactive App Screenshots</h2>
        <p class="text-zinc-500 text-sm mt-2">Click any screenshot to zoom in full resolution · navigate via arrows or thumbnails</p>
    </div>

    <!-- Main Slider -->
    <div class="gallery-wrap mb-6" id="mainGallery">
        <div class="gallery-track" id="galleryTrack">
            <div class="gallery-slide">
                <div class="phone-frame relative w-52 sm:w-64 cursor-zoom-in" onclick="openLightbox(0)">
                    <div class="phone-camera"></div>
                    <img src="{{ asset('images/projects/housemart_1.png') }}" alt="Explore Properties Screen" class="w-full object-cover object-top" style="aspect-ratio:1620/2880;" loading="lazy"/>
                </div>
            </div>
            <div class="gallery-slide">
                <div class="phone-frame relative w-52 sm:w-64 cursor-zoom-in" onclick="openLightbox(1)">
                    <div class="phone-camera"></div>
                    <img src="{{ asset('images/projects/housemart_2.png') }}" alt="Property Details Screen" class="w-full object-cover object-top" style="aspect-ratio:1620/2880;" loading="lazy"/>
                </div>
            </div>
            <div class="gallery-slide">
                <div class="phone-frame relative w-52 sm:w-64 cursor-zoom-in" onclick="openLightbox(2)">
                    <div class="phone-camera"></div>
                    <img src="{{ asset('images/projects/housemart_3.png') }}" alt="Add Property & Maps Screen" class="w-full object-cover object-top" style="aspect-ratio:1620/2880;" loading="lazy"/>
                </div>
            </div>
            <div class="gallery-slide">
                <div class="phone-frame relative w-52 sm:w-64 cursor-zoom-in" onclick="openLightbox(3)">
                    <div class="phone-camera"></div>
                    <img src="{{ asset('images/projects/housemart_4.png') }}" alt="Ad Packages & Credits Screen" class="w-full object-cover object-top" style="aspect-ratio:1620/2880;" loading="lazy"/>
                </div>
            </div>
        </div>
    </div>

    <!-- Controls + Dot Nav -->
    <div class="flex items-center justify-center gap-4 mb-6">
        <button onclick="goPrev()" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-amber-500/20 hover:border-amber-500/40 transition" aria-label="Previous">
            <i data-lucide="chevron-left" class="w-5 h-5 text-zinc-300"></i>
        </button>
        <div class="flex items-center gap-2" id="dotNav">
            <div class="dot active" onclick="goTo(0)"></div>
            <div class="dot" onclick="goTo(1)"></div>
            <div class="dot" onclick="goTo(2)"></div>
            <div class="dot" onclick="goTo(3)"></div>
        </div>
        <button onclick="goNext()" class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center hover:bg-amber-500/20 hover:border-amber-500/40 transition" aria-label="Next">
            <i data-lucide="chevron-right" class="w-5 h-5 text-zinc-300"></i>
        </button>
    </div>

    <!-- Thumbnail Strip -->
    <div class="flex justify-center gap-3 flex-wrap">
        <div class="thumb active w-14 h-24" id="thumb-0" onclick="goTo(0)">
            <img src="{{ asset('images/projects/housemart_1.png') }}" alt="Thumbnail 1" loading="lazy"/>
        </div>
        <div class="thumb w-14 h-24" id="thumb-1" onclick="goTo(1)">
            <img src="{{ asset('images/projects/housemart_2.png') }}" alt="Thumbnail 2" loading="lazy"/>
        </div>
        <div class="thumb w-14 h-24" id="thumb-2" onclick="goTo(2)">
            <img src="{{ asset('images/projects/housemart_3.png') }}" alt="Thumbnail 3" loading="lazy"/>
        </div>
        <div class="thumb w-14 h-24" id="thumb-3" onclick="goTo(3)">
            <img src="{{ asset('images/projects/housemart_4.png') }}" alt="Thumbnail 4" loading="lazy"/>
        </div>
    </div>
    <p class="text-center text-[11px] mono text-zinc-600 mt-3">← swipe on mobile · click on any phone to zoom</p>
</section>

<!-- LIGHTBOX -->
<div class="lightbox" id="lightbox" onclick="closeLightbox()">
    <button onclick="lightboxPrev(event)" class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition z-10">
        <i data-lucide="chevron-left" class="w-6 h-6 text-white"></i>
    </button>
    <img id="lightboxImg" src="" alt="Screenshot Full View" onclick="event.stopPropagation()"/>
    <button onclick="lightboxNext(event)" class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition z-10">
        <i data-lucide="chevron-right" class="w-6 h-6 text-white"></i>
    </button>
    <button onclick="closeLightbox()" class="absolute top-4 right-4 w-10 h-10 rounded-full bg-white/10 flex items-center justify-center hover:bg-white/20 transition">
        <i data-lucide="x" class="w-5 h-5 text-white"></i>
    </button>
    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 text-xs mono text-zinc-400" id="lightboxCounter"></div>
</div>

<!-- =================== OVERVIEW & BUSINESS FEATURES =================== -->
<section class="max-w-5xl mx-auto px-4 pb-24 border-t border-white/5 pt-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
        <div>
            <p class="section-lbl mb-3">Feature &amp; Business Overview</p>
            <h2 class="serif text-3xl sm:text-4xl text-white mb-4">A Modern Marketplace for Real Estate</h2>
            <div class="space-y-4 text-zinc-400 text-sm sm:text-base leading-relaxed">
                <p>HouseMart is an end-to-end real estate and property marketplace built with <strong class="text-white">Flutter</strong>. It bridges property owners, brokers, and buyers into a seamless, high-performance ecosystem designed for high conversion and effortless property exploration.</p>
                <p>Users can browse apartments for sale or rent, standalone commercial shops, and full residential buildings. The app incorporates a full <strong class="text-amber-300">Pay-to-Publish</strong> monetization model integrated with <strong class="text-white">Paymob</strong>, allowing users to buy ad credit bundles and manage their listings in real time.</p>
                <p>To preserve platform trust and prevent inappropriate listings, HouseMart embeds an automated <strong class="text-emerald-400">AI Computer Vision</strong> moderation pipeline that analyzes uploaded images before they are published, preventing inappropriate media with zero manual review lag.</p>
            </div>
        </div>
        <div>
            <p class="section-lbl mb-3">Key Platform Features</p>
            <ul class="space-y-3.5">
                <li class="flex items-start gap-3">
                    <span class="w-6 h-6 rounded-full bg-amber-500/15 border border-amber-500/30 flex items-center justify-center flex-shrink-0 mt-0.5"><i data-lucide="layout-grid" class="w-3.5 h-3.5 text-amber-400"></i></span>
                    <div><strong class="text-white text-sm">Multi-Category Marketplace</strong><p class="text-xs text-zinc-500 mt-0.5">Dedicated tabs for Apartments (Buy/Rent), Buildings, and Commercial Shops with area ($m^2$), rooms, price, and PageView photo slider.</p></div>
                </li>
                <li class="flex items-start gap-3">
                    <span class="w-6 h-6 rounded-full bg-emerald-500/15 border border-emerald-500/30 flex items-center justify-center flex-shrink-0 mt-0.5"><i data-lucide="map-pin" class="w-3.5 h-3.5 text-emerald-400"></i></span>
                    <div><strong class="text-white text-sm">Interactive Map Pinning &amp; GPS</strong><p class="text-xs text-zinc-500 mt-0.5">Auto-locate via device GPS or manual map marker drag-and-drop to pinpoint exact property coordinates.</p></div>
                </li>
                <li class="flex items-start gap-3">
                    <span class="w-6 h-6 rounded-full bg-cyan-500/15 border border-cyan-500/30 flex items-center justify-center flex-shrink-0 mt-0.5"><i data-lucide="credit-card" class="w-3.5 h-3.5 text-cyan-400"></i></span>
                    <div><strong class="text-white text-sm">Paymob E-Payment &amp; Ad Credits</strong><p class="text-xs text-zinc-500 mt-0.5">Monetized listing packages with Paymob Unified Checkout and automatic credit quota enforcement.</p></div>
                </li>
                <li class="flex items-start gap-3">
                    <span class="w-6 h-6 rounded-full bg-rose-500/15 border border-rose-500/30 flex items-center justify-center flex-shrink-0 mt-0.5"><i data-lucide="shield-check" class="w-3.5 h-3.5 text-rose-400"></i></span>
                    <div><strong class="text-white text-sm">AI Image Content Moderation</strong><p class="text-xs text-zinc-500 mt-0.5">Automated screening via Sightengine Vision API blocks inappropriate or unsafe images before upload.</p></div>
                </li>
                <li class="flex items-start gap-3">
                    <span class="w-6 h-6 rounded-full bg-purple-500/15 border border-purple-500/30 flex items-center justify-center flex-shrink-0 mt-0.5"><i data-lucide="link-2" class="w-3.5 h-3.5 text-purple-400"></i></span>
                    <div><strong class="text-white text-sm">Deep Linking &amp; Instant Navigation</strong><p class="text-xs text-zinc-500 mt-0.5">Direct link sharing via AppLinks with a custom splash navigation buffer to route directly to listings.</p></div>
                </li>
                <li class="flex items-start gap-3">
                    <span class="w-6 h-6 rounded-full bg-blue-500/15 border border-blue-500/30 flex items-center justify-center flex-shrink-0 mt-0.5"><i data-lucide="shield-alert" class="w-3.5 h-3.5 text-blue-400"></i></span>
                    <div><strong class="text-white text-sm">Root &amp; Anti-Tampering Protection</strong><p class="text-xs text-zinc-500 mt-0.5">Blocks compromised/rooted environments and encrypts sensitive sessions with Flutter Secure Storage.</p></div>
                </li>
            </ul>
        </div>
    </div>
</section>

<!-- =================== TECHNICAL ARCHITECTURE =================== -->
<section id="engineering" class="max-w-5xl mx-auto px-4 pb-24 border-t border-white/5 pt-16">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
        <div>
            <p class="section-lbl mb-3">Software Architecture</p>
            <h2 class="serif text-3xl sm:text-4xl text-white mb-6">Clean Architecture &amp; Enterprise Patterns</h2>
            <p class="text-zinc-400 text-sm mb-8 leading-relaxed">
                Engineered with strict separation of concerns, testability, and decoupled layers. Features an advanced network engine with silent token refresh, pure-Dart image compression, and centralized dependency injection.
            </p>
            
            <div class="space-y-6">
                <div class="arch">
                    <h3 class="font-semibold text-amber-300 mb-1">Presentation Layer</h3>
                    <p class="text-sm text-zinc-400">Flutter UI widgets, responsive scaling via <code class="text-amber-200 bg-white/5 px-1 py-0.5 rounded text-xs">zap_sizer</code>, and pure state-driven UI with BLoC/Cubit.</p>
                </div>
                <div class="arch">
                    <h3 class="font-semibold text-cyan-300 mb-1">Domain Layer</h3>
                    <p class="text-sm text-zinc-400">Pure Dart UseCases and Repository interfaces adhering to Single Responsibility and Dependency Inversion principles.</p>
                </div>
                <div class="arch">
                    <h3 class="font-semibold text-emerald-300 mb-1">Data Layer</h3>
                    <p class="text-sm text-zinc-400">Remote REST data sources with Dio, JSON serialization, and local encrypted cache management.</p>
                </div>
                <div class="arch">
                    <h3 class="font-semibold text-purple-300 mb-1">Network &amp; Interceptor Engine</h3>
                    <p class="text-sm text-zinc-400">Dynamic Bearer token injection, automatic silent token refresh on 401 Unauthorized, and auto-logout on invalidation.</p>
                </div>
            </div>
        </div>

        <div class="flex flex-col gap-4 justify-center">
            <!-- Directory Tree Mockup -->
            <div class="rounded-xl bg-white/3 border border-amber-500/20 p-4">
                <div class="mono text-[10px] text-zinc-500 mb-2 uppercase tracking-widest">Modular Feature Organization</div>
                <pre class="text-xs text-zinc-300 leading-relaxed overflow-x-auto"><code>features/
├── properties/
│   ├── data/         ← Models, RemoteSources, RepoImpl
│   ├── domain/       ← UseCases, PropertyEntity
│   └── presentation/ ← Cubits, Pages, MapPicker
├── packages_payment/ ← Paymob Checkout, AdCreditsCubit
├── moderation/       ← NSFWService (Sightengine Vision)
├── auth/             ← Token, StorageService, Interceptors
└── profile/          ← MyProperties, Localization
core/
├── di/               ← locator.dart (GetIt)
├── network/          ← DioHelper, SilentRefresh, ErrorHandler
├── security/         ← root_checker_plus, secure_storage
└── utils/            ← Pure-Dart Image Compressor</code></pre>
            </div>

            <!-- Architecture Highlights Grid -->
            <div class="grid grid-cols-2 gap-3">
                <div class="p-3.5 rounded-xl bg-white/3 border border-white/10">
                    <div class="text-xs font-mono text-amber-400 font-semibold mb-1">Silent Token Refresh</div>
                    <p class="text-[11px] text-zinc-400 leading-normal">Seamless background token refresh via Dio interceptor when 401 is received, replay pending requests without user disruption.</p>
                </div>
                <div class="p-3.5 rounded-xl bg-white/3 border border-white/10">
                    <div class="text-xs font-mono text-emerald-400 font-semibold mb-1">Pure-Dart Compression</div>
                    <p class="text-[11px] text-zinc-400 leading-normal">In-app resizing (max 1080px) and 75% JPEG compression reducing upload payload by &gt;70% with zero native plugin overhead.</p>
                </div>
                <div class="p-3.5 rounded-xl bg-white/3 border border-white/10">
                    <div class="text-xs font-mono text-cyan-400 font-semibold mb-1">Deep Link Buffer</div>
                    <p class="text-[11px] text-zinc-400 leading-normal">Caches incoming propertyId in AppCubit during splash animation and navigates directly upon animation complete.</p>
                </div>
                <div class="p-3.5 rounded-xl bg-white/3 border border-white/10">
                    <div class="text-xs font-mono text-purple-400 font-semibold mb-1">Ad Credits Singleton</div>
                    <p class="text-[11px] text-zinc-400 leading-normal">AdCreditsCubit registered as GetIt Singleton to guarantee live balance synchronization across all app screens.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- =================== COMPLETE TECH STACK =================== -->
<section class="max-w-5xl mx-auto px-4 pb-24 border-t border-white/5 pt-16">
    <div class="text-center mb-10">
        <p class="section-lbl mb-2">Engineered With</p>
        <h2 class="serif text-3xl sm:text-4xl text-white">Full Technology Stack</h2>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-3">
        <div class="feat-card text-center"><div class="text-2xl mb-2">🐦</div><div class="font-semibold text-white text-sm">Flutter</div><div class="text-xs text-zinc-500 mt-0.5">Cross-Platform UI</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">🎯</div><div class="font-semibold text-white text-sm">Dart</div><div class="text-xs text-zinc-500 mt-0.5">Core Language</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">🧱</div><div class="font-semibold text-white text-sm">BLoC / Cubit</div><div class="text-xs text-zinc-500 mt-0.5">State Management</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">💉</div><div class="font-semibold text-white text-sm">GetIt</div><div class="text-xs text-zinc-500 mt-0.5">Dependency Injection</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">🌐</div><div class="font-semibold text-white text-sm">Dio</div><div class="text-xs text-zinc-500 mt-0.5">HTTP &amp; Interceptors</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">💳</div><div class="font-semibold text-white text-sm">Paymob</div><div class="text-xs text-zinc-500 mt-0.5">Unified Payment Gateway</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">👁️</div><div class="font-semibold text-white text-sm">Sightengine AI</div><div class="text-xs text-zinc-500 mt-0.5">Computer Vision Moderation</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">🗺️</div><div class="font-semibold text-white text-sm">Google Maps SDK</div><div class="text-xs text-zinc-500 mt-0.5">Geolocator &amp; Pins</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">🔗</div><div class="font-semibold text-white text-sm">AppLinks</div><div class="text-xs text-zinc-500 mt-0.5">Deep Linking Engine</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">🔒</div><div class="font-semibold text-white text-sm">RootCheckerPlus</div><div class="text-xs text-zinc-500 mt-0.5">Anti-Tampering Security</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">🔑</div><div class="font-semibold text-white text-sm">Secure Storage</div><div class="text-xs text-zinc-500 mt-0.5">Encrypted Keyring Sessions</div></div>
        <div class="feat-card text-center"><div class="text-2xl mb-2">📐</div><div class="font-semibold text-white text-sm">zap_sizer</div><div class="text-xs text-zinc-500 mt-0.5">Responsive Sizing (.w, .h)</div></div>
    </div>
</section>

<!-- CTA -->
<section class="max-w-5xl mx-auto px-4 pb-24 pt-4">
    <div class="rounded-3xl glass border border-amber-500/20 p-10 sm:p-14 text-center relative overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-br from-amber-950/20 to-transparent pointer-events-none rounded-3xl"></div>
        <p class="section-lbl mb-4">Architecture &amp; Portfolio</p>
        <h2 class="serif text-3xl sm:text-4xl text-white mb-3">Interested in enterprise Flutter engineering?</h2>
        <p class="text-zinc-400 text-sm max-w-lg mx-auto mb-8">
            Explore other featured mobile architectures and case studies built with Clean Architecture, offline-first sync, and bank-grade security.
        </p>
        <div class="flex flex-wrap justify-center gap-4 mb-8">
            <a href="https://play.google.com/store/apps/details?id=com.housemart.house_mart" target="_blank" rel="noopener" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full bg-emerald-600 hover:bg-emerald-500 text-white font-semibold text-xs sm:text-sm shadow-[0_0_24px_rgba(16,185,129,0.35)] transition-all">
                <i data-lucide="play" class="w-4 h-4"></i> Download on Google Play
            </a>
            <a href="{{ route('projects.ideal-pos') }}/" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-white/15 bg-white/5 text-white hover:bg-white/10 text-xs sm:text-sm transition-all">
                <i data-lucide="layers" class="w-4 h-4 text-emerald-400"></i> Ideal POS Case Study
            </a>
            <a href="{{ route('projects.dawami-hr') }}/" class="inline-flex items-center gap-2 px-6 py-2.5 rounded-full border border-violet-500/30 bg-violet-950/40 text-violet-200 hover:bg-violet-900/50 text-xs sm:text-sm transition-all">
                <i data-lucide="smartphone" class="w-4 h-4 text-violet-400"></i> Dawami HR Case Study
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
        <p class="text-xs mono text-zinc-600">© 2025 Mohamed Elshabrawy · HouseMart Case Study</p>
        <div class="flex items-center gap-4 text-xs mono text-zinc-600">
            <a href="{{ route('home') }}" class="hover:text-zinc-300 transition">Portfolio</a>
            <a href="{{ route('projects.ideal-pos') }}" class="hover:text-zinc-300 transition">Ideal POS</a>
            <a href="{{ route('projects.dawami-hr') }}" class="hover:text-zinc-300 transition">Dawami HR</a>
        </div>
    </div>
</footer>

<script>
// ---- SLIDER LOGIC ----
const images = [
    '{{ asset("images/projects/housemart_1.png") }}',
    '{{ asset("images/projects/housemart_2.png") }}',
    '{{ asset("images/projects/housemart_3.png") }}',
    '{{ asset("images/projects/housemart_4.png") }}'
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

// Touch/swipe gestures
let startX = 0;
const gallery = document.getElementById('mainGallery');
gallery.addEventListener('touchstart', e => { startX = e.touches[0].clientX; }, { passive: true });
gallery.addEventListener('touchend', e => {
    const dx = e.changedTouches[0].clientX - startX;
    if (Math.abs(dx) > 40) dx < 0 ? goNext() : goPrev();
});

// Keyboard controls
document.addEventListener('keydown', e => {
    if (e.key === 'ArrowRight') goNext();
    if (e.key === 'ArrowLeft') goPrev();
    if (e.key === 'Escape') closeLightbox();
});

// ---- LIGHTBOX LOGIC ----
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

document.addEventListener('DOMContentLoaded', () => { 
    if (window.lucide) { lucide.createIcons(); } 
});
</script>
</body>
</html>
