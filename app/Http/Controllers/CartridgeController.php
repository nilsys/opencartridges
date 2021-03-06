<?php

namespace App\Http\Controllers;

use App\Manufacturers;
use App\Series;

use Illuminate\Http\Request;

use Validator;

class CartridgeController extends Controller
{

    /**
     * Cartridges constructor.
     */
    public function __construct()
    {
        $this->middleware('lang');
    }

    /**
     * Show the search form on the frontpage.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data["Manufacturers"] = Manufacturers::with("series")->get();
        $data["Series"] = Series::with("models")->get();

        return view('welcome', $data);
    }

    /**
     * Show the form to save a new cartridge to the database.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        $data["Manufacturers"] = Manufacturers::with("series")->get();
        $data["Series"] = Series::with("models")->get();

        return view('cartridges.create', $data);
    }    

    /**
     * Search the database for any available cartridges.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function search(Request $request) {
        $validatedData = $request->validate([
            'manufacturer' => 'required',
            'serie' => 'required',
            'model' => 'required',
        ]);

        //$Manufacturers = Manufacturers::all();
        //return response()->json([$request->all()]);
        return view('cartridges.results');
    }


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function ajaxRequestPost(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'manufacturer' => 'required',
            'serie' => 'required',
            'model' => 'required',
            'title' => 'required'
        ]);

        if ($validator->passes()) {
            $input = request()->all();
            return response()->json(['success'=> 'Added new record.']);
        } else {
            return response()->json(['error'=> $validator->errors()->all()]);            
        }
    }    
}
