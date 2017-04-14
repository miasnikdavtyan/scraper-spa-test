<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\LoanUser;

class LoanUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function firstOrNewEmail(Request $request)
    {
        $response = array(
            'result' => [],
            'errors' => []
        );

        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:255',
        ]);

        if ($validator->fails()) {
            $response['errors'] = $validator->errors();
        }else{
           $user = LoanUser::firstOrNew(['email' => $request->email]);
//            $user->email = $request->email;
            $user->save();
            $response['result'] = $user;
        }
        return $response;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\LoanUser  $loanUser
     * @return \Illuminate\Http\Response
     */
    public function show(LoanUser $loanUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\LoanUser  $loanUser
     * @return \Illuminate\Http\Response
     */
    public function edit(LoanUser $loanUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\LoanUser  $loanUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoanUser $loanUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\LoanUser  $loanUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoanUser $loanUser)
    {
        //
    }
}
