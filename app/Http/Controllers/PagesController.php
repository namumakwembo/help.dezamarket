<?php

namespace App\Http\Controllers;

use App\Helpers\Helper;
use Illuminate\Http\Request;

class PagesController extends Controller
{

      public function privacy()
    {
        Helper::seo('Privacy Policy', 'Read our Privacy Policy to understand how we handle your data and information. Stay informed about any policy updates.');
        return view('pages.privacy');
    }

     public function terms()
    {
        Helper::seo('Terms and Conditions', 'Review our Terms and Conditions to learn about the rules and guidelines governing your use of Dezamarket. Be aware of any policy changes.');
        return view('pages.terms');
    }

    public function about()
    {
        Helper::seo('About Dezamarket', 'Learn about Dezamarket, the online marketplace platform designed to connect buyers and sellers in Zambia. Discover our mission and vision.');
        return view('pages.about');
    }



    public function download(Request $request)
    {
        Helper::seo('Download', 'Download Dezamarket on your mobile device, tablet, or desktop and start buying and selling quickly. Reach a huge customer base in Zambia. Free to use!');
       
        $userAgent = $request->header('User-Agent');
        $isAndroid = stripos($userAgent, 'android') !== false;
        $isMobile = stripos($userAgent, 'mobile') !== false;

        if ($isAndroid && $isMobile) {
            // redirect to playstore
            $playStoreUrl = 'https://play.google.com/store/apps/details?id=com.dezamarket.app';
            return redirect()->away($playStoreUrl);
        }

        return view('pages.download');
    }
    
    

}
