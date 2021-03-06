<?php

namespace App\Http\Controllers;

//use App\User;
// use App\Models\User;  // <-- your model is located insired Models Folder
use Illuminate\Http\Response; // Response Components
use App\Traits\ApiResponser;  // <-- use to standardized our code for api response
use Illuminate\Http\Request;  // <-- handling http request in lumen
use DB; // <-- if your not using lumen eloquent you can use DB component in lumen
use App\Services\User2Service; // user2 Services


Class User2Controller extends Controller {
    // use to add your Traits ApiResponser
    use ApiResponser;

    /**
     * The service to consume the User2 Microservice
     * @var User2Service
     */
    public $user2Service;

    /**
     * Create a new controller instance
     * @return void
     */
    public function __construct(User2Service $user2Service){
        $this->user2Service = $user2Service;
    }

    /**
     * Return the list of users
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        return $this->successResponse($this->user2Service->obtainUsers());
    }

    public function add(Request $request ){
        return $this->successResponse($this->user2Service->createUser($request->all(), Response::HTTP_CREATED));
    }

    /**
     * Obtains and show one user
     * @return Illuminate\Http\Response
     */
    public function show($id)
    {
        return $this->successResponse($this->user2Service->obtainUser($id));
    }

    /**
     * Update an existing user
     * @return Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        return $this->successResponse($this->user2Service->editUser($request->all(), $id));
    }

    /**
     * Remove an existing user
     * @return Illuminate\Http\Response
     */
    public function delete($id)
    {
        return $this->successResponse($this->user2Service->deleteUser($id));
    }

}



