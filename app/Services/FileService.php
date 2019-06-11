<?php

namespace App\Services;

use App\Files;
use Illuminate\Database\Eloquent\Model;
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
	 * @return string
	 **/
	public function upload(UploadedFile $file)
	{
		$this->model->type = $file->getClientMimeType();
		$this->model->size = $file->getSize();

		$uploadedFile = Storage::put($this->path, $file);

		$this->model->path = $uploadedFile;
		
		$this->model->save();

		return $uploadedFile;
	}

	/**
	 * Accessor + Mutator for the variable $model
	 *
	 * @return 	object
	 * @param 	$model 	Illuminate\Database\Eloquent\Model 	null
	 **/
	public function model(Model $model = null)
	{
		if (is_null($model))
		{
			return $this->model;
		}

		$this->model = $model;

		return $this;
	}

	/**
	 * Accessor + Mutator for the variable $path
	 *
	 * @return 	String
	 * @param 	$path 	String 	null
	 **/
	public function path($path = null)
	{
		if (is_null($path) OR empty($path))
		{
			return $this->path;
		}

		$this->path = $path;

		return $this;
	}
}