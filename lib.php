<?php
// This is a quick&dirty hack to see, if I can send commands from
// anything to my sony tv. Alone the global in the functions are ugly ;9

// My actual goal is to port this to http://fhem.de/, but that's in Perl :(


//output of
// http://192.168.50.12/sony/system
// POST: {"id":20,"method":"getRemoteControllerInfo","version":"1.0","params":[]}

$did = 1;
$controllerinfo = json_decode('{"id":20,"result":[{"bundled":true,"type":"RM-J1100"},[{
"name":"PowerOff","value":"AAAAAQAAAAEAAAAvAw=="},{
"name":"Input","value":"AAAAAQAAAAEAAAAlAw=="},{
"name":"GGuide","value":"AAAAAQAAAAEAAAAOAw=="},{
"name":"EPG","value":"AAAAAgAAAKQAAABbAw=="},{
"name":"Favorites","value":"AAAAAgAAAHcAAAB2Aw=="},{
"name":"Display","value":"AAAAAQAAAAEAAAA6Aw=="},{
"name":"Home","value":"AAAAAQAAAAEAAABgAw=="},{
"name":"Options","value":"AAAAAgAAAJcAAAA2Aw=="},{
"name":"Return","value":"AAAAAgAAAJcAAAAjAw=="},{
"name":"Up","value":"AAAAAQAAAAEAAAB0Aw=="},{
"name":"Down","value":"AAAAAQAAAAEAAAB1Aw=="},{
"name":"Right","value":"AAAAAQAAAAEAAAAzAw=="},{
"name":"Left","value":"AAAAAQAAAAEAAAA0Aw=="},{
"name":"Confirm","value":"AAAAAQAAAAEAAABlAw=="},{
"name":"Red","value":"AAAAAgAAAJcAAAAlAw=="},{
"name":"Green","value":"AAAAAgAAAJcAAAAmAw=="},{
"name":"Yellow","value":"AAAAAgAAAJcAAAAnAw=="},{
"name":"Blue","value":"AAAAAgAAAJcAAAAkAw=="},{
"name":"Num1","value":"AAAAAQAAAAEAAAAAAw=="},{
"name":"Num2","value":"AAAAAQAAAAEAAAABAw=="},{
"name":"Num3","value":"AAAAAQAAAAEAAAACAw=="},{
"name":"Num4","value":"AAAAAQAAAAEAAAADAw=="},{
"name":"Num5","value":"AAAAAQAAAAEAAAAEAw=="},{
"name":"Num6","value":"AAAAAQAAAAEAAAAFAw=="},{
"name":"Num7","value":"AAAAAQAAAAEAAAAGAw=="},{
"name":"Num8","value":"AAAAAQAAAAEAAAAHAw=="},{
"name":"Num9","value":"AAAAAQAAAAEAAAAIAw=="},{
"name":"Num0","value":"AAAAAQAAAAEAAAAJAw=="},{
"name":"Num11","value":"AAAAAQAAAAEAAAAKAw=="},{
"name":"Num12","value":"AAAAAQAAAAEAAAALAw=="},{
"name":"VolumeUp","value":"AAAAAQAAAAEAAAASAw=="},{
"name":"VolumeDown","value":"AAAAAQAAAAEAAAATAw=="},{
"name":"Mute","value":"AAAAAQAAAAEAAAAUAw=="},{
"name":"ChannelUp","value":"AAAAAQAAAAEAAAAQAw=="},{
"name":"ChannelDown","value":"AAAAAQAAAAEAAAARAw=="},{
"name":"SubTitle","value":"AAAAAgAAAJcAAAAoAw=="},{
"name":"ClosedCaption","value":"AAAAAgAAAKQAAAAQAw=="},{
"name":"Enter","value":"AAAAAQAAAAEAAAALAw=="},{
"name":"DOT","value":"AAAAAgAAAJcAAAAdAw=="},{
"name":"Analog","value":"AAAAAgAAAHcAAAANAw=="},{
"name":"Teletext","value":"AAAAAQAAAAEAAAA/Aw=="},{
"name":"Exit","value":"AAAAAQAAAAEAAABjAw=="},{
"name":"Analog2","value":"AAAAAQAAAAEAAAA4Aw=="},{
"name":"*AD","value":"AAAAAgAAABoAAAA7Aw=="},{
"name":"Digital","value":"AAAAAgAAAJcAAAAyAw=="},{
"name":"Analog?","value":"AAAAAgAAAJcAAAAuAw=="},{
"name":"BS","value":"AAAAAgAAAJcAAAAsAw=="},{
"name":"CS","value":"AAAAAgAAAJcAAAArAw=="},{
"name":"BSCS","value":"AAAAAgAAAJcAAAAQAw=="},{
"name":"Ddata","value":"AAAAAgAAAJcAAAAVAw=="},{
"name":"PicOff","value":"AAAAAQAAAAEAAAA+Aw=="},{
"name":"Tv_Radio","value":"AAAAAgAAABoAAABXAw=="},{
"name":"Theater","value":"AAAAAgAAAHcAAABgAw=="},{
"name":"SEN","value":"AAAAAgAAABoAAAB9Aw=="},{
"name":"InternetWidgets","value":"AAAAAgAAABoAAAB6Aw=="},{
"name":"InternetVideo","value":"AAAAAgAAABoAAAB5Aw=="},{
"name":"Netflix","value":"AAAAAgAAABoAAAB8Aw=="},{
"name":"SceneSelect","value":"AAAAAgAAABoAAAB4Aw=="},{
"name":"Mode3D","value":"AAAAAgAAAHcAAABNAw=="},{
"name":"iManual","value":"AAAAAgAAABoAAAB7Aw=="},{
"name":"Audio","value":"AAAAAQAAAAEAAAAXAw=="},{
"name":"Wide","value":"AAAAAgAAAKQAAAA9Aw=="},{
"name":"Jump","value":"AAAAAQAAAAEAAAA7Aw=="},{
"name":"PAP","value":"AAAAAgAAAKQAAAB3Aw=="},{
"name":"MyEPG","value":"AAAAAgAAAHcAAABrAw=="},{
"name":"ProgramDescription","value":"AAAAAgAAAJcAAAAWAw=="},{
"name":"WriteChapter","value":"AAAAAgAAAHcAAABsAw=="},{
"name":"TrackID","value":"AAAAAgAAABoAAAB+Aw=="},{
"name":"TenKey","value":"AAAAAgAAAJcAAAAMAw=="},{
"name":"AppliCast","value":"AAAAAgAAABoAAABvAw=="},{
"name":"acTVila","value":"AAAAAgAAABoAAAByAw=="},{
"name":"DeleteVideo","value":"AAAAAgAAAHcAAAAfAw=="},{
"name":"PhotoFrame","value":"AAAAAgAAABoAAABVAw=="},{
"name":"TvPause","value":"AAAAAgAAABoAAABnAw=="},{
"name":"KeyPad","value":"AAAAAgAAABoAAAB1Aw=="},{
"name":"Media","value":"AAAAAgAAAJcAAAA4Aw=="},{
"name":"SyncMenu","value":"AAAAAgAAABoAAABYAw=="},{
"name":"Forward","value":"AAAAAgAAAJcAAAAcAw=="},{
"name":"Play","value":"AAAAAgAAAJcAAAAaAw=="},{
"name":"Rewind","value":"AAAAAgAAAJcAAAAbAw=="},{
"name":"Prev","value":"AAAAAgAAAJcAAAA8Aw=="},{
"name":"Stop","value":"AAAAAgAAAJcAAAAYAw=="},{
"name":"Next","value":"AAAAAgAAAJcAAAA9Aw=="},{
"name":"Rec","value":"AAAAAgAAAJcAAAAgAw=="},{
"name":"Pause","value":"AAAAAgAAAJcAAAAZAw=="},{
"name":"Eject","value":"AAAAAgAAAJcAAABIAw=="},{
"name":"FlashPlus","value":"AAAAAgAAAJcAAAB4Aw=="},{
"name":"FlashMinus","value":"AAAAAgAAAJcAAAB5Aw=="},{
"name":"TopMenu","value":"AAAAAgAAABoAAABgAw=="},{
"name":"PopUpMenu","value":"AAAAAgAAABoAAABhAw=="},{
"name":"RakurakuStart","value":"AAAAAgAAAHcAAABqAw=="},{
"name":"OneTouchTimeRec","value":"AAAAAgAAABoAAABkAw=="},{
"name":"OneTouchView","value":"AAAAAgAAABoAAABlAw=="},{
"name":"OneTouchRec","value":"AAAAAgAAABoAAABiAw=="},{
"name":"OneTouchStop","value":"AAAAAgAAABoAAABjAw=="}]]}',true);

