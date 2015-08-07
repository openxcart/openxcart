<?php
class Language {
	private $default = 'english';
	private $directory;
	private $data = array();

	public function __construct($directory = '') {
		$this->directory = $directory;
	}

	public function get($key) {
		return (isset($this->data[$key]) ? $this->data[$key] : $key);
	}

	public function load($filename) {
		$lang = array();

		$file = DIR_LANGUAGE . $this->default . '/' . $filename . '.xml';

		if (file_exists($file)) {
			require($file);
		}

		$file = DIR_LANGUAGE . $this->directory . '/' . $filename . '.xml';

		if (file_exists($file)) {
			require($file);
		}

		$this->data = array_merge($this->data, $lang);

		return $this->data;
	}
}