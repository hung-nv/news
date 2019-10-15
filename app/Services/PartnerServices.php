<?php

namespace App\Services;

use App\Models\Partner;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Services\Common\ImageServices;
use Illuminate\Foundation\Http\FormRequest;

class PartnerServices
{
    private $imageServices;

    public function __construct(ImageServices $imageServices)
    {
        $this->imageServices = $imageServices;
    }

    public function getAll()
    {
        return Partner::all();
    }

    /**
     * Create partner.
     * @param FormRequest $request
     * @return string
     * @throws \Exception
     */
    public function createPartner($request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            // upload image to folder.
            $fileName = $this->imageServices->uploads($request->file('image'), 'partner');

            if (empty($fileName)) {
                return 'Fail';
            }

            $data['image'] = $fileName;
        }

        Partner::create($data);

        $message = 'Create successful';

        return $message;
    }

    public function getPartnerById($id)
    {
        return Partner::find($id);
    }

    /**
     * Update partner.
     * @param FormRequest $request
     * @param $id
     * @return string
     * @throws \Exception
     */
    public function updatePartner($request, $id)
    {
        $partner = Partner::find($id);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // delete old image.
            $this->imageServices->deleteImage($partner->image);
            // upload image to folder.
            $fileName = $this->imageServices->uploads($request->file('image'), 'partner');

            if (empty($fileName)) {
                return 'Fail';
            }

            $data['image'] = $fileName;
        }

        $partner->update($data);

        return 'Update successful';
    }

    /**
     * Delete advertising.
     * @param $id
     * @throws \Exception
     */
    public function deletePartnerById($id)
    {
        $partner = Partner::find($id);

        // delete old image.
        $this->imageServices->deleteImage($partner->image);

        $partner->delete();
    }

    /**
     * Delete image by id.
     * @param $id
     * @return array
     */
    public function deleteImageById($id)
    {
        $partner = Partner::findOrFail($id);

        if (!$partner) {
            throw new NotFoundHttpException('Not found advertising.');
        } else {
            $deleteFile = $this->imageServices->deleteImage($partner->image);

            if (empty($deleteFile)) {
                throw new NotFoundHttpException('Not found image.');
            }

            $partner->update(['image' => '']);

            return ['message' => 'Delete file successful.'];
        }
    }
}