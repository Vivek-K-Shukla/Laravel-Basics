<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
  //Show form
      function showlist(){
        return view('save_data');
      }
  //Add Member
      function addmember(Request $req){
        $member=new Member;
        $member->name=$req->name;
        $member->email=$req->email;
        $member->password=$req->password;
        $member->address=$req->address;
        $member->save();
        return redirect('memberlist')->with("Member Added Successfully!");
      }

  //Show Member List    
      function showmember(){
        // $data=Member::all();
        $data=Member::paginate(20);
        return view('memberlist',['members'=>$data]);
      }

  //Delete Member    
      function deletemember($id){
        $fetch=Member::find($id);
        $fetch->delete();
        return redirect('memberlist');
      }

  //Edit Member    
      function editmember($id){
        $edit=Member::find($id);
        return view('editmember',['data'=>$edit]);
      }

  //Update Member    
      function updatemember(Request $req){
        $update=Member::find($req->id);
        $update->name=$req->name;
        $update->email=$req->email;
        $update->password=$req->password;
        $update->address=$req->address;
        $update->save();
        return redirect('memberlist');
      }

  //Show Update Form    
      function upload(){
        return view('upload');
      }

  //Upload File    
      function uploadfile(Request $req){
        $member=new Member;
        return $req->file('doc')->store('img');
      }

      
}
