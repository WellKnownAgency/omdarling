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
		$this->validate($request, array(
			'email' => 'required|email|max:255',
		));

    $subscription = new Subscription();
    $subscription->email = $request->email;
    $subscription->save();

		$notification = array(
    	'message' => 'You Successfully Subscribed!',
    	'alert-type' => 'success'
    );

    return back()->with($notification);
  }
}
