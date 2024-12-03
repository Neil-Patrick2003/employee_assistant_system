<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<style>
@tailwind base;
@tailwind components;
@tailwind utilities;

/* Heading */
@layer utilities {
    @keyframes slide-left {
        from {
            opacity: 0;
            transform: translateX(-100%);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes slide-right {
        from {
            opacity: 0;
            transform: translateX(100%);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-slide-left {
        animation: slide-left 1s ease-out forwards;
    }

    .animate-slide-right {
        animation: slide-right 1s ease-out forwards;
    }

    /* Description and Button */
    @keyframes slide-up {
        from {
            opacity: 0;
            transform: translateY(500%);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-slide-up-delayed {
        animation: slide-up 1.5s ease-out 0.5s forwards;
    }

    /* Tailwind? */
    @keyframes pop-up {
        0% {
            opacity: 0;
            transform: translateY(100%);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-pop-up {
        animation: pop-up 0.5s ease-out forwards;
    }

    /* Image slide */
@keyframes slide-in-right {
    0% {
        transform: translateX(200%);
        opacity: 0;
    }
    25% {
        transform: translateX(0);
        opacity: 1;
    }
    50% {
        transform: translateX(0);
        opacity: 1;
    }
    75% {
        transform: translateX(-200%);
        opacity: 0;
    }
    100% {
        transform: translateX(200%);
        opacity: 0;
    }
}
    .animate-slide-in-right {
        animation: slide-in-right 4s ease-in-out infinite;
    }

    .animation-delay-0 {
        animation-delay: 0s;
    }

    .animation-delay-4 {
        animation-delay: 4s;
    }

    .animation-delay-8 {
        animation-delay: 8s;
    }

    .animation-delay-12 {
        animation-delay: 12s;
    }

    .animation-delay-16 {
        animation-delay: 16s;
    }

    img {
        width: auto;
        height: 120%;
        object-fit: cover;
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }
}
</style>

<body>
    <div class="bg-white">
        <!-- Header -->
        <header class="absolute inset-x-0 top-0 z-50">
            <nav class="flex items-center justify-between p-6 lg:px-8" aria-label="Global">
                <div class="flex lg:flex-1">
                    <a href="#" class="-m-1.5 p-1.5">
                        <span class="sr-only">Career Pathway</span>
                        <img class="h-20 w-auto"
                            src="{{ asset('logo.png') }}" alt="">
                    </a>
                </div>
                <div class="flex lg:hidden">
                    <button type="button"
                        class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                        <span class="sr-only">Open main menu</span>
                        <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                            aria-hidden="true" data-slot="icon">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <div class="hidden lg:flex lg:gap-x-12">
                    <a href="#feature" class="text-sm/6 font-semibold text-gray-900">Home</a>
                    <a href="#about" class="text-sm/6 font-semibold text-gray-900">About Us</a>
                    <a href="#contact" class="text-sm/6 font-semibold text-gray-900">Contact</a>
                </div>
                <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                    <a href="/login" class="text-sm/6 font-semibold text-gray-900 pr-10">Log in <span
                            aria-hidden="true">&rarr;</span></a>
                </div>
            </nav>
            <!-- Mobile menu, show/hide based on menu open state. -->
            <div class="lg:hidden" role="dialog" aria-modal="true">
                <!-- Background backdrop, show/hide based on slide-over state. -->
                <div class="fixed inset-0 z-50"></div>
                <div
                    class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
                    <div class="flex items-center justify-between">
                        <a href="#" class="-m-1.5 p-1.5">
                            <span class="sr-only">Career Pathway</span>
                            <img class="h-20 w-auto"
                            src="{{ asset('logo.png') }}" alt="Logo">
                        </a>
                        <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Close menu</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    <div class="mt-6 flow-root">
                        <div class="-my-6 divide-y divide-gray-500/10">
                            <div class="space-y-2 py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Product</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Features</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Marketplace</a>
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Company</a>
                            </div>
                            <div class="py-6">
                                <a href="#"
                                    class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log
                                    in</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="isolate">
            <!-- Hero section -->
            <div class="relative pt-14">
                <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
                    <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                        style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                    </div>
                </div>
                <div class="py-28 sm:py-32 lg:pb-40">
                    <div class="mx-auto max-w-7xl px-6 lg:px-8">
                        <div class="mx-auto max-w-2xl text-center">
                            <h1 class="text-gray-900 text-7xl font-extrabold tracking-tight">
                                <span class="block animate-slide-left">Unlock New Career</span>
                                <span class="block animate-slide-right">Opportunities</span>
                            </h1>
                            <p class="mt-10 text-lg font-medium text-gray-500 sm:text-xl/8 opacity-0 translate-y-full animate-slide-up-delayed">
                                Ready for your next career move? Start your journey with us today.
                            </p>
                            <div class="mt-10 flex items-center justify-center gap-x-6 opacity-0 translate-y-full animate-slide-up-delayed">
                                <a href="/register"
                                    class="rounded-md bg-indigo-600 px-5 py-3 text-lg font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600 ">
                                    Get started
                                </a>
                                <a href="/job_listings                                          "
                                class="text-lg font-medium text-gray-500 hover:text-gray-700">
                                View Jobs
                                </a>
                            </div>
                        </div>
                        <div class ="pb-24"></div>
                        {{-- job search --}}
                        <div class="pt-3 flow-root sm:mt-32 hidden-on-scroll opacity-0 translate-y-full transition duration-700 pb-10 text-center max-w-5xl mx-auto">
                            <h1 class="text-3xl font-semibold text-gray-900 sm:text-5xl lg:text-6xl">
                                Job search is time-consuming, stressful, demotivating.
                            </h1>
                            <div class="mt-4 max-w-4xl mx-auto">
                                <p class="text-lg text-gray-700 sm:mt-6 lg:mt-8">
                                    Instead of manually browsing job boards, searching for relevant positions, and filling out numerous applications with the same information, sit back and relax while our system streamlines the process for you.
                                </p>
                            </div>
                        </div>

            {{-- job search JS --}}
            <script>
                document.addEventListener("DOMContentLoaded", () => {
                    const observer = new IntersectionObserver((entries) => {
                        entries.forEach((entry) => {
                            if (entry.isIntersecting) {
                                entry.target.classList.add('animate-pop-up');
                                entry.target.classList.remove('opacity-0', 'translate-y-full');
                            }
                        });
                    });

                    const hiddenElements = document.querySelectorAll('.hidden-on-scroll');
                    hiddenElements.forEach((el) => observer.observe(el));
                });
            </script>


            <!-- Feature section -->
            <div id="about" class="mx-auto mt-32 max-w-7xl px-6 sm:mt-24 lg:px-8">
                <div class="mx-auto max-w-2xl lg:text-center">
                    <p class="mb-10 mt-2 text-pretty text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl lg:text-balance">
                        Make applying a job, Easy
                    </p>
                </div>
                <div class="relative w-full h-64 overflow-hidden flex justify-center items-center">
                    <img src="{{ asset('example1.jpeg') }}" alt="Image 1" class="absolute animate-slide-in-right animation-delay-0 rounded-lg">
                    <img src="{{ asset('example1.jpeg') }}" alt="Image 2" class="absolute animate-slide-in-right animation-delay-4 rounded-lg">
                    <img src="{{ asset('example1.jpeg') }}" alt="Image 3" class="absolute animate-slide-in-right animation-delay-8 rounded-lg">
                    <img src="{{ asset('example1.jpeg') }}" alt="Image 4" class="absolute animate-slide-in-right animation-delay-12 rounded-lg">
                    <img src="{{ asset('example1.jpeg') }}" alt="Image 5" class="absolute animate-slide-in-right animation-delay-16 rounded-lg">
                </div>
                <p class="text-lg text-gray-700 sm:mt-6 lg:mt-8 text-center">
                    With just your CV and a few job preferences like location, title, and salary, <br> our system works to find the most relevant job opportunities for you.
                </p>
            </div>




            <!-- Testimonial section -->
            <div class="mx-auto mt-32 max-w-7xl sm:mt-56 sm:px-6 lg:px-8">
                <div class="relative overflow-hidden bg-gray-900 px-6 py-20 shadow-xl sm:rounded-3xl sm:px-10 sm:py-24 md:px-12 lg:px-20">
                    <img class="absolute inset-0 size-full object-cover brightness-150 saturate-0"
                        src="https://images.unsplash.com/photo-1601381718415-a05fb0a261f3?ixid=MXwxMjA3fDB8MHxwcm9maWxlLXBhZ2V8ODl8fHxlbnwwfHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1216&q=80"
                        alt="">
                    <div class="absolute inset-0 bg-gray-900/90 mix-blend-multiply"></div>
                    <div class="absolute -left-80 -top-56 transform-gpu blur-3xl" aria-hidden="true">
                        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-r from-[#ff4694] to-[#776fff] opacity-[0.45]"
                            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                        </div>
                    </div>
                    <div class="hidden md:absolute md:bottom-16 md:left-[50rem] md:block md:transform-gpu md:blur-3xl"
                        aria-hidden="true">
                        <div class="aspect-[1097/845] w-[68.5625rem] bg-gradient-to-r from-[#ff4694] to-[#776fff] opacity-25"
                            style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                        </div>
                    </div>
                    <div class="relative mx-auto max-w-2xl lg:mx-0">
                        <img class="h-12 w-auto" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600"
                            alt="Career Pathway Logo">
                        <figure>
                            <blockquote class="text-lg font-semibold text-white sm:text-xl/8 text-center">
                                <p>“Our Career Pathway system helps job seekers find personalized job opportunities and equips them
                                    with essential resources to improve their chances of success in the job market. Let us guide you
                                    through every step of your career journey.”</p>
                            </blockquote>
                            <figcaption class="mt-6 text-base text-white">
                                <div class="font-semibold">PESO Team</div>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>

    {{-- FAQS --}}
    <div class="mx-auto max-w-2xl divide-y divide-gray-900/10 px-6 pb-8 sm:pb-24 sm:pt-12 lg:max-w-7xl lg:px-8 lg:pb-32">
        <h2 class="text-4xl font-semibold tracking-tight text-gray-900 sm:text-5xl text-center">Frequently Asked Questions</h2>
        <dl class="mt-10 space-y-8 divide-y divide-gray-900/10">

            <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                <dt class="text-base font-semibold text-gray-900 lg:col-span-5 cursor-pointer" onclick="toggleAnswer('answer1', 'arrow1')">
                    Who is this designed for?
                    <span id="arrow1" class="ml-2 transition-transform duration-300"> &#x2192; </span>
                </dt>
                <dd id="answer1" class="mt-4 lg:col-span-7 lg:mt-0 text-base text-gray-600 hidden">
                    Our system is designed for job seekers who want to simplify their job search by receiving personalized job recommendations and resources.
                </dd>
            </div>

            <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                <dt class="text-base font-semibold text-gray-900 lg:col-span-5 cursor-pointer" onclick="toggleAnswer('answer2', 'arrow2')">
                    How does this work?
                    <span id="arrow2" class="ml-2 transition-transform duration-300"> &#x2192; </span>
                </dt>
                <dd id="answer2" class="mt-4 lg:col-span-7 lg:mt-0 text-base text-gray-600 hidden">
                    You simply upload your CV and input a few job preferences (e.g., location, salary, job title). Our system matches you with the most relevant job openings.
                </dd>
            </div>

            <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                <dt class="text-base font-semibold text-gray-900 lg:col-span-5 cursor-pointer" onclick="toggleAnswer('answer4', 'arrow4')">
                    What do I need to get started?
                    <span id="arrow4" class="ml-2 transition-transform duration-300"> &#x2192; </span>
                </dt>
                <dd id="answer4" class="mt-4 lg:col-span-7 lg:mt-0 text-base text-gray-600 hidden">
                    To get started, simply upload your CV and provide a few job preferences (location, job title, salary) to start receiving personalized job recommendations.
                </dd>
            </div>

            <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                <dt class="text-base font-semibold text-gray-900 lg:col-span-5 cursor-pointer" onclick="toggleAnswer('answer5', 'arrow5')">
                    How long does it take after sign-up to see the first job recommendations?
                    <span id="arrow5" class="ml-2 transition-transform duration-300"> &#x2192; </span>
                </dt>
                <dd id="answer5" class="mt-4 lg:col-span-7 lg:mt-0 text-base text-gray-600 hidden">
                    It typically takes up to 24 hours to receive your first set of job recommendations, as we tailor the results based on your preferences.
                </dd>
            </div>

            <div class="pt-8 lg:grid lg:grid-cols-12 lg:gap-8">
                <dt class="text-base font-semibold text-gray-900 lg:col-span-5 cursor-pointer" onclick="toggleAnswer('answer6', 'arrow6')">
                    How are special job requirements handled, like cover letters or portfolios?
                    <span id="arrow6" class="ml-2 transition-transform duration-300"> &#x2192; </span>
                </dt>
                <dd id="answer6" class="mt-4 lg:col-span-7 lg:mt-0 text-base text-gray-600 hidden">
                    If a job listing requires a cover letter or portfolio, we will notify you and guide you on how to upload these documents when applying.
                </dd>
            </div>

        </dl>
    </div>

    <script>
        function toggleAnswer(answerId, arrowId) {
            var answer = document.getElementById(answerId);
            var arrow = document.getElementById(arrowId);

            if (answer.classList.contains('hidden')) {
                answer.classList.remove('hidden');
                arrow.innerHTML = '&#x2193;';
                arrow.classList.add('rotate-180');
            } else {
                answer.classList.add('hidden');
                arrow.innerHTML = '&#x2192;';
                arrow.classList.remove('rotate-180');
            }
        }
    </script>




    </main>

    <!-- Footer -->
    <footer class="relative bg-gray-800 text-white mt-32 pt-16 pb-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="border-t border-gray-600 pt-8">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">

                    <!-- Logo Section -->
                    <div class="flex flex-col justify-start space-y-4">
                        <img src="https://your-logo-url.com/logo.svg" alt="Employment Assistance System Logo" class="h-10">
                        <p class="text-gray-400 text-sm">Connecting job seekers with the right opportunities.</p>
                    </div>

                    <!-- Solutions Section -->
                    <div class="flex flex-col space-y-4">
                        <h3 class="font-semibold text-lg text-gray-200">Solutions</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">Job Recommendations</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Resume Builder</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Interview Prep</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Career Guidance</a></li>
                        </ul>
                    </div>

                    <!-- Support Section -->
                    <div class="flex flex-col space-y-4">
                        <h3 class="font-semibold text-lg text-gray-200">Support</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">Contact Us</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">FAQ</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Help Center</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Live Chat</a></li>
                        </ul>
                    </div>

                    <!-- Company Section -->
                    <div class="flex flex-col space-y-4">
                        <h3 class="font-semibold text-lg text-gray-200">Company</h3>
                        <ul class="space-y-2">
                            <li><a href="#" class="text-gray-400 hover:text-white">About Us</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Careers</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                            <li><a href="#" class="text-gray-400 hover:text-white">Press</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Legal Section -->
                <div class="mt-12 pt-8 border-t border-gray-600">
                    <div class="flex justify-between items-center">
                        <p class="text-sm text-gray-400">&copy; 2024 Employment Assistance System. All rights reserved.</p>
                        <div class="flex space-x-6">
                            <a href="#" class="text-gray-400 hover:text-white text-sm">Terms of Service</a>
                            <a href="#" class="text-gray-400 hover:text-white text-sm">Privacy Policy</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    </div>

</body>

</html>
