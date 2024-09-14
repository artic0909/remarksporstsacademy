<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('About') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6" style="overflow-y: auto; height: 700px; width: 100%; -ms-overflow-style: none; scrollbar-width: none; background: white;">



                    <!-- ==============================banners part start================================== -->
                    <div class="ad_banners_main">
                        <div class="ad_banners_inner">
                            <div class="ad_heading d-flex justify-between">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Banners</h1>

                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModalAdd">
                                    <i class="fa-solid fa-plus"></i>
                                </button>

                                <!-- Add Banner Modal -->
                                <div class="modal fade" id="exampleModalAdd" tabindex="-1" aria-labelledby="exampleModalLabelAdd" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabelAdd">Add Banner</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('all_banners_add') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="mb-3">
                                                        <label for="bannerImage" class="form-label">Banner</label>
                                                        <input type="file" class="form-control" id="bannerImage" name="all_banner_image" aria-describedby="emailHelp">
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
                                                <th scope="col">Banners</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($aboutDatas as $banner)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>
                                                    <img src="{{ asset('storage/' . $banner->all_banner_image) }}" width="50" alt="" class="rounded-circle">
                                                </td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalEdit{{ $banner->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <!-- Edit Banner Modal -->
                                                    <div class="modal fade" id="exampleModalEdit{{ $banner->id }}" tabindex="-1" aria-labelledby="exampleModalLabelEdit{{ $banner->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabelEdit{{ $banner->id }}">Edit Banner</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('all_banners_update', $banner->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')
                                                                        <div class="mb-3">
                                                                            <label for="editBannerImage{{ $banner->id }}" class="form-label">Banner</label>
                                                                            <input type="file" class="form-control" id="editBannerImage{{ $banner->id }}" name="all_banner_image" aria-describedby="emailHelp">
                                                                        </div>
                                                                        <button type="submit" class="btn btn-success float-end">Submit</button>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <form action="{{ route('all_banners_delete', $banner->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="fa-solid fa-x"></i>
                                                        </button>
                                                    </form>
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













                    <!-- ==============================who we are part start================================== -->
                    <div class="ad_banners_main mt-5">
                        <div class="ad_banners_inner">
                            <div class="ad_heading d-flex justify-between">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Who We Are</h1>


                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal178tr56">
                                    <i class="fa-solid fa-plus"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal178tr56" tabindex="-1" aria-labelledby="exampleModalLabel178tr56" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel178tr56">Add Information</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('all_who_add') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <label for="who_image" id="who_image" class="form-label">Image</label>
                                                        <input type="file" class="form-control" id="who_image" name="who_image">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="who_title" class="form-label" id="who_title">Title</label>
                                                        <input type="text" name="who_title" class="form-control" id="who_title">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="who_desc" id="who_desc" class="form-label">Description</label>
                                                        <textarea type="text" name="who_desc" id="who_desc" class="form-control"></textarea>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="who_date" id="who_date" class="form-label">Date</label>
                                                        <input type="date" name="who_date" class="form-control" id="who_date">
                                                    </div>


                                                    <div class="mb-3">
                                                        <label for="who_time" id="who_time" class="form-label">Time</label>
                                                        <input type="time" name="who_time" class="form-control" id="who_time">
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
                                                <th scope="col">Images</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Time</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $aboutWhoDatas as $aboutWhoData)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td><img src="{{ asset('storage/' . $aboutWhoData->who_image) }}" alt="{{ $aboutWhoData->who_title }}" width="50" class="rounded-circle "></td>
                                                <td>{{ $aboutWhoData->who_title }}</td>
                                                <td>{{ $aboutWhoData->who_desc }}</td>
                                                <td>{{ $aboutWhoData->who_date }}</td>
                                                <td>{{ $aboutWhoData->who_time }}</td>
                                                <td>

                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalrspl8989upp{{$aboutWhoData->id}}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModalrspl8989upp{{$aboutWhoData->id}}" tabindex="-1" aria-labelledby="exampleModalLabelrspl8989upp{{$aboutWhoData->id}}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabelrspl8989upp{{$aboutWhoData->id}}">Edit Information</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('all_who_update', $aboutWhoData->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <div class="mb-3">
                                                                            <label for="who_image" class="form-label" id="who_image">Image</label>
                                                                            <input type="file" value="{{ $aboutWhoData->who_image }}" class="form-control" name="who_image" id="who_image">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="who_title" class="form-label" id="who_title">Title</label>
                                                                            <input type="text" value="{{ $aboutWhoData->who_title }}" class="form-control" name="who_title" id="who_title">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="who_desc" class="form-label" id="who_desc">Description</label>
                                                                            <textarea type="text" name="who_desc" id="who_desc" class="form-control">{{ $aboutWhoData->who_desc }}</textarea>
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="who_date" class="form-label" id="who_date">Date</label>
                                                                            <input type="date" value="{{ $aboutWhoData->who_date }}" class="form-control" name="who_date" id="who_date">
                                                                        </div>


                                                                        <div class="mb-3">
                                                                            <label for="who_time" class="form-label" id="who_time">Time</label>
                                                                            <input type="time" value="{{ $aboutWhoData->who_time }}" class="form-control" name="who_time" id="who_time">
                                                                        </div>

                                                                        <button type="submit" class="btn btn-success float-end">Submit</button>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSportsInfoModaltytytytyt{{ $aboutWhoData->id }}">
                                                        <i class="fa-solid fa-x"></i>
                                                    </button>

                                                    <!-- Delete Sports Information Modal -->
                                                    <div class="modal fade" id="deleteSportsInfoModaltytytytyt{{ $aboutWhoData->id }}" tabindex="-1" aria-labelledby="deleteSportsInfoLabeltytytytyt{{ $aboutWhoData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteSportsInfoLabeltytytytyt{{ $aboutWhoData->id }}">Confirm Delete</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this information?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('all_who_delete', $aboutWhoData->id) }}" method="POST">
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
                    <!-- ==============================who we are part end================================== -->















                    <!-- ==============================our mission part start================================== -->
                    <div class="ad_banners_main mt-5">
                        <div class="ad_banners_inner">
                            <div class="ad_heading d-flex justify-between">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Our Mission</h1>


                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal17812ip">
                                    <i class="fa-solid fa-plus"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal17812ip" tabindex="-1" aria-labelledby="exampleModalLabel17812ip" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel17812ip">Add Mission</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('all_mission_add') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <label for="mission" class="form-label" id="mission">Mission</label>
                                                        <textarea type="text" name="mission" id="mission" class="form-control"></textarea>
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
                                                <th scope="col">Missions</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $aboutMissionDatas as $aboutMissionData)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $aboutMissionData->mission }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal909090uppfdfdjgdfjikhgjihgjfdhgfd{{ $aboutMissionData->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal909090uppfdfdjgdfjikhgjihgjfdhgfd{{ $aboutMissionData->id }}" tabindex="-1" aria-labelledby="exampleModalLabel909090uppfdfdjgdfjikhgjihgjfdhgfd{{ $aboutMissionData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel909090uppfdfdjgdfjikhgjihgjfdhgfd{{ $aboutMissionData->id }}">Edit Mission</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('all_mission_update', $aboutMissionData->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <div class="mb-3">
                                                                            <label for="mission" id="mission" class="form-label">Misssion</label>
                                                                            <textarea type="text" name="mission" id="mission" class="form-control">{{ $aboutMissionData->mission }}</textarea>
                                                                        </div>

                                                                        <button type="submit" class="btn btn-success float-end">Submit</button>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSportsInfoModaltytytytyt45454545{{ $aboutMissionData->id }}">
                                                        <i class="fa-solid fa-x"></i>
                                                    </button>

                                                    <!-- Delete Sports Information Modal -->
                                                    <div class="modal fade" id="deleteSportsInfoModaltytytytyt45454545{{ $aboutMissionData->id }}" tabindex="-1" aria-labelledby="deleteSportsInfoLabeltytytytyt45454545{{ $aboutMissionData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteSportsInfoLabeltytytytyt45454545{{ $aboutMissionData->id }}">Confirm Delete</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this information?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('all_mission_delete', $aboutMissionData->id) }}" method="POST">
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
                    <!-- ==============================our mission part end================================== -->


















                    <!-- ==============================our vision part start================================== -->
                    <div class="ad_banners_main mt-5">
                        <div class="ad_banners_inner">
                            <div class="ad_heading d-flex justify-between">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Our Visions</h1>


                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal17812ipvision">
                                    <i class="fa-solid fa-plus"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal17812ipvision" tabindex="-1" aria-labelledby="exampleModalLabel17812ipvision" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel17812ipvision">Add Vision</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('all_vision_add') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <label for="vision" class="form-label" id="vision">Vision</label>
                                                        <textarea type="text" name="vision" id="vision" class="form-control"></textarea>
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
                                                <th scope="col">Visions</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $aboutVisionDatas as $aboutVisionData)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $aboutVisionData->vision }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal909090uppfdttttt12233{{ $aboutVisionData->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal909090uppfdttttt12233{{ $aboutVisionData->id }}" tabindex="-1" aria-labelledby="exampleModalLabel909090uppfdttttt12233{{ $aboutVisionData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel909090uppfdttttt12233{{ $aboutVisionData->id }}">Edit Visions</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('all_vision_update', $aboutVisionData->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <div class="mb-3">
                                                                            <label for="vision" id="vision" class="form-label">Visions</label>
                                                                            <textarea type="text" name="vision" id="vision" class="form-control">{{ $aboutVisionData->vision }}</textarea>
                                                                        </div>

                                                                        <button type="submit" class="btn btn-success float-end">Submit</button>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSportsInfoModalopinthechatsaklinmustak23243242{{ $aboutVisionData->id }}">
                                                        <i class="fa-solid fa-x"></i>
                                                    </button>

                                                    <!-- Delete Sports Information Modal -->
                                                    <div class="modal fade" id="deleteSportsInfoModalopinthechatsaklinmustak23243242{{ $aboutVisionData->id }}" tabindex="-1" aria-labelledby="deleteSportsInfoLabelopinthechatsaklinmustak23243242{{ $aboutVisionData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteSportsInfoLabelopinthechatsaklinmustak23243242{{ $aboutVisionData->id }}">Confirm Delete</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this information?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('all_vision_delete', $aboutVisionData->id) }}" method="POST">
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
                    <!-- ==============================our vision part end================================== -->











                    <!-- ==============================club ethics start================================== -->
                    <div class="ad_banners_main mt-5">
                        <div class="ad_banners_inner">
                            <div class="ad_heading d-flex justify-between">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Club Ethics</h1>


                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal17812ipvision123">
                                    <i class="fa-solid fa-plus"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal17812ipvision123" tabindex="-1" aria-labelledby="exampleModalLabel17812ipvision123" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel17812ipvision123">Add Ethics</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('all_clubEthics_add') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <label for="club_ethics" class="form-label" id="club_ethics">Ethics</label>
                                                        <textarea type="text" name="club_ethics" id="club_ethics" class="form-control"></textarea>
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
                                                <th scope="col">Ethics</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $aboutClubEthicsDatas as $aboutClubEthicsData)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop-> iteration}}</th>
                                                <td>{{ $aboutClubEthicsData->club_ethics}}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal909090u726ytytytyt{{$aboutClubEthicsData->id}}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModal909090u726ytytytyt{{$aboutClubEthicsData->id}}" tabindex="-1" aria-labelledby="exampleModalLabel909090u726ytytytyt{{$aboutClubEthicsData->id}}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel909090u726ytytytyt{{$aboutClubEthicsData->id}}">Edit Ethics</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('all_clubEthics_update', $aboutClubEthicsData->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <div class="mb-3">
                                                                            <label for="club_ethics" id="club_ethics" class="form-label">Ethics</label>
                                                                            <textarea type="text" name="club_ethics" id="club_ethics" class="form-control">{{ $aboutClubEthicsData->club_ethics}}</textarea>
                                                                        </div>

                                                                        <button type="submit" class="btn btn-success float-end">Submit</button>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSportsInfoModalcakeofmindopinthechat{{ $aboutClubEthicsData->id }}">
                                                        <i class="fa-solid fa-x"></i>
                                                    </button>

                                                    <!-- Delete Sports Information Modal -->
                                                    <div class="modal fade" id="deleteSportsInfoModalcakeofmindopinthechat{{ $aboutClubEthicsData->id }}" tabindex="-1" aria-labelledby="deleteSportsInfoLabelcakeofmindopinthechat{{ $aboutClubEthicsData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteSportsInfoLabelcakeofmindopinthechat{{ $aboutClubEthicsData->id }}">Confirm Delete</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this information?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('all_clubEthics_delete', $aboutClubEthicsData->id) }}" method="POST">
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
                    <!-- ==============================club ethics end================================== -->


















                    <!-- ==============================players ethics start================================== -->
                    <div class="ad_banners_main mt-5">
                        <div class="ad_banners_inner">
                            <div class="ad_heading d-flex justify-between">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Players Ethics</h1>


                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModalyoutube">
                                    <i class="fa-solid fa-plus"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModalyoutube" tabindex="-1" aria-labelledby="exampleModalLabelyoutube" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabelyoutube">Add Ethics</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('all_playerEthics_add') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <label for="player_ethics" class="form-label" id="player_ethics">Ethics</label>
                                                        <textarea type="text" name="player_ethics" id="player_ethics" class="form-control"></textarea>
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
                                                <th scope="col">Player Ethics</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($aboutPlayerEthicsDatas as $aboutPlayerEthicsData)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td>{{ $aboutPlayerEthicsData->player_ethics }}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalhogooo4545454{{ $aboutPlayerEthicsData->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModalhogooo4545454{{ $aboutPlayerEthicsData->id }}" tabindex="-1" aria-labelledby="exampleModalLabelhogooo4545454{{ $aboutPlayerEthicsData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabelhogooo4545454{{ $aboutPlayerEthicsData->id }}">Edit Player Ethics</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('all_playerEthics_update', $aboutPlayerEthicsData->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <div class="mb-3">
                                                                            <label for="player_ethics" id="player_ethics" class="form-label">Ethics</label>
                                                                            <textarea type="text" name="player_ethics" id="player_ethics" class="form-control">{{ $aboutPlayerEthicsData->player_ethics }}</textarea>
                                                                        </div>

                                                                        <button type="submit" class="btn btn-success float-end">Submit</button>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSportsInfoModalbabujugharpehaidear122323{{ $aboutPlayerEthicsData->id }}">
                                                        <i class="fa-solid fa-x"></i>
                                                    </button>

                                                    <!-- Delete Sports Information Modal -->
                                                    <div class="modal fade" id="deleteSportsInfoModalbabujugharpehaidear122323{{ $aboutPlayerEthicsData->id }}" tabindex="-1" aria-labelledby="deleteSportsInfoLabelbabujugharpehaidear122323{{ $aboutPlayerEthicsData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteSportsInfoLabelbabujugharpehaidear122323{{ $aboutPlayerEthicsData->id }}">Confirm Delete</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this information?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('all_playerEthics_delete', $aboutPlayerEthicsData->id) }}" method="POST">
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
                    <!-- ==============================players ethics end================================== -->



















                    <!-- ==============================About Founder part start================================== -->
                    <div class="ad_banners_main mt-5">
                        <div class="ad_banners_inner">
                            <div class="ad_heading d-flex justify-between">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">About Founder</h1>


                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal17812ipxp303030">
                                    <i class="fa-solid fa-plus"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal17812ipxp303030" tabindex="-1" aria-labelledby="exampleModalLabel17812ipxp303030" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel17812ipxp303030">Add Founder</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('all_founder_add') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <label for="founder_img" class="form-label" id="founder_img">Image</label>
                                                        <input type="file" class="form-control" name="founder_img" id="founder_img">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="founder_desc" class="form-label" id="founder_desc">Description</label>
                                                        <textarea type="text" name="founder_desc" id="founder_desc" class="form-control"></textarea>
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
                                                <th scope="col">Image</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach( $aboutFounderDatas as $aboutFounderData)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td><img src="{{ asset('storage/' . $aboutFounderData->founder_img) }}" alt="Founder Image" width="50" class="rounded-circle "></td>
                                                <td>{!! nl2br(e($aboutFounderData->founder_desc)) !!}</td>
                                                <td>
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalupp78ytyrtrytrgf{{ $aboutFounderData->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModalupp78ytyrtrytrgf{{ $aboutFounderData->id }}" tabindex="-1" aria-labelledby="exampleModalLabelupp78ytyrtrytrgf{{ $aboutFounderData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabelupp78ytyrtrytrgf{{ $aboutFounderData->id }}">Edit Founder's Details</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('all_founder_update', $aboutFounderData->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <div class="mb-3">
                                                                            <label for="founder_img" class="form-label" id="founder_img">Image</label>
                                                                            <input type="file" class="form-control" name="founder_img" id="founder_img">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="founder_desc" class="form-label" id="founder_desc">Description</label>
                                                                            <textarea type="text" name="founder_desc" id="founder_desc" class="form-control">{{ $aboutFounderData->founder_desc }}</textarea>
                                                                        </div>

                                                                        <button type="submit" class="btn btn-success float-end">Submit</button>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSportsInfoModalpollymer{{ $aboutFounderData->id }}">
                                                        <i class="fa-solid fa-x"></i>
                                                    </button>

                                                    <!-- Delete Sports Information Modal -->
                                                    <div class="modal fade" id="deleteSportsInfoModalpollymer{{ $aboutFounderData->id }}" tabindex="-1" aria-labelledby="deleteSportsInfoLabelpollymer{{ $aboutFounderData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteSportsInfoLabelpollymer{{ $aboutFounderData->id }}">Confirm Delete</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this information?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('all_founder_delete', $aboutFounderData->id) }}" method="POST">
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
                    <!-- ==============================About Founder part end================================== -->











                </div>
            </div>
        </div>
    </div>
</x-app-layout>