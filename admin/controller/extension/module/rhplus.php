<?php
class ControllerExtensionModuleRhplus extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/rhplus');

		$this->document->setTitle($this->language->get('heading_title'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->model_setting_setting->editSetting('rhplus', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/module/rhplus', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['action'] = $this->url->link('extension/module/rhplus', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		$options = array(
			'rhplus_module_facebook',
			'rhplus_module_pinterest',
			'rhplus_module_twitter',
			'rhplus_module_instagram',
			'rhplus_module_skype',
			'rhplus_module_linkedin',
			'rhplus_module_tumblr',
			'rhplus_module_googleplus',
			'rhplus_module_youtube',
			'rhplus_module_etsy',
			'rhplus_module_vkontakte',
			'rhplus_module_vimeo'
		);

		foreach ($options as $option) {
			if (isset($this->request->post[$option])) {
				$data[$option] = $this->request->post[$option];
			} else {
				$data[$option] = $this->config->get($option);
			}
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/rhplus', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/rhplus')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		return !$this->error;
	}
}
