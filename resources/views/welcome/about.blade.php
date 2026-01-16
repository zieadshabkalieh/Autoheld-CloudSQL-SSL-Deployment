@extends("layout.app")

@section("content")

<!-- قسم Hero -->
<section 
    class="h-screen bg-cover bg-center flex items-center justify-center text-white relative" 
    style="background-image: url('http://127.0.0.1:8000/4.jpg');"
    data-aos="fade-up"
    data-aos-duration="1000"
>
    <div class="absolute inset-0 bg-black/75"></div> <!-- زيادة التعتيم لخلفية أفضل -->
    <div class="relative z-10 max-w-3xl text-center px-4">
        <h1 class="text-5xl md:text-7xl font-semibold mb-6 
        text-transparent bg-clip-text 
        bg-gradient-to-r from-gray-300 via-gray-400 to-gray-500"
        data-aos="fade-right"
        data-aos-duration="1000"
        >
            Wir bewerten Ihr Fahrzeug professionell
        </h1>
        <p class="text-lg md:text-xl leading-relaxed mb-6 
            text-transparent bg-clip-text 
            bg-gradient-to-r from-gray-300 via-gray-400 to-gray-500"
            data-aos="fade-left"
            data-aos-delay="200"
            data-aos-duration="1000"
        >
            Langjährige Erfahrung, präzise Bewertungen und zuverlässige Ergebnisse. Ihr Auto in sicheren Händen!
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

<!-- قسم لماذا نحن -->
<section class="bg-gradient-to-br from-white via-gray-100 to-gray-200 py-24 px-6 md:px-24 font-sans">
  <div class="max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">
      <div class="space-y-10" data-aos="fade-up" data-aos-duration="1000">
          <div data-aos="fade-right" data-aos-duration="1000">
              <p class="text-sm text-yellow-600 font-semibold uppercase mb-2">Warum wir?</p>
              <h2 class="text-4xl font-extrabold text-gray-900 leading-tight">
                  Warum Sie mit <span class="text-yellow-500">uns</span> arbeiten sollten
              </h2>
              <p class="text-gray-600 mt-3 text-base leading-relaxed">
                  Unsere Kompetenz basiert auf Vertrauen, Erfahrung und individueller Betreuung. Ihre Zufriedenheit ist unser Anspruch.
              </p>
          </div>

          <div class="space-y-6" data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000">
              <div class="flex gap-6 items-start" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                  <div class="bg-yellow-500 text-white rounded-full w-12 h-12 flex items-center justify-center shadow-md">
                      <i class="fas fa-check"></i>
                  </div>
                  <div>
                      <h4 class="text-lg font-semibold text-gray-800">Vertrauen & Qualität</h4>
                      <p class="text-gray-600 text-sm mt-1">
                          Transparente Prozesse und verlässliche Bewertungen – für Ihre maximale Sicherheit.
                      </p>
                  </div>
              </div>

              <div class="flex gap-6 items-start" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
                  <div class="bg-yellow-500 text-white rounded-full w-12 h-12 flex items-center justify-center shadow-md">
                      <i class="fas fa-comments"></i>
                  </div>
                  <div>
                      <h4 class="text-lg font-semibold text-gray-800">Persönliche Beratung</h4>
                      <p class="text-gray-600 text-sm mt-1">
                          Wir nehmen uns Zeit für maßgeschneiderte Lösungen mit Menschlichkeit und Fachwissen.
                      </p>
                  </div>
              </div>

              <div class="flex gap-6 items-start" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                  <div class="bg-yellow-500 text-white rounded-full w-12 h-12 flex items-center justify-center shadow-md">
                      <i class="fas fa-award"></i>
                  </div>
                  <div>
                      <h4 class="text-lg font-semibold text-gray-800">Langjährige Erfahrung</h4>
                      <p class="text-gray-600 text-sm mt-1">
                          Mehr als 20 Jahre Fachwissen im Sachverständigenwesen für die Automobilbranche.
                      </p>
                  </div>
              </div>
          </div>
      </div>

      <!-- الصورة في قسم لماذا نحن -->
      <div class="h-full flex items-stretch" data-aos="zoom-in" data-aos-delay="600" data-aos-duration="1000">
          <div class="w-full rounded-2xl shadow-lg overflow-hidden">
              <img src="{{ asset('5.jpg') }}" alt="Teamwork" class="w-full h-full object-cover">
          </div>
      </div>
  </div>
