<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Keynote;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class KeynoteController extends Controller
{
    public function index(): View
    {
        $keynotes = Keynote::all();
        return view('admin.keynotes.index', compact('keynotes'));
    }

    public function create()
    {
        return view('admin.keynotes.create');
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'from' => 'required|string',
                'image' => 'required|image',
            ]);

            $image = $request->file('image');
            $image->storeAs('public/keynotes', $image->hashName());

            Keynote::create([
                'name' => $request->input('name'),
                'from' => $request->input('from'),
                'image' => $image->hashName(),
            ]);

            return redirect()->route('admin.keynotes.index')->with('success', 'Keynote created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.keynotes.create')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function show($id)
    {
        $keynote = Keynote::with('keynotes')->findOrFail($id);
        return view('admin.keynotes.show', compact('keynote'));
    }

    public function edit($id)
    {
        try {
            $keynote = Keynote::findOrFail($id);
            return view('admin.keynotes.edit', compact('keynote'));
        } catch (\Exception $e) {
            return redirect()->route('admin.keynotes.index')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'from' => 'required|string',
                'image' => 'image',
            ]);

            $keynote = Keynote::findOrFail($id);

            if ($request->hasFile('image')) {

                //upload new image
                $image = $request->file('image');
                $image->storeAs('public/keynotes', $image->hashName());

                //delete old image
                Storage::delete('public/keynotes/' . $keynote->image);

                //update post with new image
                $keynote->update([
                    'image'     => $image->hashName(),
                    'name'     => $request->name,
                    'from'   => $request->from
                ]);
            } else {

                //update post without image
                $keynote->update([
                    'name'     => $request->name,
                    'from'   => $request->from
                ]);
            }

            return redirect()->route('admin.keynotes.index')->with('success', 'Keynote updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.keynotes.edit', ['id' => $id])->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $keynote = Keynote::findOrFail($id);

            // Delete the image file associated with the keynote
            if ($keynote->image) {
                Storage::disk('public')->delete($keynote->image);
            }

            $keynote->delete();

            return redirect()->route('admin.keynotes.index')->with('success', 'Keynote deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.keynotes.index')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
