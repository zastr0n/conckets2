<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <x-icon-app/>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>FAQ</title>
    @vite('resources/css/app.css') 
</head>
<body class="bg-purple-200"> 
    
    <x-navbar />

<div class="bg-[url('/images/concert1.jpg')] bg-cover bg-center py-64 relative shadow-xl">

    <div class="container mx-auto px-4 text-center">
        <div class="absolute inset-0 bg-black opacity-25"></div> 
        <h1 class="text-5xl md:text-6xl lg:text-7xl font-black mix-blend-luminosity text-white mb-4 relative z-10">
            Here are FAQs
        </h1>
        <p class="xt-2xl md:text-3xl lg:text-4xl mb-8 text-white relative z-10 font-bold font-mono transition-all duration-300
            before:absolute before:inset-0 before:bg-[url('/images/winter.jpg')] before:mix-blend-multiply before:opacity-0 before:transition-opacity before:duration-300 
             hover:text-black hover:before:opacity-100">
             Jawaban dari pertanyaan kamu.
        </p>
        </div>
    </div>

</div>

<div class="bg-[url('/images/concert.jpg')] bg-cover bg-center py-32 relative shadow-xl">
    <div class="max-w-md mx-auto w-[600px]" x-data="{ open: null }">
        <!-- Q 1 -->
        <div class="border border-gray-200 dark:border-slate-700 rounded-md my-5">
          <button @click="open === 1 ? open = null : open = 1" class="w-full flex justify-between items-center py-2 px-4 bg-white dark:bg-[#20293A] dark:text-gray-400 text-gray-700 rounded-md">
            <span>Question 1</span>
            <svg :class="{'rotate-180': open === 1}" class="ml-2 h-4 w-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div x-show="open === 1" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-screen" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 max-h-screen" x-transition:leave-end="opacity-0 max-h-0" class="overflow-hidden bg-white dark:bg-[#20293A] px-4 py-2 rounded-b-md">
            <p class="text-gray-700 dark:text-gray-400">Answer to question 1.</p>
          </div>
        </div>
        
        <!-- Q 2 -->
        <div class="border border-gray-200 dark:border-slate-700 rounded-md my-5">
          <button @click="open === 2 ? open = null : open = 2" class="w-full flex justify-between items-center py-2 px-4 bg-white dark:bg-[#20293A] dark:text-gray-400 text-gray-700 rounded-md">
            <span>Question 2</span>
            <svg :class="{'rotate-180': open === 2}" class="ml-2 h-4 w-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div x-show="open === 2" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-screen" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 max-h-screen" x-transition:leave-end="opacity-0 max-h-0" class="overflow-hidden bg-white dark:bg-[#20293A] px-4 py-2 rounded-b-md">
            <p class="text-gray-700 dark:text-gray-400">Answer to question 2.</p>
          </div>
        </div>
        
        <!-- Q 3 -->
        <div class="border border-gray-200 dark:border-slate-700 rounded-md w-400px">
          <button @click="open === 3 ? open = null : open = 3" class="w-full flex justify-between items-center py-2 px-4 bg-white dark:bg-[#20293A] dark:text-gray-400 text-gray-700 rounded-md">
            <span>Question 3</span>
            <svg :class="{'rotate-180': open === 3}" class="ml-2 h-4 w-4 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </button>
          <div x-show="open === 3" x-cloak x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 max-h-0" x-transition:enter-end="opacity-100 max-h-screen" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 max-h-screen" x-transition:leave-end="opacity-0 max-h-0" class="overflow-hidden bg-white dark:bg-[#20293A] px-4 py-2 rounded-b-md">
            <p class="text-gray-700 dark:text-gray-400">Answer to question 3.</p>
          </div>
        </div>
      </div>
</div>

    <x-footer />

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>