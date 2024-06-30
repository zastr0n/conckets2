<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Soundwave!</title>
    @vite('resources/css/app.css') 
</head>
<body class="bg-black"> 
    
    <x-navbar />
    <div class="container mx-auto">
        <section class="bg-[url('/images/fiersabesari.jpg')] bg-cover bg-center py-64 relative shadow-xl">
            <div class="container mx-auto px-4 text-center">
                <div class="absolute inset-0 bg-black opacity-25"></div> 
                <h1 class="text-5xl md:text-6xl lg:text-7xl font-black mix-blend-luminosity text-white mb-4 relative z-10">
                    LINE UP FOR THE NIGHT
                </h1>
                <p class="xt-2xl md:text-3xl lg:text-4xl mb-8 text-white relative z-10 font-bold font-mono transition-all duration-300
                  before:absolute before:inset-0 before:bg-[url('/images/sky.jpg')] before:mix-blend-multiply before:opacity-0 before:transition-opacity before:duration-300 
                hover:text-black hover:before:opacity-100">
                     Kehadiran kamu dan kehadiran mereka!
                     Satu malam, satu panggung, jutaan kenangan.Segera amankan tiketmu!
                </p>    
                {{-- BAND/MUSISI DALAM LINEUP --}}
                <h6 class="text-1xl md:text-2xl lg:text-3xl font-black mix-blend-luminosity text-white mb-4 relative z-10">
                    LANY - LAUV - FIERSA BESARI - TULUS - HINDIA
                </h6>
            </div>
        </section>
    </div>

    {{-- LINE UP --}}

<section class="grid min-h-screen p-8 place-items-center">

    {{-- 1 --}}
  <div class="container grid grid-cols-1 gap-8 my-auto lg:grid-cols-2">
    <div class="relative flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none grid gap-2 item sm:grid-cols-2">
      <div class="relative bg-clip-border rounded-xl overflow-hidden bg-white text-gray-700 shadow-lg m-0"><img src="/images/lanywp2.jpg" alt="lany" class="object-cover w-full h-full" /></div>
      <div class="p-6 px-2 sm:pr-6 sm:pl-4">
        <p class="block antialiased font-sans text-sm font-light leading-normal text-inherit mb-4 ">LANY is an acronym for "Los Angeles New York".</p><a href="#" class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 mb-2 normal-case transition-colors hover:text-gray-700">This is LANY!</a>
        <p class="block antialiased font-sans text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500">"We knew we wanted a four-letter word because of design and aesthetic purposes, but as you can imagine, all the four-letter words in the entire world are taken. I eventually thought of the span across the country from L.A. to New York, and at first I was thinking it would be L-A-N-Y, but people kept getting confused on how to pronounce it when I told them, saying things like 'L-A-and-Y?' So then we’re like forget it—let's call ourselves LANY, pronounced Lay-Nee."</p>
        <div class="flex items-center gap-4"><img src="/images/lany1.png" class="inline-block relative object-cover object-center !rounded-full w-12 h-12 " />
          <div>
            <p class="block antialiased font-sans text-base font-light leading-relaxed text-blue-gray-900 mb-0.5 ">LANY</p>
            <p class="block antialiased font-sans text-sm leading-normal text-gray-700 font-normal">Paul Klein & Jake Goss</p>
          </div>
        </div>
      </div>
    </div>

    {{-- 2 --}}
    <div class="relative flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none grid gap-2 item sm:grid-cols-2">
      <div class="relative bg-clip-border rounded-xl overflow-hidden bg-white text-gray-700 shadow-lg m-0"><img src="/images/lauvwp.jpg" alt="Expanding Our Service Network" class="object-cover w-full h-full" /></div>
      <div class="p-6 px-2 sm:pr-6 sm:pl-4">
        <p class="block antialiased font-sans text-sm font-light leading-normal text-inherit mb-4 ">Like Me Better</p><a href="#" class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 mb-2 normal-case transition-colors hover:text-gray-700">Here is Lauv!</a>
        <p class="block antialiased font-sans text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500">With an affection for electronic and R&B sounds, infused with his soulful bedroom vocals and airy beats, Ari Staprans Leff, known professionally as Lauv, has burst onto the music scene with his intimate take on romantic pop.</p>
        <div class="flex items-center gap-4"><img src="/images/lauv1.png"" class="inline-block relative object-cover object-center !rounded-full w-12 h-12 " />
          <div>
            <p class="block antialiased font-sans text-base font-light leading-relaxed text-blue-gray-900 mb-0.5 ">Lauv</p>
            <p class="block antialiased font-sans text-sm leading-normal text-gray-700 font-normal">It's Lauv</p>
          </div>
        </div>
      </div>
    </div>
</section>


