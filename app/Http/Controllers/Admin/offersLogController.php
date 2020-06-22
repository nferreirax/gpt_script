<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateoffersLogRequest;
use App\Http\Requests\UpdateoffersLogRequest;
use App\Repositories\offersLogRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class offersLogController extends AppBaseController
{
    /** @var  offersLogRepository */
    private $offersLogRepository;

    public function __construct(offersLogRepository $offersLogRepo)
    {
        $this->offersLogRepository = $offersLogRepo;
    }

    /**
     * Display a listing of the offersLog.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $offersLogs = $this->offersLogRepository->all();

        return view('app.admin.offers_logs.index')
            ->with('offersLogs', $offersLogs);
    }

    /**
     * Show the form for creating a new offersLog.
     *
     * @return Response
     */
    public function create()
    {
        return view('app.admin.offers_logs.create');
    }

    /**
     * Store a newly created offersLog in storage.
     *
     * @param CreateoffersLogRequest $request
     *
     * @return Response
     */
    public function store(CreateoffersLogRequest $request)
    {
        $input = $request->all();

        $offersLog = $this->offersLogRepository->create($input);

        Flash::success('Offers Log saved successfully.');

        return redirect(route('offersLogs.index'));
    }

    /**
     * Display the specified offersLog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $offersLog = $this->offersLogRepository->find($id);

        if (empty($offersLog)) {
            Flash::error('Offers Log not found');

            return redirect(route('offersLogs.index'));
        }

        return view('app.admin.offers_logs.show')->with('offersLog', $offersLog);
    }

    /**
     * Show the form for editing the specified offersLog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $offersLog = $this->offersLogRepository->find($id);

        if (empty($offersLog)) {
            Flash::error('Offers Log not found');

            return redirect(route('offersLogs.index'));
        }

        return view('app.admin.offers_logs.edit')->with('offersLog', $offersLog);
    }

    /**
     * Update the specified offersLog in storage.
     *
     * @param int $id
     * @param UpdateoffersLogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateoffersLogRequest $request)
    {
        $offersLog = $this->offersLogRepository->find($id);

        if (empty($offersLog)) {
            Flash::error('Offers Log not found');

            return redirect(route('offersLogs.index'));
        }

        $offersLog = $this->offersLogRepository->update($request->all(), $id);

        Flash::success('Offers Log updated successfully.');

        return redirect(route('offersLogs.index'));
    }

    /**
     * Remove the specified offersLog from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $offersLog = $this->offersLogRepository->find($id);

        if (empty($offersLog)) {
            Flash::error('Offers Log not found');

            return redirect(route('offersLogs.index'));
        }

        $this->offersLogRepository->delete($id);

        Flash::success('Offers Log deleted successfully.');

        return redirect(route('offersLogs.index'));
    }
}
