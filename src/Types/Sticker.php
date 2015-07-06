<?php
namespace Telegram\Types;

class Sticker
{
	/**
	 * @var string
	 */
	public $file_id;

	/**
	 * @var int
	 */
	public $width;

	/**
	 * @var int
	 */
	public $height;

	/**
	 * @var PhotoSize
	 */
	public $thumb;

	/**
	 * @var int|null
	 */
	public $file_size;

	public function __construct($data){
		if(isset($data['file_id']))
			$this->file_id = $data['file_id'];

		if(isset($data['width']))
			$this->width = intval($data['width']);

		if(isset($data['height']))
			$this->height = intval($data['height']);

		if(isset($data['thumb']))
			$this->thumb = new PhotoSize($data['thumb']);

		if(isset($data['file_size']))
			$this->file_size = intval($data['file_size']);
	}
}