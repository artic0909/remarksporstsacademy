<x-app-layout>
    <x-slot name="header" style="background: #1f2937;">
        <h2 class="font-semibold text-xl " style="background: #1f2937; color: white;">
            {{ __("Users's Support") }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6" style="overflow-y: auto; height: 700px; width: 100%; -ms-overflow-style: none; scrollbar-width: none; background: white;">






                    <!-- ==============================Users support part start================================== -->
                    <div class="ad_banners_main mt-5">
                        <div class="ad_banners_inner">
                            <div class="ad_heading d-flex justify-between">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">User's Requests</h1>
                            </div>

                            <!-- content part -->
                            <div class="ad_banners_content">
                                <div class="ad_banners_content_inner">


                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">First Name</th>
                                                <th scope="col">Last Name</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">Email ID</th>
                                                <th scope="col">Contact NO</th>
                                                <th scope="col">Queries</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($supportDatas as $supportData)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $supportData->f_name }}</td>
                                                <td>{{ $supportData->l_name }}</td>
                                                <td>{{ $supportData->add }}</td>
                                                <td>{{ $supportData->email }}</td>
                                                <td>{{ $supportData->contact }}</td>
                                                <td>{{ $supportData->message }}</td>

                                                <td>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSportsInfoModalgoriyapenlontechopicdentureyyyyy{{ $supportData->id }}">
                                                        <i class="fa-solid fa-x"></i>
                                                    </button>

                                                    <!-- Delete Sports Information Modal -->
                                                    <div class="modal fade" id="deleteSportsInfoModalgoriyapenlontechopicdentureyyyyy{{ $supportData->id }}" tabindex="-1" aria-labelledby="deleteSportsInfoLabelgoriyapenlontechopicdentureyyyyy{{ $supportData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteSportsInfoLabelgoriyapenlontechopicdentureyyyyy{{ $supportData->id }}">Confirm Delete</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this information?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('all_contactSupport_delete', $supportData->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
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
                    <!-- ==============================Users support part end================================== -->



                </div>
            </div>
        </div>
    </div>
</x-app-layout>