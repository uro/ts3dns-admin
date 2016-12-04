<?php

namespace Application\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20161204004314 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE jtsdns CHANGE ip_address ipaddress VARCHAR(100) NOT NULL, CHANGE is_enabled enabled TINYINT(1) NOT NULL, CHANGE last_used lastused INT DEFAULT NULL, CHANGE use_count usecount INT NOT NULL');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_10D9C1B1E551C011 ON jtsdns (hostname)');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() != 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP INDEX UNIQ_10D9C1B1E551C011 ON jtsdns');
        $this->addSql('ALTER TABLE jtsdns CHANGE ipaddress ip_address VARCHAR(100) NOT NULL COLLATE utf8_unicode_ci, CHANGE enabled is_enabled TINYINT(1) NOT NULL, CHANGE lastused last_used INT DEFAULT NULL, CHANGE usecount use_count INT NOT NULL');
    }
}
