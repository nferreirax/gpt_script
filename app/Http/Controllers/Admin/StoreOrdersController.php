<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateStoreOrdersRequest;
use App\Http\Requests\UpdateStoreOrdersRequest;
use App\Repositories\StoreOrdersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class StoreOrdersController extends AppBaseController
{
    /** @var  StoreOrdersRepository */
    private $storeOrdersRepository;

    public function __construct(StoreOrdersRepository $storeOrdersRepo)
    {
        $this->storeOrdersRepository = $storeOrdersRepo;
    }

    /**
     * Display a listing of the StoreOrders.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $storeOrders = $this->storeOrdersRepository->all();

        return view('app.admin.store_orders.index')
            ->with('storeOrders', $storeOrders);
    }

    /**
     * Show the form for creating a new StoreOrders.
     *
     * @return Response
     */
    public function create()
    {
        return view('app.admin.store_orders.create');
    }

    /**
     * Store a newly created StoreOrders in storage.
     *
     * @param CreateStoreOrdersRequest $request
     *
     * @return Response
     */
    public function store(CreateStoreOrdersRequest $request)
    {
        $input = $request->all();

        $storeOrders = $this->storeOrdersRepository->create($input);

        Flash::success('Store Orders saved successfully.');

        return redirect(route('storeOrders.index'));
    }

    /**
     * Display the specified StoreOrders.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $storeOrders = $this->storeOrdersRepository->find($id);

        if (empty($storeOrders)) {
            Flash::error('Store Orders not found');

            return redirect(route('storeOrders.index'));
        }

        return view('app.admin.store_orders.show')->with('storeOrders', $storeOrders);
    }

    /**
     * Show the form for editing the specified StoreOrders.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $storeOrders = $this->storeOrdersRepository->find($id);

        if (empty($storeOrders)) {
            Flash::error('Store Orders not found');

            return redirect(route('storeOrders.index'));
        }

        return view('app.admin.store_orders.edit')->with('storeOrders', $storeOrders);
    }

    /**
     * Update the specified StoreOrders in storage.
     *
     * @param int $id
     * @param UpdateStoreOrdersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStoreOrdersRequest $request)
    {
        $storeOrders = $this->storeOrdersRepository->find($id);

        if (empty($storeOrders)) {
            Flash::error('Store Orders not found');

            return redirect(route('storeOrders.index'));
        }

        $storeOrders = $this->storeOrdersRepository->update($request->all(), $id);

        Flash::success('Store Orders updated successfully.');

        return redirect(route('storeOrders.index'));
    }

    /**
     * Remove the specified StoreOrders from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $storeOrders = $this->storeOrdersRepository->find($id);

        if (empty($storeOrders)) {
            Flash::error('Store Orders not found');

            return redirect(route('storeOrders.index'));
        }

        $this->storeOrdersRepository->delete($id);

        Flash::success('Store Orders deleted successfully.');

        return redirect(route('storeOrders.index'));
    }
}
