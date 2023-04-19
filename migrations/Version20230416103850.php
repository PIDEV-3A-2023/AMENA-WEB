<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230416103850 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
      
       
    
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
       
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FE9A89CDD');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FF0D67FFD');
        $this->addSql('DROP INDEX IDX_B6BD307FE9A89CDD ON message');
        $this->addSql('DROP INDEX IDX_B6BD307FF0D67FFD ON message');
    
        $this->addSql('DROP INDEX IDX_16AC5B6E99B902AD ON `validation`');
  
    }
}
