<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220104100113 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE availability (id INT AUTO_INCREMENT NOT NULL, start_date DATE NOT NULL COMMENT \'(DC2Type:date_immutable)\', end_date DATE DEFAULT NULL COMMENT \'(DC2Type:date_immutable)\', commute_distance INT DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE clinic (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, adress VARCHAR(500) NOT NULL, postal_code INT NOT NULL, city VARCHAR(255) NOT NULL, phone_number VARCHAR(20) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE role (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(45) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE surgery_notification (id INT AUTO_INCREMENT NOT NULL, start_date DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', en_date DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', speciality VARCHAR(255) NOT NULL, description VARCHAR(2000) NOT NULL, number_ao_needed INT NOT NULL, number_ao_spot_left INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE surgical_specialty (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, surgical_speciality_id INT DEFAULT NULL, fk_role_id INT NOT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, name VARCHAR(45) NOT NULL, firstname VARCHAR(45) NOT NULL, adress VARCHAR(500) NOT NULL, posta_code INT NOT NULL, city VARCHAR(255) NOT NULL, phone_number VARCHAR(20) DEFAULT NULL, rpps INT NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), INDEX IDX_8D93D64911C33BDE (surgical_speciality_id), INDEX IDX_8D93D649262C1F80 (fk_role_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_surgery_notification (user_id INT NOT NULL, surgery_notification_id INT NOT NULL, INDEX IDX_4B90834AA76ED395 (user_id), INDEX IDX_4B90834A423C3CF0 (surgery_notification_id), PRIMARY KEY(user_id, surgery_notification_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_clinic (user_id INT NOT NULL, clinic_id INT NOT NULL, INDEX IDX_62D1E389A76ED395 (user_id), INDEX IDX_62D1E389CC22AD4 (clinic_id), PRIMARY KEY(user_id, clinic_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user_availability (user_id INT NOT NULL, availability_id INT NOT NULL, INDEX IDX_BF7BDEBDA76ED395 (user_id), INDEX IDX_BF7BDEBD61778466 (availability_id), PRIMARY KEY(user_id, availability_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64911C33BDE FOREIGN KEY (surgical_speciality_id) REFERENCES surgical_specialty (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D649262C1F80 FOREIGN KEY (fk_role_id) REFERENCES role (id)');
        $this->addSql('ALTER TABLE user_surgery_notification ADD CONSTRAINT FK_4B90834AA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_surgery_notification ADD CONSTRAINT FK_4B90834A423C3CF0 FOREIGN KEY (surgery_notification_id) REFERENCES surgery_notification (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_clinic ADD CONSTRAINT FK_62D1E389A76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_clinic ADD CONSTRAINT FK_62D1E389CC22AD4 FOREIGN KEY (clinic_id) REFERENCES clinic (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_availability ADD CONSTRAINT FK_BF7BDEBDA76ED395 FOREIGN KEY (user_id) REFERENCES user (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user_availability ADD CONSTRAINT FK_BF7BDEBD61778466 FOREIGN KEY (availability_id) REFERENCES availability (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user_availability DROP FOREIGN KEY FK_BF7BDEBD61778466');
        $this->addSql('ALTER TABLE user_clinic DROP FOREIGN KEY FK_62D1E389CC22AD4');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D649262C1F80');
        $this->addSql('ALTER TABLE user_surgery_notification DROP FOREIGN KEY FK_4B90834A423C3CF0');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64911C33BDE');
        $this->addSql('ALTER TABLE user_surgery_notification DROP FOREIGN KEY FK_4B90834AA76ED395');
        $this->addSql('ALTER TABLE user_clinic DROP FOREIGN KEY FK_62D1E389A76ED395');
        $this->addSql('ALTER TABLE user_availability DROP FOREIGN KEY FK_BF7BDEBDA76ED395');
        $this->addSql('DROP TABLE availability');
        $this->addSql('DROP TABLE clinic');
        $this->addSql('DROP TABLE role');
        $this->addSql('DROP TABLE surgery_notification');
        $this->addSql('DROP TABLE surgical_specialty');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE user_surgery_notification');
        $this->addSql('DROP TABLE user_clinic');
        $this->addSql('DROP TABLE user_availability');
    }
}
