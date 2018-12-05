<?php


namespace App\Http\Controllers;

use Session;
use App\Subscription;
use Illuminate\Http\Request;

class SubscriptionsController extends Controller
{
	
	public function index()
    {
        return Subscription::latest()->get();
    }

  public function store(Request $request)
  {
    $subscription = new Subscription();
    $subscription->email = $request->email;
    $subscription->save();

    Session::flash('success', 'You Successfully Subscribed');

    return back();
  }
}
