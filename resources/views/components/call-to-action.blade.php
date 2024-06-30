<section class="bg-black py-16">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold text-white mb-4">Yuk Booking Ticketnya! Siap hadir dalam konser ini?</h2>
        <p class="text-xl text-white mb-8">Booking ticket kamu, kami tunggu kehadirannya!</p>
        <button class="bg-white text-black font-bold px-4 py-2 rounded-md hover:bg-orange-600 hover:text-white transition duration-200" onclick="openModal()">PESAN TICKET!</button>

<div id="pricingModal" class="fixed inset-0 z-50 hidden">
{{-- <div class="fixed inset-0 bg-black/50 backdrop-blur-sm transition duration-300 opacity-0" id="modalBackdrop"></div> --}}
  <div class="flex items-center justify-center min-h-screen">
    <div class="bg-white rounded-lg shadow-lg p-8">

      <button class="absolute top-2 right-2 text-red-500 hover:text-gray-800" onclick="closeModal()">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <div class="bg-gray-100 p-6 rounded-md">
          <h3 class="text-lg font-semibold mb-2">Basic</h3>
          <p class="text-gray-600 mb-4">Ticket dengan tarif normal!</p>
          <p class="text-2xl font-bold">$19.99</p>
          <button class="bg-black text-white px-4 py-2 rounded-md mt-4  hover:bg-orange-600 hover:text-white transition duration-200">Buy Now</button>
        </div>

        <div class="bg-yellow-400 p-6 rounded-md">
          <h3 class="text-lg font-semibold mb-2">Premium</h3>
          <p class="text-gray-600 mb-4">Kesempatan untuk mendapatkan Merchandise serta Front-Line Seat!</p>
          <p class="text-2xl font-bold">$29.99</p>
          <button class="bg-black text-white px-4 py-2 rounded-md mt-4  hover:bg-purple-600 hover:text-white transition duration-200">Buy Now</button>
        </div>

        <div class="bg-gray-100 p-6 rounded-md">
          <h3 class="text-lg font-semibold mb-2">Pro</h3>
          <p class="text-gray-600 mb-4">Front-Line Seat menjadi prioritas kamu!</p>
          <p class="text-2xl font-bold">$25.99</p>
          <button class="bg-black text-white px-4 py-2 rounded-md mt-4  hover:bg-orange-600 hover:text-white transition duration-200">Buy Now</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
 function openModal() {
    document.getElementById('pricingModal').classList.remove('hidden');
    document.getElementById('modalBackdrop').classList.remove('opacity-0');
    // document.querySelector('.blur-target').classList.add('blur-sm'); // Add blur
}

function closeModal() {
    document.getElementById('pricingModal').classList.add('hidden');
    document.getElementById('modalBackdrop').classList.add('opacity-0');
    // document.querySelector('.blur-target').classList.remove('blur-sm'); // Remove blur
}

</script>

    </div>
</section>
  