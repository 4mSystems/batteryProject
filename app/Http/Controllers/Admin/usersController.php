<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Encryption\DecryptException;
use App\User;

class usersController extends Controller
{
    public $objectName;
    public $folderView;
    public $flash;


   public function __construct(User $model)
    {
        $this->middleware('auth');

        $this->objectName = $model;
        $this->folderView = 'pages.User.';
        $this->flash = 'user Data Has Been ';
    }


     public function index()
    {
        // $data = $this->objectName::all();
        $user = auth()->user()->id;
        $data = $this->objectName::findOrFail($user);

        $data->password = null;

        return view($this->folderView.'index',compact('data'));

    }

    
    public function create()
    {
       
    }

    public function store(Request $request)
    {
       
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
          
    }

    public function update(Request $request)
    {
       
        $id = auth()->user()->id;

        $request->validate([
            'name' => 'required|string',
            'email' => 'required|string',
            // 'password' => 'required|string',
        ]);

        $input = $request->all();
    
if($request['password'] != null){

       $pass= Hash::make($request['password']);
       $input['password'] = $pass;

}else
{
    unset($input['password']);  
}
        
        $this->objectName::find($id)->update($input);

        return redirect('admin/home')->with('success','تم تعديل بيانات المستخدم');
    }

    public function destroy($id)
    {
      
    }
}
