@extends("layout.app")
@section("content")

<!-- قسم Hero -->
<section class="h-screen bg-cover bg-center flex items-center justify-center text-white relative" style="background-image: url('{{ asset('4.jpg') }}');">
    <div class="absolute inset-0 bg-black/75"></div>
    <div class="relative z-10 max-w-3xl text-center px-4">
        <h1 class="text-5xl md:text-7xl font-semibold mb-6 text-transparent bg-clip-text bg-gradient-to-r from-gray-300 via-gray-400 to-gray-500 opacity-0 translate-y-6 scale-95 transition duration-700 ease-in-out animate-on-scroll">
            Schnell, zuverlässig und transparent
        </h1>
        <p class="text-lg md:text-xl leading-relaxed mb-6 text-transparent bg-clip-text bg-gradient-to-r from-gray-300 via-gray-400 to-gray-500 opacity-0 translate-y-6 scale-95 transition duration-700 ease-in-out animate-on-scroll">
            Professionelle, unabhängige Schadengutachten für Unfallschäden. Vertrauen Sie auf unsere Expertise!
        </p>
        <div class="flex justify-center opacity-0 translate-y-6 scale-95 transition duration-700 ease-in-out animate-on-scroll">
            <a href="/contact" class="focus:outline-none">
                <x-button 
                    style="flex justify-center items-center"
                    icon="fas fa-phone"  
                    text="Kontaktieren Sie uns"
                    color="bg-white"
                    textColor="text-yellow-500"
                    ringColor="ring-yellow-500"
                />
            </a>
        </div>
    </div>
</section>

<!-- قسم Schadengutachten -->
<div class="flex flex-col md:flex-row bg-gradient-to-br from-gray-100 via-gray-200 to-gray-300 p-12 rounded-2xl shadow-md items-stretch">
    <!-- الصورة -->
    <div class="md:w-1/2 mb-6 md:mb-0 opacity-0 translate-y-6 scale-95 transition duration-700 ease-in-out animate-on-scroll">
        <img src="{{ asset('7.jpg') }}" alt="Schadengutachten" class="rounded-xl shadow-sm w-full h-auto max-h-[500px] object-cover">
    </div>

    <!-- النص -->
    <div class="md:w-1/2 md:pl-12 flex flex-col justify-center opacity-0 translate-y-6 scale-95 transition duration-700 ease-in-out animate-on-scroll">
        <h2 class="text-3xl font-bold text-gray-800 mb-6 text-yellow-500">Umfassende Schadengutachten</h2>
        <p class="text-gray-600 text-base mb-5 leading-relaxed">
            Ein Unfall oder eine Kollision kann schnell passieren – und schon steht die Frage im Raum: Wie hoch ist der Schaden wirklich?
        </p>
        <p class="text-gray-600 text-base mb-6 leading-relaxed">
            Während manche Anbieter nur oberflächliche Schätzungen liefern, erstellen wir detaillierte und transparente Gutachten als unabhängiges KFZ Sachverständigenbüro.
        </p>
        <h3 class="font-semibold text-xl text-gray-800 mt-4 mb-4">Unsere Leistungen im Überblick</h3>
        <ul class="list-disc list-inside text-gray-700 space-y-3 mb-6">
            <li><strong>Wertermittlung:</strong> Objektive Einschätzung des Fahrzeugwerts vor und nach dem Schaden.</li>
            <li><strong>Schadensbewertung:</strong> Gründliche Dokumentation und Beurteilung aller Schäden.</li>
            <li><strong>Transparenz:</strong> Verständliche Gutachten für maximale Nachvollziehbarkeit.</li>
        </ul>
    </div>
</div>

<!-- قسم Begutachtung -->
<section class="bg-gradient-to-b from-gray-50 via-gray-100 to-gray-200 py-28">
    <div class="container mx-auto px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">
        <!-- النص -->
        <div class="space-y-6 opacity-0 translate-y-6 scale-95 transition duration-700 ease-in-out animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-800 leading-snug">Individuelle Begutachtung mit Erfahrung</h2>
            <p class="text-gray-600 text-base leading-relaxed">
                Ob für Versicherungszwecke, Rechtsstreitigkeiten oder Reparaturentscheidungen – unsere Schadengutachten liefern Ihnen präzise und unabhängige Ergebnisse.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-4">
                @php
                    $features = [
                        'Ausführliche Fotodokumentation',
                        'Gründliche Prüfung aller Unfallspuren',
                        'Objektive Bewertung',
                        'Rechtskonforme Gutachten',
                        'Aussagekräftige Kostenschätzungen',
                        'Langjährige Expertise',
                    ];
                @endphp
                @foreach ($features as $feature)
                    <div class="flex items-start gap-4">
                        <div class="bg-yellow-500 p-3 rounded-full shadow-sm hover:brightness-110 transition duration-300">
                            <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                            </svg>
                        </div>
                        <span class="text-gray-800 font-medium text-base">{{ $feature }}</span>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- الصورة -->
        <div class="opacity-0 translate-y-6 scale-95 transition duration-700 ease-in-out animate-on-scroll">
            <img src="{{ asset('8.jpg') }}" alt="Begutachtung" class="rounded-2xl shadow-sm w-full h-auto object-cover max-h-[600px]">
        </div>
    </div>
