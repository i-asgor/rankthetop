<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\User;
use Mail;
use Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function index(){
      return view('home1');
	}

	public function register(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            $userCount = User::where('email',$data['email'])->count();
            if($userCount>0){
                return redirect()->back()->with('error','Email is already exist');
            }else{
                // echo "Success";die;
                // adding user in table
                $user = new User;
				$user->name = $data['name'];
				$user->phone = $data['phone'];
				$user->email = $data['email'];
				$user->link = $data['social_link'];
                $user->password = bcrypt($data['password']);
                $user->save();
                if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
                    // Session::put('frontSession',$data['email']);
					return redirect()->back()->with('success',"Contact Save SuccessFully");
                }
            }
        }

    }

    public function logout(){
        // Session::forget('frontSession');
        Auth::logout();
        return redirect('/');
    }
    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>";print_r($data);die;
            if(Auth::attempt(['email'=>$data['email'],'password'=>$data['password']])){
                // Session::put('frontSession',$data['email']);
                return view('user.index');
            }else{
                return redirect()->back()->with('error','Invalid email and password!');
            }
        }
    }
// --------------------------------------------------------------------------------------------------------------------
    public function test(){
        return view('user.test');
    }

    // function dynamicfield()
    // {
    //  return view('dynamic_field');
    // }

    // function dynamicfieldinsert(Request $request)
    // {
    //  if($request->ajax())
    //  {
    //   $rules = array(
    //    'first_name.*'  => 'required',
    //    'last_name.*'  => 'required'
    //   );
    //   $error = Validator::make($request->all(), $rules);
    //   if($error->fails())
    //   {
    //    return response()->json([
    //     'error'  => $error->errors()->all()
    //    ]);
    //   }

    //   $first_name = $request->first_name;
    //   $last_name = $request->last_name;
    //   for($count = 0; $count < count($first_name); $count++)
    //   {
    //    $data = array(
    //     'first_name' => $first_name[$count],
    //     'last_name'  => $last_name[$count]
    //    );
    //    $insert_data[] = $data; 
    //   }

    //   DynamicField::insert($insert_data);
    //   return response()->json([
    //    'success'  => 'Data Added successfully.'
    //   ]);
    //  }
    // }
//-----------------------------------------------------------------------------------------------------------------------
	



    public function contact_store(Request $request){
    	$this->validate($request,[
    		'name' => 'required',
    		'email' => 'required',
    		'phone' => 'required',
    		'service_type' => 'required',
    		'message' => 'required',
    	]);

    	$contact = new Contact();

    	$contact->name = $request->name;
    	$contact->email = $request->email;
    	$contact->phone = $request->phone;
    	$contact->service_type = $request->service_type;
    	$contact->message = $request->message;

    	if($contact->save()){
    	// 	// laravel mail Start ..............................................
    	// 	$data = array('name'=> $request->name);
     //  		Mail::send('mail', $data, function($message) {
     //     	$message->to('asgor.ice@gmail.com', 'Asgor')->subject
     //        ('Laravel HTML Testing Mail');
     //     	$message->from('noreply@rankthetop.com','No Reply');
     //  		});
      		// echo "HTML Email Sent. Check your inbox.";
      		// laravel mail End ..............................................
    		return redirect()->back()->with('success',"Contact Save SuccessFully");
    	}else{
    		return redirect()->back()->with('error',"Contact Not Save");
    	}

	}




}
