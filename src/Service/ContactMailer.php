<?php

namespace App\Service;

use Symfony\Component\DependencyInjection\Attribute\Autowire;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Mime\Email;

class ContactMailer
{
    public function __construct(
        private readonly MailerInterface $mailer,
        #[Autowire('%env(default:default_contact_email:CONTACT_EMAIL)%')]
        private readonly string $recipient,
    ) {
    }

    public function send(string $name, string $email, string $message): void
    {
        $mail = (new Email())
            ->from(new Address($this->recipient, 'Site vitrine Alfred'))
            ->to($this->recipient)
            ->replyTo(new Address($email, $name))
            ->subject(sprintf('Nouveau message de %s', $name))
            ->text(sprintf("Nom : %s\nEmail : %s\n\n%s", $name, $email, $message));

        $this->mailer->send($mail);
    }
}
