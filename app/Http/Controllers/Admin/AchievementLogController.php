<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateAchievementLogRequest;
use App\Http\Requests\UpdateAchievementLogRequest;
use App\Repositories\AchievementLogRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AchievementLogController extends AppBaseController
{
    /** @var  AchievementLogRepository */
    private $achievementLogRepository;

    public function __construct(AchievementLogRepository $achievementLogRepo)
    {
        $this->achievementLogRepository = $achievementLogRepo;
    }

    /**
     * Display a listing of the AchievementLog.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $achievementLogs = $this->achievementLogRepository->all();

        return view('app.admin.achievement_logs.index')
            ->with('achievementLogs', $achievementLogs);
    }

    /**
     * Show the form for creating a new AchievementLog.
     *
     * @return Response
     */
    public function create()
    {
        return view('app.admin.achievement_logs.create');
    }

    /**
     * Store a newly created AchievementLog in storage.
     *
     * @param CreateAchievementLogRequest $request
     *
     * @return Response
     */
    public function store(CreateAchievementLogRequest $request)
    {
        $input = $request->all();

        $achievementLog = $this->achievementLogRepository->create($input);

        Flash::success('Achievement Log saved successfully.');

        return redirect(route('achievementLogs.index'));
    }

    /**
     * Display the specified AchievementLog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $achievementLog = $this->achievementLogRepository->find($id);

        if (empty($achievementLog)) {
            Flash::error('Achievement Log not found');

            return redirect(route('achievementLogs.index'));
        }

        return view('app.admin.achievement_logs.show')->with('achievementLog', $achievementLog);
    }

    /**
     * Show the form for editing the specified AchievementLog.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $achievementLog = $this->achievementLogRepository->find($id);

        if (empty($achievementLog)) {
            Flash::error('Achievement Log not found');

            return redirect(route('achievementLogs.index'));
        }

        return view('app.admin.achievement_logs.edit')->with('achievementLog', $achievementLog);
    }

    /**
     * Update the specified AchievementLog in storage.
     *
     * @param int $id
     * @param UpdateAchievementLogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAchievementLogRequest $request)
    {
        $achievementLog = $this->achievementLogRepository->find($id);

        if (empty($achievementLog)) {
            Flash::error('Achievement Log not found');

            return redirect(route('achievementLogs.index'));
        }

        $achievementLog = $this->achievementLogRepository->update($request->all(), $id);

        Flash::success('Achievement Log updated successfully.');

        return redirect(route('achievementLogs.index'));
    }

    /**
     * Remove the specified AchievementLog from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $achievementLog = $this->achievementLogRepository->find($id);

        if (empty($achievementLog)) {
            Flash::error('Achievement Log not found');

            return redirect(route('achievementLogs.index'));
        }

        $this->achievementLogRepository->delete($id);

        Flash::success('Achievement Log deleted successfully.');

        return redirect(route('achievementLogs.index'));
    }
}
