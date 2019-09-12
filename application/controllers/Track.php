<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Track extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
    }

    public function last()
    {
        if ($this->input->method(TRUE) == "POST") {
            $sf_number  = $this->input->post("sf_number");

            $response   = $this->send_request($sf_number, false);

            response(["success" => true, "message" => "Success requesting data.", "response" => $response]);
        }
        
        response(["success" => false, "message" => "You don't have access this page."]);
    }

    public function all(){
        if ($this->input->method(TRUE) == "POST") {
            $sf_number  = $this->input->post("sf_number");

            $response   = $this->send_request($sf_number, true);

            response(["success" => true, "message" => "Success requesting data.", "response" => $response]);
        }
        
        response(["success" => false, "message" => "You don't have access this page."]);
    }

    private function send_request($sf_number, $bool = true)
    {
        extract(sf_connect());

        $data           = [
                            "access_point" => $sf_access_point,
                            "header" => [
                                "tracking_type"		=> "1",
                                "tracking_number"	=> "$sf_number"
                            ]
                        ];

        $xml            = generate_xml("tracking", $data);
        $strvalidate    = base64_encode(md5($xml . $sf_checkword, false));
        $client         = new SoapClient($sf_url);
        $result         = $client->sfexpressService([
                            'data' => base64_encode($xml), 
                            'validateStr' => $strvalidate, 
                            'customerCode' => $sf_access_point
                        ]);
        
        return read_xml($result->Return);
    }
}