<?php


namespace App\Http\Controllers;

use App\Models\Home\projectHome;
use Illuminate\Http\Request;

class ProjectHomeController extends Controller {

    public function index() {
        $projects = projectHome::query();

        $projects = $projects->orderBy( 'id', 'asc' )->paginate( 10 );

        return view( 'dashboard.homeControl.projects.index', compact( 'projects' ) );
    }



    public function create() {
        return view( 'dashboard.homeControl.projects.addproject' );

    }



    public function store( Request $request ) {
        $request->validate( [
            'name'=>'required',
            'description'=>'required',
            'img'=>'required'
        ] );
        $input = $request->except('img');
        if ( $request->hasFile('img') ) {
            $image = $request->file('img');
            $imageName = uniqid().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/'), $imageName);
            $input[ 'img' ] = asset('images/' . $imageName);

        }

        projectHome::create( $input );
        return redirect()->route('projectsHome.index')->with('success', 'project added successfully!');
    }



    public function show( projectHome $projectHome ) {

    }



    public function edit( $id ) {
        $project = projectHome::findOrFail( $id );
        return view( 'dashboard.homeControl.projects.editproject', compact( 'project' ) );
    }



    public function update( Request $request, $id ) {
        $request->validate( [
            'name'=>'nullable',
            'description'=>'nullable',
            'img'=>'nullable'
        ] );
        $input = $request->except( 'img' );

        if ( $request->hasFile( 'img' ) ) {
            $image = $request->file( 'img' );
            $imageName = uniqid().'.'.$image->getClientOriginalExtension();
            $image->move( public_path( 'images/' ), $imageName );
            $input[ 'img' ] = asset( 'images/' . $imageName );

        }
        $project = projectHome::findOrFail( $id );
        $project->update( $input );
        return redirect()->route( 'projectsHome.index' )->with( 'success', 'project update successfully!' );
    }



    public function destroy( $id ) {
        projectHome::findOrFail( $id )->delete();
        return back()->with( 'success', 'project delete successfully!' );
    }
}


