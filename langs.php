<?php 

    $get_lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    $link2 = 'https://mobile-home-x7e.herokuapp.com';


    $lang_en = array(

        '1' => 'SPIN TO WIN',
        '2' => "Please fill out the registration form <a href='".$link2."'>HERE</a> <meta http-equiv='refresh' content='7; URL=".$link2."' />"
    );

    $lang_id = array(

        '1' => 'klik disini',
        '2' => "Silakan isi formulir pendaftaran <a href='".$link2."'>dari sini</a> <meta http-equiv='refresh' content='7; URL=".$link2."' />"
    );

    $lang_pt = array(

        '1' => 'Clique aqui',
        '2' => "Por favor, preencha o formulário de inscrição <a href='".$link2."'>daqui</a> <meta http-equiv='refresh' content='7; URL=".$link2."' />"
    );

    $lang_es = array(

        '1' => 'rueda giratoria',
        '2' => "Por favor complete el formulario de registro <a href='".$link2."'>de aquí</a> <meta http-equiv='refresh' content='7; URL=".$link2."' />"
    );

    $lang_fr = array(

        '1' => 'Cliquez sur',
        '2' => "Veuillez remplir le formulaire d'inscription <a href='".$link2."'>d'ici</a> <meta http-equiv='refresh' content='7; URL=".$link2."' />"
    );

    $lang_tr = array(

        '1' => 'Tıklayın',
        '2' => "Lütfen kayıt formunu doldurun <a href='".$link2."'>buradan</a> <meta http-equiv='refresh' content='7; URL=".$link2."' />"
    );

    $lang_fi = array(

        '1' => 'pindutin dito',
        '2' => "Mangyaring punan ang form sa pagpaparehistro <a href='".$link2."'>mula rito</a> <meta http-equiv='refresh' content='7; URL=".$link2."' />"
    );

    $lang_ur = array(

        '1' => 'سپن وہیل',
        '2' => "برائے کرم رجسٹریشن فارم پُر کریں <a href='".$link2."'>یہاں سے</a> <meta http-equiv='refresh' content='7; URL=".$link2."' />"
    );
    
    $lang_ar = array(

        '1' => 'أدر العجلة',
        '2' => "يرجى ملء استمارة التسجيل من <a href='".$link2."'>هنا</a> <meta http-equiv='refresh' content='7; URL=".$link2."' />"
    );

    

    $lang_pa = array(
        
        '1' => 'ਇੱਥੇ ਕਲਿੱਕ ਕਰੋ',
        '2' => "ਕਿਰਪਾ ਕਰਕੇ ਰਜਿਸਟ੍ਰੇਸ਼ਨ ਫਾਰਮ ਭਰੋ <a href='".$link2."'>ਇਥੋਂ</a> <meta http-equiv='refresh' content='7; URL=".$link2."' />"
    );


    if($get_lang == 'ar'){

        $get1 = $lang_ar['1'];
        $get2 = $lang_ar['2'];

    }elseif($get_lang == 'pa'){

        $get1 = $lang_pa['1'];
        $get2 = $lang_pa['2'];

    }elseif($get_lang == 'fr'){

        $get1 = $lang_fr['1'];
        $get2 = $lang_fr['2'];

    }elseif($get_lang == 'tr'){

        $get1 = $lang_tr['1'];
        $get2 = $lang_tr['2'];

    }elseif($get_lang == 'id'){

        $get1 = $lang_id['1'];
        $get2 = $lang_id['2'];

    }elseif($get_lang == 'pt'){

        $get1 = $lang_pt['1'];
        $get2 = $lang_pt['2'];

    }elseif($get_lang == 'es'){

        $get1 = $lang_es['1'];
        $get2 = $lang_es['2'];

    }elseif($get_lang == 'fi' || $get_lang == 'tl' || $get_lang == 'ph'){

        $get1 = $lang_fi['1'];
        $get2 = $lang_fi['2'];

    }elseif($get_lang == 'ur' || $get_lang == 'pk'){

        $get1 = $lang_ur['1'];
        $get2 = $lang_ur['2'];

    }else{

        $get1 = $lang_en['1'];
        $get2 = $lang_en['2'];

    }



?>
