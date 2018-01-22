<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Products;
use App\Stores;

use DataTables;
use Session;

class StoreController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function helperResultCheck($Check,$routeName,$message){
		if($Check){
			Session::flash('chk_msg', $message); 
			Session::flash('alert-class', 'alert-success'); 
		} else{
            Session::flash('chk_msg', 'Warning! Something went wrong. Try again later.'); 
			Session::flash('alert-class', 'alert-danger'); 
		}

		return redirect(route($routeName));  
    }


    public function manageStores()
    {
        return view('ayush.manage_stores');
    }



    public function addStore()
    {
    	$productsData = Products::all();
        return view('ayush.add_stores')->with(['productsdata' => $productsData]);
    }


    public function deleteStore($id)
    {
    	$storeCheck =  Stores::find($id)->delete();
		return $this->helperResultCheck($storeCheck,'manage_stores','Success! Store Deleted Successfully.');
    }





    public function getStores()
    {


     
       $start = 1;
       $storesData = Stores::all();

       return DataTables::of($storesData)


       ->addColumn('sno', function($stores) use (&$start) {
return $start++;
})



               ->addColumn('edit', function ($stores) {
                return '<a href="'.$stores->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="'.$stores->id.'" class="btn btn-xs btn-info"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a> <a href="deleteStore/'.$stores->id.'" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete </a>';
	            })
            ->rawColumns(['edit', 'delete'])
            ->make(true);



    }


    public function addStoreData(Request $request)
    {

		$insertStore = array('account_id' => 'A0', 'store_name' => $request['store_name'], 'products_selling' => $request['products_selling'], 'base_cost' => $request['base_cost'], 'location'  => $request['location'],'account_status'  => $request['account_status'], 'point_of_contact'  => $request['point_of_contact'], 'phone_number'  => $request['phone_number'] ); 
		$storeCheck = Stores::create($insertStore);
		return $this->helperResultCheck($storeCheck,'manage_stores','Success! Store Added Successfully.');

    }


}


  // public function statusProgram($id,$status){
		// $programCheck = PlatinumProgram::where('id',$id)->update(['program_flag' => $status]);;
  //       return $this->helperResultCheck($programCheck,'manageProgram','Success! Program status is modified successfully.');
  //   }



