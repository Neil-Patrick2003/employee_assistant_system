<x-admin-layout>
    <div x-data="{ modalOpen: false, mode: 'add', formData: {} }">
        <x-announcement.manage-announcement-modal
            :show="'modalOpen'"
            :onClose="'modalOpen = false'"
        />

        <div class="flex justify-between items-center">
            <h2>Announcements</h2>

            <button @click="modalOpen = true; mode = 'add'; formData = {}" class="bg-gray-900 text-white px-4 py-2 rounded">
                Create new
            </button>
        </div>

        <div class="mt-4 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class=" inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead class="  p-4 bg-slate-900 ">
                        <tr>
                            <th scope="col"
                                class="py-3.5 pl-4 pr-3 ml-8 text-left text-sm font-semibold text-slate-100 sm:pl-0">
                                <div class="pl-4">Title</div>

                            </th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-slate-100">Status
                            </th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-slate-100">Created At
                            </th>
                            <th scope="col"
                                class="px-3 py-3.5 text-left text-sm font-semibold text-slate-100">Action
                            </th>
                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white ">
                        @foreach ($announcements->items() as $announcement)

                            <tr>
                                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                    <div class="text-gray-900 font-medium">
                                        {{ $announcement->title }}
                                    </div>
                                </td>
                                <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                                    @if($announcement->status === 'Active')
                                        <span class="inline-flex items-center rounded-full bg-green-50 px-2 py-1 text-xs font-medium text-green-700 ring-1 ring-inset ring-green-600/20">{{$announcement->status}}</span>
                                    @else
                                        <span class="inline-flex items-center rounded-full bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/20">{{$announcement->status}}</span>
                                    @endif

                                </td>


                                <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                    {{ $announcement->created_at }}
                                </td>

                                <td>
                                    <div class="flex gap-x-2">
                                        <button  @click="modalOpen = true; mode = 'edit'; formData = {{$announcement}}" class="bg-gray-900 text-white px-4 py-2 rounded">
                                            Edit
                                        </button>

                                        <form action="/admin/announcements/{{ $announcement->id }}"
                                              method="POST"
                                              onsubmit="return confirm('Are you sure you want to delete this announcement?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="bg-gray-900 text-white px-4 py-2 rounded">
                                                Delete
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>


