<?php

namespace App\Service;


class Mailer
{

    public function send ($to) {
        echo 'Отправка письма ' . $to;

        $transport = (new \Swift_SmtpTransport('smtp.ethereal.email', 587, 'tls'))
            ->setUsername('p4zqg56o6xy6kqeq@ethereal.email')
            ->setPassword('CkAHFeBa8d1ktqHwtZ');


        // Create the Mailer using your created Transport
        $mailer = new \Swift_Mailer($transport);

        // Create a message
        $message = (new \Swift_Message('Тема'))
            ->setFrom(['john@doe.com' => 'John Doe'])
            ->setTo($to)
            ->setBody('Сообщение из РНР')
        ;

        // Send the message
        $result = $mailer->send($message);
    }

}