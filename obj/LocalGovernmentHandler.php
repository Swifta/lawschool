<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class LocalGovernmentHandler{
    
    private $states = array('ABIA' => 'ABIA','ABUJA' => 'ABUJA','ANAMBRA' => 'ANAMBRA','ADAMAWA' => 'ADAMAWA',
        'AKWA IBOM' => 'AKWA IBOM','BAUCHI' => 'BAUCHI','BAYELSA' => 'BAYELSA','BENUE' => 'BENUE',
        'BORNO' => 'BORNO','CROSS RIVER' => 'CROSS RIVER','DELTA' => 'DELTA','EDO' => 'EDO','EKITI' => 'EKITI',
        'EBONYI' => 'EBONYI','ENUGU' => 'ENUGU','GOMBE' => 'GOMBE','IMO' => 'IMO','KANO' => 'KANO',
        'LAGOS' => 'LAGOS','NASSARAWA' => 'NASSARAWA','JIGAWA' => 'JIGAWA','KEBBI' => 'KEBBI',
        'KADUNA' => 'KADUNA','KOGI' => 'KOGI','KATSINA' => 'KATSINA','KWARA' => 'KWARA','NIGER' => 'NIGER',
        'OGUN' => 'OGUN','ONDO' => 'ONDO','OSUN' => 'OSUN','OYO' => 'OYO','PLATEAU' => 'PLATEAU',
        'RIVERS' => 'RIVERS','SOKOTO' => 'SOKOTO','TARABA' => 'TARABA','YOBE' => 'YOBE','ZAMFARAM' => 'ZAMFARA');


    private $local_govts = array();
    
    public function __construct() {
        $this->init();
    }
    
    public function getStates(){
        return $this->states;
    }
    
    public function getLga($state){
        if(array_key_exists($state, $this->local_govts)){
            return $this->local_govts[$state];
        }
        else{
            return array();
        }
    }
    private function init(){
        $abia = array("Aba North"=>"Aba North","Aba South"=>"Aba South","Arochukwu"=>"Arochukwu","Bende"=>"Bende",
            "Ikwuano"=>"Ikwuano","Isiala-Ngwa North"=>"Isiala-Ngwa North","Isiala-Ngwa South"=>"Isiala-Ngwa South",
            "Isuikwato"=>"Isuikwato","Obi Nwa"=>"Obi Nwa","Ohafia"=>"Ohafia","Osisioma"=>"Osisioma","Ngwa"=>"Ngwa",
            "Ugwunagbo"=>"Ugwunagbo","Ukwa East"=>"Ukwa East","Ukwa West"=>"Ukwa West",
            "Umuahia North"=>"Umuahia North","Umuahia South"=>"Umuahia South","Umu-Neochi"=>"Umu-Neochi");
        sort($abia);
        $this->local_govts['ABIA'] = $abia;

        $abuja = array("Gwagwalada"=>"Gwagwalada","Kuje"=>"Kuje","Abaji"=>"Abaji",
            "Abuja Municipal"=>"Abuja Municipal","Bwari"=>"Bwari","Kwali"=>"Kwali");
        sort($abuja);
        $this->local_govts['ABUJA'] = $abuja;

        $anambra = array("Aguata"=>"Aguata","Anambra East"=>"Anambra East","Anambra West"=>"Anambra West",
            "Anaocha"=>"Anaocha","Awka North"=>"Awka North","Awka South"=>"Awka South","Ayamelum"=>"Ayamelum",
            "Dunukofia"=>"Dunukofia","Ekwusigo"=>"Ekwusigo","Idemili North"=>"Idemili North",
            "Idemili south"=>"Idemili south","Ihiala"=>"Ihiala","Njikoka"=>"Njikoka","Nnewi South"=>"Nnewi South","Nnewi Sth"=>"Nnewi Sth",
            "Nnewi North"=>"Nnewi North","Ogbaru"=>"Ogbaru","Onitsha North"=>"Onitsha North",
            "Onitsha South"=>"Onitsha South","Orumba North"=>"Orumba North",
            "Orumba South"=>"Orumba South","Oyi"=>"Oyi");
        sort($anambra);
        $this->local_govts['ANAMBRA'] = $anambra;

        $adamawa = array("Demsa"=>"Demsa","Fufore"=>"Fufore","Ganaye"=>"Ganaye","Gireri"=>"Gireri","Gombi"=>"Gombi","Guyuk"=>"Guyuk","Hong"=>"Hong","Jada"=>"Jada","Lamurde"=>"Lamurde","Madagali"=>"Madagali","Maiha"=>"Maiha","Mayo-Belwa"=>"Mayo-Belwa","Michika"=>"Michika","Mubi North"=>"Mubi North","Mubi North"=>"Mubi North","Numan"=>"Numan","Shelleng"=>"Shelleng","Song"=>"Song","Toungo"=>"Toungo","Yola North"=>"Yola North","Yola South"=>"Yola South");
        sort($adamawa);
        $this->local_govts['ADAMAWA'] = $adamawa;

        $akwaibom = array("Abak"=>"Abak","Eastern Obolo"=>"Eastern Obolo","Eket"=>"Eket","Esit Eket"=>"Esit Eket",
            "Essien Udim"=>"Essien Udim","Etim Ekpo"=>"Etim Ekpo","Etinan"=>"Etinan","Ibeno"=>"Ibeno",
            "Ibesikpo Asutan"=>"Ibesikpo Asutan","Ibiono Ibom"=>"Ibiono Ibom","Ika"=>"Ika","Ikono"=>"Ikono",
            "Ikot Abasi"=>"Ikot Abasi","Ini"=>"Ini","Itu"=>"Itu","Mbo"=>"Mbo","Mkpat Enin"=>"Mkpat Enin",
            "Nsit Atai"=>"Nsit Atai","Nsit Ibom"=>"Nsit Ibom","Nsit Ubium"=>"Nsit Ubium",
            "Obot Akara"=>"Obot Akara","Okobo"=>"Okobo","Onna"=>"Onna","Oron"=>"Oron","Udung Uko"=>"Udung Uko",
            "Ukanafun"=>"Ukanafun","Uruan"=>"Uruan","Urue-Offong/Oruko"=>"Urue-Offong/Oruko","Uyo"=>"Uyo",""=>"");
        sort($akwaibom);
        $this->local_govts['AKWA IBOM'] = $akwaibom;

/*
        $anambra = array("Aguata"=>"Aguata","Anambra East"=>"Anambra East","Anambra West"=>"Anambra West",
            "Anaocha"=>"Anaocha","Awka North"=>"Awka North","Awka South"=>"Awka South",
            "Ayamelum"=>"Ayamelum","Dunukofia"=>"Dunukofia","Ekwusigo"=>"Ekwusigo","Idemili North"=>"Idemili North",
            "Ihiala"=>"Ihiala","Njikoka"=>"Njikoka","Nnewi North"=>"Nnewi North","Ogbaru"=>"Ogbaru",
            "Onitsha North"=>"Onitsha North","Onitsha South"=>"Onitsha South","Orumba North"=>"Orumba North",
            "Oyi"=>"Oyi");
        sort($anambra);
        $this->local_govts['ANAMBRA'] = $anambra;
*/
        $bauchi = array("Alkaleri"=>"Alkaleri","Bauchi"=>"Bauchi","Bogoro"=>"Bogoro","Damban"=>"Damban",
            "Darazo"=>"Darazo","Dass"=>"Dass","Ganjuwa"=>"Ganjuwa","Giade"=>"Giade","Itas/Gadau"=>"Itas/Gadau",
            "Jama'are"=>"Jama'are","Katagum"=>"Katagum","Kirfi"=>"Kirfi","Misau"=>"Misau","Ningi"=>"Ningi",
            "Shira"=>"Shira","Tafawa-Balewa"=>"Tafawa-Balewa","Toro"=>"Toro","Warji"=>"Warji","Zaki"=>"Zaki");
        sort($bauchi);
        $this->local_govts['BAUCHI'] = $bauchi;

        $bayelsa = array("Brass"=>"Brass","Ekeremor"=>"Ekeremor","Kolokuma/Opokuma"=>"Kolokuma/Opokuma",
            "Nembe"=>"Nembe","Ogbia"=>"Ogbia","Sagbama"=>"Sagbama","Southern Jaw"=>"Southern Jaw",
            "Yenegoa"=>"Yenegoa");
        sort($bayelsa);
        $this->local_govts['BAYELSA'] = $bayelsa;


        $benue = array("Ado"=>"Ado","Agatu"=>"Agatu","Apa"=>"Apa","Buruku"=>"Buruku","Gboko"=>"Gboko",
            "Guma"=>"Guma","Gwer East"=>"Gwer East","Katsina-Ala"=>"Katsina-Ala","Konshisha"=>"Konshisha",
            "Kwande"=>"Kwande","Logo"=>"Logo","Makurdi"=>"Makurdi","Obi"=>"Obi","Ogbadibo"=>"Ogbadibo",
            "Oju"=>"Oju","Okpokwu"=>"Okpokwu","Ohimini"=>"Ohimini","Oturkpo"=>"Oturkpo","Tarka"=>"Tarka",
            "Ukum"=>"Ukum","Ushongo"=>"Ushongo","Vandeikya "=>"Vandeikya");
        sort($benue);
        $this->local_govts['BENUE'] = $benue;


        $bornu = array("Abadam"=>"Abadam","Askira/Uba"=>"Askira/Uba","Bama"=>"Bama","Bayo"=>"Bayo","Biu"=>"Biu",
            "Chibok"=>"Chibok","Damboa"=>"Damboa","Dikwa"=>"Dikwa","Gubio"=>"Gubio","Guzamala"=>"Guzamala",
            "Gwoza"=>"Gwoza","Hawul"=>"Hawul","Jere"=>"Jere","Kaga"=>"Kaga","Kala/Balge"=>"Kala/Balge",
            "Konduga"=>"Konduga","Kukawa"=>"Kukawa","Kwaya Kusar"=>"Kwaya Kusar","Mafa"=>"Mafa",
            "Magumeri"=>"Magumeri","Maiduguri"=>"Maiduguri","Marte"=>"Marte","Mobbar"=>"Mobbar",
            "Monguno"=>"Monguno","Ngala"=>"Ngala","Nganzai"=>"Nganzai","Shani"=>"Shani");
        sort($bornu);
        $this->local_govts['BORNO'] = $bornu;


        $crossriver = array("Akpabuyo"=>"Akpabuyo","Odukpani"=>"Odukpani","Akamkpa"=>"Akamkpa","Biase"=>"Biase",
            "Abi"=>"Abi","Ikom"=>"Ikom","Yarkur"=>"Yarkur","Odubra"=>"Odubra","Boki"=>"Boki","Ogoja"=>"Ogoja",
            "Yala"=>"Yala","Obanliku"=>"Obanliku","Obudu"=>"Obudu","Calabar South"=>"Calabar South",
            "Etung"=>"Etung","Bekwara"=>"Bekwara","Bakassi"=>"Bakassi",
            "Calabar Municipality"=>"Calabar Municipality");
        sort($crossriver);
        $this->local_govts['CROSS RIVER'] = $crossriver;

        $delta = array("Aniocha"=>"Aniocha","Aniocha South"=>"Aniocha South","Bomadi"=>"Bomadi","Burutu"=>"Burutu",
            "Ethiope East"=>"Ethiope East","Ethiope West"=>"Ethiope West","Ika North-East"=>"Ika North-East",
            "Ika South"=>"Ika South","Isoko North"=>"Isoko North", "Isoko South"=>"Isoko South",
            "Ndokwa East"=>"Ndokwa East","Ndokwa West"=>"Ndokwa West","Okpe"=>"Okpe","Oshimili"=>"Oshimili",
            "Oshimili North"=>"Oshimili North","Patani"=>"Patani","Sapele"=>"Sapele","Udu"=>"Udu","Ughelli North"=>"Ughelli North",
            "Ughelli South"=>"Ughelli South","Ughelli North"=>"Ughelli North","Ukwani"=>"Ukwani","Uvwie"=>"Uvwie",
                "Warri Central"=>"Warri Central","Warri North"=>"Warri North","Warri South"=>"Warri South");
        sort($delta);
        $this->local_govts['DELTA'] = $delta;


        $ebonyi = array("Abakaliki"=>"Abakaliki","Afikpo South"=>"Afikpo South","Afikpo Northth"=>"Afikpo North",
            "Ebonyi"=>"Ebonyi","Ezza"=>"Ezza","Ezza South"=>"Ezza South","lkwo"=>"lkwo","Ishielu"=>"Ishielu",
            "Ivo"=>"Ivo","Ohaozara"=>"Ohaozara","Ohaukwu"=>"Ohaukwu","Onicha"=>"Onicha");
        sort($ebonyi);
        $this->local_govts['EBONYI'] = $ebonyi;


        $edo = array("Central"=>"Central","Egor"=>"Egor","Esan Central"=>"Esan Central",
            "Esan North-East"=>"Esan North-East","Esan South-East"=>"Esan South-East","Esan West"=>"Esan West",
            "Etsako Central"=>"Etsako Central","Igueben"=>"Igueben","Oredo"=>"Oredo","Orhionwon"=>"Orhionwon",
            "Ovia SouthWest"=>"Ovia SouthWest","Ovia South-East"=>"Ovia South-East","Uhunmwonde"=>"Uhunmwonde");
        sort($edo);
        $this->local_govts['EDO'] = $edo;


        $ekiti = array("Ado"=>"Ado","Efon"=>"Efon","Gbonyin"=>"Gbonyin","Ekiti-East"=>"Ekiti-East",
            "Ekiti-West"=>"Ekiti-West","Emure/Ise/Orun"=>"Emure/Ise/Orun","Ekiti South-West"=>"Ekiti South-West",
            "Ijero"=>"Ijero","Ido/Osi"=>"Ido/Osi","Ilejemeje"=>"Ilejemeje","Ikole"=>"Ikole","Ikare"=>"Ikare",
            "Irepodun"=>"Irepodun","Ise/Orun"=>"Ise/Orun","Moba"=>"Moba");
        sort($ekiti);
        $this->local_govts['EKITI'] = $ekiti;


        $enugu = array("Aninri"=>"Aninri","Enugu Eas"=>"Enugu Eas","Enugu North"=>"Enugu North",
            "Enugu South"=>"Enugu South","Ezeagu"=>"Ezeagu","Igbo-Ekiti"=>"Igbo-Ekiti",
            "IgboEze North"=>"IgboEze North","Igbo-Eze South"=>"Igbo-Eze South","Isi-Uzo"=>"Isi-Uzo",
            "Oji-River"=>"Oji-River","Nkanu East"=>"Nkanu East","Nkanu"=>"Nkanu","Nsukka"=>"Nsukka",
            "Udenu"=>"Udenu","Udi Agwu"=>"Udi Agwu","Udi Agwu"=>"Udi Agwu","Uzo-Uwani"=>"Uzo-Uwani");
        sort($enugu);
        $this->local_govts['ENUGU'] = $enugu;
        

        $gombe = array("Akko"=>"Akko","Balanga"=>"Balanga","Billiri"=>"Billiri","Dukku"=>"Dukku",
            "Funakaye"=>"Funakaye","Gombe"=>"Gombe","Kaltungo"=>"Kaltungo","Kwami"=>"Kwami",
            "Nafada/Bajoga"=>"Nafada/Bajoga","Shomgom"=>"Shomgom","Yamaltu/Delta"=>"Yamaltu/Delta");
        sort($gombe);
        $this->local_govts['GOMBE'] = $gombe;

        $imo = array("Aboh-Mbaise"=>"Aboh-Mbaise","Ahiazu-Mbaise"=>"Ahiazu-Mbaise","Ehime-Mbano"=>"Ehime-Mbano",
            "Ezinihitte"=>"Ezinihitte","Ideato South"=>"Ideato South","Ihitte/Uboma"=>"Ihitte/Uboma",
            "Ikeduru"=>"Ikeduru","Isiala Mbano"=>"Isiala Mbano","Isu"=>"Isu","Mbaitoli"=>"Mbaitoli",
            "Ngor-Okpala"=>"Ngor-Okpala","Njaba"=>"Njaba","Nwangele"=>"Nwangele","Nkwerre"=>"Nkwerre",
            "Obowo"=>"Obowo","Oguta"=>"Oguta","Ohaji/Egbema"=>"Ohaji/Egbema","Okigwe"=>"Okigwe","Orlu"=>"Orlu",
            "Orsu"=>"Orsu","Oru East"=>"Oru East","Oru West"=>"Oru West","Owerri-Municipal"=>"Owerri-Municipal",
            "Owerri North"=>"Owerri North","Owerri West"=>"Owerri West");
        sort($imo);
        $this->local_govts['IMO'] = $imo;


        $jigawa = array("Auyo"=>"Auyo","Babura"=>"Babura","Birni Kudu"=>"Birni Kudu","Rom"=>"Biriniwa",
            "Buji"=>"Buji","Dutse"=>"Dutse","Gagarawa"=>"Gagarawa","Garki"=>"Garki","Gumel"=>"Gumel","Guri"=>"Guri",
            "Gwiwa"=>"Gwiwa","Gwaram"=>"Gwaram","Hadejia"=>"Hadejia","Jahun"=>"Jahun","Kafin Hausa"=>"Kafin Hausa",
                "Kaugama Kazaure"=>"Kaugama Kazaure","Kiri Kasamma"=>"Kiri Kasamma","Kiyawa"=>"Kiyawa","Malam-Madori"=>"Malam-Madori",
            "Maigatari"=>"Maigatari","Miga"=>"Miga","Ringim"=>"Ringim","Roni"=>"Roni",
            "Sule-Tankarkar"=>"Sule-Tankarkar","Taura"=>"Taura","Yankwashi"=>"Yankwashi");
        sort($jigawa);
        $this->local_govts['JIGAWA'] = $jigawa;


        $kaduna = array("Birni-Gwari"=>"Birni-Gwari","Chikun"=>"Chikun","Giwa"=>"Giwa","Igabi"=>"Igabi",
            "Ikara"=>"Ikara","jaba"=>"jaba","Jema'a"=>"Jema'a","Kachia"=>"Kachia","Kaduna North"=>"Kaduna North",
            "Kaduna South"=>"Kaduna South","Kagarko"=>"Kagarko","Kajuru"=>"Kajuru","Kaura"=>"Kaura",
            "Kauru"=>"Kauru","Kubau"=>"Kubau","Kudan"=>"Kudan","Lere"=>"Lere","Makarfi"=>"Makarfi",
            "Sabon-Gari"=>"Sabon-Gari","Sanga"=>"Sanga","Soba"=>"Soba","Zango-Kataf"=>"Zango-Kataf",
            "Zaria"=>"Zaria");
        sort($kaduna);
        $this->local_govts['KADUNA'] = $kaduna;

        $kano = array("Ajingi"=>"Ajingi","Albasu"=>"Albasu","Bagwai"=>"Bagwai","Bebeji"=>"Bebeji","Bichi"=>"Bichi",
            "Bunkure"=>"Bunkure","Dala"=>"Dala","Dambatta"=>"Dambatta","Dawakin Kudu"=>"Dawakin Kudu",
            "Dawakin Tofa"=>"Dawakin Tofa","Dawakin Tofa"=>"Dawakin Tofa","Fagge"=>"Fagge","Gabasawa"=>"Gabasawa",
            "Garko"=>"Garko","Garum"=>"Garum","Gaya"=>"Gaya","Gezawa"=>"Gezawa","Gwale"=>"Gwale","Gwarzo"=>"Gwarzo",
            "Kabo"=>"Kabo","Kano Municipal"=>"Kano Municipal","Karaye"=>"Karaye","Kibiya"=>"Kibiya","Kiru"=>"Kiru",
            "kumbotso"=>"kumbotso","Kunchi"=>"Kunchi","Kura"=>"Kura","Madobi"=>"Madobi","Makoda"=>"Makoda",
            "Minjibir"=>"Minjibir","Nasarawa"=>"Nasarawa","Rano"=>"Rano","Rimin Gado"=>"Rimin Gado","Rogo"=>"Rogo",
            "Shanono"=>"Shanono","Sumaila"=>"Sumaila","Takali"=>"Takali","Tarauni"=>"Tarauni","Tofa"=>"Tofa",
            "Tsanyawa"=>"Tsanyawa","Tudun Wada"=>"Tudun Wada","Ungogo"=>"Ungogo",
            "Warawa"=>"Warawa","Wudil"=>"Wudil");
        sort($kano);
        $this->local_govts['KANO'] = $kano;


        $katsina = array("Bakori"=>"Bakori","Batagarawa"=>"Batagarawa","Batsari"=>"Batsari","Baure"=>"Baure",
            "Bindawa"=>"Bindawa","Charanchi"=>"Charanchi","Dandame"=>"Dandame","Danja"=>"Danja",
            "Dan Musa"=>"Dan Musa","Daura"=>"Daura","Dutsi"=>"Dutsi","Dutsin-Ma"=>"Dutsin-Ma","Faskari"=>"Faskari",
            "Funtua"=>"Funtua","Ingawa"=>"Ingawa","Jibia"=>"Jibia","Kafur"=>"Kafur","Kaita"=>"Kaita",
            "Kankara"=>"Kankara","Kankia"=>"Kankia","Katsina"=>"Katsina","Kurfi"=>"Kurfi","Kusada"=>"Kusada",
            "Mai'Adua"=>"Mai'Adua","Malumfashi"=>"Malumfashi","Mani"=>"Mani","Mashi"=>"Mashi","Matazuu"=>"Matazuu",
            "Musawa"=>"Musawa","Rimi"=>"Rimi","Sabuwa"=>"Sabuwa","Safana"=>"Safana","Sandamu"=>"Sandamu",
            "Zango"=>"Zango");
        sort($katsina);
        $this->local_govts['KATSINA'] = $katsina;


        $kebbi = array("Aleiro"=>"Aleiro","Arewa-Dandi"=>"Arewa-Dandi","Argungu"=>"Argungu","Augie"=>"Augie",
            "Bagudo"=>"Bagudo","Birnin Kebbi"=>"Birnin Kebbi","Bunza"=>"Bunza","Dandi"=>"Dandi","Fakai"=>"Fakai",
            "Gwandu"=>"Gwandu","Jega"=>"Jega","Kalgo"=>"Kalgo","Koko/Besse"=>"Koko/Besse","Maiyama"=>"Maiyama",
            "Ngaski"=>"Ngaski","Sakaba"=>"Sakaba","Shanga"=>"Shanga","Suru"=>"Suru","Wasagu/Danko"=>"Wasagu/Danko",
            "Yauri"=>"Yauri","Zuru"=>"Zuru");
        sort($kebbi);
        $this->local_govts['KEBBI'] = $kebbi;


        $kogi = array("Adavi"=>"Adavi","Ajaokuta"=>"Ajaokuta","Ankpa"=>"Ankpa","Bassa"=>"Bassa","Dekina"=>"Dekina",
            "Ibaji"=>"Ibaji","Idah"=>"Idah","Igalamela-Odolu"=>"Igalamela-Odolu","Ijumu"=>"Ijumu",
            "Kabba/Bunu"=>"Kabba/Bunu","Kogi"=>"Kogi","Lokoja"=>"Lokoja","Mopa-Muro"=>"Mopa-Muro","Ofu"=>"Ofu",
            "Ogori/Mangongo"=>"Ogori/Mangongo","Okehi"=>"Okehi","Okene"=>"Okene","Olamabolo"=>"Olamabolo",
            "Omala"=>"Omala","Yagba East"=>"Yagba East","Yagba West"=>"Yagba West");
        sort($kogi);
        $this->local_govts['KOGI'] = $kogi;

        $kwara = array("Asa"=>"Asa","Baruten"=>"Baruten","Edu"=>"Edu","Ekiti"=>"Ekiti","Ifelodun"=>"Ifelodun",
            "Ilorin East"=>"Ilorin East","Ilorin South"=>"Ilorin South","Ilorin West"=>"Ilorin West","Irepodun"=>"Irepodun","Isin"=>"Isin",
            "Kaiama"=>"Kaiama","Moro"=>"Moro","Offa"=>"Offa",
            "Oke-Ero"=>"Oke-Ero","Oyun"=>"Oyun","Pategi"=>"Pategi");
        sort($kwara);
        $this->local_govts['KWARA'] = $kwara;

        $lagos = array("Agege"=>"Agege","Ajeromi-Ifelodun"=>"Ajeromi-Ifelodun","Alimosho"=>"Alimosho",
            "Amuwo-Odofin"=>"Amuwo-Odofin","Apapa"=>"Apapa","Badagry"=>"Badagry","Epe"=>"Epe","Eti-Osa"=>"Eti-Osa",
            "Ibeju/Lekki"=>"Ibeju/Lekki","Ifako-Ijaye"=>"Ifako-Ijaye","Ikeja"=>"Ikeja","Ikorodu"=>"Ikorodu",
            "Kosofe"=>"Kosofe","Lagos Island"=>"Lagos Island","Lagos Mainland"=>"Lagos Mainland",
            "Mushin"=>"Mushin","Ojo"=>"Ojo","Oshodi-Isolo"=>"Oshodi-Isolo","Shomolu"=>"Shomolu",
            "Surulere"=>"Surulere");
        sort($lagos);
        $this->local_govts['LAGOS'] = $lagos;


        $nasarawa = array("Akwanga"=>"Akwanga","Awe"=>"Awe","Doma"=>"Doma","Karu"=>"Karu","Keana"=>"Keana",
            "Keffi"=>"Keffi","Kokona"=>"Kokona","Lafia"=>"Lafia","Nasarawa"=>"Nasarawa",
            "Nasarawa-Eggon"=>"Nasarawa-Eggon","Obi"=>"Obi","Toto"=>"Toto","Wamba"=>"Wamba");
        sort($nasarawa);
        $this->local_govts['NASSARAWA'] = $nasarawa;


        $niger = array("Agaie"=>"Agaie","Agwara"=>"Agwara","Bida"=>"Bida","Borgu"=>"Borgu","Bosso"=>"Bosso",
            "Chanchaga"=>"Chanchaga","Edati"=>"Edati","Gbako"=>"Gbako","Gurara"=>"Gurara","Katcha"=>"Katcha",
            "Kontagora"=>"Kontagora","Lapai"=>"Lapai","Lavun"=>"Lavun","Magama"=>"Magama","Mariga"=>"Mariga",
            "Mashegu"=>"Mashegu","Mokwa"=>"Mokwa","Muya"=>"Muya","Pailoro"=>"Pailoro","Rafi"=>"Rafi",
            "Rijau"=>"Rijau","Shiroro"=>"Shiroro","Suleja"=>"Suleja","Tafa"=>"Tafa","Wushishi"=>"Wushishi");
        sort($niger);
        $this->local_govts['NIGER'] = $niger;


        $ogun = array("Abeokuta North"=>"Abeokuta North","Abeokuta South"=>"Abeokuta South",
            "Ado-Odo/Ota"=>"Ado-Odo/Ota","Egbado North"=>"Egbado North","Egbado South"=>"Egbado South",
            "Ewekoro"=>"Ewekoro","Ifo"=>"Ifo","Ijebu East"=>"Ijebu East","Ijebu North"=>"Ijebu North",
            "Ijebu North East"=>"Ijebu North East","Ijebu Ode"=>"Ijebu Ode","Ikenne"=>"Ikenne",
            "Imeko-Afon"=>"Imeko-Afon","Ipokia"=>"Ipokia","Obafemi-Owode"=>"Obafemi-Owode",
            "Ogun Waterside"=>"Ogun Waterside","Odeda"=>"Odeda","Odogbolu"=>"Odogbolu","Remo North"=>"Remo North",
            "Shagamu"=>"Shagamu");
        sort($ogun);
        $this->local_govts['OGUN'] = $ogun;


        $ondo = array("Akoko North East"=>"Akoko North East","Akoko North West"=>"Akoko North West",
            "Akoko South Akure East"=>"Akoko South Akure East","Akoko South West"=>"Akoko South West",
            "Akure North"=>"Akure North","Akure South"=>"Akure South","Ese-Odo"=>"Ese-Odo","Idanre"=>"Idanre",
            "Ifedore"=>"Ifedore","Ilaje"=>"Ilaje","Ile-Oluji"=>"Ile-Oluji","Okeigbo"=>"Okeigbo","Irele"=>"Irele",
            "Odigbo"=>"Odigbo","Okitipupa"=>"Okitipupa","Ondo East"=>"Ondo East","Ondo West"=>"Ondo West",
            "Ose"=>"Ose","Owo"=>"Owo");
        sort($ondo);
        $this->local_govts['ONDO'] = $ondo;

        $osun = array("Aiyedade"=>"Aiyedade","Aiyedire"=>"Aiyedire","Atakumosa East"=>"Atakumosa East",
            "Atakumosa West"=>"Atakumosa West","Boluwaduro"=>"Boluwaduro","Boripe"=>"Boripe",
            "Ede North"=>"Ede North","Ede South"=>"Ede South","Egbedore"=>"Egbedore","Ejigbo"=>"Ejigbo",
            "Ife Central"=>"Ife Central","Ife East"=>"Ife East","Ife North"=>"Ife North","Ife South"=>"Ife South",
            "Ifedayo"=>"Ifedayo","Ifelodun"=>"Ifelodun","Ila"=>"Ila","Ilesha East"=>"Ilesha East",
            "Ilesha West"=>"Ilesha West","Irepodun"=>"Irepodun","Isokan"=>"Isokan","Iwo"=>"Iwo","Obokun"=>"Obokun",
            "Odo-Otin"=>"Odo-Otin","Ola-Oluwa"=>"Ola-Oluwa","Olorunda"=>"Olorunda","Oriade"=>"Oriade",
            "Orolu"=>"Orolu","Osogbo");
        sort($osun);
        $this->local_govts['OSUN'] = $osun;


        $oyo = array("Afijio"=>"Afijio","Akinyele"=>"Akinyele","Atiba"=>"Atiba","Atigbo"=>"Atigbo",
            "Egbeda"=>"Egbeda","IbadanCentral"=>"IbadanCentral","Ibadan North"=>"Ibadan North",
            "Ibadan North West"=>"Ibadan North West","Ibadan South East"=>"Ibadan South East",
            "Ibadan South East"=>"Ibadan South East","Ibarapa Central"=>"Ibarapa Central",
            "Ibarapa East"=>"Ibarapa East","Ibarapa North"=>"Ibarapa North","Ido"=>"Ido","Irepo"=>"Irepo",
            "Iseyin"=>"Iseyin","Itesiwaju"=>"Itesiwaju","Iwajowa"=>"Iwajowa",
            "Lagelu Ogbomosho North"=>"Lagelu Ogbomosho North","Ogbmosho South"=>"Ogbmosho South",
            "Ogo Oluwa"=>"Ogo Oluwa","Olorunsogo"=>"Olorunsogo","Oluyole"=>"Oluyole","Ona-Ara"=>"Ona-Ara",
            "Orelope"=>"Orelope","Ori Ire"=>"Ori Ire","Oyo East"=>"Oyo East","Oyo West"=>"Oyo West",
            "Saki East"=>"Saki East","Saki West"=>"Saki West","Saki West"=>"Saki West","Surulere"=>"Surulere");
        sort($oyo);
        $this->local_govts['OYO'] = $oyo;


        $plateau = array("Barikin Ladi"=>"Barikin Ladi","Bassa"=>"Bassa","Bokkos"=>"Bokkos","Jos East"=>"Jos East",
            "Jos North"=>"Jos North","Jos South"=>"Jos South","Kanam"=>"Kanam","Kanke"=>"Kanke",
            "Langtang North"=>"Langtang North","Langtang South"=>"Langtang South","Mangu"=>"Mangu",
            "Mikang"=>"Mikang","Pankshin"=>"Pankshin","Qua'an Pan"=>"Qua'an Pan","Riyom"=>"Riyom",
            "Shendam"=>"Shendam","Wase"=>"Wase");
        sort($plateau);
        $this->local_govts['PLATEAU'] = $plateau;


        $rivers = array("Abua/Odual"=>"Abua/Odual","Ahoada East"=>"Ahoada East","Ahoada West"=>"Ahoada West",
            "Akuku Toru"=>"Akuku Toru","Andoni"=>"Andoni","Asari-Toru"=>"Asari-Toru","Bonny"=>"Bonny",
            "Degema"=>"Degema","Emohua"=>"Emohua","Eleme"=>"Eleme","Etche"=>"Etche","Gokana"=>"Gokana",
            "Ikwerre"=>"Ikwerre","Khana"=>"Khana","Obia/Akpor"=>"Obia/Akpor",
            "Ogba/Egbema/Ndoni"=>"Ogba/Egbema/Ndoni","Ogu/Bolo"=>"Ogu/Bolo","Okrika"=>"Okrika","Omumma"=>"Omumma",
            "Opobo/Nkoro"=>"Opobo/Nkoro","Oyigbo"=>"Oyigbo","Port-Harcourt"=>"Port-Harcourt","Tai"=>"Tai");
        sort($rivers);
        $this->local_govts['RIVERS'] = $rivers;

        $sokoto = array("Binji"=>"Binji","Bodinga"=>"Bodinga","Dange-shnsi"=>"Dange-shnsi","Gada"=>"Gada",
            "Goronyo"=>"Goronyo","Gudu"=>"Gudu","Gawabawa"=>"Gawabawa","Illela"=>"Illela",
            "Isa"=>"Isa","Kware"=>"Kware","kebbe"=>"kebbe","Rabah"=>"Rabah","Sabon birni",
            "Shagari"=>"Shagari","Silame"=>"Silame","Sokoto North"=>"Sokoto North","Sokoto South"=>"Sokoto South",
            "Tambuwal"=>"Tambuwal","Tureta"=>"Tureta","Wamako"=>"Wamako","Wurno"=>"Wurno","Wurno"=>"Wurno",
            "Yabo"=>"Yabo");
        sort($sokoto);
        $this->local_govts['SOKOTO'] = $sokoto;

        $taraba = array("Ardo-kola"=>"Ardo-kola","Bali"=>"Bali","Donga"=>"Donga","Gashaka"=>"Gashaka",
            "Cassol"=>"Cassol","Ibi"=>"Ibi","Jalingo"=>"Jalingo","Karin-Lamido"=>"Karin-Lamido","Kurmi"=>"Kurmi",
            "Lau"=>"Lau","Sardauna"=>"Sardauna","Takum"=>"Takum","Ussa"=>"Ussa","Wukari"=>"Wukari","Yorro"=>"Yorro",
            "Zing"=>"Zing");
        sort($taraba);
        $this->local_govts['TARABA'] = $taraba;



        $yobe = array("Bade"=>"Bade","Bursari"=>"Bursari","Damaturu"=>"Damaturu","Fika"=>"Fika","Fune"=>"Fune",
            "Geidam"=>"Geidam","Gujba"=>"Gujba","Gulani"=>"Gulani","Jakusko"=>"Jakusko","Karasuwa"=>"Karasuwa",
            "Karawa"=>"Karawa","Machina"=>"Machina","Nguru Potiskum"=>"Nguru Potiskum",
            "Nguru Potiskum"=>"Nguru Potiskum","Yunusari"=>"Yunusari","Yusufari"=>"Yusufari");
        sort($yobe);
        $this->local_govts['YOBE'] = $yobe;


        $zamfara = array("Anka"=>"Anka","Bakura"=>"Bakura","Birnin Magaji"=>"Birnin Magaji","Bukkuyum"=>"Bukkuyum",
            "Bungudu"=>"Bungudu","Gummi"=>"Gummi","Gusau"=>"Gusau","Kaura"=>"Kaura","Namoda"=>"Namoda",
            "Maradun"=>"Maradun","Maru"=>"Maru","Shinkafi"=>"Shinkafi","Talata Mafara"=>"Talata Mafara",
            "Tsafe"=>"Tsafe","Zurmi"=>"Zurmi");
        sort($zamfara);
        $this->local_govts['ZAMFARA'] = $zamfara;
        
    }

}

?>