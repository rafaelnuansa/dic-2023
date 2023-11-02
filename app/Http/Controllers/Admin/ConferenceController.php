<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Conference;
use App\Models\ConferenceKeynote;
use App\Models\Keynote;
use Illuminate\Support\Facades\Storage;
use App\Models\FieldOfStudy;

class ConferenceController extends Controller
{
    public function index()
    {
        $conferences = Conference::latest()->paginate(8);
        return view('admin.conferences.index', compact('conferences'));
    }

    public function create()
    {
        $fieldOfStudies = FieldOfStudy::all();
        return view('admin.conferences.create', compact('fieldOfStudies'));
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'shortname' => 'required|string',
                'description' => 'required',
                'year' => 'required|string',
                'month' => 'required|string',
                'start_date' => 'required|date',
                'end_date' => 'required|date',
                'location' => 'required|string',
                'image' => 'required|image|mimes:jpeg,jpg,png,webp|max:2048',
                'field_of_study' => 'required|array|exists:field_of_studies,id',
                'registration_link' => 'required|string',
            ]);
    
            // Handle file upload
            if ($request->file('image')) {
                $image = $request->file('image');
                $image->storeAs('public/conferences', $image->hashName());
            }
    
            $fieldOfStudyIds = $request->input('field_of_study', []);
            $selectedFieldOfStudies = FieldOfStudy::whereIn('id', $fieldOfStudyIds)->get();
    
            $conference = Conference::create([
                'name' => $request->input('name'),
                'theme' => $request->input('theme'),
                'shortname' => $request->input('shortname'),
                'description' => $request->input('description'),
                'year' => $request->input('year'),
                'month' => $request->input('month'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
                'location' => $request->input('location'),
                'image' => $image->hashName(),
                'registration_link' => $request->registration_link,
            ]);
    
            // Attach selected field of studies to the conference
            $conference->fieldOfStudies()->attach($selectedFieldOfStudies->pluck('id'));
    
            return redirect()->route('admin.conferences.index')->with('success', 'Conference created successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.conferences.create')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
    

    public function show($id)
    {
        try {
            $conference = Conference::findOrFail($id);
            return view('admin.conferences.show', compact('conference'));
        } catch (\Exception $e) {
            return redirect()->route('admin.conferences.index')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $conference = Conference::findOrFail($id);
            $fieldOfStudies = FieldOfStudy::all();
            $selectedFieldOfStudies = $conference->fieldOfStudies->pluck('id')->toArray();
    
            return view('admin.conferences.edit', compact('conference', 'fieldOfStudies', 'selectedFieldOfStudies'));
        } catch (\Exception $e) {
            return redirect()->route('admin.conferences.index')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
    
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|string',
                'shortname' => 'required|string',
                'theme' => 'required',
                'description' => 'required',
                'year' => 'required|string',
                'month' => 'required|string',
                'start_date' => 'required|date',
                'end_date' => 'required|date',
                'location' => 'required|string',
                'image' => 'image|mimes:jpeg,jpg,png,webp|max:2048', // Allow image update, but not required.
                'field_of_study' => 'required|array|exists:field_of_studies,id',
                'registration_link' => 'required|string',
            ]);
    
            $conference = Conference::findOrFail($id);
    
            // Handle file upload if a new image is provided
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $image->storeAs('public/conferences', $image->hashName());
    
                // Delete the old image if it exists
                if ($conference->image) {
                    Storage::delete('public/conferences/' . $conference->image);
                }
    
                $conference->update([
                    'image' => $image->hashName(),
                ]);
            }
    
            $fieldOfStudyIds = $request->input('field_of_study', []);
            $selectedFieldOfStudies = FieldOfStudy::whereIn('id', $fieldOfStudyIds)->get();
    
            $conference->update([
                'name' => $request->input('name'),
                'theme' => $request->input('theme'),
                'shortname' => $request->input('shortname'),
                'description' => $request->input('description'),
                'year' => $request->input('year'),
                'month' => $request->input('month'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
                'location' => $request->input('location'),
                'registration_link' => $request->input('registration_link'),
            ]);
    
            // Sync selected field of studies with the conference
            $conference->fieldOfStudies()->sync($selectedFieldOfStudies->pluck('id'));
    
            return redirect()->route('admin.conferences.index')->with('success', 'Conference updated successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.conferences.edit', $id)->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
    

    public function destroy($id)
    {
        try {
            $conference = Conference::findOrFail($id);

            // Delete the image file associated with the conference
            if ($conference->image) {
                Storage::disk('public')->delete($conference->image);
            }

            $conference->delete();

            return redirect()->route('admin.conferences.index')->with('success', 'Conference deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.conferences.index')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function assign($id)
    {
        try {
            $conference = Conference::findOrFail($id);
            $keynotes = Keynote::all();
            $fieldOfStudies = FieldOfStudy::all();
            return view('admin.conferences.assign', compact('conference', 'keynotes', 'fieldOfStudies'));
        } catch (\Exception $e) {
            return redirect()->route('admin.conferences.index')->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function storeAssign(Request $request, $id)
    {
        try {
            $request->validate([
                'keynote' => 'required|exists:keynotes,id',
            ]);

            $conference = Conference::findOrFail($id);
            $keynoteId = $request->input('keynote');

            if (!$conference->keynotes->contains($keynoteId)) {
                $conference->keynotes()->attach($keynoteId);
            }

            return redirect()->route('admin.conferences.show', $conference->id)->with('success', 'Keynote assigned successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.conferences.assign', $id)->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }

    public function removeKeynote(Request $request, $conferenceId, $keynoteId)
    {
        try {
            $conference = Conference::findOrFail($conferenceId);
            $keynote = Keynote::findOrFail($keynoteId);

            if ($conference->keynotes->contains($keynoteId)) {
                $conference->keynotes()->detach($keynoteId);
            }

            return redirect()->route('admin.conferences.show', $conference->id)->with('success', 'Keynote removed successfully.');
        } catch (\Exception $e) {
            return redirect()->route('admin.conferences.show', $conferenceId)->with('error', 'An error occurred: ' . $e->getMessage());
        }
    }
}
