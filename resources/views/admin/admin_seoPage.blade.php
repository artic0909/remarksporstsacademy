<x-app-layout>
    <x-slot name="header" style="background: #1f2937;">
        <h2 class="font-semibold text-xl " style="background: #1f2937; color: white;">
            {{ __('SEO') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class=" mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6" style="overflow-y: auto; height: 700px; width: 100%; -ms-overflow-style: none; scrollbar-width: none; background: white;">












                    <!-- ====================Home SEO Start================================== -->
                    <div class="ad_banners_main mt-1">
                        <div class="ad_banners_inner">
                            <div class="ad_heading">
                                <h1 style="font-weight: 900; font-size: 1.5rem; color:rgb(21,21,65);">Manage Meta Tags</h1>
                            </div>

                            <!-- Content part -->
                            <ul class="mt-3" style="height:350px; overflow-y: auto; ">
                                @foreach ($metaTags as $metaTag)
                                <li>{{ $metaTag->page }} - {{ $metaTag->meta_key }}: {{ $metaTag->meta_value }}</li>
                                <br>
                                @endforeach
                            </ul>

                            <!-- Form to add a new meta tag -->
                            <form action="{{ route('meta-tags.store') }}" method="POST" class="mt-3">
                                @csrf
                                <input class="form-control rounded" type="text" name="page" placeholder="Page name" required>
                                <br>
                                <input class="form-control rounded" type="text" name="meta_key" placeholder="Meta key (e.g. title)" required>
                                <br>
                                <input class="form-control rounded" type="text" name="meta_value" placeholder="Meta value" required>
                                <br>
                                <button class="btn btn-success" type="submit">Add Meta Tag</button>
                            </form>
                        </div>
                    </div>
                    <!-- ====================Home SEO End================================== -->















                </div>
            </div>
        </div>
    </div>
</x-app-layout>