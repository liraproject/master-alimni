<x-web.layouts.base-layout title="Error 404">
    <main class="grid w-full grid-cols-1 grow place-items-center">
        <div class="grid max-w-screen-lg grid-cols-1 gap-12 p-6 place-items-center lg:grid-cols-2 lg:gap-24">
            <div class="absolute p-6 opacity-20 lg:static lg:opacity-100">
                <img width="440" x-show="!$store.global.isDarkModeEnabled" src="{{asset('images/illustrations/penguins.svg')}}"
                    alt="404 image" />
                <img width="440" x-show="$store.global.isDarkModeEnabled" src="{{asset('images/illustrations/penguins-dark.svg')}}"
                    alt="404 image" />
            </div>
            <div class="text-center z-2 lg:text-left">
                <p class="mt-4 font-bold text-7xl text-primary dark:text-accent lg:mt-0">
                    404
                </p>
                <p class="mt-6 text-xl font-semibold text-slate-800 dark:text-navy-50 lg:mt-10 lg:text-3xl">
                    Oops. This Page Not Found.
                </p>
                <p class="pt-2 text-slate-500 dark:text-navy-200 lg:text-lg">
                    This page you are looking not available
                </p>

                <button
                    class="mt-10 text-base font-medium text-white btn h-11 bg-primary hover:bg-primary-focus hover:shadow-lg hover:shadow-primary/50 focus:bg-primary-focus focus:shadow-lg focus:shadow-primary/50 active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:hover:shadow-accent/50 dark:focus:bg-accent-focus dark:focus:shadow-accent/50 dark:active:bg-accent/90">
                    Back To Home
                </button>
            </div>
        </div>
    </main>
</x-web.layouts.base-layout>
