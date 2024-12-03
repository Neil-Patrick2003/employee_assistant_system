<x-admin-layout>
    <div class="flex justify-between items-center">
        <h2>Feedbacks</h2>
    </div>

    <div class="mt-4 flow-root">
        <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class=" inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                <table class="min-w-full divide-y divide-gray-300">
                    <thead class="  p-4 bg-slate-900 ">
                    <tr>
                        <th scope="col"
                            class="py-3.5 pl-4 pr-3 ml-8 text-left text-sm font-semibold text-slate-100 sm:pl-0">
                            <div class="pl-4">User</div>

                        </th>
                        <th scope="col"
                            class="px-3 py-3.5 text-left text-sm font-semibold text-slate-100">Type
                        </th>
                        <th scope="col"
                            class="px-3 py-3.5 text-left text-sm font-semibold text-slate-100">Message
                        </th>
                        <th scope="col"
                            class="px-3 py-3.5 text-left text-sm font-semibold text-slate-100">Submitted At
                        </th>
                    </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200 bg-white ">
                    @foreach ($records->items() as $record)

                        <tr>
                            <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                <div class="text-gray-900 font-medium">
                                    {{ $record->user->name }}
                                </div>
                            </td>

                            <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                {{ $record->type }}
                            </td>
                            <td class="whitespace-nowrap py-5 pl-4 pr-3 text-sm sm:pl-0">
                                {{$record->message}}

                            </td>


                            <td class="whitespace-nowrap px-3 py-5 text-sm text-gray-500">
                                {{ $record->created_at }}
                            </td>


                        </tr>
                    @endforeach
                    </tbody>

                </table>

                {{$records->links()}}
            </div>
        </div>
    </div>
</x-admin-layout>
