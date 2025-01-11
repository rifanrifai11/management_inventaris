<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMetodePembayaranRequest;
use App\Http\Requests\UpdateMetodePembayaranRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\MetodePembayaranRepository;
use Illuminate\Http\Request;
use Flash;

class MetodePembayaranController extends AppBaseController
{
    /** @var MetodePembayaranRepository $metodePembayaranRepository*/
    private $metodePembayaranRepository;

    public function __construct(MetodePembayaranRepository $metodePembayaranRepo)
    {
        $this->metodePembayaranRepository = $metodePembayaranRepo;
    }

    /**
     * Display a listing of the MetodePembayaran.
     */
    public function index(Request $request)
    {
        $metodePembayarans = $this->metodePembayaranRepository->paginate(10);

        return view('metode_pembayarans.index')
            ->with('metodePembayarans', $metodePembayarans);
    }

    /**
     * Show the form for creating a new MetodePembayaran.
     */
    public function create()
    {
        return view('metode_pembayarans.create');
    }

    /**
     * Store a newly created MetodePembayaran in storage.
     */
    public function store(CreateMetodePembayaranRequest $request)
    {
        $input = $request->all();

        $metodePembayaran = $this->metodePembayaranRepository->create($input);

        Flash::success('Metode Pembayaran saved successfully.');

        return redirect(route('metodePembayarans.index'));
    }

    /**
     * Display the specified MetodePembayaran.
     */
    public function show($id)
    {
        $metodePembayaran = $this->metodePembayaranRepository->find($id);

        if (empty($metodePembayaran)) {
            Flash::error('Metode Pembayaran not found');

            return redirect(route('metodePembayarans.index'));
        }

        return view('metode_pembayarans.show')->with('metodePembayaran', $metodePembayaran);
    }

    /**
     * Show the form for editing the specified MetodePembayaran.
     */
    public function edit($id)
    {
        $metodePembayaran = $this->metodePembayaranRepository->find($id);

        if (empty($metodePembayaran)) {
            Flash::error('Metode Pembayaran not found');

            return redirect(route('metodePembayarans.index'));
        }

        return view('metode_pembayarans.edit')->with('metodePembayaran', $metodePembayaran);
    }

    /**
     * Update the specified MetodePembayaran in storage.
     */
    public function update($id, UpdateMetodePembayaranRequest $request)
    {
        $metodePembayaran = $this->metodePembayaranRepository->find($id);

        if (empty($metodePembayaran)) {
            Flash::error('Metode Pembayaran not found');

            return redirect(route('metodePembayarans.index'));
        }

        $metodePembayaran = $this->metodePembayaranRepository->update($request->all(), $id);

        Flash::success('Metode Pembayaran updated successfully.');

        return redirect(route('metodePembayarans.index'));
    }

    /**
     * Remove the specified MetodePembayaran from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $metodePembayaran = $this->metodePembayaranRepository->find($id);

        if (empty($metodePembayaran)) {
            Flash::error('Metode Pembayaran not found');

            return redirect(route('metodePembayarans.index'));
        }

        $this->metodePembayaranRepository->delete($id);

        Flash::success('Metode Pembayaran deleted successfully.');

        return redirect(route('metodePembayarans.index'));
    }
}
