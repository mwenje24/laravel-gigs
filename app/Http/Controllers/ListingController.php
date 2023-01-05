<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //get and show all listings
    public function index(){
        // dd(request('tag'));
        return view('listings.index', [
            'listing' =>  Listing::latest()->filter
                (request(['tag', 'search']))->get()
        ]);
    }

    //get and show single listings
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing
        ]);
    }

}
