<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220106095053 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE cps_card_owner (id INT AUTO_INCREMENT NOT NULL, identification_national_pp VARCHAR(12) NOT NULL, nom_dexercice VARCHAR(255) NOT NULL, prenom_dexercice VARCHAR(255) NOT NULL, code_profession INT NOT NULL, code_categorie_professionnelle VARCHAR(1) NOT NULL, numero_carte VARCHAR(10) NOT NULL, date_debut_validite DATE NOT NULL, date_fin_validite DATE NOT NULL, date_opposition DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');

    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE cps_card_owner');
    }
}
