<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    //
    function __construct()
    {

    }

    /**
     * Метод главной страницы веб-приложения
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    function index()
    {
        $images = [
            'http://habrastorage.org/storage1/cf1a57bd/e7cc2b34/b9d6fc1d/0a19729c.jpg',
            'https://freelance.today/uploads/images/00/07/43/2017/08/25/b1e49d.jpg',
            'http://3.bp.blogspot.com/_uieTAO5W_lg/TKO1JyKO-2I/AAAAAAAAIFU/kp6q2IkFEfo/s1600/oktomvri+7.jpg',
            'https://raw.github.com/leventov/yarr/fc477d5a206ed0bc8a22eca8a515bbb121b53ce2/tests/tree.png',
            'http://nibler.ru/uploads/users/2014-12-22/kosmosa-izobrazheniya-syurrealisticheskie-kartinki-smeshnye-kartinki-fotoprikoly_2087528542.jpg',
            'https://i.pinimg.com/originals/7f/21/a5/7f21a590c239f860dec2a798945ee4e9.jpg',
            'https://cdn.fishki.net/upload/post/201412/12/1349176/69821f00b1d54b60fc369f428dca6845.jpg',
            'https://aramagopyan.com/wp/wp-content/uploads/2017/04/%D0%B4%D0%B0%D0%B4%D0%B5%D0%BD%D0%BE-%D0%B8%D0%B7%D0%BE%D0%B1%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D0%B5.jpg',
            'https://c.wallhere.com/photos/1d/e8/1024x714_px_abstract_wallpaper_art_images_asian_art_colourful_paints_cool_photos_hd_desktop_images_hd_photos-801849.jpg!d',
            'https://i.ytimg.com/vi/1IVL5dVfmxY/maxresdefault.jpg',
            'https://cdn.pixabay.com/photo/2018/05/30/00/24/thunderstorm-3440450__340.jpg',
            'http://www.poozerie.com/images/gallery/IMG_5826j.jpg',
            'https://autoreview.ru/images/Article/1646/Article_164602_860_575.jpg',
            'http://wroom.ru/i/news/7067img1.jpg',
            'https://ic.pics.livejournal.com/nikonofficial/39162016/4216236/4216236_900.jpg',
            'http://www.design-remont.info/wp-content/uploads/2011/07/birds-design-in-interior-decoration-part1.jpg',
            'http://i.wallpic.net/5/9006/ochen-krasivaya-morda-belogo-volka_1920x1200.jpg',
            'https://images2.popmeh.ru/upload/img_cache/0fd/0fd84b7c356ca02400a076544969cfe8_ce_1013x540x0x67_cropped_800x427.jpg',
            'https://gohtml.ru/images/news/151--15-10-03--21-21-00.jpg',
            'http://zyryan.kz/wp-content/uploads/2016/02/-8-e1454436915609.jpg',
            'https://zarabotat-na-sajte.ru/uroki-html/img/primer.jpg',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTqmsi64jVYIUhB0c3jquOl9ZfwBTaJ9jgPkzQMT00hRX700FOySw',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQv22uh_gGYcJFHMFtikzCrp8_QJJnjvYN0ygEhJgIRPFfVWUZu',
            'http://divirunu.beget.tech/wp-content/uploads/2017/04/Sklonilos-derevo.jpg',
            'https://www.coreldraw.com/static/cdgs/product_content/cdgs/x7/tutorials/en/powerclip-tutorial/image9.jpg',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1UDGXhhYKLsUVwy9QQ8QjhmDQiROlh0b--LqPitphYgJYGES2TA',
            'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSgr2LQ7OUbUnnkBFQScxpcX0oev95OgFlm3TF3d1MQe5S67jP9',
            'https://i.ytimg.com/vi/Zt5TG4SDBg4/maxresdefault.jpg',
            'https://telegraf.com.ua/files/2018/06/1528190584_bmw.jpg',
            'https://www.primelibrary.ru/upload/pereplet/34639101770_e7f530cf8c_h.jpg',
            'http://top-antropos.com/images/2/Cleopatra/London,%20United%20Kingdom.jpg',
            'http://data.1freewallpapers.com/download/tree-branches-pink-flowers-leaves-spring-macro-desktop-background-images.jpg',
            'http://pristor.ru/wp-content/uploads/2017/12/%D0%9F%D1%80%D0%B8%D0%BA%D0%BE%D0%BB%D1%8C%D0%BD%D1%8B%D0%B5-%D0%B8-%D0%BA%D1%80%D0%B0%D1%81%D0%B8%D0%B2%D1%8B%D0%B5-%D0%BA%D0%B0%D1%80%D1%82%D0%B8%D0%BD%D0%BA%D0%B8-%D0%B8%D0%B7%D0%BE%D0%B1%D1%80%D0%B0%D0%B6%D0%B5%D0%BD%D0%B8%D1%8F-%D0%BA%D0%BE%D1%81%D0%BC%D0%BE%D1%81%D0%B0-%D0%BF%D0%BE%D0%B4%D0%B1%D0%BE%D1%80%D0%BA%D0%B0-3.jpg',
            'https://99px.ru/sstorage/56/2018/03/mid_296121_871977.jpg',
            'https://pp.userapi.com/c619730/v619730086/706f/K3uuKvayw6A.jpg'
        ];
        #echo "MVC";
        shuffle($images);
        return view('index')->with('images', $images);
    }
}
