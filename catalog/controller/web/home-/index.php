<?php
class ControllerWebHomeIndex extends Controller
{
    public function index()
    {
        $data['assets'] = ASSET_URL;

        $this->document->setTitle($this->config->get('config_meta_title'));
        $this->document->setDescription($this->config->get('config_meta_description'));
        $this->document->setKeywords($this->config->get('config_meta_keyword'));

        $data['home'] = $this->url->link('web/common/home');
        $data['wishlist'] = $this->url->link('web/account/wishlist', '', true);
        $data['logged'] = $this->customer->isLogged();
        $data['account'] = $this->url->link('web/account/account', '', true);
        $data['register'] = $this->url->link('web/account/register', '', true);
        $data['login'] = $this->url->link('web/account/login', '', true);
        $data['order'] = $this->url->link('web/account/order', '', true);
        $data['transaction'] = $this->url->link('web/account/transaction', '', true);
        $data['download'] = $this->url->link('web/account/download', '', true);
        $data['logout'] = $this->url->link('web/account/logout', '', true);
        $data['shopping_cart'] = $this->url->link('web/checkout/cart');
        $data['checkout'] = $this->url->link('web/checkout/checkout', '', true);
        $data['contact'] = $this->url->link('web/information/contact');
        $data['telephone'] = $this->config->get('config_telephone');

        $data['language'] = $this->load->controller('common/language');
        $data['currency'] = $this->load->controller('common/currency');
        $data['search'] = $this->load->controller('common/search');
        $data['cart'] = $this->load->controller('common/cart');
        $data['menu'] = $this->load->controller('common/menu');

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
