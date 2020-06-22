<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateStoreProductsRequest;
use App\Http\Requests\UpdateStoreProductsRequest;
use App\Repositories\StoreProductsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class StoreProductsController extends AppBaseController
{
    /** @var  StoreProductsRepository */
    private $storeProductsRepository;

    public function __construct(StoreProductsRepository $storeProductsRepo)
    {
        $this->storeProductsRepository = $storeProductsRepo;
    }

    /**
     * Display a listing of the StoreProducts.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $storeProducts = $this->storeProductsRepository->all();

        return view('app.admin.store_products.index')
            ->with('storeProducts', $storeProducts);
    }

    /**
     * Show the form for creating a new StoreProducts.
     *
     * @return Response
     */
    public function create()
    {
        return view('app.admin.store_products.create');
    }

    /**
     * Store a newly created StoreProducts in storage.
     *
     * @param CreateStoreProductsRequest $request
     *
     * @return Response
     */
    public function store(CreateStoreProductsRequest $request)
    {
        $input = $request->all();

        $storeProducts = $this->storeProductsRepository->create($input);

        Flash::success('Store Products saved successfully.');

        return redirect(route('storeProducts.index'));
    }

    /**
     * Display the specified StoreProducts.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $storeProducts = $this->storeProductsRepository->find($id);

        if (empty($storeProducts)) {
            Flash::error('Store Products not found');

            return redirect(route('storeProducts.index'));
        }

        return view('app.admin.store_products.show')->with('storeProducts', $storeProducts);
    }

    /**
     * Show the form for editing the specified StoreProducts.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $storeProducts = $this->storeProductsRepository->find($id);

        if (empty($storeProducts)) {
            Flash::error('Store Products not found');

            return redirect(route('storeProducts.index'));
        }

        return view('app.admin.store_products.edit')->with('storeProducts', $storeProducts);
    }

    /**
     * Update the specified StoreProducts in storage.
     *
     * @param int $id
     * @param UpdateStoreProductsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStoreProductsRequest $request)
    {
        $storeProducts = $this->storeProductsRepository->find($id);

        if (empty($storeProducts)) {
            Flash::error('Store Products not found');

            return redirect(route('storeProducts.index'));
        }

        $storeProducts = $this->storeProductsRepository->update($request->all(), $id);

        Flash::success('Store Products updated successfully.');

        return redirect(route('storeProducts.index'));
    }

    /**
     * Remove the specified StoreProducts from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $storeProducts = $this->storeProductsRepository->find($id);

        if (empty($storeProducts)) {
            Flash::error('Store Products not found');

            return redirect(route('storeProducts.index'));
        }

        $this->storeProductsRepository->delete($id);

        Flash::success('Store Products deleted successfully.');

        return redirect(route('storeProducts.index'));
    }
}
