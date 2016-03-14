<?php namespace App\Http\Controllers;

use App\Belajar\TopicService;

class ApiController extends Controller
{

    private $status  = 1;
    private $message = 'Success';
    private $token   = null;
    private $data    = [];

    public function __construct(TopicService $topic_service)
    {
        $this->topic_service = $topic_service;
    }

    public function responseJson()
    {
        $response            = [];
        $response['status']  = $this->status;
        $response['message'] = $this->message;
        $response['token']   = $this->token;
        $response['data']    = $this->data;

        return json_encode($response);
    }

    public function Status($status, $key)
    {
        if (isset($key) && !empty($key)) {
            $this->status = $status;
        } else {
            array_push($this->status, $status);
        }
    }

    public function Message($message, $key)
    {
        if (isset($key) && !empty($key)) {
            $this->message = $message;
        } else {
            array_push($this->message, $message);
        }
    }

    public function kirimData()
    {
        $kirim  = $this->topic_service->getListTopic();
        $json_a = json_decode($kirim, true);

        foreach ($json_a['data'] as $value) {
            $data_imgur[] = [
                'id'   => $value['id'],
                'name' => $value['name'],
            ];
        }
        $this->data = $data_imgur;

    }

    public function showallapi()
    {

        $this->Status(1, 'status');
        $this->Message('Success', 'message');
        $this->kirimData();

        return $this->responseJson();

    }

    public function showlist($id)
    {
        $result = $this->topic_service->ListTopic($id);
        $json_a = json_decode($result, true);
        foreach ($json_a['data'] as $value) {
            $datalist[] = [
                'gambar' => $value['link'],
            ];
        }
        $this->data = $datalist;

        return $this->responseJson();
    }

    public function showdetail($id, $id_detail)
    {
        $result     = $this->topic_service->DetailTopic($id, $id_detail);
        $json_a     = json_decode($result, true);
        $datadetail = [
            [
                'title'     => $json_a['data']['title'],
                'gambar'    => $json_a['data']['link'],
                'deskripsi' => $json_a['data']['description'],
            ],
        ];
        $this->data = $datadetail;

        return $this->responseJson();
    }

}

/*
$headers = apache_request_headers();
echo apache_request_headers('Content-Type', $value);
if ($headers = 'sayang') {
echo $headers;
}
foreach ($headers as $header => $value) {
echo "$header: $value <br />\n";
if ($header = 'Authorization') {
echo $header . " : " . $value;
}
}
/*
echo "<br/><br/>";
$headers = array();
foreach ($_SERVER as $key => $value) {
if (substr($key, 0, 5) != 'HTTP_') {
continue;
}
$header           = str_replace(' ', '-', ucwords(str_replace('_', ' ', strtolower(substr($key, 5)))));
$headers[$header] = $value;
}
return $headers;
 */
