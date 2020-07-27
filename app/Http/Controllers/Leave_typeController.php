<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLeave_typeRequest;
use App\Http\Requests\UpdateLeave_typeRequest;
use App\Repositories\Leave_typeRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Leave_typeController extends AppBaseController
{
    /** @var  Leave_typeRepository */
    private $leaveTypeRepository;

    public function __construct(Leave_typeRepository $leaveTypeRepo)
    {
        $this->leaveTypeRepository = $leaveTypeRepo;
    }

    /**
     * Display a listing of the Leave_type.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $leaveTypes = $this->leaveTypeRepository->all();

        return view('leave_types.index')
            ->with('leaveTypes', $leaveTypes);
    }

    /**
     * Show the form for creating a new Leave_type.
     *
     * @return Response
     */
    public function create()
    {


        return view('leave_types.create');
    }

    /**
     * Store a newly created Leave_type in storage.
     *
     * @param CreateLeave_typeRequest $request
     *
     * @return Response
     */
    public function store(CreateLeave_typeRequest $request)
    {
        $input = $request->all();

        $leaveType = $this->leaveTypeRepository->create($input);

        Flash::success('Leave Type saved successfully.');

        return redirect(route('leaveTypes.index'));
    }

    /**
     * Display the specified Leave_type.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $leaveType = $this->leaveTypeRepository->find($id);

        if (empty($leaveType)) {
            Flash::error('Leave Type not found');

            return redirect(route('leaveTypes.index'));
        }

        return view('leave_types.show')->with('leaveType', $leaveType);
    }

    /**
     * Show the form for editing the specified Leave_type.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $leaveType = $this->leaveTypeRepository->find($id);

        if (empty($leaveType)) {
            Flash::error('Leave Type not found');

            return redirect(route('leaveTypes.index'));
        }

        return view('leave_types.edit')->with('leaveType', $leaveType);
    }

    /**
     * Update the specified Leave_type in storage.
     *
     * @param int $id
     * @param UpdateLeave_typeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateLeave_typeRequest $request)
    {
        $leaveType = $this->leaveTypeRepository->find($id);

        if (empty($leaveType)) {
            Flash::error('Leave Type not found');

            return redirect(route('leaveTypes.index'));
        }

        $leaveType = $this->leaveTypeRepository->update($request->all(), $id);

        Flash::success('Leave Type updated successfully.');

        return redirect(route('leaveTypes.index'));
    }

    /**
     * Remove the specified Leave_type from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $leaveType = $this->leaveTypeRepository->find($id);

        if (empty($leaveType)) {
            Flash::error('Leave Type not found');

            return redirect(route('leaveTypes.index'));
        }

        $this->leaveTypeRepository->delete($id);

        Flash::success('Leave Type deleted successfully.');

        return redirect(route('leaveTypes.index'));
    }
}
