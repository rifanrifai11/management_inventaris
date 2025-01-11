<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laracasts\Flash\Flash;
use Spatie\Permission\Models\Role;

class UserController extends AppBaseController
{
    /** @var UserRepository $userRepository*/
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    /**
     * Display a listing of the User.
     */
    public function index(Request $request)
    {
        $users = $this->userRepository->paginate(10);

        return view('users.index')
            ->with('users', $users);
    }

    /**
     * Show the form for creating a new User.
     */
    public function create()
    {
        $sRoles=Role::orderBy('name')->get();

        $roles = [];

        return view('users.create',compact('sRoles','roles'));
    }

    /**
     * Store a newly created User in storage.
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();

        $roles=[];

        if($request->has('s_role_id')){
            $roles=$request['s_role_id'];
        }

        try {
            DB::transaction(function () use($input,$roles,$request){
                $user = $this->userRepository->create($input);

                $user->syncRoles($roles);

                $user->password = bcrypt($input['password']);

                $user->save();
            },3);

            Flash::success('User updated successfully.');
        } catch (\Exception $e) {
            Flash::error($e->getMessage());
            return redirect(route('users.index'));
        }

        return redirect(route('users.index'));
    }

    /**
     * Display the specified User.
     */
    public function show($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified User.
     */
    public function edit($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $sRoles=Role::orderBy('name')->get();

        $roles=$user->roles->pluck('id')->toArray();

        return view('users.edit',compact('sRoles','roles'))->with('user', $user);
    }

    /**
     * Update the specified User in storage.
     */
    public function update($id, UpdateUserRequest $request)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $input=$request->all();

        if($input['password']==='' || $input['password']===null){
            unset($input['password']);
        }

        $roles=[];

        if($request->has('s_role_id')){
            $roles=$request['s_role_id'];
        }

        try {
            DB::transaction(function () use($input,$roles,$id,$request){
                $user = $this->userRepository->update($input, $id);
                $user->syncRoles($roles);

                if(isset($input['password'])){
                    $user->password = bcrypt($input['password']);
                }
                $user->save();
            },3);

            Flash::success('User updated successfully.');
        } catch (\Exception $e) {
            Flash::error($e->getMessage());
            return redirect(route('users.index'));
        }

        return redirect(route('users.index'));
    }

    /**
     * Remove the specified User from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('users.index'));
        }

        $this->userRepository->delete($id);

        Flash::success('User deleted successfully.');

        return redirect(route('users.index'));
    }
}
