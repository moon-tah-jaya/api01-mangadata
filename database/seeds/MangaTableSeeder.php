<?php

# database/seeds/MangaTableSeeder.php

use App\Models\Manga\MangaGenre;
use App\Models\Manga\MangaPublisher;
use App\Models\Manga\MangaAuthor;
use App\Models\Manga\MangaBook;
use App\Models\Manga\MangaBookStatus;
use App\Models\Manga\MangaBookChapter;
use App\Models\Manga\MangaChapterContent;
use App\Models\Manga\MangaRating;
use App\Models\Manga\MangaView;
use App\Models\Security\SecurityUser;
use Illuminate\Database\Seeder;

class MangaTableSeeder extends Seeder
{
    public function run()
    {
        //Manga Genre
        MangaGenre::create([
            'name' => 'Action',
            'description' => 'A work typically depicting fighting, violence, chaos, and fast paced motion.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Adult',
            'description' => 'Contains content that is suitable only for adults. Titles in this category may include prolonged scenes of intense violence and/or graphic sexual content and nudity.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Adventure',
            'description' => 'If a character in the story goes on a trip or along that line, your best bet is that it is an adventure manga. Otherwise, it\'s up to your personal prejudice on this case.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Comedy',
            'description' => 'A dramatic work that is light and often humorous or satirical in tone and that usually contains a happy resolution of the thematic conflict.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Doujinshi',
            'description' => 'Fan based work inspired by official anime or manga. For MangaUpdates, original works DO NOT fall under this category',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Drama',
            'description' => 'A work meant to bring on an emotional response, such as instilling sadness or tension.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Ecchi',
            'description' => 'Possibly the line between hentai and non-hentai, ecchi usually refers to fanservice put in to attract a certain group of fans.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Fantasy',
            'description' => 'Anything that involves, but not limited to, magic, dream world, and fairy tales.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Gender Bender',
            'description' => 'Girls dressing up as guys, guys dressing up as girls.. Guys turning into girls, girls turning into guys.. I think you get the picture.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Harem',
            'description' => 'A series involving one male character and many female characters (usually attracted to the male character). A Reverse Harem is when the genders are reversed.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Hentai',
            'description' => 'Adult sexual content in an illustrated form where the FOCUS of the manga is placed on sexually graphic acts.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Historical',
            'description' => 'Having to do with old or ancient times.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Horror',
            'description' => 'A painful emotion of fear, dread, and abhorrence; a shuddering with terror and detestation; the feeling inspired by something frightful and shocking.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Josei',
            'description' => 'Literally "Woman". Targets women 18-30. Female equivalent to seinen. Unlike shoujo the romance is more realistic and less idealized. The storytelling is more explicit and mature.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Lolicon',
            'description' => 'Representing a sexual attraction to young or under-age girls.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Martial Arts',
            'description' => 'As the name suggests, anything martial arts related. Any of several arts of combat or self-defense, such as aikido, karate, judo, or tae kwon do, kendo, fencing, and so on and so forth.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Mature',
            'description' => 'Contains subject matter which may be too extreme for people under the age of 17. Titles in this category may contain intense violence, blood and gore, sexual content and/or strong language.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Mecha',
            'description' => 'A work involving and usually concentrating on all types of large robotic machines.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Mystery',
            'description' => 'Usually an unexplained event occurs, and the main protagonist attempts to find out what caused it.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Psychological',
            'description' => 'Usually deals with the philosophy of a state of mind, in most cases detailing abnormal psychology.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Romance',
            'description' => 'Any love related story. We will define love as between man and woman in this case. Other than that, it is up to your own imagination of what love is.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'School Life',
            'description' => 'Having a major setting of the story deal with some type of school.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Sci-fi',
            'description' => 'Short for science fiction, these works involve twists on technology and other science related phenomena which are contrary or stretches of the modern day scientific world.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Seinen',
            'description' => 'Seinen means "young Man." Manga and anime that specifically targets young adult males around the ages of 18 to 25 are seinen titles. The stories in seinen works appeal to university students and those in the working world. Typically the story lines deal with the issues of adulthood.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Shotacon',
            'description' => 'Representing a sexual attraction to young or under-age boys.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Shoujo',
            'description' => 'A work intended and primarily written for females. Usually involves a lot of romance and strong character development.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Shoujo Ai',
            'description' => 'Often synonymous with yuri, this can be thought of as somewhat less extreme. "Girl\'s Love", so to speak.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Shounen',
            'description' => 'A work intended and primarily written for males. These works usually involve fighting and/or violence.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Shounen Ai',
            'description' => 'Often synonymous with yaoi, this can be thought of as somewhat less extreme. "Boy\'s Love", so to speak.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Slice of Life',
            'description' => 'As the name suggests, this genre represents day-to-day tribulations of one/many character(s). These challenges/events could technically happen in real life and are often -if not all the time- set in the present timeline in a world that mirrors our own.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Smut',
            'description' => 'Deals with series that are considered profane or offensive, particularly with regards to sexual content',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Sports',
            'description' => 'As the name suggests, anything sports related. Baseball, basketball, hockey, soccer, golf, and racing just to name a few.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Supernatural',
            'description' => 'Usually entails amazing and unexplained powers or events which defy the laws of physics.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Tragedy',
            'description' => 'Contains events resulting in great loss and misfortune.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Yaoi',
            'description' => 'This work usually involves intimate relationships between men.',
            'deleteFlag' => 'N'
        ]);

        MangaGenre::create([
            'name' => 'Yuri',
            'description' => 'This work usually involves intimate relationships between women.',
            'deleteFlag' => 'N'
        ]);

        // Manga Book Status
        MangaBookStatus::create([
            'id' => 1,
            'name' => 'Ongoing',
            'description' => 'Ongoing'
        ]);

        MangaBookStatus::create([
            'id' => 2,
            'name' => 'Completed',
            'description' => 'Completed'
        ]);

        // Sample Publisher, Author, Book
        MangaPublisher::create([
            'id' => 'b343bdd3-b304-11e7-b27e-141877c1c4e1',
            'name' => 'Shueisha Inc.',
            'biography' => 'Shueisha Inc. (株式会社集英社 Kabushiki Gaisha Shūeisha, \"Shueisha Publishing Co., Ltd.\") is a Japanese book and video game publisher headquartered in Chiyoda, Tokyo, Japan. The company was founded in 1925 as the entertainment-related publishing division of Japanese publisher Shogakukan. The following year, Shueisha became a separate, independent company.\r\n\r\nMagazines published by Shueisha include Weekly Shōnen Jump, Weekly Young Jump, Non-no and Ultra Jump. Shueisha, along with Shogakukan, owns VIZ Media, which publishes manga from all three companies in North America.',
            'founded' => DateTime::createFromFormat('Y-m-d', '1949-03-31'),
            'country' => 'Tokyo, Japan',
            'logo' => 'logo/shueisha_inc_logo.jpg'
        ]);

        MangaAuthor::create([
            'id' => '325081ec-b308-11e7-b27e-141877c1c4e1',
            'name' => 'Eiichiro Oda',
            'occupation' => 'Manga artist',
            'coverImage' => 'photo/eiichiro_oda.jpg',
            'biography' => 'Eiichiro Oda (尾田 栄一郎 Oda Eiichirō, born January 1, 1975) is a Japanese manga artist, best known for his manga series One Piece (1997–present). With 430 million copies in circulation worldwide,[1] One Piece is the best-selling manga series of all time. The series\' popularity resulted in his being named one of the manga artists that changed the history of manga.',
            'bornDate' => DateTime::createFromFormat('Y-m-d', '1975-01-01'),
            'debut' => DateTime::createFromFormat('Y-m-d', '1992-01-01'),
            'bornPlace' => 'Kumamoto, Prefecture, Japan'
        ]);

        MangaBook::create([
            'id' => '97661d24-b309-11e7-b27e-141877c1c4e1',
            'authorId' => '325081ec-b308-11e7-b27e-141877c1c4e1',
            'publisherId' => 'b343bdd3-b304-11e7-b27e-141877c1c4e1',
            'statusId' => 1,
            'totalView' => '345',
            'coverImage' => 'cover/one_piece.jpg',
            'summary' => 'One Piece follows the adventurous and funny story of Monkey D. Luffy. As a boy, Luffy has always wanted to be the Pirate King. His body obtained the properties of rubber after eating a Devil Fruit. Together with a diverse crew of wannabe pirates, Luffy sets out on the ocean in an attempt to find the world’s ultimate treasure, One Piece.\r\n\r\nWhen talking about the most successful manga and anime series of all time, One Piece will always enter the conversation. Just the mere fact of it running for almost decades goes to show how loved it is by millions of fans worldwide. What’s interesting is that there are still plenty of folks who are eager to get started on their One Piece adventure. It doesn’t matter if they have to read countless manga chapters or watch hundreds of anime episodes. The undeniable lure of One Piece continues to fascinate fans around the world.\r\n\r\nThe series boasts of some jaw-dropping numbers. The manga consists of over 800 chapters while the anime series has more than 700 episodes. And there are no signs of slowing down. One Piece has even made it to the Guinness Book of World Records. The manga has 320 million copies in print worldwide as of June 2015.\r\n\r\nIt’s never too late to join Luffy and his crew of amazing pirates. You can choose to jump straight to the anime series, but many hardcore fans recommend that starters begin with the manga. There are plenty of places where you can read One Piece manga online. Usually, it all boils down to personal preference. You can check out community forums and see a list of the most suggested manga websites. The official version from Viz Media is a good place to start.\r\n\r\nOne huge determining factor of what manga website to use is how fast it is in releasing new chapters. Most websites are able to upload a new chapter after a day or two from being released. But there are some out there which can release on the same day. Thousands of fans flock to these sites in order to get the first glimpse of the new chapter. After all, you want to be the first in action and avoid getting spoiled in community forums or on social media.\r\n\r\nIt’s time to begin your own adventure and look for the best place to read One Piece manga online. It shouldn’t be too difficult to find several manga websites. Just be sure to try multiple sites to see their differences so you can come up with an informed decision.\r\n\r\nIf you are a fan of One Piece, you know that new chapters of this pirate tale are coming out soon. Not every manga website can offer these chapters license-free. That means you may hit a snag when you go to read the newest chapter.\r\n\r\nEven if you use the same One Piece manga fan website as before to read chapters you can sometimes discover that you are unable to view the whole story. Make sure to check the website\'s terms and agreements.\r\n\r\nIt is probably more boring to read terms and conditions than One Piece manga, but your time will be well spent. You might find that the website can no longer display licensed content for free. In this instance you may need to apply for a paid account.\r\n\r\nIt helps to pay for an account so that you get to read the content you crave while the creator\'s rights are protected. Besides this, if you sign up for an account, you usually get a choice to read online or on a smart phone or tablet using the app that the website offers.\r\n\r\nAlways find legitimate websites to read your favorite manga. You will get access to everything with no disappointments. In addition, you have options to read the chapters from a computer or from an app that you download. This lets you have the convenience of reading the story while on a train, in a car, on a plane or wherever you are when the mood to manga hits.\r\n\r\nIf you want to try a chapter before you sign up for an account at a website that licenses the work, you could take a peek over at a site that is run by a fan. Fans like you are often happy to post chapters which they have translated.\r\n\r\nOther attractive Manga : \r\n+ Detective Conan Manga\r\n+ Girls of the Wilds Manga',
            'created_at' => DateTime::createFromFormat('Y-m-d', '2017-10-17'),
        ]);

        $mangaOnePiece = MangaBook::find('97661d24-b309-11e7-b27e-141877c1c4e1');
        $mangaOnePiece->genres()->attach([1, 3, 4, 6]);

        // Manga Chapter Chapter + Content
        MangaBookChapter::create([
            'id' => '039a379b-b30c-11e7-b27e-141877c1c4e1',
            'bookId' => '97661d24-b309-11e7-b27e-141877c1c4e1',
            'volume' => 1,
            'chapter' => 1,
            'name' => 'Romance Dawn',
            'created_at' => DateTime::createFromFormat('Y-m-d', '2017-10-17')
        ]);

        MangaBookChapter::create([
            'id' => '2575891f-b30c-11e7-b27e-141877c1c4e1',
            'bookId' => '97661d24-b309-11e7-b27e-141877c1c4e1',
            'volume' => 1,
            'chapter' => 2,
            'name' => 'They Call Him Strawhat Luffy',
            'created_at' => '2017-10-17 00:00:00'
        ]);

        MangaBookChapter::create([
            'id' => '3572ccf5-b30c-11e7-b27e-141877c1c4e1',
            'bookId' => '97661d24-b309-11e7-b27e-141877c1c4e1',
            'volume' => 1,
            'chapter' => 3,
            'name' => 'Pirate Hunter Zoro Enters',
            'created_at' => '2017-10-17 00:00:00'
        ]);

        MangaChapterContent::create([
            'id' => '002dcb75-b30d-11e7-b27e-141877c1c4e1',
            'idx' => 1,
            'chapterId' => '2575891f-b30c-11e7-b27e-141877c1c4e1',
            'content' => 'OnePiece/Volume03/1.jpg'
        ]);

        MangaChapterContent::create([
            'id' => '077f437d-b30d-11e7-b27e-141877c1c4e1',
            'idx' => 2,
            'chapterId' => '2575891f-b30c-11e7-b27e-141877c1c4e1',
            'content' => 'OnePiece/Volume03/2.jpg'
        ]);

        MangaChapterContent::create([
            'id' => '0e570ff0-b30d-11e7-b27e-141877c1c4e1',
            'idx' => 3,
            'chapterId' => '2575891f-b30c-11e7-b27e-141877c1c4e1',
            'content' => 'OnePiece/Volume03/3.jpg'
        ]);

        MangaChapterContent::create([
            'id' => '15c33a68-b30d-11e7-b27e-141877c1c4e1',
            'idx' => 4,
            'chapterId' => '2575891f-b30c-11e7-b27e-141877c1c4e1',
            'content' => 'OnePiece/Volume03/4.jpg'
        ]);

        MangaChapterContent::create([
            'id' => 'd62b4c5b-b30c-11e7-b27e-141877c1c4e1',
            'idx' => 1,
            'chapterId' => '039a379b-b30c-11e7-b27e-141877c1c4e1',
            'content' => 'OnePiece/Volume01/1.jpg'
        ]);

        MangaChapterContent::create([
            'id' => 'ddf53464-b30c-11e7-b27e-141877c1c4e1',
            'idx' => 2,
            'chapterId' => '039a379b-b30c-11e7-b27e-141877c1c4e1',
            'content' => 'OnePiece/Volume01/2.jpg'
        ]);

        MangaChapterContent::create([
            'id' => 'e6b88635-b30c-11e7-b27e-141877c1c4e1',
            'idx' => 3,
            'chapterId' => '039a379b-b30c-11e7-b27e-141877c1c4e1',
            'content' => 'OnePiece/Volume01/3.jpg'
        ]);

        MangaChapterContent::create([
            'id' => 'ee29bf46-b30c-11e7-b27e-141877c1c4e1',
            'idx' => 1,
            'chapterId' => '3572ccf5-b30c-11e7-b27e-141877c1c4e1',
            'content' => 'OnePiece/Volume02/1.jpg'
        ]);

        MangaChapterContent::create([
            'id' => 'f670a85b-b30c-11e7-b27e-141877c1c4e1',
            'idx' => 2,
            'chapterId' => '3572ccf5-b30c-11e7-b27e-141877c1c4e1',
            'content' => 'OnePiece/Volume02/2.jpg'
        ]);

        SecurityUser::create([
            'id' => 'cf2a81,5c-b35c-11e7-898a-9cb6d0606bec',
            'name' => 'quest',
            'description' => 'quest',
            'sex' => 'unknown',
            'created_at' => DateTime::createFromFormat('Y-m-d', '2017-10-13')
        ]);

        MangaRating::create([
            'id' => 'e4fd433a-b35c-11e7-898a-9cb6d0606bec',
            'terminal' => '10.195.40.41',
            'bookId' => '97661d24-b309-11e7-b27e-141877c1c4e1',
            'userId' => 'cf2a81,5c-b35c-11e7-898a-9cb6d0606bec',
            'created_at' => DateTime::createFromFormat('Y-m-d', '2017-10-14'),
            'value' => 4
        ]);

        MangaRating::create([
            'id' => 'f70a7431-b35c-11e7-898a-9cb6d0606bec',
            'terminal' => '10.195.70.33',
            'bookId' => '97661d24-b309-11e7-b27e-141877c1c4e1',
            'userId' => 'cf2a81,5c-b35c-11e7-898a-9cb6d0606bec',
            'created_at' => DateTime::createFromFormat('Y-m-d', '2017-10-16'),
            'value' => 5
        ]);

        MangaView::create([
            'id' => '134805a7-b35d-11e7-898a-9cb6d0606bec',
            'terminal' => '10.195.60.33',
            'contentId' => '0e570ff0-b30d-11e7-b27e-141877c1c4e1',
            'userId' => 'cf2a81,5c-b35c-11e7-898a-9cb6d0606bec',
            'created_at' => DateTime::createFromFormat('Y-m-d', '2017-10-15')
        ]);

        MangaView::create([
            'id' => '1fdb2277-b35d-11e7-898a-9cb6d0606bec',
            'terminal' => '10.195.60.40',
            'contentId' => '002dcb75-b30d-11e7-b27e-141877c1c4e1',
            'userId' => 'cf2a81,5c-b35c-11e7-898a-9cb6d0606bec',
            'created_at' => DateTime::createFromFormat('Y-m-d', '2017-10-18')
        ]);
    }
}