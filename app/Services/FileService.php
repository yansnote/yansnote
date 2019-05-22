<?php

namespace App\Services;

use App\Files;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

/**
 * Handle uploaded file manipulation
 */
class FileService
{
	/**
	 * Directory to save uploaded file
	 *
	 * @var string
	 **/
	protected $uplodPath = "upload/" . data("Y") . "/" . date("M");

	/**
	 * Upload file and insert uploaded file data to database
	 *
	 * @param Illuminate\Http\UploadedFile $file UploadedFile instance
	 * 
	 * @return void
	 **/
	public function upload(UploadedFile $file)
	{
		$model = new Files;

		$model->type = $file->getClientMimeType();
		$model->size = $file->getSize();

		$model->path = Storage::put($this->uploadPath, $file);

		$model->save();

		return true;
	}
}