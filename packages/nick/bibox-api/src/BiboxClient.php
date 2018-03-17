<?php
/**
 * Created by nick-packagist.
 * User: Nick.Wu
 * Date: 2018/3/17
 * Time: 16:12
 * Description:bibox.com api
 */

namespace Nick\BiboxApi;


class BiboxClient
{
    const BIBOX_URL='https://api.bibox365.com/v1/mdata?cmd=market&pair=BBN_ETH';


    public function test(){
        return $this->send(self::BIBOX_URL,'GET');
    }

    public function send($url,$method){

        $ch = curl_init ();
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
        curl_setopt ( $ch, CURLOPT_URL, $url );
        ob_start ();
        curl_exec ( $ch );
        $result = ob_get_contents ();
        ob_end_clean ();
        curl_close ( $ch );
        return json_decode($result,true);

    }

}