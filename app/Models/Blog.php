<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    private static $blog, $image, $imageUrl, $directory, $imageName;

    public static function getImageUrl($request)
    {
        self::$image = $request->file('image');
        self::$imageName = self::$image->getClientOriginalName();
        self::$directory = 'blog-images/';
        self::$image->move(self::$directory, self::$imageName);
        self::$imageUrl = self::$directory.self::$imageName;
        return self::$imageUrl;
    }    

    public static function newBlog($request)
    {
        self::$blog = new Blog();
        self::$blog->title         = $request->title;
        self::$blog->author        = $request->author;
        self::$blog->description   = $request->description;
        self::$blog->image         =  self::getImageUrl($request);
        self::$blog->save();
    }

    public static function updateBlog($request, $id)
    {
        self::$blog = Blog::find($id);
        
        if ($request->file('image'))
        {
            if(file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }
            self::$imageUrl = self::getImageUrl($request);
        }
        else
        {
            self::$imageUrl = self::$blog->image;
        }

        self::$blog->title         = $request->title;
        self::$blog->author        = $request->author;
        self::$blog->description   = $request->description;
        self::$blog->image         =  self::$imageUrl;
        self::$blog->save();
    }

    public static function deleteBlog($id)
    {
        self::$blog = Blog::find($id);
        if(file_exists(self::$blog->image))
            {
                unlink(self::$blog->image);
            }
        self::$blog->delete();
    }

}