</section>

<!-- قسم الميزات -->
<section id="contact-section" class="py-16 bg-gray-100" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
    <div class="w-full max-w-7xl mx-auto px-4">
      <h2 class="text-2xl md:text-3xl font-bold text-gray-800 mb-12 text-center" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
        Unsere Stärken, auf die wir stolz sind 💡
    </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($features as $feature)
                <x-card-feature 
                    :icon="$feature['icon']"
                    :title="$feature['title']"
                    :description="$feature['description']"
                    class="p-6 rounded-xl bg-white shadow-md border border-gray-200"
                    data-aos="fade-up"
                    data-aos-delay="{{ 400 + $loop->index * 150 }}"
                    data-aos-duration="1000"
                />
            @endforeach
        </div>
    </div>
</section>

<section class="relative bg-gradient-to-br from-white via-gray-100 to-gray-200 py-20 px-6 md:px-16 font-sans" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
    <div class="max-w-7xl mx-auto">
        <!-- العنوان -->
        <div class="text-center mb-12" data-aos="fade-up" data-aos-duration="1000">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 leading-tight mb-4">
                Vertrauen & Qualität, die für sich spricht
            </h2>
            <p class="text-lg md:text-xl text-gray-700 max-w-3xl mx-auto">
                Unsere Auszeichnungen & Mitgliedschaften garantieren exzellenten Service, Sicherheit & Fachkompetenz.
            </p>
        </div>

        <!-- صورة الشهادة -->
        <div class="flex justify-center mb-16" data-aos="zoom-in" data-aos-duration="1000">
            <img src="{{ asset('6.jpg') }}" alt="Zertifikat"
                 class="h-32 w-auto rounded-2xl shadow-2xl border border-gray-300 object-contain transition-transform duration-300 hover:scale-105">
        </div>

        <!-- البطاقات -->
        <div class="grid md:grid-cols-2 gap-10">
            <!-- بطاقة الاتصال -->
            <div class="bg-white rounded-3xl shadow-xl border-l-8 border-yellow-400 p-8 hover:shadow-2xl transition" data-aos="fade-right" data-aos-duration="1000">
                <div class="flex items-center gap-5 mb-5">
                    <div class="bg-yellow-500 text-white p-5 rounded-full">
                        <i class="fas fa-phone text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Schneller Kontakt</h3>
                </div>
                <p class="text-gray-700 mb-5 leading-relaxed">
                    Unser Support-Team ist für Sie da – freundlich, direkt & hilfsbereit.
                </p>
                <a href="/contact" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white font-semibold px-6 py-3 rounded-xl shadow-md transition">
                    Jetzt Kontakt aufnehmen
                </a>
            </div>

            <!-- بطاقة الاستشارة -->
            <div class="bg-white rounded-3xl shadow-xl border-l-8 border-gray-700 p-8 hover:shadow-2xl transition" data-aos="fade-left" data-aos-duration="1000">
                <div class="flex items-center gap-5 mb-5">
                    <div class="bg-gray-800 text-white p-5 rounded-full">
                        <i class="fas fa-user-check text-3xl"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-800">Kostenlose Erstberatung</h3>
                </div>
                <p class="text-gray-700 mb-5 leading-relaxed">
                    Lassen Sie sich individuell & unverbindlich beraten – unsere Experten freuen sich auf Sie!
                </p>
                <a href="/contact" class="inline-block bg-gray-800 hover:bg-gray-900 text-white font-semibold px-6 py-3 rounded-xl shadow-md transition">
                    Jetzt beraten lassen
                </a>
            </div>
        </div>
    </div>
</section>

@endsection

@section('scripts')
<!-- تضمين مكتبة AOS -->
<link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

<script>
  AOS.init({
    once: true,
    duration: 1000,
  });

      document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener("click", function(e) {
      e.preventDefault();
      const targetID = this.getAttribute("href").substring(1);
      const targetElement = document.getElementById(targetID);
      if (targetElement) {
        targetElement.scrollIntoView({ behavior: "smooth" });
      }
    });
  });
</script>
@endsection
