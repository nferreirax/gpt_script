<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\CreateVipLevelRequest;
use App\Http\Requests\UpdateVipLevelRequest;
use App\Repositories\VipLevelRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class VipLevelController extends AppBaseController
{
    /** @var  VipLevelRepository */
    private $vipLevelRepository;

    public function __construct(VipLevelRepository $vipLevelRepo)
    {
        $this->vipLevelRepository = $vipLevelRepo;
    }

    /**
     * Display a listing of the VipLevel.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $vipLevels = $this->vipLevelRepository->all();

        return view('app.admin.vip_levels.index')
            ->with('vipLevels', $vipLevels);
    }

    /**
     * Show the form for creating a new VipLevel.
     *
     * @return Response
     */
    public function create()
    {
        return view('app.admin.vip_levels.create');
    }

    /**
     * Store a newly created VipLevel in storage.
     *
     * @param CreateVipLevelRequest $request
     *
     * @return Response
     */
    public function store(CreateVipLevelRequest $request)
    {
        $input = $request->all();

        $vipLevel = $this->vipLevelRepository->create($input);

        Flash::success('Vip Level saved successfully.');

        return redirect(route('vipLevels.index'));
    }

    /**
     * Display the specified VipLevel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $vipLevel = $this->vipLevelRepository->find($id);

        if (empty($vipLevel)) {
            Flash::error('Vip Level not found');

            return redirect(route('vipLevels.index'));
        }

        return view('app.admin.vip_levels.show')->with('vipLevel', $vipLevel);
    }

    /**
     * Show the form for editing the specified VipLevel.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $vipLevel = $this->vipLevelRepository->find($id);

        if (empty($vipLevel)) {
            Flash::error('Vip Level not found');

            return redirect(route('vipLevels.index'));
        }

        return view('app.admin.vip_levels.edit')->with('vipLevel', $vipLevel);
    }

    /**
     * Update the specified VipLevel in storage.
     *
     * @param int $id
     * @param UpdateVipLevelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateVipLevelRequest $request)
    {
        $vipLevel = $this->vipLevelRepository->find($id);

        if (empty($vipLevel)) {
            Flash::error('Vip Level not found');

            return redirect(route('vipLevels.index'));
        }

        $vipLevel = $this->vipLevelRepository->update($request->all(), $id);

        Flash::success('Vip Level updated successfully.');

        return redirect(route('vipLevels.index'));
    }

    /**
     * Remove the specified VipLevel from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $vipLevel = $this->vipLevelRepository->find($id);

        if (empty($vipLevel)) {
            Flash::error('Vip Level not found');

            return redirect(route('vipLevels.index'));
        }

        $this->vipLevelRepository->delete($id);

        Flash::success('Vip Level deleted successfully.');

        return redirect(route('vipLevels.index'));
    }
}
