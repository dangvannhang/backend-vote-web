<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class QuestionareSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('questionare')->insert([
            [
                'id_topic' => 1,
                'title' => 'Pizza',
                'description' => 'Pizza description',
                'image' => 'https://bakingmischief.com/wp-content/uploads/2017/10/naan-chicken-alfredo-pizza-image-square-200x200.jpg',
                'vote' => 0 
            ],
            [
                'id_topic' => 1,
                'title' => 'Pasta',
                'description' => 'Pasta description' ,
                'image' => 'https://feedmephoebe.com/wp-content/uploads/2017/10/Homemade-Gluten-Free-Pasta-Recipe-Tuscan-Pici-Spaghetti-Noodles-19-200x200.jpg',
                'vote' => 0
            ],
            [
                'id_topic' => 1,
                'title' => 'Hamburger',
                'description' => 'Hamburger description',
                'image' => 'https://static.onecms.io/wp-content/uploads/sites/12/2012/07/giant-bacon-hamburger-200x200.jpg',
                'vote' => 0
            ],
            [
                'id_topic' => 1 ,
                'title' => 'Soup',
                'description' => 'Soup description',
                'image' => 'https://www.seasonsandsuppers.ca/wp-content/uploads/2018/10/wicked-thai-soup-21-200x200.jpg',
                'vote' => 0
            ],
            [
                'id_topic' => 1,
                'title' => 'Salad',
                'description' => 'Salad description',
                'image' => 'https://www.gimmesomeoven.com/wp-content/uploads/2019/04/Everyday-Italian-Salad-Recipe-2-200x200.jpg',
                'vote' => 0
            ],
            [
                'id_topic' => 1,
                'title' => 'Bread',
                'description' => 'Bread description',
                'image' => 'https://www.jocooks.com/wp-content/uploads/2020/04/rye-bread-1-18-200x200.jpg',
                'vote' => 0
            ],


        
            [
                'id_topic' => 2,
                'title' => 'South Island, New Zealand',
                'description' => 'South Island, New Zealand description',
                'image' => 'https://tr-images.condecdn.net/image/9OoJRo3nJnN/crop/200/square/f/Thanda-island-tanzania-conde-nast-traveller-9nov16-pr.jpg',
                'vote' => 0
            ],
            [
                'id_topic' => 2,
                'title' => 'Paris',
                'description' => 'Paris description',
                'image' => 'https://cdnmedia.baotintuc.vn/2013/02/04/13/21/pariswoman2469661b.jpg',
                'vote' => 0
            ],
            [
                'id_topic' => 2,
                'title' => 'Bora Bora',
                'description' => 'Bora Bora description',
                'image' => 'https://lh3.googleusercontent.com/proxy/g6nQTRaJMNrFQ7b9oi0rrONQ7BFT-ks9E6DBQCA0uSF_TC0J84kISbKciR-h3F24owjSUwSFHz_jzcq981W3vuzr1dDyNS4saOnbROBQv9SeE6INF3_-vrKH6i4ubROssSjxuwAhPvWiww',
                'vote' => 0
            ],
            [
                'id_topic' => 2,
                'title' => 'Glacier National Park',
                'description' => 'Glacier National Park description',
                'image' => 'https://i.pinimg.com/originals/9e/a6/1e/9ea61e3b26601eb0c49e7f6f1fa581ba.jpg',
                'vote' => 0
            ],
            [
                'id_topic' => 2,
                'title' => 'London',
                'description' => 'London description',
                'image' => 'https://www.telegraph.co.uk/content/dam/Travel/2019/March/prevost-Panorama%203.jpg',
                'vote' => 0
            ],
            [
                'id_topic' => 2,
                'title' => 'Maui',
                'description' => 'Maui description',
                'image' => 'https://live.staticflickr.com/8508/8352834999_205f705206_b.jpg',
                'vote' => 0
            ],




            [
                'id_topic' => 3,
                'title' => 'Diablo',
                'description' => 'Diablo description',
                'image' => 'https://i.pinimg.com/originals/1c/af/ba/1cafbaaeba2c451a9254bd8288c11cfc.jpg',
                'vote' => 0
            ],
            [
                'id_topic' => 3,
                'title' => 'FIFA',
                'description' => 'FIFA description',
                'image' => 'https://upload.wikimedia.org/wikipedia/en/thumb/6/6b/FIFA2000BoxArtUK.jpg/200px-FIFA2000BoxArtUK.jpg',
                'vote' => 0
            ],
            [
                'id_topic' => 3,
                'title' => 'Starcraft 2',
                'description' => 'Starcraft 2 description',
                'image' => 'https://i.pinimg.com/originals/02/2a/6c/022a6c935e19a997c6947110a8bebadd.jpg',
                'vote' => 0
            ],
            [
                'id_topic' => 3,
                'title' => 'Heroes of the Storm',
                'description' => 'Heroes of the Storm description',
                'image' => 'https://wpq0221c4a-flywheel.netdna-ssl.com/wp-content/uploads/2020/10/heroes-of-the-storm__200x300.jpg',
                'vote' => 0
            ],
            [
                'id_topic' => 3,
                'title' => 'Gears of War',
                'description' => 'Gears of War description',
                'image' => 'https://images-na.ssl-images-amazon.com/images/I/613yPNZCFXL._SX373_BO1,204,203,200_.jpg',
                'vote' => 0
            ],
            [
                'id_topic' => 3,
                'title' => 'NBA 2K Series',
                'description' => 'NBA 2K Series description',
                'image' => 'https://pbs.twimg.com/media/EKT9JxuUUAMBqPv.jpg',
                'vote' => 0
            ],



            [
                'id_topic' => 4,
                'title' => 'Facebook',
                'description' => 'Facebook description',
                'image' => 'https://expandedramblings.com/wp-content/uploads/2014/05/Facebook-Statistics-and-Facts.png',
                'vote' => 0
            ],
            [
                'id_topic' => 4,
                'title' => 'YouTube',
                'description' => 'YouTube description',
                'image' => 'https://www.sportico.com/wp-content/uploads/2019/10/youtube200x200-2.png',
                'vote' => 0
            ],
            [
                'id_topic' => 4,
                'title' => 'WhatsApp',
                'description' => 'WhatsApp description',
                'image' => 'https://st.quantrimang.com/photos/image/2020/03/31/dinh-dang-van-ban-trong-cuoc-tro-chuyen-whatsapp-200.jpg',
                'vote' => 0
            ],
            [
                'id_topic' => 4,
                'title' => 'Messenger',
                'description' => 'Messenger description',
                'image' => 'https://cdn.tgdd.vn/2020/12/GameApp/Facebook-Messenger-200-200x200.jpg',
                'vote' => 0
            ],
            [
                'id_topic' => 4,
                'title' => 'WeChat',
                'description' => 'WeChat description',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS69Pef5b7wk6qnkX5JN2khN9oeKemed3gQxA&usqp=CAU',
                'vote' => 0
            ],
            [
                'id_topic' => 4,
                'title' => 'Instagram',
                'description' => 'Instagram description',
                'image' => 'https://brandslogo.net/wp-content/uploads/2016/05/instagram-logo-vector-download-200x200.jp=>',
                'vote' => 0
            ],


        ]);

    }
}
