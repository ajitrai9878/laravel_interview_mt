<?php


use App\Models\User;
use Illuminate\Support\Facades\Auth;

if (!function_exists('getUserName')) {

    function getUserName($id)
    {
        if ($id) {
            $data = user::select('first_name', 'last_name')->where(['id' => $id])->first();
            if ($data) {
                return $data->first_name . ' ' . $data->last_name;
            }
            return 'Deleted User';
        }
        return 'Deleted User';
    }

}

if (!function_exists('getUserDetails')) {

    function getUserDetails($id)
    {
        if ($id) {
            return User::find($id);
        }
        return 'Not Found';
    }

}

if (!function_exists('getUser')) {

    function getUser($id)
    {
        return User::find($id);
    }

}

if (!function_exists('login_user')) {

    function login_user()
    {
        return Auth::user();
    }
}

if (!function_exists('login_user_id')) {

    function login_user_id()
    {
        return Auth::id();
    }
}

if (!function_exists('generateInitials')) {
    function generateInitials($name)
    {
        $words = explode(' ', $name);
        return strtoupper($words[0][0]);
    }
}

if (!function_exists('dateFormatCustom')) {
    function dateFormatCustom($date)
    {
        return date('F d, Y', strtotime($date));
    }
}

if (!function_exists('getPluckRandomTextFromPlandromString')) {
    function getPluckRandomTextFromPlandromString($string)
    {
        $txt = "madAJITam";
        $txtLength = strlen($txt) -1;
        $backLength = strlen($txt) - 1;
        $extraTxt = '';
        for($a = 0;$a<=$txtLength;$a++){
            $backLength = strlen($txt) - 1;
            $backLength = $backLength-$a;  
            if($txt[$a] !== $txt[$backLength]){
              $numbers = range($a, $backLength);
              foreach ($numbers as $key=>$number) {
                  if($key !== 0){
                      $extraTxt = $extraTxt.$txt[$number];
                  }
              }
              retuen $extraTxt;
            return true;        
            }
        }
    }
}
