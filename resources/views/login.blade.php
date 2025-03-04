<x-web.layouts.base-layout title="Login">
    <div class="fixed top-0 hidden p-6 lg:block lg:px-12">
        <a href="#" class="flex items-center space-x-2">
            <img class="size-12" src="{{ asset('images/app-logo.svg') }}" alt="logo" />
            <p class="text-xl font-semibold uppercase text-slate-700 dark:text-navy-100">
                {{ config('app.name') }}
            </p>
        </a>
    </div>
    <div class="hidden w-full place-items-center lg:grid">
        <div class="w-full max-w-lg p-6">
            <img class="w-full" x-show="!$store.global.isDarkModeEnabled"
                src="{{ asset('images/illustrations/dashboard-check.svg') }}" alt="image" />
            <img class="w-full" x-show="$store.global.isDarkModeEnabled"
                src="{{ asset('images/illustrations/dashboard-check-dark.svg') }}" alt="image" />
        </div>
    </div>
    <main class="flex flex-col items-center w-full bg-white dark:bg-navy-700 lg:max-w-md">
        <div class="flex flex-col justify-center w-full max-w-sm p-5 grow">
            <div class="text-center">
                <img class="mx-auto size-16 lg:hidden" src="{{ asset('images/app-logo.svg') }}" alt="logo" />
                <div class="mt-4">
                    <h2 class="text-2xl font-semibold text-slate-600 dark:text-navy-100">
                        Welcome Back
                    </h2>
                    <p class="text-slate-400 dark:text-navy-300">
                        Please sign in to continue
                    </p>
                </div>
            </div>
            <form class="mt-16" action="{{ route('login') }}" method="post">
                @method('POST') @csrf
                <div>
                    <label class="relative flex">
                        <input
                            class="w-full px-3 py-2 rounded-lg form-input peer bg-slate-150 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                            placeholder="Username or email" type="text" name="email"
                            value="{{ \Cookie::get('saveuser') ? \Cookie::get('saveuser') : old('email') }}" />
                        <span
                            class="absolute flex items-center justify-center w-10 h-full pointer-events-none text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="transition-colors duration-200 size-5"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </span>
                    </label>
                    @error('email')
                        <span class="text-tiny+ text-error">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mt-4">
                    <label class="relative flex">
                        <input
                            class="w-full px-3 py-2 rounded-lg form-input peer bg-slate-150 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                            placeholder="Password" type="password" name="password"
                            value="{{ \Cookie::get('savepwd') ? \Cookie::get('savepwd') : old('password') }}" />
                        <span
                            class="absolute flex items-center justify-center w-10 h-full pointer-events-none text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent">
                            <svg xmlns="http://www.w3.org/2000/svg" class="transition-colors duration-200 size-5"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                            </svg>
                        </span>
                    </label>
                    @error('password')
                        <span class="text-tiny+ text-error">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex items-center justify-between mt-4 space-x-2">
                    <label class="inline-flex items-center space-x-2">
                        <input
                            class="rounded form-checkbox is-outline size-5 border-slate-400/70 bg-slate-100 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-500 dark:bg-navy-900 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent"
                            type="checkbox" name="simpanpwd" @if(\Cookie::has('saveuser')) checked @endif />
                        <span class="line-clamp-1">Remember me</span>
                    </label>
                    <a href="#"
                        class="text-xs transition-colors text-slate-400 line-clamp-1 hover:text-slate-800 focus:text-slate-800 dark:text-navy-300 dark:hover:text-navy-100 dark:focus:text-navy-100">Forgot
                        Password?</a>
                </div>
                <button type="submit"
                    class="w-full h-10 mt-10 font-medium text-white btn bg-primary hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90">
                    Sign In
                </button>
                <div class="mt-4 text-center text-xs+">
                    <p class="line-clamp-1">
                        <span>Dont have Account?</span>

                        <a class="transition-colors text-primary hover:text-primary-focus dark:text-accent-light dark:hover:text-accent"
                            href="{{ route('public.boarding-registration') }}">Create account</a>
                    </p>
                </div>
                <div class="flex items-center space-x-3 my-7">
                    <div class="flex-1 h-px bg-slate-200 dark:bg-navy-500"></div>
                    <p>OR</p>
                    <div class="flex-1 h-px bg-slate-200 dark:bg-navy-500"></div>
                </div>
                <div class="flex space-x-4">
                    <button
                        class="w-full space-x-3 font-medium border btn border-slate-300 text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                        <img class="size-5.5" src="{{ asset('images/100x100.png') }}" alt="logo" />
                        <span>Google</span>
                    </button>
                    <button
                        class="w-full space-x-3 font-medium border btn border-slate-300 text-slate-800 hover:bg-slate-150 focus:bg-slate-150 active:bg-slate-150/80 dark:border-navy-450 dark:text-navy-50 dark:hover:bg-navy-500 dark:focus:bg-navy-500 dark:active:bg-navy-500/90">
                        <img class="size-5.5" src="{{ asset('images/100x100.png') }}" alt="logo" />
                        <span>Github</span>
                    </button>
                </div>
            </form>
        </div>
        <div class="flex justify-center my-5 text-xs text-slate-400 dark:text-navy-300">
            <a href="#">Privacy Notice</a>
            <div class="w-px mx-3 my-1 bg-slate-200 dark:bg-navy-500"></div>
            <a href="#">Term of service</a>
        </div>
    </main>
</x-web.layouts.base-layout>
