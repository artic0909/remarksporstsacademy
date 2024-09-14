<?php

namespace App\Http\Controllers;

use App\Models\MetaTag;
use Illuminate\Http\Request;

class SEOController extends Controller
{
    public function get_seo_data()
    {

        $metaTags = MetaTag::all();
        return view('admin.admin_seoPage', compact('metaTags'));
    }
}
