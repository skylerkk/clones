<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Checkout;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkouts(){
        return Checkout::get();
    }

    public function changestatus(Request $request){
        $checkedout = Checkout::findOrFail($request->check_id);
        $checkedout->status = 0 ;
        $checkedout->save();
    
    }

    public function deleteone(Request $request){
        Checkout::find($request->id)->delete();
    }

    // public funciton deleteAll(){

    // }

    public function createchecked(Request $request){
        $checkout = new Checkout;

        $checkout->ref_book_id = $request->bookid;
        $checkout->ref_user_id = $request->userid;

        $checkout->save();
    }
}