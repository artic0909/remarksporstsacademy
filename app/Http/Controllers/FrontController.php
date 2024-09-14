<?php

namespace App\Http\Controllers;

use App\Models\AdminHomeBannerModel;
use App\Models\AdminHomeFutureFocusModel;
use App\Models\AdminHomecollaborationModel;
use App\Models\AdminHomeCompanyEmailPhoneModel;
use App\Models\AdminHomeSportsCategoryModel;
use App\Models\AdminHomeSportsInformationModel;

use App\Models\AdminAboutClubEthicsModel;
use App\Models\AdminAboutFounderModel;
use App\Models\AdminAboutMissionModel;
use App\Models\AdminAboutModel;
use App\Models\AdminAboutPlayerEthicsModel;
use App\Models\AdminAboutVisionModel;
use App\Models\AdminAdmissionFormModel;
use App\Models\AdminHowWeAreModel;

use App\Models\AdminNormalSessionModel;

use App\Models\AdminOptionalSessionModel;

use App\Models\AdminGalleryImageModel;

use App\Models\AdminContactSupportModel;

use App\Models\AdminTournamentsCategoryModel;
use App\Models\AdminTournamentsInformationModel;
use App\Models\AdminTournamentsPlayedTeamsModel;

use Illuminate\Support\Facades\Storage;


use App\Models\AdminRSPLstoreModel;
use App\Models\AdminStudentAdmissionModel;
use App\Models\MetaTag;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;









class FrontController extends Controller
{





    public function home()
    {
        $homeBannersDatas = AdminHomeBannerModel::all();
        $homeFutureDatas = AdminHomeFutureFocusModel::all();
        $homeCollabDatas = AdminHomecollaborationModel::all();
        $homeComapanyDatas = AdminHomeCompanyEmailPhoneModel::all();
        $homeSportsCategoryDatas = AdminHomeSportsCategoryModel::all();
        $homeSportsInformationDatas = AdminHomeSportsInformationModel::all();
        return view('home', compact('homeBannersDatas', 'homeFutureDatas', 'homeCollabDatas', 'homeComapanyDatas', 'homeSportsCategoryDatas', 'homeSportsInformationDatas'));
    }

    public static function getMetaTags($routeName)
    {
        // Example code for fetching meta tags based on route name
        $metaTags = MetaTag::where('page', $routeName)->get();

        $metaData = [];
        foreach ($metaTags as $tag) {
            $metaData[$tag->meta_key] = $tag->meta_value;
        }

        return $metaData;
    }









    public function about()
    {
        $aboutDatas = AdminAboutModel::orderBy('created_at', 'desc')->get();
        $aboutWhoDatas = AdminHowWeAreModel::orderBy('created_at', 'desc')->get();
        $aboutMissionDatas = AdminAboutMissionModel::orderBy('created_at', 'desc')->get();
        $aboutVisionDatas = AdminAboutVisionModel::orderBy('created_at', 'desc')->get();
        $aboutClubEthicsDatas = AdminAboutClubEthicsModel::orderBy('created_at', 'desc')->get();
        $aboutPlayerEthicsDatas = AdminAboutPlayerEthicsModel::orderBy('created_at', 'desc')->get();
        $aboutFounderDatas = AdminAboutFounderModel::orderBy('created_at', 'desc')->get();

        return view('about', compact('aboutDatas', 'aboutWhoDatas', 'aboutMissionDatas', 'aboutVisionDatas', 'aboutClubEthicsDatas', 'aboutPlayerEthicsDatas', 'aboutFounderDatas'));
    }









    public function normal_session()
    {
        $aboutDatas = AdminAboutModel::orderBy('created_at', 'desc')->get();

        $normalSessionDatas = AdminNormalSessionModel::orderBy('created_at', 'desc')->get();

        return view('normal_session', compact('aboutDatas', 'normalSessionDatas'));
    }










    public function optional_session()
    {
        $aboutDatas = AdminAboutModel::orderBy('created_at', 'desc')->get();

        $optionalSessionDatas = AdminOptionalSessionModel::orderBy('created_at', 'desc')->get();

        return view('optional_session', compact('aboutDatas', 'optionalSessionDatas'));
    }








    public function gallery()
    {
        $aboutDatas = AdminAboutModel::orderBy('created_at', 'desc')->get();

        $galleryImageDatas = AdminGalleryImageModel::orderBy('created_at', 'desc')->get();

        return view('gallery', compact('aboutDatas', 'galleryImageDatas'));
    }



    public function getAPIdata(Request $request)
    {

        $url = 'https://sportapi7.p.rapidapi.com/api/v1/event/xdbsZdb/h2h/events';
        $headers = [
            'x-rapidapi-host' => 'sportapi7.p.rapidapi.com',
            'x-rapidapi-key' => '4f55425cbbmshfd7907ff35e0030p16ba6ejsn7ad0f3448ca1',
        ];


        $response = Http::withHeaders($headers)->get($url);


        if ($response->successful()) {
            $datas = $response->json();
            return view('gallery', compact('datas'));
        } else {
            return view('gallery')->with('error', 'Failed to fetch data');
        }
    }









