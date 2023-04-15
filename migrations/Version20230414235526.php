<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230414235526 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
      
    

   
    
  
       
        $this->addSql('ALTER TABLE validation DROP FOREIGN KEY C_idim');
  
        $this->addSql('ALTER TABLE validation DROP idu');
        $this->addSql('ALTER TABLE vehicule CHANGE kilometrage kilometrage VARCHAR(30) NOT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE id id BIGINT AUTO_INCREMENT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
      
    
        $this->addSql('ALTER TABLE message ADD senderId INT NOT NULL, ADD receiverId INT NOT NULL');
     
     
     
        $this->addSql('ALTER TABLE messenger_messages CHANGE id id BIGINT NOT NULL');
       
        $this->addSql('ALTER TABLE user DROP nom, DROP prenom, DROP adress, DROP cin, DROP date_naissance, DROP date_creation_c, DROP status, DROP token, DROP score, DROP numtel, DROP image, DROP compte_ex, DROP token_ex');
        $this->addSql('ALTER TABLE `validation` ADD idu INT NOT NULL');
        $this->addSql('ALTER TABLE `validation` ADD CONSTRAINT C_idim FOREIGN KEY (idu) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('CREATE INDEX C_idim ON `validation` (idu)');
        $this->addSql('ALTER TABLE `vehicule` CHANGE kilometrage kilometrage VARCHAR(10) NOT NULL');
    }
}
