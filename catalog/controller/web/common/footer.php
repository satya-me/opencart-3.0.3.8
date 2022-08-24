<?php

class ControllerWebCommonFooter extends Controller 
{
    public function index(): string
    {
        $data['assets'] = ASSET_URL;
        return $this->load->view('web/common/footer', $data);
    }
}
