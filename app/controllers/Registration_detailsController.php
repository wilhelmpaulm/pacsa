<?php

class Registration_detailsController extends BaseController {

    /**
     * Registration_detail Repository
     *
     * @var Registration_detail
     */
    protected $registration_detail;

    public function __construct(Registration_detail $registration_detail)
    {
        $this->registration_detail = $registration_detail;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $registration_details = $this->registration_detail->all();

        return View::make('registration_details.index', compact('registration_details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('registration_details.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input, Registration_detail::$rules);

        if ($validation->passes())
        {
            $this->registration_detail->create($input);

            return Redirect::route('registration_details.index');
        }

        return Redirect::route('registration_details.create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $registration_detail = $this->registration_detail->findOrFail($id);

        return View::make('registration_details.show', compact('registration_detail'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $registration_detail = $this->registration_detail->find($id);

        if (is_null($registration_detail))
        {
            return Redirect::route('registration_details.index');
        }

        return View::make('registration_details.edit', compact('registration_detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $input = array_except(Input::all(), '_method');
        $validation = Validator::make($input, Registration_detail::$rules);

        if ($validation->passes())
        {
            $registration_detail = $this->registration_detail->find($id);
            $registration_detail->update($input);

            return Redirect::route('registration_details.show', $id);
        }

        return Redirect::route('registration_details.edit', $id)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->registration_detail->find($id)->delete();

        return Redirect::route('registration_details.index');
    }

}