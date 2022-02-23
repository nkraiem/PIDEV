<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220204221154 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE equipes (id_eq INT AUTO_INCREMENT NOT NULL, nom VARCHAR(300) NOT NULL, nbr_vic INT NOT NULL, nbr_per INT NOT NULL, nbr_null INT NOT NULL, PRIMARY KEY(id_eq)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE joueurs (id_j INT AUTO_INCREMENT NOT NULL, nom VARCHAR(20) NOT NULL, prenom VARCHAR(30) NOT NULL, email VARCHAR(60) NOT NULL, numero INT NOT NULL, nbr_partie_jouer INT NOT NULL, PRIMARY KEY(id_j)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE equipes');
        $this->addSql('DROP TABLE joueurs');
    }
}
