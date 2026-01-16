@extends("layout.app")

@section("content")

<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

<section 
    class="h-screen bg-cover bg-center flex items-center justify-center text-white relative" 
    style="background-image: url('http://127.0.0.1:8000/1.jpg');"
    data-aos="fade-up"
    data-aos-duration="400"
    data-aos-easing="ease-out-cubic"
>
    <div class="absolute inset-0 bg-black/80"></div>

    <div class="relative z-10 max-w-4xl text-center px-4">
        <h1 class="text-4xl md:text-5xl font-semibold mb-6 
            text-transparent bg-clip-text 
            bg-gradient-to-r from-gray-300 via-gray-400 to-gray-500"
            data-aos="fade-right"
            data-aos-delay="150"
            data-aos-duration="700"
            data-aos-easing="ease-in-out"
        >
            AUTOHELD – Ihr zertifizierter KFZ-Gutachter in NRW
        </h1>
        
        <p class="text-base md:text-lg leading-relaxed mb-6 
            text-transparent bg-clip-text 
            bg-gradient-to-r from-gray-300 via-gray-400 to-gray-500"
            data-aos="fade-left"
            data-aos-delay="300"
            data-aos-duration="700"
            data-aos-easing="ease-in-out"
        >
            Vertrauen Sie AUTOHELD für schnelle, unabhängige und rechtssichere Unfallgutachten. Wir sind jederzeit vor Ort in NRW, um Ihnen zu helfen.
        </p>
        
        <div class="flex justify-center space-x-4"
     data-aos="zoom-in"
     data-aos-delay="450"
     data-aos-duration="700"
     data-aos-easing="ease-out-back"
>
  <a href="#contact-section" class="focus:outline-none">
    <x-button 
      class="hover:bg-yellow-600 text-white"
      icon="fas fa-comments"
      text="Kostenlose Beratung"
      color="bg-white"
      textColor="text-yellow-500"
      ringColor="ring-yellow-500"
    />
  </a>
</div>
        
    </div>
</section>

@php
    $cards = [
        [
            'icon' => 'fas fa-phone',
            'title' => 'Schritt 1: Telefonisch anfragen',
            'description' => 'Rufen Sie uns an oder nutzen Sie unser Online-Formular. Wir melden uns innerhalb von 24 Stunden.'
        ],
        [
            'icon' => 'fas fa-tools',
            'title' => 'Schritt 2: Schnelle Hilfe',
            'description' => 'Unsere Experten sind innerhalb kürzester Zeit bei Ihnen vor Ort – zuverlässig und effizient.'
        ],
        [
            'icon' => 'fas fa-check-circle',
            'title' => 'Schritt 3: Zuverlässiger Schutz',
            'description' => 'Wir garantieren Ihnen höchste Qualität bei unseren Produkten – geprüft und zertifiziert.'
        ]
    ];

    $aosAnimations = ['fade-up', 'zoom-in', 'flip-left'];
@endphp

<h1 class="text-3xl font-semibold text-gray-800 text-center mt-8 mb-6" 
    data-aos="fade-up" 
    data-aos-duration="400" 
    data-aos-easing="ease-in-out"
>
    Unsere Dienstleistungen
</h1>

<div class="grid grid-cols-1 md:grid-cols-3 gap-6 px-4">
    @foreach($cards as $index => $card)
        <x-card 
            :icon="$card['icon']"
            :title="$card['title']"
            :description="$card['description']"
            data-aos="{{ $aosAnimations[$index % count($aosAnimations)] }}"
            data-aos-delay="{{ 200 + $index * 200 }}"
            data-aos-duration="700"
            data-aos-easing="ease-in-out"
            data-aos-anchor-placement="top-bottom"
        />
    @endforeach
</div>

<section class="py-20 bg-gradient-to-b from-gray-200 to-gray-300" 
    data-aos="fade-up" 
    data-aos-delay="200" 
    data-aos-duration="400"
    data-aos-easing="ease-in-out"
