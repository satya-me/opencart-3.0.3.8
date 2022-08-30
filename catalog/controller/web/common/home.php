<?php
class ControllerWebCommonHome extends Controller
{
    public function index()
    {
        $data['assets'] = ASSET_URL;
        $this->document->setTitle($this->config->get('config_meta_title'));
        $this->document->setDescription($this->config->get('config_meta_description'));
        $this->document->setKeywords($this->config->get('config_meta_keyword'));

        if (isset($this->request->get['route'])) {
            $this->document->addLink($this->config->get('config_url'), 'canonical');
        }

        $data['column_left'] = $this->load->controller('common/column_left');
        $data['column_right'] = $this->load->controller('common/column_right');
        $data['content_top'] = $this->load->controller('web/common/content_top');
        $data['content_bottom'] = $this->load->controller('web/common/content_bottom');
        $data['footer'] = $this->load->controller('web/common/footer');
        $data['header'] = $this->load->controller('web/common/header');

        $this->response->setOutput($this->load->view('web/common/home', $data));
    }
}