$codes = array();

foreach($controllerinfo['result'] as $k => $v) {
    foreach($v as $code) {
        if (isset($code['name'])) {
            $codes[$code['name']] = $code['value'];
        }
    }
}


function sendCommand($key) {

    global $codes;
    $data = '<?xml version="1.0"?>
    <s:Envelope xmlns:s="http://schemas.xmlsoap.org/soap/envelope/" s:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/">
    <s:Body>';
    $data .= '<u:X_SendIRCC xmlns:u="urn:schemas-sony-com:service:IRCC:1">
    <IRCCCode>'.$codes[$key].'</IRCCCode>
    </u:X_SendIRCC>';
    $data .= '</s:Body>
    </s:Envelope>';
    sendCurlPost('/sony/IRCC',$data);
}

function sendCurlPost($url,$data, $auth = false) {
    global $cookie, $tvip;
    $headers = array();
    if ($auth) {
        if (!$cookie) {
            $cookie = getCookie();
            $headers[] = "Cookie: " . $cookie;
        }
    }

    $headers[] = 'Content-Type: text/xml; charset=UTF-8';
    $headers[] = 'Content-Length: ' . strlen($data);
    $ch = curl_init('http://'. $tvip . $url);

    //uncommment this if your asked for a key on your tv
    // and add the key and run the script again
    // curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC ) ;
    // curl_setopt($ch, CURLOPT_USERPWD, ":9560");

    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    return curl_exec($ch);

}