>
    <div class="container mx-auto px-4">
        <h2 class="text-4xl font-bold text-center text-gray-800 mb-16 leading-snug" data-aos="fade-up">
            Was sagt man über uns?
        </h2>

        <div class="swiper mySwiper" data-aos="fade-up" data-aos-delay="300">
            <div class="swiper-wrapper">
                @foreach($reviews as $review)
                    <div class="swiper-slide px-4">
                        <x-review-card 
                            :name="$review['name']"
                            :image="$review['image']"
                            :date="$review['date']"
                            :description="$review['description']"
                            :rating="$review['rating']"
                        />
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section id="contact-section" class="bg-gradient-to-br from-gray-100 via-white to-gray-50 py-16 px-4 sm:px-8 lg:px-20" data-aos="fade-up" data-aos-delay="500">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-14 items-stretch">
        <div class="w-full h-full flex items-center" data-aos="zoom-in" data-aos-delay="200">
            <img src="http://127.0.0.1:8000/2.jpg" alt="KFZ Gutachten" class="rounded-2xl shadow-xl transition duration-300 h-[500px] object-cover" />
        </div>

        <div class="space-y-8 flex flex-col justify-center" data-aos="fade-left" data-aos-delay="350">
            <h2 class="text-2xl lg:text-3xl font-semibold text-gray-900 leading-relaxed">
                AUTOHELD Sachverständigen GmbH <br class="hidden sm:block" />
                Ihre KFZ-Gutachter in <span class="text-yellow-600">Lüdenscheid</span> und <span class="text-yellow-600">Essen</span>
            </h2>

            <p class="text-lg text-gray-700 leading-relaxed">
                <span class="font-semibold">KFZ-Gutachten</span> bei <strong class="text-yellow-600">Bagatellschäden, Totalschäden</strong> oder komplexen Fällen – professionell & individuell. Unser Ziel: Der gesamte Prozess so unkompliziert & effizient wie möglich.
            </p>

            <div class="bg-white p-6 rounded-xl shadow-lg border-l-4 border-yellow-600">
                <h3 class="text-xl font-bold text-gray-800 mb-2">Kostenlos Beraten lassen</h3>
                <p class="text-gray-600 text-base">
                    Starten Sie mit einem <strong class="text-gray-800">unverbindlichen Beratungsgespräch</strong>. <span class="text-yellow-600 font-semibold">Kontaktieren Sie uns</span> und profitieren Sie vom starken Rundum-Service in <strong>Lüdenscheid und Essen</strong>.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row gap-6 pt-6 text-center sm:text-left items-center sm:items-start">
                <div class="flex flex-col items-center sm:items-start justify-between h-full" data-aos="fade-up" data-aos-delay="400">
                    <div id="qualityCounter" class="text-5xl font-extrabold text-yellow-600 mb-4">0%</div>
                    <div class="text-lg font-semibold text-gray-800">Qualität</div>
                    <p class="text-gray-600">Präzise, zuverlässig, professionell</p>
                </div>

                <div class="flex flex-col items-center sm:items-start justify-between h-full" data-aos="fade-up" data-aos-delay="450">
                    <p class="text-3xl font-bold text-gray-900">2</p>
                    <p class="text-lg font-semibold text-gray-800 mt-1">Standorte</p>
                    <p class="text-gray-600">Lüdenscheid & Essen</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bg-yellow-50 py-20" data-aos="fade-up" data-aos-delay="600">
    <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-2 gap-12">
        <div x-data="{ selected: null }" class="space-y-5" data-aos="fade-right">
            <h2 class="text-4xl font-bold text-yellow-600 mb-6">Häufig gestellte Fragen</h2>

            @foreach([
                ['id' => 1, 'q' => 'Was macht Autoheld GmbH genau?', 'a' => 'Wir sind ein unabhängiges KFZ-Sachverständigenbüro, das Fahrzeugbewertungen, Schadengutachten, Wertgutachten und mehr anbietet.'],
                ['id' => 2, 'q' => 'Wie schnell kann ich ein Gutachten erhalten?', 'a' => 'In der Regel stellen wir ein Gutachten innerhalb weniger Tage nach Begutachtung des Fahrzeugs aus.'],
                ['id' => 3, 'q' => 'Bieten Sie Ihre Leistungen auch für Nutzfahrzeuge oder Oldtimer an?', 'a' => 'Ja, wir erstellen Gutachten für nahezu alle Fahrzeugklassen – von PKW und Nutzfahrzeugen bis hin zu Oldtimern.'],
                ['id' => 4, 'q' => 'An welchen Standorten sind Sie vertreten?', 'a' => 'Sie finden uns in Lüdenscheid und Essen. Bei Bedarf stehen wir Ihnen jedoch auch bundesweit zur Verfügung.']
            ] as $faq)
                <div class="rounded-xl overflow-hidden shadow-md transition-all duration-200 bg-white" data-aos="fade-left" data-aos-delay="{{ 500 + $faq['id'] * 100 }}">
                    <button
                        x-on:click="selected === {{ $faq['id'] }} ? selected = null : selected = {{ $faq['id'] }}"
                        class="w-full text-left px-6 py-4 transition-all duration-200 flex justify-between items-center font-semibold text-lg"
                        :class="{
                            'bg-yellow-400 text-gray-900': selected === {{ $faq['id'] }},
                            'bg-[#fcc72c] text-gray-900': selected !== {{ $faq['id'] }}
                        }"
                    >
                        <div class="flex items-center gap-3">
                            <i class="fas fa-question-circle text-gray-800 text-xl"></i>
                            {{ $faq['q'] }}
                        </div>
                        <i :class="selected === {{ $faq['id'] }} ? 'rotate-180' : ''" class="fas fa-chevron-down transition-transform duration-200 text-gray-800"></i>
                    </button>

                    <div
                        x-show="selected === {{ $faq['id'] }}"
                        x-transition:enter="transition ease-out duration-200 transform opacity-0 scale-y-0"
                        x-transition:leave="transition ease-in duration-200 transform opacity-0 scale-y-0"
                        x-cloak
                        class="px-6 pb-4 pt-2 text-gray-700 leading-relaxed"
                    >
                        {{ $faq['a'] }}
                    </div>
                </div>
            @endforeach
        </div>

        <div class="relative" data-aos="fade-left" data-aos-delay="700">
            <div class="absolute top-0 left-0 w-full h-full bg-yellow-300/20 rounded-2xl blur-2xl -z-10"></div>
            <img src="http://127.0.0.1:8000/3.jpg" alt="FAQ Auto" class="w-full h-[500px] object-cover rounded-2xl" />
        </div>
    </div>
