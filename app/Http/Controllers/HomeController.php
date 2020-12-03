<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\email;
use Carbon\Carbon;
// use DB;

class HomeController extends Controller
{

    public function welcome() {
        $doc=email::get();
        return view("welcome",compact("doc"));
    }

    public function compose() {
        return view('compose');
    }
    public function updatemail($nid = null) {
        $dac=email::where("id","=",$nid)->get();
        return view('updatemail',compact("dac"));
    }


  public function update(Request $request){
    $main=email::where("id","=",$request->eid);
    $main->update([
        "To" => $request->to,
            "subject" =>$request->subject,
            "discription" =>$request->discription
      
    ]);
    if($main){
        session()->flash('messagee', 'mail update  Successfully..!');
        return redirect()->back();
    }
    else{
        session()->flash('messagee', 'mail Not update ...!');
        return redirect()->back();
    }
  }

  public function DeletePro($id){
  

        $del = email::where("id","=",$id)->delete();
  
        if($del){
            session()->flash('message', 'Product Deleted  Successfully..!');
            return redirect()->back();
        }
        else{
            session()->flash('message', 'Product Not Deleted ...!');
            return redirect()->back();
        }
   
    
    }



    public function submitcompose(Request $request){
        $tabl = new email;
        $data = array(
            "To" => $request->to,
            "subject" =>$request->subject,
            "discription" =>$request->discription,
            "created_at" => now()
        );
        $save = $tabl->insert($data);
        if($save){
            session()->flash('messagee', 'mail Send  Successfully..!');
            return redirect()->back();
        }
        else{
            session()->flash('messagee', 'mail Not Send ...!');
            return redirect()->back();
        }
    }

}
