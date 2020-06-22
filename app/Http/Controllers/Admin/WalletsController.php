<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateWalletsRequest;
use App\Http\Requests\UpdateWalletsRequest;
use App\Repositories\WalletsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class WalletsController extends AppBaseController
{
    /** @var  WalletsRepository */
    private $walletsRepository;

    public function __construct(WalletsRepository $walletsRepo)
    {
        $this->walletsRepository = $walletsRepo;
    }

    /**
     * Display a listing of the Wallets.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $wallets = $this->walletsRepository->all();

        return view('app.admin.wallets.index')
            ->with('wallets', $wallets);
    }

    /**
     * Show the form for creating a new Wallets.
     *
     * @return Response
     */
    public function create()
    {
        return view('app.admin.wallets.create');
    }

    /**
     * Store a newly created Wallets in storage.
     *
     * @param CreateWalletsRequest $request
     *
     * @return Response
     */
    public function store(CreateWalletsRequest $request)
    {
        $input = $request->all();

        $wallets = $this->walletsRepository->create($input);

        Flash::success('Wallets saved successfully.');

        return redirect(route('wallets.index'));
    }

    /**
     * Display the specified Wallets.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $wallets = $this->walletsRepository->find($id);

        if (empty($wallets)) {
            Flash::error('Wallets not found');

            return redirect(route('wallets.index'));
        }

        return view('app.admin.wallets.show')->with('wallets', $wallets);
    }

    /**
     * Show the form for editing the specified Wallets.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $wallets = $this->walletsRepository->find($id);

        if (empty($wallets)) {
            Flash::error('Wallets not found');

            return redirect(route('wallets.index'));
        }

        return view('app.admin.wallets.edit')->with('wallets', $wallets);
    }

    /**
     * Update the specified Wallets in storage.
     *
     * @param int $id
     * @param UpdateWalletsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateWalletsRequest $request)
    {
        $wallets = $this->walletsRepository->find($id);

        if (empty($wallets)) {
            Flash::error('Wallets not found');

            return redirect(route('wallets.index'));
        }

        $wallets = $this->walletsRepository->update($request->all(), $id);

        Flash::success('Wallets updated successfully.');

        return redirect(route('wallets.index'));
    }

    /**
     * Remove the specified Wallets from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $wallets = $this->walletsRepository->find($id);

        if (empty($wallets)) {
            Flash::error('Wallets not found');

            return redirect(route('wallets.index'));
        }

        $this->walletsRepository->delete($id);

        Flash::success('Wallets deleted successfully.');

        return redirect(route('wallets.index'));
    }
}
