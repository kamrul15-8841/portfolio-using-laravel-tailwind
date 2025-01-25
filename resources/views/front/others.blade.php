@extends('front.layouts.app')
@section('title', 'Others')

@section('content')
    <!-- Skills Section -->
    <section id="skills" class="py-16 p-2">
        <div class="container mx-auto">

            <div class="mt-8 p-6 max-w-2xl mx-auto rounded-xl shadow-2xl flex items-center">
                <div class="z-40 bg-orange-400 rounded-full px-8 py-8">05</div>
                <div class="z-30 bg-orange-400 rounded-full px-8 py-8">04</div>
                <div class="z-20 bg-orange-400 rounded-full px-8 py-8">03</div>
                <div class="z-10 bg-orange-400 rounded-full px-8 py-8">02</div>
                <div class="z-0 bg-orange-400 rounded-full px-8 py-8">01</div>
            </div>

            <div class="mt-8 space-y-4 p-6 max-w-2xl mx-auto  rounded-xl shadow-2xl flex items-center gap-x-4">
                <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                    <div class="md:flex">
                        <div class="md:shrink-0">
                            <img class="h-48 w-full object-cover md:h-full md:w-48" src="img/shapes/logo.png" alt="Modern building architecture">
                        </div>
                        <div class="p-8">
                            <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">Company retreats</div>
                            <a href="#" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Incredible accommodation for your team</a>
                            <p class="mt-2 text-slate-500">Looking to take your team away on a retreat to enjoy awesome food and take in some sunshine? We have a list of places to do just that.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-8 space-y-4 p-6 max-w-sm mx-auto  rounded-xl shadow-2xl flex items-center gap-x-4">
                <form>
                    <legend> Choose a theme: </legend>
                    <label>
                        <input type="radio" class="forced-colors:appearance-auto appearance-none" />
                        <p class="forced-colors:block hidden">
                            Cyan
                        </p>
                        <div class="forced-colors:hidden h-6 w-6 rounded-full bg-cyan-200 ..."></div>
                        <div class="forced-colors:hidden h-6 w-6 rounded-full bg-cyan-500 ..."></div>
                    </label>
                    <!-- ... -->
                </form>
            </div>

            <div class="mt-8 space-y-4 p-6 max-w-sm mx-auto  rounded-xl shadow-2xl flex items-center gap-x-4">
                <div class="bg-white dark:bg-slate-800 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
                    <div>
    <span class="inline-flex items-center justify-center p-2 bg-indigo-500 rounded-md shadow-lg">
      <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><!-- ... --></svg>
    </span>
                    </div>
                    <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Writes Upside-Down</h3>
                    <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
                        The Zero Gravity Pen can be used to write in any orientation, including upside-down. It even works in outer space.
                    </p>
                </div>
            </div>

            <div class="mt-8 space-y-4 p-6 max-w-sm mx-auto  rounded-xl shadow-2xl flex items-center gap-x-4">
                <div class="bg-white dark:bg-slate-900 rounded-lg px-6 py-8 ring-1 ring-slate-900/5 shadow-xl">
                    <div>
                    <span class="inline-flex items-center justify-center p-2 bg-indigo-500 rounded-md shadow-lg">
                      <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true"><!-- ... --></svg>
                    </span>
                    </div>
                    <h3 class="text-slate-900 dark:text-white mt-5 text-base font-medium tracking-tight">Writes Upside-Down</h3>
                    <p class="text-slate-500 dark:text-slate-400 mt-2 text-sm">
                        The Zero Gravity Pen can be used to write in any orientation, including upside-down. It even works in outer space.
                    </p>
                </div>
            </div>

            <div class="mt-8 space-y-4 p-6 max-w-sm mx-auto  rounded-xl shadow-2xl flex items-center gap-x-4">
                <fieldset>
                    <legend>Today</legend>
                    <div>
                        <label class="peer ...">
                            <input type="checkbox" name="todo[1]" checked />
                            Create a to do list
                        </label>
                        <svg class="peer-has-[:checked]:hidden ...">
                        </svg>
                    </div>
                    <div>
                        <label class="peer ...">
                            <input type="checkbox" name="todo[1]" checked />
                            Create a to do list
                        </label>
                        <svg class="peer-has-[:checked]:hidden ...">
                        </svg>
                    </div>
                </fieldset>
            </div>

            <div class="mt-8 space-y-4 p-6 max-w-sm mx-auto bg-white rounded-xl shadow-2xl flex items-center gap-x-4">
                <form class="flex items-center space-x-6">
                    <div class="shrink-0">
                        <img class="h-16 w-16 object-cover rounded-full" src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1361&q=80" alt="Current profile photo" />
                    </div>
                    <label class="block">
                        <span class="sr-only">Choose profile photo</span>
                        <input type="file" class="block w-full text-sm text-slate-500
                          file:mr-4 file:py-2 file:px-4
                          file:rounded-full file:border-0
                          file:text-sm file:font-semibold
                          file:bg-violet-50 file:text-violet-700
                          hover:file:bg-violet-100
                        "/>
                    </label>
                </form>
            </div>

            <div class="mt-8 space-y-4 p-6 max-w-7xl mx-auto bg-white rounded-xl shadow-2xl flex items-center gap-x-4">
                <a href="#" class="group block max-w-xs mx-auto rounded-lg p-6 bg-white ring-1 ring-slate-900/5 shadow-lg space-y-3 hover:bg-sky-500 hover:ring-sky-500">
                    <div class="flex items-center space-x-3">
                        <svg class="h-6 w-6 stroke-sky-500 group-hover:stroke-white" fill="none" viewBox="0 0 24 24"><!-- ... --></svg>
                        <h3 class="text-slate-900 group-hover:text-white text-sm font-semibold">New project</h3>
                    </div>
                    <p class="text-slate-500 group-hover:text-white text-sm">Create a new project from a variety of starting templates.</p>
                </a>
            </div>

            <div class="mt-8 space-y-4 p-6 max-w-7xl mx-auto bg-white rounded-xl shadow-2xl flex items-center gap-x-4">
                <form>
                    <label class="block">
                        <span class="block text-sm font-medium text-slate-700">Username</span>
                        <!-- Using form state modifiers, the classes can be identical for every input -->
                        <input type="text" value="tbone" disabled class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                          invalid:border-pink-500 invalid:text-pink-600
                          focus:invalid:border-pink-500 focus:invalid:ring-pink-500
    "/>
                    </label>
                    <label class="block">
                        <span class="block text-sm font-medium text-slate-700">Password</span>
                        <!-- Using form state modifiers, the classes can be identical for every input -->
                        <input type="password" value="tbone" disabled class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-sm shadow-sm placeholder-slate-400
                          focus:outline-none focus:border-sky-500 focus:ring-1 focus:ring-sky-500
                          disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none
                          invalid:border-pink-500 invalid:text-pink-600
                          focus:invalid:border-pink-500 focus:invalid:ring-pink-500
    "/>
                    </label>
                </form>
            </div>

            <div class="mt-8 space-y-4 p-6 max-w-sm mx-auto bg-white rounded-xl shadow-2xl flex items-center gap-x-4">
                <ul role="list" class="p-6 divide-y divide-slate-200">
                    <!-- Remove top/bottom padding when first/last child -->
                    <li class="flex py-4 first:pt-0 last:pb-0">
                        <img class="h-10 w-10 rounded-full" src="img/shapes/logo.png" alt="" />
                        <div class="ml-3 overflow-hidden">
                            <p class="text-sm font-medium text-slate-900">Kamrul Hasan</p>
                            <p class="text-sm text-slate-500 truncate">kamrul@gamil.com</p>
                        </div>
                    </li>
                    <li class="flex py-4 first:pt-0 last:pb-0">
                        <img class="h-10 w-10 rounded-full" src="img/shapes/logo.png" alt="" />
                        <div class="ml-3 overflow-hidden">
                            <p class="text-sm font-medium text-slate-900">Kamrul Hasan</p>
                            <p class="text-sm text-slate-500 truncate">kamrul@gamil.com</p>
                        </div>
                    </li>
                    <li class="flex py-4 first:pt-0 last:pb-0">
                        <img class="h-10 w-10 rounded-full" src="img/shapes/logo.png" alt="" />
                        <div class="ml-3 overflow-hidden">
                            <p class="text-sm font-medium text-slate-900">Kamrul Hasan</p>
                            <p class="text-sm text-slate-500 truncate">kamrul@gamil.com</p>
                        </div>
                    </li>
                </ul>
            </div>

            <div class="mt-8 space-y-4 p-6 max-w-sm mx-auto bg-white rounded-xl shadow-2xl flex items-center gap-x-4">
                <div class="shrink-0">
                    <img class="size-12" src="img/shapes/logo.png" alt="ChitChat Logo">
                </div>
                <div>
                    <div class="text-xl font-medium text-black">ChitChat</div>
                    <p class="text-slate-500">You have a new message! </p>
                </div>
            </div>
            <div class="mt-8 space-y-4 py-8 px-8 max-w-sm mx-auto space-y-2 bg-white rounded-xl shadow-lg sm:py-4 sm:flex sm:items-center sm:space-y-0 sm:gap-x-6">
                <img class="block mx-auto h-24 rounded-full sm:mx-0 sm:shrink-0" src="img/shapes/logo.png" alt="Woman's Face" />
                <div class="text-center space-y-2 sm:text-left">
                    <div class="space-y-0.5">
                        <p class="text-lg text-black font-semibold">
                            Erin Lindford
                        </p>
                        <p class="text-slate-500 font-medium">
                            Product Engineer
                        </p>
                    </div>
                    <button class="px-4 py-1 text-sm text-purple-600 font-semibold rounded-full border border-purple-200 hover:text-white hover:bg-purple-600 hover:border-transparent focus:outline-none focus:ring-2 focus:ring-purple-600 focus:ring-offset-2">Message</button>
                </div>
            </div>
        </div>
    </section>
@endsection
