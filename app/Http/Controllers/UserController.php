<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class UserController extends Controller
{
    public function index()
    {
        return view('users.index'); // Your Blade template for the DataTable
    }

    //Display Data Tables

    public function getData(Request $request)
    {
        $users = User::query()->get(); // Fetch data from the User model

        // // Log the users to check if the query is correct
        // \Log::debug('Fetched users: ', $users->toArray());
        

        
        return DataTables::of($users)
            ->addColumn('action', function ($user) {
                return '<a href="/users/edit/'.$user->id.'" class="btn font-bold underline btn-sm btn-primary">Edit</a>';
            })
            ->editColumn('created_at', function ($user) {
                return $user->created_at->format('Y-m-d');
            })
            ->editColumn('updated_at', function ($user) {
                return $user->updated_at->format('Y-m-d');
            })
            ->editColumn('email_verified_at', function ($user){
                return $user->email_verified_at->format('Y-m-d');
            })
            ->addColumn('password', function ($user) {
                return $user->password;
            })
            

            ->make(true);
            
    }

    //Delete Users Function

    public function destroy($id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not found.'], 404);
        }

        $user->delete();

        return response()->json(['success' => true, 'message' => 'User deleted successfully.']);
    }

    //Edit Users Function

    public function edit($id)
    {
        $user = User::findOrFail($id); // Fetch the user by ID
        return view('users.edit', compact('user')); // Pass user data to the view
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        // Validate the request
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        // Update the user
        $user->update($request->only('name', 'email'));

        return redirect()->route('users.index')->with('success', 'User updated successfully!');
    }

}
