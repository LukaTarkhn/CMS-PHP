<?php

namespace app\controllers;

use ibuild\Cache;

class KaController extends AppController {
    public function indexAction() {
        $aboutus = \R::find('aboutus');
        $finishedProjects = \R::find('finished');
        $currentWorks = \R::find('current', 'ORDER BY id DESC LIMIT 8');
        $floors = \R::find('floors');
        $offers = \R::find('offers');

        $this->setMeta(
            'Real Palace – სამშენბლო კომპანია',
            'utf-8',
            'REAL PALACE -  უმსხვილესი სამშენებლო კომპანიაა საქართველოში, კომპანია “რეალ პალასი” დაფუძნდა 2011 წელს. ჩვენი კომპანიის პრიორიტეტი არ არის მხოლოდ ღირსეული და კომფორტული პირობების შექმნა საცხოვრებელში, არამედ კლიენტებთან გრძელვადიანი პარტნიორული ურთიერთობის დამყარება.',
            'მშენებლობა, mshenebloba, მშენებელი, mshenebeli, ინვესტიცია, investicia, საქართველო, sakartvelo, saqartvelo, სამშენებლო, samsheneblo, ვილა, vila, კოტეჯი, koteji, შენობები, shenobebi, შენობა, shenoba, ნაგებობა, nageboba, რემონტი, remonti, სასტუმრო, sastumro, სამრეწველო, samretsvelo, samrewvelo, ინდივიდუალური, individualuri,  საცხოვრებელი, sacxovrebeli, satsxovrebeli, დარგის ლიდერი, dargis lideri,  მექანიზაცია, mekanizatsia, mekanizacia, mekanisatsia, mekanisacia,  meqanizatsia, meqanizacia, meqanisatsia, meqanisacia,  ტექნიკა, teqnika, texnika, ბეტონი, betoni, საპროექტო, saproeqto, saproekto, ხარისხი, xarisxi, ტექნოლოგია, teqnologia, teknologia, საშენი მასალები, sasheni masalebi, კავკასია, kavkasia, პოსტსაბჭოთა, postsabchota, თბილისი, tbilisi, ბათუმი, batumi, მრავალსართულიანი, mravalsartuliani,  რკინაბეტონი, rkinabetoni, კონსტრუქცია, konstruqcia, konstruqtsia, კარკასი, karkasi, მონოლითი, monoliti, მონოლითური, monolituri, მოპირკეთება, mopirketeba, ტრანსპორტი, transporti, თანამედროვე, tanamedrove',
            'lukatarkhnishvili.com'
        );
        $this->set(compact('aboutus', 'finishedProjects', 'currentWorks', 'floors', 'offers'));

        setcookie('languages', 'GE', time() + 3600 * 24, '/');
    }

    public function  conditionAction() {
            $this->setMeta('Real Palace Black Sea Towers აპარტამენტების ჩაბარების კონდიცია', 'utf-8','აპარტამენტების ჩაბარების კონდიცია', 'ჩაბარება, აპარტამენტები, კონდიცია, თეთრი კარკასი, რემონტით', 'lukatarkhnishvili.com');
    }

}