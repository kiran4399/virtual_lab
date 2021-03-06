<?php

//****Author: Kiran Kumar Lekkala****//
//****Date: 25 October 2015*********//
//****Description: Test php code to parse a givn xml file in config folder******//



class XmlElement {
    var $name;      //Name of the attribute
    var $attributes;//List of subattributes
    var $content;   //Content of the attributes
    var $children;  //Number of children
};

function xml_to_object($xml, $val) {
    $tabs = array();
$data =  array ();
$type = array();
$count = array();



    $parser = xml_parser_create();
    xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
    xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
    xml_parse_into_struct($parser, $xml, $tags);
    xml_parser_free($parser);

    $elements = array();  // the currently filling [child] XmlElement array
    $stack = array();
    $i = 0;
    foreach ($tags as $tag) {

        $index = count($elements);
        if ($tag['type'] == "complete" || $tag['type'] == "open") {
            $elements[$index] = new XmlElement;

            if($tag['level'] >= 3){

                if($tag['tag']=='desc'){
                    array_push($tabs,$tag['value']);
		    array_push($count,$i);
		    $i = 0;
                }
                else if($tag['tag'] == 'type'){
                    array_push($data,$tag['value']);
		
                }
                else{
                    array_push($type,$tag['tag']);
		    $i++;
                }

            }

	    else if($tag['tag']=='num' && $tag['level']==2){
		    $count[0] = $tag['value'];
}

            $elements[$index]->name = $tag['tag'];
            $elements[$index]->attributes = $tag['attributes'];
            $elements[$index]->content = $tag['value'];
            if ($tag['type'] == "open") {  // push
                $elements[$index]->children = array();
                $stack[count($stack)] = &$elements;
                $elements = &$elements[$index]->children;


            }
        }
        if ($tag['type'] == "close") {  // pop
            $elements = &$stack[count($stack) - 1];
            unset($stack[count($stack) - 1]);
        }
    }

    //return array($tabs, $data);
    return array($type, $data, $count);
}


//Give the name of the xml file to be parsed
$rfile1 = fopen("/var/www/html/config/telugu.xml", "r") or die("Unable to open file!");
$xml = fread($rfile1,filesize("/var/www/html/config/telugu.xml"));

//Give the name of the attribute to be compared
$val = 'name';

list($output1, $output2, $count) = xml_to_object($xml, $val);


?>
