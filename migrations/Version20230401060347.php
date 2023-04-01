<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230401060347 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE colisr DROP FOREIGN KEY fk_c1');
        $this->addSql('ALTER TABLE colisr DROP FOREIGN KEY fk_user');
        $this->addSql('ALTER TABLE competition DROP FOREIGN KEY c_iduc');
        $this->addSql('ALTER TABLE evaluation DROP FOREIGN KEY fk_ev');
        $this->addSql('ALTER TABLE gifts DROP FOREIGN KEY Fk_CG');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY reservation_ibfk_1');
        $this->addSql('DROP TABLE colisr');
        $this->addSql('DROP TABLE competition');
        $this->addSql('DROP TABLE documentexpedition');
        $this->addSql('DROP TABLE evaluation');
        $this->addSql('DROP TABLE gifts');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE reactions');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('ALTER TABLE annonces DROP FOREIGN KEY annonces_ibfk_1');
        $this->addSql('ALTER TABLE annonces DROP FOREIGN KEY fc_j');
        $this->addSql('ALTER TABLE annonces DROP FOREIGN KEY annonces_ibfk_1');
        $this->addSql('ALTER TABLE annonces DROP FOREIGN KEY fc_j');
        $this->addSql('ALTER TABLE annonces ADD CONSTRAINT FK_CB988C6F8973C782 FOREIGN KEY (ida_U) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE annonces ADD CONSTRAINT FK_CB988C6F50CF9CE4 FOREIGN KEY (idColis) REFERENCES `colis` (id)');
        $this->addSql('DROP INDEX c_idua ON annonces');
        $this->addSql('CREATE INDEX IDX_CB988C6F8973C782 ON annonces (ida_U)');
        $this->addSql('DROP INDEX c_idcolis ON annonces');
        $this->addSql('CREATE INDEX IDX_CB988C6F50CF9CE4 ON annonces (idColis)');
        $this->addSql('ALTER TABLE annonces ADD CONSTRAINT annonces_ibfk_1 FOREIGN KEY (idColis) REFERENCES colis (idColis)');
        $this->addSql('ALTER TABLE annonces ADD CONSTRAINT fc_j FOREIGN KEY (ida_U) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE colis MODIFY idColis INT NOT NULL');
        $this->addSql('ALTER TABLE colis DROP FOREIGN KEY c_idu');
        $this->addSql('DROP INDEX c_idu ON colis');
        $this->addSql('DROP INDEX `primary` ON colis');
        $this->addSql('ALTER TABLE colis ADD id_u  INT NOT NULL, DROP id_u, CHANGE idColis id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE colis ADD CONSTRAINT FK_470BDFF9E8824683 FOREIGN KEY (id_u ) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_470BDFF9E8824683 ON colis (id_u )');
        $this->addSql('ALTER TABLE colis ADD PRIMARY KEY (id)');
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
        $this->addSql('CREATE TABLE colisr (id INT AUTO_INCREMENT NOT NULL, id_c INT NOT NULL, id_u INT NOT NULL, INDEX fk_user (id_u), INDEX fk_c1 (id_c), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE competition (id INT AUTO_INCREMENT NOT NULL, id_uc INT NOT NULL, title VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, date_deb DATE NOT NULL, date_fin DATE NOT NULL, type INT NOT NULL, nbp INT NOT NULL, INDEX c_iduc (id_uc), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE documentexpedition (id INT AUTO_INCREMENT NOT NULL, dateSignature DATE NOT NULL, colis_id INT NOT NULL, statut VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, INDEX colis_id (colis_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE evaluation (id INT AUTO_INCREMENT NOT NULL, idClient INT NOT NULL, idTransporteur INT NOT NULL, note DOUBLE PRECISION NOT NULL, INDEX fk_ev (idClient), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE gifts (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, description VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, value VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, idC INT NOT NULL, photo VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX Fk_CG (idC), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, senderId INT NOT NULL, receiverId INT NOT NULL, content VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, timestamp DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reactions (id INT AUTO_INCREMENT NOT NULL, id_a INT NOT NULL, id_u INT NOT NULL, id_c INT NOT NULL, INDEX fk_a (id_a), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reservation (idRes INT AUTO_INCREMENT NOT NULL, idVeh INT NOT NULL, idTrans INT NOT NULL, date_deb DATE NOT NULL, date_fin DATE NOT NULL, somme DOUBLE PRECISION NOT NULL, etat VARCHAR(30) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX fk_RV (idVeh), INDEX idTrans (idTrans), PRIMARY KEY(idRes)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE colisr ADD CONSTRAINT fk_c1 FOREIGN KEY (id_c) REFERENCES colis (idColis) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE colisr ADD CONSTRAINT fk_user FOREIGN KEY (id_u) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE competition ADD CONSTRAINT c_iduc FOREIGN KEY (id_uc) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE evaluation ADD CONSTRAINT fk_ev FOREIGN KEY (idClient) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE gifts ADD CONSTRAINT Fk_CG FOREIGN KEY (idC) REFERENCES competition (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT reservation_ibfk_1 FOREIGN KEY (idTrans) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE `annonces` DROP FOREIGN KEY FK_CB988C6F8973C782');
        $this->addSql('ALTER TABLE `annonces` DROP FOREIGN KEY FK_CB988C6F50CF9CE4');
        $this->addSql('ALTER TABLE `annonces` DROP FOREIGN KEY FK_CB988C6F8973C782');
        $this->addSql('ALTER TABLE `annonces` DROP FOREIGN KEY FK_CB988C6F50CF9CE4');
        $this->addSql('ALTER TABLE `annonces` ADD CONSTRAINT annonces_ibfk_1 FOREIGN KEY (idColis) REFERENCES colis (idColis)');
        $this->addSql('ALTER TABLE `annonces` ADD CONSTRAINT fc_j FOREIGN KEY (ida_U) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_cb988c6f8973c782 ON `annonces`');
        $this->addSql('CREATE INDEX c_idua ON `annonces` (ida_U)');
        $this->addSql('DROP INDEX idx_cb988c6f50cf9ce4 ON `annonces`');
        $this->addSql('CREATE INDEX c_idcolis ON `annonces` (idColis)');
        $this->addSql('ALTER TABLE `annonces` ADD CONSTRAINT FK_CB988C6F8973C782 FOREIGN KEY (ida_U) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE `annonces` ADD CONSTRAINT FK_CB988C6F50CF9CE4 FOREIGN KEY (idColis) REFERENCES `colis` (id)');
        $this->addSql('ALTER TABLE `colis` MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE `colis` DROP FOREIGN KEY FK_470BDFF9E8824683');
        $this->addSql('DROP INDEX IDX_470BDFF9E8824683 ON `colis`');
        $this->addSql('DROP INDEX `PRIMARY` ON `colis`');
        $this->addSql('ALTER TABLE `colis` ADD id_u INT DEFAULT NULL, DROP id_u , CHANGE id idColis INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE `colis` ADD CONSTRAINT c_idu FOREIGN KEY (id_u) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE INDEX c_idu ON `colis` (id_u)');
        $this->addSql('ALTER TABLE `colis` ADD PRIMARY KEY (idColis)');
        $this->addSql('ALTER TABLE `validation` DROP FOREIGN KEY FK_16AC5B6E99B902AD');
        $this->addSql('ALTER TABLE `validation` DROP FOREIGN KEY FK_16AC5B6E99B902AD');
        $this->addSql('ALTER TABLE `validation` ADD CONSTRAINT C_idim FOREIGN KEY (idu) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_16ac5b6e99b902ad ON `validation`');
        $this->addSql('CREATE INDEX C_idim ON `validation` (idu)');
        $this->addSql('ALTER TABLE `validation` ADD CONSTRAINT FK_16AC5B6E99B902AD FOREIGN KEY (idu) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE `vehicule` CHANGE kilometrage kilometrage VARCHAR(10) NOT NULL');
    }
}