<section class="grid min-h-screen p-8 place-items-center">

    {{-- 1 --}}
  <div class="container grid grid-cols-1 gap-8 my-auto lg:grid-cols-2">
    <div class="relative flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none grid gap-2 item sm:grid-cols-2">
      <div class="relative bg-clip-border rounded-xl overflow-hidden bg-white text-gray-700 shadow-lg m-0"><img src="/images/lanywp2.jpg" alt="lany" class="object-cover w-full h-full" /></div>
      <div class="p-6 px-2 sm:pr-6 sm:pl-4">
        <p class="block antialiased font-sans text-sm font-light leading-normal text-inherit mb-4 ">LANY is an acronym for "Los Angeles New York".</p><a href="#" class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 mb-2 normal-case transition-colors hover:text-gray-700">This is LANY!</a>
        <p class="block antialiased font-sans text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500">"We knew we wanted a four-letter word because of design and aesthetic purposes, but as you can imagine, all the four-letter words in the entire world are taken. I eventually thought of the span across the country from L.A. to New York, and at first I was thinking it would be L-A-N-Y, but people kept getting confused on how to pronounce it when I told them, saying things like 'L-A-and-Y?' So then we’re like forget it—let's call ourselves LANY, pronounced Lay-Nee."</p>
        <div class="flex items-center gap-4"><img src="/images/lany1.png" class="inline-block relative object-cover object-center !rounded-full w-12 h-12 " />
          <div>
            <p class="block antialiased font-sans text-base font-light leading-relaxed text-blue-gray-900 mb-0.5 ">LANY</p>
            <p class="block antialiased font-sans text-sm leading-normal text-gray-700 font-normal">Paul Klein & Jake Goss</p>
          </div>
        </div>
      </div>
    </div>

    {{-- 2 --}}
    <div class="relative flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none grid gap-2 item sm:grid-cols-2">
      <div class="relative bg-clip-border rounded-xl overflow-hidden bg-white text-gray-700 shadow-lg m-0"><img src="https://bucket.material-tailwind.com/magic-ai/e7aa235a7bc5f504db1c66e27ece08f8118b1da6b21c013500391afcd572cf7d.jpg" alt="Expanding Our Service Network" class="object-cover w-full h-full" /></div>
      <div class="p-6 px-2 sm:pr-6 sm:pl-4">
        <p class="block antialiased font-sans text-sm font-light leading-normal text-inherit mb-4 ">Like Me Better</p><a href="#" class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 mb-2 normal-case transition-colors hover:text-gray-700">Here is Lauv!</a>
        <p class="block antialiased font-sans text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500">With an affection for electronic and R&B sounds, infused with his soulful bedroom vocals and airy beats, Ari Staprans Leff, known professionally as Lauv, has burst onto the music scene with his intimate take on romantic pop.</p>
        <div class="flex items-center gap-4"><img src="/images/lauv1.png"" class="inline-block relative object-cover object-center !rounded-full w-12 h-12 " />
          <div>
            <p class="block antialiased font-sans text-base font-light leading-relaxed text-blue-gray-900 mb-0.5 ">Lauv</p>
            <p class="block antialiased font-sans text-sm leading-normal text-gray-700 font-normal">It's Lauv</p>
          </div>
        </div>
      </div>
    </div>
</section>


<section class="grid min-h-screen p-8 place-items-center">

    {{-- 1 --}}
  <div class="container grid grid-cols-1 gap-8 my-auto lg:grid-cols-2">
    <div class="relative flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none grid gap-2 item sm:grid-cols-2">
      <div class="relative bg-clip-border rounded-xl overflow-hidden bg-white text-gray-700 shadow-lg m-0"><img src="/images/lanywp2.jpg" alt="lany" class="object-cover w-full h-full" /></div>
      <div class="p-6 px-2 sm:pr-6 sm:pl-4">
        <p class="block antialiased font-sans text-sm font-light leading-normal text-inherit mb-4 ">LANY is an acronym for "Los Angeles New York".</p><a href="#" class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 mb-2 normal-case transition-colors hover:text-gray-700">This is LANY!</a>
        <p class="block antialiased font-sans text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500">"We knew we wanted a four-letter word because of design and aesthetic purposes, but as you can imagine, all the four-letter words in the entire world are taken. I eventually thought of the span across the country from L.A. to New York, and at first I was thinking it would be L-A-N-Y, but people kept getting confused on how to pronounce it when I told them, saying things like 'L-A-and-Y?' So then we’re like forget it—let's call ourselves LANY, pronounced Lay-Nee."</p>
        <div class="flex items-center gap-4"><img src="/images/lany1.png" class="inline-block relative object-cover object-center !rounded-full w-12 h-12 " />
          <div>
            <p class="block antialiased font-sans text-base font-light leading-relaxed text-blue-gray-900 mb-0.5 ">LANY</p>
            <p class="block antialiased font-sans text-sm leading-normal text-gray-700 font-normal">Paul Klein & Jake Goss</p>
          </div>
        </div>
      </div>
    </div>

    {{-- 2 --}}
    <div class="relative flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none grid gap-2 item sm:grid-cols-2">
      <div class="relative bg-clip-border rounded-xl overflow-hidden bg-white text-gray-700 shadow-lg m-0"><img src="https://bucket.material-tailwind.com/magic-ai/e7aa235a7bc5f504db1c66e27ece08f8118b1da6b21c013500391afcd572cf7d.jpg" alt="Expanding Our Service Network" class="object-cover w-full h-full" /></div>
      <div class="p-6 px-2 sm:pr-6 sm:pl-4">
        <p class="block antialiased font-sans text-sm font-light leading-normal text-inherit mb-4 ">Like Me Better</p><a href="#" class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 mb-2 normal-case transition-colors hover:text-gray-700">Here is Lauv!</a>
        <p class="block antialiased font-sans text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500">With an affection for electronic and R&B sounds, infused with his soulful bedroom vocals and airy beats, Ari Staprans Leff, known professionally as Lauv, has burst onto the music scene with his intimate take on romantic pop.</p>
        <div class="flex items-center gap-4"><img src="/images/lauv1.png"" class="inline-block relative object-cover object-center !rounded-full w-12 h-12 " />
          <div>
            <p class="block antialiased font-sans text-base font-light leading-relaxed text-blue-gray-900 mb-0.5 ">Lauv</p>
            <p class="block antialiased font-sans text-sm leading-normal text-gray-700 font-normal">It's Lauv</p>
          </div>
        </div>
      </div>
    </div>
