<?php

class ControllerWebCommonHeader extends Controller 
{
    public function index(): string
    {

        $data['assets'] = ASSET_URL;
        return $this->load->view('web/common/header', $data);
    }
}
