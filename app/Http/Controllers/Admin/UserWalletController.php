<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateUserWalletRequest;
use App\Http\Requests\UpdateUserWalletRequest;
use App\Repositories\UserWalletRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UserWalletController extends AppBaseController
{
    /** @var  UserWalletRepository */
    private $userWalletRepository;

    public function __construct(UserWalletRepository $userWalletRepo)
    {
        $this->userWalletRepository = $userWalletRepo;
    }

    /**
     * Display a listing of the UserWallet.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $userWallets = $this->userWalletRepository->all();

        return view('app.admin.user_wallets.index')
            ->with('userWallets', $userWallets);
    }

    /**
     * Show the form for creating a new UserWallet.
     *
     * @return Response
     */
    public function create()
    {
        return view('app.admin.user_wallets.create');
    }

    /**
     * Store a newly created UserWallet in storage.
     *
     * @param CreateUserWalletRequest $request
     *
     * @return Response
     */
    public function store(CreateUserWalletRequest $request)
    {
        $input = $request->all();

        $userWallet = $this->userWalletRepository->create($input);

        Flash::success('User Wallet saved successfully.');

        return redirect(route('userWallets.index'));
    }

    /**
     * Display the specified UserWallet.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $userWallet = $this->userWalletRepository->find($id);

        if (empty($userWallet)) {
            Flash::error('User Wallet not found');

            return redirect(route('userWallets.index'));
        }

        return view('app.admin.user_wallets.show')->with('userWallet', $userWallet);
    }

    /**
     * Show the form for editing the specified UserWallet.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $userWallet = $this->userWalletRepository->find($id);

        if (empty($userWallet)) {
            Flash::error('User Wallet not found');

            return redirect(route('userWallets.index'));
        }

        return view('app.admin.user_wallets.edit')->with('userWallet', $userWallet);
    }

    /**
     * Update the specified UserWallet in storage.
     *
     * @param int $id
     * @param UpdateUserWalletRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUserWalletRequest $request)
    {
        $userWallet = $this->userWalletRepository->find($id);

        if (empty($userWallet)) {
            Flash::error('User Wallet not found');

            return redirect(route('userWallets.index'));
        }

        $userWallet = $this->userWalletRepository->update($request->all(), $id);

        Flash::success('User Wallet updated successfully.');

        return redirect(route('userWallets.index'));
    }

    /**
     * Remove the specified UserWallet from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $userWallet = $this->userWalletRepository->find($id);

        if (empty($userWallet)) {
            Flash::error('User Wallet not found');

            return redirect(route('userWallets.index'));
        }

        $this->userWalletRepository->delete($id);

        Flash::success('User Wallet deleted successfully.');

        return redirect(route('userWallets.index'));
    }
}