</section>

@endsection

@section('scripts')
<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // تهيئة السلايدر
    new Swiper('.mySwiper', {
        loop: true,
        spaceBetween: 10,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        speed: 700,
        slidesPerView: 1,
        breakpoints: {
            640: { slidesPerView: 1 },
            768: { slidesPerView: 2 },
            1024: { slidesPerView: 3 },
        }
    });

    // عداد الجودة مع Intersection Observer
    const counter = document.getElementById("qualityCounter");
    const target = 100;
    let count = 0;
    let started = false;

    function updateCounter() {
        if (count <= target) {
            counter.textContent = count + "%";
            count++;
            setTimeout(updateCounter, 20);
        }
    }

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting && !started) {
                started = true;
                updateCounter();
                observer.unobserve(counter);
            }
        });
    }, { threshold: 0.3 });

    observer.observe(counter);

    // تهيئة AOS
    AOS.init({
        duration: 700,
        easing: 'ease-in-out',
        once: true,
        mirror: false,
    });

    // ناعمة للتمرير للروابط الداخلية
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener("click", function (e) {
            e.preventDefault();
            const targetID = this.getAttribute("href").substring(1);
            const targetElement = document.getElementById(targetID);
            if (targetElement) {
                targetElement.scrollIntoView({ behavior: "smooth" });
            }
        });
    });

    // منع انتشار النقر داخل عناصر FAQ لتجنب التضارب مع زر الهامبورغر أو غيره
    document.querySelectorAll('.faq-button').forEach(button => {
        button.addEventListener('click', function (e) {
            e.stopPropagation();
        });
    });
});
</script>

@endsection
