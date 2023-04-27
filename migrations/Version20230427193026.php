<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230427193026 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE competition CHANGE title title VARCHAR(150) NOT NULL');
        $this->addSql('ALTER TABLE gifts ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE gifts ADD CONSTRAINT FK_A4DAE02BA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_A4DAE02BA76ED395 ON gifts (user_id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849553BDE73DF FOREIGN KEY (idV) REFERENCES `vehicule` (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495563346B17 FOREIGN KEY (id_trans_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_42C849553BDE73DF ON reservation (idV)');
        $this->addSql('CREATE INDEX IDX_42C8495563346B17 ON reservation (id_trans_id)');
        $this->addSql('ALTER TABLE reset_password_request CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE user CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE validation CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE validation ADD CONSTRAINT FK_16AC5B6E99B902AD FOREIGN KEY (idu) REFERENCES user (id)');
        $this->addSql('ALTER TABLE vehicule CHANGE etat etat INT NOT NULL, CHANGE couleur lpec VARCHAR(15) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Competition CHANGE title title VARCHAR(100) NOT NULL');
        $this->addSql('ALTER TABLE Gifts DROP FOREIGN KEY FK_A4DAE02BA76ED395');
        $this->addSql('DROP INDEX IDX_A4DAE02BA76ED395 ON Gifts');
        $this->addSql('ALTER TABLE Gifts DROP user_id');
        $this->addSql('ALTER TABLE `reservation` DROP FOREIGN KEY FK_42C849553BDE73DF');
        $this->addSql('ALTER TABLE `reservation` DROP FOREIGN KEY FK_42C8495563346B17');
        $this->addSql('DROP INDEX IDX_42C849553BDE73DF ON `reservation`');
        $this->addSql('DROP INDEX IDX_42C8495563346B17 ON `reservation`');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE reset_password_request CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE `validation` DROP FOREIGN KEY FK_16AC5B6E99B902AD');
        $this->addSql('ALTER TABLE `validation` CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE `vehicule` CHANGE etat etat TINYINT(1) NOT NULL, CHANGE lpec couleur VARCHAR(15) NOT NULL');
    }
}
