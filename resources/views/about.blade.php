<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <x-icon-app/>
    <title>About</title>
    @vite('resources/css/app.css') 
</head>
<body class="bg-white"> 
    
    <x-navbar />

    <div class="bg-[url('/images/about.png')] bg-cover bg-center py-64 relative shadow-xl">

      <div class="container mx-auto px-4 text-center">
          <div class="absolute inset-0 bg-black opacity-25"></div> 
          <h1 class="text-5xl md:text-6xl lg:text-7xl font-black mix-blend-luminosity text-white mb-4 relative z-10">
              About
          </h1>
          <p class="xt-2xl md:text-3xl lg:text-4xl mb-8 text-white relative z-10 font-bold font-mono transition-all duration-300
              before:absolute before:inset-0 before:bg-[url('/images/winter.jpg')] before:mix-blend-multiply before:opacity-0 before:transition-opacity before:duration-300 
               hover:text-black hover:before:opacity-100">
               Tentang Konser ini.
          </p>
          </div>
      </div>
  
  </div>
  
    <div class="container mx-auto p-4 bg-black text-white"> 
        
    <div class="relative flex-col bg-clip-border rounded-xl bg-transparent text-gray-700 shadow-none grid gap-2 item sm:grid-cols-2">
      <div class="relative bg-clip-border rounded-xl overflow-hidden bg-white text-gray-700 shadow-lg m-0"><img src="/images/aboutpic.jpg" alt="Sustainable Practices for a Greener Future" class="object-cover w-full h-full" /></div>
      <div class="p-6 px-2 sm:pr-6 sm:pl-4">
        <p class="block antialiased font-sans text-sm font-light leading-normal text-inherit mb-4 !font-semibold">Sebuah Konser Besar</p><a href="https://www.youtube.com/watch?v=Fpn1imb9qZg&pp=ygUHY29uY2VydA%3D%3D" class="block antialiased tracking-normal font-sans text-xl font-semibold leading-snug text-blue-gray-900 mb-2 normal-case transition-colors hover:text-gray-700">Konser yang dikembangkan oleh Soundwave!</a>
        <p class="block antialiased font-sans text-base leading-relaxed text-inherit mb-8 font-normal !text-gray-500"></p>
        <div class="flex items-center gap-4"><img src="/images/soundwavelogo1.png" class="inline-block relative object-cover object-center !rounded-full w-12 h-12 rounded-lg" />
          <div>
            <p class="block antialiased font-sans text-base font-light leading-relaxed text-blue-gray-900 mb-0.5 !font-semibold">Soundwave!</p>
            <p class="block antialiased font-sans text-sm leading-normal text-gray-700 font-normal">2024-06-30</p>
          </div>
        </div>
      </div>
    </div>
  </div>
      
        <div class="grid grid-cols-2 gap-4 mb-4"> <div>
            </div>
          <div class="bg-white">
            </div>
        </div>
      
        <div class="grid grid-cols-2 gap-4"> <div class="bg-white">
            </div>
          <div>
            </div>
        </div>
      </div>
      
    <x-footer />

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>