<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;

use Cviebrock\EloquentSluggable\Services\SlugService;

class BlogTableSeeder extends Seeder
{
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
            'description' => '<p>Small kids wear, Babies are adorable in a way that is often hard to describe. You often struggle to string the right words together to define the immense cuteness of a baby and the joys of parenting. It is in moments like these that quotes come to our rescue, as a crutch to express our innate feelings. In this article, MomJunction presents to you 91 baby quotes to articulate your affection towards your adorable bundle of joy.</p> <ul> <li>&ldquo;Though she is little, she is fierce&rdquo;.</li> <li>&ldquo;Girl: a giggle wrapped in sunshine and glitter&rdquo;.</li> <li>&ldquo;A baby girl arrives, and just like that, everything changes. The world gets bigger, hearts grow fuller and life means more because she&rsquo;s in it&rdquo;.</li> <li>&ldquo;A baby girl: one of the most beautiful miracles in life, one of the greatest joys we can ever know, and one of the reasons why where is a little extra sunshine, laughter, and happiness in your world today&rdquo;.</li> <li>&ldquo;A baby daughter is always a Daddy&rsquo;s girl and Mommy&rsquo;s world&rdquo;!</li> <li>&ldquo;When you have a baby girl, you realize that there is something far more precious than the most precious jewels.&rdquo;</li> </ul>',
            'metaKeyword' => 'kids',
            'metaDescription' => 'Small Kids Wear',
            'image' => 'uploads/test/blog/blog_1.jpg',
            'user_name' => 'Mounesh',
        ]);


        // create blog
         $title = 'Can we use powder for small kids ? or not';
         $blog2 = Blog::create([
            'title' => $title ,
            'slug' => SlugService::createSlug(Blog::class, 'slug', $title),
            'description' => '<p>Small kids powder, Babies are adorable in a way that is often hard to describe. You often struggle to string the right words together to define the immense cuteness of a baby and the joys of parenting. It is in moments like these that quotes come to our rescue, as a crutch to express our innate feelings. In this article, MomJunction presents to you 91 baby quotes to articulate your affection towards your adorable bundle of joy.</p> <ul> <li>&ldquo;Though she is little, she is fierce&rdquo;.</li> <li>&ldquo;Girl: a giggle wrapped in sunshine and glitter&rdquo;.</li> <li>&ldquo;A baby girl arrives, and just like that, everything changes. The world gets bigger, hearts grow fuller and life means more because she&rsquo;s in it&rdquo;.</li> <li>&ldquo;A baby girl: one of the most beautiful miracles in life, one of the greatest joys we can ever know, and one of the reasons why where is a little extra sunshine, laughter, and happiness in your world today&rdquo;.</li> <li>&ldquo;A baby daughter is always a Daddy&rsquo;s girl and Mommy&rsquo;s world&rdquo;!</li> <li>&ldquo;When you have a baby girl, you realize that there is something far more precious than the most precious jewels.&rdquo;</li> </ul>',
            'metaKeyword' => 'kids',
            'metaDescription' => 'Small Kids Powder',
            'image' => 'uploads/test/blog/blog_2.jpg',
            'user_name' => 'Ramesh',
        ]);


        // create blog

         $title = 'A new baby marks the beginnings of all things';
         $blog3 = Blog::create([
            'title' => $title ,
            'slug' => SlugService::createSlug(Blog::class, 'slug', $title),
            'description' => '<p>Babies are adorable in a way that is often hard to describe. You often struggle to string the right words together to define the immense cuteness of a baby and the joys of parenting. It is in moments like these that quotes come to our rescue, as a crutch to express our innate feelings. In this article, MomJunction presents to you 91 baby quotes to articulate your affection towards your adorable bundle of joy.</p> <ul> <li>&ldquo;Though she is little, she is fierce&rdquo;.</li> <li>&ldquo;Girl: a giggle wrapped in sunshine and glitter&rdquo;.</li> <li>&ldquo;A baby girl arrives, and just like that, everything changes. The world gets bigger, hearts grow fuller and life means more because she&rsquo;s in it&rdquo;.</li> <li>&ldquo;A baby girl: one of the most beautiful miracles in life, one of the greatest joys we can ever know, and one of the reasons why where is a little extra sunshine, laughter, and happiness in your world today&rdquo;.</li> <li>&ldquo;A baby daughter is always a Daddy&rsquo;s girl and Mommy&rsquo;s world&rdquo;!</li> <li>&ldquo;When you have a baby girl, you realize that there is something far more precious than the most precious jewels.&rdquo;</li> </ul>',
            'metaKeyword' => 'kids',
            'metaDescription' => 'Small Kids Little',
            'image' => 'uploads/test/blog/blog_3.jpg',
            'user_name' => 'Mohan',
        ]);


        // create blog

         $title = 'A new baby marks the beginnings of all things';
         $blog4 = Blog::create([
            'title' => $title ,
            'slug' => SlugService::createSlug(Blog::class, 'slug', $title),
            'description' => '<p>A baby boy is truth with dirt on its face, Beauty with a cut on its finger, Wisdom with bubble gum in its hair, and the hope of the future with a frog in its pocket.</p> <p>&nbsp;</p> <ul> <li>&ldquo;Though she is little, she is fierce&rdquo;.</li> <li>&ldquo;Girl: a giggle wrapped in sunshine and glitter&rdquo;.</li> <li>&ldquo;A baby girl arrives, and just like that, everything changes. The world gets bigger, hearts grow fuller and life means more because she&rsquo;s in it&rdquo;.</li> <li>&ldquo;A baby girl: one of the most beautiful miracles in life, one of the greatest joys we can ever know, and one of the reasons why where is a little extra sunshine, laughter, and happiness in your world today&rdquo;.</li> <li>&ldquo;A baby daughter is always a Daddy&rsquo;s girl and Mommy&rsquo;s world&rdquo;!</li> <li>&ldquo;When you have a baby girl, you realize that there is something far more precious than the most precious jewels.&rdquo;</li> </ul>',
            'metaKeyword' => 'kids',
            'metaDescription' => 'Small Kids Powder',
            'image' => 'uploads/test/blog/blog_4.jpg',
            'user_name' => 'Ravi',
        ]);
    }
}
