<?php
namespace App\Utility;

use Cake\Mailer\Email;

class EmailHandler {
    public $message = 'Siema';
    public $sender = 'bartosz.jastrzebski89@gmail.com';
    public $subject = 'From CakePHP';

    public function send_to($reciever) {
        try {
            $email = new Email('default');
            $email->from(['bartosz.jastrzebski89@gmail.com' => 'My Site'])
        ->to('bartosz.jastrzebski89@gmail.com')
        ->subject()
        ->send('My message');
        return True
            }
        }


    }


?>