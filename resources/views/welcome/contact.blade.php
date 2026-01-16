@extends('layout.app')

@section('content')
<section class="pt-32 pb-24 bg-gradient-to-b from-white to-yellow-50 font-sans">
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="text-center mb-16" data-aos="fade-up" data-aos-duration="700">
            <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 leading-tight md:leading-snug text-transparent bg-clip-text bg-gradient-to-r from-pink-500 via-yellow-500 to-green-500">
                Kontaktiere uns
            </h2>
            <p class="mt-4 text-gray-600 text-lg max-w-2xl mx-auto">Wir sind für Sie da – schnell, kompetent & zuverlässig.</p>
        </div>

        <div class="bg-white shadow-xl rounded-2xl p-10 border-t-4 border-[#fcc72c] mb-10" data-aos="fade-up" data-aos-delay="150" data-aos-duration="700">
            <h3 class="text-2xl font-semibold text-gray-700 mb-4">Unsere Kontaktdaten</h3>
            <ul class="space-y-3 text-lg text-gray-600 leading-relaxed">
                <li><strong class="text-[#fcc72c]">Adresse:</strong> Autoheld GmbH, Teilungsweg 41, 45329 Essen</li>
                <li><strong class="text-[#fcc72c]">Telefon:</strong> 015752837803</li>
                <li><strong class="text-[#fcc72c]">E-Mail:</strong> info@autoheld.gmbh</li>
            </ul>
        </div>

        <div class="relative rounded-2xl overflow-hidden shadow-lg border border-gray-200 h-[500px] mt-10" data-aos="fade-up" data-aos-delay="300" data-aos-duration="700">
            <!-- Loading Overlay -->
            <div id="loading-overlay" class="absolute inset-0 bg-white bg-opacity-80 flex flex-col items-center justify-center z-50">
                <svg class="animate-spin h-10 w-10 text-yellow-500 mb-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                  <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v4l3-3-3-3v4a8 8 0 00-8 8z"></path>
                </svg>
                <span class="text-gray-700 text-lg font-semibold">Loading map...</span>
            </div>

            <div id="map" class="w-full h-full"></div>
        </div>
    </div>
</section>

<!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />

<!-- AOS CSS -->
<link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />

<!-- JS libraries with defer -->
<script defer src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script defer src="https://unpkg.com/leaflet.locatecontrol@0.72.0/dist/L.Control.Locate.min.js"></script>
<script defer src="https://unpkg.com/leaflet-routing-machine/dist/leaflet-routing-machine.js"></script>
<script defer src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

<script defer>
  document.addEventListener('DOMContentLoaded', () => {
    AOS.init({
      once: true,
      easing: 'ease-out-cubic',
      duration: 700,
    });

    const map = L.map('map').setView([51.494836, 6.997414], 16);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors'
    }).addTo(map);

    const autoheldLocation = [51.494836, 6.997414];
    L.marker(autoheldLocation).addTo(map)
        .bindPopup("<b>Autoheld GmbH</b><br>Teilungsweg 41, 45329 Essen").openPopup();

    let routingControl = null;

    L.control.locate({
        position: 'topright',
        strings: { title: "Meinen Standort finden" },
        locateOptions: { enableHighAccuracy: true }
    }).addTo(map);

    map.zoomControl.setPosition('topright');

    // Keep loading overlay for at least 1 second to be visible
    const loadingOverlay = document.getElementById('loading-overlay');

    // When the map is ready hide the overlay after 1 second delay minimum
    map.whenReady(() => {
      setTimeout(() => {
        loadingOverlay.style.display = 'none';
      }, 1000);
    });

    map.on('locationfound', (event) => {
      const userLocation = event.latlng;

      if (routingControl) map.removeControl(routingControl);

      L.marker(userLocation).addTo(map).bindPopup("<b>Ihr Standort</b>").openPopup();

      routingControl = L.Routing.control({
          waypoints: [L.latLng(userLocation), L.latLng(autoheldLocation)],
          routeWhileDragging: true,
          createMarker: () => null
      }).addTo(map);
    });
  });
</script>
@endsection
