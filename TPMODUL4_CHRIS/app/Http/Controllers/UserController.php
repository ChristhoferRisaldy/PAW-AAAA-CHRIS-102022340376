<?php
// HINT: Add the index, create, store, edit, update, and destroy methods to the UserController
namespace App\Http\Controllers;
// 1. Import the User model
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // 2. Display the list of all users from the users table using compact
    public function index() {
        // fill in here
        $users = User::all();
        return view('users.index', compact('users'));
    }
    // 3. Display the form to add a new user
    public function create() {
        // fill in here
        return view('users.create');
    }
    // 4. Save the new user to the users table
    public function store(Request $request) {
        $request->validate([
            // fill in here
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required|string|max:20',           
        ]);
        User::create($request->all());
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }
    // 5. Display the form to edit an existing user
    public function edit($id) {
        // fill in here
        $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }
    // 6. Save the user's changes to the users table
    public function update(Request $request, $id) {
        $user = User::findOrFail($id);
        $request->validate([
            // fill in here
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $user->id,
            'phone' => 'required|string|max:20',
        ]);
        $user->update($request->all());
        return redirect()->route('users.index')->with('success', 'User updated successfully.');
    }
    // 7. Delete the user from the users table
    public function destroy($id) {
        // fill in here
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}
