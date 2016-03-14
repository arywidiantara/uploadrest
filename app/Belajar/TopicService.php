<?php namespace App\Belajar;

use App\Belajar\Curl;

class TopicService
{
    public function __construct(Curl $curl)
    {
        $this->curl = $curl;
    }

    public function getListTopic()
    {
        $url    = 'https://api.imgur.com/3/topics/defaults';
        $result = $this->curl->__send($url);

        return $result;
    }

    public function ListTopic($id)
    {
        $url    = "https://api.imgur.com/3/topics/" . $id;
        $result = $this->curl->__send($url);

        return $result;
    }

    public function DetailTopic($id, $id_detail)
    {
        $url    = "https://api.imgur.com/3/topics/" . $id . "/" . $id_detail;
        $result = $this->curl->__send($url);

        return $result;
    }
}
