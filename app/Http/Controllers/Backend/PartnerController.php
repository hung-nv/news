<?php

namespace App\Http\Controllers\Backend;

use App\Http\Requests\CreatePartnerRequest;
use App\Services\PartnerServices;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    protected $partnerServices;

    public function __construct(PartnerServices $partnerServices)
    {
        parent::__construct();

        $this->partnerServices = $partnerServices;
    }

    public function index(Request $request)
    {
        $partners = $this->partnerServices->getAll();

        return view('backend.partners.index', compact('partners'));
    }

    public function create()
    {
        return view('backend.partners.create');
    }

    /**
     * @param CreatePartnerRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function store(CreatePartnerRequest $request)
    {
        $response = $this->partnerServices->createPartner($request);

        return redirect()->route('partner.index')->with([
            'success' => $response
        ]);
    }

    public function edit(Request $request, $id)
    {
        $partner = $this->partnerServices->getPartnerById($id);

        return view('backend.partners.update', [
            'data' => $partner
        ]);
    }

    /**
     * @param CreatePartnerRequest $request
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function update(CreatePartnerRequest $request, $id)
    {
        $response = $this->partnerServices->updatePartner($request, $id);

        return redirect()->route('partner.index')->with([
            'success' => $response
        ]);
    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $this->partnerServices->deletePartnerById($id);

        return redirect()->route('partner.index')->with([
            'success' => 'Delete successful'
        ]);
    }
}
