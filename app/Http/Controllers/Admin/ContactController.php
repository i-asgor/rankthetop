<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contact(){
        $ContactDetails = Contact::get();
        return view('admin.contact_list.contact')->with(compact('ContactDetails'));
    }
}
