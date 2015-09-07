-- DROP SEQUENCE gcr_institution_catalog_courses_id_seq;

CREATE SEQUENCE gcr_institution_catalog_courses_id_seq
  INCREMENT 1
  MINVALUE 1
  MAXVALUE 9223372036854775807
  START 31694
  CACHE 1;
ALTER TABLE gcr_institution_catalog_courses_id_seq
  OWNER TO gc4_admin;

-- Table: gcr_institution_catalog_courses

-- DROP TABLE gcr_institution_catalog_courses;

CREATE TABLE gcr_institution_catalog_courses
(
  id integer NOT NULL DEFAULT nextval('gcr_institution_catalog_courses_id_seq'::regclass),
  institution_short_name character varying(256) NOT NULL,
  catalog_short_name character varying(256) NOT NULL,
  courses_count integer NOT NULL DEFAULT 0,
  platform_short_name character varying(256) NOT NULL,
  product_type_id integer NOT NULL DEFAULT 0,
  CONSTRAINT gcr_institution_catalog_courses_pkey PRIMARY KEY (id)
)
WITH (
  OIDS=FALSE
);
ALTER TABLE gcr_institution_catalog_courses
  OWNER TO gc4_admin;