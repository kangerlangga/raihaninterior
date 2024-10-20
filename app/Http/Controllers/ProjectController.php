<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Message;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $data = [
            'judul' => 'Projects',
            'DataP' => Project::orderBy('created_at', 'asc')->get(),
            'cMC' => Message::where('status_messages', 'Unread')->count(),
        ];
        return view('pages.admin.project', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $data = [
            'judul' => 'New Project',
            'cMC' => Message::where('status_messages', 'Unread')->count(),
        ];
        return view('pages.admin.project_add', $data);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        // validate form
        $request->validate([
            'Images'    => 'required|image|mimes:jpeg,jpg,png|max:3072',
            'Name'      => 'required|max:255',
            'Title'     => 'required|max:255',
            'Desc'      => 'required',
            'PoinA'     => 'required|max:255',
            'PoinB'     => 'required|max:255',
            'PoinC'     => 'required|max:255',
        ]);

        //upload image
        $Images = $request->file('Images');
        $imageName = time().Str::random(17).'.'.$Images->getClientOriginalExtension();
        $Images->move('assets/public/img/Project', $imageName);

        //create
        Project::create([
            'id_projects'       => 'Project'.Str::random(33),
            'image_projects'    => $imageName,
            'name_projects'     => $request->Name,
            'title_projects'    => $request->Title,
            'desc_projects'     => $request->Desc,
            'poin_a_projects'   => $request->PoinA,
            'poin_b_projects'   => $request->PoinB,
            'poin_c_projects'   => $request->PoinC,
            'created_by'        => Auth::user()->email,
            'modified_by'       => Auth::user()->email,
        ]);

        //redirect to index
        return redirect()->route('project.add')->with(['success' => 'Project has been Added!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): View
    {
        $data = [
            'judul' => 'Edit Project',
            'EditProject' => Project::findOrFail($id),
            'cMC' => Message::where('status_messages', 'Unread')->count(),
        ];
        return view('pages.admin.project_edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): RedirectResponse
    {
        $request->validate([
            'Images'    => 'image|mimes:jpeg,jpg,png|max:3072',
            'Name'      => 'required|max:255',
            'Title'     => 'required|max:255',
            'Desc'      => 'required',
            'PoinA'     => 'required|max:255',
            'PoinB'     => 'required|max:255',
            'PoinC'     => 'required|max:255',
        ]);

        //get by ID
        $projects = Project::findOrFail($id);

        //cek gambar di upload
        if ($request->hasFile('Images')) {
            $projects_path = 'assets/public/img/Project/' . $projects->image_projects;
            if (file_exists($projects_path)) {
                unlink($projects_path);
            }
            //upload image
            $imgprojects = $request->file('Images');
            $imgprojectsName = time().Str::random(17).'.'.$imgprojects->getClientOriginalExtension();
            $imgprojects->move('assets/public/img/Project', $imgprojectsName);

            //update
            $projects->update([
                'image_projects'    => $imgprojectsName,
                'name_projects'     => $request->Name,
                'title_projects'    => $request->Title,
                'desc_projects'     => $request->Desc,
                'poin_a_projects'   => $request->PoinA,
                'poin_b_projects'   => $request->PoinB,
                'poin_c_projects'   => $request->PoinC,
                'modified_by'       => Auth::user()->email,
            ]);

            //redirect to index
            return redirect()->route('project.data')->with(['success' => 'Project has been Updated!']);
        }else{
            //update
            $projects->update([
                'name_projects'     => $request->Name,
                'title_projects'    => $request->Title,
                'desc_projects'     => $request->Desc,
                'poin_a_projects'   => $request->PoinA,
                'poin_b_projects'   => $request->PoinB,
                'poin_c_projects'   => $request->PoinC,
                'modified_by'           => Auth::user()->email,
            ]);

            //redirect to index
            return redirect()->route('project.data')->with(['success' => 'Project has been Updated!']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //get by ID
        $projects = Project::findOrFail($id);

        //delete image
        $projects_path = 'assets/public/img/Project/' . $projects->image_projects;
        if (file_exists($projects_path)) {
            unlink($projects_path);
        }

        //delete
        $projects->delete();

        //redirect to index
        return redirect()->route('project.data')->with(['success' => 'Project has been Deleted!']);
    }
}
