<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230420030314 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE appointment DROP FOREIGN KEY FK_FE38F844A76ED395');
        $this->addSql('ALTER TABLE documentexpedition DROP FOREIGN KEY FK_4B2DA2224D268D70');
        $this->addSql('DROP TABLE appointment');
        $this->addSql('DROP TABLE colisr');
        $this->addSql('DROP TABLE documentexpedition');
        $this->addSql('ALTER TABLE annonces ADD id_colis_id INT NOT NULL');
        $this->addSql('ALTER TABLE annonces ADD CONSTRAINT FK_CB988C6F1DFD61E5 FOREIGN KEY (id_colis_id) REFERENCES colis (id)');
        $this->addSql('CREATE INDEX IDX_CB988C6F1DFD61E5 ON annonces (id_colis_id)');
        $this->addSql('ALTER TABLE reservation MODIFY idRes INT NOT NULL');
        $this->addSql('DROP INDEX fkvr ON reservation');
        $this->addSql('DROP INDEX fkrt ON reservation');
        $this->addSql('DROP INDEX `primary` ON reservation');
        $this->addSql('ALTER TABLE reservation ADD idre_id INT NOT NULL, DROP idV, DROP id_trans_id, CHANGE idRes id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849556CD33B8 FOREIGN KEY (idre_id) REFERENCES `vehicule` (id)');
        $this->addSql('CREATE INDEX IDX_42C849556CD33B8 ON reservation (idre_id)');
        $this->addSql('ALTER TABLE reservation ADD PRIMARY KEY (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE appointment (id INT AUTO_INCREMENT NOT NULL, user_id INT DEFAULT NULL, date DATETIME NOT NULL, INDEX IDX_FE38F844A76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE colisr (id VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('CREATE TABLE documentexpedition (id INT AUTO_INCREMENT NOT NULL, colis_id INT NOT NULL, datesignature DATE NOT NULL, statut VARCHAR(50) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, description VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, UNIQUE INDEX UNIQ_4B2DA2224D268D70 (colis_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE appointment ADD CONSTRAINT FK_FE38F844A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE documentexpedition ADD CONSTRAINT FK_4B2DA2224D268D70 FOREIGN KEY (colis_id) REFERENCES colis (id)');
        $this->addSql('ALTER TABLE `annonces` DROP FOREIGN KEY FK_CB988C6F1DFD61E5');
        $this->addSql('DROP INDEX IDX_CB988C6F1DFD61E5 ON `annonces`');
        $this->addSql('ALTER TABLE `annonces` DROP id_colis_id');
        $this->addSql('ALTER TABLE reservation MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C849556CD33B8');
        $this->addSql('DROP INDEX IDX_42C849556CD33B8 ON reservation');
        $this->addSql('DROP INDEX `PRIMARY` ON reservation');
        $this->addSql('ALTER TABLE reservation ADD id_trans_id INT NOT NULL, CHANGE id idRes INT AUTO_INCREMENT NOT NULL, CHANGE idre_id idV INT NOT NULL');
        $this->addSql('CREATE INDEX fkvr ON reservation (idV)');
        $this->addSql('CREATE INDEX fkrt ON reservation (id_trans_id)');
        $this->addSql('ALTER TABLE reservation ADD PRIMARY KEY (idRes)');
    }
}
