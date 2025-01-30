<x-app-layout>
    <x-slot name="header">
        Company Data
    </x-slot>
    <div class="relative md:pt-32 pb-32 pt-12">
        <div class="px-4 md:px-10 mx-auto w-full">
            <div>
                <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200 w-full">
                                        <thead>
                                        <tr>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Address
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Email
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Company Phone
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Supervisor
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Supervisor Phone
                                            </th>
                                            <th scope="col" class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Status
                                            </th>
                                            <th scope="col" width="100" class="px-6 py-3 bg-gray-50">

                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                        @forelse ($companies as $company)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $company->name }}
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $company->address }}
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $company->email }}
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $company->company_phone }}
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $company->supervisor }}
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                    {{ $company->supervisor_phone }}
                                                </td>

                                                @if(empty($company->status))
                                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                        Pending
                                                    </td>
                                                @else
                                                    @if($company->status == 1)
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-green-600">
                                                            Approved
                                                        </td>
                                                    @else
                                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-red-600">
                                                            Rejected
                                                        </td>
                                                    @endif
                                                @endif
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                                    <form action={{ route('company.markasapproved', $company->id) }} method="POST">
                                                        @method('PATCH')
                                                        @csrf
                                                        <button type="submit" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Approve</button>
                                                    </form>
                                                    <form action={{ route('company.markasrejected', $company->id) }} method="POST">
                                                        @method('PATCH')
                                                        @csrf
                                                        <button type="submit" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Reject</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">No Data</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"></td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900"></td>
                                            </tr>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
