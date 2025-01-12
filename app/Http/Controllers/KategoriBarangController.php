<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKategoriBarangRequest;
use App\Http\Requests\UpdateKategoriBarangRequest;
use App\Http\Controllers\AppBaseController;
use App\Repositories\KategoriBarangRepository;
use Illuminate\Http\Request;
use Flash;

class KategoriBarangController extends AppBaseController
{
    /** @var KategoriBarangRepository $kategoriBarangRepository*/
    private $kategoriBarangRepository;

    public function __construct(KategoriBarangRepository $kategoriBarangRepo)
    {
        $this->kategoriBarangRepository = $kategoriBarangRepo;
    }

    /**
     * Display a listing of the KategoriBarang.
     */
    public function index(Request $request)
    {
        $kategoriBarangs = $this->kategoriBarangRepository->paginate(10);

        return view('kategori_barangs.index')
            ->with('kategoriBarangs', $kategoriBarangs);
    }

    /**
     * Show the form for creating a new KategoriBarang.
     */
    public function create()
    {
        return view('kategori_barangs.create');
    }

    /**
     * Store a newly created KategoriBarang in storage.
     */
    public function store(CreateKategoriBarangRequest $request)
    {
        $input = $request->all();

        $kategoriBarang = $this->kategoriBarangRepository->create($input);

        Flash::success('Kategori Barang saved successfully.');

        return redirect(route('kategoriBarangs.index'));
    }

    /**
     * Display the specified KategoriBarang.
     */
    public function show($id)
    {
        $kategoriBarang = $this->kategoriBarangRepository->find($id);

        if (empty($kategoriBarang)) {
            Flash::error('Kategori Barang not found');

            return redirect(route('kategoriBarangs.index'));
        }

        return view('kategori_barangs.show')->with('kategoriBarang', $kategoriBarang);
    }

    /**
     * Show the form for editing the specified KategoriBarang.
     */
    public function edit($id)
    {
        $kategoriBarang = $this->kategoriBarangRepository->find($id);

        if (empty($kategoriBarang)) {
            Flash::error('Kategori Barang not found');

            return redirect(route('kategoriBarangs.index'));
        }

        return view('kategori_barangs.edit')->with('kategoriBarang', $kategoriBarang);
    }

    /**
     * Update the specified KategoriBarang in storage.
     */
    public function update($id, UpdateKategoriBarangRequest $request)
    {
        $kategoriBarang = $this->kategoriBarangRepository->find($id);

        if (empty($kategoriBarang)) {
            Flash::error('Kategori Barang not found');

            return redirect(route('kategoriBarangs.index'));
        }

        $kategoriBarang = $this->kategoriBarangRepository->update($request->all(), $id);

        Flash::success('Kategori Barang updated successfully.');

        return redirect(route('kategoriBarangs.index'));
    }

    /**
     * Remove the specified KategoriBarang from storage.
     *
     * @throws \Exception
     */
    public function destroy($id)
    {
        $kategoriBarang = $this->kategoriBarangRepository->find($id);

        if (empty($kategoriBarang)) {
            Flash::error('Kategori Barang not found');

            return redirect(route('kategoriBarangs.index'));
        }

        $this->kategoriBarangRepository->delete($id);

        Flash::success('Kategori Barang deleted successfully.');

        return redirect(route('kategoriBarangs.index'));
    }
}
