<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Redirect;


class IndexController extends Controller
{
    public function index()
    {
        $contact = Contact::all();
        return view('index',compact('contact'));
    }
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $validate = $request->validate([
            'firstname'=>   'required',
            'lastname'=>   'required',
            'email'=>   'required|email|unique:contacts',
            'gender'=>   'required',
            'date_of_birth'=>   'required',
            'street'=>   'required',
            'city'=>   'required',
            'contact_mobile'=>   'required|numeric|digits_between:10,16',
            'contact_phone'=>   'required|numeric|digits_between:10,16',
            'hobbies'=>   'required',
        ]);

        $hobbies = implode(',',$request->hobbies);
        $contact = new Contact();
        $contact->firstname = $request->firstname;
        $contact->lastname = $request->lastname;
        $contact->gender = $request->gender;
        $contact->email = $request->email;
        $contact->date_of_birth = $request->date_of_birth;
        $contact->street = $request->street;
        $contact->city = $request->city;
        $contact->contact_mobile = $request->contact_mobile;
        $contact->contact_phone = $request->contact_phone;
        $contact->hobbies = $hobbies;
        $contact->save();

        return Redirect::to('/')->with('success','Contact Added Successfully');   
    }
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('edit',['contact'=>$contact,'hobbies'=>explode(',',$contact->hobbies)]);
    }
    public function update(Request $request,$id)
    {
        $contact = Contact::find($id);
        $contact->firstname = $request->firstname;
        $contact->lastname = $request->lastname;
        $contact->gender = $request->gender;
        $contact->email = $request->email;
        $contact->date_of_birth = $request->date_of_birth;
        $contact->street = $request->street;
        $contact->city = $request->city;
        $contact->contact_mobile = $request->contact_mobile;
        $contact->contact_phone = $request->contact_phone;
        $contact->hobbies = json_encode($request->hobbies);
        $contact->update();

        return Redirect::to('/')->with('success','Contact Updated Successfully');   
    }
    public function delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return Redirect::to('/')->with('success','Contact Deleted Successfully');   
    }
}
