<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateofferwallNetworksRequest;
use App\Http\Requests\UpdateofferwallNetworksRequest;
use App\Repositories\offerwallNetworksRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class offerwallNetworksController extends AppBaseController
{
    /** @var  offerwallNetworksRepository */
    private $offerwallNetworksRepository;

    public function __construct(offerwallNetworksRepository $offerwallNetworksRepo)
    {
        $this->offerwallNetworksRepository = $offerwallNetworksRepo;
    }

    /**
     * Display a listing of the offerwallNetworks.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $offerwallNetworks = $this->offerwallNetworksRepository->all();

        return view('app.admin.offerwall_networks.index')
            ->with('offerwallNetworks', $offerwallNetworks);
    }

    /**
     * Show the form for creating a new offerwallNetworks.
     *
     * @return Response
     */
    public function create()
    {
        return view('app.admin.offerwall_networks.create');
    }

    /**
     * Store a newly created offerwallNetworks in storage.
     *
     * @param CreateofferwallNetworksRequest $request
     *
     * @return Response
     */
    public function store(CreateofferwallNetworksRequest $request)
    {
        $input = $request->all();

        $offerwallNetworks = $this->offerwallNetworksRepository->create($input);

        Flash::success('Offerwall Networks saved successfully.');

        return redirect(route('offerwallNetworks.index'));
    }

    /**
     * Display the specified offerwallNetworks.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $offerwallNetworks = $this->offerwallNetworksRepository->find($id);

        if (empty($offerwallNetworks)) {
            Flash::error('Offerwall Networks not found');

            return redirect(route('offerwallNetworks.index'));
        }

        return view('app.admin.offerwall_networks.show')->with('offerwallNetworks', $offerwallNetworks);
    }

    /**
     * Show the form for editing the specified offerwallNetworks.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $offerwallNetworks = $this->offerwallNetworksRepository->find($id);

        if (empty($offerwallNetworks)) {
            Flash::error('Offerwall Networks not found');

            return redirect(route('offerwallNetworks.index'));
        }

        return view('app.admin.offerwall_networks.edit')->with('offerwallNetworks', $offerwallNetworks);
    }

    /**
     * Update the specified offerwallNetworks in storage.
     *
     * @param int $id
     * @param UpdateofferwallNetworksRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateofferwallNetworksRequest $request)
    {
        $offerwallNetworks = $this->offerwallNetworksRepository->find($id);

        if (empty($offerwallNetworks)) {
            Flash::error('Offerwall Networks not found');

            return redirect(route('offerwallNetworks.index'));
        }

        $offerwallNetworks = $this->offerwallNetworksRepository->update($request->all(), $id);

        Flash::success('Offerwall Networks updated successfully.');

        return redirect(route('offerwallNetworks.index'));
    }

    /**
     * Remove the specified offerwallNetworks from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $offerwallNetworks = $this->offerwallNetworksRepository->find($id);

        if (empty($offerwallNetworks)) {
            Flash::error('Offerwall Networks not found');

            return redirect(route('offerwallNetworks.index'));
        }

        $this->offerwallNetworksRepository->delete($id);

        Flash::success('Offerwall Networks deleted successfully.');

        return redirect(route('offerwallNetworks.index'));
    }
}
