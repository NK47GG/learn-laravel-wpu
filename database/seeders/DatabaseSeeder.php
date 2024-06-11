<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);



        // User::create([
        //     'name' => 'Stefanus Loveniko',
        //     'email' => 'lovenikoputra@gmail.com',
        //     'password' => bcrypt('Gebiiku Sayank'),
        // ]);
        // User::create([
        //     'name' => 'Gabriella Jovanka',
        //     'email' => 'gabriellajovanka@gmail.com',
        //     'password' => bcrypt('Gebi cute bet dah'),
        // ]);

        // Dibawah ini membuat user dengan factory (yang sudah disetting Indonesia di app.php config)
        User::factory(5)->create();
        Post::factory(20)->create();

        // Di bawah ini membuat user secara manual
        Category::create([
            "name" => "Programming",
            "slug" => "programming",
        ]);

        Category::create([
            "name" => "Personal",
            "slug" => "personal",
        ]);

        Category::create([
            "name" => "Web Programming",
            "slug" => "web-programming",
        ]);

        // Dibawah tidak terpakai sementara, karena akan membuat data dengan factory dan faker
        // Post::create([
        //     "title" => "Database with Seeder Chapter 1",
        //     "slug" => "database-with-seeder-chapter-1",
        //     "excerpt" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quod illum nam, soluta consequuntur architecto obcaecati exercitationem.",
        //     "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quod illum nam, soluta consequuntur architecto obcaecati exercitationem. Earum nihil dicta, tempore, ullam blanditiis aut recusandae enim expedita eius dolor tempora explicabo esse omnis dolores voluptates dolorem cum quis dolorum at qui in? Similique officia voluptate, voluptatibus praesentium perferendis autem dolore unde repellat eligendi deserunt cum iusto dolorem facilis ea explicabo at ipsam. Aspernatur aut eius hic dolores voluptate. Sed consequatur molestiae at ut, laudantium amet expedita repellendus consequuntur. Porro libero rem corporis adipisci voluptas? Quo dicta aspernatur numquam odit officiis porro dolores voluptatum possimus iure quaerat, laudantium voluptate! Quasi, dolorem!",
        //     "category_id" => 1,
        //     "user_id" => 1,
        // ]);
        // Post::create([
        //     "title" => "Database with Seeder Chapter 2",
        //     "slug" => "database-with-seeder-chapter-2",
        //     "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam optio aliquid quam saepe illum dolor numquam voluptatum commodi repellat omnis, cum fugit ab iure at exercitationem corrupti deleniti aliquam beatae nostrum provident repudiandae cumque blanditiis aut!",
        //     "body" => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam optio aliquid quam saepe illum dolor numquam voluptatum commodi repellat omnis, cum fugit ab iure at exercitationem corrupti deleniti aliquam beatae nostrum provident repudiandae cumque blanditiis aut! Sit suscipit a amet perferendis quaerat quam quo quae, dolore repudiandae in nisi numquam voluptas laudantium, optio deleniti enim doloribus quis beatae animi, laboriosam repellendus distinctio delectus iusto. Minima nisi consequatur nemo sapiente dolorem magnam voluptatibus, ut vitae quod aspernatur labore, eaque sit quos placeat vero qui at maiores error ipsam.</p> 

        //     <p>Corrupti quasi quos aut aspernatur aperiam mollitia, cupiditate culpa nam, impedit maxime qui, minus at doloremque id! Cumque architecto repellendus sunt odit modi pariatur corporis, inventore numquam quisquam doloribus suscipit laborum accusamus libero quae nihil reprehenderit hic veniam iusto reiciendis sed, molestiae porro ipsum doloremque explicabo! Sunt neque aliquid reprehenderit quaerat ad provident laudantium non, porro doloribus dolorum a quasi officia accusamus laboriosam ullam dolores vitae atque, enim ab obcaecati quam alias consequuntur. Inventore minima voluptatem reprehenderit autem magnam, rem voluptatibus accusantium nemo ab consectetur. Dolores dicta minus, temporibus provident dolore totam nihil consequatur esse tempora quod inventore unde maxime exercitationem odit, soluta quaerat natus, pariatur ipsam animi! Fuga veniam perferendis nisi laudantium?</p>
        //     ",
        //     "category_id" => 1,
        //     "user_id" => 2,
        // ]);
        // Post::create([
        //     "title" => "Database with Seeder Chapter 3",
        //     "slug" => "database-with-seeder-chapter-3",
        //     "excerpt" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam optio aliquid quam saepe illum dolor numquam voluptatum commodi repellat omnis, cum fugit ab iure at exercitationem corrupti deleniti aliquam beatae nostrum provident repudiandae cumque blanditiis aut!",
        //     "body" => "<p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ipsam optio aliquid quam saepe illum dolor numquam voluptatum commodi repellat omnis, cum fugit ab iure at exercitationem corrupti deleniti aliquam beatae nostrum provident repudiandae cumque blanditiis aut! Sit suscipit a amet perferendis quaerat quam quo quae, dolore repudiandae in nisi numquam voluptas laudantium, optio deleniti enim doloribus quis beatae animi, laboriosam repellendus distinctio delectus iusto. Minima nisi consequatur nemo sapiente dolorem magnam voluptatibus, ut vitae quod aspernatur labore, eaque sit quos placeat vero qui at maiores error ipsam.</p> 

        //     <p>Corrupti quasi quos aut aspernatur aperiam mollitia, cupiditate culpa nam, impedit maxime qui, minus at doloremque id! Cumque architecto repellendus sunt odit modi pariatur corporis, inventore numquam quisquam doloribus suscipit laborum accusamus libero quae nihil reprehenderit hic veniam iusto reiciendis sed, molestiae porro ipsum doloremque explicabo! Sunt neque aliquid reprehenderit quaerat ad provident laudantium non, porro doloribus dolorum a quasi officia accusamus laboriosam ullam dolores vitae atque, enim ab obcaecati quam alias consequuntur. Inventore minima voluptatem reprehenderit autem magnam, rem voluptatibus accusantium nemo ab consectetur. Dolores dicta minus, temporibus provident dolore totam nihil consequatur esse tempora quod inventore unde maxime exercitationem odit, soluta quaerat natus, pariatur ipsam animi! Fuga veniam perferendis nisi laudantium?</p>
        //     ",
        //     "category_id" => 2,
        //     "user_id" => 1
        // ]);
    }
}
