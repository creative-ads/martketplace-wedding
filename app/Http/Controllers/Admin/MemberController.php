<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TransactionRequest;
use App\Transaction;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Midtrans\Snap;
use Midtrans\Config;
use Midtrans\Notification;
use App\Rekening;
use App\User;
use Hash;
use Carbon\Carbon;

class MemberController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = User::paginate(10);
        return view('pages.admin.users.index', compact('items'));
    }

    public function profile_submit(Request $request)
    {
        $admin_data = User::where('email', $request->email)->first();

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'photo' => 'image|mimes:jpg,jpeg,png,gif',
            'roles' => 'required',
            'username' => 'required'
        ]);

        if ($request->password != '') {
            $request->validate([
                'password' => 'required',
                'retype_password' => 'required|same:password'
            ]);
            $admin_data->password = Hash::make($request->password);
        }

        if ($request->hasFile('photo')) {
            $request->validate([
                'photo' => 'image|mimes:jpg,jpeg,png,gif'
            ]);

            if ($admin_data->photo != null) {
                unlink(public_path('uploads/' . $admin_data->photo));
            }
            // unlink(public_path('uploads/'.$admin_data->photo));

            $ext = $request->file('photo')->extension();
            $final_name = 'admin' . '.' . $ext;

            $request->file('photo')->move(public_path('uploads/'), $final_name);

            $admin_data->photo = $final_name;
        }

        $admin_data->name = $request->name;
        $admin_data->username = $request->username;
        $admin_data->roles = $request->roles;

        // $admin_data->email = $request->email;
        $admin_data->update();

        return redirect()->back()->with('success', 'Akun pengguna berhasil diperbarui.');
    }

    public function add()
    {
        return view('pages.admin.users.add');
    }

    public function show($id)
    {
        $item = User::where('id', $id)->first();
        return view('pages.admin.users.show', compact('item'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'retype_password' => 'required|same:password',
            'photo' => 'image|mimes:jpg,jpeg,png,gif',
            'roles' => 'required',
            'username' => 'required'
        ]);

        $ext = $request->file('photo')->extension();
        $final_name = 'profile' . '-' . $request->username . '.' . $ext;
        $request->file('photo')->move(public_path('uploads/'), $final_name);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'photo' => $final_name,
            'password' => Hash::make($request->password),
            'roles' => $request->roles,
            'email_verified_at' => Carbon::now()
        ]);
        return redirect()->back()->with('success', 'Akun pengguna berhasil ditambah.');
    }

    public function edit($id)
    {
        $item = User::where('id', $id)->first();
        return view('pages.admin.users.edit', compact('item'));
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->first();
        unlink(public_path('uploads/' . $user->photo));
        $user->delete();
        return redirect()->back()->with('success', 'Akun pengguna berhasil dihapus.');
    }
}
