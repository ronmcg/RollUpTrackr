<?php namespace App\Http\Controllers;

use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UsersController extends Controller {

    public function profile($name){
        $user = User::where('name', $name)->first();
        return view('user')->with('user', $user);
    }
	/**
	 *
	 *
	 * @return Response
	 */
	public function show()
	{
		return view('auth/register');
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
        $this->validate($request, ['name' => 'required|unique:users', 'password' => 'required|min:6']);
        User::create([
            'name' => $request->get('name'),
            'password' => bcrypt($request->get('password')),
        ]);
        Auth::attempt(['name' => $request->get('name'), 'password' => $request->get('password')]);
        return redirect('/');
	}

    public function login()
    {
        return view('auth/login');
    }

    public function authenticate(Request $request)
    {
        $this->validate($request, ['name' => 'required', 'password' => 'required']);
        $remember = false;
        if($request['remember'] == "on")
        {
            $remember = true;
        }
        if( Auth::viaRemember() ||
            Auth::attempt(['name' => $request->get('name'), 'password' => $request->get('password')], $remember))
        {
            return redirect('/');
        }
        else
        {
            return view('auth/login')->withErrors(['error' => 'Login failed']);
        }

    }

    public function logout(){
        Auth::logout();
        return view('home');
    }
}
