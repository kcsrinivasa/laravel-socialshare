![Laravel](https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg)


# Laravel Social Media Share Buttons

Hi All!

Here is the example focused on share page on social media using `jorenvanhocht/laravel-share` package, and also focused on laravel generate slug for blog.

And here we will learn how to create unique slug or seo friendly slug URL before save to database in laravel app using `cviebrock/eloquent-sluggable` package.

Social share buttons give customers the ability to display their ecommerce purchases on Facebook, Twitter, WhatsApp, LiknedIn,Telegram or other platforms. The majority of online shoppers also use at least one form of social media, so these buttons create free promotion for an online store.


### Preview
Browser screen
![browser_share](https://github.com/kcsrinivasa/laravel-socialshare/blob/main/output/browser_share.jpg?raw=true)
Twitter share screen
![twitter_share](https://github.com/kcsrinivasa/laravel-socialshare/blob/main/output/twitter_share.jpg?raw=true)
WhatsApp share screen 
![whatsapp_share](https://github.com/kcsrinivasa/laravel-socialshare/blob/main/output/whatsapp_share.jpg?raw=true)
Telegram share screen
![telegram_share](https://github.com/kcsrinivasa/laravel-socialshare/blob/main/output/telegram_share.jpg?raw=true)
Facebook share screen
![facebook_share](https://github.com/kcsrinivasa/laravel-socialshare/blob/main/output/facebook_share.jpg?raw=true)
LiknedIn share screen
![linkedin_share](https://github.com/kcsrinivasa/laravel-socialshare/blob/main/output/linkedin_share.jpg?raw=true)



### Step 1: Install Laravel
```bash
composer create-project --prefer-dist laravel/laravel socialshare
```

### Step 2: Install jorenvanhocht/laravel-share and publish configuration
```bash
composer require jorenvanhocht/laravel-share

php artisan vendor:publish --provider="Jorenvh\Share\Providers\ShareServiceProvider"
```

### Step 3: Install cviebrock/eloquent-sluggable and publish configuration
```bash
composer require cviebrock/eloquent-sluggable

php artisan vendor:publish --provider="Cviebrock\EloquentSluggable\ServiceProvider"
```

### Step 4: Create blog model and migration
```bash
php artisan make:model Blog -m
```

### Step 5: Create seeder
```bash
php artisan make:seeder BlogTableSeeder
```

### Step 6: Create controller
```bash
php artisan make:controller SocialShareController -r
```

### Step 7: Update database credentials in .env file

```javascript
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database
DB_USERNAME=username
DB_PASSWORD=password
```

### Step 8: Add routes
```bash
Route::get('/social-share', 'App\Http\Controllers\SocialShareController@index')->name('socialShare.index');
Route::get('blog/{blog}','App\Http\Controllers\SocialShareController@blog' )->name('socialShare.blog');
```
### Step 9: Add functions in controller
Add below functions in app/Http/Controllers/SocialShareController.php
```bash
use App\Models\Blog;
/**
    * Display a listing of the blogs .
    *
    * @return \Illuminate\Http\Response
    */
public function index()
{
    $shareButtons = \Share::page(
        route('socialShare.index'),
        'Blog page - Your share text comes here',
    )
    ->facebook()
    ->twitter()
    ->linkedin()
    ->telegram()
    ->whatsapp()        
    ->reddit();

    $blogs = Blog::where('active',1)->get();

    return view('socialshare.index')->withBlogs($blogs)->withShareButtons($shareButtons);
}

/**
    * Display the specified resource of blog.
    *
    * @param  \App\Models\Blog  $blog
    * @return \Illuminate\Http\Response
    */
public function blog($slug)
{

    $shareButtons = \Share::page(
        route('socialShare.index'),
        'Blog page - Your share text comes here',
    )
    ->facebook()
    ->twitter()
    ->linkedin()
    ->telegram()
    ->whatsapp()        
    ->reddit();

    $blog = Blog::where('slug',$slug)->get()->first();
    return view('socialshare.blog')->withBlog($blog)->withShareButtons($shareButtons);
}
```

### Step 10: Insert dummy default blogs and use slug service to create slug
Add below code in database/seeders/BlogTableSeeder.php
```bash
use App\Models\Blog;
use Cviebrock\EloquentSluggable\Services\SlugService;
/**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create blog
         $title = 'Small Kids Wear / Dress / SoftCloth';
        $blog1 = Blog::create([
            'title' => $title ,
            'slug' => SlugService::createSlug(Blog::class, 'slug', $title),
            'description' => '<p>Small kids wear, <ul> <li>When you have a baby girl, you realize that there is something far more precious than the most precious jewels.</li></ul>',
            'metaKeyword' => 'kids',
            'metaDescription' => 'Small Kids Wear',
            'image' => 'uploads/test/blog/blog_1.jpg',
            'user_name' => 'Arya Bhata',
        ]);
}
```
### Step 11:Add Eloquent Sluggable package

The gist of using `cviebrock/eloquent-sluggable` package is making our Eloquent models “sluggable” through the Sluggable trait provided by the package, which defines an abstract sluggable() method us use to configure our model-specific configuration.

For example, if we wanted to use the `title` field on a model with the `slug` column:

Add below code in app/Models/Blog.php
```bash
use Cviebrock\EloquentSluggable\Sluggable;

class Blog extends Model
{
    use HasFactory,Sluggable;
    protected $fillable=['slug','title','description','metaKeyword','metaDescription','image','user_name','active',];

    public function sluggable()
    {
        return [ 'slug' => [ 'source' => 'title' ] ];
    }
}
```

### Step 12: Create blade file

Goto "resources\views\socialshare\index.blade.php" to grab the listing blogs code

Goto "resources\views\socialshare\blog.blade.php" to grab the showing blog details and displaying socialshare icons
```bash
{!! Share::page(route('socialShare.blog',$blog->slug),$blog->title)->facebook()->twitter()->whatsapp()->linkedin()->telegram() !!}
```

### Step 13: Final run and check in browser
```bash
mv server.php index.php
cp public/.htaccess .
php artisan migrate --seed
```
open in browser 

Note: Social media share can't get results in localhost, need to be hosted. But share icons will display everywhere.
```bash
http://localhost/laravel/socialshare
```