<?php

namespace App\Helpers;

use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Carbon\Carbon;

class Helper
{

    public   static   function seo(
        $title,
        $description = 'Online forex trading signals provider',
        $imageUrl = null,
        $created_at = null
      ) {



        $imageUrl = $imageUrl != null ?  $imageUrl : url('assets/logo.png');
        $keywords = explode(' ', $title);
        $created_at = $created_at != null ? $created_at : Carbon::now();

        SEOMeta::setTitle($title);
        SEOMeta::setDescription($description);
        SEOMeta::addMeta('article:published_time', $created_at, 'property');
        // SEOMeta::addMeta('article:publisher', 'https://twitter.com/thee_king_yodah');
        SEOMeta::addMeta('article:section', 'article', 'property');

        TwitterCard::setTitle($title);
        TwitterCard::setDescription($description);
        TwitterCard::setSite(url()->current());
        TwitterCard::setImage($imageUrl) ?? asset('icons/logo.png');



        OpenGraph::setDescription($description);
        OpenGraph::setTitle($title);
        OpenGraph::setUrl(url()->current());
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addProperty('locale', 'en_US');
        OpenGraph::addProperty('locale:alternate', ['en-us']);


        OpenGraph::addImage($imageUrl);
        OpenGraph::addImage(['url' => $imageUrl ?? asset('icons/logo.png'), 'size' => 200]);
        OpenGraph::addImage($imageUrl, ['height' => 200, 'width' => 200]);

        JsonLd::setTitle($title);
        JsonLd::setDescription($description);
        JsonLd::setType('Article');
        JsonLd::addImage($imageUrl ?? asset('icons/logo.png'));
        SEOMeta::setCanonical(url()->current());
    }


}

