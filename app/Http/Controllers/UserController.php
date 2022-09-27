<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $user;
    public function addUser()
    {
        return view('admin.user.add');
    }

    public function manageUser()
    {
        return view('admin.user.manage', ['users' => User::orderBy('id', 'DESC')->get()]);
    }

    public function newUser(Request $request)
    {


        $this->user             = new User();
        $this->user->name       = $request->name;
        $this->user->email      = $request->email;
        $imageDir = 'admin-asset/user-img/';
        $this->user->image      = $this->imageUpload($request, $this->user, $imageDir);

        $this->user->password   = bcrypt($request->password);
        $this->user->save();

        return back()->with('message', 'User Saved Successfully');
    }

    public function editUser($id)
    {
        return view('admin.user.edit', [ 'user' => User::find($id)]);
    }

    public function updateUser(Request $request, $id){

        $this->user                 = User::find($id);
        $this->user->name           = $request->name;
        $this->user->email          = $request->email;

        $imageDir = 'admin-asset/user-img/';
        $this->user->image          = $this->imageUpload($request, $this->user, $imageDir);

        if($request->password)
        {
            $this->user->password   = bcrypt($request->password);
        }
        else{
            $this->user->password   = $this->user->password;
        }
        $this->user->save();
        return redirect('/manage-user')->with('message', 'User Updated Successfully');
    }

    public function deleteUser($id){
        $this->user = User::find($id);
        if ($this->user->image)
        {
            unlink($this->user->image);
        }
        $this->user->delete();
        return redirect('/manage-user')->with('message', 'User Deleted Successfully');
    }

    public function imageUpload($request, $db, $imageDir)
    {
        if ($request->image)
        {
            if ($db->image)
            {
                unlink($db->image);
            }
            $image = $request->file('image');
            $imageName = rand(100000, 999999).time().'.'.$image->getClientOriginalExtension();
            $image->move($imageDir, $imageName);
            $imageUrl = $imageDir.$imageName;
        }
        else{
            $imageUrl = $db->image;
        }
        return $imageUrl;
    }
}
