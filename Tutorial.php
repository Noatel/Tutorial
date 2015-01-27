<?php

class TutorialsController extends \BaseController {

    public $guarded = [];
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        $Tutorial = tutorial::all();

        return View::make('tutorials.index')
            -> with('Tutorials', $Tutorial);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('tutorials.create')-> with('title', 'Tutorial');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        Tutorial::create ([
            'title' => Input::get('title'),
            'body' => Input::get('body')
        ]);

        return Redirect::route('tutorials.index')->with('message', 'Tutorial is added succesful');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $all = Tutorial::find($id)->toArray();
        $array = array('title2'=>$all['title'],'body2'=>$all['body']);
        return Viewer::make('tutorials/edit','edit Tutorial',$array);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {

        $tutorial = tutorials::find($id);

        $tutorial->title = $_POST['title2'];
        $tutorial->body = $_POST['body2'];
        $tutorial->save();

    }

    /**
     * Remove the specified r
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        Tutorial::findOrFail($id)->delete();

        return Redirect::route('tutorial.index');
    }



}