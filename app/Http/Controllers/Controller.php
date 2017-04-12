<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Jenssegers\Agent\Agent;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //check if device is desktop, mobile or tablet
    public function checkAgent()
    {
      $agent = new Agent();

      $typeDevice = "desktop";

      if($agent->isMobile()){
        $typeDevice = "mobile";
      }
      if($agent->isTablet()){
        $typeDevice = "tablet";
      }
      return $typeDevice;
    }
}
