<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //get and show all listings
    public function index(){
        // dd(request('tag'));
        return view('listings.index', [
            'listings' =>  Listing::latest()->filter
                (request(['tag', 'search']))->get()
                // (request(['tag', 'search']))->paginate(4)
        ]);
    }

    //get and show single listings
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

    //show create form
    public function create(){
        return view('listings.create');
    }

    //store listing data
    public function store(Request $request){
        $formFields = $request->validate([
            'title'=>'required',
            'company'=> ['required', Rule::unique('listings', 'company')],
            'location'=>'required',
            'website'=>'required',
            'email'=>'required', 'email',
            'tags'=>'required',
            'description'=>'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $formFields['user_id'] = auth()->id();

        Listing::create($formFields);

        return redirect('/')->with('message', 'Listing created successfully');
    }

    //update listing data
    public function update(Request $request, Listing $listing){
        $formFields = $request->validate([
            'title'=>'required',
            'company'=> ['required'],
            'location'=>'required',
            'website'=>'required',
            'email'=>'required', 'email',
            'tags'=>'required',
            'description'=>'required'
        ]);

        if($request->hasFile('logo')){
            $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        }

        $listing->update($formFields);

        return back()->with('message', 'Listing updated successfully');
    }

    //delete
    public function destroy(Listing $listing){        
        $listing->delete();
        return redirect('/')->with('message', 'Listing deleted successfully');
    }

    //show edit form
    public function edit(Listing $listing){
        return view('listings.edit', [
            'listing' => $listing
        ]);
    }

    //manage listing
    public function manage(){
        return view('listings.manage', [
            'listings' => auth()->user()->listings()->get()
        ]);
    }

}
