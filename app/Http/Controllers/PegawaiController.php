<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePegawaiRequest;
use App\Http\Requests\UpdatePegawaiRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PegawaiRepository;
use Illuminate\Http\Request;
use Flash;

class PegawaiController extends AppBaseController
{
    /** @var PegawaiRepository $pegawaiRepository*/
    private $pegawaiRepository;

    public function __construct(PegawaiRepository $pegawaiRepo)
    {
        $this->pegawaiRepository = $pegawaiRepo;
    }

    /**
     * Display a listing of the Pegawai.
     */
    public function index(Request $request)
    {
        $pegawais = $this->pegawaiRepository->paginate(10);

        return view('pegawais.index')
            ->with('pegawais', $pegawais);
    }

    /**
     * Show the form for creating a new Pegawai.
     */
    public function create()
    {
        return view('pegawais.create');
    }

    /**
     * Store a newly created Pegawai in storage.
     */
    public function store(CreatePegawaiRequest $request)
    {
        $input = $request->all();

        $pegawai = $this->pegawaiRepository->create($input);

        Flash::success('Pegawai saved successfully.');

        return redirect(route('pegawais.index'));
    }

    /**
     * Display the specified Pegawai.
     */
    public function show($id)
    {
        $pegawai = $this->pegawaiRepository->find($id);

        if (empty($pegawai)) {
            Flash::error('Pegawai not found');

            return redirect(route('pegawais.index'));
        }

        return view('pegawais.show')->with('pegawai', $pegawai);
    }

    /**
     * Show the form for editing the specified Pegawai.
     */
    public function edit($id)
    {
        $pegawai = $this->pegawaiRepository->find($id);

        if (empty($pegawai)) {
            Flash::error('Pegawai not found');

            return redirect(route('pegawais.index'));
        }

        return view('pegawais.edit')->with('pegawai', $pegawai);
    }

    /**
     * Update the specified Pegawai in storage.
     */
    public function update($id, UpdatePegawaiRequest $request)
    {
        $pegawai = $this->pegawaiRepository->find($id);

        if (empty($pegawai)) {
            Flash::error('Pegawai not found');

            return redirect(route('pegawais.index'));
        }

        $pegawai = $this->pegawaiRepository->update($request->all(), $id);

        Flash::success('Pegawai updated successfully.');

        return redirect(route('pegawais.index'));
    }

    /**
     * Remove the specified Pegawai from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pegawai = $this->pegawaiRepository->find($id);

        if (empty($pegawai)) {
            Flash::error('Pegawai not found');

            return redirect(route('pegawais.index'));
        }

        $this->pegawaiRepository->delete($id);

        Flash::success('Pegawai deleted successfully.');

        return redirect(route('pegawais.index'));
    }
}