    public function tournaments()
    {
        $aboutDatas = AdminAboutModel::orderBy('created_at', 'desc')->get();

        $tournamentsCategoryDatas = AdminTournamentsCategoryModel::orderBy('created_at', 'desc')->get();
        // $tournamentsPlayedTeamDatas = AdminTournamentsPlayedTeamsModel::orderBy('created_at', 'desc')->get();
        $tournamentsDetailsDatas = AdminTournamentsInformationModel::orderBy('created_at', 'desc')->get();

        return view('tournaments', compact('aboutDatas', 'tournamentsCategoryDatas', 'tournamentsDetailsDatas'));
    }






    public function rspl_stores()
    {
        $homeBannersDatas = AdminHomeBannerModel::all();

        $producuts = AdminRSPLstoreModel::orderBy('created_at', 'desc')->get();

        return view('rspl_stores', compact('homeBannersDatas', 'producuts'));
    }









    public function admission()
    {
        $aboutDatas = AdminAboutModel::orderBy('created_at', 'desc')->get();
        return view('admission_form', compact('aboutDatas'));
    }


    public function admission_form(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'st_img' => 'required|mimes:jpeg,png,jpg|max:2048',
            'name' => 'required|string',
            'gender' => 'required|string|in:male,female,other',
            'dob' => 'required|date',
            'f_name' => 'required|string',
            'm_name' => 'required|string',
            'nationality' => 'required|string',
            'add' => 'required|string',
            'pin_no' => 'required|string',
            'tele' => 'string',
            'mob' => 'required|string',
            'email' => 'required|email',
            'height' => 'required|numeric',
            'weight' => 'required|numeric',
            'medical_history' => 'nullable|string',
            'health_problemms' => 'nullable|string',
            'cer_dob' => 'required|mimes:pdf',
            'cer_fit' => 'required|mimes:pdf',
        ]);

        // Create a new Admission record
        $admission = new AdminStudentAdmissionModel();

        // Handle image upload
        if ($request->hasFile('st_img')) {
            $image = $request->file('st_img');
            $imagePath = $image->store('admissions/images', 'public');
            $admission->st_img = $imagePath;
        }

        // Handle PDF uploads
        if ($request->hasFile('cer_dob')) {
            $cerDob = $request->file('cer_dob');
            $cerDobPath = $cerDob->store('admissions/pdfs', 'public');
            $admission->cer_dob = $cerDobPath;
        }

        if ($request->hasFile('cer_fit')) {
            $cerFit = $request->file('cer_fit');
            $cerFitPath = $cerFit->store('admissions/pdfs', 'public');
            $admission->cer_fit = $cerFitPath;
        }

        // Save other form fields
        $admission->name = $validated['name'];
        $admission->gender = $validated['gender'];
        $admission->dob = $validated['dob'];
        $admission->f_name = $validated['f_name'];
        $admission->m_name = $validated['m_name'];
        $admission->nationality = $validated['nationality'];
        $admission->add = $validated['add'];
        $admission->pin_no = $validated['pin_no'];
        $admission->tele = $validated['tele'];
        $admission->mob = $validated['mob'];
        $admission->email = $validated['email'];
        $admission->height = $validated['height'];
        $admission->weight = $validated['weight'];
        $admission->medical_history = $validated['medical_history'];
        $admission->health_problemms = $validated['health_problemms'];

        // Save the Admission record
        $admission->save();

        // Redirect or respond with success message
        return response()->json(['success' => true]);
    }











    public function contact()
    {
        $aboutDatas = AdminAboutModel::orderBy('created_at', 'desc')->get();
        return view('contact', compact('aboutDatas'));
    }



    public function cantact_form(Request $request)
    {
        // Validate the incoming request data
        $validated = $request->validate([
            'f_name' => 'required|string|max:255',
            'l_name' => 'required|string|max:255',
            'add' => 'required|string|max:500',
            'email' => 'required|email|max:255',
            'contact' => 'required|string|max:15',  // Adjust max length based on expected contact number length
            'message' => 'required|string|max:2000', // Adjust max length as needed
        ]);

        // Create a new contact support record
        AdminContactSupportModel::create([
            'f_name' => $request->input('f_name'),
            'l_name' => $request->input('l_name'),
            'add' => $request->input('add'),
            'email' => $request->input('email'),
            'contact' => $request->input('contact'),
            'message' => $request->input('message'),
        ]);

        // Redirect back with a success message
        return back()->with('success', 'Contact form submitted successfully!');
    }
}
