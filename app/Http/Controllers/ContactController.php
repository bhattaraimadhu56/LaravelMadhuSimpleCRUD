<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// while using Query Builder
use DB;
// While Using Mode;
use App\Contact;
class ContactController extends Controller
{
    
     
    public function AddContact()
    {
        return view('add_contact');
    }
    
public function AllContact()
    {
        // This is normal view we will add with function with two parameter
        // with('Give any name By which I can call this page',' variable where data are stored')
        // return view('all_contact');

// use DB;
        // get all data from contact table USING QUERY BUILDER DB::table 
        // here contacts is table name and Contact is model name
       // $variableContact=DB::table('contacts')->get();
        // get all data from contact table USING MODEL
        //dON'T forgeet to write use " App\Contact; "at top so we use Contact::all() (here contact just act as DB::) to get all data
        // here Contact is model name
        $variableContact=Contact::all();

        return view('all_contact')->with('callmePage',$variableContact);


    }


    
    public function InsertContact(Request $request)
    {
        //we will get all the data from the text field of the form
        // to get data use @csrf in the form ok
        // $data=array();
        // $data['name']=$request->name1Form;
        // $data['email']=$request->email1Form;
        // $data['phone']=$request->phone1Form ;
       
     //  echo "<pre>";
      //  print_r($data);
       // echo "</pre>";

        //Now after coming data insert into Database
        // At top write 
        //Use DB;
      //  $contact=DB::table('contacts')->insert($data);
        // if ($st)
        // {
        //     echo"Data Inserted Successfully !! in database";
        // }
        // else
        //     {
        //     echo"Sorry! Unable to insert data in database";
        // }
// here Contact is the Model which is inside App\Provider\Contact 
        // wtrite at top use use App\Contact;
$contact=new Contact;
$contact->name=$request->name1Form;
$contact->email=$request->email1Form;
$contact->phone=$request->phone1Form;
$contact->save();
// just for checking magic all() method
// $contact=request->all();
// $contact->save();
//for query builder if contidtion
//if ($contact){
// for Model if Condition if ($contact->save()){
if ($contact->save()){
    $notification = array('message'=>'Contact Added Successfully!!',
                          'alert-type'=>'success');   
                         //For notification write this
                         // return redirect()->back()->with($notification); 
                          //for inserting data showing all data redirecting page to all-contact
                          return redirect()->route('allContact')->with($notification);


}
else{
    $notification = array('message'=>'Sorry! Unable to insert in database!!',
                          'alert-type'=>'error');      
}
//return redirect()->back()->withErrors($validator)->withInput();
    }


    public function UpdateContact(Request $request , $id){
// using query builder
 //    $data=array();
 //        $data['name']=$request->name1Form;
 //        $data['email']=$request->email1Form;
 //        $data['phone']=$request->phone1Form ;
       
 // $contact=DB::table('contacts')->where ('id',$id)->update($data);


 // using Model Eloquemt Model method
    $contact=Contact::find($id);
    $contact->name=$request->name1Form;
    $contact->email=$request->email1Form;
    $contact->phone=$request->phone1Form;
    $contact->save();


if ($contact->save()){
    $notification = array('message'=>'Contact Updated Successfully!!',
                          'alert-type'=>'success');   
                         //For notification write this
                         // return redirect()->back()->with($notification); 
                          //for inserting data showing all data redirecting page to all-contact
                          return redirect()->route('allContact')->with($notification);


}
else{
    $notification = array('message'=>'Sorry! Unable to update in database!!',
                          'alert-type'=>'error');      
}
//return redirect()->back()->withErrors($validator)->withInput();
    } // end of function UpdateContact



    
    public function ViewContact($id)
    {
        //using Query Buider Method working fine with actual data

       $con=DB::table('contacts')->where('id',$id)->first();
       // print_r($con);
       // exit();
        //using Model  Illuminate Method something wrong only showing first data
       //  $con=Contact::find($id)->first();
       //  echo '<pre>';
       // print_r($con);
       // exit();
        return view('view_data')->with('single_con', $con);

    }

   
    public function EditContact(Request $request, $id){
        //using Query Buider Method

    $des = DB::table('contacts')->where('id',$id)->first();
        //using Model Eloquent Method something wrong only showing first data
    //$des = Contact::find($id)->first();

    return view('edit_contact')->with('single_view', $des);
    
    }

    
    public function DeleteContact($id)
    {
        //Using Query Builder table contacts
        //print_r($id);
        //exit();
        $del = DB::table('contacts')->where('id',$id)->delete();
        // Using Model Contact
        //$del=Contact::find($id)->delete();

    if ($del){
    $notification = array('message'=>'Contact Deleted Successfully!!',
                          'alert-type'=>'success');   
                         //For notification write this
                          return redirect()->back()->with($notification); 
}
else{
    $notification = array('message'=>'Sorry! Unable to insert in database!!',
                          'alert-type'=>'error');      
}
    }
}
