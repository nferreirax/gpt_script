<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateUsersAchievementRequest;
use App\Http\Requests\UpdateUsersAchievementRequest;
use App\Repositories\UsersAchievementRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsersAchievementController extends AppBaseController
{
    /** @var  UsersAchievementRepository */
    private $usersAchievementRepository;

    public function __construct(UsersAchievementRepository $usersAchievementRepo)
    {
        $this->usersAchievementRepository = $usersAchievementRepo;
    }

    /**
     * Display a listing of the UsersAchievement.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $usersAchievements = $this->usersAchievementRepository->all();

        return view('app.admin.users_achievements.index')
            ->with('usersAchievements', $usersAchievements);
    }

    /**
     * Show the form for creating a new UsersAchievement.
     *
     * @return Response
     */
    public function create()
    {
        return view('app.admin.users_achievements.create');
    }

    /**
     * Store a newly created UsersAchievement in storage.
     *
     * @param CreateUsersAchievementRequest $request
     *
     * @return Response
     */
    public function store(CreateUsersAchievementRequest $request)
    {
        $input = $request->all();

        $usersAchievement = $this->usersAchievementRepository->create($input);

        Flash::success('Users Achievement saved successfully.');

        return redirect(route('usersAchievements.index'));
    }

    /**
     * Display the specified UsersAchievement.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $usersAchievement = $this->usersAchievementRepository->find($id);

        if (empty($usersAchievement)) {
            Flash::error('Users Achievement not found');

            return redirect(route('usersAchievements.index'));
        }

        return view('app.admin.users_achievements.show')->with('usersAchievement', $usersAchievement);
    }

    /**
     * Show the form for editing the specified UsersAchievement.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $usersAchievement = $this->usersAchievementRepository->find($id);

        if (empty($usersAchievement)) {
            Flash::error('Users Achievement not found');

            return redirect(route('usersAchievements.index'));
        }

        return view('app.admin.users_achievements.edit')->with('usersAchievement', $usersAchievement);
    }

    /**
     * Update the specified UsersAchievement in storage.
     *
     * @param int $id
     * @param UpdateUsersAchievementRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateUsersAchievementRequest $request)
    {
        $usersAchievement = $this->usersAchievementRepository->find($id);

        if (empty($usersAchievement)) {
            Flash::error('Users Achievement not found');

            return redirect(route('usersAchievements.index'));
        }

        $usersAchievement = $this->usersAchievementRepository->update($request->all(), $id);

        Flash::success('Users Achievement updated successfully.');

        return redirect(route('usersAchievements.index'));
    }

    /**
     * Remove the specified UsersAchievement from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $usersAchievement = $this->usersAchievementRepository->find($id);

        if (empty($usersAchievement)) {
            Flash::error('Users Achievement not found');

            return redirect(route('usersAchievements.index'));
        }

        $this->usersAchievementRepository->delete($id);

        Flash::success('Users Achievement deleted successfully.');

        return redirect(route('usersAchievements.index'));
    }
}
