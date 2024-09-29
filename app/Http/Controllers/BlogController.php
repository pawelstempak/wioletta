<?php

namespace App\Http\Controllers;

use App\Models\Blogs;
use App\Models\BlogsItems;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\StoreBlogRequest;
use App\Models\ImagePreprocessingModel;

class BlogController extends Controller
{
    public function show(): object
    {
        return view('blog', [
            'bloglist' => Blogs::all()
        ]);
    }

    public function store(Request $request, StoreBlogRequest $blog_request): RedirectResponse
    {
        $validated = $blog_request->validated();

        $blog = new Blogs();
        $blog->name = $validated['name'];
        $blog->description = $request['description'];
        $blog->save();

        return redirect('blog/edit/'.$blog->id);
    }

    public function delete(int $id): RedirectResponse
    {
        $blog = Blogs::find($id);
        $blog->delete();

        return redirect('blog');
    }

    public function deleteImage(int $id, int $imageid): RedirectResponse
    {
        $item = BlogsItems::find($imageid);
        
        $image = new ImagePreprocessingModel();
        $image->deleteImageFile('blog',$item['filename']);
        $item->delete();

        return redirect('/blog/edit/'.$id);
    }    

    public function edit(int $id): object
    {
        $blog = Blogs::find($id);
        $images = Blogs::find($id)->blogitems;

        return view('editblog', [
            'blog' => $blog,
            'blogitems' => $images
        ]);        
    }    

    public function update(int $id, Request $request, StoreBlogRequest $blog_request): RedirectResponse
    {
        $validated = $blog_request->validated();

        $blog = Blogs::find($id);
        $blog->name = $validated['name'];
        $blog->description = $request['description'];
        $blog->save();

        if($request->image)
        {
            $image = new ImagePreprocessingModel();
            $filename = $image->storeImage($request, 'image' , 'blog', 'public');

            $img = new BlogsItems();
            $img->filename = $filename;
            $img->blogs_id = $id;
            $img->save();
        }        

        return redirect('blog/edit/'.$id);
    }    
}
