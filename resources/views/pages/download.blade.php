@extends('layouts.app')

@section('content')


<div class="flex flex-col items-center w-full  h-full ">

    <h2 class="text-3xl font-bold dark:text-white py-16 ">Download Dezamarket</h2>



    <div class="flex flex-col w-full   max-w-xs   gap-y-5">
        <a href="https://play.google.com/store/apps/details?id=com.dezamarket.app" class="w-full">
        <button class="bg-white w-full flex items-center text-gray-700 dark:text-gray-300 justify-center gap-x-3    dark:bg-gray-900 dark:border-gray-700 dark:hover:bg-gray-800 rounded-lg hover:bg-gray-100 duration-300 transition-colors border px-8 py-2.5">
     
            <svg  class="w-5 h-5 sm:h-6 sm:w-6"  xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 48 48">
                <linearGradient id="AraffhWwwEqZfgFEBZFoqa_L1ws9zn2uD01_gr1" x1="18.102" x2="25.297" y1="3.244" y2="34.74" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#35ab4a"></stop><stop offset=".297" stop-color="#31a145"></stop><stop offset=".798" stop-color="#288739"></stop><stop offset="1" stop-color="#237a33"></stop></linearGradient><path fill="url(#AraffhWwwEqZfgFEBZFoqa_L1ws9zn2uD01_gr1)" d="M13.488,4.012C10.794,2.508,7.605,3.778,6.45,6.323L24.126,24l9.014-9.014L13.488,4.012z"></path><linearGradient id="AraffhWwwEqZfgFEBZFoqb_L1ws9zn2uD01_gr2" x1="19.158" x2="21.194" y1="23.862" y2="66.931" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#f14e5d"></stop><stop offset=".499" stop-color="#ea3d4f"></stop><stop offset="1" stop-color="#e12138"></stop></linearGradient><path fill="url(#AraffhWwwEqZfgFEBZFoqb_L1ws9zn2uD01_gr2)" d="M33.14,33.014L24.126,24L6.45,41.677 c1.156,2.546,4.345,3.815,7.038,2.312L33.14,33.014z"></path><linearGradient id="AraffhWwwEqZfgFEBZFoqc_L1ws9zn2uD01_gr3" x1="32.943" x2="36.541" y1="14.899" y2="43.612" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#ffd844"></stop><stop offset=".519" stop-color="#ffc63f"></stop><stop offset="1" stop-color="#ffb03a"></stop></linearGradient><path fill="url(#AraffhWwwEqZfgFEBZFoqc_L1ws9zn2uD01_gr3)" d="M41.419,28.393 c1.72-0.96,2.58-2.676,2.581-4.393c-0.001-1.717-0.861-3.434-2.581-4.393l-8.279-4.621L24.126,24l9.014,9.014L41.419,28.393z"></path><linearGradient id="AraffhWwwEqZfgFEBZFoqd_L1ws9zn2uD01_gr4" x1="13.853" x2="15.572" y1="5.901" y2="42.811" gradientUnits="userSpaceOnUse"><stop offset=".003" stop-color="#0090e6"></stop><stop offset="1" stop-color="#0065a0"></stop></linearGradient><path fill="url(#AraffhWwwEqZfgFEBZFoqd_L1ws9zn2uD01_gr4)" d="M6.45,6.323C6.168,6.948,6,7.652,6,8.408 v31.179c0,0.761,0.164,1.463,0.45,2.09l17.674-17.68L6.45,6.323z"></path>
                </svg>
    
            <span>Download For Android</span>
        </button>
        </a>

    
      
    
        <button class="bg-black rounded-lg  flex items-center gap-x-3 justify-center text-white hover:bg-black/80 duration-300 transition-colors border border-transparent px-8 py-2.5">
            <svg class="w-5 h-5 sm:h-6 sm:w-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20.8426 17.1449C20.5099 17.9135 20.1161 18.6211 19.6598 19.2715C19.0378 20.1583 18.5286 20.7721 18.1361 21.113C17.5277 21.6724 16.8759 21.959 16.1779 21.9753C15.6768 21.9753 15.0725 21.8327 14.3691 21.5434C13.6633 21.2555 13.0148 21.113 12.4217 21.113C11.7998 21.113 11.1327 21.2555 10.4193 21.5434C9.70469 21.8327 9.12904 21.9834 8.68892 21.9984C8.01957 22.0269 7.35239 21.7322 6.68644 21.113C6.26139 20.7422 5.72974 20.1067 5.09285 19.2063C4.40951 18.2449 3.84772 17.13 3.4076 15.8589C2.93624 14.486 2.69995 13.1565 2.69995 11.8694C2.69995 10.3951 3.01853 9.12345 3.65665 8.05784C4.15815 7.20191 4.82533 6.52672 5.66035 6.03105C6.49537 5.53539 7.39761 5.2828 8.36925 5.26664C8.9009 5.26664 9.59809 5.43109 10.4645 5.75429C11.3284 6.07858 11.8832 6.24303 12.1264 6.24303C12.3082 6.24303 12.9245 6.05074 13.9692 5.66738C14.9571 5.31186 15.7909 5.16466 16.474 5.22264C18.3249 5.37202 19.7155 6.10167 20.6402 7.41619C18.9849 8.4192 18.166 9.82403 18.1823 11.6262C18.1972 13.03 18.7065 14.1981 19.7073 15.1256C20.1609 15.5561 20.6674 15.8888 21.231 16.1251C21.1087 16.4795 20.9797 16.819 20.8426 17.1449ZM16.5975 0.440369C16.5975 1.54062 16.1956 2.56792 15.3944 3.51878C14.4275 4.64917 13.258 5.30236 11.9898 5.19929C11.9736 5.06729 11.9642 4.92837 11.9642 4.78239C11.9642 3.72615 12.424 2.59576 13.2406 1.67152C13.6483 1.20356 14.1667 0.814453 14.7955 0.504058C15.4229 0.198295 16.0163 0.0292007 16.5744 0.000244141C16.5907 0.147331 16.5975 0.294426 16.5975 0.440355V0.440369Z" fill="white"/>
            </svg>
    
            <span>Coming soon for iOS</span>
        </button>

         <span class="mx-auto dark:text-white">Or</span>

         <a href="https://dezamarket.com" class="w-full">
         <button class="bg-[#1877F2] flex gap-x-3 w-full items-center justify-center text-white rounded-lg hover:bg-[#1877F2]/80 duration-300 transition-colors  border-transparent px-8 py-2.5">
          
    
            <span>Web version for desktop</span>
        </button>
         </a>
    </div>

</div>






@endsection