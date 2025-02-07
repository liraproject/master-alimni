<x-web.layouts.base-layout title="Error 500">
    <main class="grid w-full grid-cols-1 grow place-items-center">
        <div class="max-w-md p-6 text-center">
            <div class="w-full">
                <img class="w-full" src="{{asset('images/illustrations/error-500.svg')}}" alt="image" />
            </div>
            <p class="pt-4 font-bold text-7xl text-primary dark:text-accent">
                500
            </p>
            <p class="pt-4 text-xl font-semibold text-slate-800 dark:text-navy-50">
                Internal Server Error
            </p>
            <p class="pt-2 text-slate-500 dark:text-navy-200">
                The server has been deserted for a while. Please be patient or try
                again later
            </p>
        </div>
    </main>
</x-web.layouts.base-layout>
