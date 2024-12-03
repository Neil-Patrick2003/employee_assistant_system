<x-landing-page-layout>
    <div x-data="{ show: false }"
         x-init="setTimeout(() => show = true, 100)"
         x-show="show"
         x-transition:enter="transition ease-out duration-1000"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-4xl mx-auto py-16">

        <div x-data="{ show: false }"
             x-init="setTimeout(() => show = true, 500)"
             x-show="show"
             x-transition:enter="transition ease-out duration-1000"
             x-transition:enter-start="opacity-0 transform translate-x-8"
             x-transition:enter-end="opacity-100 transform translate-x-0"
             class="flex flex-col items-center justify-center rounded-3xl bg-gray-50 px-8 py-10 hover:shadow-lg transition-all duration-300">
            <div class="flex size-12 items-center justify-center rounded-full bg-indigo-600">
                <svg class="size-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                </svg>
            </div>
            <h3 class="mt-6 text-xl font-semibold leading-7 tracking-tight text-gray-900">Email Us</h3>
            <p class="mt-2 text-base leading-7 text-gray-600">We'll respond you at the right time</p>
            <a href="mailto:careerpathway2024@email.com"
               class="mt-4 text-indigo-600 hover:text-indigo-500 transition-colors duration-300">
               careerpathway2024@email.com
            </a>
        </div>

        <div x-data="{ show: false }"
             x-init="setTimeout(() => show = true, 700)"
             x-show="show"
             x-transition:enter="transition ease-out duration-1000"
             x-transition:enter-start="opacity-0 transform translate-x-8"
             x-transition:enter-end="opacity-100 transform translate-x-0"
             class="flex flex-col items-center justify-center rounded-3xl bg-gray-50 px-8 py-10 hover:shadow-lg transition-all duration-300">
            <div class="flex size-12 items-center justify-center rounded-full bg-indigo-600">
                <svg class="size-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                </svg>
            </div>
            <h3 class="mt-6 text-xl font-semibold leading-7 tracking-tight text-gray-900">Facebook</h3>
            <p class="mt-2 text-base leading-7 text-gray-600">Connect with us on Facebook</p>
            <a href="https://fb.com/CareerPathway"
               target="_blank"
               class="mt-4 text-indigo-600 hover:text-indigo-500 transition-colors duration-300">
               Career Pathway
            </a>
        </div>
    </div>
    <div x-data="{ show: false }"
     x-init="setTimeout(() => show = true, 1100)"
     x-show="show"
     x-transition:enter="transition ease-out duration-1000"
     x-transition:enter-start="opacity-0 transform translate-y-8"
     x-transition:enter-end="opacity-100 transform translate-y-0"
     class="max-w-4xl mx-auto mt-16 px-4">
    <div class="max-w-4xl mx-auto mt-16 px-4">
        <h2 class="text-2xl font-bold text-center mb-8">Frequently Asked Questions</h2>
        <div class="space-y-6">
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="font-semibold">How do I create an account?</h3>
                <p class="mt-2 text-gray-600">Click on the "Get Started" button and follow the registration process.</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="font-semibold">What services do you offer?</h3>
                <p class="mt-2 text-gray-600">We provide resume building, and job matching as for the personalized job recommendation as applicant.</p>
            </div>
            </div>
            </div>
    </div>


    <div x-data="{ show: false }"
     x-init="setTimeout(() => show = true, 1300)"
     x-show="show"
     x-transition:enter="transition ease-out duration-1000"
     x-transition:enter-start="opacity-0 transform translate-y-8"
     x-transition:enter-end="opacity-100 transform translate-y-0"
     class="max-w-4xl mx-auto mt-16 px-4">

    <div class="max-w-4xl mx-auto mt-16 px-4">
        <div class="grid md:grid-cols-2 gap-8">
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="font-semibold text-xl mb-4">Main Office</h3>
                <p class="text-gray-600">123 Timog Avenue</p>
                <p class="text-gray-600">Quezon City, Philippines</p>
                <p class="text-gray-600">Contact: +63 995 133 7893</p>
            </div>
            <div class="bg-gray-50 p-6 rounded-lg">
                <h3 class="font-semibold text-xl mb-4">Office Hours</h3>
                <p class="text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM</p>
                <p class="text-gray-600">Saturday: 9:00 AM - 1:00 PM</p>
                <p class="text-gray-600">Sunday: Closed</p>
            </div>
        </div>
    </div>
</div>
    
        <footer x-data="{ show: false }"
        x-init="setTimeout(() => show = true, 1500)"
        x-show="show"
        x-transition:enter="transition ease-out duration-1000"
        x-transition:enter-start="opacity-0 transform translate-y-8"
        x-transition:enter-end="opacity-100 transform translate-y-0"
        class="bg-stale-100">
        <div class="mx-auto max-w-7xl px-6 py-12 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
               
                <div class="text-center md:text-left">
                    {{-- <img class="h-8 w-auto mx-auto md:mx-0" src="https://tailwindui.com/plus/img/logos/mark.svg?color=indigo&shade=600" alt="Career Pathway"> Logo here --}}
                    <p class="mt-4 text-sm text-gray-500">&copy; 2024 Career Pathway. All rights reserved.</p>
                </div>
    
                <!-- Social Links -->
                <div class="flex justify-center space-x-6">
                    <a href="https://www.facebook.com/CareerPathway" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Facebook</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    
                    <a href="https://github.com/neil-Patrick2003/employee_assistant_system" target="_blank" rel="noopener noreferrer" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">GitHub</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd" />
                        </svg>
                    </a>
                    
                    <a href="mailto:jobaarronmisenas26@gmail.com" class="text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Email</span>
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z"/>
                            <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z"/>
                        </svg>
                    </a>                
                </div>
    
                <!-- Navigation Links -->
                <div class="space-y-4 text-center md:text-right">
                    <nav class="flex flex-col md:flex-row md:justify-end space-y-4 md:space-y-0 md:space-x-6">
                        <a href="mailto:jobaarronmisenas26@gmail.com"  class="text-sm text-gray-600 hover:text-gray-900">Contact Us</a>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
</x-landing-page-layout>

<script>
// Interactive form validation and animation
class ContactForm {
    constructor() {
        this.form = document.querySelector('.contact-form');
        this.inputs = this.form?.querySelectorAll('input, textarea');
        this.setupValidation();
    }

    setupValidation() {
        this.inputs?.forEach(input => {
            input.addEventListener('focus', () => {
                input.parentElement.classList.add('input-active');
            });

            input.addEventListener('blur', () => {
                if (!input.value) {
                    input.parentElement.classList.remove('input-active');
                }
                this.validateInput(input);
            });
        });
    }

    validateInput(input) {
        const isValid = input.checkValidity();
        input.parentElement.classList.toggle('input-error', !isValid);
    }
}

document.addEventListener('DOMContentLoaded', () => {
    new ContactForm();
});
</script>
