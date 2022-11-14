<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clients = Client::orderBy('id')->paginate(10);
        return view('clients.index',compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'lastname'=>'required',
            'user_id'=>'required|integer',
            'phone_number'=>'required|min:8|max:14',
            'email'=>'required',
            'password'=>'required|min:8'
        ]);
        $client = $request->all();
        if(
            $imagen=$request->file('avatar')
            ){
            $ruta = 'img/avatars/';
            $avatar =  date('YmdHis').".".$imagen->guessExtension();
            $imagen->move($ruta,$avatar);
            $client['avatar']="$avatar";
        }
        $client['password']=bcrypt($request -> password);
        Client::create($client);
        return redirect()->route('clients.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $client = Client::find($id);

        return view('client$clients.show',compact('client$client'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
        return view('clients.edit',compact('client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $request->validate([
            'name'=>'required',
            'lastname'=>'required',
            'phone_number'=>'required|min:8|max:14',
            'email'=>'required',
        ]);

        $cliente=Client::find($id);

        $client = $request->all();
        if($imagen=$request->file('avatar')){
            $ruta = 'img/avatars/';
            $avatar =  date('YmdHis').".".$imagen->guessExtension();
            $imagen->move($ruta,$avatar);
            $client['avatar']="$avatar";
        }else{
            unset($client['avatar']);
        }

        $cliente->update($client);
        return redirect()->route('clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $client->delete();
        return redirect()->route('clients.index');
    }
}
