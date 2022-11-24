<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function index()
    {
        $users = User::all()->groupBy('birth_place'); // 


        return response()->json([
            'status' => 200,
            'message' => $users
        ]);
    }

    public function show($id)
    {
        $user = User::where('id', $id)->first();

        return response()->json([
            'status' => 200,
            'message' => $user
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'birth_date' => 'required',
            'birth_place' => 'required',
            'gender' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'birth_date' => $request->birth_date,
            'birth_place' => $request->birth_place,
            'gender' => $request->gender,
        ]);

        return response()->json([
            'status' => 201,
            'message' => 'Insert data successfully',
            'data' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'birth_date' => 'required',
            'birth_place' => 'required',
            'gender' => 'required',
        ]);

        $user = User::where('id', $id)->update([
            'name' => $request->name,
            'birth_date' => $request->birth_date,
            'birth_place' => $request->birth_place,
            'gender' => $request->gender,
        ]);

        return response()->json([
            'status' => 201,
            'message' => 'Updated data successfully'
        ]);
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return response()->json([
            'success' => true,
            'message' => "Successfully deleted"
        ]);
    }
}
