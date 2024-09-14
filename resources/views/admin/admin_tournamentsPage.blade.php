<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tournaments') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6" style="overflow-y: auto; height: 700px; width: 100%; -ms-overflow-style: none; scrollbar-width: none; background: white;">







                    <!-- ==============================Category Add table part start================================== -->
                    <div class="ad_banners_main mt-5">
                        <div class="ad_banners_inner">
                            <div class="ad_heading d-flex justify-between">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Sports Category</h1>


                                <!-- Modal -->
                                <button type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal17812tttttt">
                                    <i class="fa-solid fa-plus"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal17812tttttt" tabindex="-1" aria-labelledby="exampleModalLabel17812tttttt" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel17812tttttt">Add Category</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('tournaments_category_add') }}" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="t_category" class="form-label">Category</label>
                                                        <input type="text" class="form-control" id="t_category" name="t_category" required>
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
                                                <th scope="col">Categories</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tournamentsCategoryDatas as $tournamentsCategoryData)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $tournamentsCategoryData->t_category }}</td>
                                                <td>
                                                    <!-- Button trigger modal for Edit Category -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editCategoryModalgoriyaretiru74577548{{ $tournamentsCategoryData->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <!-- Edit Category Modal -->
                                                    <div class="modal fade" id="editCategoryModalgoriyaretiru74577548{{ $tournamentsCategoryData->id }}" tabindex="-1" aria-labelledby="editCategoryLabelgoriyaretiru74577548{{ $tournamentsCategoryData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editCategoryLabelgoriyaretiru74577548{{ $tournamentsCategoryData->id }}">Edit Category</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('tournaments_category_update', $tournamentsCategoryData->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="mb-3">
                                                                            <label for="t_category" class="form-label">Category</label>
                                                                            <input type="text" class="form-control" id="t_category" name="t_category" value="{{ $tournamentsCategoryData->t_category }}" required>
                                                                        </div>
                                                                        <button type="submit" class="btn btn-success float-end">Submit</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal for Delete Category -->
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal{{ $tournamentsCategoryData->id }}">
                                                        <i class="fa-solid fa-x"></i>
                                                    </button>

                                                    <!-- Delete Category Modal -->
                                                    <div class="modal fade" id="deleteCategoryModal{{ $tournamentsCategoryData->id }}" tabindex="-1" aria-labelledby="deleteCategoryLabel{{ $tournamentsCategoryData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteCategoryLabel{{ $tournamentsCategoryData->id }}">Confirm Delete</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this category?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('tournaments_category_delete', $tournamentsCategoryData->id) }}" method="POST">
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
                    <!-- ==============================Category Add table part end================================== -->










                    <!-- ==============================Tournaments information part start================================== -->
                    <div class="ad_banners_main mt-5">
                        <div class="ad_banners_inner">
                            <div class="ad_heading d-flex justify-between">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Tournament Information</h1>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal" data-bs-target="#addTournamentModal">
                                    <i class="fa-solid fa-plus"></i>
                                </button>

                                <!-- Modal for Adding Information -->
                                <div class="modal fade" id="addTournamentModal" tabindex="-1" aria-labelledby="addTournamentModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addTournamentModalLabel">Add Information</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('all_tournamentDestails_add') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <select class="form-select" id="add_td_category" name="td_category" aria-label="Default select example">
                                                            <option selected>Select Category</option>
                                                            @foreach($tournamentsCategoryDatas as $tournamentsCategoryData)
                                                            <option value="{{ $tournamentsCategoryData->t_category }}">{{ $tournamentsCategoryData->t_category }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="add_td_image" class="form-label">Image</label>
                                                        <input type="file" class="form-control" name="td_image" id="add_td_image">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="add_td_title" class="form-label">Title</label>
                                                        <input type="text" class="form-control" name="td_title" id="add_td_title">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="add_td_address" class="form-label">Address</label>
                                                        <textarea name="td_add" id="add_td_address" class="form-control"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="add_td_date" class="form-label">Date</label>
                                                        <input type="date" class="form-control" name="td_date" id="add_td_date">
                                                    </div>

                                                    <div class="mb-3">
                                                        <select class="form-select" id="add_td_time" name="td_time" aria-label="Default select example">
                                                            <option selected>Time</option>
                                                            <option value="day">Day</option>
                                                            <option value="night">Night</option>
                                                            <option value="day-night">Day - Night</option>
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="add_td_desc" class="form-label">Description</label>
                                                        <textarea name="td_desc" id="add_td_desc" class="form-control"></textarea>
                                                    </div>

                                                    <button type="submit" class="btn btn-success float-end">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Content Part -->
                            <div class="ad_banners_content">
                                <div class="ad_banners_content_inner">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Categories</th>
                                                <th scope="col">Images</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tournamentsDetailsDatas as $tournamentsDetailsData)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $tournamentsDetailsData->td_category }}</td>
                                                <td><img src="{{ asset('storage/' . $tournamentsDetailsData->td_image) }}" width="50" alt="" class="rounded-circle"></td>
                                                <td>{{ $tournamentsDetailsData->td_title }}</td>
                                                <td>{{ $tournamentsDetailsData->td_add }}</td>
                                                <td>{{ $tournamentsDetailsData->td_date }}</td>
                                                <td>{{ $tournamentsDetailsData->td_time }}</td>
                                                <td>{{ $tournamentsDetailsData->td_desc }}</td>
                                                <td>
                                                    <!-- Button trigger modal for editing -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editTournamentModalfdgdfg{{ $tournamentsDetailsData->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <!-- Modal for Editing Information -->
                                                    <div class="modal fade" id="editTournamentModalfdgdfg{{ $tournamentsDetailsData->id }}" tabindex="-1" aria-labelledby="editTournamentModalLabelfdgdfg{{ $tournamentsDetailsData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editTournamentModalLabelfdgdfg{{ $tournamentsDetailsData->id }}">Edit Information</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('all_tournamentDestails_update', $tournamentsDetailsData->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <!-- Category Selection -->
                                                                        <div class="mb-3">
                                                                            <label for="td_category{{ $tournamentsDetailsData->id }}" class="form-label">Category</label>
                                                                            <select class="form-select" name="td_category" id="td_category{{ $tournamentsDetailsData->id }}" required>
                                                                                @foreach($tournamentsCategoryDatas as $tournamentsCategoryData)
                                                                                <option value="{{ $tournamentsCategoryData->t_category }}" {{ $tournamentsDetailsData->td_category === $tournamentsCategoryData->t_category ? 'selected' : '' }}>
                                                                                    {{ $tournamentsCategoryData->t_category }}
                                                                                </option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>

                                                                        <!-- Image Upload -->
                                                                        <div class="mb-3">
                                                                            <label for="td_image{{ $tournamentsDetailsData->id }}" class="form-label">Image</label>
                                                                            <input type="file" class="form-control" id="td_image{{ $tournamentsDetailsData->id }}" name="td_image">
                                                                            @if($tournamentsDetailsData->td_image)
                                                                            <small class="text-muted">Current Image: {{ basename($tournamentsDetailsData->td_image) }}</small>
                                                                            @endif
                                                                        </div>

                                                                        <!-- Title -->
                                                                        <div class="mb-3">
                                                                            <label for="td_title{{ $tournamentsDetailsData->id }}" class="form-label">Title</label>
                                                                            <input type="text" class="form-control" id="td_title{{ $tournamentsDetailsData->id }}" name="td_title" value="{{ $tournamentsDetailsData->td_title }}" required>
                                                                        </div>

                                                                        <!-- Address -->
                                                                        <div class="mb-3">
                                                                            <label for="td_add{{ $tournamentsDetailsData->id }}" class="form-label">Address</label>
                                                                            <textarea name="td_add" id="td_add{{ $tournamentsDetailsData->id }}" class="form-control" required>{{ $tournamentsDetailsData->td_add }}</textarea>
                                                                        </div>

                                                                        <!-- Date -->
                                                                        <div class="mb-3">
                                                                            <label for="td_date{{ $tournamentsDetailsData->id }}" class="form-label">Date</label>
                                                                            <input type="date" class="form-control" id="td_date{{ $tournamentsDetailsData->id }}" name="td_date" value="{{ $tournamentsDetailsData->td_date }}" required>
                                                                        </div>

                                                                        <!-- Time Selection -->
                                                                        <div class="mb-3">
                                                                            <label for="td_time{{ $tournamentsDetailsData->id }}" class="form-label">Time</label>
                                                                            <select class="form-select" id="td_time{{ $tournamentsDetailsData->id }}" name="td_time" required>
                                                                                <option value="day" {{ $tournamentsDetailsData->td_time === 'day' ? 'selected' : '' }}>Day</option>
                                                                                <option value="night" {{ $tournamentsDetailsData->td_time === 'night' ? 'selected' : '' }}>Night</option>
                                                                                <option value="day-night" {{ $tournamentsDetailsData->td_time === 'day-night' ? 'selected' : '' }}>Day - Night</option>
                                                                            </select>
                                                                        </div>

                                                                        <!-- Description -->
                                                                        <div class="mb-3">
                                                                            <label for="td_desc{{ $tournamentsDetailsData->id }}" class="form-label">Description</label>
                                                                            <textarea name="td_desc" id="td_desc{{ $tournamentsDetailsData->id }}" class="form-control" required>{{ $tournamentsDetailsData->td_desc }}</textarea>
                                                                        </div>

                                                                        <!-- Submit Button -->
                                                                        <button type="submit" class="btn btn-success float-end">Submit</button>
                                                                    </form>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteTournamentModal11{{ $tournamentsDetailsData->id }}">
                                                        <i class="fa-solid fa-x"></i>
                                                    </button>

                                                    <!-- Delete Tournament Information Modal -->
                                                    <div class="modal fade" id="deleteTournamentModal11{{ $tournamentsDetailsData->id }}" tabindex="-1" aria-labelledby="deleteTournamentModalLabel11{{ $tournamentsDetailsData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteTournamentModalLabel11{{ $tournamentsDetailsData->id }}">Confirm Delete</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this information?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('all_tournamentDestails_delete', $tournamentsDetailsData->id) }}" method="POST">
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

                    <!-- ==============================Tournaments information part end================================== -->








                    <!-- ==============================Add Teams part start================================== -->
                    <!-- <div class="ad_banners_main mt-5">
                        <div class="ad_banners_inner">
                            <div class="ad_heading d-flex justify-between">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Played Teams</h1>


                                <button type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModalyoutubeopptpp">
                                    <i class="fa-solid fa-plus"></i>
                                </button>

                                <div class="modal fade" id="exampleModalyoutubeopptpp" tabindex="-1" aria-labelledby="exampleModalLabelyoutubeopptpp" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabelyoutubeopptpp">Add Team</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('tournaments_team_add') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <label for="team" class="form-label" id="team">Team Name</label>
                                                        <input type="text" name="team" id="team" class="form-control">
                                                    </div>

                                                    <button type="submit" class="btn btn-success float-end">Submit</button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="ad_banners_content">
                                <div class="ad_banners_content_inner">


                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Teams</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($tournamentsPlayedTeamDatas as $tournamentsPlayedTeamData)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop->iteration}}</th>
                                                <td>{{ $tournamentsPlayedTeamData->team }}</td>
                                                <td>
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalupp78tpp111upophp{{ $tournamentsPlayedTeamData->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i></i>
                                                    </button>

                                                    <div class="modal fade" id="exampleModalupp78tpp111upophp{{ $tournamentsPlayedTeamData->id }}" tabindex="-1" aria-labelledby="exampleModalLabelupp78tpp111upophp{{ $tournamentsPlayedTeamData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabelupp78tpp111upophp{{ $tournamentsPlayedTeamData->id }}">Edit Team</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('tournaments_team_update', $tournamentsPlayedTeamData->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="mb-3">
                                                                            <label for="team" class="form-label" id="team">Team Name</label>
                                                                            <input type="text" name="team" id="team" class="form-control" value="{{ $tournamentsPlayedTeamData->team }}">
                                                                        </div>

                                                                        <button type="submit" class="btn btn-success float-end">Submit</button>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSportsInfoModalmenoktoripyml{{ $tournamentsPlayedTeamData->id }}">
                                                        <i class="fa-solid fa-x"></i>
                                                    </button>

                                                    <div class="modal fade" id="deleteSportsInfoModalmenoktoripyml{{ $tournamentsPlayedTeamData->id }}" tabindex="-1" aria-labelledby="deleteSportsInfoLabelmenoktoripyml{{ $tournamentsPlayedTeamData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteSportsInfoLabelmenoktoripyml{{ $tournamentsPlayedTeamData->id }}">Confirm Delete</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this information?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('tournaments_team_delete', $tournamentsPlayedTeamData->id) }}" method="POST">
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
                    </div> -->
                    <!-- ==============================Add Teams part end================================== -->





                </div>
            </div>
        </div>
    </div>
</x-app-layout>