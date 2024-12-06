<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241203234730 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE animal (id INT GENERATED BY DEFAULT AS IDENTITY NOT NULL, nom VARCHAR(255) NOT NULL, race VARCHAR(255) NOT NULL, images JSON NOT NULL, etat_de_sante TEXT NOT NULL, alimentation TEXT NOT NULL, visites INT DEFAULT 0 NOT NULL, habitat_id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_6AAB231FAFFE2D26 ON animal (habitat_id)');
        $this->addSql('CREATE TABLE animal_feeding (id INT GENERATED BY DEFAULT AS IDENTITY NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE avis (id INT GENERATED BY DEFAULT AS IDENTITY NOT NULL, prenom VARCHAR(255) NOT NULL, date_visite DATE NOT NULL, contenu TEXT NOT NULL, valide BOOLEAN NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE compte_rendu (id INT GENERATED BY DEFAULT AS IDENTITY NOT NULL, date DATE NOT NULL, etat TEXT NOT NULL, details TEXT DEFAULT NULL, animal_id INT NOT NULL, utilisateur_id INT NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_D39E69D28E962C16 ON compte_rendu (animal_id)');
        $this->addSql('CREATE INDEX IDX_D39E69D2FB88E14F ON compte_rendu (utilisateur_id)');
        $this->addSql('CREATE TABLE habitat (id INT GENERATED BY DEFAULT AS IDENTITY NOT NULL, nom VARCHAR(255) NOT NULL, description TEXT NOT NULL, images JSON NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE schedule (id INT GENERATED BY DEFAULT AS IDENTITY NOT NULL, event VARCHAR(255) NOT NULL, date TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, description VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE service (id INT GENERATED BY DEFAULT AS IDENTITY NOT NULL, nom VARCHAR(255) NOT NULL, description TEXT NOT NULL, images JSON NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE TABLE users (id INT GENERATED BY DEFAULT AS IDENTITY NOT NULL, email VARCHAR(180) NOT NULL, nom VARCHAR(100) NOT NULL, prenom VARCHAR(100) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_IDENTIFIER_EMAIL ON users (email)');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT GENERATED BY DEFAULT AS IDENTITY NOT NULL, body TEXT NOT NULL, headers TEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, available_at TIMESTAMP(0) WITHOUT TIME ZONE NOT NULL, delivered_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('CREATE INDEX IDX_75EA56E0FB7336F0 ON messenger_messages (queue_name)');
        $this->addSql('CREATE INDEX IDX_75EA56E0E3BD61CE ON messenger_messages (available_at)');
        $this->addSql('CREATE INDEX IDX_75EA56E016BA31DB ON messenger_messages (delivered_at)');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231FAFFE2D26 FOREIGN KEY (habitat_id) REFERENCES habitat (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE compte_rendu ADD CONSTRAINT FK_D39E69D28E962C16 FOREIGN KEY (animal_id) REFERENCES animal (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
        $this->addSql('ALTER TABLE compte_rendu ADD CONSTRAINT FK_D39E69D2FB88E14F FOREIGN KEY (utilisateur_id) REFERENCES users (id) NOT DEFERRABLE INITIALLY IMMEDIATE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('ALTER TABLE animal DROP CONSTRAINT FK_6AAB231FAFFE2D26');
        $this->addSql('ALTER TABLE compte_rendu DROP CONSTRAINT FK_D39E69D28E962C16');
        $this->addSql('ALTER TABLE compte_rendu DROP CONSTRAINT FK_D39E69D2FB88E14F');
        $this->addSql('DROP TABLE animal');
        $this->addSql('DROP TABLE animal_feeding');
        $this->addSql('DROP TABLE avis');
        $this->addSql('DROP TABLE compte_rendu');
        $this->addSql('DROP TABLE habitat');
        $this->addSql('DROP TABLE schedule');
        $this->addSql('DROP TABLE service');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE messenger_messages');
    }
}