</section>


<section class="grid min-h-screen p-8 place-items-center">

    {{-- 1 --}}
  <div class="container grid grid-cols-1 gap-8 my-auto lg:grid-cols-2">
    <div class="relative flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none grid gap-2 item sm:grid-cols-2">
      <div class="relative bg-clip-border rounded-xl overflow-hidden bg-white text-gray-700 shadow-lg m-0"><img src="/images/lanywp2.jpg" alt="lany" class="object-cover w-full h-full" /></div>
      <div class="p-6 px-2 sm:pr-6 sm:pl-4">
        <p class="block antialiased font-sans text-sm font-light leading-normal text-inherit mb-4 ">LANY is an acronym for "Los Angeles New York".</p><a href="#" class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 mb-2 normal-case transition-colors hover:text-gray-700">This is LANY!</a>
        <p class="block antialiased font-sans text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500">"We knew we wanted a four-letter word because of design and aesthetic purposes, but as you can imagine, all the four-letter words in the entire world are taken. I eventually thought of the span across the country from L.A. to New York, and at first I was thinking it would be L-A-N-Y, but people kept getting confused on how to pronounce it when I told them, saying things like 'L-A-and-Y?' So then we’re like forget it—let's call ourselves LANY, pronounced Lay-Nee."</p>
        <div class="flex items-center gap-4"><img src="/images/lany1.png" class="inline-block relative object-cover object-center !rounded-full w-12 h-12 " />
          <div>
            <p class="block antialiased font-sans text-base font-light leading-relaxed text-blue-gray-900 mb-0.5 ">LANY</p>
            <p class="block antialiased font-sans text-sm leading-normal text-gray-700 font-normal">Paul Klein & Jake Goss</p>
          </div>
        </div>
      </div>
    </div>

    {{-- 2 --}}
    <div class="relative flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none grid gap-2 item sm:grid-cols-2">
      <div class="relative bg-clip-border rounded-xl overflow-hidden bg-white text-gray-700 shadow-lg m-0"><img src="https://bucket.material-tailwind.com/magic-ai/e7aa235a7bc5f504db1c66e27ece08f8118b1da6b21c013500391afcd572cf7d.jpg" alt="Expanding Our Service Network" class="object-cover w-full h-full" /></div>
      <div class="p-6 px-2 sm:pr-6 sm:pl-4">
        <p class="block antialiased font-sans text-sm font-light leading-normal text-inherit mb-4 ">Like Me Better</p><a href="#" class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 mb-2 normal-case transition-colors hover:text-gray-700">Here is Lauv!</a>
        <p class="block antialiased font-sans text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500">With an affection for electronic and R&B sounds, infused with his soulful bedroom vocals and airy beats, Ari Staprans Leff, known professionally as Lauv, has burst onto the music scene with his intimate take on romantic pop.</p>
        <div class="flex items-center gap-4"><img src="/images/lauv1.png"" class="inline-block relative object-cover object-center !rounded-full w-12 h-12 " />
          <div>
            <p class="block antialiased font-sans text-base font-light leading-relaxed text-blue-gray-900 mb-0.5 ">Lauv</p>
            <p class="block antialiased font-sans text-sm leading-normal text-gray-700 font-normal">It's Lauv</p>
          </div>
        </div>
      </div>
    </div>
</section>

    <x-footer />

    <script src="{{ asset('public/js/app.js') }}"></script>
</body>
</html>