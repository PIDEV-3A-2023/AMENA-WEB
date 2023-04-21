<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230421190925 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE Competition (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(100) NOT NULL, date_deb DATE NOT NULL, date_fin DATE NOT NULL, type INT NOT NULL, nbp INT DEFAULT NULL, id_uc INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE Gifts (id INT AUTO_INCREMENT NOT NULL, id_c_id INT DEFAULT NULL, name VARCHAR(100) NOT NULL, description VARCHAR(100) NOT NULL, value VARCHAR(100) NOT NULL, photo VARCHAR(100) NOT NULL, INDEX IDX_A4DAE02B1AF787D1 (id_c_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE Gifts ADD CONSTRAINT FK_A4DAE02B1AF787D1 FOREIGN KEY (id_c_id) REFERENCES Competition (id)');
        $this->addSql('ALTER TABLE reservation CHANGE id_trans_id id_trans_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849553BDE73DF FOREIGN KEY (idV) REFERENCES `vehicule` (id)');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495563346B17 FOREIGN KEY (id_trans_id) REFERENCES user (id)');
        $this->addSql('DROP INDEX fkvr ON reservation');
        $this->addSql('CREATE INDEX IDX_42C849553BDE73DF ON reservation (idV)');
        $this->addSql('DROP INDEX fkrt ON reservation');
        $this->addSql('CREATE INDEX IDX_42C8495563346B17 ON reservation (id_trans_id)');
        $this->addSql('ALTER TABLE vehicule CHANGE etat etat INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Gifts DROP FOREIGN KEY FK_A4DAE02B1AF787D1');
        $this->addSql('DROP TABLE Competition');
        $this->addSql('DROP TABLE Gifts');
        $this->addSql('ALTER TABLE `reservation` DROP FOREIGN KEY FK_42C849553BDE73DF');
        $this->addSql('ALTER TABLE `reservation` DROP FOREIGN KEY FK_42C8495563346B17');
        $this->addSql('ALTER TABLE `reservation` DROP FOREIGN KEY FK_42C849553BDE73DF');
        $this->addSql('ALTER TABLE `reservation` DROP FOREIGN KEY FK_42C8495563346B17');
        $this->addSql('ALTER TABLE `reservation` CHANGE id_trans_id id_trans_id INT NOT NULL');
        $this->addSql('DROP INDEX idx_42c849553bde73df ON `reservation`');
        $this->addSql('CREATE INDEX fkvr ON `reservation` (idV)');
        $this->addSql('DROP INDEX idx_42c8495563346b17 ON `reservation`');
        $this->addSql('CREATE INDEX fkrt ON `reservation` (id_trans_id)');
        $this->addSql('ALTER TABLE `reservation` ADD CONSTRAINT FK_42C849553BDE73DF FOREIGN KEY (idV) REFERENCES `vehicule` (id)');
        $this->addSql('ALTER TABLE `reservation` ADD CONSTRAINT FK_42C8495563346B17 FOREIGN KEY (id_trans_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE `vehicule` CHANGE etat etat TINYINT(1) NOT NULL');
    }
}
