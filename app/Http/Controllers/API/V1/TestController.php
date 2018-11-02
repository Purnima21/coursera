<?php

namespace App\Http\Controllers\API\V1;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\API\BaseController;
use App\Model\Test;

class TestController extends BaseController
{
    function addData(Request $request) {
   		$data = $request->get('data');
        try{
            $user = new Test();
            $user->name = $data['name'];
            $user->email = $data['email'];
            $user->department = $data['department'];
            $user->role = $data['role'];
            $user->save();
            return $this->respondWithSuccess("User Added");
            }
        catch (\Exception $exception){
            return $this->respondWithError($exception->getMessage());
        }
    }

    function getData() {
	    try{
	    	$data = Input::all();
	    	$pageSize = 10;
	    	if(isset($data['pagesize']) && !empty($data['pagesize'])) {
	    		$pageSize = $data['pagesize'];
	    	}
	    	if(isset($data['searchRole']) && !empty($data['searchRole'])) {
				$profiles = Test::select('id','name','email','department','role')
			        ->where('role','=',$data['searchRole'])
			        ->paginate($pageSize);
	    	} else {
	    		$profiles = Test::select('id','name','email','department','role')
	        		->paginate($pageSize);
	    	}
	      return $this->respondWithSuccess($profiles);
	    }
	    catch (\Exception $exception){
	      return $this->respondWithError($exception->getMessage());
	    }
    }
}
