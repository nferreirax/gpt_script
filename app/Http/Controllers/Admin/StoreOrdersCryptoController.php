<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateStoreOrdersCryptoRequest;
use App\Http\Requests\UpdateStoreOrdersCryptoRequest;
use App\Repositories\StoreOrdersCryptoRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class StoreOrdersCryptoController extends AppBaseController
{
    /** @var  StoreOrdersCryptoRepository */
    private $storeOrdersCryptoRepository;

    public function __construct(StoreOrdersCryptoRepository $storeOrdersCryptoRepo)
    {
        $this->storeOrdersCryptoRepository = $storeOrdersCryptoRepo;
    }

    /**
     * Display a listing of the StoreOrdersCrypto.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $storeOrdersCryptos = $this->storeOrdersCryptoRepository->all();

        return view('app.admin.store_orders_cryptos.index')
            ->with('storeOrdersCryptos', $storeOrdersCryptos);
    }

    /**
     * Show the form for creating a new StoreOrdersCrypto.
     *
     * @return Response
     */
    public function create()
    {
        return view('app.admin.store_orders_cryptos.create');
    }

    /**
     * Store a newly created StoreOrdersCrypto in storage.
     *
     * @param CreateStoreOrdersCryptoRequest $request
     *
     * @return Response
     */
    public function store(CreateStoreOrdersCryptoRequest $request)
    {
        $input = $request->all();

        $storeOrdersCrypto = $this->storeOrdersCryptoRepository->create($input);

        Flash::success('Store Orders Crypto saved successfully.');

        return redirect(route('storeOrdersCryptos.index'));
    }

    /**
     * Display the specified StoreOrdersCrypto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $storeOrdersCrypto = $this->storeOrdersCryptoRepository->find($id);

        if (empty($storeOrdersCrypto)) {
            Flash::error('Store Orders Crypto not found');

            return redirect(route('storeOrdersCryptos.index'));
        }

        return view('app.admin.store_orders_cryptos.show')->with('storeOrdersCrypto', $storeOrdersCrypto);
    }

    /**
     * Show the form for editing the specified StoreOrdersCrypto.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $storeOrdersCrypto = $this->storeOrdersCryptoRepository->find($id);

        if (empty($storeOrdersCrypto)) {
            Flash::error('Store Orders Crypto not found');

            return redirect(route('storeOrdersCryptos.index'));
        }

        return view('app.admin.store_orders_cryptos.edit')->with('storeOrdersCrypto', $storeOrdersCrypto);
    }

    /**
     * Update the specified StoreOrdersCrypto in storage.
     *
     * @param int $id
     * @param UpdateStoreOrdersCryptoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStoreOrdersCryptoRequest $request)
    {
        $storeOrdersCrypto = $this->storeOrdersCryptoRepository->find($id);

        if (empty($storeOrdersCrypto)) {
            Flash::error('Store Orders Crypto not found');

            return redirect(route('storeOrdersCryptos.index'));
        }

        $storeOrdersCrypto = $this->storeOrdersCryptoRepository->update($request->all(), $id);

        Flash::success('Store Orders Crypto updated successfully.');

        return redirect(route('storeOrdersCryptos.index'));
    }

    /**
     * Remove the specified StoreOrdersCrypto from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $storeOrdersCrypto = $this->storeOrdersCryptoRepository->find($id);

        if (empty($storeOrdersCrypto)) {
            Flash::error('Store Orders Crypto not found');

            return redirect(route('storeOrdersCryptos.index'));
        }

        $this->storeOrdersCryptoRepository->delete($id);

        Flash::success('Store Orders Crypto deleted successfully.');

        return redirect(route('storeOrdersCryptos.index'));
    }
}
