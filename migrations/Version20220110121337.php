<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220110121337 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE surgery_notification ADD fk_id_user_id INT NOT NULL');
        $this->addSql('ALTER TABLE surgery_notification ADD CONSTRAINT FK_F5B15035899DB076 FOREIGN KEY (fk_id_user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_F5B15035899DB076 ON surgery_notification (fk_id_user_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE surgery_notification DROP FOREIGN KEY FK_F5B15035899DB076');
        $this->addSql('DROP INDEX IDX_F5B15035899DB076 ON surgery_notification');
        $this->addSql('ALTER TABLE surgery_notification DROP fk_id_user_id');
    }
}
