<x-app-layout>

    <div class="mx-auto  max-w-9xl px-2 md:px-4 lg:px-6 xl:px-8">
        <!-- We've used 3xl here, but feel free to try other max-widths based on your needs -->

        <div class="flex px-2 md:px-6 lg:px-12 py-4 sm: flex-col sm:flex-col md:flex-row md:flex-row">


            <div class=" flex-row sm:w-full md:w-full">

                <div class="flex justify-end gap-x-4">
                    <form action="/jobs" method="GET" id="filter_form">
                        <div class="flex  gap-x-4">
                            <div class="w-2/5">
                                <div class="relative flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                        class="absolute w-5 h-5 top-2.5 left-2.5 text-slate-600">
                                        <path fill-rule="evenodd"
                                            d="M10.5 3.75a6.75 6.75 0 1 0 0 13.5 6.75 6.75 0 0 0 0-13.5ZM2.25 10.5a8.25 8.25 0 1 1 14.59 5.28l4.69 4.69a.75.75 0 1 1-1.06 1.06l-4.69-4.69A8.25 8.25 0 0 1 2.25 10.5Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    <input name="job" value="{{ request('job') }}"
                                        class="w-full bg-white placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-l-md pl-10 pr-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                        placeholder="Search Jobs" />
                                    <button type="submit"
                                        class="px-3 py-1.5 border rounded-r-md bg-slate-900 text-neutral-100">Search</button>
                                </div>
                            </div>

                            <div class="w-1/5">
                                <div class="relative flex items-center">
                                    <!-- SVG icon -->
                                    <svg class="w-6 h-6 text-slate-600 absolute left-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd"
                                            d="M11.906 1.994a8.002 8.002 0 0 1 8.09 8.421 7.996 7.996 0 0 1-1.297 3.957.996.996 0 0 1-.133.204l-.108.129c-.178.243-.37.477-.573.699l-5.112 6.224a1 1 0 0 1-1.545 0L5.982 15.26l-.002-.002a18.146 18.146 0 0 1-.309-.38l-.133-.163a.999.999 0 0 1-.13-.202 7.995 7.995 0 0 1 6.498-12.518ZM15 9.997a3 3 0 1 1-5.999 0 3 3 0 0 1 5.999 0Z"
                                            clip-rule="evenodd" />
                                    </svg>

                                    <select name="location" id="location"
                                        onchange="document.getElementById('filter_form').submit();"
                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 pr-3 py-2">
                                        <option value=""
                                            {{ request()->input('location', '') === '' ? 'selected' : '' }}>
                                            All Location
                                        </option>
                                        @foreach (\App\Models\JobListing::getLocationOptions() as $location)
                                            <option
                                                {{ request()->input('location', '') === $location ? 'selected' : '' }}
                                                value="{{ $location }}">{{ $location }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>


                            <div>
                                <div class="relative flex items-center">
                                    <svg class="w-6 h-6 text-slate-600 absolute left-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M3.69869 6.31701C2.56717 5.02384 3.48553 3 5.20384 3H18.7547c1.7316 0 2.6449 2.05088 1.4866 3.33793L17.47 9.34198s-.4632-.20588-.6184-.24042c-.1551-.03453-.488-.10604-.9206-.10604-.9034 0-2.138.66073-2.5716 1.73108-1.3256.8485-1.6921 1.8133-1.7929 2.0078-.1009.1944-.2618.5312-.3399 1.2148-.0781.6836 0 1.6055.5235 2.4688-.0721.0626-.2383.289-.3321.4375-.0937.1484-.5898.875-.3515 2.1445-.1993 0-.6387-.158-.92-.4393l-.70708-.7071c-.28131-.2814-.43934-.6629-.43934-1.0607v-4.4172L3.69869 6.31701Z" />
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M16.0604 11c.5523 0 1 .4477 1 1v.1013c.6366.1591 1.2184.4937 1.668.9715.3784.4022.3592 1.0351-.0431 1.4135-.4022.3785-1.0351.3592-1.4135-.043-.1902-.2021-.4506-.3504-.7488-.4139-.0363-.0077-.0722-.0174-.1074-.0292-.0543-.018-.1098-.0317-.1658-.041-.0614.0117-.1247.0179-.1894.0179-.063 0-.1245-.0058-.1843-.017-.0784.0136-.1554.0355-.2292.0658-.1976.0812-.3513.2132-.4504.3673.0006.002.0013.0042.002.0064.0138.0431.0516.1195.1396.2154.1806.1971.4983.3934.8907.4835.746.1712 1.4369.5572 1.9192 1.0838.476.5197.8461 1.3054.5891 2.1704-.0136.0459-.0305.0907-.0506.1342-.3123.6768-.8768 1.2008-1.5636 1.483-.0208.0085-.0416.0168-.0625.0248V20c0 .5523-.4477 1-1 1-.5271 0-.9589-.4077-.9973-.9249-.0154-.0046-.0308-.0093-.0462-.0141-.6707-.1541-1.2837-.502-1.7506-1.0062-.3752-.4053-.3509-1.038.0544-1.4132.4052-.3752 1.0379-.3508 1.4131.0544.1903.2055.4527.3566.754.4209.0359.0077.0713.0173.1061.0289.0754.025.1531.0416.2315.0499.0753-.0181.154-.0277.235-.0277.0421 0 .0836.0026.1244.0076.0608-.0134.1204-.032.1781-.0557.1979-.0813.3518-.2135.451-.368l-.001-.0032c-.0136-.0424-.0513-.1189-.1398-.2156-.1817-.1984-.5007-.3955-.8919-.4854-.7448-.171-1.4351-.5549-1.9176-1.0814-.476-.5195-.846-.3055-1.1709-.0456-.3249-.2599-.6528-.3821-.9644-.5569-.202-.0713-.4062-.1289-.6053-.212-.081-.0356-.1609-.073-.2403-.1086-.1263-.066-.2465-.138-.3601-.2334zM11.0629 13.25a.75.75 0 1 0 1.0628 1.0565l-1.3626 1.8285c-.484.6564-1.268.7782-1.8858.3541-.6173-.3757-.7934-1.1295-.3868-1.7282.2552-.4666.5566-.7367 1.0422-.7367 1.2257 0 .2722-.0634.5275-.1854.7657L10.0699 14z" />
                                    </svg>
                                    <input type="number" name="salary" value="{{ request('salary') }}"
                                        class="w-full bg-white placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-l-md pl-10 pr-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                        placeholder="Enter expected Salary" />
                                    <button type="submit"
                                        class="px-3 py-1.5 border rounded-r-md bg-slate-900 text-neutral-100">Add</button>
                                </div>
                            </div>

                            <div>
                                <div class="relative flex items-center">
                                    <svg class="w-6 h-6 text-slate-600 absolute left-3" aria-hidden="true"
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M3.69869 6.31701C2.56717 5.02384 3.48553 3 5.20384 3H18.7547c1.7316 0 2.6449 2.05088 1.4866 3.33793L17.47 9.34198s-.4632-.20588-.6184-.24042c-.1551-.03453-.488-.10604-.9206-.10604-.9034 0-2.138.66073-2.5716 1.73108-1.3256.8485-1.6921 1.8133-1.7929 2.0078-.1009.1944-.2618.5312-.3399 1.2148-.0781.6836 0 1.6055.5235 2.4688-.0721.0626-.2383.289-.3321.4375-.0937.1484-.5898.875-.3515 2.1445-.1993 0-.6387-.158-.92-.4393l-.70708-.7071c-.28131-.2814-.43934-.6629-.43934-1.0607v-4.4172L3.69869 6.31701Z" />
                                        <path fill="currentColor" fill-rule="evenodd"
                                            d="M16.0604 11c.5523 0 1 .4477 1 1v.1013c.6366.1591 1.2184.4937 1.668.9715.3784.4022.3592 1.0351-.0431 1.4135-.4022.3785-1.0351.3592-1.4135-.043-.1902-.2021-.4506-.3504-.7488-.4139-.0363-.0077-.0722-.0174-.1074-.0292-.0543-.018-.1098-.0317-.1658-.041-.0614.0117-.1247.0179-.1894.0179-.063 0-.1245-.0058-.1843-.017-.0784.0136-.1554.0355-.2292.0658-.1976.0812-.3513.2132-.4504.3673.0006.002.0013.0042.002.0064.0138.0431.0516.1195.1396.2154.1806.1971.4983.3934.8907.4835.746.1712 1.4369.5572 1.9192 1.0838.476.5197.8461 1.3054.5891 2.1704-.0136.0459-.0305.0907-.0506.1342-.3123.6768-.8768 1.2008-1.5636 1.483-.0208.0085-.0416.0168-.0625.0248V20c0 .5523-.4477 1-1 1-.5271 0-.9589-.4077-.9973-.9249-.0154-.0046-.0308-.0093-.0462-.0141-.6707-.1541-1.2837-.502-1.7506-1.0062-.3752-.4053-.3509-1.038.0544-1.4132.4052-.3752 1.0379-.3508 1.4131.0544.1903.2055.4527.3566.754.4209.0359.0077.0713.0173.1061.0289.0754.025.1531.0416.2315.0499.0753-.0181.154-.0277.235-.0277.0421 0 .0836.0026.1244.0076.0608-.0134.1204-.032.1781-.0557.1979-.0813.3518-.2135.451-.368l-.001-.0032c-.0136-.0424-.0513-.1189-.1398-.2156-.1817-.1984-.5007-.3955-.8919-.4854-.7448-.171-1.4351-.5549-1.9176-1.0814-.476-.5195-.846-.3055-1.1709-.0456-.3249-.2599-.6528-.3821-.9644-.5569-.202-.0713-.4062-.1289-.6053-.212-.081-.0356-.1609-.073-.2403-.1086-.1263-.066-.2465-.138-.3601-.2334zM11.0629 13.25a.75.75 0 1 0 1.0628 1.0565l-1.3626 1.8285c-.484.6564-1.268.7782-1.8858.3541-.6173-.3757-.7934-1.1295-.3868-1.7282.2552-.4666.5566-.7367 1.0422-.7367 1.2257 0 .2722-.0634.5275-.1854.7657L10.0699 14z" />
                                    </svg>
                                    <input type="number" name="work_experience"
                                        value="{{ request('work_experience') }}"
                                        class="w-full bg-white placeholder:text-slate-400 text-slate-700 text-sm border border-slate-200 rounded-l-md pl-10 pr-3 py-2 transition duration-300 ease focus:outline-none focus:border-slate-400 hover:border-slate-300 shadow-sm focus:shadow"
                                        placeholder="Required Work Experience" />
                                    <button type="submit"
                                        class="px-3 py-1.5 border rounded-r-md bg-slate-900 text-neutral-100">Add</button>
                                </div>
                            </div>

                            <div class="w-1/5 relative">
                                <svg class="w-[22px] h-[22px] text-gray-600 absolute left-3 top-1/2 transform -translate-y-1/2"
                                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    fill="currentColor" viewBox="0 0 24 24">
                                    <path
                                        d="M12.356 3.066a1 1 0 0 0-.712 0l-7 2.666A1 1 0 0 0 4 6.68a17.695 17.695 0 0 0 2.022 7.98 17.405 17.405 0 0 0 5.403 6.158 1 1 0 0 0 1.15 0 17.406 17.406 0 0 0 5.402-6.157A17.694 17.694 0 0 0 20 6.68a1 1 0 0 0-.644-.949l-7-2.666Z" />
                                </svg>

                                <select name="work_policy" id="work_policy"
                                    onchange="document.getElementById('filter_form').submit();"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 pr-3 p-2">
                                    <option value=""
                                        {{ request()->input('work_policy', '') === '' ? 'selected' : '' }}>All Work
                                        Policy
                                    </option>
                                    <option value="Remote" {{ request('work_policy') == 'Remote' ? 'selected' : '' }}>
                                        Remote
                                    </option>
                                    <option value="Hybrid" {{ request('work_policy') == 'Hybrid' ? 'selected' : '' }}>
                                        Hybrid
                                    </option>
                                    <option value="Onsite" {{ request('work_policy') == 'Onsite' ? 'selected' : '' }}>
                                        Onsite
                                    </option>
                                </select>
                            </div>


                            <div class="w-1/5 relative">
                                <!-- Icon inside the select wrapper -->
                                <svg class="w-[22px] h-[22px] text-gray-600 absolute left-3 top-2.5" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                                    viewBox="0 0 24 24">
                                    <path fill-rule="evenodd"
                                        d="M15 4H9v16h6V4Zm2 16h3a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-3v16ZM4 4h3v16H4a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2Z"
                                        clip-rule="evenodd" />
                                </svg>

                                <!-- Select dropdown -->
                                <select name="category" id="category"
                                    onchange="document.getElementById('filter_form').submit();"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 pr-3 py-2">
                                    <option value=""
                                        {{ request()->input('category', '') === '' ? 'selected' : '' }}>
                                        All Category
                                    </option>
                                    @foreach (\App\Models\JobListing::getCategoriesOptions() as $category)
                                        <option {{ request()->input('category', '') === $category ? 'selected' : '' }}
                                            value="{{ $category }}">{{ $category }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </form>
                </div>

                <p class="text-sm py-2 text-gray-600">
                    {{ $count }} job{{ $count !== 1 ? 's' : '0' }} available.
                </p>
                <div class="">
                    <div class="w-full mx-auto>
                            <div class="overflow-hidden shadow-sm
                        sm:rounded-lg">
                        <div class="">
                            @foreach ($jobs as $job)
                                <div class="">
                                    <ul class="w-full flex flex-col gap-6 mt-4">
                                        <li class="bg-white rounded-md border flex p-6">
                                            <div class="w-full space-y-1 md:space-y-2">
                                                <div class="flex justify-between items-start">
                                                    <div class="flex flex-col gap-2 sm:flex-row sm:items-center">
                                                        <p class="text-slate-600 text-xs ">
                                                            {{ $job->company->name }}</p>
                                                        <div class="flex items-center gap-2">
                                                            <p class="text-slate-600 text-xs">
                                                                {{ $job->created_at }}
                                                            </p>
                                                            {{-- <div
                                                                class="px-3 py-2 inline-flex items-center rounded-full text-xs font-medium bg-green-100 text-green-500 !py-1 !px-2 text-[10px]">
                                                                Actively hiring
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                    <div class="flex gap-4">
                                                        <button class="stroke-slate-600" fdprocessedid="wwanx">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15"
                                                                height="18" fill="none">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    d="m5.103 10.352 4.544 2.921m0-8.546L5.103 7.648m9.147 6.977a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0ZM5.5 9a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm8.75-5.625a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z">
                                                                </path>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div
                                                    class="flex flex-col gap-4 w-full sm:gap-8 sm:flex-row sm:justify-between sm:items-center">
                                                    <div class="flex flex-col justify-center gap-4">
                                                        <div class="flex gap-4">
                                                            <div
                                                                class="flex-initial border h-16 w-16 aspect-square flex items-center justify-center rounded-md">
                                                                <img class="w-auto object-fit rounded-md w-16"
                                                                    src="{{ asset('storage/' . $job->company->logo_url) }}">
                                                            </div>
                                                            <h3
                                                                class="text-xl font-medium text-slate-600 md:text-2xl mt-2 flex-1">
                                                                {{ $job->title }}
                                                            </h3>

                                                        </div>
                                                        <div class="flex items-center space-x-3">
                                                            <div
                                                                class="text-xs text-gray-500 flex items-center space-x-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                    viewBox="0 0 24 24" stroke-width="2"
                                                                    stroke="currentColor" aria-hidden="true"
                                                                    class="w-5 h-5 text-gray-500">
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z">
                                                                    </path>
                                                                    <path stroke-linecap="round"
                                                                        stroke-linejoin="round"
                                                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                                                </svg><span class="">{{ $job->location }}</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="flex flex-col justify-center items-center divide-y sm:flex-row sm:divide-x sm:divide-y-0 sm:items-center">
                                                        <div
                                                            class="pb-4 w-full flex flex-col gap-4 justify-center sm:w-auto sm:pr-4 sm:pt-0">
                                                            <p class="text-xl text-slate-700 sm:text-right">P
                                                                {{ $job->salary }}/month</p>
                                                            <div
                                                                class="w-full flex justify-between gap-6 sm:justify-end">
                                                                <a class="w-full" href="/jobs/{{ $job->id }}">
                                                                    <button type="button"
                                                                        class="px-5 py-3 font-medium flex justify-center items-center border transition duration-150 ease-in-out rounded-md text-sm focus:outline-none disabled:opacity-75 disabled:cursor-not-allowed text-slate-600 bg-white border-slate-500 hover:bg-slate-200 whitespace-nowrap w-full"
                                                                        fdprocessedid="u6ko35">View Details
                                                                    </button>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>




</x-app-layout>
