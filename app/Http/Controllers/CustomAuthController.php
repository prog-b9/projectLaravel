<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
// use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;




class CustomAuthController extends Controller
{
    // this is write in url browser login page
    public function login()
    {
        return view("pages.login");
    }
    // this is write in url browser register page

    public function register()
    {
        return view("pages.register");
    }


    // this function register connection with database
    public function registerClient(Request $request)
    {
        // the client = (email,phone,user,pass) this is <input name="..client.."> (((  NOT Columns In Database  )))
        $request->validate([
            "email" => "required|email|unique:clients",
            "phone" => "required|size:10",
            "user" => "required|min:3",
            "pass" => "required|min:8",
        ]);

        // Connection With Model (Client)
        $client = new Client();
        //   Columns         variable(name)
        $client->email        = $request->email;
        $client->phone_number = $request->phone;
        $client->username     = $request->user;
        $client->password     = bcrypt($request->pass);

        // here save in DB
        $response = $client->save();
        if ($response) {
            // back() is Stop In Pages Register
            return back()->with("success", "Register Successfuly");
        } else {
            return back()->with("fail", "Register failed");
        }
    }

    public function loginClient(Request $request)
    {
        $request->validate([
            "email" => "required|email",
            "pass" => "required|min:8",

        ]);

        $client = Client::where("email", "=", $request->email)->first();
        if ($client) {
            $checkPass = Hash::check($request->pass, $client->password);
            if ($checkPass) {
                $request->session()->put("loginId", $client->id);
                return redirect("homePage");
            } else {
                return back()->with("fail", "password Error");
            }
        } else {
            return back()->with("failEmail", "Email not found in DataBase");
        }
    }



    public function dashboard(Client $clients)
    {
        // this var($data) is storaged one account for session 

        $dataTeacher = [
            [
                "id" => 0,
                "materialAr" => "رياضيات",
                "materialEn" => "Math",
                "nameTeacher" => "محمد خالد",
                "emailTeacher" => "mohammedKhaled@gmail.com",
                "detail" => "انا المدرس محمد خالد تخصصي رياضيات حاصل على شهادة في بكالوريس واستطيع ان ادرس طلاب الابتدائي و المتوسط والثانوي",
            ],
            [
                "id" => 1,
                "materialAr" => "فيزياء",
                "materialEn" => "Pysics",
                "nameTeacher" => "سعد علي",
                "emailTeacher" => "saadAli@gmail.com",
                "detail" => "انا المدرس سعد علي تخصصي فيزياء حاصل على شهادة في بكالوريس واستطيع ان ادرس طلاب الابتدائي و المتوسط والثانوي",
            ],
            [
                "id" => 2,
                "materialAr" => "حاسب الألي",
                "materialEn" => "Computer",
                "nameTeacher" => "عبدالله محمد",
                "emailTeacher" => "abdualah@gmail.com",
                "detail" => "انا المدرس عبد الله محمد تخصصي حاسب الألي حاصل على شهادة في بكالوريس واستطيع ان ادرس طلاب الابتدائي و المتوسط والثانوي",
            ],
            [
                "id" => 3,
                "materialAr" => "حاسب الألي",
                "materialEn" => "Computer",
                "nameTeacher" => "باسل محمد",
                "emailTeacher" => "prog.b9@gmail.com",
                "detail" => "انا المدرس باسل محمد تخصصي تصميم واجهات امامية للمواقع حاصل على شهادة في دبلوم واستطيع ان ادرس طلاب الابتدائي و المتوسط والثانوي",
            ],
            [
                "id" => 4,
                "materialAr" => "كيمياء",
                "materialEn" => "Chamstry",
                "nameTeacher" => "جمال نور",
                "emailTeacher" => "jamalNoor@gmail.com",
                "detail" => "انا المدرس سعد علي تخصصي كيمياء حاصل على شهادة في بكالوريس واستطيع ان ادرس طلاب الثانوي",
            ],
        ];



        $data = [];
        if (Session::has("loginId")) {
            $data = Client::where("id", "=", Session::get("loginId"))->first();
        }

        // this var($clients) is storaged all data
        $clients = Client::latest()->paginate();
        return view("pages.dashboard", compact("clients", "data", "dataTeacher"));
    }

    public function payPage($id)
    {

        


        $dataTeacher = [
            [
                "id" => 0,
                "materialAr" => "رياضيات",
                "materialEn" => "Math",
                "nameTeacher" => "محمد خالد",
                "emailTeacher" => "mohammedKhaled@gmail.com",
                "detail" => "انا المدرس محمد خالد تخصصي رياضيات حاصل على شهادة في بكالوريس واستطيع ان ادرس طلاب الابتدائي و المتوسط والثانوي",
            ],
            [
                "id" => 1,
                "materialAr" => "فيزياء",
                "materialEn" => "Pysics",
                "nameTeacher" => "سعد علي",
                "emailTeacher" => "saadAli@gmail.com",
                "detail" => "انا المدرس سعد علي تخصصي فيزياء حاصل على شهادة في بكالوريس واستطيع ان ادرس طلاب الابتدائي و المتوسط والثانوي",
            ],
            [
                "id" => 2,
                "materialAr" => "حاسب الألي",
                "materialEn" => "Computer",
                "nameTeacher" => "عبدالله محمد",
                "emailTeacher" => "abdualah@gmail.com",
                "detail" => "انا المدرس عبد الله محمد تخصصي حاسب الألي حاصل على شهادة في بكالوريس واستطيع ان ادرس طلاب الابتدائي و المتوسط والثانوي",
            ],
            [
                "id" => 3,
                "materialAr" => "حاسب الألي",
                "materialEn" => "Computer",
                "nameTeacher" => "باسل محمد",
                "emailTeacher" => "prog.b9@gmail.com",
                "detail" => "انا المدرس باسل محمد تخصصي تصميم واجهات امامية للمواقع حاصل على شهادة في دبلوم واستطيع ان ادرس طلاب الابتدائي و المتوسط والثانوي",
            ],
            [
                "id" => 4,
                "materialAr" => "كيمياء",
                "materialEn" => "Chamstry",
                "nameTeacher" => "جمال نور",
                "emailTeacher" => "jamalNoor@gmail.com",
                "detail" => "انا المدرس سعد علي تخصصي كيمياء حاصل على شهادة في بكالوريس واستطيع ان ادرس طلاب الثانوي",
            ],
        ];


        $data = [];
        if (Session::has("loginId")) {
            $data = Client::where("id", "=", Session::get("loginId"))->first();
        }

        // this var($clients) is storaged all data
        $clients = Client::latest()->paginate();
        return view("pages.payPage", compact("clients", "data", "dataTeacher","id"));
    }

    public function send()
    {
        return view("pages.send");
    }





    public function logout()
    {
        if (Session::has("email")) {
            Session::pull("email");
        }
        // $r->session()->forget("loginId");
        // $r->session()->forget("email");
        return redirect("/login");
    }
}
