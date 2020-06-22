<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateUsersLoginLogRequest;
use App\Http\Requests\UpdateUsersLoginLogRequest;
use App\Repositories\UsersLoginLogRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsersLoginLogController extends AppBaseController
{
    /** @var  UsersLoginLogRepository */
    private $usersLoginLogRepository;

    public function __construct(UsersLoginLogRepository $usersLoginLogRepo)
    {
        $this->usersLoginLogRepository = $usersLoginLogRepo;
    }

    /**
     * Display a listing of the UsersLoginLog.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $usersLoginLogs = $this->usersLoginLogRepository->all();

        return view('app.admin.users_login_logs.index')
            ->with('usersLoginLogs', $usersLoginLogs);
    }

    /**
     * Show the form for creating a new UsersLoginLog.
     *
     * @return Response
     */
    public function create()
    {
        return view('app.admin.users_login_logs.create');
    }

    /**
     * Store a newly created UsersLoginLog in storage.
     *
     * @param CreateUsersLoginLogRequest $request
     *
     * @return Response
     */
    public function store(CreateUsersLoginLogRequest $request)
    {
        $input = $request->all();

        $usersLoginLog = $this->usersLoginLogRepository->create($input);

        Flash::success('Users Login Log saved successfully.');

        return redirect(route('usersLoginLogs.index'));
    }

    /**
     * Display the specified UsersLoginLog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usersLoginLog = $this->usersLoginLogRepository->find($id);

        if (empty($usersLoginLog)) {
            Flash::error('Users Login Log not found');

            return redirect(route('usersLoginLogs.index'));
        }

        return view('app.admin.users_login_logs.show')->with('usersLoginLog', $usersLoginLog);
    }

    /**
     * Show the form for editing the specified UsersLoginLog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usersLoginLog = $this->usersLoginLogRepository->find($id);

        if (empty($usersLoginLog)) {
            Flash::error('Users Login Log not found');

            return redirect(route('usersLoginLogs.index'));
        }

        return view('app.admin.users_login_logs.edit')->with('usersLoginLog', $usersLoginLog);
    }

    /**
     * Update the specified UsersLoginLog in storage.
     *
     * @param int $id
     * @param UpdateUsersLoginLogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsersLoginLogRequest $request)
    {
        $usersLoginLog = $this->usersLoginLogRepository->find($id);

        if (empty($usersLoginLog)) {
            Flash::error('Users Login Log not found');

            return redirect(route('usersLoginLogs.index'));
        }

        $usersLoginLog = $this->usersLoginLogRepository->update($request->all(), $id);

        Flash::success('Users Login Log updated successfully.');

        return redirect(route('usersLoginLogs.index'));
    }

    /**
     * Remove the specified UsersLoginLog from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usersLoginLog = $this->usersLoginLogRepository->find($id);

        if (empty($usersLoginLog)) {
            Flash::error('Users Login Log not found');

            return redirect(route('usersLoginLogs.index'));
        }

        $this->usersLoginLogRepository->delete($id);

        Flash::success('Users Login Log deleted successfully.');

        return redirect(route('usersLoginLogs.index'));
    }
}
