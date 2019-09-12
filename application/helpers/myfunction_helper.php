<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists("sf_connect")) {
    /*
        return:
            @sf_url {string}
            @sf_access_point {string}
            @sf_checkword {string}
    */
    function sf_connect()
    {
        return [
            "sf_url"                => "http://osms.sf-express.com/osms/services/OrderWebService?wsdl",
            "sf_access_point"       => "OSMS_2543",
            "sf_checkword"          => "10baacc3f22d4cec"
        ];
    }
}

if (!function_exists("generate_xml")) {
    function generate_xml($request_name = "order", $data = [])
    {
        $func_name = "generate_xml_" . strtolower($request_name);

        if (function_exists($func_name)) {
            return $func_name($data);
        } 

        return generate_xml_blank();
    }
}

if (!function_exists("generate_xml_blank")) {
    function generate_xml_blank($data=[])
    {
        $xml = new SimpleXMLElement("<Request />");

        $xml->addChild("Head", "OSMS_1");
        
        $xml->addChild("Body");
        
        return $xml->asXML();
    }
}

if (!function_exists("generate_xml_order")) {
    function generate_xml_order($data = [])
    {
        $xml = new SimpleXMLElement("<Request />");

        $xml->addChild("Head", $data["access_point"]);
        
        $body = $xml->addChild("Body");

        $xml->addAttribute("service", "apiOrderService");
        $xml->addAttribute("lang", "en");

        $order = $body->addChild("Order");

        if (isset($data["header"])) {
            foreach ($data["header"] as $key => $value) {
                $order->addAttribute($key, $value);
            }
        }

        if (isset($data["detail"])) {
            foreach ($data["detail"] as $index => $rows) {
                $cargo = $order->addChild("Cargo");

                foreach ($rows as $key => $value) {
                    $cargo->addAttribute($key, $value);
                }
            }
        }

        return $xml->asXML();
    }
}

if (!function_exists("generate_xml_tracking")) {
    function generate_xml_tracking($data = [])
    {
        $xml = new SimpleXMLElement("<Request />");
        

        $xml->addChild("Head", $data["access_point"]);
        
        $body = $xml->addChild("Body");

        $xml->addAttribute("service", "RouteService");
        $xml->addAttribute("lang", "en"/* "zh-CN" */);

        $route = $body->addChild("Route");

        if (isset($data["header"])) {
            foreach ($data["header"] as $key => $value) {
                $route->addAttribute($key, $value);
            }
        }

        return $xml->asXML();
    }
}

if (!function_exists("read_xml")) {
    function read_xml($xml_string) 
    {
        $output = [];

        $xml = @simplexml_load_string($xml_string, "SimpleXMLElement", LIBXML_NOWARNING);

        if ($xml) {
            $json = json_encode($xml);
            $array = json_decode($json,TRUE);

            foreach ($array as $a => $b) {
                if ($a == "@attributes") {
                    $output["name"] = $b["service"];
                } else if (strtolower($a) == "body") {
                    foreach ($b as $c => $d) {                
                        $key_name = str_replace("response", "_response", strtolower($c));

                        if (is_array($d)) {
                            foreach ($d as $e => $f) {
                                if ($e == "@attributes") {
                                    $output[$key_name]["attr"] = $f;
                                } else {   
                                    if (is_array($f)) {
                                        foreach ($f as $g => $h) {
                                            $output[$key_name]["data"][strtolower($e)][] = isset($h["@attributes"])? $h["@attributes"]: $h; 
                                        }
                                    } else {
                                        $output[$key_name]["data"][$e] = $f;
                                    }
                                }
                            }
                        } else {
                            $output[strtolower($c)] = $d;
                        }
                    }
                } else {
                    $output[strtolower($a)] = $b;
                }
            }
        } else {
            $output = ["xml_error" => $xml_string];
        }

        return $output;
    }
}

if (!function_exists("response")) {
    function response($output = "", $status = 200)
    {
        $ci = &get_instance();

        if (!is_array($output)) {
            $ci->output
                ->set_status_header($status)
                ->set_content_type('text/plain', 'UTF-8')
                ->set_output($output);
        } else {
            $ci->output
                ->set_status_header($status)
                ->set_content_type('application/json')
                ->set_output(json_encode($output));
		}
		
		echo $ci->output
			->get_output();
		
		exit;
    }
}