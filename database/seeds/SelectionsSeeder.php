<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SelectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('selections')->insert([
            [
                'id_topic' => 1,
                'title_selection' => 'Pizza',
                'descr_selection' => 'Pizza descr_selection',
                'image_selection' => 'https://bakingmischief.com/wp-content/uploads/2017/10/naan-chicken-alfredo-pizza-image_selection-square-200x200.jpg',
                
            ],
            [
                'id_topic' => 1,
                'title_selection' => 'Pasta',
                'descr_selection' => 'Pasta descr_selection' ,
                'image_selection' => 'https://feedmephoebe.com/wp-content/uploads/2017/10/Homemade-Gluten-Free-Pasta-Recipe-Tuscan-Pici-Spaghetti-Noodles-19-200x200.jpg',
               
            ],
            [
                'id_topic' => 1,
                'title_selection' => 'Hamburger',
                'descr_selection' => 'Hamburger descr_selection',
                'image_selection' => 'https://static.onecms.io/wp-content/uploads/sites/12/2012/07/giant-bacon-hamburger-200x200.jpg',
               
            ],
            [
                'id_topic' => 1 ,
                'title_selection' => 'Soup',
                'descr_selection' => 'Soup descr_selection',
                'image_selection' => 'https://www.seasonsandsuppers.ca/wp-content/uploads/2018/10/wicked-thai-soup-21-200x200.jpg',
               
            ],
            [
                'id_topic' => 1,
                'title_selection' => 'Salad',
                'descr_selection' => 'Salad descr_selection',
                'image_selection' => 'https://www.gimmesomeoven.com/wp-content/uploads/2019/04/Everyday-Italian-Salad-Recipe-2-200x200.jpg',
               
            ],
            [
                'id_topic' => 1,
                'title_selection' => 'Bread',
                'descr_selection' => 'Bread descr_selection',
                'image_selection' => 'https://www.jocooks.com/wp-content/uploads/2020/04/rye-bread-1-18-200x200.jpg',
               
            ],


        
            [
                'id_topic' => 2,
                'title_selection' => 'South Island, New Zealand',
                'descr_selection' => 'South Island, New Zealand descr_selection',
                'image_selection' => 'https://tr-images.condecdn.net/image_selection/9OoJRo3nJnN/crop/200/square/f/Thanda-island-tanzania-conde-nast-traveller-9nov16-pr.jpg',
               
            ],
            [
                'id_topic' => 2,
                'title_selection' => 'Paris',
                'descr_selection' => 'Paris descr_selection',
                'image_selection' => 'https://cdnmedia.baotintuc.vn/2013/02/04/13/21/pariswoman2469661b.jpg',
               
            ],
            [
                'id_topic' => 2,
                'title_selection' => 'Bora Bora',
                'descr_selection' => 'Bora Bora descr_selection',
                'image_selection' => 'https://lh3.googleusercontent.com/proxy/g6nQTRaJMNrFQ7b9oi0rrONQ7BFT-ks9E6DBQCA0uSF_TC0J84kISbKciR-h3F24owjSUwSFHz_jzcq981W3vuzr1dDyNS4saOnbROBQv9SeE6INF3_-vrKH6i4ubROssSjxuwAhPvWiww',
               
            ],
            [
                'id_topic' => 2,
                'title_selection' => 'Glacier National Park',
                'descr_selection' => 'Glacier National Park descr_selection',
                'image_selection' => 'https://i.pinimg.com/originals/9e/a6/1e/9ea61e3b26601eb0c49e7f6f1fa581ba.jpg',
               
            ],
            [
                'id_topic' => 2,
                'title_selection' => 'London',
                'descr_selection' => 'London descr_selection',
                'image_selection' => 'https://www.telegraph.co.uk/content/dam/Travel/2019/March/prevost-Panorama%203.jpg',
               
            ],
            [
                'id_topic' => 2,
                'title_selection' => 'Maui',
                'descr_selection' => 'Maui descr_selection',
                'image_selection' => 'https://live.staticflickr.com/8508/8352834999_205f705206_b.jpg',
               
            ],




            [
                'id_topic' => 3,
                'title_selection' => 'Diablo',
                'descr_selection' => 'Diablo descr_selection',
                'image_selection' => 'https://i.pinimg.com/originals/1c/af/ba/1cafbaaeba2c451a9254bd8288c11cfc.jpg',
               
            ],
            [
                'id_topic' => 3,
                'title_selection' => 'FIFA',
                'descr_selection' => 'FIFA descr_selection',
                'image_selection' => 'https://upload.wikimedia.org/wikipedia/en/thumb/6/6b/FIFA2000BoxArtUK.jpg/200px-FIFA2000BoxArtUK.jpg',
               
            ],
            [
                'id_topic' => 3,
                'title_selection' => 'Starcraft 2',
                'descr_selection' => 'Starcraft 2 descr_selection',
                'image_selection' => 'https://i.pinimg.com/originals/02/2a/6c/022a6c935e19a997c6947110a8bebadd.jpg',
               
            ],
            [
                'id_topic' => 3,
                'title_selection' => 'Heroes of the Storm',
                'descr_selection' => 'Heroes of the Storm descr_selection',
                'image_selection' => 'https://wpq0221c4a-flywheel.netdna-ssl.com/wp-content/uploads/2020/10/heroes-of-the-storm__200x300.jpg',
               
            ],
            [
                'id_topic' => 3,
                'title_selection' => 'Gears of War',
                'descr_selection' => 'Gears of War descr_selection',
                'image_selection' => 'https://images-na.ssl-images-amazon.com/images/I/613yPNZCFXL._SX373_BO1,204,203,200_.jpg',
               
            ],
            [
                'id_topic' => 3,
                'title_selection' => 'NBA 2K Series',
                'descr_selection' => 'NBA 2K Series descr_selection',
                'image_selection' => 'https://pbs.twimg.com/media/EKT9JxuUUAMBqPv.jpg',
               
            ],



            [
                'id_topic' => 4,
                'title_selection' => 'Facebook',
                'descr_selection' => 'Facebook descr_selection',
                'image_selection' => 'https://expandedramblings.com/wp-content/uploads/2014/05/Facebook-Statistics-and-Facts.png',
               
            ],
            [
                'id_topic' => 4,
                'title_selection' => 'YouTube',
                'descr_selection' => 'YouTube descr_selection',
                'image_selection' => 'https://www.sportico.com/wp-content/uploads/2019/10/youtube200x200-2.png',
               
            ],
            [
                'id_topic' => 4,
                'title_selection' => 'WhatsApp',
                'descr_selection' => 'WhatsApp descr_selection',
                'image_selection' => 'https://st.quantrimang.com/photos/image_selection/2020/03/31/dinh-dang-van-ban-trong-cuoc-tro-chuyen-whatsapp-200.jpg',
               
            ],
            [
                'id_topic' => 4,
                'title_selection' => 'Messenger',
                'descr_selection' => 'Messenger descr_selection',
                'image_selection' => 'https://cdn.tgdd.vn/2020/12/GameApp/Facebook-Messenger-200-200x200.jpg',
               
            ],
            [
                'id_topic' => 4,
                'title_selection' => 'WeChat',
                'descr_selection' => 'WeChat descr_selection',
                'image_selection' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS69Pef5b7wk6qnkX5JN2khN9oeKemed3gQxA&usqp=CAU',
               
            ],
            [
                'id_topic' => 4,
                'title_selection' => 'Instagram',
                'descr_selection' => 'Instagram descr_selection',
                'image_selection' => 'https://brandslogo.net/wp-content/uploads/2016/05/instagram-logo-vector-download-200x200.jp=>',
               
            ],


        ]);

    }
}
