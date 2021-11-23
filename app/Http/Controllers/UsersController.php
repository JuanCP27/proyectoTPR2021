<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $user = User::paginate(5);
        return view('user.index', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $roles = Role::pluck('name','name')->all();
        return view('user.create',compact('roles'));
     

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required',
            //'surname'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|same:confirm-password',
            //'avatar'=>'required|image'
            ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        //if($request->hasFile('avatar')){
            //$file = $request->file('avatar');
           // $foto = time().$file->getClientOriginalName();
           // $file->move(public_path().'/images/',$foto);
       // }
        $user = User::create($input);
        //$user->profile_photo_path = $foto; 
        $user->assignRole($request->input('roles'));
        $user->save();
        $user = User::All();
        return view('user.index', compact('user')); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($user)
    {   
        $user = User::find($user);
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::pluck('name','name')->all();
        $userRole = $user->roles->pluck('name','name')->all();


        return view('user.edit',compact('user','roles','userRole'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$id,
            //'password' => 'same:confirm-password',
            'roles' => 'required',
            //'avatar'=>'required|image',
            ]);
            
        
            
        //if($request->hasFile('avatar')){
          //  $file = $request->file('avatar');
            //$foto = time().$file->getClientOriginalName();
           // $file->move(public_path().'/images/',$foto);
        //}
        
        $input = $request->all();
        if(!empty($input['password'])){ 
            $input['password'] = Hash::make($input['password']);
        }else{
            $input = Arr::except($input,array('password'));    
        }

        $user = User::find($id);
        $user->update($input);
        DB::table('model_has_roles')->where('model_id',$id)->delete();

        //$user->profile_photo_path = $foto;
        $user->assignRole($request->input('roles'));

        return redirect()->route('user.index');
        //->with('success','User updated successfully');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
