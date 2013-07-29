<?php

class RegistrationsController extends BaseController {

    /**
     * Registration Repository
     *
     * @var Registration
     */
    protected $registration;

    public function __construct(Registration $registration)
    {
        $this->registration = $registration;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $registrations = $this->registration->all();

        return View::make('registrations.index', compact('registrations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return View::make('registrations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $input = Input::all();
        $validation = Validator::make($input, Registration::$rules);

        if ($validation->passes())
        {
            $this->registration->create($input);

            return Redirect::route('registrations.index');
        }

        return Redirect::route('registrations.create')
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
        $registration = $this->registration->findOrFail($id);

        return View::make('registrations.show', compact('registration'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $registration = $this->registration->find($id);

        if (is_null($registration))
        {
            return Redirect::route('registrations.index');
        }

        return View::make('registrations.edit', compact('registration'));
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
        $validation = Validator::make($input, Registration::$rules);

        if ($validation->passes())
        {
            $registration = $this->registration->find($id);
            $registration->update($input);

            return Redirect::route('registrations.show', $id);
        }

        return Redirect::route('registrations.edit', $id)
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
        $this->registration->find($id)->delete();

        return Redirect::route('registrations.index');
    }

}