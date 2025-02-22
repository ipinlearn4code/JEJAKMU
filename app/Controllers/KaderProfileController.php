<?php

namespace App\Controllers;

use App\Models\KaderProfileModel;
use CodeIgniter\Controller;

class KaderProfileController extends Controller
{
    protected $kaderModel;

    public function __construct()
    {
        $this->kaderModel = new KaderProfileModel();
    }

    public function index()
    {
        $data['kaders'] = $this->kaderModel->findAll();
        return view('kader/index', $data);
    }

    public function new()
    {
        return view('front/kader/index');
    }


    public function create()
    {
        $rules = [
            'nik' => 'required',
            'nama' => 'required',
            // 'alamat' => 'required',
            // 'lulusan' => 'required',
            // 'keahlian' => 'required'
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'lulusan' => $this->request->getPost('lulusan'),
            'keahlian' => $this->request->getPost('keahlian'),
        ];

        $this->kaderModel->insert($data);

        return redirect()->to('/dashboard')->with('message', 'Data berhasil disimpan!');
    }

    /**
     * Display the specified resource.
     * GET /kader/(:num)
     */
    public function show($id = null)
    {
        $kader = $this->kaderModel->find($id);

        if (!$kader) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Data with ID $id not found.");
        }

        $data['kader'] = $kader;
        return view('kader/show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     * GET /kader/(:num)/edit
     */
    public function edit($id = null)
    {
        $kader = $this->kaderModel->find($id);

        if (!$kader) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Data with ID $id not found.");
        }

        $data['kader'] = $kader;
        return view('kader/edit', $data);
    }

    /**
     * Update the specified resource in storage.
     * POST or PUT /kader/(:num)
     */
    public function update($id = null)
    {
        $kader = $this->kaderModel->find($id);
        if (!$kader) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Data with ID $id not found.");
        }

        $rules = [
            'nik' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
        ];

        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $data = [
            'nik' => $this->request->getPost('nik'),
            'nama' => $this->request->getPost('nama'),
            'alamat' => $this->request->getPost('alamat'),
            'lulusan' => $this->request->getPost('lulusan'),
            'keahlian' => $this->request->getPost('keahlian'),
        ];

        $this->kaderModel->update($id, $data);

        return redirect()->to('/kader')->with('message', 'Data berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     * GET or POST /kader/(:num)/delete
     */
    public function delete($id = null)
    {
        $kader = $this->kaderModel->find($id);
        if (!$kader) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Data with ID $id not found.");
        }

        $this->kaderModel->delete($id);

        return redirect()->to('/kader')->with('message', 'Data berhasil dihapus!');
    }
}
