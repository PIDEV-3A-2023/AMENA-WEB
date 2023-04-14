<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230413111932 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE colisr');
        $this->addSql('DROP TABLE competition');
        $this->addSql('DROP TABLE documentexpedition');
        $this->addSql('DROP TABLE evaluation');
        $this->addSql('DROP TABLE gifts');
        $this->addSql('DROP TABLE idu');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE reactions');
        $this->addSql('ALTER TABLE annonces CHANGE type type VARCHAR(255) NOT NULL, CHANGE ville_dep ville_dep VARCHAR(255) NOT NULL, CHANGE ville_arr ville_arr VARCHAR(255) NOT NULL, CHANGE date_dep date_dep VARCHAR(255) NOT NULL, CHANGE date_arr date_arr VARCHAR(255) NOT NULL, CHANGE description description VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE annonces ADD CONSTRAINT FK_CB988C6F8973C782 FOREIGN KEY (ida_U) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE annonces ADD CONSTRAINT FK_CB988C6F1DFD61E5 FOREIGN KEY (id_colis_id) REFERENCES `colis` (id)');
        $this->addSql('DROP INDEX c_idua ON annonces');
        $this->addSql('CREATE INDEX IDX_CB988C6F8973C782 ON annonces (ida_U)');
        $this->addSql('DROP INDEX c_idcolis ON annonces');
        $this->addSql('CREATE INDEX IDX_CB988C6F1DFD61E5 ON annonces (id_colis_id)');
        $this->addSql('ALTER TABLE colis DROP FOREIGN KEY c_idu');
        $this->addSql('DROP INDEX c_idu ON colis');
        $this->addSql('ALTER TABLE colis ADD id_u  INT NOT NULL, DROP id_u');
        $this->addSql('ALTER TABLE colis ADD CONSTRAINT FK_470BDFF9E8824683 FOREIGN KEY (id_u ) REFERENCES `user` (id)');
        $this->addSql('CREATE INDEX IDX_470BDFF9E8824683 ON colis (id_u )');
        $this->addSql('DROP INDEX fk_RV ON reservation');
        $this->addSql('DROP INDEX idTrans ON reservation');
        $this->addSql('ALTER TABLE reservation ADD idre_id INT NOT NULL, DROP idVeh, DROP idTrans, CHANGE id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849556CD33B8 FOREIGN KEY (idre_id) REFERENCES `vehicule` (id)');
        $this->addSql('CREATE INDEX IDX_42C849556CD33B8 ON reservation (idre_id)');
        $this->addSql('ALTER TABLE user CHANGE prenom prenom VARCHAR(255) DEFAULT NULL, CHANGE dateNaissance dateNaissance DATE DEFAULT NULL, CHANGE dateCreationC dateCreationC DATE DEFAULT NULL, CHANGE motPass motPass VARCHAR(255) DEFAULT NULL, CHANGE score score VARCHAR(8) NOT NULL');
        $this->addSql('ALTER TABLE validation DROP FOREIGN KEY C_idim');
        $this->addSql('ALTER TABLE validation DROP FOREIGN KEY C_idim');
        $this->addSql('ALTER TABLE validation ADD CONSTRAINT FK_16AC5B6E99B902AD FOREIGN KEY (idu) REFERENCES `user` (id)');
        $this->addSql('DROP INDEX c_idim ON validation');
        $this->addSql('CREATE INDEX IDX_16AC5B6E99B902AD ON validation (idu)');
        $this->addSql('ALTER TABLE validation ADD CONSTRAINT C_idim FOREIGN KEY (idu) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE vehicule CHANGE kilometrage kilometrage VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE id id BIGINT AUTO_INCREMENT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE colisr (id INT NOT NULL, id_c INT NOT NULL, id_u INT NOT NULL, INDEX fk_c1 (id_c), INDEX fk_user (id_u), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE competition (id INT NOT NULL, title VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, date_deb DATE NOT NULL, date_fin DATE NOT NULL, type INT NOT NULL, nbp INT NOT NULL, id_uc INT NOT NULL, INDEX c_iduc (id_uc), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE documentexpedition (id INT NOT NULL, dateSignature DATE NOT NULL, colis_id INT NOT NULL, statut VARCHAR(255) CHARACTER SET latin1 NOT NULL COLLATE `latin1_swedish_ci`, INDEX colis_id (colis_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE `latin1_swedish_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE evaluation (id INT NOT NULL, idClient INT NOT NULL, idTransporteur INT NOT NULL, note DOUBLE PRECISION NOT NULL, INDEX fk_ev (idClient), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE gifts (id INT NOT NULL, name VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, description VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, value VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, idC INT NOT NULL, photo VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, INDEX Fk_CG (idC), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE idu (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE message (id INT NOT NULL, senderId INT NOT NULL, receiverId INT NOT NULL, content VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_general_ci`, timestamp DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE reactions (id INT NOT NULL, id_a INT NOT NULL, id_u INT NOT NULL, id_c INT NOT NULL, INDEX fk_a (id_a), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE `annonces` DROP FOREIGN KEY FK_CB988C6F8973C782');
        $this->addSql('ALTER TABLE `annonces` DROP FOREIGN KEY FK_CB988C6F1DFD61E5');
        $this->addSql('ALTER TABLE `annonces` DROP FOREIGN KEY FK_CB988C6F8973C782');
        $this->addSql('ALTER TABLE `annonces` DROP FOREIGN KEY FK_CB988C6F1DFD61E5');
        $this->addSql('ALTER TABLE `annonces` CHANGE type type VARCHAR(20) NOT NULL, CHANGE ville_dep ville_dep VARCHAR(20) NOT NULL, CHANGE ville_arr ville_arr VARCHAR(20) NOT NULL, CHANGE date_dep date_dep VARCHAR(20) NOT NULL, CHANGE date_arr date_arr VARCHAR(20) NOT NULL, CHANGE description description VARCHAR(100) NOT NULL');
        $this->addSql('DROP INDEX idx_cb988c6f8973c782 ON `annonces`');
        $this->addSql('CREATE INDEX c_idua ON `annonces` (ida_U)');
        $this->addSql('DROP INDEX idx_cb988c6f1dfd61e5 ON `annonces`');
        $this->addSql('CREATE INDEX c_idcolis ON `annonces` (id_colis_id)');
        $this->addSql('ALTER TABLE `annonces` ADD CONSTRAINT FK_CB988C6F8973C782 FOREIGN KEY (ida_U) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE `annonces` ADD CONSTRAINT FK_CB988C6F1DFD61E5 FOREIGN KEY (id_colis_id) REFERENCES `colis` (id)');
        $this->addSql('ALTER TABLE `colis` DROP FOREIGN KEY FK_470BDFF9E8824683');
        $this->addSql('DROP INDEX IDX_470BDFF9E8824683 ON `colis`');
        $this->addSql('ALTER TABLE `colis` ADD id_u INT DEFAULT NULL, DROP id_u ');
        $this->addSql('ALTER TABLE `colis` ADD CONSTRAINT c_idu FOREIGN KEY (id_u) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE INDEX c_idu ON `colis` (id_u)');
        $this->addSql('ALTER TABLE messenger_messages CHANGE id id BIGINT NOT NULL');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849556CD33B8');
        $this->addSql('DROP INDEX IDX_42C849556CD33B8 ON reservation');
        $this->addSql('ALTER TABLE reservation ADD idTrans INT NOT NULL, CHANGE id id INT NOT NULL, CHANGE idre_id idVeh INT NOT NULL');
        $this->addSql('CREATE INDEX fk_RV ON reservation (idVeh)');
        $this->addSql('CREATE INDEX idTrans ON reservation (idTrans)');
        $this->addSql('ALTER TABLE `user` CHANGE prenom prenom VARCHAR(255) NOT NULL, CHANGE dateNaissance dateNaissance DATE NOT NULL, CHANGE dateCreationC dateCreationC DATE NOT NULL, CHANGE motPass motPass VARCHAR(255) NOT NULL, CHANGE score score VARCHAR(8) DEFAULT NULL');
        $this->addSql('ALTER TABLE `validation` DROP FOREIGN KEY FK_16AC5B6E99B902AD');
        $this->addSql('ALTER TABLE `validation` DROP FOREIGN KEY FK_16AC5B6E99B902AD');
        $this->addSql('ALTER TABLE `validation` ADD CONSTRAINT C_idim FOREIGN KEY (idu) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('DROP INDEX idx_16ac5b6e99b902ad ON `validation`');
        $this->addSql('CREATE INDEX C_idim ON `validation` (idu)');
        $this->addSql('ALTER TABLE `validation` ADD CONSTRAINT FK_16AC5B6E99B902AD FOREIGN KEY (idu) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE `vehicule` CHANGE kilometrage kilometrage VARCHAR(10) NOT NULL');
    }
}
