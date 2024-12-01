<x-admin-layout>
    <div class="">
        <div class="grid grid-cols-4 gap-5">
            <div class="bg-gray-100 px-2.5 py-5 rounded-md space-y-5">
                <div>
                    <p class="text-center font-semibold">Active: {{$totalActiveJobListings}}</p>
                    <p class="text-center font-semibold">Inactive: {{$totalInactiveJobListings}}</p>
                </div>
                <p class="tracking-widest font-medium text-gray-800 text-center text-lg">Total Job Listings</p>
            </div>
            <div class="bg-gray-100 px-2.5 py-5 rounded-md space-y-5">
                <p class="text-center text-2xl font-bold">{{$totalRegisteredJobSeekers}}</p>
                <p class="tracking-widest font-medium text-gray-800 text-center text-lg">Registered Job Seekers</p>
            </div>
            <div class="bg-gray-100 px-2.5 py-5 rounded-md space-y-5">
                <p class="text-center text-2xl font-bold">{{$totalRegisteredEmployers}}</p>
                <p class="tracking-widest font-medium text-gray-800 text-center text-lg">Registered Employers</p>
            </div>
            <div class="bg-gray-100 px-2.5 py-5 rounded-md space-y-5">
                <p class="text-center text-2xl font-bold">{{$totalFilledApplication}}</p>
                <p class="tracking-widest font-medium text-gray-800 text-center text-lg">Job Applications Filled</p>
            </div>
        </div>

        <div class="grid grid-cols-3 mt-12 gap-5">
            <div  class="bg-gray-100 px-2.5 py-5 rounded-md space-y-5">
                <x-bar-chart
                    :labels="$registeredJobSeekersCountPerDay['labels']"
                    :data="$registeredJobSeekersCountPerDay['data']"
                    chart-label="New Jobs Seekers Per Day"
                    chart-title="Job Seeker Registration Trends"
                    id="newUsersChart"
                />
            </div>

           <div class="bg-gray-100 px-2.5 py-5 rounded-md space-y-5">
               <x-bar-chart
                   :labels="$registeredJobSeekersCountPerDay['labels']"
                   :data="$registeredJobSeekersCountPerDay['data']"
                   chart-label="New Jobs Per Day"
                   chart-title="Created Jobs Trends"
                   id="newJobsChart"
               />
           </div>

            <div  class="bg-gray-100 px-2.5 py-5 rounded-md space-y-5">
                <x-bar-chart
                    :labels="$submittedApplicationsCountPerDay['labels']"
                    :data="$submittedApplicationsCountPerDay['data']"
                    chart-label="Submitted Application Per Day"
                    chart-title="Application Trends"
                    id="newApplicationsChart"
                />
            </div>
        </div>
    </div>
</x-admin-layout>
