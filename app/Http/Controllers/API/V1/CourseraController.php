<?php

namespace App\Http\Controllers\API\V1;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController;
use Illuminate\Support\Facades\Input;
use App\Model\Coursera;

class CourseraController extends BaseController
{
	function index() {
		$curl = curl_init();

		curl_setopt_array($curl, array(
		    CURLOPT_URL => "https://api.coursera.org/api/courses.v1",
		    CURLOPT_RETURNTRANSFER => true,
		    CURLOPT_ENCODING => "",
		    CURLOPT_TIMEOUT => 30000,
		    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		    CURLOPT_CUSTOMREQUEST => "GET",
		));
		$courses = curl_exec($curl);
		$err = curl_error($curl);
		curl_close($curl);

		if ($err) {
		    echo "cURL Error #:" . $err;
		}
		$courses = json_decode($courses, true) ;
		// var_dump($courses);exit;
		return view('getCourses', [
			'courses'=> $courses['elements']
		]);
	}

   function addCourse(Request $request) {
   		$data = $request->all();
   		// print_r($data);exit;
        try{
            $user = new Coursera();
            $user->courseType = $data['courseType'];
            $user->id = $data['id'];
            $user->slug = $data['slug'];
            $user->name = $data['name'];
            $user->save();
            return $this->respondWithSuccess("Course Added");
        }
        catch (\Exception $exception){
            return $this->respondWithError($exception->getMessage());
        }
    }

    function getSavedCourses() {
	    try{
	    	$data = Input::all();
	    	$pageSize = 10;
	    	if(isset($data['pagesize']) && !empty($data['pagesize'])) {
	    		$pageSize = $data['pagesize'];
	    	}
    		$profiles = Coursera::select('courseType','id','slug','name')
        	->paginate($pageSize);
        	return $this->respondWithSuccess($profiles);
	    }
	    catch (\Exception $exception){
	      return $this->respondWithError($exception->getMessage());
	    }
    }
}
