<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{


 public function __construct()
    {
        $this->middleware('auth');
    }


    public function manageCategories()
    {
        return view('ayush.manage_category');
    }


    public function addCategory()
    {
        return view('ayush.add_category');
    }

    public function addCategoryData(Request $request)
    {
    	$productsData = array('product_name' => $request['product_name'] );
        Products::create($productsData);
    }




    public function deleteCategory($id)
    {
      echo $id;
    }



    public function fetchCategory(Request $request)
    { 
     
       $start = 1;
       $productsData = Products::select(['id', 'product_name']);

       return DataTables::of($productsData)


       ->addColumn('sno', function($products) use (&$start) {
return $start++;
})



               ->addColumn('edit', function ($products) {
                return '<a href="'.$products->id.'" class="btn btn-xs btn-primary"><i class="fa fa-eye" aria-hidden="true"></i> View</a> <a href="'.$products->id.'" class="btn btn-xs btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</a> <a href="delete_products/'.$products->id.'" class="btn btn-xs btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Delete </a>';
	            })
            ->rawColumns(['edit', 'delete'])
            ->make(true);
}

}
