<?php

namespace App\Http\Controllers;

use App\Models\MetaTag;
use Illuminate\Http\Request;

class MetaTagController extends Controller
{
    // Store meta tags dynamically
    public function store(Request $request)
    {
        $request->validate([
            'page' => 'required|string',
            'meta_key' => 'required|string',
            'meta_value' => 'required|string',
        ]);

        MetaTag::create($request->all());

        return redirect()->back()->with('success', 'Meta Tag Created Successfully');
    }

    // Update meta tags dynamically
    public function update(Request $request, $id)
    {
        $request->validate([
            'meta_key' => 'required|string',
            'meta_value' => 'required|string',
        ]);

        $metaTag = MetaTag::findOrFail($id);
        $metaTag->update($request->all());

        return redirect()->back()->with('success', 'Meta Tag Updated Successfully');
    }

    // Delete meta tags
    public function destroy($id)
    {
        $metaTag = MetaTag::findOrFail($id);
        $metaTag->delete();

        return redirect()->back()->with('success', 'Meta Tag Deleted Successfully');
    }


    public static function getMetaTags($page)
    {
        $metaTags = MetaTag::where('page', $page)->get();

        $metaData = [];
        foreach ($metaTags as $tag) {
            $metaData[$tag->meta_key] = $tag->meta_value;
        }

        return $metaData;
    }
}
