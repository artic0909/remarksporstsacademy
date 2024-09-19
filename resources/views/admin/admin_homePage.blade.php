<x-app-layout>
    <x-slot name="header" style="background: #1f2937;">
        <h2 class="font-semibold text-xl " style="background: #1f2937; color: white;">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6" style="overflow-y: auto; height: 700px; width: 100%; -ms-overflow-style: none; scrollbar-width: none; background: white;">



                    <!-- ==============================banners part start================================== -->
                    <div class="ad_banners_main ">
                        <div class="ad_banners_inner">
                            <div class="ad_heading d-flex justify-between">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Banners</h1>


                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal123444444">
                                    <i class="fa-solid fa-plus"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal123444444" tabindex="-1" aria-labelledby="exampleModalLabel123444444" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel123444444">Add Banner</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('home_banner_data_add') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="banner_image" class="form-label" id="banner_image">Banner</label>
                                                        <input type="file" class="form-control" name="banner_image" id="banner_image">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="title" id="title" class="form-label">Title</label>
                                                        <input type="text" class="form-control" id="title" name="title">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="description" id="description" class="form-label">Description</label>
                                                        <textarea type="text" name="description" id="description" class="form-control"></textarea>
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
                                                <th scope="col">Banners</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($homeBannersDatas as $homeBannersData)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td><img src="{{ asset('storage/' . $homeBannersData->banner_image) }}" alt="{{ $homeBannersData->title }}" width="50" class="rounded-circle"></td>
                                                <td>{{ $homeBannersData->title }}</td>
                                                <td>{{ $homeBannersData->description }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $homeBannersData->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal{{ $homeBannersData->id }}" tabindex="-1" aria-labelledby="exampleModalLabel{{ $homeBannersData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel{{ $homeBannersData->id }}">Edit Banner</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('home_banner_data_update', $homeBannersData->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <div class="mb-3">
                                                                            <label for="banner_image" class="form-label">Banner</label>
                                                                            <input type="file" name="banner_image" class="form-control" id="banner_image">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="title" class="form-label">Title</label>
                                                                            <input type="text" name="title" value="{{ $homeBannersData->title }}" class="form-control" id="title">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="description" class="form-label">Description</label>
                                                                            <textarea name="description" id="description" class="form-control">{{ $homeBannersData->description }}</textarea>
                                                                        </div>

                                                                        <button type="submit" class="btn btn-success float-end">Submit</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger" href="#" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $homeBannersData->id }}">
                                                        <i class="fa-solid fa-x"></i>
                                                    </a>

                                                    <!-- Confirm Delete Modal -->
                                                    <div class="modal fade" id="confirmDeleteModal{{ $homeBannersData->id }}" tabindex="-1" aria-labelledby="confirmDeleteLabel{{ $homeBannersData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="confirmDeleteLabel{{ $homeBannersData->id }}">Confirm Delete</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this banner?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('home_banner_data_delete', $homeBannersData->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                                    </form>
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
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
                    <!-- ==============================banners part end================================== -->











                    <!-- ==============================our future focus part start================================== -->
                    <div class="ad_banners_main mt-5">
                        <div class="ad_banners_inner">
                            <div class="ad_heading d-flex justify-between">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Future Focus</h1>


                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal178">
                                    <i class="fa-solid fa-plus"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal178" tabindex="-1" aria-labelledby="exampleModalLabel178" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel178">Add Sports</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('future_focus_add') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="future_sports_icon" class="form-label" id="future_sports_icon">Icon</label>
                                                        <input type="file" class="form-control" name="future_sports_icon" id="future_sports_icon" aria-describedby="emailHelp">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="future_title" class="form-label" id="future_title">Title</label>
                                                        <input type="text" class="form-control" name="future_title" id="future_title">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="future_description" id="future_description" class="form-label">Description</label>
                                                        <textarea type="text" name="future_description" id="future_description" class="form-control"></textarea>
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
                                                <th scope="col">Sports Icon</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($homeFutureDatas as $homeFutureData)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td><img src="{{ asset('storage/' . $homeFutureData->future_sports_icon) }}" alt="{{ $homeFutureData->future_title }}" width="50" class="rounded-circle"></td>
                                                <td>{{ $homeFutureData->future_title }}</td>
                                                <td>{{ $homeFutureData->future_description }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModaldfdfdf{{ $homeFutureData->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModaldfdfdf{{ $homeFutureData->id }}" tabindex="-1" aria-labelledby="exampleModalLabeldfdfdf{{ $homeFutureData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabeldfdfdf{{ $homeFutureData->id }}">Edit Sports</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('future_focus_update', $homeFutureData->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <div class="mb-3">
                                                                            <label for="future_sports_icon{{ $homeFutureData->id }}" class="form-label">Icon</label>
                                                                            <input type="file" name="future_sports_icon" class="form-control" id="future_sports_icon{{ $homeFutureData->id }}">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="future_title{{ $homeFutureData->id }}" class="form-label">Title</label>
                                                                            <input type="text" name="future_title" value="{{ $homeFutureData->future_title }}" class="form-control" id="future_title{{ $homeFutureData->id }}">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="future_description{{ $homeFutureData->id }}" class="form-label">Description</label>
                                                                            <textarea name="future_description" id="future_description{{ $homeFutureData->id }}" class="form-control">{{ $homeFutureData->future_description }}</textarea>
                                                                        </div>

                                                                        <button type="submit" class="btn btn-success float-end">Submit</button>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <a class="btn btn-danger" href="#" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $homeFutureData->id }}">
                                                        <i class="fa-solid fa-x"></i>
                                                    </a>

                                                    <!-- Confirm Delete Modal -->
                                                    <div class="modal fade" id="confirmDeleteModal{{ $homeFutureData->id }}" tabindex="-1" aria-labelledby="confirmDeleteLabel{{ $homeFutureData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="confirmDeleteLabel{{ $homeFutureData->id }}">Confirm Delete</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this item?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('future_focus_delete', $homeFutureData->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('DELETE')
                                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                                    </form>
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
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
                    <!-- ==============================our future focus part end================================== -->













                    <!-- ==============================our collaboration part start================================== -->
                    <div class="ad_banners_main mt-5">
                        <div class="ad_banners_inner">
                            <div class="ad_heading d-flex justify-between">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Our Collaboration</h1>


                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal17856">
                                    <i class="fa-solid fa-plus"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal17856" tabindex="-1" aria-labelledby="exampleModalLabel17856" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel17856">Add Club or Brand</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('collaboration_add') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <label for="collab_logo" class="form-label" id="collab_logo">Club Logo</label>
                                                        <input type="file" name="collab_logo" class="form-control" id="collab_logo" aria-describedby="emailHelp">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="collab_name" class="form-label" id="collab_name">Name of the Club/Brand</label>
                                                        <input type="text" name="collab_name" class="form-control" id="collab_name">
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
                                                <th scope="col">Logo</th>
                                                <th scope="col">Club/Brand Name</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($homeCollabDatas as $homeCollabData)
                                            <tr class="align-middle">


                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td><img src="{{ asset('storage/' . $homeCollabData->collab_logo) }}" alt="{{ $homeCollabData->collab_name }}" width="50" class="rounded-circle "></td>
                                                <td>{{ $homeCollabData->collab_name }}</td>
                                                <td>


                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalup45xp{{$homeCollabData->id}}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModalup45xp{{$homeCollabData->id}}" tabindex="-1" aria-labelledby="exampleModalLabelup45xp{{$homeCollabData->id}}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabelup45xp{{$homeCollabData->id}}">Edit Club or Brand</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('collaboration_update', $homeCollabData->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="mb-3">
                                                                            <label for="collab_logo" class="form-label">Club Logo</label>
                                                                            <input type="file" name="collab_logo" class="form-control" id="collab_logo" aria-describedby="emailHelp">
                                                                        </div>
                                                                        <div class="mb-3">
                                                                            <label for="collab_name" class="form-label">Name of the Club/Brand</label>
                                                                            <input type="text" name="collab_name" value="{{ $homeCollabData->collab_name }}" class="form-control" id="collab_name">
                                                                        </div>
                                                                        <button type="submit" class="btn btn-success float-end">Submit</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                                <td>
                                                    <!-- Button trigger modal for Delete -->
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $homeCollabData->collab_name }}">
                                                        <i class="fa-solid fa-x"></i>
                                                    </button>

                                                    <!-- Confirm Delete Modal -->
                                                    <div class="modal fade" id="confirmDeleteModal{{ $homeCollabData->collab_name }}" tabindex="-1" aria-labelledby="confirmDeleteLabel{{ $homeCollabData->collab_name }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="confirmDeleteLabel{{ $homeCollabData->collab_name }}">Confirm Delete</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this item?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('collaboration_delete', $homeCollabData->id) }}" method="POST">
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
                    <!-- ==============================our collaboration part end================================== -->
















                    <!-- ==============================Direct Links part start================================== -->
                    <div class="ad_banners_main mt-5">
                        <div class="ad_banners_inner">
                            <div class="ad_heading">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Direct Links</h1>
                            </div>

                            <!-- content part -->
                            <div class="ad_banners_content">
                                <div class="ad_banners_content_inner">


                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Contact Number</th>
                                                <th scope="col">Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($homeComapanyDatas as $homeCompanyData)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $homeCompanyData->company_email }}</td>
                                                <td>{{ $homeCompanyData->company_phone }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalupp{{ $homeCompanyData->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModalupp{{ $homeCompanyData->id }}" tabindex="-1" aria-labelledby="exampleModalLabelupp{{ $homeCompanyData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabelupp{{ $homeCompanyData->id }}">Edit Direct Links</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('company_details_update', $homeCompanyData->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <div class="mb-3">
                                                                            <label for="email{{ $homeCompanyData->id }}" class="form-label">Email ID</label>
                                                                            <input type="email" class="form-control" id="email{{ $homeCompanyData->id }}" name="company_email" value="{{ $homeCompanyData->company_email }}" aria-describedby="emailHelp">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="phone{{ $homeCompanyData->id }}" class="form-label">Contact Number</label>
                                                                            <input type="text" class="form-control" id="phone{{ $homeCompanyData->id }}" name="company_phone" value="{{ $homeCompanyData->company_phone }}">
                                                                        </div>

                                                                        <button type="submit" class="btn btn-success float-end">Submit</button>
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
                    <!-- ==============================Direct Links part end================================== -->

















                    <!-- ==============================our sports info catecory part start================================== -->
                    <div class="ad_banners_main mt-5">
                        <div class="ad_banners_inner">
                            <div class="ad_heading d-flex justify-between">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Sports Categories</h1>


                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal17812">
                                    <i class="fa-solid fa-plus"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal17812" tabindex="-1" aria-labelledby="exampleModalLabel17812" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel17812">Add Category</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('sports_category_add') }}" method="POST">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="category_name" class="form-label">Category</label>
                                                        <input type="text" class="form-control" id="category_name" name="category_name" required>
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
                                            @foreach($homeSportsCategoryDatas as $homeSportsCategoryData)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $homeSportsCategoryData->category_name }}</td>
                                                <td>
                                                    <!-- Button trigger modal for Edit Category -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editCategoryModal{{ $homeSportsCategoryData->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <!-- Edit Category Modal -->
                                                    <div class="modal fade" id="editCategoryModal{{ $homeSportsCategoryData->id }}" tabindex="-1" aria-labelledby="editCategoryLabel{{ $homeSportsCategoryData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editCategoryLabel{{ $homeSportsCategoryData->id }}">Edit Category</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('sports_category_update', $homeSportsCategoryData->id) }}" method="POST">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="mb-3">
                                                                            <label for="category_name" class="form-label">Category</label>
                                                                            <input type="text" class="form-control" id="category_name" name="category_name" value="{{ $homeSportsCategoryData->category_name }}" required>
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
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal{{ $homeSportsCategoryData->id }}">
                                                        <i class="fa-solid fa-x"></i>
                                                    </button>

                                                    <!-- Delete Category Modal -->
                                                    <div class="modal fade" id="deleteCategoryModal{{ $homeSportsCategoryData->id }}" tabindex="-1" aria-labelledby="deleteCategoryLabel{{ $homeSportsCategoryData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteCategoryLabel{{ $homeSportsCategoryData->id }}">Confirm Delete</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this category?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('sports_category_delete', $homeSportsCategoryData->id) }}" method="POST">
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
                    <!-- ==============================our sports info catecory part end================================== -->












                    <!-- ==============================our sports information part start================================== -->
                    <div class="ad_banners_main mt-5">
                        <div class="ad_banners_inner">
                            <div class="ad_heading d-flex justify-between">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Sports Information</h1>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal" data-bs-target="#addInformationModalxyzz">
                                    <i class="fa-solid fa-plus"></i>
                                </button>

                                <!-- Add Information Modal -->
                                <div class="modal fade" id="addInformationModalxyzz" tabindex="-1" aria-labelledby="addInformationModalLabelxyzz" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addInformationModalLabelxyzz">Add Information</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('sports_information_add') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="sports_image" class="form-label">Image</label>
                                                        <input type="file" name="sports_image" class="form-control" id="sports_image" aria-describedby="imageHelp">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="sports_category" class="form-label">Category</label>
                                                        <select class="form-select" name="sports_category" id="sports_category">
                                                            <option selected value="">Select Category</option>
                                                            @foreach($homeSportsCategoryDatas as $homeSportsCategoryData)
                                                            <option value="{{ $homeSportsCategoryData->category_name }}">{{ $homeSportsCategoryData->category_name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="sports_title" class="form-label">Title</label>
                                                        <input type="text" name="sports_title" class="form-control" id="sports_title">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="sports_description" class="form-label">Description</label>
                                                        <textarea name="sports_description" id="sports_description" class="form-control"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="sports_date" class="form-label">Date</label>
                                                        <input type="date" name="sports_date" class="form-control" id="sports_date">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="sports_time" class="form-label">Time</label>
                                                        <input type="time" name="sports_time" class="form-control" id="sports_time">
                                                    </div>

                                                    <button type="submit" class="btn btn-success float-end">Submit</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!-- Content part -->
                            <div class="ad_banners_content">
                                <div class="ad_banners_content_inner">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Images</th>
                                                <th scope="col">Category</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($homeSportsInformationDatas as $homeSportsInformationData)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>
                                                    <img src="{{ asset('storage/' . $homeSportsInformationData->sports_image) }}" alt="{{ $homeSportsInformationData->sports_title }}" width="50" class="rounded-circle">
                                                </td>
                                                <td>{{ $homeSportsInformationData->sports_category }}</td>
                                                <td>{{ $homeSportsInformationData->sports_title }}</td>
                                                <td>{{ $homeSportsInformationData->sports_description }}</td>
                                                <td>{{ $homeSportsInformationData->sports_date }}</td>
                                                <td>{{ $homeSportsInformationData->sports_time }}</td>
                                                <td>
                                                    <!-- Edit Sports Information Modal Trigger -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editSportsInfoModalzzzzzzzz{{ $homeSportsInformationData->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <!-- Edit Sports Information Modal -->
                                                    <div class="modal fade" id="editSportsInfoModalzzzzzzzz{{ $homeSportsInformationData->id }}" tabindex="-1" aria-labelledby="editSportsInfoModalLabelzzzzzzzz{{ $homeSportsInformationData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="editSportsInfoModalLabelzzzzzzzz{{ $homeSportsInformationData->id }}">Edit Information</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('sports_information_update', $homeSportsInformationData->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <div class="mb-3">
                                                                            <label for="sports_image{{ $homeSportsInformationData->id }}" class="form-label">Image</label>
                                                                            <input type="file" class="form-control" id="sports_image{{ $homeSportsInformationData->id }}" name="sports_image">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="sports_category{{ $homeSportsInformationData->id }}" class="form-label">Category</label>
                                                                            <select class="form-select" name="sports_category" id="sports_category{{ $homeSportsInformationData->id }}">
                                                                                <option value="{{ $homeSportsInformationData->sports_category }}" selected>{{ $homeSportsInformationData->sports_category }}</option>
                                                                                @foreach($homeSportsCategoryDatas as $homeSportsCategoryData)
                                                                                <option value="{{ $homeSportsCategoryData->category_name }}">{{ $homeSportsCategoryData->category_name }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="sports_title{{ $homeSportsInformationData->id }}" class="form-label">Title</label>
                                                                            <input type="text" class="form-control" id="sports_title{{ $homeSportsInformationData->id }}" name="sports_title" value="{{ $homeSportsInformationData->sports_title }}">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="sports_description{{ $homeSportsInformationData->id }}" class="form-label">Description</label>
                                                                            <textarea name="sports_description" id="sports_description{{ $homeSportsInformationData->id }}" class="form-control">{{ $homeSportsInformationData->sports_description }}</textarea>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="sports_date{{ $homeSportsInformationData->id }}" class="form-label">Date</label>
                                                                            <input type="date" class="form-control" name="sports_date" id="sports_date{{ $homeSportsInformationData->id }}" value="{{ $homeSportsInformationData->sports_date }}">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="sports_time{{ $homeSportsInformationData->id }}" class="form-label">Time</label>
                                                                            <input type="time" class="form-control" id="sports_time{{ $homeSportsInformationData->id }}" name="sports_time" value="{{ $homeSportsInformationData->sports_time }}">
                                                                        </div>

                                                                        <button type="submit" class="btn btn-success float-end">Submit</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <!-- Delete Sports Information Modal Trigger -->
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSportsInfoModal{{ $homeSportsInformationData->id }}">
                                                        <i class="fa-solid fa-x"></i>
                                                    </button>

                                                    <!-- Delete Sports Information Modal -->
                                                    <div class="modal fade" id="deleteSportsInfoModal{{ $homeSportsInformationData->id }}" tabindex="-1" aria-labelledby="deleteSportsInfoModalLabel{{ $homeSportsInformationData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteSportsInfoModalLabel{{ $homeSportsInformationData->id }}">Confirm Delete</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this sports information?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('sports_information_delete', $homeSportsInformationData->id) }}" method="POST">
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
                    <!-- ==============================our sports information part end================================== -->





















               















                </div>
            </div>
        </div>
    </div>
</x-app-layout>