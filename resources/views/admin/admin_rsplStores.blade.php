<x-app-layout>
    <x-slot name="header" style="background: #1f2937;">
        <h2 class="font-semibold text-xl " style="background: #1f2937; color: white;">
            {{ __('RSPL Stores') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6" style="overflow-y: auto; height: 700px; width: 100%; -ms-overflow-style: none; scrollbar-width: none; background: white;">






                    <!-- ==============================Upload Products part start================================== -->
                    <div class="ad_banners_main mt-5">
                        <div class="ad_banners_inner">
                            <div class="ad_heading d-flex justify-between">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Add Products</h1>


                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary rounded-circle" data-bs-toggle="modal" data-bs-target="#exampleModal1opinthechat121212">
                                    <i class="fa-solid fa-plus"></i>
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal1opinthechat121212" tabindex="-1" aria-labelledby="exampleModalLabel1opinthechat121212" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel1opinthechat121212">Add Product</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('products_add') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="mb-3">
                                                        <label for="rs_img" class="form-label">Image</label>
                                                        <input type="file" class="form-control" name="rs_img" id="rs_img">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="rs_title" class="form-label">Title</label>
                                                        <input type="text" class="form-control" name="rs_title" id="rs_title">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="rs_price" class="form-label">Price</label>
                                                        <input type="number" class="form-control" name="rs_price" id="rs_price">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="rs_discount" class="form-label">Discount</label>
                                                        <input type="number" class="form-control" name="rs_discount" id="rs_discount">
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="rs_link" class="form-label">Link</label>
                                                        <input type="text" class="form-control" name="rs_link" id="rs_link">
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
                                                <th scope="col">Titles</th>
                                                <th scope="col">Prices</th>
                                                <th scope="col">Discounts</th>
                                                <th scope="col">Links</th>
                                                <th scope="col">Edit</th>
                                                <th scope="col">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($producuts as $producut)
                                            <tr class="align-middle">
                                                <th scope="row">{{ $loop->iteration }}</th>
                                                <td><img src="{{ asset('storage/' . $producut->rs_img) }}" width="60" alt="" class="rounded"></td>
                                                <td>{{ $producut->rs_title }}</td>
                                                <td>{{ $producut->rs_price }}</td>
                                                <td>{{ $producut->rs_discount }}</td>
                                                <td><a href="{{ $producut->rs_link }}">Product Link</a></td>
                                                <td>


                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModalup45001opintheopperoc{{ $producut->id }}">
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="exampleModalup45001opintheopperoc{{ $producut->id }}" tabindex="-1" aria-labelledby="exampleModalLabelup45001opintheopperoc{{ $producut->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabelup45001opintheopperoc{{ $producut->id }}">Edit Product</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <form action="{{ route('products_update', $producut->id) }}" method="POST" enctype="multipart/form-data">
                                                                        @csrf
                                                                        @method('PUT')

                                                                        <div class="mb-3">
                                                                            <label for="rs_img" class="form-label">Image</label>
                                                                            <input type="file" class="form-control" name="rs_img" id="rs_img">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="rs_title" class="form-label">Title</label>
                                                                            <input type="text" class="form-control" name="rs_title" id="rs_title" value="{{ $producut->rs_title }}">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="rs_price" class="form-label">Price</label>
                                                                            <input type="number" class="form-control" name="rs_price" id="rs_price" value="{{ $producut->rs_price }}">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="rs_discount" class="form-label">Discount</label>
                                                                            <input type="number" class="form-control" name="rs_discount" id="rs_discount" value="{{ $producut->rs_discount }}">
                                                                        </div>

                                                                        <div class="mb-3">
                                                                            <label for="rs_link" class="form-label">Link</label>
                                                                            <input type="text" class="form-control" name="rs_link" id="rs_link" value="{{ $producut->rs_link }}">
                                                                        </div>

                                                                        <button type="submit" class="btn btn-success float-end">Submit</button>

                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </td>
                                                <td>
                                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteSportsInfoModalkrpriari{{ $producut->id }}">
                                                        <i class="fa-solid fa-x"></i>
                                                    </button>

                                                    <!-- Delete Sports Information Modal -->
                                                    <div class="modal fade" id="deleteSportsInfoModalkrpriari{{ $producut->id }}" tabindex="-1" aria-labelledby="deleteSportsInfoLabelkrpriari{{ $producut->id }}" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="deleteSportsInfoLabelkrpriari{{ $producut->id }}">Confirm Delete</h5>
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Are you sure you want to delete this information?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <form action="{{ route('products_delete', $producut->id) }}" method="POST">
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
                    <!-- ==============================Upload Products part end================================== -->








                </div>
            </div>
        </div>
    </div>
</x-app-layout>