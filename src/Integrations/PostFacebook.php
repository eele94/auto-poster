<?php

namespace Eele94\AutoPoster\Integrations;

use FacebookAds\Api;
use FacebookAds\Logger\CurlLogger;
use FacebookAds\Object\Page;
use FacebookAds\Object\PagePost;

class PostFacebook
{
    protected $api;

    public function __construct()
    {
        $this->api = $this->initApi();
        $this->api->setLogger(new CurlLogger());
    }

    public function initApi()
    {
        Api::init(config('auto-poster.facebook.app_id'), config('auto-poster.facebook.app_secret'), config('auto-poster.facebook.access_token'));

        return Api::instance();
    }

    public function getApi()
    {
        return $this->api;
    }

    public function post(string $message, $options = []): void
    {
        $fields = [
            PagePost::FIELD_ID,
        ];
        $params = [
            'message' => $message,
        ];

        $id = 225803273940274;
        $page = new Page($id);
        $post = $page->createFeed(
            $fields,
            $params
        );

        if ($options['comment'] ?? false) {
            $pagePost = new PagePost($post->id);
            $pagePost->createComment(
                [],
                [
                    'message' => $options['comment'],
                ]
            );
        }
    }
}
