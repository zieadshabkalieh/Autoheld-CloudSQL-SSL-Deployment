<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=no" />

    <title>Meine Laravel App</title>
    @vite('resources/css/app.css')
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    />
   
    <style>
  #mobileMenu a.hovered,
#mobileMenu button.hovered {
  background-color: #ca8a04;
  color: white !important;
  border-radius: 0.375rem;
}


    #hamburger.hovered {
      background-color: #ca8a04;
      color: black;
      transition: background-color 0.3s ease;
    }
    @media (max-width: 767px) {
      #hamburger {
        display: flex !important;
        z-index: 9999 !important;
      }
    }
    </style>
  </head>
  <body class="min-h-screen flex flex-col">
    <!-- Header Section -->
    <header
      class="bg-cover bg-center bg-opacity-80 shadow-lg fixed top-0 left-0 w-full z-50 backdrop-blur-md"
    >
      <div
        class="max-w-7xl mx-auto px-6 py-4 flex items-center justify-between relative"
      >
        <!-- Logo -->
        <div class="flex items-center space-x-4">
          <img src="{{ asset('logo.png') }}" alt="Logo" class="h-16 w-auto" />
        </div>

        <!-- Desktop Navigation -->
        <nav class="space-x-8 hidden md:flex items-center">
          <a
            href="/"
            class="text-lg font-medium text-yellow-400 hover:text-yellow-500 transition"
            >Startseite</a
          >
          <a
            href="/about"
            class="text-lg font-medium text-yellow-400 hover:text-yellow-500 transition"
            >Über uns</a
          >

          <!-- Dropdown Desktop -->
          <div class="relative group inline-block">
            <button id="desktopServicesBtn" class="text-lg font-medium text-yellow-400 hover:text-yellow-500 transition flex items-center space-x-1">
              <span>Dienstleistungen</span>
              <svg id="desktopServicesArrow" class="w-4 h-4 transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div id="desktopServicesDropdown" class="hidden absolute left-0 mt-2 w-48 bg-white shadow-lg rounded-md">
              <a
                href="/service"
                class="block px-4 py-2 text-sm font-semibold hover:bg-yellow-400 hover:text-white rounded-md"
              >
                Schadensgutachten
              </a>
              <a
                href="#"
                class="block px-4 py-2 text-sm font-semibold hover:bg-yellow-400 hover:text-white rounded-md"
                >Beweissicherung</a
              >
              <a
                href="#"
                class="block px-4 py-2 text-sm font-semibold hover:bg-yellow-400 hover:text-white rounded-md"
                >Fahrzeugbewertung</a
              >
              <a
                href="#"
                class="block px-4 py-2 text-sm font-semibold hover:bg-yellow-400 hover:text-white rounded-md"
                >Bagatellschäden</a
              >
              <a
                href="#"
                class="block px-4 py-2 text-sm font-semibold hover:bg-yellow-400 hover:text-white rounded-md"
                >Oldtimer-Gutachten</a
              >
              <a
                href="#"
                class="block px-4 py-2 text-sm font-semibold hover:bg-yellow-400 hover:text-white rounded-md"
                >Wertgutachten</a
              >
            </div>
          </div>

          <a
            href="/contact"
            class="text-lg font-medium text-yellow-400 hover:text-yellow-500 transition"
            >Kontakt</a
          >
        </nav>

        <!-- Hamburger Button (Mobile) -->
        <button
          id="hamburger"
          class="md:hidden fixed top-4 right-4 z-50 text-white bg-black rounded-full shadow-md hover:bg-yellow-500 hover:text-black transition w-10 h-10 flex items-center justify-center"
          aria-label="Menü umschalten"
        >
          <i id="hamburgerIcon" class="fas fa-bars text-xl"></i>
        </button>
      </div>
    </header>

    <!-- Mobile Menu -->
    <div
      id="mobileMenu"
      class="fixed top-0 left-0 w-full bg-[#333] text-white md:hidden space-y-6 px-8 py-6 z-40 pt-24 opacity-0 pointer-events-none transition-opacity duration-300 ease-in-out"
    >
      <a href="/" class="block text-lg font-medium hover:text-yellow-300 py-2"
        >Startseite</a
      >
      <a href="/about" class="block text-lg font-medium hover:text-yellow-300 py-2"
        >Über uns</a
      >

      <!-- Mobile Dropdown -->
      <div class="relative">
        <button
          id="mobileServicesBtn"
          type="button"
          class="flex items-center justify-between text-lg font-medium hover:text-yellow-300 py-2 w-full text-left"
        >
          <span>Dienstleistungen</span>
          <svg
            id="mobileServicesArrow"
            class="w-4 h-4 transition-transform duration-300"
            fill="none"
            stroke="currentColor"
            viewBox="0 0 24 24"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
          </svg>
        </button>

        <div id="mobileServicesDropdown" class="hidden pl-4 mt-2 space-y-2">
          <a href="/service" class="block px-4 py-2 hover:bg-yellow-600 rounded">Schadensgutachten</a>
          <a href="#" class="block px-4 py-2 hover:bg-yellow-600 rounded" onclick="event.preventDefault(); closeMobileMenu()">Fahrzeugbewertung</a>
          <a href="#" class="block px-4 py-2 hover:bg-yellow-600 rounded" onclick="event.preventDefault(); closeMobileMenu()">Beweissicherung</a>
          <a href="#" class="block px-4 py-2 hover:bg-yellow-600 rounded" onclick="event.preventDefault(); closeMobileMenu()">Bagatellschäden</a>
          <a href="#" class="block px-4 py-2 hover:bg-yellow-600 rounded" onclick="event.preventDefault(); closeMobileMenu()">Oldtimer-Gutachten</a>
          <a href="#" class="block px-4 py-2 hover:bg-yellow-600 rounded" onclick="event.preventDefault(); closeMobileMenu()">Wertgutachten</a>
        </div>
      </div>

      <a href="/contact" class="block text-lg font-medium hover:text-yellow-300 py-2"
        >Kontakt</a
      >
    </div>

    <!-- Content Section -->
    <div class="flex-grow">@yield("content")</div>

    <!-- Footer Section -->
    <footer class="bg-[#fcc72c] text-gray-900 py-16 px-6 md:px-24 font-sans">
      <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-12">
        <!-- Logo & About -->
        <div>
          <div class="flex items-center space-x-3 mb-4">
            <div
              class="bg-black text-white font-bold text-lg w-10 h-10 flex items-center justify-center rounded-full"
            >
              A
            </div>
            <span class="text-2xl font-extrabold tracking-wide">AUTOHELD</span>
          </div>
          <p class="text-sm leading-relaxed text-gray-800">
            AUTOHELD Sachverständigen GmbH ist Ihr Partner für unabhängige
            Gutachten & Bewertungen. Schnell, präzise & kompetent in Essen und
            Lüdenscheid.
          </p>
        </div>

        <!-- Leistungen -->
        <div>
          <h4 class="text-lg font-semibold mb-4">Leistungen</h4>
          <ul class="space-y-2 text-sm">
            <li class="hover:underline">Beweissicherung</li>
            <li class="hover:underline">Fahrzeugbewertung</li>
            <li class="hover:underline">Bagatellschäden</li>
            <li class="hover:underline">Oldtimer-Gutachten</li>
            <li class="hover:underline">Schadengutachten</li>
            <li class="hover:underline">Wertgutachten</li>
          </ul>
        </div>

        <!-- Kontakt -->
        <div>
          <h4 class="text-lg font-semibold mb-4">Kontakt</h4>
          <ul class="space-y-3 text-sm">
            <li class="flex items-start gap-2">
              <span>📧</span> <span>info@autoheld.gmbh</span>
            </li>
            <li class="flex items-start gap-2">
              <span>📞</span> <span>015752837803</span>
            </li>
            <li class="flex items-start gap-2">
              <span>📍</span> <span>Teilungsweg 41, 45329 Essen</span>
            </li>
          </ul>
        </div>

        <!-- Social & Links -->
        <div class="flex flex-col justify-between">
          <div>
            <h4 class="text-lg font-semibold mb-4">Folgen Sie uns</h4>
            <div class="flex space-x-4">
              <span class="text-gray-900">
                <i class="fab fa-facebook-f text-lg"></i>
              </span>
              <span class="text-gray-900">
                <i class="fab fa-instagram text-lg"></i>
              </span>
            </div>
          </div>
          <div class="mt-6 flex space-x-6 text-sm">
            <span class="hover:underline cursor-pointer">Impressum</span>
            <span class="hover:underline cursor-pointer">Datenschutz</span>
          </div>
        </div>

        <!-- Bottom -->
        <div
          class="mt-12 border-t border-yellow-300 pt-6 text-center text-sm text-gray-800"
        >
          © 2025 Autoheld – Alle Rechte vorbehalten
        </div>
      </div>
    </footer>

    <!-- Scroll Top Button -->
    <button
      id="scrollTopBtn"
      class="fixed bottom-20 right-4 z-50 bg-black text-white w-12 h-12 flex items-center justify-center rounded-full text-xl shadow-lg opacity-0 invisible hover:scale-110 hover:bg-gradient-to-r hover:from-gray-700 hover:to-gray-900 transition duration-300"
      aria-label="Zum Seitenanfang scrollen"
    >
      <i class="fas fa-arrow-up"></i>
    </button>

    @yield('scripts')
    <!-- Scripts -->
    <script
      src="https://cdn.jsdelivr.net/npm/alpinejs@3.11.0/dist/cdn.min.js"
      defer
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js" defer></script>

    <!-- JavaScript for Mobile Menu, Dropdown, Scroll Button -->
   <script>
  document.addEventListener("DOMContentLoaded", function () {
    const hamburger = document.getElementById("hamburger");
    const hamburgerIcon = document.getElementById("hamburgerIcon");
    const mobileMenu = document.getElementById("mobileMenu");

    const desktopServicesBtn = document.getElementById("desktopServicesBtn");
    const desktopServicesDropdown = document.getElementById("desktopServicesDropdown");
    const desktopServicesArrow = document.getElementById("desktopServicesArrow");

    const mobileServicesBtn = document.getElementById("mobileServicesBtn");
    const mobileServicesDropdown = document.getElementById("mobileServicesDropdown");
    const mobileServicesArrow = document.getElementById("mobileServicesArrow");

    const scrollTopBtn = document.getElementById("scrollTopBtn");
    const mapContainer = document.getElementById("map")?.parentElement;

    function closeMobileMenu() {
      if (!mobileMenu || !hamburgerIcon) return;

      mobileMenu.classList.add("opacity-0", "pointer-events-none");
      mobileMenu.classList.remove("opacity-100", "pointer-events-auto");

      mobileServicesDropdown?.classList.add("hidden");

      if (mobileServicesArrow) {
        mobileServicesArrow.style.transform = "rotate(0deg)";
      }

      hamburgerIcon.classList.remove("fa-times");
      hamburgerIcon.classList.add("fa-bars");

      mapContainer?.classList.remove("hidden");

      if (scrollTopBtn) {
        scrollTopBtn.style.opacity = "1";
        scrollTopBtn.style.visibility = "visible";
      }
    }

    if (hamburger) {
      hamburger.addEventListener("click", function () {
        const isOpen = !mobileMenu.classList.contains("opacity-0");
        if (isOpen) {
          closeMobileMenu();
        } else {
          mobileMenu.classList.remove("opacity-0", "pointer-events-none");
          mobileMenu.classList.add("opacity-100", "pointer-events-auto");
          hamburgerIcon.classList.remove("fa-bars");
          hamburgerIcon.classList.add("fa-times");
          mapContainer?.classList.add("hidden");

          if (scrollTopBtn) {
            scrollTopBtn.style.opacity = "0";
            scrollTopBtn.style.visibility = "hidden";
          }
        }
      });
    }

    if (desktopServicesBtn) {
      desktopServicesBtn.addEventListener("click", function () {
        if (!desktopServicesDropdown || !desktopServicesArrow) return;

        const isVisible = !desktopServicesDropdown.classList.contains("hidden");
        if (isVisible) {
          desktopServicesDropdown.classList.add("hidden");
          desktopServicesArrow.style.transform = "rotate(0deg)";
        } else {
          desktopServicesDropdown.classList.remove("hidden");
          desktopServicesArrow.style.transform = "rotate(180deg)";
        }
      });
    }

    if (mobileServicesBtn) {
      mobileServicesBtn.addEventListener("click", function () {
        if (!mobileServicesDropdown || !mobileServicesArrow) return;

        const isVisible = !mobileServicesDropdown.classList.contains("hidden");
        if (isVisible) {
          mobileServicesDropdown.classList.add("hidden");
          mobileServicesArrow.style.transform = "rotate(0deg)";
        } else {
          mobileServicesDropdown.classList.remove("hidden");
          mobileServicesArrow.style.transform = "rotate(180deg)";
        }
      });
    }

    if (scrollTopBtn) {
      window.addEventListener("scroll", () => {
        if (window.scrollY > 200) {
          scrollTopBtn.style.opacity = "1";
          scrollTopBtn.style.visibility = "visible";
        } else {
          scrollTopBtn.style.opacity = "0";
          scrollTopBtn.style.visibility = "hidden";
        }
      });

      scrollTopBtn.addEventListener("click", () => {
        window.scrollTo({ top: 0, behavior: "smooth" });
      });
    }

    window.closeMobileMenu = closeMobileMenu;

    // ✅ محاكاة تأثير hover على الموبايل
    const hoverableItems = document.querySelectorAll("#mobileMenu a, #mobileMenu button");

    hoverableItems.forEach((item) => {
      item.addEventListener("touchstart", function () {
        item.classList.add("hovered");
        setTimeout(() => {
          item.classList.remove("hovered");
        }, 300);
      });
    });
  });
</script>


  </body>
</html>
