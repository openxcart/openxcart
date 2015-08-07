<?php
class AppCommonColumnLeft extends App {
	public function index() {
		if (isset($this->request->get['token']) && isset($this->session->data['token']) && ($this->request->get['token'] == $this->session->data['token'])) {
			$data['profile'] = $this->load->app('common/profile');
			$data['menu'] = $this->load->app('common/menu');
			$data['stats'] = $this->load->app('common/stats');

			return $this->load->view('common/column_left.tpl', $data);
		}
	}
}