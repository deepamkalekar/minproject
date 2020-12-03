<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\task;


class HomeController extends Controller
{

    public function welcome() {
        $doc=task::get();
        return view("welcome",compact("doc"));
    }

    public function compose() {
        return view('compose');
    }
    public function updatemail($nid = null) {
        $dac=task::where("id","=",$nid)->get();
        return view('updatemail',compact("dac"));
    }


  public function update(Request $request){
    $main=task::where("id","=",$request->eid);
    $main->update([
        "To" => $request->to,
            
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
  

        $del = task::where("id","=",$id)->delete();
  
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
        $tabl = new task;
        $data = array(
            "To" => $request->to,
         
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
