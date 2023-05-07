<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\m6;
use App\Http\Controllers\c6;
use Illuminate\Support\Facades\DB;

class c6 extends Controller
{
    public function insert(Request $req)
    {
      $req->validate([
         'name'=>'required'
      ],
      ['name.required'=>'Username should not be empty']);

        $info=new m6;
        $info->name=$req->name;
        $info->email=$req->email;
        $info->enumber=$req->enumber;
        $info->div=$req->div;
        $info->password=$req->password;
        $info->role=$req->role;
        $info->save();

        $role=$req->role;
        if($role =="User")
        {
            $req->session()->put('email',$req->email);
            return redirect('fb');
        }
        
        
      }

      public function check(Request $req)
      {
         
         $data=DB::table('mig6')->where('email',$req->email)->where('password',$req->password)->get();
         if($data->isNotEmpty())
        {
            $role=$data[0]->role;
            if($role =="User")
            {
                $req->session()->put('email',$data[0]->email);
                return redirect('fb');
            }
            elseif($role=='Admin')
            {
                $req->session()->put('user',$req->email);
                return redirect('test');
            }
        }
        else
        {
           return redirect()->back()->withErrors(['Failure'=>'Invalid Username']);
         }
      }


     public function dispData()
     {
        $in = DB::table('mig6')->where('role','User')->get();
        return view('test',['in'=>$in]);
     }

   //   This is a Delete method to perform the Delete page.
     public function dispDataInDel()
     {
        $in = DB::table('mig6')->where('role','User')->get();
        return view('delete',['in'=>$in]);
     }
     public function del($id)
     {
        $res=DB::table('mig6')->where('id',$id)->delete();
        return redirect('delete');
     }
     
   //   This is a Edit operation in edit pang in Admin Panale.
     public function dispDataInEdit()
     {
        $in = DB::table('mig6')->where('role','User')->get();
        return view('edit',['in'=>$in]);
     }
     
     public function fd($id)
     {
       $data=m6::find($id);
       return view('editdata',['data'=>$data]);
     }
     
     public function update1(Request $req)
     {
      DB::table('mig6')->where('id',$req->id)->update(['name'=>$req->name,'email'=>$req->email,'enumber'=>$req->enumber,'div'=>$req->div,'role'=>$req->role,'password'=>$req->password]);
      return redirect('edit');
     }

   //   This is a Function To perform the feedback with insert in 'feedback' DataBase.
   public function feedback(Request $req){
      // This is a For the First Faculty
      if($req->faculty =='ST'){
         DB::table('feedback')->insert(['email'=>$req->email,'fed1'=>$req->fed1,'fed2'=>$req->fed2,'fed3'=>$req->fed3,'fed4'=>$req->fed4,'fed5'=>$req->fed5 ,'faculty'=>$req->faculty]);
         return redirect('feedback2');
      }
      
      elseif($req->faculty =='MJ'){
         DB::table('feedback')->insert(['email'=>$req->email,'fed1'=>$req->fed1,'fed2'=>$req->fed2,'fed3'=>$req->fed3,'fed4'=>$req->fed4,'fed5'=>$req->fed5 ,'faculty'=>$req->faculty]);
         return redirect('feedback3');
         }
      elseif($req->faculty =='MG'){
                  DB::table('feedback')->insert(['email'=>$req->email,'fed1'=>$req->fed1,'fed2'=>$req->fed2,'fed3'=>$req->fed3,'fed4'=>$req->fed4,'fed5'=>$req->fed5 ,'faculty'=>$req->faculty]);
                  return redirect('feedback4');
               }
      elseif($req->faculty =='PM'){
                  DB::table('feedback')->insert(['email'=>$req->email,'fed1'=>$req->fed1,'fed2'=>$req->fed2,'fed3'=>$req->fed3,'fed4'=>$req->fed4,'fed5'=>$req->fed5 ,'faculty'=>$req->faculty]);
                  return redirect('lastfeedback');
               }
      elseif($req->faculty =='LJ'){
         DB::table('feedback')->insert(['email'=>$req->email,'fed1'=>$req->fed1,'fed2'=>$req->fed2,'fed3'=>$req->fed3,'fed4'=>$req->fed4,'fed5'=>$req->fed5 ,'faculty'=>$req->faculty]);
                  return redirect('thankyou');
       }
                  
   }


