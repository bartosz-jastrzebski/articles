<?php
namespace App\Utility;

use Cake\Mailer\Email;

class EmailHandler {
    public $message = 'Siema';
    public $sender = 'bartosz.jastrzebski89@gmail.com';
    public $subject = 'From CakePHP';
    public $header = 'Mysite';

    function __construct($reciever) {
        $this->reciever = $reciever;
    }

    public function send() {
        try {
            $email = new Email('default');
            $email->from([$this->sender => $this->header]);
            $email->to($this->reciever);
            $email->subject($this->subject);
            $email->send($this->message);
            $status = True;
        } catch (Exception $e) {
            $status = False;
        };
        return $status;
    }

}


?>