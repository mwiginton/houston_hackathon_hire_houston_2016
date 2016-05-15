
CREATE DATABASE IF NOT EXISTS hire_houston;
USE hire_houston;

ALTER TABLE organization ADD CONSTRAINT fk_organization_appuser_id FOREIGN KEY(user_id) REFERENCES appuser(user_id);

ALTER TABLE employee ADD CONSTRAINT fk_employee_organization FOREIGN KEY(organization_user_id) REFERENCES organization(user_id);

ALTER TABLE employer ADD CONSTRAINT fk_employer_user FOREIGN KEY(user_id) REFERENCES appuser(user_id);

ALTER TABLE job ADD CONSTRAINT fk_job_employer FOREIGN KEY(employer_user_id) REFERENCES employer(user_id);

ALTER TABLE employee_tag ADD CONSTRAINT fk_employee_tag_employee FOREIGN KEY(employee_id) REFERENCES employee(employee_id);

ALTER TABLE employee_tag ADD CONSTRAINT fk_employee_tag_tag FOREIGN KEY(tag_id) REFERENCES tag(tag_id);

ALTER TABLE job_tag ADD CONSTRAINT fk_job_tag_job FOREIGN KEY(job_id) REFERENCES job(job_id);

ALTER TABLE job_tag ADD CONSTRAINT fk_job_tag_tag FOREIGN KEY(tag_id) REFERENCES tag(tag_id);