   // This is a FeedBack ADMIN Panel in Function.
   public function faculty12()
     {
        $in = DB::table('feedback')->where('faculty',"ST")->get();
     
        return view('faculty1',['data'=>$in]);
     }
     public function feed2()
     {
        $in = DB::table('feedback')->where('faculty',"MJ")->get();
       
        return view('faculty2',['data'=>$in]);
     }

     public function feed3()
     {
        $in = DB::table('feedback')->where('faculty',"MG")->get();
       
        return view('faculty3',['data'=>$in]);
     }
     public function feed4()
     {
        $in = DB::table('feedback')->where('faculty',"PM")->get();
       
        return view('faculty4',['data'=>$in]);
     }
     public function feed5()
     {
        $in = DB::table('feedback')->where('faculty',"PM")->get();
       
        return view('faculty5',['data'=>$in]);
     }


     public function addadmin12(Request $req)
    {
      $req->validate([
         'name'=>'required'
      ],
      ['name.required'=>'Username should not be empty']);

        $info=new m6;
        $info->name=$req->name;
        $info->email=$req->email;
        $info->enumber=$req->enumber;
        $info->div=$req->div;
        $info->password=$req->password;
        $info->role=$req->role;
        $info->save();
         return redirect('test'); 
      }
      public function dispadmin()
      {
         $in = DB::table('mig6')->where('role','Admin')->get();
         return view('alladmin',['in'=>$in]);
      }

      public function search(Request $req)
      {
      $data=DB::table('mig6')->where('name',$req->search)->get();
      return view('test',['in'=>$data]);
      }
   }




































//   
//       if($req->faculty =='PM'){
//          DB::table('feedback')->insert(['email'=>$req->email,'fed1'=>$req->fed1,'fed2'=>$req->fed2,'fed3'=>$req->fed3,'fed4'=>$req->fed4,'fed5'=>$req->fed5 ,'faculty'=>$req->faculty]);
//          return redirect('lastfeedback');
//       }
//       // if($req->faculty =='LJ'){
//       //    return redirect('page4');
//       // }

      
     
//      }

// //    //   This is a feedback table for First-feedback.
// //    public function page1(Request $req){
// //       DB::table('page1')->insert(['email'=>$req->email,'fed1'=>$req->fed1,'fed2'=>$req->fed2,'fed3'=>$req->fed3,'fed4'=>$req->fed4,'fed5'=>$req->fed5]);
// //       return redirect('page2');
// //      }    
// // //   This is a feedback table for Second-feedback.
// //    public function page2(Request $req){
// //     DB::table('page2')->insert(['email'=>$req->email,'fed1'=>$req->fed1,'fed2'=>$req->fed2,'fed3'=>$req->fed3,'fed4'=>$req->fed4,'fed5'=>$req->fed5]);
// //     return redirect('page3');
// //    }  
// // //   This is a feedback table for Thered-feedback.
// //    public function page3(Request $req){
// //    DB::table('page3')->insert(['email'=>$req->email,'fed1'=>$req->fed1,'fed2'=>$req->fed2,'fed3'=>$req->fed3,'fed4'=>$req->fed4,'fed5'=>$req->fed5]);
// //    return redirect('page4');
// //   }  
// //   //   This is a feedback table for Second-feedback.
// //   public function page4(Request $req){
// //    DB::table('page4')->insert(['email'=>$req->email,'fed1'=>$req->fed1,'fed2'=>$req->fed2,'fed3'=>$req->fed3,'fed4'=>$req->fed4,'fed5'=>$req->fed5]);
// //    return redirect('fb');
// //   }  
   
// }
