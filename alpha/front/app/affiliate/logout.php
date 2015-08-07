<?php
class AppAffiliateLogout extends App {
	public function index() {
		if ($this->affiliate->isLogged()) {
			$this->affiliate->logout();

			$this->response->redirect($this->url->link('affiliate/logout', '', 'SSL'));
		}

		$this->load->language('affiliate/logout');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_account'),
			'href' => $this->url->link('affiliate/account', '', 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_logout'),
			'href' => $this->url->link('affiliate/logout', '', 'SSL')
		);

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_message'] = $this->language->get('text_message');

		$data['button_continue'] = $this->language->get('button_continue');

		$data['continue'] = $this->url->link('common/home');

		$data['column_left'] = $this->load->app('common/column_left');
		$data['column_right'] = $this->load->app('common/column_right');
		$data['content_top'] = $this->load->app('common/content_top');
		$data['content_bottom'] = $this->load->app('common/content_bottom');
		$data['footer'] = $this->load->app('common/footer');
		$data['header'] = $this->load->app('common/header');

		if (file_exists(DIR_TEMPLATE . $this->config->get('config_template') . '/template/common/success.html')) {
			$this->response->setOutput($this->load->view($this->config->get('config_template') . '/template/common/success.html', $data));
		} else {
			$this->response->setOutput($this->load->view('default/template/common/success.html', $data));
		}
	}
}