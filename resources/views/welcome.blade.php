<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RNQ Studio — Jasa Development Web, Mobile & IoT</title>
    <meta name="description" content="Partner pengembangan sistem end-to-end untuk web, aplikasi Android & iOS, serta IoT. Dari strategi, desain, development, hingga sistem siap bertumbuh.">
    <meta name="theme-color" content="#07111f">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url('/') }}">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="RNQ Studio">
    <meta property="og:title" content="RNQ Studio — Build the System Behind Your Next Move">
    <meta property="og:description" content="Web, mobile, and IoT systems engineered around real business outcomes.">
    <meta property="og:url" content="{{ url('/') }}">
    <meta property="og:image" content="{{ rtrim(request()->root(), '/') }}/og.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="RNQ Studio — Web, Mobile, IoT. Engineered for impact.">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="RNQ Studio — Web, Mobile & IoT Development">
    <meta name="twitter:description" content="One technology partner from product strategy to launch and beyond.">
    <meta name="twitter:image" content="{{ rtrim(request()->root(), '/') }}/og.png">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('apple-touch-icon-precomposed.png') }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">

    @fonts

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>
<body>
    <a class="skip-link" href="#main-content" data-i18n="accessibility.skip">Lewati ke konten utama</a>
    <div class="cursor-glow" aria-hidden="true"></div>
    <div class="page-noise" aria-hidden="true"></div>
    <div class="scroll-progress" aria-hidden="true"><span></span></div>

    <header class="site-header" data-header>
        <div class="nav-shell">
            <a class="brand" href="#top" aria-label="RNQ Studio — Home">
                <span class="brand-mark">
                    <img src="{{ asset('images/logo-dark.svg') }}" alt="" width="42" height="42">
                </span>
                <span class="brand-copy">
                    <strong>RNQ</strong>
                    <span>STUDIO</span>
                </span>
            </a>

            <nav class="desktop-nav" aria-label="Navigasi utama">
                <a href="#services" data-i18n="nav.services">Layanan</a>
                <a href="#solutions" data-i18n="nav.solutions">Solusi</a>
                <a href="#process" data-i18n="nav.process">Proses</a>
                <a href="#why-us" data-i18n="nav.why">Mengapa RNQ</a>
                <a href="#faq">FAQ</a>
            </nav>

            <div class="nav-actions">
                <div class="language-switch" role="group" aria-label="Pilih bahasa">
                    <button type="button" class="is-active" data-language="id" aria-pressed="true">ID</button>
                    <span aria-hidden="true"></span>
                    <button type="button" data-language="en" aria-pressed="false">EN</button>
                </div>
                <a class="button button-small button-light nav-cta"
                   href="https://wa.me/6281818173095?text=Halo%20RNQ%20Studio%2C%20saya%20ingin%20konsultasi%20tentang%20pengembangan%20sistem."
                   target="_blank"
                   rel="noopener noreferrer"
                   data-whatsapp
                   data-i18n="nav.contact">Mulai Konsultasi</a>
                <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="mobile-menu" data-menu-toggle>
                    <span></span><span></span>
                    <span class="sr-only" data-i18n="accessibility.menu">Buka menu</span>
                </button>
            </div>
        </div>

        <div class="mobile-menu" id="mobile-menu" data-mobile-menu>
            <nav aria-label="Navigasi mobile">
                <a href="#services" data-i18n="nav.services">Layanan</a>
                <a href="#solutions" data-i18n="nav.solutions">Solusi</a>
                <a href="#process" data-i18n="nav.process">Proses</a>
                <a href="#why-us" data-i18n="nav.why">Mengapa RNQ</a>
                <a href="#faq">FAQ</a>
                <a class="button button-primary"
                   href="https://wa.me/6281818173095?text=Halo%20RNQ%20Studio%2C%20saya%20ingin%20konsultasi%20tentang%20pengembangan%20sistem."
                   target="_blank"
                   rel="noopener noreferrer"
                   data-whatsapp
                   data-i18n="nav.contact">Mulai Konsultasi</a>
            </nav>
        </div>
    </header>

    <main id="main-content">
        <section class="hero" id="top">
            <div class="hero-grid" aria-hidden="true"></div>
            <div class="hero-orb hero-orb-one" aria-hidden="true"></div>
            <div class="hero-orb hero-orb-two" aria-hidden="true"></div>

            <div class="container hero-layout">
                <div class="hero-copy">
                    <div class="eyebrow reveal">
                        <span class="status-dot"></span>
                        <span data-i18n="hero.eyebrow">Berpengalaman sejak 2016 • Ratusan proyek terselesaikan</span>
                    </div>

                    <h1 class="reveal reveal-delay-1">
                        <span data-i18n="hero.titleLead">Sistem digital yang</span>
                        <span class="text-gradient" data-i18n="hero.titleAccent">dirancang tepat.</span>
                        <span data-i18n="hero.titleEnd">Dibangun untuk tumbuh.</span>
                    </h1>

                    <p class="hero-description reveal reveal-delay-2" data-i18n="hero.description">
                        Kami membantu bisnis mengubah proses rumit menjadi produk digital yang terhubung—mulai dari web, aplikasi Android &amp; iOS, hingga perangkat IoT. Satu partner dari ide sampai sistem bekerja di dunia nyata.
                    </p>

                    <div class="hero-actions reveal reveal-delay-3">
                        <a class="button button-primary magnetic"
                           href="https://wa.me/6281818173095?text=Halo%20RNQ%20Studio%2C%20saya%20ingin%20konsultasi%20tentang%20pengembangan%20sistem."
                           target="_blank"
                           rel="noopener noreferrer"
                           data-whatsapp>
                            <span data-i18n="hero.primaryCta">Ceritakan Kebutuhan Anda</span>
                            <span class="button-arrow" aria-hidden="true">↗</span>
                        </a>
                        <a class="button button-ghost" href="#services">
                            <span data-i18n="hero.secondaryCta">Jelajahi Layanan</span>
                            <span class="button-arrow" aria-hidden="true">↓</span>
                        </a>
                    </div>

                    <div class="hero-proof reveal reveal-delay-4">
                        <div class="proof-line" aria-hidden="true"></div>
                        <p data-i18n="hero.proof">Web • Mobile • IoT. Satu partner, satu arah.</p>
                    </div>
                </div>

                <div class="hero-visual reveal reveal-delay-2" data-hero-visual>
                    <div class="system-window" data-tilt>
                        <div class="window-bar">
                            <div class="window-dots" aria-hidden="true"><i></i><i></i><i></i></div>
                            <span data-i18n="visual.title">BLUEPRINT SISTEM</span>
                            <span class="window-status"><i></i><b data-i18n="visual.online">AKTIF</b></span>
                        </div>

                        <div class="system-canvas">
                            <div class="canvas-grid" aria-hidden="true"></div>
                            <div class="signal-ring signal-ring-one" aria-hidden="true"></div>
                            <div class="signal-ring signal-ring-two" aria-hidden="true"></div>

                            <div class="connector connector-top" aria-hidden="true"><i></i></div>
                            <div class="connector connector-right" aria-hidden="true"><i></i></div>
                            <div class="connector connector-bottom" aria-hidden="true"><i></i></div>
                            <div class="connector connector-left" aria-hidden="true"><i></i></div>

                            <div class="system-core">
                                <span class="core-pulse" aria-hidden="true"></span>
                                <small data-i18n="visual.coreLabel">BISNIS ANDA</small>
                                <strong data-i18n="visual.coreTitle">Satu Ekosistem</strong>
                                <span data-i18n="visual.coreText">Terhubung &amp; terukur</span>
                            </div>

                            <div class="system-node node-web">
                                <i class="node-icon icon-browser" aria-hidden="true"></i>
                                <span>WEB</span>
                                <b data-i18n="visual.nodeReady">READY</b>
                            </div>
                            <div class="system-node node-mobile">
                                <i class="node-icon icon-phone" aria-hidden="true"></i>
                                <span>MOBILE</span>
                                <b data-i18n="visual.nodeReady">READY</b>
                            </div>
                            <div class="system-node node-iot">
                                <i class="node-icon icon-signal" aria-hidden="true"></i>
                                <span>IoT</span>
                                <b data-i18n="visual.nodeReady">READY</b>
                            </div>
                            <div class="system-node node-cloud">
                                <i class="node-icon icon-cloud" aria-hidden="true"></i>
                                <span>CLOUD</span>
                                <b data-i18n="visual.nodeReady">READY</b>
                            </div>

                            <div class="metric-card metric-card-top">
                                <span data-i18n="visual.architecture">ARSITEKTUR</span>
                                <strong data-i18n="visual.scalable">Scalable</strong>
                            </div>
                            <div class="metric-card metric-card-bottom">
                                <div class="metric-bars" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i></div>
                                <span data-i18n="visual.liveData">LIVE DATA</span>
                            </div>
                        </div>

                        <div class="window-footer">
                            <span><i></i> RNQ / SYSTEM_01</span>
                            <code data-system-message>strategy → design → engineering → impact</code>
                        </div>
                    </div>
                </div>
            </div>

            <div class="stack-strip" aria-label="Teknologi yang kami gunakan">
                <div class="stack-track">
                    @foreach (['LARAVEL', 'REACT', 'FLUTTER', 'SWIFT', 'KOTLIN', 'NODE.JS', 'POSTGRESQL', 'CLOUD', 'MQTT', 'REST API', 'LARAVEL', 'REACT', 'FLUTTER', 'SWIFT', 'KOTLIN', 'NODE.JS', 'POSTGRESQL', 'CLOUD', 'MQTT', 'REST API'] as $tech)
                        <span>{{ $tech }} <i></i></span>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="section intro-section">
            <div class="container intro-grid">
                <div class="section-kicker reveal">
                    <span>01</span>
                    <p data-i18n="intro.kicker">YANG KAMI PECAHKAN</p>
                </div>
                <div class="intro-copy">
                    <h2 class="display-title reveal">
                        <span data-i18n="intro.titleLead">Bukan sekadar aplikasi.</span>
                        <em data-i18n="intro.titleAccent">Sistem yang menggerakkan bisnis.</em>
                    </h2>
                    <div class="intro-detail reveal">
                        <p data-i18n="intro.description">Teknologi seharusnya mempersingkat alur kerja, membuka visibilitas, dan menciptakan pengalaman yang lebih baik—bukan menambah kompleksitas baru. Kami mulai dari tujuan bisnis, lalu merancang sistem yang paling masuk akal untuk mencapainya.</p>
                        <a href="#process" class="text-link">
                            <span data-i18n="intro.link">Lihat cara kami bekerja</span>
                            <span aria-hidden="true">↘</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section class="credibility-section" aria-label="Pengalaman RNQ Studio">
            <div class="container credibility-grid">
                <article class="credibility-intro reveal">
                    <span data-i18n="credibility.kicker">REKAM JEJAK</span>
                    <p data-i18n="credibility.statement">Pengalaman panjang membuat kami tahu kapan harus bergerak cepat, kapan harus menggali lebih dalam, dan detail mana yang tidak boleh dikompromikan.</p>
                </article>
                <article class="credibility-stat reveal">
                    <strong>2016</strong>
                    <p data-i18n="credibility.since">Tahun kami mulai membantu bisnis membangun sistem digital.</p>
                </article>
                <article class="credibility-stat reveal">
                    <strong data-i18n="credibility.hundreds">Ratusan</strong>
                    <p data-i18n="credibility.projects">Proyek telah diselesaikan lintas kebutuhan dan kompleksitas.</p>
                </article>
                <article class="credibility-stat credibility-stat-accent reveal">
                    <strong>Q × S</strong>
                    <p data-i18n="credibility.standard">Quality × Speed. Dua standar kerja, bukan pilihan salah satu.</p>
                </article>
            </div>
        </section>

        <section class="section services-section" id="services">
            <div class="container">
                <div class="section-heading">
                    <div class="section-kicker reveal">
                        <span>02</span>
                        <p data-i18n="services.kicker">LAYANAN INTI</p>
                    </div>
                    <div class="heading-row">
                        <h2 class="display-title reveal" data-i18n="services.title">Dari layar hingga perangkat. Kami bangun sebagai satu kesatuan.</h2>
                        <p class="heading-copy reveal" data-i18n="services.description">Pilih satu layanan atau bentuk tim end-to-end. Arsitektur, pengalaman pengguna, dan kebutuhan operasional tetap bergerak dalam satu arah.</p>
                    </div>
                </div>

                <div class="service-grid">
                    <article class="service-card service-card-featured reveal" data-tilt>
                        <div class="card-topline">
                            <span>01 / WEB</span>
                            <i aria-hidden="true">↗</i>
                        </div>
                        <div class="service-symbol symbol-web" aria-hidden="true">
                            <div><i></i><i></i><i></i></div>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="service-content">
                            <h3 data-i18n="services.webTitle">Web System Development</h3>
                            <p data-i18n="services.webText">Platform web yang cepat, aman, dan mudah dikembangkan—dari website korporat hingga sistem operasional kompleks.</p>
                            <ul>
                                <li data-i18n="services.webItem1">Dashboard &amp; internal tools</li>
                                <li data-i18n="services.webItem2">SaaS, portal &amp; marketplace</li>
                                <li data-i18n="services.webItem3">API &amp; integrasi sistem</li>
                            </ul>
                        </div>
                    </article>

                    <article class="service-card reveal" data-tilt>
                        <div class="card-topline">
                            <span>02 / MOBILE</span>
                            <i aria-hidden="true">↗</i>
                        </div>
                        <div class="service-symbol symbol-mobile" aria-hidden="true">
                            <div class="phone-one"><i></i><span></span><span></span></div>
                            <div class="phone-two"><i></i><span></span><span></span></div>
                        </div>
                        <div class="service-content">
                            <h3 data-i18n="services.mobileTitle">Android &amp; iOS Apps</h3>
                            <p data-i18n="services.mobileText">Aplikasi mobile yang intuitif, stabil, dan siap dipakai pengguna di lapangan maupun pasar konsumen.</p>
                            <ul>
                                <li data-i18n="services.mobileItem1">Native &amp; cross-platform</li>
                                <li data-i18n="services.mobileItem2">Offline-first &amp; real-time</li>
                                <li data-i18n="services.mobileItem3">Rilis Play Store &amp; App Store</li>
                            </ul>
                        </div>
                    </article>

                    <article class="service-card reveal" data-tilt>
                        <div class="card-topline">
                            <span>03 / IoT</span>
                            <i aria-hidden="true">↗</i>
                        </div>
                        <div class="service-symbol symbol-iot" aria-hidden="true">
                            <div class="iot-center"></div>
                            <div class="iot-orbit orbit-one"><i></i></div>
                            <div class="iot-orbit orbit-two"><i></i></div>
                            <span class="iot-wave wave-one"></span>
                            <span class="iot-wave wave-two"></span>
                        </div>
                        <div class="service-content">
                            <h3 data-i18n="services.iotTitle">IoT &amp; Connected Devices</h3>
                            <p data-i18n="services.iotText">Hubungkan sensor, mesin, dan perangkat ke dashboard yang memberi data serta kontrol saat dibutuhkan.</p>
                            <ul>
                                <li data-i18n="services.iotItem1">Monitoring &amp; telemetry</li>
                                <li data-i18n="services.iotItem2">Remote control &amp; alert</li>
                                <li data-i18n="services.iotItem3">Device–cloud integration</li>
                            </ul>
                        </div>
                    </article>

                    <article class="service-card reveal" data-tilt>
                        <div class="card-topline">
                            <span>04 / SCALE</span>
                            <i aria-hidden="true">↗</i>
                        </div>
                        <div class="service-symbol symbol-scale" aria-hidden="true">
                            <span><i></i><b></b></span>
                            <span><i></i><b></b></span>
                            <span><i></i><b></b></span>
                        </div>
                        <div class="service-content">
                            <h3 data-i18n="services.scaleTitle">Modernization &amp; Scale</h3>
                            <p data-i18n="services.scaleText">Rapikan sistem lama, tingkatkan performa, dan siapkan fondasi teknis yang mengikuti pertumbuhan bisnis.</p>
                            <ul>
                                <li data-i18n="services.scaleItem1">Audit &amp; architecture review</li>
                                <li data-i18n="services.scaleItem2">Legacy system modernization</li>
                                <li data-i18n="services.scaleItem3">Cloud, security &amp; automation</li>
                            </ul>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section solutions-section" id="solutions">
            <div class="solutions-orb" aria-hidden="true"></div>
            <div class="container">
                <div class="section-kicker section-kicker-light reveal">
                    <span>03</span>
                    <p data-i18n="solutions.kicker">YANG BISA KITA BANGUN</p>
                </div>
                <div class="solutions-heading">
                    <h2 class="display-title reveal" data-i18n="solutions.title">Satu fondasi. Banyak kemungkinan.</h2>
                    <p class="reveal" data-i18n="solutions.description">Kami menyusun solusi sesuai konteks bisnis Anda—bukan memaksakan produk yang sama untuk semua orang.</p>
                </div>

                <div class="solution-list">
                    <article class="solution-item reveal">
                        <div class="solution-number">01</div>
                        <div class="solution-title">
                            <span data-i18n="solutions.opsLabel">OPERATIONS</span>
                            <h3 data-i18n="solutions.opsTitle">Platform Operasional</h3>
                        </div>
                        <p data-i18n="solutions.opsText">Satukan workflow, approval, dashboard, laporan, dan integrasi agar tim bergerak lebih cepat dengan data yang sama.</p>
                        <div class="solution-tags">
                            <span>ERP</span><span>CRM</span><span>WORKFLOW</span><span>ANALYTICS</span>
                        </div>
                        <div class="solution-arrow" aria-hidden="true">↗</div>
                    </article>
                    <article class="solution-item reveal">
                        <div class="solution-number">02</div>
                        <div class="solution-title">
                            <span data-i18n="solutions.customerLabel">CUSTOMER EXPERIENCE</span>
                            <h3 data-i18n="solutions.customerTitle">Produk Digital Pelanggan</h3>
                        </div>
                        <p data-i18n="solutions.customerText">Bangun pengalaman dari onboarding hingga transaksi yang terasa sederhana bagi pengguna dan terukur bagi bisnis.</p>
                        <div class="solution-tags">
                            <span>MOBILE APP</span><span>PORTAL</span><span>LOYALTY</span><span>COMMERCE</span>
                        </div>
                        <div class="solution-arrow" aria-hidden="true">↗</div>
                    </article>
                    <article class="solution-item reveal">
                        <div class="solution-number">03</div>
                        <div class="solution-title">
                            <span data-i18n="solutions.connectedLabel">CONNECTED WORLD</span>
                            <h3 data-i18n="solutions.connectedTitle">Ekosistem IoT</h3>
                        </div>
                        <p data-i18n="solutions.connectedText">Jadikan data perangkat sebagai keputusan: pantau kondisi, kirim peringatan, kendalikan aset, dan temukan pola secara real-time.</p>
                        <div class="solution-tags">
                            <span>SENSOR</span><span>MQTT</span><span>CONTROL</span><span>TELEMETRY</span>
                        </div>
                        <div class="solution-arrow" aria-hidden="true">↗</div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section process-section" id="process">
            <div class="container">
                <div class="process-heading">
                    <div class="section-kicker reveal">
                        <span>04</span>
                        <p data-i18n="process.kicker">PROSES KERJA</p>
                    </div>
                    <h2 class="display-title reveal" data-i18n="process.title">Jelas dari awal. Kolaboratif sampai akhir.</h2>
                    <p class="reveal" data-i18n="process.description">Anda selalu tahu apa yang sedang dibangun, mengapa keputusan dibuat, dan apa langkah berikutnya.</p>
                </div>

                <div class="process-track">
                    <div class="process-line" aria-hidden="true"><span></span></div>
                    <article class="process-step reveal">
                        <div class="process-marker"><span>01</span></div>
                        <div>
                            <small data-i18n="process.step1Label">DISCOVER</small>
                            <h3 data-i18n="process.step1Title">Pahami masalahnya</h3>
                            <p data-i18n="process.step1Text">Kami petakan tujuan, pengguna, alur kerja, risiko, dan definisi sukses sebelum bicara fitur.</p>
                        </div>
                    </article>
                    <article class="process-step reveal">
                        <div class="process-marker"><span>02</span></div>
                        <div>
                            <small data-i18n="process.step2Label">BLUEPRINT</small>
                            <h3 data-i18n="process.step2Title">Rancang jalur terbaik</h3>
                            <p data-i18n="process.step2Text">Solusi, prioritas, arsitektur, pengalaman pengguna, timeline, dan scope dibuat transparan.</p>
                        </div>
                    </article>
                    <article class="process-step reveal">
                        <div class="process-marker"><span>03</span></div>
                        <div>
                            <small data-i18n="process.step3Label">BUILD</small>
                            <h3 data-i18n="process.step3Title">Bangun dalam sprint</h3>
                            <p data-i18n="process.step3Text">Progress hadir bertahap dan dapat ditinjau, sehingga feedback masuk sebelum keputusan menjadi mahal.</p>
                        </div>
                    </article>
                    <article class="process-step reveal">
                        <div class="process-marker"><span>04</span></div>
                        <div>
                            <small data-i18n="process.step4Label">VERIFY</small>
                            <h3 data-i18n="process.step4Title">Uji yang penting</h3>
                            <p data-i18n="process.step4Text">Fungsi, keamanan, performa, dan pengalaman penggunaan diperiksa di skenario nyata.</p>
                        </div>
                    </article>
                    <article class="process-step reveal">
                        <div class="process-marker"><span>05</span></div>
                        <div>
                            <small data-i18n="process.step5Label">EVOLVE</small>
                            <h3 data-i18n="process.step5Title">Luncurkan &amp; kembangkan</h3>
                            <p data-i18n="process.step5Text">Kami bantu go-live, transfer knowledge, pemantauan, serta iterasi berdasarkan data dan kebutuhan baru.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section why-section" id="why-us">
            <div class="container">
                <div class="section-kicker reveal">
                    <span>05</span>
                    <p data-i18n="why.kicker">MENGAPA RNQ STUDIO</p>
                </div>
                <div class="heading-row why-heading">
                    <h2 class="display-title reveal" data-i18n="why.title">Bukan vendor yang hanya menerima brief.</h2>
                    <p class="heading-copy reveal" data-i18n="why.description">Kami hadir sebagai partner berpikir dan partner eksekusi—menantang asumsi, menjaga prioritas, lalu menuntaskan detail teknisnya.</p>
                </div>

                <div class="why-grid">
                    <article class="why-card why-card-wide reveal">
                        <div class="why-index">01</div>
                        <div class="why-visual visual-ownership" aria-hidden="true">
                            <div class="code-panel">
                                <span><i></i><i></i><i></i></span>
                                <p></p><p></p><p></p><p></p>
                            </div>
                            <div class="key-chip">YOUR CODE</div>
                        </div>
                        <div>
                            <span class="card-label" data-i18n="why.ownershipLabel">OWNERSHIP</span>
                            <h3 data-i18n="why.ownershipTitle">Sistem Anda tetap milik Anda.</h3>
                            <p data-i18n="why.ownershipText">Source code, dokumentasi, dan pengetahuan tidak dikunci. Tim Anda dapat melanjutkan, mengaudit, dan mengembangkan dengan percaya diri.</p>
                        </div>
                    </article>

                    <article class="why-card reveal">
                        <div class="why-index">02</div>
                        <div class="why-visual visual-architecture" aria-hidden="true">
                            <span></span><span></span><span></span>
                            <i></i><i></i><i></i>
                        </div>
                        <div>
                            <span class="card-label" data-i18n="why.archLabel">ENGINEERING</span>
                            <h3 data-i18n="why.archTitle">Fondasi yang siap berubah.</h3>
                            <p data-i18n="why.archText">Arsitektur disusun agar fitur, pengguna, data, dan integrasi baru dapat tumbuh tanpa membangun ulang semuanya.</p>
                        </div>
                    </article>

                    <article class="why-card reveal">
                        <div class="why-index">03</div>
                        <div class="why-visual visual-clarity" aria-hidden="true">
                            <div><span>SPRINT 04</span><b>72%</b></div>
                            <i><b></b></i>
                            <p><span></span><span></span><span></span></p>
                        </div>
                        <div>
                            <span class="card-label" data-i18n="why.clarityLabel">CLARITY</span>
                            <h3 data-i18n="why.clarityTitle">Progress tanpa kotak hitam.</h3>
                            <p data-i18n="why.clarityText">Scope, keputusan, risiko, dan perkembangan dibuka secara berkala. Tidak perlu menunggu berbulan-bulan untuk melihat hasil.</p>
                        </div>
                    </article>

                    <article class="why-card why-card-wide why-card-dark reveal">
                        <div class="why-index">04</div>
                        <div class="why-visual visual-quality" aria-hidden="true">
                            <div class="quality-radar">
                                <i></i><i></i><i></i>
                                <span>✓</span>
                            </div>
                            <div class="quality-list">
                                <span><i></i> SECURITY</span>
                                <span><i></i> PERFORMANCE</span>
                                <span><i></i> TESTABILITY</span>
                            </div>
                        </div>
                        <div>
                            <span class="card-label" data-i18n="why.qualityLabel">QUALITY</span>
                            <h3 data-i18n="why.qualityTitle">Kualitas bukan tahap terakhir.</h3>
                            <p data-i18n="why.qualityText">Keamanan, performa, maintainability, dan monitoring dipikirkan sejak desain—bukan ditempel setelah sistem selesai.</p>
                        </div>
                    </article>
                </div>
            </div>
        </section>

        <section class="section faq-section" id="faq">
            <div class="container faq-layout">
                <div class="faq-intro">
                    <div class="section-kicker reveal">
                        <span>06</span>
                        <p>FAQ</p>
                    </div>
                    <h2 class="display-title reveal" data-i18n="faq.title">Sebelum kita mulai.</h2>
                    <p class="reveal" data-i18n="faq.description">Beberapa jawaban singkat untuk hal yang paling sering menjadi pertimbangan sebelum memulai proyek digital.</p>
                    <a class="text-link reveal"
                       href="https://wa.me/6281818173095?text=Halo%20RNQ%20Studio%2C%20saya%20punya%20pertanyaan%20tentang%20pengembangan%20sistem."
                       target="_blank"
                       rel="noopener noreferrer"
                       data-whatsapp>
                        <span data-i18n="faq.more">Masih punya pertanyaan?</span>
                        <span aria-hidden="true">↗</span>
                    </a>
                </div>

                <div class="faq-list">
                    <details class="faq-item reveal">
                        <summary>
                            <span data-i18n="faq.q1">Apakah bisa mulai dari ide yang belum matang?</span>
                            <i aria-hidden="true"></i>
                        </summary>
                        <div><p data-i18n="faq.a1">Bisa. Tahap discovery memang dirancang untuk mengubah ide, masalah, atau proses manual menjadi kebutuhan yang jelas. Kami bantu menentukan prioritas dan bentuk solusi sebelum development dimulai.</p></div>
                    </details>
                    <details class="faq-item reveal">
                        <summary>
                            <span data-i18n="faq.q2">Berapa lama waktu pengembangannya?</span>
                            <i aria-hidden="true"></i>
                        </summary>
                        <div><p data-i18n="faq.a2">Tergantung scope, integrasi, dan tingkat kompleksitas. Setelah sesi awal, kami akan menyusun fase dan estimasi yang realistis. Proyek dapat dimulai dari MVP terarah lalu dikembangkan bertahap.</p></div>
                    </details>
                    <details class="faq-item reveal">
                        <summary>
                            <span data-i18n="faq.q3">Apakah RNQ bisa melanjutkan atau memperbaiki sistem yang sudah ada?</span>
                            <i aria-hidden="true"></i>
                        </summary>
                        <div><p data-i18n="faq.a3">Bisa. Kami dapat melakukan technical audit lebih dulu untuk memahami kualitas codebase, risiko, infrastruktur, dan pilihan terbaik: memperbaiki, memodernisasi bertahap, atau membangun ulang bagian tertentu.</p></div>
                    </details>
                    <details class="faq-item reveal">
                        <summary>
                            <span data-i18n="faq.q4">Apakah ada dukungan setelah sistem diluncurkan?</span>
                            <i aria-hidden="true"></i>
                        </summary>
                        <div><p data-i18n="faq.a4">Ada. Bentuknya dapat berupa masa stabilisasi, maintenance, monitoring, perbaikan, maupun roadmap pengembangan lanjutan—disesuaikan dengan kebutuhan operasional Anda.</p></div>
                    </details>
                    <details class="faq-item reveal">
                        <summary>
                            <span data-i18n="faq.q5">Bagaimana cara mendapat estimasi biaya?</span>
                            <i aria-hidden="true"></i>
                        </summary>
                        <div><p data-i18n="faq.a5">Mulai dengan konsultasi singkat melalui WhatsApp. Ceritakan masalah, target pengguna, fitur utama, dan target waktu jika ada. Setelah ruang lingkup cukup jelas, kami siapkan pendekatan dan estimasi yang transparan.</p></div>
                    </details>
                </div>
            </div>
        </section>

        <section class="cta-section">
            <div class="cta-grid" aria-hidden="true"></div>
            <div class="cta-orb" aria-hidden="true"></div>
            <div class="container cta-content">
                <div class="cta-status reveal">
                    <span class="status-dot"></span>
                    <span data-i18n="cta.eyebrow">IDE ANDA, LANGKAH BERIKUTNYA</span>
                </div>
                <h2 class="reveal">
                    <span data-i18n="cta.titleLead">Punya masalah yang</span>
                    <em data-i18n="cta.titleAccent">layak diselesaikan?</em>
                </h2>
                <p class="reveal" data-i18n="cta.description">Mari bicarakan konteksnya. Kami akan membantu melihat apakah web, mobile, IoT—atau kombinasi ketiganya—adalah langkah yang paling tepat.</p>
                <a class="button button-primary button-large magnetic reveal"
                   href="https://wa.me/6281818173095?text=Halo%20RNQ%20Studio%2C%20saya%20ingin%20mendiskusikan%20ide%20atau%20kebutuhan%20sistem."
                   target="_blank"
                   rel="noopener noreferrer"
                   data-whatsapp>
                    <span data-i18n="cta.button">Mulai Percakapan di WhatsApp</span>
                    <span class="button-arrow" aria-hidden="true">↗</span>
                </a>
                <small class="reveal" data-i18n="cta.note">Tidak perlu brief sempurna. Mulai saja dari masalah yang ingin Anda selesaikan.</small>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container footer-main">
            <div class="footer-brand">
                <a class="brand" href="#top" aria-label="RNQ Studio — Home">
                    <span class="brand-mark">
                        <img src="{{ asset('images/logo-dark.svg') }}" alt="" width="42" height="42">
                    </span>
                    <span class="brand-copy">
                        <strong>RNQ</strong>
                        <span>STUDIO</span>
                    </span>
                </a>
                <p data-i18n="footer.tagline">Merancang teknologi yang bekerja untuk manusia, bisnis, dan dunia yang terhubung.</p>
            </div>
            <div class="footer-links">
                <div>
                    <span data-i18n="footer.explore">JELAJAHI</span>
                    <a href="#services" data-i18n="nav.services">Layanan</a>
                    <a href="#solutions" data-i18n="nav.solutions">Solusi</a>
                    <a href="#process" data-i18n="nav.process">Proses</a>
                    <a href="#faq">FAQ</a>
                </div>
                <div>
                    <span data-i18n="footer.contact">KONTAK</span>
                    <a href="https://wa.me/6281818173095?text=Halo%20RNQ%20Studio%2C%20saya%20ingin%20konsultasi."
                       target="_blank"
                       rel="noopener noreferrer"
                       data-whatsapp>WhatsApp ↗</a>
                    <a href="/articles" data-i18n="footer.insights">Insights</a>
                </div>
            </div>
        </div>
        <div class="container footer-bottom">
            <p>© {{ date('Y') }} RNQ Studio. <span data-i18n="footer.rights">Hak cipta dilindungi.</span></p>
            <p data-i18n="footer.signature">Built with clarity. Engineered for impact.</p>
        </div>
    </footer>

    <a class="floating-whatsapp"
       href="https://wa.me/6281818173095?text=Halo%20RNQ%20Studio%2C%20saya%20ingin%20konsultasi%20tentang%20pengembangan%20sistem."
       target="_blank"
       rel="noopener noreferrer"
       data-whatsapp
       aria-label="Hubungi RNQ Studio melalui WhatsApp">
        <span class="whatsapp-ripple" aria-hidden="true"></span>
        <span class="whatsapp-icon" aria-hidden="true">WA</span>
        <span class="whatsapp-label" data-i18n="floating.label">Hubungi Kami</span>
    </a>
</body>
</html>
