<?php
class AppCommonHome extends App {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink(HTTP_SERVER, 'canonical');
		}

		$data['column_left'] = $this->load->app('common/column_left');
		$data['column_right'] = $this->load->app('common/column_right');
		$data['content_top'] = $this->load->app('common/content_top');
		$data['content_bottom'] = $this->load->app('common/content_bottom');
		$data['footer'] = $this->load->app('common/footer');
		$data['header'] = $this->load->app('common/header');

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/common/home.html')) {
			$this->response->setOutput($this->load->view($this->config->get('config_template') . '/template/common/home.html', $data));
		} else {
			$this->response->setOutput($this->load->view('default/template/common/home.html', $data));
		}
	}
}