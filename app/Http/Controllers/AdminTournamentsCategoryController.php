<?php

namespace App\Http\Controllers;

use App\Models\AdminTournamentsCategoryModel;
use App\Models\AdminTournamentsDetailsModel;
use App\Models\AdminTournamentsInformationModel;
use App\Models\AdminTournamentsPlayedTeamsModel;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\Request;

class AdminTournamentsCategoryController extends Controller
{


    public function all_tournaments_get()
    {
        $tournamentsCategoryDatas = AdminTournamentsCategoryModel::orderBy('created_at', 'desc')->get();
        $tournamentsPlayedTeamDatas = AdminTournamentsPlayedTeamsModel::orderBy('created_at', 'desc')->get();
        $tournamentsDetailsDatas = AdminTournamentsInformationModel::orderBy('created_at', 'desc')->get();

        return view('admin.admin_tournamentsPage', compact('tournamentsCategoryDatas', 'tournamentsPlayedTeamDatas', 'tournamentsDetailsDatas'));
    }




    // ====================================================== Tournaments Category =========================================
    public function tournaments_category_add(Request $request)
    {
        $validated = $request->validate([
            't_category' => 'required|string',
        ]);

        AdminTournamentsCategoryModel::create([
            't_category' => $request->input('t_category'),
        ]);

        return back()->with('success', 'Tournaments category added successfully!');
    }






    public function tournaments_category_update(Request $request, $id)
    {
        $validated = $request->validate([
            't_category' => 'required|string',
        ]);

        $category = AdminTournamentsCategoryModel::find($id);

        if ($category) {
            $category->t_category = $request->input('t_category');
            $category->save();

            return back()->with('success', 'Tournaments category updated successfully!');
        } else {
            return back()->with('error', 'Tournaments category not found.');
        }
    }






    public function tournaments_category_delete($id)
    {
        $category = AdminTournamentsCategoryModel::find($id);

        if ($category) {
            $category->delete();

            return back()->with('success', 'Tournaments category deleted successfully!');
        } else {
            return back()->with('error', 'Tournaments category not found.');
        }
    }
















    // Tournaments Details start===================================================================================================



    public function all_tournamentDestails_add(Request $request)
    {
        $validated = $request->validate([
            'td_image' => 'nullable|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'td_category' => 'required|string',
            'td_title' => 'required|string',
            'td_add' => 'required|string',
            'td_date' => 'required|date',
            'td_time' => 'required|string',
            'td_desc' => 'required|string',
        ]);

        $filePath = null;
        // Handle the image upload
        if ($request->hasFile('td_image')) {
            $file = $request->file('td_image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/ti', $fileName, 'public');
        }

        // Create a new sports information record
        AdminTournamentsInformationModel::create([
            'td_image' => $filePath,
            'td_category' => $request->input('td_category'),
            'td_title' => $request->input('td_title'),
            'td_add' => $request->input('td_add'),
            'td_date' => $request->input('td_date'),
            'td_time' => $request->input('td_time'),
            'td_desc' => $request->input('td_desc'),
        ]);

        return back()->with('success', 'Sports information added successfully!');
    }








    public function all_tournamentDestails_update(Request $request, $id)
    {
        // Validate the input
        $validated = $request->validate([
            'td_image' => 'nullable|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'td_category' => 'string',
            'td_title' => 'string',
            'td_add' => 'string',
            'td_date' => 'date',
            'td_time' => 'string',
            'td_desc' => 'string',
        ]);
    
        // Find the existing record
        $tournamentsDetailsInfo = AdminTournamentsInformationModel::findOrFail($id);
    
        // Handle the image upload if a new file is uploaded
        if ($request->hasFile('td_image')) {
            // Delete the old image if it exists
            if ($tournamentsDetailsInfo->td_image && file_exists(public_path('storage/' . $tournamentsDetailsInfo->td_image))) {
                unlink(public_path('storage/' . $tournamentsDetailsInfo->td_image));
            }
    
            // Store the new image
            $file = $request->file('td_image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/ti', $fileName, 'public');
            $tournamentsDetailsInfo->td_image = $filePath; // Save the relative path
        }
    
        // Update other fields
        $tournamentsDetailsInfo->td_category = $validated['td_category'];
        $tournamentsDetailsInfo->td_title = $validated['td_title'];
        $tournamentsDetailsInfo->td_add = $validated['td_add'];
        $tournamentsDetailsInfo->td_date = $validated['td_date'];
        $tournamentsDetailsInfo->td_time = $validated['td_time'];
        $tournamentsDetailsInfo->td_desc = $validated['td_desc'];
    
        // Save the record
        $tournamentsDetailsInfo->save();
    
        return back()->with('success', 'Sports information updated successfully!');
    }
    







    public function all_tournamentDestails_delete($id)
    {
        $tournamentsDetailsInfo = AdminTournamentsInformationModel::findOrFail($id);

        // Delete the image file if it exists
        if ($tournamentsDetailsInfo->td_image && file_exists(public_path('storage/' . $tournamentsDetailsInfo->td_image))) {
            unlink(public_path('storage/' . $tournamentsDetailsInfo->td_image));
        }

        // Delete the record
        $tournamentsDetailsInfo->delete();

        return back()->with('success', 'Sports information deleted successfully!');
    }
























































    // ====================================================== Tournament Played Teams =========================================
    public function tournaments_team_add(Request $request)
    {
        $validated = $request->validate([
            'team' => 'required|string',
        ]);

        AdminTournamentsPlayedTeamsModel::create([
            'team' => $request->input('team'),
        ]);

        return back()->with('success', 'Tournaments category added successfully!');
    }






    public function tournaments_team_update(Request $request, $id)
    {
        $validated = $request->validate([
            'team' => 'required|string',
        ]);

        $category = AdminTournamentsPlayedTeamsModel::find($id);

        if ($category) {
            $category->team = $request->input('team');
            $category->save();

            return back()->with('success', 'Tournaments category updated successfully!');
        } else {
            return back()->with('error', 'Tournaments category not found.');
        }
    }






    public function tournaments_team_delete($id)
    {
        $category = AdminTournamentsPlayedTeamsModel::find($id);

        if ($category) {
            $category->delete();

            return back()->with('success', 'Tournaments category deleted successfully!');
        } else {
            return back()->with('error', 'Tournaments category not found.');
        }
    }
}
