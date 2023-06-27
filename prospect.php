<?php /* Template Name: User Register Page */ 

global $wpdb, $user_ID;  
if (!$user_ID) {  
?>
<h3>Create your account</h3>
<form action="" method="post" name="user_registeration">
    <label>Username <span class="error">*</span></label>
    <input type="text" name="username" placeholder="Enter Your Username" class="text" required /><br />
    <label>Email address <span class="error">*</span></label>
    <input type="text" name="useremail" class="text" placeholder="Enter Your Email" required /> <br />
    <label>Password <span class="error">*</span></label>
    <input type="password" name="password" class="text" placeholder="Enter Your password" required /> <br />
    <input type="submit" name="user_registeration" value="SignUp" />
</form>

<?php 
    if(isset($signUpError)){
        echo '<div>'.$signUpError.'</div>';
    }

    if (isset($_POST['user_registeration'])) :

    $url_params = $request->get_json_params();
    $name = $url_params['name'];
    $first_name = $url_params['first_name'];
    $last_name = $url_params['last_name'];
    $email = $url_params['email'];
    $username = $url_params['username'];
    $password = $url_params['password'];
    $title =  $url_params['title'];
    $company =  $url_params['company'];
    $phone =  $url_params['business_phone'];
    $country =  $url_params['country'];
    $firebase_password = $url_params['firebase_password'];
    $subscription = $url_params['subscription'];
    $agree_tc = $url_params['agree_tc'];
    
    $public_mail_domain = array(
    'live.com',
    'mail.ru',
    'web.de',
    'list-manage.com',
    'gmx.net',
    'outlook.com',
    'hotmail.com',
    'gmail.com',
    'sendgrit.net',
    'evite.com',
    'live.net',
    'szn.cz',
    'linkedinmobileapp.com',
    'mailchimp.com',
    '1drv.ms',
    'mail.com',
    'freemail.hu',
    'temp-mail.org',
    'mimecast.com',
    'liveinternet.ru',
    'families.google',
    'mlsend.com',
    '126.com',
    'gmx.ch',
    'gmx.de',
    'gmx.com',
    'gmx.fr',
    'cmail20.com',
    'campaign-archive.com',
    'clktec.com',
    'webmail.free.fr',
    'posteo.de',
    'yahoomail.com',
    'yahoo.fr',
    'sendinblue.com',
    'fastmail.com',
    'kpnmail.nl',
    'hdmoli.com',
    'greetingsisland.com',
    'chpok.site',
    'tegos.club',
    'hushmail.com',
    'deref-mail.com',
    'mail.ee',
    'convertkit-mail2.com',
    'yopmail.com',
    'highrich.net',
    'hao6v.tv',
    'memberkit.com.br',
    'aol.com',    
    'aim.com',
    'proton.me',
    'protonmail.com',
    'tutanota.com',
    'tutanota.de',
    'tutamail.com',
    'tuta.io',
    'keemail.me',
    'icloud.com',
    'yandex.com',
    'yandex.ru',
    'zohomail.com',
    'msn.com',	
    'wanadoo.fr',	
    'orange.fr',	
    'comcast.net',	
    'rediffmail.com',	
    'free.fr',	
    'web.de',
    'ymail.com',	
    'libero.it',
    'uol.com.br',	
    'bol.com.br',	
    'mail.ru',	
    'cox.net',	
    'hotmail.it',	
    'sbcglobal.net',	
    'sfr.fr',	
    'verizon.net',	
    'ig.com.br',	
    'bigpond.com',	
    'terra.com.br',	
    'yahoo.it',	
    'neuf.fr',	
    'yahoo.de',	
    'alice.it',	
    'rocketmail.com',
    'att.net',	
    'laposte.net',	
    'bellsouth.net',	
    'charter.net',	
    'rambler.ru',	
    'tiscali.it',	
    'shaw.ca',	
    'sky.com',	
    'earthlink.net',	
    'optonline.net',	
    'freenet.de',	
    't-online.de',	
    'aliceadsl.fr',	
    'virgilio.it',	
    'home.nl',
    'qq.com',
    'telenet.be',	
    'me.com',	
    'tiscali.co.uk',	
    'voila.fr',	
    'planet.nl',	
    'tin.it',	
    'ntlworld.com',	
    'arcor.de',	
    'frontiernet.net',	
    'hetnet.nl',	
    'zonnet.nl',	
    'club-internet.fr',	
    'juno.com',	
    'optusnet.com.au',	
    'blueyonder.co.uk',	
    'bluewin.ch',	
    'skynet.be',	
    'sympatico.ca',	
    'windstream.net',	
    'mac.com',	
    'centurytel.net',	
    'chello.nl',	
    'aim.com',
    'bigpond.net.au',
    'emailexpert.org',
    'inbox.com',
    'runbox.com',
    'mailfence.com',
    'startmail.com',
    'lycos.com',
    'zimbra.com',
    'maillinator.com',
    'guerrillamail.com',
    'disroot.org',
    'riseup.net',
    'openmailbox.org',
    'posteo.de',
    'sapo.pt',
    'torguard.net',
    'naver.com',
    'daum.net',
    'webmail.co.za',
    'btinternet.com',
    'o2.pl',
    'telenet.be',
    'sina.com',
    'netzero.net',
    'talktalk.net',
    'telus.net',
    '163.com',
    'hanmail.com',
    'seznam',
    'eclipse.eu',
    'interia.pl',
    'rogers.com',
    'walla.co.il',
    'excite.com',
    'gmavt.net',
    'lavabit.com',
    'eircom.net',
    'netscape.net',
    'myway.com',
    'cock.li',
    'mykolab.com',
    'snailmail.com',
    'caramail.com',
    'o2online.de',
    'scryptmail.com',
    'pobox.com',
    '1and1.com',
    'trash-mail.com',
    'temp-mail.org',
    '10minutemail.com',
    'anonbox.net',
    'mailinator.com',
    'yopmail.com',
    'jetable.org',
    'getnada.com',
    'maildrop.cc',
    'tempmailgen.com',
    'dispostable.com',
    'sharklasers.com',
    'mintemail.com',
    'spamgourmet.com',
    'fakeinbox.com',
    'tempmailo.com',
    'neomailbox.com',
    'autistic.org',
    'dismail.de',
    'kolabnow.com',
    'countermail.com',
    'getairmail.com',
    'stealthmail.com',
    'lockbin.com',
    'securetmail.com',
    'privy-mail.com',
    'guardmyemail.com',
    'safetymail.info',
    'encryptedmail.com',
    'safeguardmail.com',
    'confidentialmail.com',
    'mail2world.com',
    'inbox.lv',
    'rackspace.com',
    'sohu.com',
    'netease.com',
    'ctemplar.com',
    'canopymail.app',
    'postale.io',
    'privatemail.com',
    'criptext.com',
    'encryptedmail.com',
    'safe-mail.net',
    'privateme.com',
    'enigmail.net',
    'lockbin.com',
    'hush.com', 
    );

    $user_data = array(
        'user_pass'             =>  $password,
        'user_login'            =>  $username,
        'user_email'            =>  $email,
        'first_name'            =>  $first_name,
        'last_name'             =>  $last_name,       
    );

    // make sure we've got a valid email
    if( filter_var( $email, FILTER_VALIDATE_EMAIL ) ) {
        // split on @ and return last value of array (the domain)
        $domain = array_pop(explode('@', $email)); 
    }  
    

    if(!in_array($domain, $public_mail_domain)) :       
        $user_id = wp_insert_user($user_data);
    else : 
        return gil_response(202, 'Please use the Business Email', null);
    endif;
   
     if (!empty($url_params['region']) && $url_params['region'] !== 'Region' ) {
        $data = (explode(" ",$url_params['region']));
        $region = 'um_'.strtolower($data[0]);
        if($data[1]){
             $region = 'um_'.strtolower($data[0]).'-'.strtolower($data[1]);
        }
     }
     else{
          $region = '';
    }

    
   
        $wp_user_object = new WP_User($user_id);
        $wp_user_object->remove_role('pending_user');
        $wp_user_object->set_role('um_council-member'); 
        $wp_user_object->add_role($region );
        
    do_action( 'profile_update', $user_id, $wp_user_object, $wp_user_object );
    
        
    if (!is_wp_error($user_id) && $user_id) {
        $id = $user_id;
        update_field('Title', $title, 'user_' . $id);
        //update_field('title', $title, 'user_' . $id);
        update_field('company', $company, 'user_' . $id);
        update_field('business_phone', $phone, 'user_' . $id);
        update_field('country', $country, 'user_' . $id);
        update_field('firebase_password', $firebase_password, 'user_' . $id);
        update_field('expertise_areas1', 'other', 'user_' . $id);
        update_field('user_persona','Growth Member', 'user_' . $id);
        update_field('region', $url_params['region'], 'user_' . $id);        
        update_field('event_notification', true, 'user_' . $id);
        update_field('chat_notification', true, 'user_' . $id);
        update_field('content_notification', true, 'user_' . $id);
        update_field('member_connection_add_delete_notification', true, 'user_' . $id);
        update_field('discussion_board_notification', true, 'user_' . $id);
        update_field('registered_event_notification', true, 'user_' . $id);
        update_field('frost_subscription',$subscription, 'user_' . $id);
        update_field('agree_tc',$agree_tc, 'user_' . $id);
        


        return gil_response(200, 'Registration succesfull', null);
    } elseif (is_wp_error($user_id)) {
        return gil_error($user_id->get_error_code(), $user_id->get_error_message(), null);
    } else {
        return gil_error(500, 'Something is wrong, please contact admin', null);
    }
endif;
}  

else {  
   wp_redirect( home_url() ); exit;  
}

?>