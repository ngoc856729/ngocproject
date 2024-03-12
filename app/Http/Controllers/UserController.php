<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreatedroleRequest;
use App\Http\Requests\DeleteroleRequest;
use App\Http\Requests\UpdateRequest;
use App\Http\Requests\createduserRequest;
use App\Http\Requests\DeleteuserRequest;
use App\Http\Requests\updateuserRequest;
use App\Http\Requests\loginRequest;
use App\Models\course;
use App\Models\calendar_course;
use App\Models\User;
use App\Models\roles;
use App\Models\users_system;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Cookie;
class UserController extends Controller
{
    public function role_user()
    {
        $count_course = count(course::all());
        $count_class = count(calendar_course::all());
        $count_users = count(User::all());
        $count_student=User::where('id_roles',  2)->count();
        $dataroles=roles::all();
  
        return view('role_user')
        ->with('datastudent', $count_student)->with('dataroles', $dataroles)->with('count_course', $count_course)->with('count_class', $count_class)->with('count_users', $count_users);
    }

    public function addRole(CreatedroleRequest $request)
    {
        roles::create(['name' => $request->rolename]);
        return response()->json(['check' => true, 'msg' => 'Thêm thành công']);
    }

    public function deleteRole(DeleteroleRequest $request)
    {
        roles::where('id',  $request->id)
            ->delete();
        return response()->json(['check' => true, 'msg' => 'Xóa loại tài khoản thành công']);
    }

    public function UpdateRole(UpdateRequest $request)
    {
        roles::where('id',  $request->id)
            ->update(['name' => $request->rolename]);
        return response()->json(['check' => true, 'msg' => 'Update loại tài khoản thành công']);
    }

    public function createduserview()
    {
        $user = DB::table('users')
            ->join('roles', 'users.id_roles', '=', 'roles.id')
            ->select('users.*', 'roles.name as rolename')
            ->get();
   
        return view('created_user')
        ->with('data_users', $user);
    }
    
    /**
     * A function to select roles.
     */
    public function select_roles(){
        $datausers=roles::all();
        $user = User::find(1);
        $a=array();
        $id=array();
        $role= $user->id_roles;
        for ($i=0; $i <count($datausers) ; $i++) {
            if ($datausers[$i]->id!=$role) {
                array_push($a,$datausers[$i]->name);
            } 
        }
        for ($i=0; $i <count($datausers) ; $i++) {
            if ($datausers[$i]->id!=$role) {
                array_push($id,$datausers[$i]->id);
            } 
        }
        return response()->json(['data' => $a,'id'=>$id]);
    }

   
    public function insert_users(createduserRequest $request)
    {
       if($request->id_roles==1){
        return response()->json(['check' => false, 'msg' => 'Không có quyen truy cập với admin']);
       }
        if (preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $request->email)) {
            return response()->json(['check' => false, 'msg' => 'Vui lòng nhập đúng email']);
        }
        if (preg_match("/^\d{3}-\d{3}-\d{4}$/", $request->phone)) {
            return response()->json(['check' => false, 'msg' => 'Vui lòng nhập đúng số điện thoại']);
        }
        User::create(['name' => $request->name,'email'=> $request->email,'password'=> Hash::make($request->password),'phone'=> $request->phone,'id_roles'=> $request->id_roles,'status' => $request->status]);
        return response()->json(['check' => true, 'msg' => 'Đã thêm tài khoản thành công']);
    }

    public function Updateusers(updateuserRequest $request)
    {
        if (preg_match("/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/", $request->email)) {
            return response()->json(['check' => false, 'msg' => 'Vui lòng nhập đúng email']);
        }
        if (preg_match("/^\d{3}-\d{3}-\d{4}$/", $request->phone)) {
            return response()->json(['check' => false, 'msg' => 'Vui lòng nhập đúng số điện thoại']);
        }
        User::where('name',  $request->name)
            ->update(['name' => $request->name,'email'=> $request->email,'phone'=> $request->phone,'id_roles'=> $request->id_roles,'status' => $request->status]);
        return response()->json(['check' => true, 'msg' => 'Update tài khoản thành công']);
    }

    public function deleteuser(DeleteuserRequest $request)
    {
        User::where('id',  $request->id)
            ->delete();
        return response()->json(['check' => true, 'msg' => 'Xóa tài khoản thành công']);
    }

    public function view_login_user()
    {
        return view('login');
    }

    public function login_user(loginRequest $request)
    {
        if (Auth::attempt(array('email' => $request->email, 'password' => $request->password), true)) {
            $user = auth()->user();
            $rememberToken = $user->remember_token;
            $response=response()->json(['check' => true,'token'=>$rememberToken]);
            $response->withCookie(cookie('token', $rememberToken, 1440));
            return $response;
        }else{
            return response()->json(['check' => false,"msg1" =>"sai mật khẩu vui lòng nhập lại"]);
        }
    }

    public function refresh_token()
    {
        Auth::refresh();
        $user = auth()->user();
        $rememberToken = $user->remember_token;
        $response=response()->json(['check' => true,'token'=>$rememberToken]);
        $response->withCookie(cookie('token', $rememberToken, 1440));
        return $response;
    }


    //delete data model role_education 
    
    
}
