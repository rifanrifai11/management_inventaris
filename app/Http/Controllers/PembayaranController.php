<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePembayaranRequest;
use App\Http\Requests\UpdatePembayaranRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\PembayaranRepository;
use Illuminate\Http\Request;
use Flash;

class PembayaranController extends AppBaseController
{
    /** @var PembayaranRepository $pembayaranRepository*/
    private $pembayaranRepository;

    public function __construct(PembayaranRepository $pembayaranRepo)
    {
        $this->pembayaranRepository = $pembayaranRepo;
    }

    /**
     * Display a listing of the Pembayaran.
     */
    public function index(Request $request)
    {
        $pembayarans = $this->pembayaranRepository->paginate(10);

        return view('pembayarans.index')
            ->with('pembayarans', $pembayarans);
    }

    /**
     * Show the form for creating a new Pembayaran.
     */
    public function create()
    {
        return view('pembayarans.create');
    }

    /**
     * Store a newly created Pembayaran in storage.
     */
    public function store(CreatePembayaranRequest $request)
    {
        $input = $request->all();

        $pembayaran = $this->pembayaranRepository->create($input);

        Flash::success('Pembayaran saved successfully.');

        return redirect(route('pembayarans.index'));
    }

    /**
     * Display the specified Pembayaran.
     */
    public function show($id)
    {
        $pembayaran = $this->pembayaranRepository->find($id);

        if (empty($pembayaran)) {
            Flash::error('Pembayaran not found');

            return redirect(route('pembayarans.index'));
        }

        return view('pembayarans.show')->with('pembayaran', $pembayaran);
    }

    /**
     * Show the form for editing the specified Pembayaran.
     */
    public function edit($id)
    {
        $pembayaran = $this->pembayaranRepository->find($id);

        if (empty($pembayaran)) {
            Flash::error('Pembayaran not found');

            return redirect(route('pembayarans.index'));
        }

        return view('pembayarans.edit')->with('pembayaran', $pembayaran);
    }

    /**
     * Update the specified Pembayaran in storage.
     */
    public function update($id, UpdatePembayaranRequest $request)
    {
        $pembayaran = $this->pembayaranRepository->find($id);

        if (empty($pembayaran)) {
            Flash::error('Pembayaran not found');

            return redirect(route('pembayarans.index'));
        }

        $pembayaran = $this->pembayaranRepository->update($request->all(), $id);

        Flash::success('Pembayaran updated successfully.');

        return redirect(route('pembayarans.index'));
    }

    /**
     * Remove the specified Pembayaran from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $pembayaran = $this->pembayaranRepository->find($id);

        if (empty($pembayaran)) {
            Flash::error('Pembayaran not found');

            return redirect(route('pembayarans.index'));
        }

        $this->pembayaranRepository->delete($id);

        Flash::success('Pembayaran deleted successfully.');

        return redirect(route('pembayarans.index'));
    }
}
