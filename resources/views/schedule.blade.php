<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <x-icon-app/>
    <title>Schedule</title>
    @vite('resources/css/app.css') 
</head>
<body class="bg-black"> 
    
    <x-navbar />
    
    <section class="bg-[url('/images/aboutpic.jpg')] bg-cover bg-center py-64 relative shadow-xl">
        <div class="container mx-auto px-4 text-center">
            <div class="absolute inset-0 bg-black opacity-25"></div> 
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-black mix-blend-luminosity text-white mb-4 relative z-10">
                SCHEDULE!
            </h1>
            <p class="xt-2xl md:text-3xl lg:text-4xl mb-8 text-white relative z-10 font-bold font-mono transition-all duration-300 before:absolute before:inset-0 before:bg-[url('/images/winter.jpg')] before:mix-blend-multiply before:opacity-0 before:transition-opacity before:duration-300 hover:text-black hover:before:opacity-100">
                Jadwal untuk malam yang ditunggu-tunggu!
            </p>    
        </div>
    </section>
 
    <div class="container mx-auto p-4 bg-black text-white"> 
        
    <div class="relative flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none grid gap-2 item sm:grid-cols-2">
      <div class="p-6 px-2 sm:pr-6 sm:pl-4">
        <p class="block antialiased font-sans text-sm font-light leading-normal text-inherit mb-4 ">Lineup berdasarkan Schedule!</p><a href="https://maps.app.goo.gl/m2tjnStsyPyrHiyc7" class="block antialiased tracking-normal font-sans text-xl font-bold leading-snug text-white mb-2 normal-case transition-colors hover:text-yellow-500">Konser diadakan di Jl. Ahmad Yani, Muka Kuning, Kec. Sei Beduk, Kota Batam, Kepulauan Riau 29433</a>
        <p class="block antialiased font-sans text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500"></p>
        <div class="flex items-center gap-4"><img src="/images/tempat.png" class="inline-block relative object-cover object-center !rounded-full w-16 h-16" />
          <div>
            <h2 class="block antialiased font-sans text-base font-light leading-relaxed text-white mb-0.5 ">Senin, 27 Juli 20XX</h2>
          </div>
        </div>
        <br>
        <hr class="border-t-2 border-white my-4"></hr>
        </br>
        <div class="relative flex-col bg-clip-border rounded-xl bg-gray-700 text-white shadow-lg grid gap-2 item sm:grid-cols-2">
            <h1 class="block antialiased font-sans text-base font-bold leading-relaxed text-white">First on 18.30-19.00</h1>
            <h2 class="block antialiased font-serif text-base font-light leading-relaxed text-white mb-0.5 ">LANY</h2>
        </div>
        <br>
        <hr class="border-t-2 border-white my-4"></hr>
        </br>
        <div class="relative flex-col bg-clip-border rounded-xl bg-gray-700 text-white shadow-lg grid gap-2 item sm:grid-cols-2">
            <h1 class="block antialiased font-sans text-base font-bold leading-relaxed text-white">Second on 19.00-19.30</h1>
            <h2 class="block antialiased font-serif text-base font-light leading-relaxed text-white mb-0.5 ">Lauv</h2>
        </div>
        <br>
        <hr class="border-t-2 border-white my-4"></hr>
        </br>
        <div class="relative flex-col bg-clip-border rounded-xl bg-gray-700 text-white shadow-lg grid gap-2 item sm:grid-cols-2">
            <h1 class="block antialiased font-sans text-base font-bold leading-relaxed text-white">First on 18.30-19.00</h1>
            <h2 class="block antialiased font-serif text-base font-light leading-relaxed text-white mb-0.5 ">LANY</h2>
        </div>
        <br>
        <hr class="border-t-2 border-white my-4"></hr>
        </br>
        <div class="relative flex-col bg-clip-border rounded-xl bg-gray-700 text-white shadow-lg grid gap-2 item sm:grid-cols-2">
            <h1 class="block antialiased font-sans text-base font-bold leading-relaxed text-white">First on 18.30-19.00</h1>
            <h2 class="block antialiased font-serif text-base font-light leading-relaxed text-white mb-0.5 ">LANY</h2>
        </div>
        <br>
        <hr class="border-t-2 border-white my-4"></hr>
        </br>
        <div class="relative flex-col bg-clip-border rounded-xl bg-gray-700 text-white shadow-lg grid gap-2 item sm:grid-cols-2">
            <h1 class="block antialiased font-sans text-base font-bold leading-relaxed text-white">First on 18.30-19.00</h1>
            <h2 class="block antialiased font-serif text-base font-light leading-relaxed text-white mb-0.5 ">LANY</h2>
        </div>
        <br>
        <hr class="border-t-2 border-white my-4"></hr>
        </br>
        <div class="relative flex-col bg-clip-border rounded-xl bg-gray-700 text-white shadow-lg grid gap-2 item sm:grid-cols-2">
            <h1 class="block antialiased font-sans text-base font-bold leading-relaxed text-white">First on 18.30-19.00</h1>
            <h2 class="block antialiased font-serif text-base font-light leading-relaxed text-white mb-0.5 ">LANY</h2>
        </div>
        <br>
        <hr class="border-t-2 border-white my-4"></hr>
        </br>
        <div class="relative flex-col bg-clip-border rounded-xl bg-gray-700 text-white shadow-lg grid gap-2 item sm:grid-cols-2">
            <h1 class="block antialiased font-sans text-base font-bold leading-relaxed text-white">First on 18.30-19.00</h1>
            <h2 class="block antialiased font-serif text-base font-light leading-relaxed text-white mb-0.5 ">LANY</h2>
        </div>
        
      </div>
      <div class="relative bg-clip-border rounded-xl overflow-hidden bg-white text-gray-700 shadow-lg m-0"><img src="/images/harry.png" alt="Sustainable Practices for a Greener Future" class="object-cover w-full h-full" /></div>
      
     
    </div>

  </div>
      



    <x-footer />

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>