function getCookie() {
    global $did;
    // The first time you call this, a popup will appear on the tv
    // uncomment the following lines and replace the number with the number
    // appearing on your screen, then run the script agains
    $data = '{"id":'. $did++.',"method":"actRegister","version":"1.0","params":[{"clientid":"PHP Sony TV:1","nickname":"PHP Sony TV Remote"},[{"clientid":"iRule:1","value":"yes","nickname":"iRule","function":"WOL"}]]}';
    $result = sendCurlPost('/sony/accessControl',$data);
    $headers = get_headers_from_curl_response($result);
    $cookie = $headers['Set-Cookie'];
    return $cookie;
}

function switchHDMI($id) {
    global $did;
    $data = '{"id":'. $did++.',"method":"setPlayContent","version":"1.0","params":[{"uri":"extInput:hdmi?port='.$id.'"}]}';
    var_dump($data);
    sendCurlPost('/sony/avContent',$data, true);
}


function get_headers_from_curl_response($response)
{
    $headers = array();

    $header_text = substr($response, 0, strpos($response, "\r\n\r\n"));

    foreach (explode("\r\n", $header_text) as $i => $line)
    if ($i === 0) {
        $headers['http_code'] = $line;
    }
    else {
        list ($key, $value) = explode(': ', $line);

        $headers[$key] = $value;
    }

    return $headers;
}
