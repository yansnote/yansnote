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
	protected $path;

	protected $model;

	public function __construct()
	{
		$this->model = new Files;
		$this->path = "upload/" . date("Y") . "/" . date("M");
	}

	/**
	 * Upload file and insert uploaded file data to database
	 *
	 * @param Illuminate\Http\UploadedFile $file UploadedFile instance
	 * 
	 * @return void
	 **/
	public function upload(UploadedFile $file)
	{
		$this->model->type = $file->getClientMimeType();
		$this->model->size = $file->getSize();

		$this->model->path = Storage::put($this->path, $file);

		$this->model->save();

		return true;
	}

	public function model()
	{

	}
}