<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\BlogsItems;

class LogController extends Controller
{
    public function show(): object
    {
        $loglist = Blogs::leftJoin('blogs_items', 'blogs.id', '=', 'blogs_items.blogs_id')
            ->groupBy('blogs.id')
            ->select('blogs.*', 'blogs_items.*')
            ->get();

        return view('frontend.log', [
            'loglist' => $loglist,
            'phone' => $this->getPhone()
        ]);
    }

    public function showItem(int $id): object
    {
        $logitem = Blogs::find($id);

        $logitemlist = BlogsItems::where('blogs_id','=', $id)->get();

        return view('frontend.logitem', [
            'logitem' => $logitem,
            'logitemlist' => $logitemlist,
            'phone' => $this->getPhone()
        ]);
    }    
}

