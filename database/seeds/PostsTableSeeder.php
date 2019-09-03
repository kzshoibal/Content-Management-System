<?php

use App\Post;

use App\Category;

use App\Tag;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
            'name' => 'News'
        ]);
        $category2 = Category::create([
            'name' => 'Updates'
        ]);
        $category3 = Category::create([
            'name' => 'Design'
        ]);
        $category4 = Category::create([
            'name' => 'Marketing'
        ]);
        $category5 = Category::create([
            'name' => 'Product'
        ]);
        $category6 = Category::create([
            'name' => 'Offers'
        ]);
        $category7 = Category::create([
            'name' => 'Partnership'
        ]);
        $category8 = Category::create([
            'name' => 'Hiring'
        ]);

        $author1 = App\User::create([
            'name' => 'John Doe',
            'email' => 'john.doe@gmail.com',
            'password' => Hash::make('password')
        ]);

        $author2 = App\User::create([
            'name' => 'Harris Sand',
            'email' => 'harrySs@gmail.com',
            'password' => Hash::make('password')
        ]);

        $post1 = Post::create([
            'title' => 'We relocated our office to a new designed garage',
            'description' => 'Aliquam ultricies sapien diam, at elementum est aliquam at. Donec eu maximus mauris. Aenean eget enim eros. Pellentesque risus tortor, commodo ut urna ut, posuere posuere nisi. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a dictum felis.',
            'content' => 'Nullam tempus, odio vel rhoncus dapibus, dolor lorem convallis mauris, laoreet elementum ex urna eu est. Quisque quis ligula nec mauris blandit porta eu eget purus. Sed eget felis id justo commodo fringilla vitae sed ligula. Fusce quis tempor turpis, tempor sollicitudin lacus. Praesent lacinia condimentum tristique. Aenean iaculis magna quis tempor gravida. Vestibulum dignissim nunc vitae pulvinar convallis. Vivamus ac porta lectus.',
            'category_id' => $category1->id,
            'image' => 'posts/1.jpg'  ,
            'user_id' => $author1->id     
        ]);

        $post2 = $author2->posts()->create([
            'title' => 'Top 5 brilliant content marketing strategies',
            'description' => 'Donec tincidunt, neque vitae finibus tristique, mi ex pulvinar est, fringilla pellentesque dui ante et augue. Interdum et malesuada fames ac ante ipsum primis in faucibus.',
            'content' => 'Nunc quis suscipit neque, et ultrices eros. Suspendisse in risus vitae tortor rutrum porta. Aenean vitae libero magna. Morbi ultricies lectus ac hendrerit porttitor. Quisque vulputate purus quis condimentum vestibulum. Suspendisse volutpat libero ut felis placerat, nec pharetra sem sagittis. Nam ac neque ut ipsum interdum vestibulum.',
            'category_id' => $category4->id,
            'image' => 'posts/2.jpg'         
        ]);

        $post3 = $author1->posts()->create([
            'title' => 'Best practices for minimalist design with example',
            'description' => 'Vivamus porta risus erat, sed imperdiet erat rutrum et. Duis in condimentum eros. Duis et mauris vitae nunc scelerisque dapibus. Proin cursus consequat eros quis pulvinar.',
            'content' => 'Sed a justo congue, interdum lectus varius, scelerisque risus. Ut sit amet leo lobortis, tincidunt urna sodales, semper metus. Nam augue ligula, vestibulum sit amet lorem vitae, cursus dignissim lorem. Donec vel quam consectetur, cursus turpis eget, consequat arcu. Donec imperdiet dapibus tellus, ac dignissim quam efficitur condimentum. Morbi eget auctor arcu. Vivamus rhoncus lectus eget erat sollicitudin molestie. Nam ultrices sem in mi consectetur ultricies. Pellentesque posuere metus tincidunt, viverra ipsum vitae, dapibus lacus.',
            'category_id' => $category3->id,
            'image' => 'posts/3.jpg'         
        ]);
        
        $post4 = $author2->posts()->create([
            'title' => 'Congratulate and thank to Maryam for joining our team',
            'description' => 'Nam nulla nulla, lacinia pretium dictum a, feugiat in justo. Proin et purus vitae nisl pretium mollis. Duis nec ex nec justo rhoncus volutpat nec vitae enim.',
            'content' => 'Nam ut dui rutrum, porttitor ex eu, tempus nibh. Nulla quis velit lorem. Integer mi mauris, vestibulum imperdiet feugiat ac, eleifend ac tortor. Praesent nec dapibus nulla. Quisque auctor tellus nec libero eleifend, at semper felis bibendum. Nunc iaculis nisi et eleifend dignissim. Sed id risus rhoncus, aliquet ligula eget, eleifend tortor. Nunc convallis neque et convallis rutrum. Duis ac eros massa. Mauris est mauris, fringilla id eros nec, pellentesque varius lectus. Morbi eget porta tellus, eu egestas lectus. ',
            'category_id' => $category8->id,
            'image' => 'posts/4.jpg'         
        ]);

        $tag1 = Tag::create([
            'name' => 'Job'
        ]);
        $tag2 = Tag::create([
            'name' => 'Customers'
        ]);
        $tag3 = Tag::create([
            'name' => 'Record'
        ]);
        $tag4 = Tag::create([
            'name' => 'Progress'
        ]);
        $tag5 = Tag::create([
            'name' => 'Freebie'
        ]);
        $tag6 = Tag::create([
            'name' => 'Offer'
        ]);
        $tag7 = Tag::create([
            'name' => 'Screenshot'
        ]);
        $tag8 = Tag::create([
            'name' => 'Milestone'
        ]);
        $tag9 = Tag::create([
            'name' => 'Version'
        ]);
        $tag10 = Tag::create([
            'name' => 'Design'
        ]);

        $post1->tags()->attach([$tag4->id, $tag8->id]);
        $post2->tags()->attach([$tag1->id, $tag5->id, $tag10->id]);
        $post3->tags()->attach([$tag10->id, $tag7->id]);
        $post4->tags()->attach([$tag1->id, $tag5->id]);
    }
} 