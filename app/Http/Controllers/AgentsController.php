<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Backend\RandomNumberController;

class AgentsController extends Controller
{
    public function viewAg()
    {
        $agents = [];
        if (Auth::user()->account_type == 'staff') {
            $agents = Agent::all();
        }
        return view('backend.agent.viewAgent', compact('agents'));
    }

    public function addAg()
    {

        return view('backend.agent.addAgent');
    }

    public function storeAg(Request $request)
    {

        $email = $request->email;
        if (!User::where('email', $email)->first()) {
            $agent = new Agent;
            $agent->create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'id_no' => $request->id_no,
                'kra' => $request->kra,
                'company_name' => $request->company_name,
                'address' => $request->address,
                'comm_rate' => $request->comm_rate,
                'stamp' => (new RandomNumberController)->getRandomMix(10),
            ]);

            User::create([
                'name' => $request['name'],
                'account_type' => 'agent',
                'email' => $request['email'],
                'password' => Hash::make($request['mobile']),
            ]);

            $notification = array(
                'message' => 'User Created successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('ag.view')->with($notification);
        } else {
            $notification = array(
                'message' => 'Email address already taken',
                'alert-type' => 'danger'
            );
            return view('backend.agent.addAgent')->with($notification);
        }
    }

    public function editAg($id)
    {
        $editData = Agent::find($id);
        return view('backend.agent.editAgent', compact('editData'));
    }

    public function updateAg(Request $request, $id)
    {
        $agent = Agent::find($id);
        $agent->name = $request->name;
        $agent->email = $request->email;
        $agent->mobile = $request->mobile;
        $agent->id_no = $request->id_no;
        $agent->kra = $request->kra;
        $agent->company_name = $request->company_name;
        $agent->address = $request->address;
        $agent->comm_rate = $request->comm_rate;

        $agent->save();

        $notification = array(
            'message' => 'Details updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('ag.view')->with($notification);
    }
}
