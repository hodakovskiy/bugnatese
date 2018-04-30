<?php
class ControllerExtensionModuleShowcase extends Controller {
	public function geturl($image) {
		if ($this->request->server['HTTPS']) {
			return $this->config->get('config_ssl') . 'image/' . $image;
		} else {
			return $this->config->get('config_url') . 'image/' . $image;
		}
	}

	public function index($setting) {
		static $module = 0;

		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$data['banners'] = array();

		$results = $this->model_design_banner->getBanner($setting['banner_id']);

		foreach ($results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['banners'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->geturl($result['image'])
				);
			}
		}

		$data['module'] = $module++;

		return $this->load->view('extension/module/showcase', $data);
	}
}
