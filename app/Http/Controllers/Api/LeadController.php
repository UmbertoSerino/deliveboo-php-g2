<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lead;
use App\Mail\NewContact;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'name' => 'required',
            'email' => ['required', 'email'],
            'message' => 'required',
            'date' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors'  => $validator->errors(),
            ]);
        }

        $newLead = new Lead();
        $newLead = $newLead->create($data);
        // dd(new NewContact($newLead));

        // # Invio la mail
        Mail::to("admin@boolpress.com")->send(new NewContact($newLead));

        return response()->json([
            'success' => true,
        ]);
    }
}
