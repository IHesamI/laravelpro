<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\Listings;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // show all listings
    public function index()
    {
        // find the tag from the URL
        // dd();
        return view(
            'listings.index',
            [
                'listings' => 
                Listings::latest()
                ->filter(request(['tag','search']))
                // ->get()
                //* Or
                // ->paginate(4)
                //* Or
                ->simplePaginate(4)
                

            ]
        );
    }
    // show single listings
    public function show(Listings $item)
    {
        return view('listings.item', [
            'item' => $item,
        ]);
    }
    public function create(){
        return view('listings.create',
        [
            
        ]);
    }
    public function store(Request $request){
        // dd($request->all());
        $formFields=$request->validate([
            'title'=>'required',
            'company'=>['required',Rule::unique('listings','company')],
            'location'=>'required',
            'website'=>'required',
            'email'=>['required','email'],
            'tags'=>'required',
            'description'=>'required'
        ]);
        Listings::create($formFields);
        return redirect('/')->with('message','Job added');
    }
}