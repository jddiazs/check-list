CREATE TABLE check_list (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, descriptor LONGTEXT, prefix VARCHAR(255), threshold BIGINT NOT NULL, status TEXT NOT NULL, versionat TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE criteria (id BIGINT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, check_list_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX check_list_id_idx (check_list_id), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE criteria ADD CONSTRAINT criteria_check_list_id_check_list_id FOREIGN KEY (check_list_id) REFERENCES check_list(id) ON DELETE CASCADE;