</section>

<!-- قسم Zustandsbericht -->
<section class="bg-gradient-to-b from-gray-200 to-gray-100 py-28">
    <div class="container mx-auto px-6 lg:px-12 grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">
        <!-- النص -->
        <div class="space-y-6 opacity-0 translate-y-6 scale-95 transition duration-700 ease-in-out animate-on-scroll">
            <h2 class="text-3xl font-bold text-gray-800 leading-snug">Zustandsbericht für Nutzfahrzeuge</h2>
            <p class="text-gray-600 text-base leading-relaxed">
                Gerade bei Transportern, LKW oder anderen Nutzfahrzeugen können Schäden große Auswirkungen haben. Wir berücksichtigen sämtliche Aspekte für eine fundierte Bewertung.
            </p>
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pt-6">
                @php
                    $features = [
                        ['title' => 'Instandsetzungsbedarf & -kosten', 'desc' => 'Präzise Einschätzung möglicher Reparaturen und Ausfallzeiten.'],
                        ['title' => 'Schadenhöhe', 'desc' => 'Objektive Ermittlung des tatsächlichen Schadensumfangs.'],
                        ['title' => 'Sonstige Mängel', 'desc' => 'Identifikation sicherheitsrelevanter Faktoren.'],
                        ['title' => 'Gebrauchsspuren', 'desc' => 'Trennung zwischen normaler Abnutzung und Unfallschäden.'],
                    ];
                @endphp
                @foreach ($features as $item)
                    <div class="bg-white p-6 rounded-lg shadow-md transition-transform transform hover:scale-105 opacity-0 translate-y-6 scale-95 animate-on-scroll">
                        <h4 class="text-lg font-semibold text-gray-800 mb-2">{{ $item['title'] }}</h4>
                        <p class="text-gray-600 text-sm">{{ $item['desc'] }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- الصورة -->
        <div class="opacity-0 translate-y-6 scale-95 transition duration-700 ease-in-out animate-on-scroll">
            <img src="{{ asset('9.jpg') }}" alt="Nutzfahrzeug Check" class="rounded-2xl shadow-sm w-full h-auto object-cover max-h-[600px]">
        </div>
    </div>
</section>

<!-- قسم الجوائز -->
<section class="bg-gradient-to-br from-gray-100 via-gray-200 to-gray-300 text-gray-900 py-20 px-6">
    <div class="max-w-6xl mx-auto text-center">
        <h2 class="text-3xl md:text-4xl font-bold mb-4 tracking-tight text-gray-800 opacity-0 translate-y-6 scale-95 transition duration-700 ease-in-out animate-on-scroll">
            Unsere Auszeichnungen und Mitgliedschaften
        </h2>
        <div class="w-16 h-1 mx-auto bg-yellow-500 rounded-full mb-8 opacity-0 translate-y-6 scale-95 transition duration-700 ease-in-out animate-on-scroll"></div>
        <p class="text-base md:text-lg text-gray-700 max-w-3xl mx-auto mb-10 leading-relaxed opacity-0 translate-y-6 scale-95 transition duration-700 ease-in-out animate-on-scroll">
            Bei AutoHeld GmbH stehen Qualität und Expertise im Mittelpunkt.
            Unsere Mitgliedschaft im Bundesverband Deutscher Sachverständiger und Fachgutachter e.V. (BDSF)
            sowie unsere langjährige Erfahrung spiegeln unsere Kompetenz und Zuverlässigkeit wider.
        </p>
        <div class="flex items-center justify-center opacity-0 translate-y-6 scale-95 transition duration-700 ease-in-out animate-on-scroll">
            <div class="bg-white p-4 rounded-xl shadow-sm w-44 h-32 flex items-center justify-center border border-gray-200">
                <img src="{{ asset('logo.png') }}" alt="Kaufmann Logo" class="h-full object-contain" />
            </div>
        </div>
    </div>
</section>

<!-- سكريبت الأنيميشن -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const animatedSections = document.querySelectorAll('section, div.flex.flex-col.md\\:flex-row');

  animatedSections.forEach(section => {
    const elements = section.querySelectorAll('.animate-on-scroll');

    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if(entry.isIntersecting){
          elements.forEach((el, i) => {
            el.style.transitionDelay = `${i * 200 + 150}ms`;
            el.style.transitionProperty = 'opacity, transform';
            el.style.transitionDuration = '700ms';
            el.style.transitionTimingFunction = 'ease-in-out';

            el.classList.remove('opacity-0', 'translate-y-6', 'scale-95');
            el.classList.add('opacity-100', 'translate-y-0', 'scale-100');
          });
          observer.unobserve(section);
        }
      });
    }, { threshold: 0.3 });

    elements.forEach(el => observer.observe(el));
  });
});
</script>

@endsection
