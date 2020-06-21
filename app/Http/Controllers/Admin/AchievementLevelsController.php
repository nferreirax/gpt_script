<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateAchievementLevelsRequest;
use App\Http\Requests\UpdateAchievementLevelsRequest;
use App\Repositories\AchievementLevelsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class AchievementLevelsController extends AppBaseController
{
    /** @var  AchievementLevelsRepository */
    private $achievementLevelsRepository;

    public function __construct(AchievementLevelsRepository $achievementLevelsRepo)
    {
        $this->achievementLevelsRepository = $achievementLevelsRepo;
    }

    /**
     * Display a listing of the AchievementLevels.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $achievementLevels = $this->achievementLevelsRepository->all();

        return view('app.admin.achievement_levels.index')
            ->with('achievementLevels', $achievementLevels);
    }

    /**
     * Show the form for creating a new AchievementLevels.
     *
     * @return Response
     */
    public function create()
    {
        return view('app.admin.achievement_levels.create');
    }

    /**
     * Store a newly created AchievementLevels in storage.
     *
     * @param CreateAchievementLevelsRequest $request
     *
     * @return Response
     */
    public function store(CreateAchievementLevelsRequest $request)
    {
        $input = $request->all();

        $achievementLevels = $this->achievementLevelsRepository->create($input);

        Flash::success('Achievement Levels saved successfully.');

        return redirect(route('achievementLevels.index'));
    }

    /**
     * Display the specified AchievementLevels.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $achievementLevels = $this->achievementLevelsRepository->find($id);

        if (empty($achievementLevels)) {
            Flash::error('Achievement Levels not found');

            return redirect(route('achievementLevels.index'));
        }

        return view('app.admin.achievement_levels.show')->with('achievementLevels', $achievementLevels);
    }

    /**
     * Show the form for editing the specified AchievementLevels.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $achievementLevels = $this->achievementLevelsRepository->find($id);

        if (empty($achievementLevels)) {
            Flash::error('Achievement Levels not found');

            return redirect(route('achievementLevels.index'));
        }

        return view('app.admin.achievement_levels.edit')->with('achievementLevels', $achievementLevels);
    }

    /**
     * Update the specified AchievementLevels in storage.
     *
     * @param int $id
     * @param UpdateAchievementLevelsRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAchievementLevelsRequest $request)
    {
        $achievementLevels = $this->achievementLevelsRepository->find($id);

        if (empty($achievementLevels)) {
            Flash::error('Achievement Levels not found');

            return redirect(route('achievementLevels.index'));
        }

        $achievementLevels = $this->achievementLevelsRepository->update($request->all(), $id);

        Flash::success('Achievement Levels updated successfully.');

        return redirect(route('achievementLevels.index'));
    }

    /**
     * Remove the specified AchievementLevels from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $achievementLevels = $this->achievementLevelsRepository->find($id);

        if (empty($achievementLevels)) {
            Flash::error('Achievement Levels not found');

            return redirect(route('achievementLevels.index'));
        }

        $this->achievementLevelsRepository->delete($id);

        Flash::success('Achievement Levels deleted successfully.');

        return redirect(route('achievementLevels.index'));
    }
}
