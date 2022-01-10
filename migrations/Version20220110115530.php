<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220110115530 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE availability CHANGE start_date start_date DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', CHANGE end_date end_date DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE contact ADD subject VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE surgery_notification ADD clinic_name VARCHAR(255) NOT NULL, ADD clinic_zip_code INT NOT NULL');
        $this->addSql('ALTER TABLE user CHANGE fk_role_id fk_role_id INT NOT NULL, CHANGE rpps rpps INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE availability CHANGE start_date start_date DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', CHANGE end_date end_date DATE DEFAULT NULL COMMENT \'(DC2Type:date_immutable)\'');
        $this->addSql('ALTER TABLE contact DROP subject');
        $this->addSql('ALTER TABLE surgery_notification DROP clinic_name, DROP clinic_zip_code');
        $this->addSql('ALTER TABLE user CHANGE fk_role_id fk_role_id INT DEFAULT NULL, CHANGE rpps rpps INT DEFAULT NULL');
    }
}
