<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateAdminLoginLogRequest;
use App\Http\Requests\UpdateAdminLoginLogRequest;
use App\Repositories\AdminLoginLogRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AdminLoginLogController extends AppBaseController
{
    /** @var  AdminLoginLogRepository */
    private $adminLoginLogRepository;

    public function __construct(AdminLoginLogRepository $adminLoginLogRepo)
    {
        $this->adminLoginLogRepository = $adminLoginLogRepo;
    }

    /**
     * Display a listing of the AdminLoginLog.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $adminLoginLogs = $this->adminLoginLogRepository->all();

        return view('app.admin.admin_login_logs.index')
            ->with('adminLoginLogs', $adminLoginLogs);
    }

    /**
     * Show the form for creating a new AdminLoginLog.
     *
     * @return Response
     */
    public function create()
    {
        return view('app.admin.admin_login_logs.create');
    }

    /**
     * Store a newly created AdminLoginLog in storage.
     *
     * @param CreateAdminLoginLogRequest $request
     *
     * @return Response
     */
    public function store(CreateAdminLoginLogRequest $request)
    {
        $input = $request->all();

        $adminLoginLog = $this->adminLoginLogRepository->create($input);

        Flash::success('Admin Login Log saved successfully.');

        return redirect(route('adminLoginLogs.index'));
    }

    /**
     * Display the specified AdminLoginLog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $adminLoginLog = $this->adminLoginLogRepository->find($id);

        if (empty($adminLoginLog)) {
            Flash::error('Admin Login Log not found');

            return redirect(route('adminLoginLogs.index'));
        }

        return view('app.admin.admin_login_logs.show')->with('adminLoginLog', $adminLoginLog);
    }

    /**
     * Show the form for editing the specified AdminLoginLog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $adminLoginLog = $this->adminLoginLogRepository->find($id);

        if (empty($adminLoginLog)) {
            Flash::error('Admin Login Log not found');

            return redirect(route('adminLoginLogs.index'));
        }

        return view('app.admin.admin_login_logs.edit')->with('adminLoginLog', $adminLoginLog);
    }

    /**
     * Update the specified AdminLoginLog in storage.
     *
     * @param int $id
     * @param UpdateAdminLoginLogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAdminLoginLogRequest $request)
    {
        $adminLoginLog = $this->adminLoginLogRepository->find($id);

        if (empty($adminLoginLog)) {
            Flash::error('Admin Login Log not found');

            return redirect(route('adminLoginLogs.index'));
        }

        $adminLoginLog = $this->adminLoginLogRepository->update($request->all(), $id);

        Flash::success('Admin Login Log updated successfully.');

        return redirect(route('adminLoginLogs.index'));
    }

    /**
     * Remove the specified AdminLoginLog from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $adminLoginLog = $this->adminLoginLogRepository->find($id);

        if (empty($adminLoginLog)) {
            Flash::error('Admin Login Log not found');

            return redirect(route('adminLoginLogs.index'));
        }

        $this->adminLoginLogRepository->delete($id);

        Flash::success('Admin Login Log deleted successfully.');

        return redirect(route('adminLoginLogs.index'));
    }
}
