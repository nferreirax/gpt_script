<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateoffersHistoryRequest;
use App\Http\Requests\UpdateoffersHistoryRequest;
use App\Repositories\offersHistoryRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class offersHistoryController extends AppBaseController
{
    /** @var  offersHistoryRepository */
    private $offersHistoryRepository;

    public function __construct(offersHistoryRepository $offersHistoryRepo)
    {
        $this->offersHistoryRepository = $offersHistoryRepo;
    }

    /**
     * Display a listing of the offersHistory.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $offersHistories = $this->offersHistoryRepository->all();

        return view('app.admin.offers_histories.index')
            ->with('offersHistories', $offersHistories);
    }

    /**
     * Show the form for creating a new offersHistory.
     *
     * @return Response
     */
    public function create()
    {
        return view('app.admin.offers_histories.create');
    }

    /**
     * Store a newly created offersHistory in storage.
     *
     * @param CreateoffersHistoryRequest $request
     *
     * @return Response
     */
    public function store(CreateoffersHistoryRequest $request)
    {
        $input = $request->all();

        $offersHistory = $this->offersHistoryRepository->create($input);

        Flash::success('Offers History saved successfully.');

        return redirect(route('offersHistories.index'));
    }

    /**
     * Display the specified offersHistory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $offersHistory = $this->offersHistoryRepository->find($id);

        if (empty($offersHistory)) {
            Flash::error('Offers History not found');

            return redirect(route('offersHistories.index'));
        }

        return view('app.admin.offers_histories.show')->with('offersHistory', $offersHistory);
    }

    /**
     * Show the form for editing the specified offersHistory.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $offersHistory = $this->offersHistoryRepository->find($id);

        if (empty($offersHistory)) {
            Flash::error('Offers History not found');

            return redirect(route('offersHistories.index'));
        }

        return view('app.admin.offers_histories.edit')->with('offersHistory', $offersHistory);
    }

    /**
     * Update the specified offersHistory in storage.
     *
     * @param int $id
     * @param UpdateoffersHistoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateoffersHistoryRequest $request)
    {
        $offersHistory = $this->offersHistoryRepository->find($id);

        if (empty($offersHistory)) {
            Flash::error('Offers History not found');

            return redirect(route('offersHistories.index'));
        }

        $offersHistory = $this->offersHistoryRepository->update($request->all(), $id);

        Flash::success('Offers History updated successfully.');

        return redirect(route('offersHistories.index'));
    }

    /**
     * Remove the specified offersHistory from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $offersHistory = $this->offersHistoryRepository->find($id);

        if (empty($offersHistory)) {
            Flash::error('Offers History not found');

            return redirect(route('offersHistories.index'));
        }

        $this->offersHistoryRepository->delete($id);

        Flash::success('Offers History deleted successfully.');

        return redirect(route('offersHistories.index'));
    }
}
