<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Client;
use App\Service;
use App\Mail\ContactMail;
use Validator;
use Mail;
use Carbon\Carbon;

class MainController extends Controller
{
    public function show() {
    	$products = Product::all();
    	$clients = Client::all();
    	$services = Service::all();

    	return view('index', compact('products','clients','services'));
    }

    public function submit(Request $request) {
    	$validator = Validator::make($request->all(), [
    		'name' => 'required',
    		'email' => 'required|email',
    		'subject' => 'required|min:6|max:20',
    		'message' => 'required|min:6|max:1000'
		]);

        if ($validator->fails()) {
            return redirect('/#contact')->withErrors($validator)->withInput();
        }

        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message']
        ];

		Mail::to('roquevtr@gmail.com')->send(new ContactMail($data));

		if ($validator->fails()) {
            return redirect('/#contact')->withErrors($validator)->withInput();
        }

        return redirect('/#contact')->with('notification','Thank you for sending an inquiry. If I do not respond in 24 hours, kindly email me again through this form.');

        /* 
        if ($validator->fails()) {
            return Response::json([
                'status' => 'failed',
                'errors' => $validator
            ], 200);
        }

        $data = [
            'name' => $request['name'],
            'email' => $request['email'],
            'subject' => $request['subject'],
            'message' => $request['message']
        ];

        // Mail::to('roquevtr@gmail.com')->send(new ContactMail($data));

        return Response::json([
            'status' = 'success',
            'notification' => 'Thank you for sending an inquiry. If I do not respond in 24 hours, kindly email me again through this form.'
        ], 200);
        */
    }
}
