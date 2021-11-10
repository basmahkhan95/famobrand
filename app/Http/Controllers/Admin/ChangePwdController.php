<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ChangePwdController extends Controller
{
    public function update(Request $request)
    {
        $user = $request->user();

        if ($request->ajax()):
            if (!(Hash::check($request->current_password, $user->password))) {
                return response()->json([
                    'message' => ["Your current password does not matches with the password you provided. Please try again."], 'class' => 'alert-danger'
                ]);
            }

            if (strcmp($request->current_password, $request->password) == 0) {

                return response()->json([
                    'message' => ["New Password cannot be same as your current password. Please choose a different password."],
                    'class' => 'alert-danger',
                    'status' => false
                ]);

            }

            $validator = \Validator::make($request->all(), [
                'current_password' => ['required'],
                'password' => ['required', 'string', 'min:8', 'max:50', 'confirmed'],
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'message' => [$validator->errors()->all()[0]],
                    'class' => 'alert-danger',
                    'status' => false]
                );
            }

            $user->password = bcrypt($request->password);
            $user->save();

            return response()->json([
                'message' => ['Your password has been changed!'],
                'class' => 'alert-success',
                'status' => true
            ]);

        endif;

        return back()->with('error', 'Unable to proceed request.');
    }

}
