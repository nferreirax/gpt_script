<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateCreditDebitManuallyRequest;
use App\Http\Requests\UpdateCreditDebitManuallyRequest;
use App\Repositories\CreditDebitManuallyRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class CreditDebitManuallyController extends AppBaseController
{
    /** @var  CreditDebitManuallyRepository */
    private $creditDebitManuallyRepository;

    public function __construct(CreditDebitManuallyRepository $creditDebitManuallyRepo)
    {
        $this->creditDebitManuallyRepository = $creditDebitManuallyRepo;
    }

    /**
     * Display a listing of the CreditDebitManually.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $creditDebitManuallies = $this->creditDebitManuallyRepository->all();

        return view('app.admin.credit_debit_manuallies.index')
            ->with('creditDebitManuallies', $creditDebitManuallies);
    }

    /**
     * Show the form for creating a new CreditDebitManually.
     *
     * @return Response
     */
    public function create()
    {
        return view('app.admin.credit_debit_manuallies.create');
    }

    /**
     * Store a newly created CreditDebitManually in storage.
     *
     * @param CreateCreditDebitManuallyRequest $request
     *
     * @return Response
     */
    public function store(CreateCreditDebitManuallyRequest $request)
    {
        $input = $request->all();

        $creditDebitManually = $this->creditDebitManuallyRepository->create($input);

        Flash::success('Credit Debit Manually saved successfully.');

        return redirect(route('creditDebitManuallies.index'));
    }

    /**
     * Display the specified CreditDebitManually.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $creditDebitManually = $this->creditDebitManuallyRepository->find($id);

        if (empty($creditDebitManually)) {
            Flash::error('Credit Debit Manually not found');

            return redirect(route('creditDebitManuallies.index'));
        }

        return view('app.admin.credit_debit_manuallies.show')->with('creditDebitManually', $creditDebitManually);
    }

    /**
     * Show the form for editing the specified CreditDebitManually.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $creditDebitManually = $this->creditDebitManuallyRepository->find($id);

        if (empty($creditDebitManually)) {
            Flash::error('Credit Debit Manually not found');

            return redirect(route('creditDebitManuallies.index'));
        }

        return view('app.admin.credit_debit_manuallies.edit')->with('creditDebitManually', $creditDebitManually);
    }

    /**
     * Update the specified CreditDebitManually in storage.
     *
     * @param int $id
     * @param UpdateCreditDebitManuallyRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCreditDebitManuallyRequest $request)
    {
        $creditDebitManually = $this->creditDebitManuallyRepository->find($id);

        if (empty($creditDebitManually)) {
            Flash::error('Credit Debit Manually not found');

            return redirect(route('creditDebitManuallies.index'));
        }

        $creditDebitManually = $this->creditDebitManuallyRepository->update($request->all(), $id);

        Flash::success('Credit Debit Manually updated successfully.');

        return redirect(route('creditDebitManuallies.index'));
    }

    /**
     * Remove the specified CreditDebitManually from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $creditDebitManually = $this->creditDebitManuallyRepository->find($id);

        if (empty($creditDebitManually)) {
            Flash::error('Credit Debit Manually not found');

            return redirect(route('creditDebitManuallies.index'));
        }

        $this->creditDebitManuallyRepository->delete($id);

        Flash::success('Credit Debit Manually deleted successfully.');

        return redirect(route('creditDebitManuallies.index'));
    }
}
