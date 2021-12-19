<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Item;
use App\Retail;
use App\Transportation;
use DB;

class USPController extends Controller
{
    public function Add(Request $request)
    {
        $validator = Validator::make($request->all(),[
        'ItemNumber'  =>  'required',
        'Weight' => 'required',
        'Dimension'=>'required',
        'Insurance_Amount'=>'required',
        'Destination'=>'required',
        'delivery_date'=>'required',
        'type'=>'required',
        'Address'=>'required',
        'Delivery_Route'=>'required',
        'Delivery_Type'=>'required',
     ]);

try{
     $reaquetData=$request->all();
        $item = new Item($reaquetData);
        $item->save();
        $ID = $item->id;

        $reatail = new Retail();
        $reatail->type=$request->type;
        $reatail->address=$request->Address;
        $reatail->ItemID=$ID;
        $reatail->save();

        $transportation= new Transportation();
        $transportation->schedule_number=random_int(1,100);
        $transportation->type=$request->Delivery_Type;
        $transportation->delivery_route=$request->Delivery_Route;
        $transportation->ItemID=$reatail->id;
        $transportation->save();
         $items = Item::get();
        return view('get',compact('items'));
    }catch(Exception $e){
        DB::beginTransaction();
            DB::rollback();
     }
}

public function Update(Request $request)
    {


    try{
        Item::where('id',$request->route('id'))->update(array(
                            'ItemNumber'=>$request->ItemNumber,
                            'Weight'=>$request->Weight,
                            'Dimension'=>$request->Dimension,
                            'Insurance_amount'=>$request->Insurance_Amount,
                            'destination'=>$request->Dimension,
                            'delivery_date'=>$request->delivery_date,
      ));

        Retail::where('ItemID',$request->route('id'))->update(array(
                            'type'=>$request->type,
                            'address'=>$request->Address,

      ));
      $reatail= Retail::where('ItemID',$request->route('id'))->first();

    Transportation::where('ItemID',$reatail->id)->update(array(
                            'type'=>$request->type,
                            'delivery_route'=>$request->Delivery_Type,

     ));
      $items = Item::get();
        return view('get',compact('items'));
      }catch(Exception $e){
    DB::beginTransaction();
            DB::rollback();
    }
    }

public function delete(Request $request)
    {
     try{
        Item::where('id', $request->id)->delete();
        $reatail=Retail::where('ItemID', $request->id)->delete();
        $items = Item::get();
        return view('get',compact('items'));

        }catch(Exception $e){
    DB::beginTransaction();
            DB::rollback();
    }
    }
    public function get()
    {
        $items = Item::get();
        return view('get',compact('items'));

    }
}



