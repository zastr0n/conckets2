<section class="bg-black py-16">
  <div class="container mx-auto px-4 text-center">
    <h2 class="text-4xl font-bold text-white mb-4">Yuk Book the Ticket! Ready to elevate your experience?</h2>
    <p class="text-xl text-white mb-8">Booking ticket kamu, kami tunggu kehadirannya!.</p>
    <button class="bg-white text-black font-bold px-4 py-2 rounded-md hover:bg-orange-600 hover:text-white transition duration-200" onclick="openModal()">Pesan Ticket</button>

    <div id="pricingModal" class="fixed inset-0 z-50 hidden">
      {{-- <div class="fixed inset-0 bg-black/50 backdrop-blur-sm transition duration-300 opacity-0" id="modalBackdrop"></div> --}}
      <div class="flex items-center justify-center min-h-screen">
        <div class="bg-white rounded-lg shadow-lg p-8 relative">

          <button class="absolute top-2 right-2 text-red-500 hover:text-gray-800" onclick="closeModal()">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>

          <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
          @foreach ($data as $item)
            <div class="bg-gray-100 p-6 rounded-md">
              <h3 class="text-lg font-semibold mb-2">{{$item->nama}}</h3>
              <p class="text-gray-600 mb-4">Description for basic plan.</p>
              <p class="text-2xl font-bold mb-4">{{number_format($item->harga)}}</p>
              <a href="pembayaran?id={{$item->id_tickets}}" class="bg-black text-white px-4 py-2 rounded-md mt-4  hover:bg-orange-600 hover:text-white transition duration-200">Buy Now</a>
            </div>
              
          @endforeach
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