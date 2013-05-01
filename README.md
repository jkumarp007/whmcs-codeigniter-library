whmcs-codeigniter-library
=========================

Codeigniter library for working with WHMCS API


Simple example of usage:
 
        //controller
        public create_user(){
        
           $this->load->library('whmcs'); // load library
           
           $user_data=array(
            'firstname' => 'user first name',
            'lastname' => 'user lasrname',
            'email' => 'user_test@email.com'
            'address1' => ' test address',
            'city' => ' test city',
            'state' => ' test state',
            'postcode' => '123456',
            'country' => 'IN',
            'phonenumber' => '9876543210',
            'password2'  => md5('123456')
            );
            
            $this->whmcs->whmcs_add_client($user_data); // create new user
           
        }
 
 

