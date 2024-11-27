<x-app-layout>
    <div class="w-full max-w-7xl mx-auto space-y-5 mt-5">
        <div class="bg-white px-4 py-4 rounded-2xl">
            <h2 class="text-xl font-medium text-slate-800">Create new Resume</h2>
        </div>

        <div class="bg-white rounded-2xl grid grid-cols-3 overflow-hidden">
            <div class="col-span-1 bg-[#323B4C] text-white px-5 py-8">
                <div class="space-y-12">
                    <div class="space-y-5">
                        <h3 class="text-xl font-medium border-b">Contact</h3>
                        <ul class="space-y-8 text-base font-normal">
                            <li>
                                <p>Email</p>
                                <p>{{ $user->email }}</p>
                            </li>

                            <li>
                                <p>Contact Number</p>
                                <p>09051396541</p>
                            </li>

                            <li>
                                <p>Address</p>
                                <p>Tuy Batangas</p>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <h3 class="text-xl font-medium border-b">Education</h3>
                    </div>

                    <div>
                        <h3 class="text-xl font-medium border-b">Expertise</h3>
                    </div>
                </div>
            </div >

            <div class="col-span-2 px-5 py-8 text-slate-800">
                <div>
                    <h2 class="text-5xl">{{ $user->name }}</h2>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

