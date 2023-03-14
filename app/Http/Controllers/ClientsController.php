<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Agent;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientsController extends Controller
{
    public function viewCl()
    {
        $clients = [];
        if (Auth::user()->account_type == 'agent') {
            $agent_id = Agent::where('email', Auth::user()->email)->first()->id;
            $clients = Client::where('agent_id', $agent_id)->orderBy('name', 'asc')->get();
        } elseif (Auth::user()->account_type == 'staff') {
            $clients = Client::orderBy('name', 'asc')->get();
        }
        return view('backend.client.viewClient', compact('clients'));
    }

    public function addCl()
    {

        return view('backend.client.addClient');
    }

    public function storeCl(Request $request)
    {
        $agent_id = null;
        if (Auth::user()->account_type == 'agent') {
            $agent_id = Agent::where('email', Auth::user()->email)->first()->id;
        }
        $email = $request->email;
        if (!User::where('email', $email)->first()) {
            $client = new Client;
            $client->create([
                'name' => $request->name,
                'email' => $request->email,
                'mobile' => $request->mobile,
                'id_no' => $request->id_no,
                'kra' => $request->kra,
                'agent_id' => $agent_id,
            ]);

            User::create([
                'name' => $request['name'],
                'account_type' => 'client',
                'email' => $request['email'],
                'password' => Hash::make($request['mobile']),
            ]);

            $notification = array(
                'message' => 'User Created successfully',
                'alert-type' => 'success'
            );
            return redirect()->route('client.view')->with($notification);
        } else {
            $notification = array(
                'message' => 'Email address already taken',
                'alert-type' => 'danger'
            );
            return view('backend.client.addClient')->with($notification);
        }
    }

    public function editCl($id)
    {
        $editData = Client::find($id);
        return view('backend.client.editClient', compact('editData'));
    }

    public function updateCl(Request $request, $id)
    {
        $client = Client::find($id);
        $client->name = $request->name;
        $client->email = $request->email;
        $client->id_no = $request->id_no;
        $client->mobile = $request->mobile;
        $client->kra = $request->kra;

        $client->save();

        $notification = array(
            'message' => 'Details updated successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('client.view')->with($notification);
    }
}
