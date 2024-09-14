<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Normal Session') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6" style="overflow-y: auto; height: 700px; width: 100%; -ms-overflow-style: none; scrollbar-width: none; background: white;">







                    <!-- ==============================Normal Session table part start================================== -->
                    <div class="ad_banners_main mt-5">
                        <div class="ad_banners_inner">
                            <div class="ad_heading d-flex justify-between">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Normal Session Table</h1>


                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModalyoutube1">
                                    <i class="fa-solid fa-plus"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalyoutube1" tabindex="-1" aria-labelledby="exampleModalLabelyoutube1" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabelyoutube1">Add Session Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('all_normalSession_add') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <label for="ns_icons" class="form-label" id="ns_icons">Icon</label>
                                                        <input type="file" name="ns_icons" id="ns_icons" class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="ns_desc" class="form-label" id="ns_desc">Description</label>
                                                        <textarea type="text" name="ns_desc" id="ns_desc" class="form-control"></textarea>
                                                    </div>

                                                    <button type="submit" class="btn btn-success float-end">Submit</button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- content part -->
                            <div class="ad_banners_content">
                                <div class="ad_banners_content_inner">


                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Icons</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($normalSessionDatas as $normalSessionData)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td><img src="{{ asset('storage/' . $normalSessionData->ns_icons) }}" width="60" alt="" class="rounded-circle"></td>
                                                <td>{{$normalSessionData->ns_desc}}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModaluhuopinthechat{{ $normalSessionData->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModaluhuopinthechat{{ $normalSessionData->id }}" tabindex="-1" aria-labelledby="exampleModalLabeluhuopinthechat{{ $normalSessionData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabeluhuopinthechat{{ $normalSessionData->id }}">Edit Session Data</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('all_normalSession_update', $normalSessionData->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <div class="mb-3">
                                                                            <label for="ns_icons" id="ns_icons" class="form-label">Icon</label>
                                                                            <input type="file" name="ns_icons" id="ns_icons" class="form-control" value="{{ $normalSessionData->ns_icons }}">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="ns_desc" class="form-label" id="ns_desc">Description</label>
                                                                            <textarea type="text" name="ns_desc" id="ns_desc" class="form-control">{{ $normalSessionData->ns_desc }}</textarea>
                                                                        </div>

                                                                        <button type="submit" class="btn btn-success float-end">Submit</button>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSportsInfoModalxmlytb4{{ $normalSessionData->id }}">
                                                        <i class="fa-solid fa-x"></i>
                                                    </button>

                                                    <!-- Delete Sports Information Modal -->
                                                    <div class="modal fade" id="deleteSportsInfoModalxmlytb4{{ $normalSessionData->id }}" tabindex="-1" aria-labelledby="deleteSportsInfoLabelxmlytb4{{ $normalSessionData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteSportsInfoLabelxmlytb4{{ $normalSessionData->id }}">Confirm Delete</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this information?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('all_normalSession_delete', $normalSessionData->id) }}" method="POST">
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
                    <!-- ==============================Normal Session table part end================================== -->











                </div>
            </div>
        </div>
    </div>
</x-app-layout>