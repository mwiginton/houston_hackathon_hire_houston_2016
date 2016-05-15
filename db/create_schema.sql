
CREATE DATABASE IF NOT EXISTS hire_houston;
USE hire_houston;

CREATE TABLE IF NOT EXISTS appuser
(
    user_id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(512) NOT NULL,
    password VARCHAR(256) NOT NULL,
    type INT NOT NULL
);

CREATE TABLE IF NOT EXISTS organization
(
    user_id INT NOT NULL,
    name VARCHAR(512) NOT NULL,
    phone VARCHAR(13)
);

CREATE TABLE IF NOT EXISTS employee
(
    employee_id INT PRIMARY KEY AUTO_INCREMENT,
    organization_user_id INT NOT NULL,
    first_name VARCHAR(512) NOT NULL,
    last_name VARCHAR(512) NOT NULL,
    phone VARCHAR(13),
    address VARCHAR(256),
    state VARCHAR(2),
    zip VARCHAR(10),
    city VARCHAR(128),
    email VARCHAR(256),
    start_date DATETIME,
    end_date DATETIME
);

CREATE TABLE IF NOT EXISTS employer
(
    user_id INT NOT NULL,
    name VARCHAR(512) NOT NULL,
    phone VARCHAR(13)
);

CREATE TABLE IF NOT EXISTS job
(
    job_id INT PRIMARY KEY AUTO_INCREMENT,
    employer_user_id INT NOT NULL,
    title VARCHAR(512) NOT NULL,
    description VARCHAR(1024) NOT NULL,
    salary VARCHAR(256),
    start_date DATETIME,
    end_date DATETIME
);

CREATE TABLE IF NOT EXISTS tag
(
    tag_id VARCHAR(128) PRIMARY KEY
);

CREATE TABLE IF NOT EXISTS employee_tag
(
    employee_id INT NOT NULL,
    tag_id VARCHAR(128) NOT NULL
);

CREATE TABLE IF NOT EXISTS job_tag
(
    job_id INT NOT NULL,
    tag_id VARCHAR(128) NOT NULL
);

ALTER TABLE organization ADD CONSTRAINT fk_organization_appuser_id FOREIGN KEY(user_id) REFERENCES appuser(user_id);

ALTER TABLE employee ADD CONSTRAINT fk_employee_organization FOREIGN KEY(organization_user_id) REFERENCES organization(user_id);

ALTER TABLE employer ADD CONSTRAINT fk_employer_user FOREIGN KEY(user_id) REFERENCES appuser(user_id);

ALTER TABLE job ADD CONSTRAINT fk_job_employer FOREIGN KEY(employer_user_id) REFERENCES employer(user_id);

ALTER TABLE employee_tag ADD CONSTRAINT fk_employee_tag_employee FOREIGN KEY(employee_id) REFERENCES employee(employee_id);

ALTER TABLE employee_tag ADD CONSTRAINT fk_employee_tag_tag FOREIGN KEY(tag_id) REFERENCES tag(tag_id);

ALTER TABLE job_tag ADD CONSTRAINT fk_job_tag_job FOREIGN KEY(job_id) REFERENCES job(job_id);

ALTER TABLE job_tag ADD CONSTRAINT fk_job_tag_tag FOREIGN KEY(tag_id) REFERENCES tag(tag_id);