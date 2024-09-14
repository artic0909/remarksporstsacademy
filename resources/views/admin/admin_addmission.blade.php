<x-app-layout>
    <x-slot name="header" style="background: #1f2937;">
        <h2 class="font-semibold text-xl " style="background: #1f2937; color: white;">
            {{ __('Admission Requests') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6" style="overflow-y: auto; overflow-x: auto; height: 700px; width: 100%;  background: white;">






                    <!-- ==============================Upload Products part start================================== -->
                    <div class="ad_banners_main mt-5">
                        <div class="ad_banners_inner">
                            <div class="ad_heading">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Student Requests</h1>
                            </div>

                            <!-- content part -->
                            <div class="ad_banners_content">
                                <div class="ad_banners_content_inner">


                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Photo</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Gender</th>
                                                <th scope="col">DOB</th>
                                                <th scope="col">Fathers's Name</th>
                                                <th scope="col">Mothers's Name</th>
                                                <th scope="col">Nationality</th>
                                                <th scope="col">Address</th>
                                                <th scope="col">PIN NO</th>
                                                <th scope="col">Mobile</th>
                                                <th scope="col">Whatsapp</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Height</th>
                                                <th scope="col">weight</th>
                                                <th scope="col">Medical History</th>
                                                <th scope="col">Health Problems</th>
                                                <th scope="col">Certificate(DOB)</th>
                                                <th scope="col">Certificate(FIT)</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($formDatas as $formData)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td><img src="{{ asset('storage/' . $formData->st_img) }}" width="60" alt="" class="rounded"></td>
                                                <td>{{ $formData->name }}</td>
                                                <td>{{ $formData->gender }}</td>
                                                <td>{{ $formData->dob }}</td>
                                                <td>{{ $formData->f_name }}</td>
                                                <td>{{ $formData->m_name }}</td>
                                                <td>{{ $formData->nationality }}</td>
                                                <td>{{ $formData->add }}</td>
                                                <td>{{ $formData->pin_no }}</td>
                                                <td>{{ $formData->tele }}</td>
                                                <td>{{ $formData->mob }}</td>
                                                <td>{{ $formData->email }}</td>
                                                <td>{{ $formData->height }}</td>
                                                <td>{{ $formData->weight }}</td>

                                                <td>
                                                    {{$formData->medical_history}}

                                                </td>
                                                <td>
                                                    {{ $formData->health_problemms}}

                                                </td>

                                                <td>
                                                    @if($formData->cer_dob)
                                                    <a class="btn btn-warning" href="{{ route('document.download', ['type' => 'cer_dob', 'id' => $formData->id]) }}" download>
                                                    <i class="fa-regular fa-file-pdf"></i>
                                                    </a>
                                                    @endif
                                                </td>
                                                <td>
                                                    @if($formData->cer_fit)
                                                    <a class="btn btn-warning" href="{{ route('document.download', ['type' => 'cer_fit', 'id' => $formData->id]) }}" download>
                                                    <i class="fa-regular fa-file-pdf"></i>
                                                    </a>
                                                    @endif
                                                </td>

                                                <td class="d-flex justify-between gap-2 items-center">
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalxperogarasisnopectorialmainn{{ $formData->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModalxperogarasisnopectorialmainn{{ $formData->id }}" tabindex="-1" aria-labelledby="exampleModalLabelxperogarasisnopectorialmainn{{ $formData->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabelxperogarasisnopectorialmainn{{ $formData->id }}">Edit Mission</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('all_form_update', $formData->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <div class="mb-3">
                                                                            <label for="st_img" id="st_img" class="form-label">Photo</label>
                                                                            <input type="file" name="st_img" id="st_img" class="form-control">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="name" id="name" class="form-label">Name</label>
                                                                            <input type="text" name="name" id="name" value="{{$formData->name}}" class="form-control">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="gender" id="gender" class="form-label">Gender</label>
                                                                            <input type="text" name="gender" id="gender" value="{{$formData->gender}}" class="form-control">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="dob" id="dob" class="form-label">DOB</label>
                                                                            <input type="date" name="dob" id="dob" value="{{$formData->dob}}" class="form-control">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="f_name" id="f_name" class="form-label">Father's Name</label>
                                                                            <input type="text" name="f_name" id="f_name" value="{{$formData->f_name}}" class="form-control">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="m_name" id="m_name" class="form-label">Mother's Name</label>
                                                                            <input type="text" name="m_name" id="m_name" value="{{$formData->m_name}}" class="form-control">
                                                                        </div>




                                                                        <div class="mb-3">
                                                                            <label for="nationality" id="nationality" class="form-label">Nationality</label>
                                                                            <input type="text" name="nationality" id="nationality" value="{{$formData->nationality}}" class="form-control">
                                                                        </div>





                                                                        <div class="mb-3">
                                                                            <label for="add" id="add" class="form-label">Address</label>
                                                                            <textarea type="text" name="add" id="add" class="form-control">{{$formData->add}}</textarea>
                                                                        </div>







                                                                        <div class="mb-3">
                                                                            <label for="pin_no" id="pin_no" class="form-label">PIN NO</label>
                                                                            <input type="number" name="pin_no" id="pin_no" value="{{$formData->pin_no}}" class="form-control">
                                                                        </div>







                                                                        <div class="mb-3">
                                                                            <label for="tele" id="tele" class="form-label">Mobile No</label>
                                                                            <input type="number" name="tele" id="tele" value="{{$formData->tele}}" class="form-control">
                                                                        </div>





                                                                        <div class="mb-3">
                                                                            <label for="mob" id="mob" class="form-label">Whatsapp NO</label>
                                                                            <input type="number" name="mob" id="mob" value="{{$formData->mob}}" class="form-control">
                                                                        </div>





                                                                        <div class="mb-3">
                                                                            <label for="email" id="email" class="form-label">Email</label>
                                                                            <input type="email" name="email" id="email" value="{{$formData->email}}" class="form-control">
                                                                        </div>






                                                                        <div class="mb-3">
                                                                            <label for="height" id="height" class="form-label">Height</label>
                                                                            <input type="text" name="height" id="height" value="{{$formData->height}}" class="form-control">
                                                                        </div>







                                                                        <div class="mb-3">
                                                                            <label for="weight" id="weight" class="form-label">Weight</label>
                                                                            <input type="text" name="weight" id="weight" value="{{$formData->weight}}" class="form-control">
                                                                        </div>







                                                                        <div class="mb-3">
                                                                            <label for="medical_history" id="medical_history" class="form-label">Medical History</label>
                                                                            <textarea type="text" name="medical_history" id="medical_history" class="form-control">{{$formData->medical_history}}</textarea>
                                                                        </div>







                                                                        <div class="mb-3">
                                                                            <label for="health_problemms" id="health_problemms" class="form-label">Medical History</label>
                                                                            <textarea type="text" name="health_problemms" id="health_problemms" class="form-control">{{$formData->health_problemms}}</textarea>
                                                                        </div>





                                                                        <div class="mb-3">
                                                                            <label for="cer_dob" id="cer_dob" class="form-label">Certificate(DOB)</label>
                                                                            <input type="file" name="cer_dob" id="cer_dob" class="form-control">
                                                                        </div>




                                                                        <div class="mb-3">
                                                                            <label for="cer_fit" id="cer_fit" class="form-label">Certificate(FIT)</label>
                                                                            <input type="file" name="cer_fit" id="cer_fit" class="form-control">
                                                                        </div>














                                                                        <button type="submit" class="btn btn-success float-end">Submit</button>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <a href="{{ route('pdf_create', ['id' => $formData->id]) }}" class="btn btn-warning">
                                                        <i class="fa-solid fa-download"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>


                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ==============================Upload Products part end================================== -->








                </div>
            </div>
        </div>
    </div>
</x-app-layout>