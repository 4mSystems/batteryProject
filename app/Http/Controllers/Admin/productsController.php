<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\product;
use App\Detail;
use App\user;
use App\Detail_image;
use Validator;
use DB;

class productsController extends Controller
{

    public $objectName;
    public $folderView;
    public $flash;
    public $product_id;

    public function __construct(product $model)
    {
        $this->middleware('auth');
        $this->objectName = $model;
        $this->folderView = 'pages.Products.';
        $this->flash = 'Product Data Has Been ';

    }
    public function index()
    {
   

        $products = $this->objectName::all();
        return view($this->folderView.'index',compact('products'));
    }


    public function create()
    {       
        return view($this->folderView.'AddBatteryProduct');
    }




    public function store(Request $request)
    {
        // dd( $request->all());
        $request->validate([
            'name' => 'required|string',
           
        ]);

        $input = $request->all();

        
        if($request['Product_image'] != null)
        {
	        // This is Image Information ...
			$file	 = $request->file('Product_image');
            $name    = $file->getClientOriginalName();
			$ext 	 = $file->getClientOriginalExtension();
			$size 	 = $file->getSize();
			$path 	 = $file->getRealPath();
			$mime 	 = $file->getMimeType();
			
			// Move Image To Folder ..
			$fileNewName = 'img_'.time().'.'.$ext;
			$file->move(public_path('uploads/Product_images'), $fileNewName);
	        
	        $input = $request->all();
	        $input['Product_image'] = $fileNewName;

	    }
	    else
        {
            $input = $request->all();
            $input['Product_image'] = 'Default_image.jpg';
        }
        

        $user = auth()->user()->id;
        $input['user_id'] = $user;
        // dd($user);
       $product = $this->objectName::create($input);
      
        return redirect()->route('Products.create')->with('success',$this->flash.' Created');
    }



    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data = $this->objectName::find($id);

        return view($this->folderView.'edit', compact('data'));
    }

 
    public function update(Request $request, $id)
    {
      
        $request->validate([
            'name' => 'required|string',
        ]);

        $input = $request->all();
      if($request['Product_image'] != null)
        {
            // This is Image Information ...
            $file    = $request->file('Product_image');
            $name    = $file->getClientOriginalName();
            $ext     = $file->getClientOriginalExtension();
            $size    = $file->getSize();
            $path    = $file->getRealPath();
            $mime    = $file->getMimeType();
            
            // Move Image To Folder ..
            $fileNewName = 'img_'.time().'.'.$ext;
            $file->move(public_path('uploads/Product_images'), $fileNewName);
            
            $input = $request->all();
            $input['Product_image'] = $fileNewName;

        }else
        {
            unset($input['Product_image']);
        }
           


        $this->objectName::find($id)->update($input);


       return redirect()->route('Products.index')->with('success',$this->flash.' updated');
        
    }
    
    public function destroy($id)
    {
        $chcek = $this->objectName::findOrFail($id);
        if ($chcek)
        {
            $this->objectName::find($id)->delete();

            return redirect()->action('Admin\productsController@index')->with('success','تم حذف المنتج');
        }
        else
        {
            return redirect()->action('Admin\productsController@index')->with('danger','لم يتم حذف المنتج');
        }
    }

    public function View_Product_details($id)
    {
        $product_id=$id;
        $details = Detail::where('product_id',$id)->get();
        $Detail_images = Detail_image::where('product_id',$id)->get();
        $product = $this->objectName::findOrFail($id);

        return view($this->folderView.'Details',compact('details','product_id','product','Detail_images'));
    }

    public function store_Product_details(Request $request,$id)
    {
       

        $request->validate([
            'type' => 'required|string',
            'L' => 'required|string',
            'W' => 'required|string',
            'H' => 'required|string',
            'lid_options' => 'required|string',
        ]);

        $input = $request->all();
        $user = auth()->user()->id;
        $input['user_id'] = $user;
        $input['product_id'] = $id;
        
       $detail = Detail::create($input);
       return redirect()->back()->with('success','تم أضافة التفصيل بنجاح ');
   
    }

    public function storeGallary(Request $request,$id){

        $request->validate([
            'detail_image' => 'required',
        ]);

        $input = $request->all();

        foreach ($input['detail_image'] as $image) {
            # code...
            $gallery['detail_image'] = $this->MoveImage($image);

            $user = auth()->user()->id;
            $gallery['user_id'] = $user;
            $gallery['product_id'] = $id;

            Detail_image::create($gallery);
        }


        return redirect()->back()->with('success','تم أضافة الصور بنجاح  ');
    	
    }

    public function MoveImage($request_file)
    {
        // This is Image Information ...
        $file    = $request_file;
        $name    = $file->getClientOriginalName();
        $ext     = $file->getClientOriginalExtension();
        $size    = $file->getSize();
        $path    = $file->getRealPath();
        $mime    = $file->getMimeType();
        
        // Move Image To Folder ..
        $fileNewName = 'img_'.$size.'_'.time().'.'.$ext;
        $file->move(public_path('uploads/Detail_images'), $fileNewName);
        
        return $fileNewName;
    }

    public function destroyGallary(Request $request)
    {

    
               $request->validate([
            'deleteImages' => 'required',
        ]);

        $input = $request->all();

            foreach ($input['deleteImages'] as $image_id) {

                    // to get image name
                // $file=$this->objectName::find($image_id);

                //To delete from databas and file

                // $file_name=public_path('uploads/gallery').$file->imageName;
                // File::delete($file_name);

                Detail_image::find($image_id)->delete();

                }


                return redirect()->back()->with('success','تم الحذف ');
        
    }

}
