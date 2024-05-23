<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>

<body>


  <div class="h-full min-h-full bg-gradient-to-r from-cyan-500 to-blue-500 bg-center 2xl:min-h-full">
    <div class="min-h-[100vh] bg-cover bg-center">
      <div class="flex h-[90vh] items-center justify-center">
        <div class="w-full max-w-[28rem]">
          <div class="mx-6 rounded-xl bg-white px-8 py-12 lg:mx-0 lg:px-10">
            <h2 class="mt-3 text-center text-3xl font-semibold text-slate-800">
              Login
            </h2>
            <h3 class="mx-auto mt-1 w-[80%] text-center text-sm">
              Hai! Masukkan email dan password kamu untuk mengakses
              <span class="font-bold text-cyan-500"> SoundWave </span>
            </h3>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="relative mt-9">
                <input required type="email" id="email" name="email" placeholder="Masukkan Email atau Username Anda" formControlName="username" class="flex w-full items-center gap-2 rounded-lg border border-zinc-300 px-4 py-2 lg:py-3" />
                <div class="absolute -top-4 left-3 bg-white px-1">
                  <label class="text-xs text-zinc-500" for="email">Email/Username</label>
                </div>
              </div>
              <div class="relative mt-6">
                <input required type="password" id="password" name="password" placeholder="Masukkan Password Anda" formControlName="password" class="flex w-full items-center gap-2 rounded-lg border border-zinc-300 px-4 py-2 lg:py-3" />
                <div class="absolute -top-4 left-3 bg-white px-1">
                  <label class="text-xs text-zinc-500" for="password">Password</label>
                </div>
              </div>
              <button type="submit" [ngClass]="{ 'opacity-25': loading }" [disabled]="loading" class="mt-5 w-full rounded-lg bg-cyan-500 py-2 font-semibold text-white duration-200 ease-in-out hover:bg-cyan-600">
                Masuk
              </button>
              <h4 class="mt-4 text-center text-xs">
                &#169; 2023 Politeknik Negeri Batam. Designed
                and Developed by
                <a class="text-sky-700" href=""> IF2C</a>
              </h4>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>







</body>

</html>