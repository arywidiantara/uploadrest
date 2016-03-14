<?php namespace App\Http\Controllers;

use App\Belajar\Curl;
use App\Belajar\TopicService;

class ImgurController extends Controller
{
    public function __construct(TopicService $topic_service)
    {
        $this->topic_service = $topic_service;
    }

    public function curl()
    {
        $result = $this->topic_service->getListTopic();
        $json_a = json_decode($result, true);
        return view('showall', compact('json_a'));
    }

    public function show($id)
    {
        $result = $this->topic_service->ListTopic($id);
        $json_a = json_decode($result, true);
        return view('list', compact('json_a'))->with('id', $id);
    }

    public function detail($id, $id_detail)
    {
        $result = $this->topic_service->DetailTopic($id, $id_detail);
        $json_a = json_decode($result, true);
        return view('detail', compact('json_a'));
    }

}
