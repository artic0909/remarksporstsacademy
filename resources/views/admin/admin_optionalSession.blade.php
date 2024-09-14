<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Optional Session') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6" style="overflow-y: auto; height: 700px; width: 100%; -ms-overflow-style: none; scrollbar-width: none; background: white;">







                    <!-- ==============================Normal Session table part start================================== -->
                    <div class="ad_banners_main mt-5">
                        <div class="ad_banners_inner">
                            <div class="ad_heading d-flex justify-between">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Optional Session Table</h1>


                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModalyoutube12">
                                    <i class="fa-solid fa-plus"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalyoutube12" tabindex="-1" aria-labelledby="exampleModalLabelyoutube12" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabelyoutube12">Add Session Data</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('all_optionalSession_add') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf


                                                    <div class="mb-3">
                                                        <label for="ps_icons" class="form-label" id="ps_icons">Icon</label>
                                                        <input type="file" name="ps_icons" id="ps_icons" class="form-control">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="ps_desc" class="form-label" id="ps_desc">Description</label>
                                                        <textarea type="text" name="ps_desc" id="ps_desc" class="form-control"></textarea>
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
                                            @foreach($optionalSessionDatas as $optionalSessionData)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td><img src="{{ asset('storage/' . $optionalSessionData->ps_icons) }}" width="60" alt="" class="rounded-circle"></td>
                                                <td>{{$optionalSessionData->ps_desc}}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModaluhuopinthechat556465{{ $optionalSessionData->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModaluhuopinthechat556465{{ $optionalSessionData->id }}" tabindex="-1" aria-labelledby="exampleModalLabeluhuopinthechat556465{{ $optionalSessionData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabeluhuopinthechat556465{{ $optionalSessionData->id }}">Edit Session Data</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('all_optionalSession_update', $optionalSessionData->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <div class="mb-3">
                                                                            <label for="ps_icons" id="ps_icons" class="form-label">Icon</label>
                                                                            <input type="file" name="ps_icons" id="ps_icons" class="form-control" value="{{ $optionalSessionData->ps_icons }}">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="ps_desc" class="form-label" id="ps_desc">Description</label>
                                                                            <textarea type="text" name="ps_desc" id="ps_desc" class="form-control">{{ $optionalSessionData->ps_desc }}</textarea>
                                                                        </div>

                                                                        <button type="submit" class="btn btn-success float-end">Submit</button>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSportsInfoModalxmlytb4654765{{ $optionalSessionData->id }}">
                                                        <i class="fa-solid fa-x"></i>
                                                    </button>

                                                    <!-- Delete Sports Information Modal -->
                                                    <div class="modal fade" id="deleteSportsInfoModalxmlytb4654765{{ $optionalSessionData->id }}" tabindex="-1" aria-labelledby="deleteSportsInfoLabelxmlytb4654765{{ $optionalSessionData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteSportsInfoLabelxmlytb4654765{{ $optionalSessionData->id }}">Confirm Delete</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this information?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('all_optionalSession_delete', $optionalSessionData->id) }}" method="POST">
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