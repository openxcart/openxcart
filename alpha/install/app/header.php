<?php
class AppHeader extends App {
	public function index() {
		$data['title'] = $this->document->getTitle();
		$data['description'] = $this->document->getDescription();
		$data['links'] = $this->document->getLinks();
		$data['styles'] = $this->document->getStyles();
		$data['scripts'] = $this->document->getScripts();

		$data['base'] = HTTP_SERVER;

		return $this->load->view('header.tpl', $data);
	}
}