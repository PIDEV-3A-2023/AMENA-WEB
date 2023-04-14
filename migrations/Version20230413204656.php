<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230413204656 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE Competition (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(100) NOT NULL, date_deb DATETIME NOT NULL, date_fin DATETIME NOT NULL, type INT NOT NULL, nbp INT DEFAULT NULL, id_uc INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Gifts (id INT AUTO_INCREMENT NOT NULL, id_c_id INT DEFAULT NULL, name VARCHAR(100) NOT NULL, description VARCHAR(100) NOT NULL, value VARCHAR(100) NOT NULL, photo VARCHAR(100) NOT NULL, INDEX IDX_A4DAE02B1AF787D1 (id_c_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `reservation` (idRes INT AUTO_INCREMENT NOT NULL, date_deb DATE NOT NULL, date_fin DATE NOT NULL, somme DOUBLE PRECISION NOT NULL, etat VARCHAR(30) NOT NULL, idV INT NOT NULL, INDEX IDX_42C849553BDE73DF (idV), PRIMARY KEY(idRes)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE `vehicule` (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(30) NOT NULL, immat VARCHAR(30) NOT NULL, etat INT NOT NULL, kilometrage VARCHAR(30) NOT NULL, chevaux INT NOT NULL, marque VARCHAR(30) NOT NULL, modele VARCHAR(30) NOT NULL, couleur VARCHAR(15) NOT NULL, prix DOUBLE PRECISION NOT NULL, img VARCHAR(150) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Gifts ADD CONSTRAINT FK_A4DAE02B1AF787D1 FOREIGN KEY (id_c_id) REFERENCES Competition (id)');
        $this->addSql('ALTER TABLE `reservation` ADD CONSTRAINT FK_42C849553BDE73DF FOREIGN KEY (idV) REFERENCES `vehicule` (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Gifts DROP FOREIGN KEY FK_A4DAE02B1AF787D1');
        $this->addSql('ALTER TABLE `reservation` DROP FOREIGN KEY FK_42C849553BDE73DF');
        $this->addSql('DROP TABLE Competition');
        $this->addSql('DROP TABLE Gifts');
        $this->addSql('DROP TABLE `reservation`');
        $this->addSql('DROP TABLE `vehicule`');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
