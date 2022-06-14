<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Models\PermanentEmployee;

use App\Models\ImageUpload;
use App\Models\EmailLog;
use Validator;
use DateTime;
use Redirect;
use Auth;

class UserController extends Controller
{

    public function index(Request $request)
    {
        $data['result'] = User::get();
        return view('Admin.user.list', $data);
    }

    public function create()
    {
        return view('Admin.user.add');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        $rules = [
            'first_name' => 'required',
            'last_name' => 'required',
            'emailname' => 'required|email',
            'dob' => 'required',
            'g-recaptcha-response' => 'required',
        ];
        $message = [
            'first_name.required' => 'First name is required',
            'last_name.required' => 'Last name is required',
            'emailname.required' => 'Email is required',
            'emailname.email' => 'Email should be type of email field',
            'dob.required' => 'Date of birth is required',
            'g-recaptcha-response.required' => 'Google recaptcha verification is failed!',
        ];

        if (!isset($input['id'])) {
            $rules = array_merge($rules, ['emailname' => 'unique:users,email']);
            $message = array_merge($message, ['emailname.unique' => "This email id is already taken"]);
        }
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails()) {
            return Redirect::back()->withErrors($validator)->withInput();
        }
        $captcha = $input['g-recaptcha-response'];
        $ipAddress = $_SERVER['REMOTE_ADDR'];
        $googleSecretKey = '6LfgDFkgAAAAAFdH5LqlrSONBeNaQ-bD0pqqJeWw';
        $cresponse = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=" . $googleSecretKey . "&response=" . $captcha . "&remoteip=" . $ipAddress);
        $capthRes = json_decode($cresponse);
        if ($capthRes->success == false) {
            return Redirect::back()->withErrors($validator)->withInput()->with('error', trans('Google recaptcha verification is failed!'));
        }
        if (isset($input['id']) && $input['id'] > 0) {
            $msg = "User updated successfully";
            $user = User::find($input['id']);
        } else {
            $msg = "User added successfully";
            $user = new User;
            $password = $input['password'];
            $user->password = bcrypt($password);
        }
        $user->first_name = $input['first_name'];
        $user->last_name = $input['last_name'];
        $user->email = $input['emailname'];
        $user->dob = $input['dob'];

        $user->status = $input['status'];
        if ($user->save()) {
            $request->session()->flash('alert-success', $msg);
            return redirect('/user');
        } else {
            $request->session()->flash('alert-success', 'Something went wrong');
            return redirect('/user');
        }
    }
    public function edit($id)
    {
        $data['result'] = User::find($id);
        return view('Admin.user.edit', $data);
    }
    public function delete(Request $request, $id = 0)
    {

        $appuserdel = User::find($id);

        if (!empty($appuserdel)) {

            if ($appuserdel->delete()) {
                $request->session()->flash('alert-success', 'User are successfully Delete');
                return redirect('/user');
            } else {
                $request->session()->flash('alert-danger', 'Something went wrong');
                return redirect('/user');
            }
        }
        $request->session()->flash('alert-danger', 'Something went wrong');
        return redirect('/user');
    }
}
