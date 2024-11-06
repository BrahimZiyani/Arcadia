<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241105154443 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis ADD date_visite DATE NOT NULL, DROP statut, CHANGE pseudo prenom VARCHAR(255) NOT NULL, CHANGE texte contenu LONGTEXT NOT NULL, CHANGE is_valid valide TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis ADD statut VARCHAR(50) NOT NULL, DROP date_visite, CHANGE prenom pseudo VARCHAR(255) NOT NULL, CHANGE contenu texte LONGTEXT NOT NULL, CHANGE valide is_valid TINYINT(1) NOT NULL');
    }
}
