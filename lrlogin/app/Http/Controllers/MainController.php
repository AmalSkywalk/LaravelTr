<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Validator;
use Auth;

class MainController extends Controller
{
    //
    function index()
	{
		return view('login');

	}

	function checklogin(Request $request){

		$this->validate($request,[
			'email'		=>	'required | email',
			'password'	=>	'required | alphaNum|min:5 '
		]);

		$user_data = array(

			'email'		=> $request->get('email'),
			'password'	=> $request->get('password')
		);

		if(Auth::attempt($user_data))
		{
			return redirect('main/successlogin');
		}
		else{

			return back()->with('error','Wrong Login details');
		}
	}

	function successlogin()
	{
		return view('successlogin');
	}
	function logout()
	{
		Auth::logout();
		return redirect('main');
	}

	function create(){
		return view('create');

	}

	public function store (Request $request){
		 $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' =>'required',
        ]);
  
        User::create($request->all());
   
        return redirect()->route('successlogin')
                        ->with('success','User created successfully.');    

	}
	public function show()
    {
        $users  =  User::latest()->paginate(5);
            // dd($product);
                return view('show',compact('users'))
                ->with('i',(request()->input('page',1)-1)*5);
    }

     public function edit(User $user, $id = null)
    {       
        $user  =  User::findOrFail($id);

                return view('edit',compact('user'));
    }

public function destroy(User $user, $id= null)
    {
        $user  =  User::findOrFail($id);

        $user->delete();
  
        return redirect()->route('show')
                        ->with('success','User deleted successfully');    }

public function update(Request $request, User $user,  $id = null)
    {
                $user  =  User::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password'=> 'required',
        ]);
  
        $user->update($request->all());
  
        return redirect()->route('show')
                        ->with('success','User updated successfully');    }

}
 