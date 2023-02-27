<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;    


class FormController extends Controller
{

    function formdata(){
        $data= Form::all();
        return view('display',['forms'=>$data]);
    }

      function adddata(Request $req){


        $req->validate([
                'name'=>'required',
         
                'email'=>'required',
                'password'=>'required',
             ]);
        $Form = new Form;
        $Form->name=$req->name;
        $Form->lname=$req->lname;
        $Form->email=$req->email;
        $Form->password=$req->password;
        $Form->city=$req->city;
        $Form->pincode=$req->pincode;
        $Form->save();
    return redirect('login');
    }
function logindata(Request $req){
        $req->validate([
            'email'=>'required',
            'password'=>'required',
       ]);


       $form=$req->input('email');
       $req->session()->put('email',$form);
       echo session('profile');   
       

//        $Form = new Form;
//    $Form->pasword=$req->email;
//        $Form->password=$req->password;
        return redirect('profile');
    }
    function delete($id){

        $data=Form::find($id);
        $data->delete();
        return redirect()->back()->with("message",'Data Deleted successfully');

    }
   function update($id){
$data= Form::find($id);

return view('update',['data'=>$data]);


   }
   function updatedata(Request $req){

    $data =  Form::find($req->id);
    $data->name=$req->name;
    $data->lname=$req->lname;
    $data->email=$req->email;
    $data->password=$req->password;
    $data->city=$req->city;
    $data->pincode=$req->pincode;
    $data->save();
    return redirect('display');



   }

   public function index(){
    return view('welcome');
   }

   function upload(Request $req){

    echo "<pre>";
    // print_r($req->all('image'));
$filename = time() ."ws." .$req->file('image')->getclientoriginalExtension();
echo $req->file('image')->storeAS('uploads',$filename);
   }
}
