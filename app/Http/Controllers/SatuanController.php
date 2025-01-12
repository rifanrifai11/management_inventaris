<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSatuanRequest;
use App\Http\Requests\UpdateSatuanRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\SatuanRepository;
use Illuminate\Http\Request;
use Flash;

class SatuanController extends AppBaseController
{
    /** @var SatuanRepository $satuanRepository*/
    private $satuanRepository;

    public function __construct(SatuanRepository $satuanRepo)
    {
        $this->satuanRepository = $satuanRepo;
    }

    /**
     * Display a listing of the Satuan.
     */
    public function index(Request $request)
    {
        $satuans = $this->satuanRepository->paginate(10);

        return view('satuans.index')
            ->with('satuans', $satuans);
    }

    /**
     * Show the form for creating a new Satuan.
     */
    public function create()
    {
        return view('satuans.create');
    }

    /**
     * Store a newly created Satuan in storage.
     */
    public function store(CreateSatuanRequest $request)
    {
        $input = $request->all();

        $satuan = $this->satuanRepository->create($input);

        Flash::success('Satuan saved successfully.');

        return redirect(route('satuans.index'));
    }

    /**
     * Display the specified Satuan.
     */
    public function show($id)
    {
        $satuan = $this->satuanRepository->find($id);

        if (empty($satuan)) {
            Flash::error('Satuan not found');

            return redirect(route('satuans.index'));
        }

        return view('satuans.show')->with('satuan', $satuan);
    }

    /**
     * Show the form for editing the specified Satuan.
     */
    public function edit($id)
    {
        $satuan = $this->satuanRepository->find($id);

        if (empty($satuan)) {
            Flash::error('Satuan not found');

            return redirect(route('satuans.index'));
        }

        return view('satuans.edit')->with('satuan', $satuan);
    }

    /**
     * Update the specified Satuan in storage.
     */
    public function update($id, UpdateSatuanRequest $request)
    {
        $satuan = $this->satuanRepository->find($id);

        if (empty($satuan)) {
            Flash::error('Satuan not found');

            return redirect(route('satuans.index'));
        }

        $satuan = $this->satuanRepository->update($request->all(), $id);

        Flash::success('Satuan updated successfully.');

        return redirect(route('satuans.index'));
    }

    /**
     * Remove the specified Satuan from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $satuan = $this->satuanRepository->find($id);

        if (empty($satuan)) {
            Flash::error('Satuan not found');

            return redirect(route('satuans.index'));
        }

        $this->satuanRepository->delete($id);

        Flash::success('Satuan deleted successfully.');

        return redirect(route('satuans.index'));
    }
}
