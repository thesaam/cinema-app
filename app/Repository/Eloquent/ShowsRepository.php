<?php

namespace App\Repository\Eloquent;

use App\Repository\Eloquent\ShowsRepository;
use App\Models\Show;

class ShowsRepository 
{

  public function all() 
  {
    
    $shows = Show::all();
 
    return view('shows.index', [
        'shows' => $shows
    ]);
  }
  
}