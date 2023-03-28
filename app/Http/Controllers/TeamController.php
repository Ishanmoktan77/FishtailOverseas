<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    public function index()
    {
        $teams = Team::all();
        return view('frontend.team', compact('teams'));
    }

    public function indexAdminPanel()
    {
        $teams = Team::orderBy('created_at', 'desc')->paginate(10);
        return view('adminPanel.team', compact('teams'));
    }

    public function create()
    {
        return view('adminPanel.team_add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'post' => 'required|string',
            'message' => 'required|string',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $team = new Team;
        $team->name = $validated['name'];
        $team->post = $validated['post'];
        $team->message = $validated['message'];

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('public/teams');
            $team->image_url = str_replace('public/', '', $imagePath);
        }

        $team->save();

        return redirect(route('admin.team'));
    }

    public function destroy($id)
    {
        $team = Team::find($id);

        // Delete the image file from storage
        Storage::delete('public/' . $team->image_url);

        $team->delete();

        return redirect()->route('admin.team')->with('success', 'Team member has been deleted successfully.');
    }
}
