<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230407020427 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservation ADD idV INT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C849553BDE73DF FOREIGN KEY (idV) REFERENCES `vehicule` (id)');
        $this->addSql('CREATE INDEX IDX_42C849553BDE73DF ON reservation (idV)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE `reservation` DROP FOREIGN KEY FK_42C849553BDE73DF');
        $this->addSql('DROP INDEX IDX_42C849553BDE73DF ON `reservation`');
        $this->addSql('ALTER TABLE `reservation` DROP idV');
    }
}
