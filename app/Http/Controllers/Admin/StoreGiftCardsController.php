<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateStoreGiftCardsRequest;
use App\Http\Requests\UpdateStoreGiftCardsRequest;
use App\Repositories\StoreGiftCardsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class StoreGiftCardsController extends AppBaseController
{
    /** @var  StoreGiftCardsRepository */
    private $storeGiftCardsRepository;

    public function __construct(StoreGiftCardsRepository $storeGiftCardsRepo)
    {
        $this->storeGiftCardsRepository = $storeGiftCardsRepo;
    }

    /**
     * Display a listing of the StoreGiftCards.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $storeGiftCards = $this->storeGiftCardsRepository->all();

        return view('app.admin.store_gift_cards.index')
            ->with('storeGiftCards', $storeGiftCards);
    }

    /**
     * Show the form for creating a new StoreGiftCards.
     *
     * @return Response
     */
    public function create()
    {
        return view('app.admin.store_gift_cards.create');
    }

    /**
     * Store a newly created StoreGiftCards in storage.
     *
     * @param CreateStoreGiftCardsRequest $request
     *
     * @return Response
     */
    public function store(CreateStoreGiftCardsRequest $request)
    {
        $input = $request->all();

        $storeGiftCards = $this->storeGiftCardsRepository->create($input);

        Flash::success('Store Gift Cards saved successfully.');

        return redirect(route('storeGiftCards.index'));
    }

    /**
     * Display the specified StoreGiftCards.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $storeGiftCards = $this->storeGiftCardsRepository->find($id);

        if (empty($storeGiftCards)) {
            Flash::error('Store Gift Cards not found');

            return redirect(route('storeGiftCards.index'));
        }

        return view('app.admin.store_gift_cards.show')->with('storeGiftCards', $storeGiftCards);
    }

    /**
     * Show the form for editing the specified StoreGiftCards.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $storeGiftCards = $this->storeGiftCardsRepository->find($id);

        if (empty($storeGiftCards)) {
            Flash::error('Store Gift Cards not found');

            return redirect(route('storeGiftCards.index'));
        }

        return view('app.admin.store_gift_cards.edit')->with('storeGiftCards', $storeGiftCards);
    }

    /**
     * Update the specified StoreGiftCards in storage.
     *
     * @param int $id
     * @param UpdateStoreGiftCardsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateStoreGiftCardsRequest $request)
    {
        $storeGiftCards = $this->storeGiftCardsRepository->find($id);

        if (empty($storeGiftCards)) {
            Flash::error('Store Gift Cards not found');

            return redirect(route('storeGiftCards.index'));
        }

        $storeGiftCards = $this->storeGiftCardsRepository->update($request->all(), $id);

        Flash::success('Store Gift Cards updated successfully.');

        return redirect(route('storeGiftCards.index'));
    }

    /**
     * Remove the specified StoreGiftCards from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $storeGiftCards = $this->storeGiftCardsRepository->find($id);

        if (empty($storeGiftCards)) {
            Flash::error('Store Gift Cards not found');

            return redirect(route('storeGiftCards.index'));
        }

        $this->storeGiftCardsRepository->delete($id);

        Flash::success('Store Gift Cards deleted successfully.');

        return redirect(route('storeGiftCards.index'));
    }
}
