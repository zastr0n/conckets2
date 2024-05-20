<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body>



    <div class="flex min-h-screen w-full flex-row">
        <div class="relative hidden w-1/2 items-start justify-between p-8 dark:bg-slate-900 lg:flex lg:flex-col">
            <div class="flex w-full flex-row items-center justify-start whitespace-nowrap text-base font-bold uppercase tracking-wider text-blue-900"></div>
            <div class="flex flex-col">
                <img *ngIf="darkMode.isDark" class="mb-2 w-80" src="/assets/logo/gloglo-white.webp" alt="Folxcode Sirius" />
                <img *ngIf="!darkMode.isDark" class="mb-2 w-80" src="/assets/logo/gloglo-logo.webp" alt="Folxcode Sirius" />
                <p class="mb-2 text-4xl font-medium">
                    Welcome to
                    <span class="text-primary font-bold">Soundwave</span><br />
                    Administration Websystem!
                </p>
                <p class="">
                    Thank you for using our service, if there are some problem or error
                    occured. <br />
                    Please contact us immediately with screenshot.
                </p>
            </div>
            <div class="z-10 flex w-full flex-row items-center justify-between text-xs"></div>
        </div>
        <div class="relative flex w-full flex-col items-start justify-between lg:w-1/2 lg:justify-center">
            <div class="absolute h-full w-full bg-[url('/assets/bg/login-bg.webp')] bg-cover bg-left bg-no-repeat brightness-50"></div>
            <div class="z-10 mt-10 flex w-full flex-row items-center justify-center whitespace-nowrap text-base font-bold uppercase tracking-wider text-white lg:hidden">
                <a class="flex flex-row items-center justify-start space-x-2" href="/">
                    <span>
                        <img *ngIf="darkMode.isDark" class="h-20" src="/assets/logo/gloglo-white.webp" alt="Folxcode Sirius" />
                        <img *ngIf="!darkMode.isDark" class="h-20" src="/assets/logo/gloglo-logo.webp" alt="Folxcode Sirius" />
                    </span>
                </a>
            </div>
            <div class="z-10 mx-auto mb-20 w-[96vw] rounded-xl bg-white p-10 dark:bg-slate-900 md:max-w-md">
                <h2 class="text-3xl font-bold">Login</h2>
                <p class="mb-9 text-sm text-slate-600 dark:text-slate-400">
                    Soundwave Administration Websystem
                </p>
                <form class="form flex flex-wrap space-y-7" [formGroup]="loginForm" (ngSubmit)="submit()">
                    <span class="w-full">
                        <label class="mb-2" for="email">Email</label>
                        <input type="text" class="w-full" pInputText formControlName="username" id="email" required />
                    </span>
                    <span class="w-full">
                        <label class="mb-2" for="password">Password</label>
                        <input type="password" class="w-full" pInputText formControlName="password" id="password" required />
                    </span>
                    <p-button type="submit" label="Login" styleClass="w-full p-button-sm" [loading]="loading" (onClick)="submit()"></p-button>
                </form>
            </div>
            <div class="z-10"></div>
        </div>
    </div>
    <div class="bottom-10 left-10 z-10 text-xs lg:fixed">
        <a class="flex items-center space-x-2 rounded-md bg-white p-2 dark:rounded-none dark:bg-slate-900" href="/">
            <span><img class="rounded-md" src="/assets/logo/fc-white-blue.png" width="30px" alt="folxcode" /></span>
            <p class="">
                made <br />by
                <span class="text-primary font-bold">Folxcode</span>
            </p>
        </a>
    </div>





</body>

</html>