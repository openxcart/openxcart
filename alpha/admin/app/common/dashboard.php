<?php
class AppCommonDashboard extends App {
	public function index() {
		$this->load->language('common/dashboard');

		$this->document->setTitle($this->language->get('heading_title'));

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_sale'] = $this->language->get('text_sale');
		$data['text_map'] = $this->language->get('text_map');
		$data['text_activity'] = $this->language->get('text_activity');
		$data['text_recent'] = $this->language->get('text_recent');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], 'SSL')
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('common/dashboard', 'token=' . $this->session->data['token'], 'SSL')
		);

		// Check install directory exists
		if (is_dir(dirname(DIR_APPLICATION) . '/install')) {
			$data['error_install'] = $this->language->get('error_install');
		} else {
			$data['error_install'] = '';
		}

		$data['token'] = $this->session->data['token'];

		$data['header'] = $this->load->app('common/header');
		$data['column_left'] = $this->load->app('common/column_left');
		$data['order'] = $this->load->app('dashboard/order');
		$data['sale'] = $this->load->app('dashboard/sale');
		$data['customer'] = $this->load->app('dashboard/customer');
		$data['online'] = $this->load->app('dashboard/online');
		$data['map'] = $this->load->app('dashboard/map');
		$data['chart'] = $this->load->app('dashboard/chart');
		$data['activity'] = $this->load->app('dashboard/activity');
		$data['recent'] = $this->load->app('dashboard/recent');
		$data['footer'] = $this->load->app('common/footer');

		// Run currency update
		if ($this->config->get('config_currency_auto')) {
			$this->load->model('localisation/currency');

			$this->model_localisation_currency->refresh();
		}

		$this->response->setOutput($this->load->view('common/dashboard.tpl', $data));
	}
}