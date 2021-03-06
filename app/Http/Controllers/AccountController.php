<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Inertia\Inertia;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $account = Auth::user();

          $account_data = $account->account()->orderBy('created_at','DESC')->get();
          $experience_data = $account->experience()->orderBy('created_at','DESC')->get();
          $education_data = $account->education()->orderBy('created_at','DESC')->get();
          $project_data = $account->project()->orderBy('created_at','DESC')->get();

        //  dd($account_data);
         return Inertia::render('Account/Index',
         ['account_data'=>$account_data,
          'experience_data'=>$experience_data,
          'education_data'=>$education_data,
          'project_data'=>$project_data,
        ]);
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
        dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show($accountId)
    {
        //dd($accountId);
          $account_data = User::where('user_name',$accountId)->first();
        //dd($account_data);
        return Inertia::render('Account/Public',[
            'user_data'=>$account_data ,
            'account_data'=>$account_data->account()->get(),
            'experience_data'=>$account_data->experience()->get(),
            'education_data'=>$account_data->education()->get(),
            'project_data'=>$account_data->project()->get(),
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
