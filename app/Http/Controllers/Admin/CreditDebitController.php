<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateCreditDebitRequest;
use App\Http\Requests\UpdateCreditDebitRequest;
use App\Repositories\CreditDebitRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CreditDebitController extends AppBaseController
{
    /** @var  CreditDebitRepository */
    private $creditDebitRepository;

    public function __construct(CreditDebitRepository $creditDebitRepo)
    {
        $this->creditDebitRepository = $creditDebitRepo;
    }

    /**
     * Display a listing of the CreditDebit.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $creditDebits = $this->creditDebitRepository->all();

        return view('app.admin.credit_debits.index')
            ->with('creditDebits', $creditDebits);
    }

    /**
     * Show the form for creating a new CreditDebit.
     *
     * @return Response
     */
    public function create()
    {
        return view('app.admin.credit_debits.create');
    }

    /**
     * Store a newly created CreditDebit in storage.
     *
     * @param CreateCreditDebitRequest $request
     *
     * @return Response
     */
    public function store(CreateCreditDebitRequest $request)
    {
        $input = $request->all();

        $creditDebit = $this->creditDebitRepository->create($input);

        Flash::success('Credit Debit saved successfully.');

        return redirect(route('creditDebits.index'));
    }

    /**
     * Display the specified CreditDebit.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $creditDebit = $this->creditDebitRepository->find($id);

        if (empty($creditDebit)) {
            Flash::error('Credit Debit not found');

            return redirect(route('creditDebits.index'));
        }

        return view('app.admin.credit_debits.show')->with('creditDebit', $creditDebit);
    }

    /**
     * Show the form for editing the specified CreditDebit.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $creditDebit = $this->creditDebitRepository->find($id);

        if (empty($creditDebit)) {
            Flash::error('Credit Debit not found');

            return redirect(route('creditDebits.index'));
        }

        return view('app.admin.credit_debits.edit')->with('creditDebit', $creditDebit);
    }

    /**
     * Update the specified CreditDebit in storage.
     *
     * @param int $id
     * @param UpdateCreditDebitRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCreditDebitRequest $request)
    {
        $creditDebit = $this->creditDebitRepository->find($id);

        if (empty($creditDebit)) {
            Flash::error('Credit Debit not found');

            return redirect(route('creditDebits.index'));
        }

        $creditDebit = $this->creditDebitRepository->update($request->all(), $id);

        Flash::success('Credit Debit updated successfully.');

        return redirect(route('creditDebits.index'));
    }

    /**
     * Remove the specified CreditDebit from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $creditDebit = $this->creditDebitRepository->find($id);

        if (empty($creditDebit)) {
            Flash::error('Credit Debit not found');

            return redirect(route('creditDebits.index'));
        }

        $this->creditDebitRepository->delete($id);

        Flash::success('Credit Debit deleted successfully.');

        return redirect(route('creditDebits.index'));
    }
}
