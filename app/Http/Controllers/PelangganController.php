<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePelangganRequest;
use App\Http\Requests\UpdatePelangganRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PelangganRepository;
use Illuminate\Http\Request;
use Flash;

class PelangganController extends AppBaseController
{
    /** @var PelangganRepository $pelangganRepository*/
    private $pelangganRepository;

    public function __construct(PelangganRepository $pelangganRepo)
    {
        $this->pelangganRepository = $pelangganRepo;
    }

    /**
     * Display a listing of the Pelanggan.
     */
    public function index(Request $request)
    {
        $pelanggans = $this->pelangganRepository->paginate(10);

        return view('pelanggans.index')
            ->with('pelanggans', $pelanggans);
    }

    /**
     * Show the form for creating a new Pelanggan.
     */
    public function create()
    {
        return view('pelanggans.create');
    }

    /**
     * Store a newly created Pelanggan in storage.
     */
    public function store(CreatePelangganRequest $request)
    {
        $input = $request->all();

        $pelanggan = $this->pelangganRepository->create($input);

        Flash::success('Pelanggan saved successfully.');

        return redirect(route('pelanggans.index'));
    }

    /**
     * Display the specified Pelanggan.
     */
    public function show($id)
    {
        $pelanggan = $this->pelangganRepository->find($id);

        if (empty($pelanggan)) {
            Flash::error('Pelanggan not found');

            return redirect(route('pelanggans.index'));
        }

        return view('pelanggans.show')->with('pelanggan', $pelanggan);
    }

    /**
     * Show the form for editing the specified Pelanggan.
     */
    public function edit($id)
    {
        $pelanggan = $this->pelangganRepository->find($id);

        if (empty($pelanggan)) {
            Flash::error('Pelanggan not found');

            return redirect(route('pelanggans.index'));
        }

        return view('pelanggans.edit')->with('pelanggan', $pelanggan);
    }

    /**
     * Update the specified Pelanggan in storage.
     */
    public function update($id, UpdatePelangganRequest $request)
    {
        $pelanggan = $this->pelangganRepository->find($id);

        if (empty($pelanggan)) {
            Flash::error('Pelanggan not found');

            return redirect(route('pelanggans.index'));
        }

        $pelanggan = $this->pelangganRepository->update($request->all(), $id);

        Flash::success('Pelanggan updated successfully.');

        return redirect(route('pelanggans.index'));
    }

    /**
     * Remove the specified Pelanggan from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pelanggan = $this->pelangganRepository->find($id);

        if (empty($pelanggan)) {
            Flash::error('Pelanggan not found');

            return redirect(route('pelanggans.index'));
        }

        $this->pelangganRepository->delete($id);

        Flash::success('Pelanggan deleted successfully.');

        return redirect(route('pelanggans.index'));
    }
}
