<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230404183931 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE annonces MODIFY id_annonce INT NOT NULL');
        $this->addSql('DROP INDEX c_idcolis ON annonces');
        $this->addSql('DROP INDEX `primary` ON annonces');
        $this->addSql('ALTER TABLE annonces CHANGE type type VARCHAR(255) NOT NULL, CHANGE ville_dep ville_dep VARCHAR(255) NOT NULL, CHANGE ville_arr ville_arr VARCHAR(255) NOT NULL, CHANGE date_dep date_dep VARCHAR(255) NOT NULL, CHANGE date_arr date_arr VARCHAR(255) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL, CHANGE id_annonce id_annonce  INT AUTO_INCREMENT NOT NULL, CHANGE idcolis idcolis  INT NOT NULL');
        $this->addSql('ALTER TABLE annonces ADD CONSTRAINT FK_CB988C6F8973C782 FOREIGN KEY (ida_U) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE annonces ADD CONSTRAINT FK_CB988C6F49F7238E FOREIGN KEY (idcolis ) REFERENCES `colis` (id)');
        $this->addSql('CREATE INDEX IDX_CB988C6F49F7238E ON annonces (idcolis )');
        $this->addSql('ALTER TABLE annonces ADD PRIMARY KEY (id_annonce )');
        $this->addSql('DROP INDEX c_idua ON annonces');
        $this->addSql('CREATE INDEX IDX_CB988C6F8973C782 ON annonces (ida_U)');
        $this->addSql('ALTER TABLE colis DROP FOREIGN KEY c_idu');
        $this->addSql('DROP INDEX c_idu ON colis');
        $this->addSql('ALTER TABLE colis ADD id_u  INT NOT NULL, DROP id_u');
        $this->addSql('ALTER TABLE colis ADD CONSTRAINT FK_470BDFF9E8824683 FOREIGN KEY (id_u ) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_470BDFF9E8824683 ON colis (id_u )');
        $this->addSql('ALTER TABLE validation DROP FOREIGN KEY C_idim');
        $this->addSql('ALTER TABLE validation DROP FOREIGN KEY C_idim');
        $this->addSql('ALTER TABLE validation ADD CONSTRAINT FK_16AC5B6E99B902AD FOREIGN KEY (idu) REFERENCES `user` (id)');
        $this->addSql('DROP INDEX c_idim ON validation');
        $this->addSql('CREATE INDEX IDX_16AC5B6E99B902AD ON validation (idu)');
        $this->addSql('ALTER TABLE validation ADD CONSTRAINT C_idim FOREIGN KEY (idu) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vehicule CHANGE kilometrage kilometrage VARCHAR(30) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `annonces` MODIFY id_annonce  INT NOT NULL');
        $this->addSql('ALTER TABLE `annonces` DROP FOREIGN KEY FK_CB988C6F8973C782');
        $this->addSql('ALTER TABLE `annonces` DROP FOREIGN KEY FK_CB988C6F49F7238E');
        $this->addSql('DROP INDEX IDX_CB988C6F49F7238E ON `annonces`');
        $this->addSql('DROP INDEX `PRIMARY` ON `annonces`');
        $this->addSql('ALTER TABLE `annonces` DROP FOREIGN KEY FK_CB988C6F8973C782');
        $this->addSql('ALTER TABLE `annonces` CHANGE type type VARCHAR(20) NOT NULL, CHANGE ville_dep ville_dep VARCHAR(20) NOT NULL, CHANGE ville_arr ville_arr VARCHAR(20) NOT NULL, CHANGE date_dep date_dep VARCHAR(20) NOT NULL, CHANGE date_arr date_arr VARCHAR(20) NOT NULL, CHANGE description description VARCHAR(100) NOT NULL, CHANGE id_annonce  id_annonce INT AUTO_INCREMENT NOT NULL, CHANGE idcolis  idcolis INT NOT NULL');
        $this->addSql('CREATE INDEX c_idcolis ON `annonces` (idcolis)');
        $this->addSql('ALTER TABLE `annonces` ADD PRIMARY KEY (id_annonce)');
        $this->addSql('DROP INDEX idx_cb988c6f8973c782 ON `annonces`');
        $this->addSql('CREATE INDEX c_idua ON `annonces` (ida_U)');
        $this->addSql('ALTER TABLE `annonces` ADD CONSTRAINT FK_CB988C6F8973C782 FOREIGN KEY (ida_U) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE `colis` DROP FOREIGN KEY FK_470BDFF9E8824683');
        $this->addSql('DROP INDEX IDX_470BDFF9E8824683 ON `colis`');
        $this->addSql('ALTER TABLE `colis` ADD id_u INT DEFAULT NULL, DROP id_u ');
        $this->addSql('ALTER TABLE `colis` ADD CONSTRAINT c_idu FOREIGN KEY (id_u) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE INDEX c_idu ON `colis` (id_u)');
        $this->addSql('ALTER TABLE `validation` DROP FOREIGN KEY FK_16AC5B6E99B902AD');
        $this->addSql('ALTER TABLE `validation` DROP FOREIGN KEY FK_16AC5B6E99B902AD');
        $this->addSql('ALTER TABLE `validation` ADD CONSTRAINT C_idim FOREIGN KEY (idu) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_16ac5b6e99b902ad ON `validation`');
        $this->addSql('CREATE INDEX C_idim ON `validation` (idu)');
        $this->addSql('ALTER TABLE `validation` ADD CONSTRAINT FK_16AC5B6E99B902AD FOREIGN KEY (idu) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE `vehicule` CHANGE kilometrage kilometrage VARCHAR(10) NOT NULL');
    }
}
