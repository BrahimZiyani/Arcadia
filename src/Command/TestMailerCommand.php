<?php
namespace App\Command;

use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mailer\Exception\TransportExceptionInterface;

#[AsCommand(name: 'app:test-mailer')]
class TestMailerCommand extends Command
{
    private MailerInterface $mailer;

    public function __construct(MailerInterface $mailer)
    {
        parent::__construct();
        $this->mailer = $mailer;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        try {
            $email = (new Email())
                ->from('arcadia.zooapp@gmail.com') // Adresse validée sur SendGrid
                ->to('arcadia.zooapp@gmail.com')   // Adresse de réception
                ->subject('Test d\'envoi d\'e-mail')
                ->text('Ceci est un test depuis la commande Symfony.');

            $this->mailer->send($email);
            $output->writeln('<info>E-mail envoyé avec succès !</info>');

            return Command::SUCCESS;
        } catch (TransportExceptionInterface $e) {
            $output->writeln('<error>Erreur d\'envoi : ' . $e->getMessage() . '</error>');
            return Command::FAILURE;
        }
    }
}
