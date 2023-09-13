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
                    ->filter(request(['tag', 'search']))
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
    public function create()
    {
        return view(
            'listings.create',
            []
        );
    }
    public function store(Request $request)
    {
        // dd($request);
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required', Rule::unique('listings', 'company')],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);
        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        Listings::create($formFields);
        return redirect('/')->with('message', 'Job added');
    }
    public function edit(Listings $item)
    {
        // dd($item->title);
        return view('listings.edit', ['item' => $item]);
    }

    public function update(Request $request, Listings $item)
    {
        $formFields = $request->validate([
            'title' => 'required',
            'company' => ['required'],
            'location' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => 'required',
            'description' => 'required'
        ]);
        if ($request->hasFile('logo')) {
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }
        $item->update($formFields);
        return back()->with('message', 'Job Edited');
    }
    public function delete(listings $item){
        $item->delete();
        return redirect('/')->with('messages','item deleted.');
    }
}